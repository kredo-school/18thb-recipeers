<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function Show($id){
        $user_a = $this->user->findOrFail($id);

        return view('users.account.profile-detail')
                ->with('user', $user_a);
    }

    public function edit(){
        return view('users.account.edit-account');
    }


}
