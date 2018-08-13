<?php

namespace App\Http\Controllers;

use App\Designation;
use App\User;
use Illuminate\Http\Request;
use Session;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations = Designation::all();
        return view('Admin/designations.index')->withDesignations($designations); 
    }

   public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255'
        ));

        $designation = new Designation;

        $designation->name = $request->name;
        $designation->save();

        Session::flash('success', 'New Designation has been created.');

        return redirect()->route('designations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Designation $designation)
    {
        return view('Admin/designations.show', compact('designation'));
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designation $designation)
    {
        $designation = Designation::find($designation->id);

        //$department->users()->detach();
        
        $designation->delete();

        Session::flash('success', 'The Designation was successfully deleted!');
        return redirect()->route('designations.index');
    }
}
