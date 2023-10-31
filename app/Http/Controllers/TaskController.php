<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Auth::user()->tasks()->paginate(5);
        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        // Validate input
        $task = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'due_date' => 'required|date|after:today'
        ]);

        $task['user_id'] = auth()->id();

        // Create a new task
        Task::create($task);

        return to_route('tasks.index');
    }

    public function show(Task $task)
    {
        // Check Authorization
        if ($task->user_id !== auth()->id()) {
            abort(401); // Unauthorized access
        }

        return view('tasks.show', compact('task'));
    }


    public function edit(Task $task)
    {
        // Check Authorization
        if ($task->user_id !== auth()->id()) {
            abort(401); // Unauthorized access
        }

        return view('tasks.edit', compact('task'));

    }


    public function update(Request $request, Task $task)
    {
        // Check Authorization
        if ($task->user_id !== auth()->id()) {
            abort(401); // Unauthorized access
        }

        // Validate input
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'due_date' => 'required|date|after:today'
        ]);

        $task->update($request->all());

        return Redirect::route('tasks.index');
    }


    public function destroy(Task $task)
    {
        // Check Authorization
        if ($task->user_id !== auth()->id()) {
            abort(401); // Unauthorized access
        }

        Task::destroy($task->id);

        return to_route('tasks.index');

    }
}
