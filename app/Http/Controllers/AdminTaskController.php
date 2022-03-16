<?php

namespace App\Http\Controllers;

use Google\Service\CloudTasks\Task;
use Illuminate\Http\Request;

class AdminTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task:: all();
        return view('admin.tasks')->with('$tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createtask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'deatils'=>'required|max:100 | min:10',
        ]);
         $task = new Task();
         $task->name = $request->input('name');
         $task->deatils = $request->input('deatils');
         $task->save();
        return redirect(route('tasks.index'))->with('msg','Task Add');
    }
    public function delivery_date(Request $request){
        $date= $request->input('form_date');
        $date= date('Y-m-d',strtotime($date));
    }
    public function getDetails($id=0){
        $data = User::where('doc_no', $id)->first();
        echo jason_encode($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
