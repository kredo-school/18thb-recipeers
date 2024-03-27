<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileDetailShow(){
        return view('users.account.profile-detail');
    }

    public function profileEdit($id){
        
    }
}
