<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ToDo;

class TodoController extends Controller
{
    public function index()
    {
        $toDos = ToDo::all();
        foreach($toDos as $toDo){
            $toDo->due_date = date('d-m-Y', strtotime($toDo->due_date));
        }
        return $toDos;
    }

    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->description = $request->text;
        $todo->due_date = date_create($request->date);
        $todo->completed = true;
        $todo->save();
        
    }
}
