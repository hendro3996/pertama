@extends('layout.app')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Tipe mobil<td>
            <td>uang muka</td>
            <td>angsuran</td>
            <td>Tools</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($data as $i=>$v)
            <tr>
                <td>{{ $v-> id }}</td>
                <td>{{ $v-> id_tipe }}</td>
                <td>{{$v-> uang_muka}}</td>
                <td>{{$v-> angsuran}}</td>
                <td>
                    <form action="{{route('kredit.destroy',['id'=>$v->id])}}" method="post">
                        <a class="btn btn-success" href="{{route('kredit.edit',['id'=>$v->id])}}" >Ubah</a>
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
<a href="{{route("kredit.create")}}"> permisi mau tambah</a>
@endsection