<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisasterDamage;
use App\Models\Disaster;

class UserDisasterDamageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $disaster_id = Disaster::where("dispatcher_id",'=',$user_id)->value('office_id');
        $disasterdamage = DisasterDamage::where('office_id','=',$disaster_id)->get();
        return view('userdisasterdamage.index', compact('disasterdamage'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdisasterdamage.create');
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
            'location_id' => 'required',
            'office_id' => 'required',
            'affected' => 'required',
            'injured' => 'required',
            'missing' => 'required',
            'killed' => 'required',
            'building_destroyed' => 'required',
            'building_damage' => 'required'

        ]);
        $disasterdamage = DisasterDamage::create($storeData);
        return redirect('user/disasterdamage')->with('completed', 'Disaster damage data has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = DisasterDamage::find($id);
        return view ('userdisasterdamage.show', compact('model'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disasterdamage = DisasterDamage::findOrFail($id);
        return view('userdisasterdamage.edit', compact('disasterdamage'));
        
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
            'location_id' => 'required',
            'office_id' => 'required',
            'affected' => 'required',
            'injured' => 'required',
            'missing' => 'required',
            'killed' => 'required',
            'building_destroyed' => 'required',
            'building_damage' => 'required'
        ]);
        DisasterDamage::whereId($id)->update($updateData);
        return redirect('user/disasterdamage')->with('completed', 'Disaster Damage Data has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disasterdamage = DisasterDamage::findOrFail($id);
        $disasterdamage->delete();
        return redirect('user/disasterdamage')->with('completed', 'Disaster Damage Data has been deleted');
    }
}
