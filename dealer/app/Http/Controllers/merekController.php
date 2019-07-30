<?php

namespace App\Http\Controllers;
use App\merek;
use Illuminate\Http\Request;

class merekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = merek::all();

     
       return view("merek.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("merek.create"); 
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
        merek::create([
            'merek'=>$request->merek,
            'lokasi'=>$request->lokasi->getClientOriginalName()   
        ]);
        return redirect()->route("merek.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merek = merek::where("id", $id)->first();
        return view("merek.edit", compact("merek"));
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
        
        merek::where("id", $id)->update([
            'merek'=>$request->merekmobil,
            'lokasi'=>$request-> $nama_file
        
        ]);
        return redirect()->route("merek.index");    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        merek::destroy($id);
        return redirect()->route("merek.index");    
    }
}
