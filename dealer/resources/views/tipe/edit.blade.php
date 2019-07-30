@extends('layout.app')

@section('content')
<form method="post" action="{{route('tipe.update',['id'=>$tipe->id])}}">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    <br>
    <label>tipe_mobil</label>
    <input class="form-control" type="text" name="tipe_mobil" value="{{ $tipe->tipe_mobil }}">
    <br>
     <br>
    <label>id_merek</label>
    <input class="form-control" type="text" name="id_merek" value="{{ $tipe->id_merek}}">
     <br>
    <label>lokasi</label>
    <input class="form-control" type="file" name="lokasi" value="{{ $tipe->lokasi }}">
    <br>
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>
@endsection