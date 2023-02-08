<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {

        $usercount = User::all();
        $taskcount = Task::all();
        $tasksresolved = Task::where('status','Resolved')->get();
        $taskspending = Task::where('status','Pending')->get();
        $tasks = Task::latest('ticket_num')->paginate(7);

        return view('dashboard', compact('tasks','taskcount','usercount','tasksresolved','taskspending'));
    }
}
