@extends('layout.app')

@section('content')


<form method="post" action="{{route("tipe.store")}}" enctype="multipart/form-data">
    {{ csrf_field()}}
    
    <br>
    <label>tipe_mobil</label>
    <input class="form-control" type="text" name="tipe_mobil">
    <br>
     <br>
    <label>id_merek</label>
    <input class="form-control" type="text" name="id_merek">
     <br>
    <label>lokasi</label>
    <br>
    <input type="file" name="lokasi" class="form-control">
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>
@endsection