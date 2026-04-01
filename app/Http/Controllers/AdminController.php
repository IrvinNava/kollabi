<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function login()
    {
        return view('administrador.authentication.login');
    }

    public function signUp()
    {
        return view('administrador.authentication.sign-up');
    }

    public function forgotPassword()
    {
        return view('administrador.authentication.forgot-password');
    }

    public function resetPassword()
    {
        return view('administrador.authentication.reset-password');
    }

    public function signOut()
    {
        return view('administrador.authentication.sign-out');
    }

    public function dashboard()
    {
        return view('administrador.dashboard');
    }
    public function profile()
    {
        return view('administrador.perfil');
    }
}
