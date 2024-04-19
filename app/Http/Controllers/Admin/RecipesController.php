<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Category;

class RecipesController extends Controller
{
    private $recipe;

    public function __construct(Recipe $recipe){
        $this->recipe = $recipe;
    }

    public function show(){
        $all_recipes = Recipe::latest()->withTrashed()->paginate(10);

        foreach ($all_recipes as $recipe) {
            $recipe->category = $recipe->category_id ? DB::table('categories')
                    ->where('id', $recipe->category_id)
                    ->value('name') : null;
            $recipe->country = $recipe->country_id ? DB::table('countries')
                    ->where('id', $recipe->country_id)
                    ->value('name') : null;
            $recipe->eating_pref = $recipe->eating_pref_id ? DB::table('eating_preferences')
                    ->where('id', $recipe->eating_pref_id)
                    ->value('name') : null;
            $recipe->meal_type = $recipe->meal_type_id ? DB::table('meal_types')  
                    ->where('id', $recipe->meal_type_id)
                    ->value('name') : null;
            $recipe->occasion = $recipe->occasion_id ? DB::table('pref_occasions')
                    ->where('id', $recipe->occasion_id)
                    ->value('name') : null;
        }

        return view('admin.list-of-recipes')
                ->with('all_recipes', $all_recipes);
    }

    public function hide($id){
        $recipe = $this->recipe->findOrFail($id);
        $recipe->delete();

        $recipe->status = "hidden";
        $recipe->update();

        return redirect()->back();
    }

    public function unhide($id){
        $recipe = $this->recipe->onlyTrashed()->findOrFail($id);
        $recipe->restore();
        
        $recipe->status = "visible";
        $recipe->update();
        
        return redirect()->back();
    }
}
