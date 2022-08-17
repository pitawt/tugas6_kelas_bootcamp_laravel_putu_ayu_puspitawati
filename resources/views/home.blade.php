@extends('layout.master')
@section('judul')
    Halaman Home
@endsection

@section('content')
    <h1>Halaman Home {{$data['nama_depan']}} {{$data['nama_belakang']}}</h1>
    @endsection