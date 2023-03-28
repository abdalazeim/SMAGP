<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class wepstudentsController extends Controller
{
    public function index()
    {
	    return view('web.students');
}

 public function st()
    {
		//return view('web.index');
		$products = Product::latest()->paginate(5);

      return view('web.index',compact('products'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
		
		
	   
}

 public function show(Product $product)
    {
      return view('web.show',compact('product'));

    }
}