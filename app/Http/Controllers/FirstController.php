<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hébergements()
    {
        return view('hébergements');
    }

    public function vols()
    {
        return view('vols');
    }
    
    public function voiture_de_location()
    {
        return view('voiture_de_location');
    }
    public function hotels()
    {
        return view('hotels');
    }
    public function appartements()
    {
        return view('appartements');
    }
    
    public function agadir()
    {
        return view('agadir');
    }
    
    public function casablanca()
    {
        return view('casablanca');
    }
    
    public function tanger()
    {
        return view('tanger');
    }
    
    public function ifrane()
    {
        return view('ifrane');
    }
    
    public function marrakech()
    {
        return view('marrakech');
    }
    public function villas()
    {
        return view('villas');
    }
    public function chalets()
    {
        return view('chalets');
    }
    public function riads()
    {
        return view('riads');
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 
    public function admin(){
         return view('admin.admin_home');
    }
}