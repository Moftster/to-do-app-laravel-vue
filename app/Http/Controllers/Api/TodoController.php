<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ToDo;

class TodoController extends Controller
{
    public function index()
    {
        return ToDo::all();
    }

    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->description = $request->text;
        $todo->due_date = date_create($request->date);
        $todo->completed = true;
        return $todo->save();
    }
}
