<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;

class RecipeController extends Controller
{
    private $recipe;
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    public function index()
    {
        return view('users.recipe.all-recipes');
    }

    public function create()
    {
        return view('users.recipe.createRecipe');
    }

    public function show($id){
        $recipe = $this->recipe->findOrFail($id);
        return view('users.recipe.recipe-detail');
    }

    public function edit()
    {
        return view('users.recipe.edit-recipe');
    }
}
