<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // A role can have many users
    public function users(){
    	return $this->hasMany('App\User');
    }
}
