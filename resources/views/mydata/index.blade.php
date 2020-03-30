@extends('temp.main')
@section('title','Home Page')
@section('content')
<div class="container">
    <table class="table table-borderless">
            <a href="" class="btn btn-primary btn-sm mt-5" data-toggle="modal" data-target="#add_data">Add Data</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Nik</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($datas as $row)
          <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->nik}}</td>
            <td>{{$row->image}}</td>
            <td>
            <a href="{{'/data/edit/' . $row->id}}" class="btn btn-success btn-sm">Update</a>
            <a href="{{'/data/delete/' . $row->id}}" class="btn btn-danger btn-sm">Delete</a>
            <a href="{{url('/data/detail/' . $row->id)}}" class="btn btn-warning btn-sm">Detail</a>
            </td>
          </tr>
          @endforeach      
        </tbody>
      </table>
    </div>
 
      
      <!-- Modal -->
      <div class="modal fade" id="add_data" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="{{'data'}}" method="post">
                        @csrf
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name...">
                            </div>                           
                            <div class="form-group">
                              <label for="email">email</label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email...">
                            </div>                           
                            <div class="form-group">
                              <label for="Nik">Nik</label>
                              <input type="number" class="form-control" id="nik" name="nik" placeholder="Enter Nik...">
                            </div>                           
                         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      @endsection