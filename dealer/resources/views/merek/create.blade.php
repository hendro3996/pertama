@extends('layout.app')

@section('content')


<form method="post" action="{{route("merek.store")}}" enctype="multipart/form-data">
    {{ csrf_field()}}
    
    
     <br>
    <label>merek</label>
    <input class="form-control" type="text" name="merek">
    <br>
    <label>lokasi</label>
    <input type="file" name="lokasi" class="form-control">
    <br>
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>
@endsection