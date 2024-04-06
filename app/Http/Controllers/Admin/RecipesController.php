<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;

class RecipesController extends Controller
{
    private $recipe;

    public function __construct(Recipe $recipe){
        $this->recipe = $recipe;
    }

    public function show(){
        $all_recipes = $this->recipe->latest()->paginate(10);

        return view('admin.list-of-recipes')
                ->with('all_recipes', $all_recipes);
    }

}
