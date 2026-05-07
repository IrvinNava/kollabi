<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    public function login()
    {
        return view('authentication.login');
    }

    public function signUp()
    {
        return view('authentication.sign-up');
    }

    public function forgotPassword()
    {
        return view('authentication.forgot-password');
    }

    public function resetPassword()
    {
        return view('authentication.reset-password');
    }

    public function signOut()
    {
        return view('authentication.sign-out');
    }
}
