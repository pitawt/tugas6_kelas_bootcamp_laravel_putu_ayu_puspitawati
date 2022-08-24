@extends('layout.master')
@section('judul')
    Form Edit Data
@endsection

@section('content')
<form method="post" action="/cast/{{$c->id}}">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" value="{{$c->nama}}" class="form-control" name="nama">
        @error('nama')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Umur</label>
        <input type="text" value="{{$c->umur}}" class="form-control" name="umur">
        @error('umur')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea class="form-control" name="bio" rows="4">{{$c->bio}}</textarea>
        @error('bio')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <input type="submit" value="simpan" class="btn btn-primary btn-block">
</form>
@endsection