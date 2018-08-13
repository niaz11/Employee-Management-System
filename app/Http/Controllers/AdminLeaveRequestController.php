<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveRequest;
use App\User;
use App\Admin;
use App\Department;
use App\Designation;
use Session;
use Auth;

class AdminLeaveRequestController extends Controller
{
    /**
     * Display a listing of leave request
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = LeaveRequest::all()->where('view', '=', 0);
        
        return view('Admin.Leaves.leaveRequest')->withRequests($requests);
    }

    
    /**
     * Show each application.
     */
    public function edit($id)
    {
        $user = LeaveRequest::find($id);

        $employee = User::where('id', '=', $user->user_id)->first();

        $datetime1 = date_create($user->start_date);
        $datetime2 = date_create($user->end_date);
        $interval = date_diff($datetime1, $datetime2);
        

        return view('Admin.Leaves.eachApplication')->withUser($user)->withEmployee($employee)->withInterval($interval);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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

        return redirect()->route('Leaves.index');
    }

    public function reject($id)
    {
        $user = LeaveRequest::find($id);

        $user->view        = '2';
        $user->save();

        return redirect()->route('Leaves.index');
    }
}
