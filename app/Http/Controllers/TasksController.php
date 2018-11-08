<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks['incomplete'] = Task::incomplete();
        $tasks['complete'] = Task::completed();
        return view('tasks', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('task', compact('task'));
    }

}