<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DownloadController extends Controller

{
    
    
    public function index()
    {
       //$download = Download::latest()->paginate(5);
      return view('Download.download');
	    
	  
                               //return view('Download.download',compact('Download'));
                                // return back();


            
    }
    
    
  
    }

