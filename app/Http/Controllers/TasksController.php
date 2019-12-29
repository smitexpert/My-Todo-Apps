<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasks::orderBy('priority', 'desc')->get();
        return view('tasks', compact('tasks'));
    }

    public function new(){
        return view('add');
    }

    public function store(Request $request){
        $request->validate([
            'task' => 'required'
        ]);

        Tasks::create([
            'task' => $request->task
        ]);

        return redirect('/');
    }

    public function edit($id){
        $task = Tasks::findOrFail($id);
        return view('edit', compact('task'));
    }

    public function update(Request $request, $id){
        Tasks::find($id)->update([
            'task' => $request->task
        ]);
        
        return redirect('/');
    }

    public function delete($id){
        Tasks::find($id)->delete();        
        return redirect('/');
    }

    public function priority($id){
        
        $task = Tasks::findOrFail($id);
        $increment = $task->priority+1;
        $task->update([
            'priority' => $increment
        ]);

        return redirect('/');
    }
}
