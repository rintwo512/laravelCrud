@extends('temp.main')
@section('title', 'Detail')
@section('content')
<div class="card" style="width: 18rem;text-align:center">
<img style="width:100px; height:100px;margin-left:40%" src="{{url('assets/img/' . $singel->image)}}" class="card-img-top img-thumbnail" alt="...">
        <div class="card-body">
        <h5 class="card-title">Nama : {{$singel->name}}</h5>
        <h5 class="card-title">Email : {{$singel->email}}</h5>
        <h5 class="card-title">Nik : {{$singel->nik}}</h5>
         
        <a href="{{'/data'}}" class="btn btn-primary">Back</a>
        </div>
      </div>
      @endsection