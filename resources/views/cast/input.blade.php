@extends('layout.master')
@section('judul')
    Form Input Data Cast Baru
@endsection

@section('content')
<form method="post" action="/cast/store">
    @csrf
    
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama">
        @error('nama')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="text" class="form-control" name="umur">
        @error('umur')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea class="form-control" name="bio" rows="4"></textarea>
        @error('bio')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <input type="submit" value="simpan" class="btn btn-primary btn-block">
</form>
    @endsection