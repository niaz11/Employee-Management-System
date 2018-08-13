<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public function users(){

    	return $this->hasMany('App\User');

    }

    public function designation()
    {
        return $this->hasManyThrough('App\Designation', 'App\User');
    }
}
