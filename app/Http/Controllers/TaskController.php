<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(){
        

    }

    public function taskList(){
        $tasks = Task::get();
        
        // dd($tasks);
        return view('pages.dashboard')->with('tasks', $tasks);
    }

    public function createTask(Request $request) {
        return view('pages.form');
    }

    public function saveTask(Request $request) {
        $task = Task::create([
            'task' => $request-> task,
            'datetime_start'=> $request->datetime_start,
            'datetime_end' => $request->datetime_end,
            'note' => $request->note,
            'created_by'=>'April',

        ]);
    }
}
