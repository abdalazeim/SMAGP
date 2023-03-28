<?php

namespace App\Http\Controllers;

use App\Sup;
use Illuminate\Http\Request;

class SupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $sups = Sup::latest()->paginate(5);

        return view('sups.index',compact('sups'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                              return view('sups.create');

    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([

            'name' => 'required',
            'email' => 'required',
             'telephone' => 'required',
            'colleg' => 'required',
            'spec' => 'required',
            'about' => 'required',


        ]);

  

      Sup::create($request->all());

        return redirect()->route('sups.index')

                        ->with('success','Sup created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sup  $sup
     * @return \Illuminate\Http\Response
     */
    public function show(Sup $sup)
    {
               return view('sups.show',compact('sup'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sup  $sup
     * @return \Illuminate\Http\Response
     */
    public function edit(Sup $sup)
    {
                return view('sups.edit',compact('sup'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sup  $sup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sup $sup)
    {
       $request->validate([

             'name' => 'required',

            'email' => 'required',
             'telephone' => 'required',
            'colleg' => 'required',
            'spec' => 'required',
            'about' => 'required',
        ]);

  

       $sup->update($request->all());

  

        return redirect()->route('sups.index')

                        ->with('success','sup updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sup  $sup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sup $sup)
    {
        $sup->delete();

        return redirect()->route('sups.index')

      ->with('success','Sup deleted successfully');

  
    }

    public function sup()
    {

        return ('sups.sup');
  
    }
}
