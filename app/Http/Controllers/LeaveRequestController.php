<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveRequest;
use App\User;
use App\Admin;
use App\Department;
use App\Designation;
use Session;
use Mail;
use Auth;


class LeaveRequestController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display all leave request.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Auth::user()->email;
        $requests = LeaveRequest::all()->where('headmail', '=', $email)->where('view', '=', 0);
        
        return view('Leave.leaveRequest')->withRequests($requests);
    }

    /**
     * Store a newly leave application in storage.
     *
     
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'headmail'       => 'required|max:55',
            'title'          => 'required|max:255',
            'application'    => 'required|max:255',
            'start_date'     => 'required|max:255',
            'end_date'       => 'required|max:255'
        ));

        $leave = new LeaveRequest;

        $leave->user_id     = Auth::user()->id;
        $leave->name        = Auth::user()->name;
        $leave->department  = Auth::user()->department->name;
        $leave->designation = Auth::user()->designation->name;
        $leave->headmail    = $request->headmail;
        $leave->title       = $request->title;
        $leave->application = $request->application;
        $leave->start_date  = $request->start_date;
        $leave->end_date    = $request->end_date;
        $leave->save();

        //for inbox
        
        $datetime1 = date_create($request->start_date);
        $datetime2 = date_create($request->end_date);
        $interval = date_diff($datetime1, $datetime2);

        Session::flash('success', 'Your Application is sent to the System Analyst(Head of the Department)');

        return redirect()->route('employees.show', Auth::user()->id);
    }

    /**
     * Display the leave application form.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $user = User::find($id);
        
        if ($user->designation->name == 'System Analyst') {
            $head = Admin::pluck('name','email');
            return view('Leave.leaveApplicationForm')->withHead($head);
        }

        else{

            $check = User::where([['department_id', '=', $user->department_id],
                              ['designation_id', '=', 8]])->first();
        
        
            if ($check->onLeave == 'no') {
                $head = User::where([['department_id', '=', $user->department_id],
                                    ['designation_id', '=', 8]])->pluck('name','email');

                return view('Leave.leaveApplicationForm')->withHead($head);
            }

            else{
                $head = User::where([['designation_id', '=', 8],
                                    ['onLeave', '=', 'no']])->pluck('name','email');

                return view('Leave.leaveApplicationForm')->withHead($head);
            }
        }        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = LeaveRequest::find($id);

        $employee = User::where('id', '=', $user->user_id)->first();

        $datetime1 = date_create($user->start_date);
        $datetime2 = date_create($user->end_date);
        $interval = date_diff($datetime1, $datetime2);
        

        return view('Leave.eachApplication')->withUser($user)->withEmployee($employee)->withInterval($interval);
    }

    /**
     * Update the leave table when accept request
     */
    public function update(Request $request, $id)
    {
        $user = LeaveRequest::find($id);

        $employee = User::where('id', '=', $user->user_id)->first();

        $datetime1 = date_create($user->start_date);
        $datetime2 = date_create($user->end_date);
        $interval = date_diff($datetime1, $datetime2);

        $user->view        = '1';
        $user->save();

        $employee->onLeave      = 'yes';
        $employee->useLeave     = $employee->useLeave + $interval->format('%a');
        $employee->existLeave   = $employee->existLeave - $interval->format('%a');
        $employee->save();

        

        //for invoice by mail
        $head = User::where('email', '=', $user->headmail)->first();
        $data = array(
            'email'         => $employee->email,
            'name'          => $employee->name,
            'designation'   => $employee->designation->name,
            'department'    => $employee->department->name,
            'headmail'      => $user->headmail,
            'head'          => $head->name,
            'title'         => $user->title
        );

        Mail::send('emails.leaveAccept',$data, function($message) use ($data){
            $message->from($data['headmail']);
            $message->to($data['email']);
            $message->subject($data['title']);
        });

        return redirect()->route('Leave.index');
    }
    
    /**
     * Update the leave table when reject request
     */

    public function reject($id)
    {
        $user = LeaveRequest::find($id);
        $employee = User::where('id', '=', $user->user_id)->first();
        $head = User::where('email', '=', $user->headmail)->first();

        $user->view        = '2';
        $user->save();

        // for mail confirmation
        $data = array(
            'email'         => $employee->email,
            'name'          => $employee->name,
            'designation'   => $employee->designation->name,
            'department'    => $employee->department->name,
            'headmail'      => $user->headmail,
            'head'          => $head->name,
            'title'         => $user->title
        );

        Mail::send('emails.leaveReject',$data, function($message) use ($data){
            $message->from($data['headmail']);
            $message->to($data['email']);
            $message->subject($data['title']);
        });

        return redirect()->route('Leave.index');
    }

}
