<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipe extends Model
{
    protected $guarded = ['id'];
    public $table = 'tipe';
    public $timestamps = false;

    public function merek(){
     return $this->belongTo(merek::class,'id_merek');
    }
    public function spesifikasi(){
     return $this->hasMany('App\spesifikasi', 'id_tipe');
    }
    public function kredit(){
    return $this->hasMany('App\kredit','id_tipe');
    }
}
