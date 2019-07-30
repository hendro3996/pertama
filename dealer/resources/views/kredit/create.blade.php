@extends('layout.app')

@section('content')


<form method="post" action="{{route("kredit.store")}}">
    {{ csrf_field()}}
    
    <br>
    <label>id tipe mobil</label>
    <input class="form-control" type="text" name="id_tipe">
    <br>
     <br>
    <label>uang muka</label>
    <input class="form-control" type="text" name="uang">
     <br>
    <label>angsuran</label>
    <input class="form-control" type="text" name="angsuran">
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>
@endsection