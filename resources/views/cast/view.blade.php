@extends('layout.master')
@section('judul')
    Halaman CAST
@endsection


@push('script')
<script src="{{asset('template/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@push('style')

@endpush



@section('content')
    <h1><a href="/cast/create" class="btn bg-gradient-primary btn-sm my-2">input data</a>
    </h1>
    <table id="example1" class="table  table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @forelse($cast as $key => $c)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$c->nama}}</td>
            <td>{{$c->umur}}</td>
            <td>
            
            <form action="/cast/{{$c->id}}" method="post">
                @csrf
                @method('delete')
                <a href="/cast/{{$c->id}}" class="btn btn-info btn-xs my-2">detail</a>
                <a href="/cast/{{$c->id}}/edit" class="btn btn-warning btn-xs my-2">edit</a>
                <input type="submit" value="delete" class="btn btn-danger btn-xs my-2">
            </form>
            </td>
        </tr>
        @empty
            <h1>tidak ada data</h1>
        @endforelse
        </tbody>
    </table>
@endsection