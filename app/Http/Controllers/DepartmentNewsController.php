<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Salary;
use App\DepartmentNews;
use App\Department;
use App\Designation;
use Session;
use Auth;

class DepartmentNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Auth::user()->department->name;
        $requests = DepartmentNews::all()->where('department', '=', $department);
        
        return view('DepartmentNews.getDepartmentNews')->withRequests($requests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Department::pluck('name','id');
        
        return view('DepartmentNews.makeDepartmentNews')->withEmployees($employees);
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
            'title' => 'required|max:255',
            'department' => 'required|max:255',
            'body' => 'required|max:255'
        ));

        
        $department = Department::where('id', '=', $request->department)->first();
        $news = new DepartmentNews;

        $news->title = $request->title;
        $news->department = $department->name;
        $news->body = $request->body;
        
        $news->save();

        Session::flash('success', 'New News is Successfully Created.');

        return redirect()->route('DepartmentNews.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DepartmentNews::find($id);
        return view('DepartmentNews.show')->withPost($post);
    }
}
