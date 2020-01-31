<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todo.home',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $todo = new Todo;
        $this->validate($request,[
            'title' =>  'required|unique:todos',
            'body'  =>  'required'
        ]);
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->save();
        return redirect('todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        $todoItem = Todo::find($id);
        return view('todo.show',compact('todoItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;
        $todoItem = Todo::find($id);
        // $item = Todo::find($id);
        // return $item->title;
        return view('todo.edit',compact('todoItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->save();
        session()->flash('message','Updated Successfully!!!');
        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        $item = Todo::find($id);
        $item->delete();
        session()->flash('message','Deleted Successfully!!!');
        return redirect('/todo');
    }
}
