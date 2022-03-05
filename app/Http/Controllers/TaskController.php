<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        return Task::all();
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        // validation
        $rules = [
            "text" => ["required", "unique:tasks", "max:255"],
            "group_id" => ["required", "exists:groups,id"]
        ];
        $validated = $request->validate($rules);

        // storing
        Task::create($validated);
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        //
    }

    public function update(Request $request, Task $task)
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }
}
