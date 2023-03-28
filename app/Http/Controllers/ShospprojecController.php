<?php

namespace App\Http\Controllers;
use App\Pprojec;
use Illuminate\Http\Request;

class ShospprojecController extends Controller
{
	public function index()
    {
       $pprojecs = Pprojec::latest()->paginate(5);

     return view('shospprojec.showindex',compact('pprojecs'))
         ->with('i', (request()->input('page', 1) - 1) * 5);
		   
    }
	
	
}


