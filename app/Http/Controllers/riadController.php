<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\riads;

class riadController extends Controller
{
    public function index(){
        $riad = riads::all();
        return view('riadindex', compact('riad'));
    }

    public function create(){
        return view('riadcreate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        riads::create($request->all());
        return redirect()->route('riadindex')->with('success', 'riad created success');
    }

    public function show($id){
        $riad = riads::find($id);
        return view('riadshow',compact('riad'));
    }

    public function edit($id){
        $riad = riads::find($id);
        return view('riadedit',compact('riad'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        riads::find($id)->update($request->all());
        return redirect()->route('riadindex')->with('success', 'riad update success');
    }

    public function destroy($id){
        riads::find($id)->delete();
        return redirect()->route('riadindex')->with('success', 'riad deleted success');
    }
}
