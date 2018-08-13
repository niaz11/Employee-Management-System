<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'designations';
    public function users(){

    	return $this->hasMany('App\User');

    }
    public function department()
    {
        return $this->hasManyThrough('App\Department', 'App\User');
    }
}
