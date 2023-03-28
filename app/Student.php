<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
     protected $fillable = [
      'name', 'number','email','gender','mobile','colleg','section'
  ];
}
