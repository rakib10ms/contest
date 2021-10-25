@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')

<div class="container">
<div class="card my-5 card-body">
<h4> My Profile</h4>

<div class="wrapper">
	<table class="table table-borderd">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">District</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row">1</th>
     
      <td><img src="{{asset('assets/uploads/user/'.$myInfo->image)}} " style="width:80px; height: 80px; object-fit: cover;" /></td>
      <td>{{$myInfo->name}}</td>
      <td>{{$myInfo->email}}</td>
      <td>{{$myInfo->phone}}</td>
      <td>{{$myInfo->district}}</td>
      <td>{{$myInfo->address}}</td>
    </tr>
   
  </tbody>
</table>
	</div>
</div>
</div>

@endsection