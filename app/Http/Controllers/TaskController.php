<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('Taks.task');
    }
    public function storeTask(Request $request)
    {
        // return 1;
        // dd($request);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'taskType' => 'required',
            'dueDate' => 'required',
            'dueTime' => 'required',
            'outCome' => 'required',
            'owner' => 'required',
            'relatedTo' => 'required',
            'collaborators' => 'required',
        ]);
        try {
            $task=new Task();
            $task->title = $request->title;
            $task->description =$request->description;
            $task->taskType = $request->taskType;
            $task->dueDate = $request->dueDate;
            $task->dueTime = $request->dueTime;
            $task->owner = $request->owner;
            $task->outCome = $request->outCome;
            $task->relatedTo = $request->relatedTo;
            $task->collaborators = $request->collaborators;
            $task->save();
        } catch (\Exception $e) {

            return $e->getMessage();
        }
         $request->all();
        return redirect()->back()->with(['success' => 'Taks Form Submit Successfully']);
    }
}
