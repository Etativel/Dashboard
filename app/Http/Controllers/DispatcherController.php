<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispatcher;

class DispatcherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispatcher = Dispatcher::all();
        return view('dispatcher.index', compact('dispatcher'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dispatcher.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'id' => 'required',
            'office_id' => 'required',
            'dispatcher_name' => 'required',
            'dispatcher_dob' => 'required'
        ]);
        $dispatcher = Dispatcher::create($storeData);
        return redirect('admin/dispatcher')->with('completed', 'Dispatcher data has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Dispatcher::find($id);
        return view ('dispatcher.show', compact('model'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispatcher = Dispatcher::findOrFail($id);
        return view('dispatcher.edit', compact('dispatcher'));
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $disasters_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'id' => 'required',
            'office_id' => 'required',
            'dispatcher_name' => 'required',
            'dispatcher_dob' => 'required'
        ]);
        Dispatcher::whereId($id)->update($updateData);
        return redirect('admin/dispatcher')->with('completed', 'Dispatcher Data has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dispatcher = Dispatcher::findOrFail($id);
        $dispatcher->delete();
        return redirect('admin/dispatcher')->with('completed', 'Dispatcher Data has been deleted');
    }
}
