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
    public function resetPasswordShow()
    {
        return view('users.resetPassword');
    }
}
