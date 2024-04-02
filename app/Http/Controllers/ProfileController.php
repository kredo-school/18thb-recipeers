<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Recipe;

class ProfileController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function Show($id){
        $user = $this->user->findOrFail($id);
        $recipes = Recipe::where('user_id', $user->id)->paginate(12);
        $chunkedRecipes = $recipes->chunk(3);

        return view('users.account.profile-detail', compact('user', 'recipes'));
                // ->with('user', $user);
    }

    public function edit(){
        return view('users.account.edit-account');
    }


}
