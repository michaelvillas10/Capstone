<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function group()
    {
    	return $this->hasMany(Lawyer::class);
    }

}
