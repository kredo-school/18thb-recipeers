<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\User;

class InquiriesController extends Controller
{
    private $inquiry;

    public function __construct(Inquiry $inquiry){
        $this->inquiry = $inquiry;
    }

    // public function show(){
    //     $all_inquiries = $this->inquiry->latest()->paginate(10);

    //     return view('admin.list-of-inquiries')
    //             ->with('all_inquiries', $all_inquiries);
    // }

    public function detail($id){
        $inquiry = $this->inquiry->findOrFail($id);

        return view('admin.inquiry-detail')
                ->with('inquiries', $inquiry);
    }

    public function update(Request $request, $id){
        $inquiry = $this->inquiry->findOrFail($id);
    }
}
