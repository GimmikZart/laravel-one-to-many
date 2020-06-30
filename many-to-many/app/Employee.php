<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $table = 'employees';
  protected $fillable = ['firstname',  'lastname', 'dateOfBirth', 'role'];

  public function tasks(){
    return $this->hasMany(Task::class);
  }

  public function locations(){
    return $this->belongsToMany(Location::class);
  }
}
