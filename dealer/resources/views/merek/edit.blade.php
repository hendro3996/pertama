<form method="post" action="{{route('merek.update',['id'=>$merek->id])}}" enctype="multipart/form-data">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    
     <br>
    <label>merek</label>
    <input class="form-control" type="text" name="merekmobil" value="{{ $merek->merek}}">
     <br>
    <label>lokasi</label>
    <input class="form-control" type="file" name="lokasi" value="{{ $merek->lokasi }}">
    <br>
    <button class="btn btn-success" type="submit">Simpan</button> | 
    <button class="btn btn-danger" type="button" onclick="history.back();" value="back">Batal</button> 
</form>