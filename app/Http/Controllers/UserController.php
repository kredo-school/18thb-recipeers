<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('users.search-results');
    }
    public function reset_password_show()
    {
        return view('users.reset-password');
    }
}
