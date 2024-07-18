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
}
