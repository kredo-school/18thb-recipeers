<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recipe;

class UsersController extends Controller
{
    private $user;
    private $recipe;

    public function __construct(User $user, Recipe $recipe){
        $this->user = $user;
        $this->recipe = $recipe;
    }

    public function index()
    {
        return view('admin.users.index');
    }

    public function show(){
        $all_users = $this->user->orderBy('id', 'asc')->paginate(10);

        return view('admin.list-of-accounts')
                ->with('all_users', $all_users);
    }

    // public function deactivate($id){
        
    // }

    // public function activate($id){

    // }
}
