<?php

namespace App\Http\Controllers;
use App\kredit;
use Illuminate\Http\Request;

class kreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = kredit::all();
       return view("kredit.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("kredit.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kredit::create([
            'id_tipe'=>$request->id_tipe,
            'uang_muka'=>$request->uang,
            'angsuran'=>$request->angsuran
             
        ]);
        return redirect()->route("kredit.index");
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
       $kredit = kredit::where("id", $id)->first();
        return view("kredit.edit", compact("kredit"));
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
       kredit::where("id", $id)->update([
             'id_tipe'=>$request->tipe ,
            'uang_muka'=>$request->uang ,
            'angsuran'=>$request->angsuran
        ]);
        return redirect()->route("kredit.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kredit::destroy($id);
        return redirect()->route("kredit.index");    
    }
}
