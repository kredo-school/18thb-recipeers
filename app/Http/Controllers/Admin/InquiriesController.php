<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\User;

class InquiriesController extends Controller
{
    private $inquiry;

    public function __construct(Inquiry $inquiry, User $admin){
        $this->inquiry = $inquiry;
        $this->user = $admin;
    }

    public function show(Request $request){
        $search = $request->input('search');

        $inquiries = Inquiry::query();

        if($search){
            $inquiries->select('inquiries.*', 'user.username AS inquirer', 'admin.username AS admin')
                ->leftJoin('users as user', 'user.id', '=', 'inquiries.user_id')
                ->leftJoin('users as admin', 'admin.id', '=', 'inquiries.admin_id')
                ->where(function ($query) use ($search){
                    $query->orWhere('user.username', 'LIKE', "%$search%")
                        ->orWhere('inquiries.inquirer_name', 'LIKE', "%$search%")
                        ->orWhere('inquiries.email', 'LIKE', "%$search%")
                        ->orWhere('inquiries.title', 'LIKE', "%$search%")
                        ->orWhere('admin.username', 'LIKE', "%$search%")
                        ->orWhere('inquiries.status', 'LIKE', "%$search%");
            });
        }else{
            $inquiries = Inquiry::select('inquiries.*', 'user.username AS inquirer', 'admin.username AS admin')
                ->leftJoin('users as user', 'user.id', '=', 'inquiries.user_id')
                ->leftJoin('users as admin', 'admin.id', '=', 'inquiries.admin_id');
        }

        $inquiries = $inquiries->paginate(10);

        return view('admin.list-of-inquiries', [
            'inquiries' => $inquiries,
            'search' => $search,
        ]);
    }

    public function detail($id){
        $inquiry = $this->inquiry->findOrFail($id);
        $all_admins = User::where('role_id', 1)->get();
        $admin = $inquiry->admin()->first();

        $statuses = [
            'Received' => 'Received',
            'In Progress' => 'In progress',
            'Pending' => 'Pending',
            'Resolved' => 'Resolved',
            'Cancelled' => 'Cancelled'
        ];

        return view('admin.inquiry-detail')
                ->with('inquiry', $inquiry)
                ->with('all_admins', $all_admins)
                ->with('admin', $admin)
                ->with('statuses', $statuses);
    }

    public function update(Request $request, $id){
        $request->validate([
            'status' => 'required',
            'admin' => 'required',
            'history' => 'required|min:1',
        ]);

        $inquiry = $this->inquiry->findOrFail($id);

        $inquiry->admin_id = $request->admin;
        $inquiry->status = $request->status;
        $inquiry->history = $request->history;
        $inquiry->save();

        return redirect()->route('admin.inquiries.show');
    }
}
