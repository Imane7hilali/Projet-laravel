<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reserver;

class reserverController extends Controller
{
    public function index(){
            return view('reserver');
    }
    public function store(Request $request){
                $this->validate($request,[
                    'name' =>'required',
                    'email' =>'email',
                    'arrival_date'=>'required',
                    'going_date' =>'required',
                ]);
                reserver::create($request->all());
                return view('succesrespond')->with('success', 'reservation created success');
            }
}
