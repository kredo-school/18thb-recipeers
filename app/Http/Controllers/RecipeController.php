<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function create()
    {
        return view('users.recipe.createRecipe');
    }

    public function edit()
    {
        return view('users.recipe.editRecipe');
    }
}
