<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisasterStatus;

class DisasterStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disasterstatus = DisasterStatus::all();
        return view('disasterstatus.index', compact('disasterstatus'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disasterstatus.create');
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
            'status_name' => 'required' 
        ]);
        $disasterstatus = DisasterStatus::create($storeData);
        return redirect('admin/disasterstatus')->with('completed', 'Disaster Status data has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = DisasterStatus::find($id);
        return view ('disasterstatus.show', compact('model'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disasterstatus = DisasterStatus::findOrFail($id);
        return view('disasterstatus.edit', compact('disasterstatus'));
        
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
            'status_name' => 'required'
        ]);
        DisasterStatus::whereId($id)->update($updateData);
        return redirect('admin/disasterstatus')->with('completed', 'Disaster Status Data has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disasterstatus = DisasterStatus::findOrFail($id);
        $disasterstatus->delete();
        return redirect('admin/disasterstatus')->with('completed', 'Disaster Status Data has been deleted');
    }
}
