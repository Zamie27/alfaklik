<?php

namespace App\Controllers;

class User extends BaseController
{
    public function pelanggan_home()
    {
        return view('users/pelanggan/dashboard');
    }
}
