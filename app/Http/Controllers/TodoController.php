<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
        {
            $todos = Todo::all();
            $data = compact('todos');
            return view("todo.index")->with($data);
        }

    public function show(Todo $todo)
        {   
            //$todo = Todo::find($id); 
            $data = compact('todo');
            return view("todo.show")->with($data);   
        }
        
    public function add()
        {
            return view("todo.add");
        }
    
    public function save(Request $request)
        {
            $request->validate([
                "name" => "required|max:100",
                "description" => "required|min:100|max:300"
            ]);

            $todo = new Todo;

            $todo->name = $request['name'];
            $todo->description = $request['description'];
            $todo->completed = false;

            $todo->save();

            session()->flash("success","Todo created successfully");

            return redirect("todo");
        }
        
    public function edit($id)
        {
            $todo = Todo::find($id);
            if(is_null($todo))
                {
                    throw notNullValue();
                }
            else
                {
                    $data = compact('todo');
                    return view("todo.edit")->with($data);
                }    
        }
        
    public function update(Request $request, $id)
        {
            $request->validate([
                "name" => "required|max:100",
                "description" => "required|min:100|max:300"
            ]);

            $todo = Todo::find($id);

            $todo->name = $request['name'];
            $todo->description = $request['description'];
            $todo->completed = false;

            $todo->save();

            session()->flash("success","Todo updated successfully");

            return redirect("todo");
        }    

    public function destroy($id)
        {
            $todo = Todo::find($id);
            $todo->delete();
            return redirect("todo");
        }    
}
