@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')

<div class="container my-5">

<div class="card card-body">
<div class="container">
  <div class="row">
    <div class="col-md-6 ">

  <h3> Edit Profile </h3>
 <form class="" action="{{route('userupdate-profile',Auth::id())}}" method="POST" enctype="multipart/form-data">
  @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="text-right py-3">
    <img src="{{asset('public/assets/uploads/users/'.$user->image)}}" style="width:80px;border: 1px solid #c4c4c4; height: 80px;margin-top: -50px;object-fit: cover;" >
  </div>
  @if(session()->has('status'))
    <div class="alert alert-success">
        {{ session()->get('status') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="form-outline  mb-4">
                <label class="form-label" for="form6Example1">Name</label>

        <input type="text" id="form6Example1" class="form-control" name="name" value="{{$user->name}}" />
      </div>
      <div class="form-outline  mb-4">
                <label class="form-label" for="form6Example2">Email</label>

        <input type="text" id="form6Example2" class="form-control" value="{{$user->email}}" readonly="" />
      </div>

  <!-- Text input -->

    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Profile Image</label>

    <input type="file" id="form6Example3" class="form-control" name="image" value="" />
  </div> 
  <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Phone</label>

    <input type="text" id="form6Example3" class="form-control" name="phone" value="{{$user->phone}}" />
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">District</label>

    <input type="text" id="form6Example4" class="form-control" name="district" value="{{$user->district}}" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Address</label>

    <input type="text" id="form6Example5" class="form-control" name="address" value="{{$user->address}}"/>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
</form>
</div>

<div class="col-md-6">
 <a href="{{route('my-profileView')}}" class="btn btn-info mx-2 float-right "> View Profile</a>

  <h3> Update Password</h3>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <form action="{{route('update-password',$user->id)}}" method="POST">
    @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="form-outline  mb-4">
                <label class="form-label" for="form6Example1">Old Password</label>

        <input type="password" id="form6Example1" class="form-control" name="oldpassword"/>
      </div>
      <div class="form-outline  mb-4">
                <label class="form-label" for="form6Example2">New Password</label>

        <input type="password" id="form6Example2" class="form-control" name="newpassword" />
      </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Confirm Password</label>

    <input type="password" id="form6Example3" class="form-control" name="password_confirmation" />
  </div>



  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update Password</button>
</form>
  </div>
</div>
</div>
</div>

</div>

@endsection