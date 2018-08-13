<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Department;
use App\Designation;
use Session;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Check employee request looking for job
     
     */
    public function index()
    {
        $users = User::whereNull('join_date')->get();
        return view('Admin/employee.index')->withUsers($users);   
     }

    /**
     * Show all employee list
     */
    public function create()
    {
        $users = User::whereNotNull('join_date')->get();
        return view('Admin/employee.showAll')->withUsers($users);
    }

   
    /**
     * requested employee's profile
     
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin/employee/profile')->withUser($user);
    }

    /**
     * confirm as a employee
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'join_date' => 'required|max:255'
        ));

        //save data
        $user = User::find($id);

        $user->join_date = $request->input('join_date');
        $user->save();

        //set flash data with success message
        Session::flash('success', 'Confirmed Joining!');

        //redirect with flash data to posts.show
        return redirect()->route('employee.index');
    }

    /**
     * Remove from the company
     *
     * 
     */
    public function destroy($id)
    {
       $user = User::find($id);

       $user->delete();

        Session::flash('success', 'Employee has been removed.');

        return redirect()->route('employee.create');
    }

   /* each employee's profile who are working here */

    public function eachProfile($id){
        $user = User::find($id);
        return view('Admin/employee/eachProfile')->withUser($user);
    }
}
