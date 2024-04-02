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

    // public function index(){    // (Request $request)    // 一部修正してProfileControllerに書くことにした（tk）
    //     $recipes = Recipe::pagenate(12);
    //     $chunkedRecipes = $recipes->chunk(3);

    //     return view('recipes.index', compact('chunkedRecipes'))
    //         ->with('recipes', $recipes);
    // }

    public function create()
    {
        return view('users.recipe.createRecipe');
    }

    public function edit()
    {
        return view('users.recipe.edit-recipe');
    }
}
