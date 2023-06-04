<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisasterImage;

class DisasterImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disasterimage = DisasterImage::all();
        return view('disasterimage.index', compact('disasterimage'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disasterimage.create');
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
            'image' => 'required',
            'image_name' => 'required',
            'image_description' => 'required'
        ]);
        $disasterimage = DisasterImage::create($request -> all());//$request -> all());
        if($request -> hasFile('image')){
            $request -> file('image') -> move('imagedisaster/', $request -> file('image')-> getClientOriginalName());
            $disasterimage -> image = $request -> file('image')->getClientOriginalName();
            $disasterimage -> save();
        }
        return redirect('admin/disasterimage')->with('completed', 'Disaster Image data has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = DisasterImage::find($id);
        return view ('disasterimage.show', compact('model'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disasterimage = DisasterImage::findOrFail($id);
        return view('disasterimage.edit', compact('disasterimage'));
        
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
            'image' => 'required',
            'image_name' => 'required',
            'image_description' => 'required'
        ]);
        DisasterImage::whereId($id)->update($updateData);
        return redirect('admin/disasterimage')->with('completed', 'Disaster Image Data has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disasterimage = DisasterImage::findOrFail($id);
        $disasterimage->delete();
        return redirect('admin/disasterimage')->with('completed', 'Disaster Image Data has been deleted');
    }
}
