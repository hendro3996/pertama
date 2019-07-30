@extends('layout.app')

@section('content')
<form method="post" action="{{route('spesifikasi.update',['id'=>$spesifikasi->id])}}">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
     <br>
    <label>kapasitas mesin</label>
    <input class="form-control" type="text" name="mesin" value="{{ $spesifikasi->kapasitas_mesin }}">
     <br>
    <label>warna</label>
    <input class="form-control" type="text" name="warna" value="{{ $spesifikasi->warna }}">
     <br>
    <label>kapasitas penumpang</label>
    <input class="form-control" type="text" name="penumpang" value="{{ $spesifikasi->kapasitas_penumpang }}">
     <br>
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>
@endsection