<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Support\Facades\Log;

class IngredientController extends Controller
{
    private $ingredient;

    public function __construct(Ingredient $ingredient, Recipe $recipe) {
        $this->ingredient = $ingredient;
        $this->recipe = $recipe;
    }

    public function store(Request $request) {
        log::debug($request->input('ing_input0'));
        $this->ingredient->name = $request->input('ing_input0');
        $this->ingredient->amount = $request->input('amount_input0');
        $this->ingredient->save();
    }
}
