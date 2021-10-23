@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> All USERS  </h1>

</div>

<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>
      <th scope="col">User Email</th>
      <th scope="col">User Phone</th>
      <th scope="col">User Address</th>
      <th scope="col">User Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
   @endif

    @foreach($allUsers as $key => $user)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->address}}</td>
      <td>
      @if( $user->status==1)
     <span class="badge badge-success">Active </span>
     @else
          <span class="badge badge-secondary">In Active </span>

     @endif
      </td>
      
       <td>
        <a href="{{url('/admin/changeStatus',$user->id)}}" class="btn btn-primary"> <i class="fa fa-edit mx-2"> </i>Change Status</a> 
        </td>
                    
      
      
    </tr>
    @endforeach
  

  </tbody>
</table>



@endsection