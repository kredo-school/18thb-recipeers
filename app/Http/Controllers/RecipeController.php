<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    private $recipe;

    public function __construct(Recipe $recipe){
        $this->recipe = $recipe;
    }

    public function create()
    {
        return view('users.recipe.createRecipe');
    }

    public function edit()
    {
        return view('users.recipe.edit-recipe');
    }
}
