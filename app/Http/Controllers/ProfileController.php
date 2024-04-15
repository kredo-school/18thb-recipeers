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

    public function edit(){
        $user = $this->user->findOrFail(Auth::user()->id);
        return view('users.account.edit-account')
            ->with('user', $user);
    }

    // public function store(Request $request){
    //     $request->validate([
    //         'avatar' => 'nullable|max:1048|mimes:jpeg,jpg,png,gif',
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . (Auth::check() ? Auth::user()->id : null),
    //         'password' => 'required|string|min:8|confirmed',
    //         'birthday' => 'nullable|',
    //         'gender' => 'nullable|',
    //         'eating_preference' => 'nullable|',
    //         'nationality' => 'nullable|',
    //         'city_of_residence' => 'nullable|',
    //         'job_status' => 'nullable|',
    //         'introduction' => 'nullable|max:300',
    //     ]);

    //     $user = $this->user->findOrFail(Auth::user()->id);

    //     // if($request->avatar){
    //     //     $user->avatar = 'data:image/'.$request->avatar->extension().';base64,'.base64_encode(file_get_contents($request->avatar));
    //     // };

    //     $this->user->avatar ='data:image/'.$request->avatar->extension().';base64,'.base64_encode(file_get_contents($request->avatar));
    //     $this->user->username = $request->username;
    //     $this->user->email = $request->email;
    //     $this->user->password = $request->password;

    //     $this->user->birthday = $request->birthday;
    //     $this->user->gender_id = $request->gender;
    //     $this->user->eating_pref_id = $request->eating_pref;
    //     $this->user->nationality_id = $request->nationality;
    //     $this->user->residence_city_id = $request->residence_city;
    //     $this->user->job_status_id = $request->job_status;
    //     $this->user->introduction = $request->introduction;

    //     $this->user->save();

    //     return redirect()->route('profile.show', Auth::user()->id);
    // }

    public function update(Request $request){
        // $user = User::findOrFail($id);

        $request->validate([
            'avatar' => 'nullable|image|max:1048|mimes:jpeg,jpg,png,gif',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . (Auth::check() ? Auth::user()->id : null),
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'nullable|date',
            'gender' => 'required|in:male,female,other',
            'eating_preference' => 'required',
            'nationality' => 'nullable',
            'city_of_residence' => 'nullable',
            'job_status' => 'required',
            'introduction' => 'nullable|max:255',
        ]);

        $user = $this->user->findOrFail(Auth::user()->id);

        if($request->avatar){
            $user->avatar = 'data:image/'.$request->avatar->extension().';base64,'.base64_encode(file_get_contents($request->avatar));
        };

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->birthday = $request->birthday;
        $user->gender_id = $request->gender;
        $user->eating_pref_id = $request->eating_pref;
        $user->nationality_id = $request->nationality;
        $user->residence_city_id = $request->residence_city;
        $user->job_status_id = $request->job_status;
        $user->introduction = $request->introduction;

        $user->save();

        return redirect()->route('profile.show', Auth::user()->id);
    }
}
