@extends('layout.app')

@section('content')


<form method="post" action="{{route('kredit.update',['id'=>$kredit->id])}}">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    <br>
    <label>id tipe mobil </label>
    <input class="form-control" type="text" name="tipe" value="{{ $kredit->id_tipe }}">
    <br>
     <br>
    <label>uang muka</label>
    <input class="form-control" type="text" name="uang" value="{{ $kredit->uang_muka}}">
     <br>
    <label>angsuran</label>
    <input class="form-control" type="text" name="angsuran" value="{{ $kredit->angsuran}}">
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>
@endsection