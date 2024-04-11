<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function index()
    {
        return view('users.search-results');
    }
    public function reset_password_show()
    {
        return view('users.reset-password');
    }

    public function softDelete($id){
        $this->user->destroy($id);

        return redirect()->route('home');
    }
}
