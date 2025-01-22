<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//teacherstutorial
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $data = Task::all();
        return view('task.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        session(['title'=>$request->title]);
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
            'due_date'=>'required'
        ]);
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();
        return redirect()->route('task.taksList');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $data = Task::find($id);
        return view('task.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $data = Task::find($id);
        return view('task.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTask(Request $request, string $id):RedirectResponse
    {
        //dd($request);
        Task::where('id',$id)->update($request->except(['_token']));
        return redirect()->route('task.taksList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        $data = Task::find($id);
        if($data)
        {
            $data->delete();
        }

        return redirect()->back();
    }
}
