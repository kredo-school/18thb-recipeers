<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function reset_password_show()
    {
        return view('users.reset-password');
    }
}
