<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\messages;

class messageController extends Controller
{
    public function index(){
        $message = messages::all();
        return view('contact', compact('message'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
    
        ]);
        messages::create($request->all());
        return view('succesrespond')->with('success', 'message created success');
    }
}
