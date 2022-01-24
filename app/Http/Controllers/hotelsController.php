<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotels;

class hotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $hotel = hotels::all();
        return view('hotels.index',compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('hotels.create');
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
            'city'=>'required',
            'address'=>'required',
            'mark'=>'required',
            'hotel_file_path'=>'required',
        ]);
        hotels::create($request->all());
        return redirect()->route('hotels.index')->with('success','Post created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $hotel = hotels::find($id);
        return view ('hotels.show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $hotel = hotels::find($id);
        return view ('hotels.edit',compact('hotel'));
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
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
            'mark'=>'required',
            'hotel_file_path'=>'required',
        ]);
        hotels::find($id)->update($request->all());
        return redirect()->route('hotels.index')->with('success','hotels update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hotels::find($id)->delete();
        return redirect()->route('hotels.index')->with('success','hotels deleted success');
    }
}
