<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Recipe;
use Auth;

class RecipeController extends Controller
{
    private $recipe;

    public function __construct(Recipe $recipe) {
        $this->recipe = $recipe;
    }

    public function create()
    {
        return view('users.recipe.create-recipe');
        // if(! Auth::guest()) {
        //     dd('login');
        // } else {
        //     dd('not login');
        // }
    }

    public function store(Request $request) {
        $recipe = new Recipe;
        Log::info($request);
        // $request->validate([
        //     'title' => 'required',
        //     'summary' => 'required',
        //     'thumbnail' => 'required|mimes:jpeg,jpg,png,gif|max:1048',
        //     'prep_time' => 'required',
        // ]);

        $this->recipe->user_id = 1;
        $this->recipe->title = $request->input('title');
        $this->recipe->summary = $request->input('summary');
        // $this->recipe->thumbnail = $request->input('recipe_thumb');
        $this->recipe->prep_time = $request->input('prep_time');
        $this->recipe->status = 'active';
        $this->recipe->save();

        return redirect()->route('index');
    }

    public function show() {

        return view('users.recipe.recipe-detail');
    }

    public function edit()
    {
        return view('users.recipe.edit-recipe');
    }
}
