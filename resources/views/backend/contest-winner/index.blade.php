@extends('backend.master')
@section('section')

<h1>ALL WINNER LIST</h1>
@include('message.message')
<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>

         <th scope="col">Contest Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Winning Position</th>
      <th scope="col">Winning Price</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@foreach( $all as $key => $contest)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$contest->contest_name}}</td>
      <td>{{$contest->user_name}}</td>
      <td>{{$contest->email}}</td>
      <td>{{$contest->winning_position}}</td>
      <td>{{$contest->winning_price}}</td>
    
      <td>{{$contest->message}}</td>
     
        <td>
     
   
      <a href="{{route('contestwinner.delete',$contest->id)}}" class="btn btn-danger " type="button" data-bs-toggle="modal" data-bs-target="#deleteModal{{$contest->id}}"> <i class="fa fa-trophy mx-2" aria-hidden="true"></i>Delete Winner  </a>



 

<!-- Modal -->
<div class="modal fade" id="deleteModal{{$contest->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

      </td>
      
      
    </tr>
  @endforeach

  </tbody>
</table>

@endsection