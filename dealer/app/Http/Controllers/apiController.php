<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\merek;
use App\tipe;
use App\spesifikasi;
use App\kredit;

class apiController extends Controller
{
    public function getmerek(){
    	$data = merek::all();
    	return $data;
    }

    public function postmerek(Request $request){
    	$data = tipe::where('id_merek',$request->id_merek)->get();
    	return  $data;
    }

    public function postspesifikasi(Request $request){
    	$data = spesifikasi::where('id_tipe',$request->id_tipe)->get();
    	return  $data;
    }

    public function postkredit(Request $request){
    	$data = kredit::where('id_tipe',$request->id_tipe)->get();
    	return  $data;
    }

}
