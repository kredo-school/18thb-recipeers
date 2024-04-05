<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\User;

class InquiryController extends Controller
{
    private $inquiry;

    public function __construct(Inquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    public function index()
    {
        return view('inquiry');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|min:1',
            'body' => 'required|min:1',
            'name' => 'required|min:1',
            'email' => 'required|email|unique:inquiries,email',
            'agreement' => 'required|accepted'
        ]);

        $user = User::where('email', $request->email)->first();
        $user_id = $user ? $user->id : null;

        $this->inquiry->title = $request->title;
        $this->inquiry->body = $request->body;
        $this->inquiry->inquirer_name = $request->name;
        $this->inquiry->email = $request->email;
        $this->inquiry->user_id = $user_id;
        $this->inquiry->save();

        return redirect()->route('home');
    }
}
