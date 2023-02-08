<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    //

    public function index()

    {

        $tasks = Task::latest('ticket_num')->paginate(7);

        return view('welcome', compact('tasks'));
    }

    public function show(Task $task)
    {


        return view('Tasks.show', compact('task'));
    }
}
