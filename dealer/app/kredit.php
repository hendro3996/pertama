<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kredit extends Model
{
    protected $guarded = ['id'];
    public $table = 'kredit';
    public $timestamps = false;

     public function tipe(){
     return $this->hasMany('App\tipe','id_tipe');
    }
}
