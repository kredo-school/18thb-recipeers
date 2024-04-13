<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Recipe;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category, Recipe $recipe) {
        $this->category = $category;
        $this->recipe = $recipe;
    }

    public function store(Request $request) {
        $this->category->name = ucwords(strtolower($request->input('category')));
        $this->category->save();
    }
}
