<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Department;
use App\Designation;
use Session;

class UserEmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereNotNull('join_date')->get();
        return view('Employee/employees.employeeList')->withUsers($users);
    }

    
    /**
     * Show the each employees profile
     *
     * @return \Illuminate\Http\Response
     */
    public function eachProfile($id){
        $user = User::find($id);
        return view('Employee/employees/eachProfile')->withUser($user);
    }

    /**
     * Display the profile who are logged in 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('Employee/employees/profile')->withUser($user);
    }

    /**
     * profile editing the specified resource.
     
     */
    public function edit($id)
    {
       $user = User::find($id);
       $departments = Department::pluck('name','id');
       $designations = Designation::pluck('name','id');
       return view('Employee/employees/profileEdit')->withUser($user)->withDepartments($departments)->withDesignations($designations);
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
       
         $user = User::find($id);
        if($request->input('email') == $user->email){
            $this->validate($request, array(
                'name'              => 'required|string|max:255',
                'birthdate'         => 'required',
                'gender'            => 'required',
                'phone'             => 'required',
                'national_id'       => 'required|max:255',
                'current_address'   => 'required|string|max:255',
                'city'              => 'required|string|max:255',
                'country'           => 'required|string|max:255',
                'degree'            => 'required|string|max:255',
                'subject'           => 'required|string|max:255',
                'institution'       => 'required|string|max:255',
                'department_id'     => 'required|max:25',
                'designation_id'    => 'required|max:255',
                'password'          => 'required|string|min:6|confirmed',
           ));
        }
        else{
            
            $this->validate($request, array(           
                'name'              => 'required|string|max:255',
                'birthdate'         => 'required',
                'gender'            => 'required',
                'phone'             => 'required',
                'national_id'       => 'required|max:255',
                'current_address'   => 'required|string|max:255',
                'city'              => 'required|string|max:255',
                'country'           => 'required|string|max:255',
                'degree'            => 'required|string|max:255',
                'subject'           => 'required|string|max:255',
                'institution'       => 'required|string|max:255',
                'department_id'     => 'required|max:25',
                'designation_id'    => 'required|max:255',
                'email'             => 'required|string|email|max:255|unique:users',
                'password'          => 'required|string|min:6|confirmed',
            ));
        }

       

        //save data
        $user = User::find($id);

        if ($request->input('image') == NULL) {
            $user->name             = $request->input('name');
            $user->birthdate        = $request->input('birthdate');
            $user->gender           = $request->input('gender');
            $user->phone            = $request->input('phone');
            $user->national_id      = $request->input('national_id');
            $user->current_address  = $request->input('current_address');
            $user->city             = $request->input('city');
            $user->country          = $request->input('country');
            $user->degree           = $request->input('degree');
            $user->subject          = $request->input('subject');
            $user->institution      = $request->input('institution');
            $user->email            = $request->input('email');
            $user->password         = Hash::make($request->input('password'));
            $user->department_id    = $request->input('department_id');
            $user->designation_id   = $request->input('designation_id');

            $user->save();

            //set flash data with success message
            Session::flash('success', 'Successfully Updated!');

            //redirect with flash data to posts.show
            return redirect()->route('employees.show', $user->id);
        }

        else{
            $image = $request->input('image');

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $input['imagename']);

            $user->name             = $request->input('name');
            $user->birthdate        = $request->input('birthdate');
            $user->gender           = $request->input('gender');
            $user->image            = $input['imagename'];
            $user->phone            = $request->input('phone');
            $user->national_id      = $request->input('national_id');
            $user->current_address  = $request->input('current_address');
            $user->city             = $request->input('city');
            $user->country          = $request->input('country');
            $user->degree           = $request->input('degree');
            $user->subject          = $request->input('subject');
            $user->institution      = $request->input('institution');
            $user->email            = $request->input('email');
            $user->password         = Hash::make($request->input('password'));
            $user->department_id    = $request->input('department_id');
            $user->designation_id   = $request->input('designation_id');

            $user->save();

            //set flash data with success message
            Session::flash('success', 'Successfully Updated!');

            //redirect with flash data to posts.show
            return redirect()->route('employees.show', $user->id);
        }

        
    }

}
