<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\TvApp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\AdminRegistered;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\DataTables\TvAdminUserDataTable;
use App\Http\Requests\TvAdminUserRequest;
use App\Models\FilmMakerContent;
use App\Models\TemporaryAppCode;
use App\Models\TrackViewer;
use App\Models\UserTrail;
use Illuminate\Support\Facades\Auth;

class TvAdminUserController extends Controller
{
    protected $currentApp;

    public function __construct()
    {
        // Ensure the user is authenticated
        $this->middleware(function ($request, $next) {
            $userCode = auth()->user()->code;
            // $this->currentApp = TemporaryAppCode::where('user_code', $userCode)->first();
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index(TvAdminUserDataTable $dataTable)
    {
        return $dataTable->render('pages.adminuser.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TvAdminUserRequest $request)
    {
        $currentApp = $this->currentApp;
        $validatedData = $request->validated();
        // $code = Str::random(32);
        // $validatedData['code'] = $code;
        // $validatedData['app_code'] = implode(',', $validatedData['app_code']);
        $adminuser = User::create($validatedData);

        if ($adminuser) {
            return $this->successMessageResponse("Admin User Created Successfully", 201);
        } else {
            return $this->errorResponse(__('Admin Not created'), 422);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(User $adminuser)
    {
        // $adminuser->roles();
        // $role = DB::table('roles')->where('name',  $adminuser->role)->value('name') ?? null;
        // if (empty($role)) {
        //     $role = $adminuser->roles()->pluck('name')->first();
        // }
        // $adminuser->setAttribute('role', $role);
        return $adminuser;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TvAdminUserRequest $request, User $adminuser)
    {

        $currentApp = $this->currentApp;
        $validatedData = $request->validated();
        if (isset($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            $validatedData['password'] = $validatedData['oldpassword'];
        }

        $adminuser->update($validatedData);

        if ($adminuser) {
            return $this->successMessageResponse("Admin User Updated", 201);
        } else {
            return $this->errorResponse(__('Admin User not Updated'), 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $adminuser)
    {
        DB::transaction(function () use ($adminuser) {
            // Delete the user's image if it exists
            // Finally, delete the user account
            $adminuser->delete();
        }, 2);

        return response()->json(['success' => __('Tv App User Deleted Successfully')]);
    }
}
