<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetinge extends Model
{
    protected $fillable = [
      'projectname', 'super','meeting','date','time'
  ];
}
