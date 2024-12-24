<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    public function login()
    {
        // Menampilkan view login
        return view('auth/login');
    }

    public function register()
    {
        // Menampilkan view register
        return view('auth/register');
    }
}
