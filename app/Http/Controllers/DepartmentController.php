<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use App\Designation;
use Illuminate\Http\Request;
use Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('Admin/departments.index')->withDepartments($departments);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255'
        ));

        $department = new Department;

        $department->name = $request->name;
        $department->save();

        Session::flash('success', 'New Department has been created.');

        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        
        return view('Admin/departments.show', compact('department'));
    }

    public function destroy(Department $department)
    {
        
        $department = Department::find($department->id);

        //$department->users()->detach();
        
        $department->delete();

        Session::flash('success', 'The Department was successfully deleted!');
        return redirect()->route('departments.index');
    }
}
