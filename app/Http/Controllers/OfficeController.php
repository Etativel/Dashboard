<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class officeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $office = Office::all();
        return view('office.index', compact('office'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('office.create');
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
            'office_name' => 'required'
        ]);
        $office = Office::create($storeData);
        return redirect('admin/office')->with('completed', 'Office data has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Office::find($id);
        return view ('office.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $office = Office::findOrFail($id);
        return view('office.edit', compact('office'));
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
        $updateData = $request->validate([
            'id' => 'required',
            'office_name' => 'required'
        ]);
        Office::whereId($id)->update($updateData);
        return redirect('admin/office')->with('completed', 'Office Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disaster = Office::findOrFail($id);
        $disaster->delete();
        return redirect('admin/office')->with('completed', 'Office Data has been deleted');
    }
}
