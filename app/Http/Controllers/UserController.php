<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'email'=>'required',
            'password'=>'required',
            'isAdmin'=>'required',
    
        ]);
        User::create(['name'=>$request->name,'email'=>$request->email, 'password' => Hash::make($request->password),'isAdmin'=>$request->isAdmin]);
        return redirect()->route('user.index')->with('success', 'User created success');
    }

    public function show($id){
        $user = User::find($id);
        return view('Usershow',compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('Useredit',compact('user'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'isAdmin'=>'required',
    
        ]);
        User::find($id)->update(['name'=>$request->name,'email'=>$request->email, 'password' => Hash::make($request->password), 'isAdmin'=>$request->isAdmin]);
        return redirect()->route('user.index')->with('success', 'User update success'); 
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success', 'User deleted success');
    }
}
