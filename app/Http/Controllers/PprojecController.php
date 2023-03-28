<?php

namespace App\Http\Controllers;

use App\Pprojec;
use Illuminate\Http\Request;

class PprojecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pprojecs = Pprojec::latest()->paginate(5);

       return view('pprojecs.index',compact('pprojecs'))
           ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('pprojecs.create');

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
            'projectname' => 'required',
            'type' => 'required',
            'super' => 'required',
            'section' => 'required',
            'date' => 'required',
                        'abstract' => 'required',


        ]);

        Pprojec::create($request->all());

        return redirect()->route('pprojecs.index')
                        ->with('success','pprojecs created successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pprojec  $pprojec
     * @return \Illuminate\Http\Response
     */
    public function show(Pprojec $pprojec)
    {
            return view('pprojecs.show',compact('pprojec'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pprojec  $pprojec
     * @return \Illuminate\Http\Response
     */
    public function edit(Pprojec $pprojec)
    {
      return view('pprojecs.edit',compact('pprojec'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pprojec  $pprojec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pprojec $pprojec)
    {
       $request->validate([
           'projectname' => 'required',
            'type' => 'required',
            'super' => 'required',
            'section' => 'required',
            'date' => 'required',
                        'abstract' => 'required',

       ]);

       $pprojecs->update($request->all());

       return redirect()->route('pprojecs.index')
                       ->with('success','pprojecs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pprojec  $pprojec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pprojec $pprojec)
    {
        $pprojec->delete();

     return redirect()->route('pprojecs.index')
                     ->with('success','pprojecs deleted successfully');
    }
}
