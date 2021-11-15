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
     
     <a href="{{route('contest.select',$contest->id)}}" class="btn btn-info"> <i class="fa fa-trophy mx-2" aria-hidden="true"></i>Update Winner  </a>

      </td>
      
      
    </tr>
  @endforeach

  </tbody>
</table>

@endsection