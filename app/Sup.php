<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sup extends Model
{
     protected $fillable = [
      'name', 'email','telephone','colleg','spec','about'
  ];
}
