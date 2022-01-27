<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\messages;

class message2controller extends Controller
{
    public function index(){
        $message2 = messages::all();
        return view('adminmessage', compact('message2'));
    }
    public function destroy($id){
        messages::find($id)->delete();
        return redirect()->route('message.index')->with('success', 'message deleted success');
    }
}
