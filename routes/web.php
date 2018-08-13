<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Employee/welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::post('contact', 'HomeController@postContact');
Route::get('inbox', 'HomeController@inbox');
Route::get('android', 'HomeController@android');
Route::get('web', 'HomeController@web');
Route::get('ios', 'HomeController@ios');


Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});

Route::get('Admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::resource('Admin/departments', 'DepartmentController', ['except' => ['create','edit', 'update']]);
Route::resource('Admin/designations', 'DesignationController', ['except' => ['create','edit', 'update']]);

Route::get('Admin/employee/{employee}/eachProfile', 'EmployeeController@eachProfile')->name('employee.eachProfile');
Route::resource('Admin/employee', 'EmployeeController', ['except' => ['store','show']]);


Route::get('Employee/employees/{employee}/eachProfile', 'UserEmployeeController@eachProfile')->name('employees.eachProfile');
Route::resource('Employee/employees', 'UserEmployeeController', ['except' => ['store','create', 'destroy']]);

Route::get('Leave/{Leave}/reject', 'LeaveRequestController@reject')->name('Leave.reject');
Route::resource('Leave', 'LeaveRequestController', ['except' => ['create','destroy']]);

Route::get('Admin/Leaves/{Leave}/reject', 'AdminLeaveRequestController@reject')->name('Leaves.reject');
Route::resource('Admin/Leaves', 'AdminLeaveRequestController', ['except' => ['create','destroy', 'show', 'store']]);


Route::resource('Salary', 'SalaryController', ['except' => ['edit','destroy', 'update', 'show']]);

Route::resource('DepartmentNews', 'DepartmentNewsController', ['except' => ['edit','destroy', 'update']]);