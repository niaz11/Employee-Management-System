<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'birthdate'=> 'required',
            'gender'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone'=> 'required',
            'national_id' => 'required|max:255',
            'current_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'department_id' => 'required|max:25',
            'designation_id' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    { 
        $image = $data['image'];

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/images');

        $image->move($destinationPath, $input['imagename']);

        return User::create([
            'name'                      => $data['name'],
            'birthdate'                 => $data['birthdate'],
            'gender'                    => $data['gender'],
            'image'                     => $input['imagename'],
            'phone'                     => $data['phone'],
            'national_id'               => $data['national_id'],
            'current_address'           => $data['current_address'],
            'city'                      => $data['city'],
            'country'                   => $data['country'],
            'degree'                    => $data['degree'],
            'subject'                   => $data['subject'],
            'institution'               => $data['institution'],
            'email'                     => $data['email'],
            'password'                  => Hash::make($data['password']),
            'department_id'             => $data['department_id'],
            'designation_id'            => $data['designation_id'],
        ]);
    }
}
