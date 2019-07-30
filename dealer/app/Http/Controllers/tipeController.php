<?php

namespace App\Http\Controllers;

use App\tipe;
use Illuminate\Http\Request;

class tipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tipe::all();
       return view("tipe.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tipe.create"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->file('lokasi')->move('images/',$request->file('lokasi')->getClientOriginalName());
        tipe::create([
            'tipe_mobil'=>$request->tipe_mobil ,
            'id_merek' => $request->id_merek ,
            'lokasi' => $request->lokasi->getClientOriginalName()
             
        ]);
        return redirect()->route("tipe.index");
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
        $tipe = tipe::where("id", $id)->first();
        return view("tipe.edit", compact("tipe"));
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
         tipe::where("id", $id)->update([
            'tipe_mobil'=>$request->tipe_mobil ,
            'id_merek' => $request->id_merek ,
            'lokasi' => $request->lokasi
        ]);
        return redirect()->route("tipe.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tipe::destroy($id);
        return redirect()->route("tipe.index");    
    }
}
