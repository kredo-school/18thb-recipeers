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

    public function show(){
        $all_inquiries = $this->inquiry->latest()->paginate(10);

        return view('admin.list-of-inquiries')
                ->with('all_inquiries', $all_inquiries);
    }

    public function detail($id){
        $inquiry = $this->inquiry->findOrFail($id);
        $all_admins = User::where('role_id', 1)->get();
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
        $inquiry->history = $request->history;
        $inquiry->save();

        return redirect()->route('admin.inquiry.show');
    }
}
