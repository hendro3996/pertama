@extends('layout.app')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <td>ID</td>
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
                <td>{{ $v-> merek }}</td>
                <td><img src="{{asset('images/'.$v-> lokasi)}}" height="100px" width="200px"></td>
                <td>
                    <form action="{{route('merek.destroy',['id'=>$v->id])}}" method="post">
                        <a class="btn btn-success" href="{{route('merek.edit',['id'=>$v->id])}}" >Ubah</a>
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
<a href="{{route("merek.create")}}"> permisi mau tambah</a>
@endsection