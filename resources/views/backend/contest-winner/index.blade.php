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
     <a href="" class="btn btn-success"> <i class="fa fa-trophy mx-2" aria-hidden="true"></i> Edit Winner  </a>
     <!-- Button trigger modal -->
      <a href="" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
        DELETE
      </a>

 

      </td>
      
      
    </tr>
  @endforeach

  </tbody>
</table>

@endsection