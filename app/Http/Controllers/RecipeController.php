<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use App\Models\EatingPreference;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;

class RecipeController extends Controller
{
    private $recipe;
    private $category;
    private $eat_pref;

    public function __construct(Recipe $recipe, Category $category, EatingPreference $eat_pref)
    {
        $this->recipe = $recipe;
        $this->category = $category;
        $this->eat_pref = $eat_pref;
    }

    public function index()
    {
        return view('users.recipe.all-recipes');
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
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg, png, jpg, gif|max:2048'
        ]);

        $this->recipe->user_id = 1;
        $this->recipe->title = $request->input('title');

        // getting thumbnail
        if($request->hasFile('thumbnail')) {
            $recipe_thumb = uniqid().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('/public/assets/images'), $recipe_thumb);
            $this->recipe->thumbnail = $recipe_thumb;
        }

        $this->recipe->summary = $request->input('summary');
        $this->recipe->prep_time = $request->input('prep_time');
        $this->recipe->status = 'active';
        $this->recipe->save();

        // getting category
        $categoryName = $request->input('category');
        $category = Category::where('name', $categoryName)->first();
        if(!$category) {
            $category = new Category();
            $category->name = $categoryName;
            $category->save();
        }
        $this->recipe->categories()->attach($category->id);

        // getting eat_pref
        $eatPrefName = $request->input('eat_pref');
        $eat_pref = EatingPreference::where('name', $eatPrefName)->first();
        if(!$eat_pref) {
            $eat_pref = new EatingPreference();
            $eat_pref->name = $eatPrefName;
            $eat_pref->save();
        }
        $this->recipe->eatPrefs()->attach($eat_pref->id);

        // getting ingredient
        $ingName = $request->input('ing_input0');
        $amoName = $request->input('amount_input0');
        $ingredient = Ingredient::where('name', $ingName)->first();
        $ingredient = Ingredient::where('amount', $amoName)->first();
        if(!$ingredient) {
            $ingredient = new Ingredient();
            $ingredient->name = $ingName;
            $ingredient->amount = $amoName;
            $ingredient->save();
        }
        $this->recipe->ingredients()->attach($ingredient->id);

        return view('users.recipe.recipe-detail');
    }

    public function show() {

        return view('users.recipe.recipe-detail');
    }

    public function edit()
    {
        return view('users.recipe.edit-recipe');
    }
}
