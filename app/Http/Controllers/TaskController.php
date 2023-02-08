<?php

namespace App\Http\Controllers;

use App\Models\task;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name_of_complainer' => 'required',
            'issue_complained' => 'required',
            'action_taken' => 'required',
            'ticket_number' => 'required',
            'status' => 'required',
        ]);


        Task::create([

            'name_c' => $request->name_of_complainer,
            'issue_c' => $request->issue_complained,
            'action_taken' => $request->action_taken,
            'ticket_num' => $request->ticket_number,
            'status' => $request->status

        ]);

        return redirect()->route('admin')->with('status', 'Task Added Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //

        return view('Tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        //

        return view('Tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        //
        $request->validate([
            'name_of_complainer' => 'required',
            'issue_complained' => 'required',
            'action_taken' => 'required',
            'ticket_number' => 'required',
            'status' => 'required',
        ]);


        $task->update([

            'name_c' => $request->name_of_complainer,
            'issue_c' => $request->issue_complained,
            'action_taken' => $request->action_taken,
            'ticket_num' => $request->ticket_number,
            'status' => $request->status

        ]);

        return redirect()->route('admin')->with('status', 'Task Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        //
        $task->delete();
        return back()->with('status', 'Task Deleted Successful');
    }
}
