<?php

namespace App\Http\Controllers;
use App\spesifikasi;
use Illuminate\Http\Request;

class spesifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = spesifikasi::all();
       return view("spesifikasi.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("spesifikasi.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        spesifikasi::create([
            'id_merek'=>$request->idmerek,
            'id_tipe'=>$request->idtipe,
            'kapasitas_mesin'=>$request->mesin,
            'warna'=>$request->warna,
            'kapasitas_penumpang'=>$request->penumpang
             
        ]);
        return redirect()->route("spesifikasi.index");
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
        $spesifikasi = spesifikasi::where("id", $id)->first();
        return view("spesifikasi.edit", compact("spesifikasi"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        spesifikasi::where("id", $id)->update([
            
            'kapasitas_mesin'=>$request->mesin,
            'warna'=>$request->warna,
            'kapasitas_penumpang'=>$request->penumpang
        ]);
        return redirect()->route("spesifikasi.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        spesifikasi::destroy($id);
        return redirect()->route("spesifikasi.index");    
    }
}
