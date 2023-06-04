<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disaster;

class UserDisasterController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $disaster = Disaster::where("dispatcher_id",'=',$user_id)->get();
        return view('userdisaster.index', compact('disaster'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdisaster.create');
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
            'type' => 'required',
            'office_id' => 'required',
            'dispatcher_id' => 'required',
            'status' => 'required',
            'disaster_title' => 'required',
            'disaster_date' => 'required',
            'disaster_description' => 'required'
        ]);
        $disaster = Disaster::create($storeData);
        return redirect('user/disaster')->with('completed', 'Disaster data has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Disaster::find($id);
        return view ('userdisaster.show', compact('model'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disaster = Disaster::findOrFail($id);
        return view('userdisaster.edit', compact('disaster'));
        
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
            'type' => 'required',
            'office_id' => 'required',
            'dispatcher_id' => 'required',
            'status' => 'required',
            'disaster_title' => 'required',
            'disaster_date' => 'required',
            'disaster_description' => 'required'
        ]);
        Disaster::whereId($id)->update($updateData);
        return redirect('user/disaster')->with('completed', 'Disaster Data has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disaster = Disaster::findOrFail($id);
        $disaster->delete();
        return redirect('user/disaster')->with('completed', 'Disaster Data has been deleted');
    }
}