<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $sources = Source::latest()->paginate(5);

        return view('sources.index',compact('sources'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                             return view('sources.create');

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
             'annex' => 'required',
            'colleg' => 'required',
            'section' => 'required',


        ]);

  

      Source::create($request->all());

        return redirect()->route('sources.index')

                        ->with('success','Source created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
                return view('sources.show',compact('source'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
                return view('sources.edit',compact('source'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
$request->validate([

             'projectname' => 'required',

            'type' => 'required',
             'annex' => 'required',
            'colleg' => 'required',
            'section' => 'required',

        ]);

  

       $source->update($request->all());

  

        return redirect()->route('sources.index')

                        ->with('success','Source updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        $source->delete();

        return redirect()->route('sources.index')

      ->with('success','Source deleted successfully');
    }
}
