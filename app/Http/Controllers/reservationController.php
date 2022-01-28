<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reserver;

class reservationController extends Controller
{
    public function index(){
        $reservation = reserver::all();
        return view('reservationindex', compact('reservation'));
    }

    public function create(){
        return view('reservationcreate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'arrival_date'=>'required',
            'going_date' =>'required',
            'Hotel_id' =>'required',
        ]);
        reserver::create($request->all());
        return redirect()->route('reserver.index')->with('success', 'reservation created success');
    }

    public function show($id){
        $reservation = reserver::find($id);
        return view('reservationshow',compact('reservation'));
    }

    public function edit($id){
        $reservation = reserver::find($id);
        return view('reservationedit',compact('reservation'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'arrival_date'=>'required',
            'going_date' =>'required',
            'Hotel_id' =>'required',
    
        ]);
        reserver::find($id)->update($request->all());
        return redirect()->route('reserver.index')->with('success', 'reservation update success');
    }

    public function destroy($id){
        reserver::find($id)->delete();
        return redirect()->route('reserver.index')->with('success', 'reservation deleted success');
    }
}
