<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $meetings = Meeting::latest()->paginate(5);

        return view('meetings.index',compact('meetings'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                             return view('meetings.create');

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
            'super' => 'required',
            'meeting' => 'required',
            'date' => 'required',
            'time' => 'required',


        ]);

  

       Meeting::create($request->all());

   

        return redirect()->route('meetings.index')

                        ->with('success','meetings created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
                              return view('meetings.show',compact('meeting'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
                            return view('meetings.edit',compact('meeting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        $request->validate([

            'projectname' => 'required',
            'super' => 'required',
            'meeting' => 'required',
            'date' => 'required',
            'time' => 'required',

        ]);

  

       $meeting->update($request->all());

  

        return redirect()->route('meetings.index')

                        ->with('success','meetings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        $meeting->delete();

  

        return redirect()->route('meetings.index')

                        ->with('success','meetings deleted successfully');
    }
}
