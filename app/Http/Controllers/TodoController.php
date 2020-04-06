<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateTodoRequest;

class TodoController extends Controller
{
    //
    public function index(){
        $todos = Todo::all();
        // return view('todos.index')->with('todos', $todos);
        return view('todos.index', compact('todos', $todos));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(CreateTodoRequest $request){

        //form-validation
        // $this->validate($request, [
        //     'title' => 'required|min:5|max:15',
        //     'content' => 'required|min:10'
        // ]);

        //store data into database
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->content = $request->content;
        $todo->save();

        Session::flash('success', 'Todo Created Successfully');

        //return redirect back to index page
        return redirect(route('todos'));
    }

    public function show(Todo $todo){

        return view('todos.show')->with('todo', $todo);
    }

    public function edit(Todo $todo){
        //Route Model Binding
        // $todo = Todo::find($id);
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(CreateTodoRequest $request, Todo $todo){
       
        //form-validation
        // $this->validate($request,[
        //     'title' => 'required',
        //     'content' => 'required'
        // ]);

        //update todo into database
        // $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->content = $request->content;
        $todo->save();

        Session::flash('success', 'Todo Update Successfully');

        //return redirect to index page
        return redirect(route('todos'));
    }

    public function delete(Todo $todo){
        // $todo = Todo::find($id);
        $todo->delete();

        Session::flash('success', 'Todo Deleted Successfully');
        return redirect(route('todos'));
    }

    public function done(Todo $todo){
        
        $todo->finish = 1;
        $todo->save();

        Session::flash('success', 'Todo Finished Successfully');
        return redirect(route('todos'));
    }
}
