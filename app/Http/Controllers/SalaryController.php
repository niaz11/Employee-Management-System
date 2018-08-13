<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Salary;
use App\Department;
use App\Designation;
use Session;
use Auth;

class SalaryController extends Controller
{
    /**
     * Display a payments history
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $requests = Salary::all()->where('user_id', '=', $id);
        
        return view('Salary.getSalary')->withRequests($requests);
    }

    /**
     * payment made by admin
     *
     
     */
    public function create()
    {

        $employees = User::pluck('name','id');
        
        return view('Salary.makeSalary')->withEmployees($employees);
    }

    /**
     * Store a newly created payment in storage.
     *
     * 
     */
    public function store(Request $request)
    {
       $this->validate($request, array(
            'user_id' => 'required|max:255'
        ));

        
        $employee = User::where('id', '=', $request->user_id)->first();
        $salary = new Salary;

        $salary->user_id = $request->user_id;
        $salary->name = $employee->name;
        $salary->department = $employee->department->name;
        $salary->designation = $employee->designation->name;

        if ($employee->designation->name == 'System Analyst') {
            $salary->amount = '70,000';
        } 
        elseif ($employee->designation->name == 'Senior Project Manager') {
            $salary->amount = '55,000';
        } 
        elseif ($employee->designation->name == 'Project Leader') {
            $salary->amount = '35,000';
        }
        else{
            $salary->amount = '35,000';
        }
        

        $salary->save();

        Session::flash('success', 'Salary Payment is done.');

        return redirect()->route('Salary.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
}
