<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function getTasks() {
        
        $tasks = Task::All();


        return view('table', ['tasks'=> $tasks]);
    }

    public function getAddTaskPage() {
        return view('tasks.add_task');
    }

    public function createTask(Request $request) {
        $this->validate($request, [
            "task" => "required",
            "date" => "required",
        ]);
        $task = new Task();
        $task->task = $request->task;
        $task->deadline = $request->date;
        $task->user_id = 1;
        $task->save();

        return redirect()->route('table');



    }

    public function getEditTaskPage($id) {

        $task = Task::where("id", $id)->first();

        if($task == null){
            return redirect()->back();
        }
        return view("tasks.edit_task", ["task" => $task,]);

    }

    public function getDeleteTaskPage($id) {

        $task = Task::where("id", $id)->first();

        if($task == null){
            return redirect()->back();
        }
        return view("tasks.delete_task", ["task" => $task,]);

    }

    public function updateTask(Request $request) {
        $this->validate($request, [
            "task" => "required",
            "date" => "required",
            "task_id" => "required",
        ]);

        $task = Task::where("id", $request->task_id)->first(); 

        if($task == null) {
            return redirect()->back();
        }

        $task->task = $request->task;
        $task->deadline = $request->date;
        $task->save();

        return redirect()->route('table');
    }


    
    public function deleteTask(Request $request) {
        $this->validate($request, [
            "task_id" => "required",
        ]);

        $task = Task::where("id", $request->task_id)->first(); 

        if($task == null) {
            return redirect()->back();
        }
        
        $task->delete();

        return redirect()->route('table');
    }
    

}
