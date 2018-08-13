<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveRequest;
use App\Department;
use App\Designation;
use App\Admin;
use App\User;
use Session;
use Mail;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.welcome');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function postContact(Request $request){
        $this->validate($request,[
            'email'   => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email'       => $request->email,
            'subject'     => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact',$data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('ceo@nexus.co');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was successfully sent.');
        return redirect('/contact');
    }

    public function inbox(){

        $user_id = Auth::user()->id;
        $requests = LeaveRequest::all()->where('user_id', '=', $user_id);
        
        return view('notification.inbox')->withRequests($requests);
    }

    public function android(){
        return view('pages.android');
    }
    
    public function web(){
        return view('pages.web');
    }

    public function ios(){
        return view('pages.ios');
    }

}
