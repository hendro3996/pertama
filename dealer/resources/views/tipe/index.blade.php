@extends('layout.app')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Tipe Mobil</td>
            <td>merek</td>
            <td>Foto</td>
            <td>Tools</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($data as $i=>$v)
            <tr>
                <td>{{ $v-> id }}</td>
                <td>{{ $v-> tipe_mobil }}</td>
                <td>{{$v-> id_merek}}</td>
                <td><img src="{{asset('images/'.$v-> lokasi)}}" height="100px" width="100px"></td>
                <td>
                    <form action="{{route('tipe.destroy',['id'=>$v->id])}}" method="post">
                        <a class="btn btn-success" href="{{route('tipe.edit',['id'=>$v->id])}}" >Ubah</a>
                        |
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="button" onclick="if (confirm('Hapus ?')) this.form.submit();">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tr>
</tbody>
</table>
<a href="{{route("tipe.create")}}"> permisi mau tambah</a>
@endsection