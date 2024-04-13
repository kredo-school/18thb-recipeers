<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Recipe;

class ProfileController extends Controller
{
    //
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function show($id){
        $user = $this->user->findOrFail($id);
        $recipes = Recipe::where('user_id', $user->id)->paginate(12);

        return view('users.account.profile-detail')
            ->with('user', $user)
            ->with('recipes', $recipes);
    }

    public function edit($id){
        $user = $this->user->findOrFail($id);
        return view('users.account.edit-account')
            ->with('user', $user);
    }

    public function update(Request $request){

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = $this->user->findOrFail(Auth::user()->id);

        if($request->avatar){
            $user->avatar = $request->avatar;
        }

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->birthday = $request->birthday;
        $user->gender_id = $request->gender_id;
        $user->eating_pref_id = $request->eating_pref_id;
        $user->nationality_id = $request->nationality_id;
        $user->residence_city_id = $request->residence_city_id;
        $user->job_status_id = $request->job_status_id;
        $user->introduction = $request->introduction;

        $user->save();

        return redirect()->route('profile.show', Auth::user()->id);
    }
}
