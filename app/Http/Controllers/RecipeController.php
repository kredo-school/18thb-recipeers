<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RecipeController extends Controller
{
    public function create()
    {
        // return view('users.recipe.create-recipe');
        if(! Auth::guest()) {
            dd('login');
        } else {
            dd('not login');
        }
    }

    public function edit()
    {
        return view('users.recipe.edit-recipe');
    }
}
