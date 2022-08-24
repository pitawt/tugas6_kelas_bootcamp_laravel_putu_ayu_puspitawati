@extends('layout.master')
@section('judul')
    Detail Data {{$c->nama}}
@endsection

@section('content')
<div class=" col-md-4">
    <div class="card-body box-profile">
        <div class="text-center"> 
            <img class="profile-user-img img-fluid img-circle" src="{{asset('template/dist/img/AdminLTELogo.png')}}" >
        </div>

        <h3 class="profile-username text-center">{{$c->nama}}</h3>

        <p class="text-muted text-center">{{$c->umur." Tahun"}}</p>
        <hr>
        <strong></strong>
        <p class="text-muted" align="justify">
            {{$c->bio}}
        </p>
        <hr>
        <a href="/cast/{{$c->id}}/edit" class="btn btn-warning btn-sm btn-block"><b>edit</b></a>
    </div>
</div>
    @endsection