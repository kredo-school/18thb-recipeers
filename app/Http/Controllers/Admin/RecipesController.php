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

    public function show(Request $request){
        $search = $request->input('search');

        $recipes = Recipe::query();

        if($search){
            $recipes->select('recipes.*', 'users.username AS user', 'categories.name AS category', 'countries.name AS country', 'eating_preferences.name AS eating_pref', 'pref_occasions.name AS occasion', 'meal_types.name AS meal_type')
                ->withTrashed()
                ->join('users', 'users.id', '=', "recipes.user_id")
                ->join('categories', 'categories.id', '=', "recipes.category_id")
                ->join('countries', 'countries.id', '=', 'recipes.country_id')
                ->join('eating_preferences', 'eating_preferences.id', '=', 'recipes.eating_pref_id')
                ->join('pref_occasions', 'pref_occasions.id', '=', 'recipes.occasion_id')
                ->join('meal_types', 'meal_types.id', '=', 'recipes.meal_type_id')
                ->where(function ($query) use ($search){
                    $query->orWhere('recipes.title', 'LIKE', "%$search%")
                    ->orWhere('users.username', 'LIKE', "%$search%")
                    ->orWhere('recipes.summary', 'LIKE', "%$search%")
                    ->orWhere('categories.name', 'LIKE', "%$search%")
                    ->orWhere('countries.name', 'LIKE', "%$search%")
                    ->orWhere('eating_preferences.name', 'LIKE', "%$search%")
                    ->orWhere('pref_occasions.name', 'LIKE', "%$search%")
                    ->orWhere('meal_types.name', 'LIKE', "%$search%")
                    ->orWhere('recipes.prep_time', 'LIKE', "%$search%")
                    ->orWhere('recipes.status', 'LIKE', "%$search%");
            });
        }else{
            $recipes = Recipe::withTrashed()
                ->select('recipes.*', 'users.username AS user', 'categories.name AS category', 'countries.name AS country', 'eating_preferences.name AS eating_pref', 'pref_occasions.name AS occasion', 'meal_types.name AS meal_type')
                ->join('users', 'users.id', '=', "recipes.user_id")
                ->join('categories', 'categories.id', '=', "recipes.category_id")
                ->join('countries', 'countries.id', '=', 'recipes.country_id')
                ->join('eating_preferences', 'eating_preferences.id', '=', 'recipes.eating_pref_id')
                ->join('pref_occasions', 'pref_occasions.id', '=', 'recipes.occasion_id')
                ->join('meal_types', 'meal_types.id', '=', 'recipes.meal_type_id');
        };

        $recipes = $recipes->paginate(10);

        foreach ($recipes as $recipe) {
            $recipe->user = $recipe->user_id ? DB::table('users')
                    ->where('id', $recipe->user_id)
                    ->value('username') : null;
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

        return view('admin.list-of-recipes', [
            'recipes' => $recipes,
            'search' => $search,
        ]);
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
