<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spesifikasi extends Model
{
    protected $guarded = ['id'];
    public $table = 'spesifikasi';
public $timestamps = false;

 public function merek(){
     return $this->belongTo(merek::class,'id_merek');
    }
     public function tipe(){
     return $this->belongTo(tipe::class,'id_tipe');
    }

 }
