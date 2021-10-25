@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> THIS CONTEST PARTICIPANTS  </h1>
</div>



@include('message.message')


<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>
      <th scope="col">Contest Name</th>
      <th scope="col">User Name</th>
    </tr>
  </thead>
  <tbody>


@foreach($contestSpecific as $key => $contest)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$contest->contest_name}}</td>
      <td>{{$contest->user_name}}</td>
        
    </tr>
  @endforeach

  </tbody>
</table>

@endsection