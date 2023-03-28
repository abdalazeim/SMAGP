<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pprojec extends Model
{
    protected $fillable = [
      'projectname','type','super','section','date','abstract'
  ];
}
