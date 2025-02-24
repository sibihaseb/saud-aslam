<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    //Google callback
    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }

    //Facebook Login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    //facebook callback
    public function handleFacebookCallback()
    {

        $user = Socialite::driver('facebook')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }

    //Github Login
    public function redirectToGithub()
    {
        return Socialite::driver('github')->stateless()->redirect();
    }

    //github callback
    public function handleGithubCallback()
    {

        $user = Socialite::driver('github')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect()->route('home');
    }

    protected function _registerorLoginUser($data)
    {
        $user = User::where('email', $data->email)->first();

        if (!$user) {
            $user = new User();

            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;

            $user->save();
        }

        Auth::login($user);
    }
}
