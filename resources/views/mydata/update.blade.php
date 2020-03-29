@extends('temp.main')
@section('title', 'Update Data')
@section('content')
<div class="container">
<form action="{{'/data/update/' . $id->id}}" method="post">
        @csrf
            <div class="form-group">
              <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$id->name}}">
            </div>                           
            <div class="form-group">
              <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$id->email}}">
            </div>                           
            <div class="form-group">
              <label for="Nik">Nik</label>
            <input type="number" class="form-control" id="nik" name="nik" value="{{$id->nik}}">
            </div>                           
         


<a href="{{'/data'}}" class="btn btn-danger">Close</a>
<button type="submit" class="btn btn-primary">Save</button>
</div>

</form>
</div>
@endsection