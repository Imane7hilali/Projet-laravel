<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\chalets;

class chaletController extends Controller
{
    public function index(){
        $chalet = chalets::all();
        return view('chaletindex', compact('chalet'));
    }

    public function create(){
        return view('chaletcreate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        chalets::create($request->all());
        return redirect()->route('chalet.index')->with('success', 'chalet created success');
    }

    public function show($id){
        $chalet = chalets::find($id);
        return view('chaletshow',compact('chalet'));
    }

    public function edit($id){
        $chalet = chalets::find($id);
        return view('chaletedit',compact('chalet'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        chalets::find($id)->update($request->all());
        return redirect()->route('chalet.index')->with('success', 'chalet update success');
    }

    public function destroy($id){
        chalets::find($id)->delete();
        return redirect()->route('chalet.index')->with('success', 'chalet deleted success');
    }
}
