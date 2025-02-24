<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\TemporaryAppCode;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        if (!auth()->user()) {
            return view('pages.auth.signin-cover');
        } else {
            return redirect('/home');
        }
    }

    // public function appCodeSet(Request $request)
    // {
    //     TemporaryAppCode::updateOrCreate([
    //         'id' => 1
    //     ], ['appCode' => $request->appCode]);

    //     return response()->json(['success' => "App Changed"]);
    // }
}
