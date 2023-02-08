<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function search(Request $request)
    {

       $request->validate([
        'search' => 'required|integer'
       ]);


       $search = $request->search;

      $tasks = Task::where('ticket_num',$search)->get();

      if ($tasks->count() > 0) {

        return view('search',compact('tasks'));
      }else{


        return back()->with('se', 'Invalid Ticket Number');
      }





    }
}
