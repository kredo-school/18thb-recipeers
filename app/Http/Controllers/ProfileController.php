<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
        // dd($request->all());
        try {
        Log::info('Update request data: ' . json_encode($request->all()));
            $user = User::findOrFail(Auth::id());
            $rules = [
                'avatar' => 'nullable|image|max:1048|mimes:jpeg,jpg,png,gif',
                'username' => 'required|string|max:255',
                'email' => 'string|email|max:255|unique:users,email,' . $user->id,
                'password' => 'required|string|min:8|confirmed',
                'birthday' => 'nullable|date',
                'gender_id' => 'nullable|integer',
                'eating_pref_id' => 'nullable|integer',
                'nationality_id' => 'nullable',
                'residence_city_id' => 'nullable',
                'job_status_id' => 'nullable|integer',
                'introduction' => 'nullable|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ];
            $request->validate($rules);

            if ($request->hasFile('image')) {
                Log::info('Attempting to store file');
                Storage::disk('public')->makeDirectory('assets/avatars');

                $avatarName = $request->file('image')->getClientOriginalName();
                $stored = $request->file('image')->storeAs('assets/avatars', $avatarName, 'public');
                // Log::info('Uploaded file path: ' . $request->file('image')->path());
                if ($stored) {
                    Log::info('File stored successfully');

                    if ($request->user()->avatar) {
                        Log::info('Deleting old avatar: ' . $request->user()->avatar);
                        Storage::disk('public')->delete('assets/avatars/' . $request->user()->avatar);
                    }
                    // $request->$user->avatar = $avatarName;
                    $user->update(['avatar' => $avatarName]);

                    // $request->$user()->save();

                } else {
                    Log::error('Failed to store file');
                }

            }
            if (!$request->filled('password')) {
                unset($rules['password']);
            }

            // Handle avatar upload
            // if($request->hasFile('avatar')) {
            //     $avatar = $request->file('avatar');
            //     $avatarName = time() . '_' . $avatar->getClientOriginalName();
            //     $avatar->move(public_path('avatars'), $avatarName);
            //     $user->avatar = 'avatars/' . $avatarName;
            // }
            $fieldsToUpdate = ['username', 'email', 'password', 'birthday', 'gender_id', 'eating_pref_id', 'nationality_id', 'residence_city_id', 'job_status_id', 'introduction'];
            foreach ($fieldsToUpdate as $field) {
                if ($request->filled($field)) {
                    $user->$field = $request->input($field);
                }
            }
            // dd($user->toArray());
            $user->save();

            return redirect()->route('profile.show', $user->id);
        } catch (\Exception $e) {
            Log::error('Error updating profile: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while updating profile. Please try again.');
        }
    }
}
