<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\appartements;

class appartementController extends Controller
{
    public function index(){
        $appartement = appartements::all();
        return view('Appartementindex', compact('appartement'));
    }

    public function create(){
        return view('Appartementcreate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        appartements::create($request->all());
        return redirect()->route('Appartementindex')->with('success', 'Appartement created success');
    }

    public function show($id){
        $appartement = appartements::find($id);
        return view('Appartementshow',compact('appartement'));
    }

    public function edit($id){
        $appartement = appartements::find($id);
        return view('Appartementedit',compact('appartement'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        appartements::find($id)->update($request->all());
        return redirect()->route('Appartementindex')->with('success', 'Appartement update success');
    }

    public function destroy($id){
        appartements::find($id)->delete();
        return redirect()->route('Appartementindex')->with('success', 'Appartement deleted success');
    }
}
