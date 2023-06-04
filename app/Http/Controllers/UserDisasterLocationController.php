<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisasterLocation;

class UserDisasterLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disasterlocation = DisasterLocation::all();
        return view('userdisasterlocation.index', compact('disasterlocation'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdisasterlocation.create');
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
            'disaster_id' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'location_name' => 'required'
        ]);
        $disasterlocaation = DisasterLocation::create($storeData);
        return redirect('user/disasterlocation')->with('completed', 'Disaster Location data has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = DisasterLocation::find($id);
        return view ('userdisasterlocation.show', compact('model'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disasterlocation = DisasterLocation::findOrFail($id);
        return view('userdisasterlocation.edit', compact('disasterlocation'));
        
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
            'disaster_id' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'location_name' => 'required'

        ]);
        DisasterLocation::whereId($id)->update($updateData);
        return redirect('user/disasterlocation')->with('completed', 'Disaster Location Data has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disasterlocation = DisasterLocation::findOrFail($id);
        $disasterlocation->delete();
        return redirect('user/disasterlocation')->with('completed', 'Disaster Location Data has been deleted');
    }
}
