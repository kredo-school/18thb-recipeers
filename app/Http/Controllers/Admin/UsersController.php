<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UsersController extends Controller
{
    private $user;
    private $recipe;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function index()
    {
        return view('admin.home');
    }

    public function show(Request $request){
        $search = $request->input('search');

        $users = User::query();

        if ($search) {
            $users->select('users.*', 'eating_preferences.name AS eating_pref', 'genders.gender', 'countries.name AS nationality', 'job_statuses.name AS job_status')
                ->withTrashed()
                ->join('eating_preferences', 'eating_preferences.id', '=', 'users.eating_pref_id')
                ->join('genders', 'genders.id', '=', 'users.gender_id')
                ->join('countries', 'countries.id', '=', 'users.nationality_id')
                ->join('job_statuses', 'job_statuses.id', '=', 'users.job_status_id')
                ->where(function ($query) use ($search) {
                    $query->orWhere('users.username', 'LIKE', "%$search%")
                        ->orWhere('users.email', 'LIKE', "%$search%")
                        ->orWhere('eating_preferences.name', 'LIKE', "%$search%")
                        ->orWhere('genders.gender', 'LIKE', "%$search%")
                        ->orWhere('countries.name', 'LIKE', "%$search%")
                        ->orWhere('job_statuses.name', 'LIKE', "%$search%")
                        ->orWhere('users.status', 'LIKE', "%$search%");
                });
        } else {
            $users = User::withTrashed()
                ->select('users.*', 'eating_preferences.name AS eating_pref', 'genders.gender', 'countries.name AS nationality', 'job_statuses.name AS job_status')
                ->join('eating_preferences', 'eating_preferences.id', '=', 'users.eating_pref_id')
                ->join('genders', 'genders.id', '=', 'users.gender_id')
                ->join('countries', 'countries.id', '=', 'users.nationality_id')
                ->join('job_statuses', 'job_statuses.id', '=', 'users.job_status_id');
        }

        $users = $users->paginate(10);

        foreach ($users as $user) {
            $user->gender = $user->gender_id ? DB::table('genders')
                    ->where('id', $user->gender_id)
                    ->value('gender') : null;
            $user->eating_pref = $user->eating_pref_id ? DB::table('eating_preferences')
                    ->where('id', $user->eating_pref_id)
                    ->value('name') : null;
            $user->job_status = $user->job_status_id ? DB::table('job_statuses')
                    ->where('id', $user->job_status_id)
                    ->value('name') : null;
            $user->nationality = $user->nationality_id ? DB::table('countries')
                    ->where('id', $user->nationality_id)
                    ->value('name') : null;
            $user->residence_city = $user->residence_city_id ? DB::table('cities')  
                    ->where('id', $user->residence_city_id)
                    ->value('name') : null;
        }
        
        return view('admin.list-of-accounts', [
            'users' => $users,
            'search' => $search,
        ]);
    }

    public function deactivate($id){
        $user = $this->user->findOrFail($id);
        $user->delete();

        $user->status = "deactivated";
        $user->update();

        return redirect()->back();
    }

    public function activate($id){
        $user = $this->user->onlyTrashed()->findOrFail($id);
        $user->restore();

        $user->status = "active";
        $user->update();
        
        return redirect()->back();
    }
}
