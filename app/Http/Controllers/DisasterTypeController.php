<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisasterType;

class DisasterTypeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disastertype = DisasterType::all();
        return view('disastertype.index', compact('disastertype'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disastertype.create');
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
            'type_name' => 'required' 
        ]);
        $disastertype = DisasterType::create($storeData);
        return redirect('admin/disastertype')->with('completed', 'Disaster Type data has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = DisasterType::find($id);
        return view ('admin/disastertype.show', compact('model'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disastertype = DisasterType::findOrFail($id);
        return view('admin/disastertype.edit', compact('disastertype'));
        
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
            'type_name' => 'required'
        ]);
        DisasterType::whereId($id)->update($updateData);
        return redirect('admin/disastertype')->with('completed', 'Disaster Type Data has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disastertype = DisasterType::findOrFail($id);
        $disastertype->delete();
        return redirect('admin/disastertype')->with('completed', 'Disaster Type Data has been deleted');
    }
}
