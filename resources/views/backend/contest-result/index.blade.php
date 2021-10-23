@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> CONTEST PARTICIPATES  </h1>
@include('message.message')

<a href="{{route('contest.create')}}" class="btn btn-primary ">CONTEST PARTICIPATES </a>
</div>

<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>

         <th scope="col">Contest Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">File</th>
      <th scope="col">Notes</th>
      <th scope="col">Submission Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@foreach( $contestResult as $key => $contest)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$contest->contest_name}}</td>
      <td>{{$contest->user_name}}</td>
      <td>{{$contest->email}}</td>
      <td>{{$contest->file}}</td>
    
      <td>{{$contest->notes}}</td>
      <td>{{$contest->updated_at}}</td>
     
        <td>
     <a href="" class="btn btn-success">EDIT  </a>
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