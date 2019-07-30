<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merek extends Model
{
    protected $guarded = ['id'];
    public $table = 'merek';
public $timestamps = false;
// protected $fillable=['id','merek','lokasi'];

 
 public function tipe(){
 	return $this->hasMany('App\tipe', 'id_merek');
 
 }
 public function spesifikasi(){
 return $this->belongTo('App\spesifikasi', 'id_merek');
 
 }  
}
