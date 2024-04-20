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
        // log::debug($request);

        $requestData = $request->input('ingData');
        $ingData = json_decode($requestData, true);

        // log::debug($ingData);

        // log::debug($this->ingredient);

        // log::debug($ingData['ing_input' . $i]);

        for ($i=0; $i<100; $i++) {
            if(isset($ingData['ing_input' . $i])) {
                $this->ingredient = new Ingredient();
                $this->ingredient->name = $ingData['ing_input' . $i];
                $this->ingredient->amount = $ingData['amo_input' . $i];
                $this->ingredient->save();

                // log::debug($this->ingredient);
            } else {
                break;
            }
        }
    }
}
