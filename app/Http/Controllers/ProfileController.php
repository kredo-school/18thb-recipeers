<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Recipe;

class ProfileController extends Controller
{
    //
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('users.account.profile-detail');
    }

    public function show($id)
    {
        $user = $this->user->findOrFail($id);
        $recipes = Recipe::where('user_id', $user->id)->paginate(12);

        return view('users.account.profile-detail', compact('user', 'recipes'));
    }

    public function edit()
    {
        return view('users.account.edit-account');
    }
}
