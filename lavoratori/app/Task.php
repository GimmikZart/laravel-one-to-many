<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';

    public function employee(){
      return $this-> belongsTo(Employee::class);
    }
}
