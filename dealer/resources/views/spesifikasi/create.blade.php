@extends('layout.app')

@section('content')
<form method="post" action="{{route("spesifikasi.store")}}" enctype="multipart/form-data">
    {{ csrf_field()}}
    
   <br>
    <label>kode merek</label>
    <input class="form-control" type="text" name="idmerek" >
     <br>
    <label>kode tipe</label>
    <input class="form-control" type="text" name="idtipe">
     <br>
    <label>kapasitas mesin</label>
    <input class="form-control" type="text" name="mesin" >
     <br>
    <label>warna</label>
    <input class="form-control" type="text" name="warna" >
     <br>
    <label>kapasitas penumpang</label>
    <input class="form-control" type="text" name="penumpang">
     <br>
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>
@endsection