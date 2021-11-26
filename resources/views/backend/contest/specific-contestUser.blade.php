
@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> CONTEST PARTICIPANTS  </h1>
@include('message.message')

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


@foreach( $contestSpecific as $key => $contest)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$contest->contest_name}}</td>
      <td>{{$contest->user_name}}</td>
      <td>{{$contest->email}}</td>
      <td>{{$contest->file}}</td>
    
      <td>{{$contest->notes}}</td>
      <td>{{$contest->updated_at}}</td>
     
        <td>
     <a href="{{route('contest.select',$contest->id)}}" class="btn btn-info"> <i class="fa fa-trophy mx-2" aria-hidden="true"></i> Update Winner  </a>

      </td>
      
      
    </tr>
  @endforeach

  </tbody>
</table>

@endsection