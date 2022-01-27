<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\villas;

class villaController extends Controller
{
    public function index(){
        $villa = villas::all();
        return view('villaindex', compact('villa'));
    }

    public function create(){
        return view('villacreate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        villas::create($request->all());
        return redirect()->route('villa.index')->with('success', 'villa created success');
    }

    public function show($id){
        $villa = villas::find($id);
        return view('villashow',compact('villa'));
    }

    public function edit($id){
        $villa = villas::find($id);
        return view('villaedit',compact('villa'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        villas::find($id)->update($request->all());
        return redirect()->route('villa.index')->with('success', 'villa update success');
    }

    public function destroy($id){
        villas::find($id)->delete();
        return redirect()->route('villa.index')->with('success', 'villa deleted success');
    }
}
