<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Inquiry;

class AdminController extends Controller
{
    public function show()
    {
        $userCount = User::count();
        $recipeCount = Recipe::count();
        $inquiryCount = Inquiry::count();
        
        return view('admin.home', compact('userCount', 'recipeCount', 'inquiryCount'));
    }
}
