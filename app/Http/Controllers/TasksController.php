<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    //
    public function index()
    {
    	$tasks = Task::all();

    return view('tasks.index',compact('tasks')); 
    }
    
    public function show(Task $task) // variable should match the wildcard {}
    {
    	// $tasks = Task::find($id);

    return view('tasks.show',compact('task'));
    }
}
