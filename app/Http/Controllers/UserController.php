<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('Userindex', compact('user'));
    }

    public function create(){
        return view('Usercreate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        User::create($request->all());
        return redirect()->route('Userindex')->with('success', 'User created success');
    }

    public function show($id){
        $User = User::find($id);
        return view('Usershow',compact('user'));
    }

    public function edit($id){
        $User = User::find($id);
        return view('Useredit',compact('user'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
    
        ]);
        User::find($id)->update($request->all());
        return redirect()->route('Userindex')->with('success', 'User update success');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('Userindex')->with('success', 'User deleted success');
    }
}
