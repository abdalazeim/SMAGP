<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
      'projectname', 'super','meeting','date','time'
  ];
}
