<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','gender', 'birthdate', 'image', 'phone', 'national_id', 'current_address', 'city', 'country', 'degree', 'subject', 'institution', 'department_id', 'designation_id','join_date','onLeave', 'existLeave', 'useLeave'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department(){

        return $this->belongsTo('App\Department');

    }

    public function designation(){

        return $this->belongsTo('App\Designation');

    }
}
