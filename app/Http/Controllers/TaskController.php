<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tasks = Task::latest()->paginate(5);

        return view('tasks.index',compact('tasks'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('tasks.create');
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
             'address' => 'required',
            'datebinge' => 'required',
            'dateend' => 'required',


        ]);

  

      Task::create($request->all());

        return redirect()->route('tasks.index')

                        ->with('success','لقد تم اضافة الاجتماع بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
         return view('tasks.show',compact('task'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
       $request->validate([

             'projectname' => 'required',
             'address' => 'required',
            'datebinge' => 'required',
            'dateend' => 'required',
        ]);

  

       $task->update($request->all());

  

        return redirect()->route('tasks.index')

                        ->with('success','tasks updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
       $task->delete();

        return redirect()->route('tasks.index')

      ->with('success','tasks deleted successfully');
    }
}
