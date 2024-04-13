<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function show(){
        $all_users = User::orderBy('id', 'asc')->withTrashed()->paginate(10);

        foreach ($all_users as $user) {
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
        
        return view('admin.list-of-accounts')
                ->with('all_users', $all_users);
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
