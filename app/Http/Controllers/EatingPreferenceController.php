<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EatingPreference;
use App\Models\Recipe;

class EatingPreferenceController extends Controller
{
    private $eat_pref;
    
    public function __construct(EatingPreference $eat_pref, Recipe $recipe) {
        $this->eat_pref = $eat_pref;
        $this->recipe = $recipe;
    }

    public function store(Request $request) {
        $this->eat_pref->name = ucwords(strtolower($request->input('eat_pref')));
        $this->eat_pref->save();
    }
}
