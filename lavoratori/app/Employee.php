<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    public function tasks(){
      return $this-> hasMany(Task::class);
    }
}
