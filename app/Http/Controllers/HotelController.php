<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hotels;


class HotelController extends Controller
{
    public function index(){
        $hotel = hotels::all();
        return view('Hotelindex', compact('hotel'));
    }

    public function create(){
        return view('hotelcreate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
        ]);
        hotels::create($request->all());
        return redirect()->route('hotel.index')->with('success', 'hotel created success');
    }

    public function show($id){
        $hotel = hotels::find($id);
        return view('hotelshow',compact('hotel'));
    }

    public function edit($id){
        $hotel = hotels::find($id);
        return view('hoteledit',compact('hotel'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        hotels::find($id)->update($request->all());
        return redirect()->route('hotel.index')->with('success', 'hotel update success');
    }

    public function destroy($id){
        hotels::find($id)->delete();
        return redirect()->route('hotel.index')->with('success', 'Hotel deleted success');
    }
}

