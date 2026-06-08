<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    use ApiResponse;    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $todos = Todo::with('user')
            ->where('user_id', $user->id)
            ->get();

        return $this->apiSuccess($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate();
        $user = auth()->user();
        $todo = new Todo($request->all());
        $todo->user()->associate($user);
        $todo->save();

        return $this->apiSuccess($todo->load('user'), 201, 'Todo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return $this->apiSuccess($todo->load('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate();
        $todo->todo = $request->todo;
        $todo->label = $request->label;
        $todo->done = $request->done;
        $todo->save();
        return $this->apiSuccess($todo->load('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        if (auth()->user()->id == $todo->user_id) {
            $todo->delete();
            return $this->apiSuccess($todo);
        }

        return $this->apiError(
            'Unauthorized',
            Response::HTTP_UNAUTHORIZED
        )
    }
}
