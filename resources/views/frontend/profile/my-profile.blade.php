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
  <h3> My Profile </h3>
 <form class="" action="" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="form-outline  mb-4">
        <input type="text" id="form6Example1" class="form-control" value="{{$user->name}}" />
        <label class="form-label" for="form6Example1">Name</label>
      </div>
      <div class="form-outline  mb-4">
        <input type="text" id="form6Example2" class="form-control" value="{{$user->email}}" />
        <label class="form-label" for="form6Example2">Email</label>
      </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" value="{{$user->phone}}" />
    <label class="form-label" for="form6Example3">Phone</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" value="{{$user->address}}" />
    <label class="form-label" for="form6Example4">Address</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">City</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Additional information</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
</form>
</div>

<div class="col-md-6">
  <h3> Update Password</h3>
    @if (count($errors))
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
      @endforeach
      @endif


   <form action="{{route('update-password',$user->id)}}" method="POST">
    @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="form-outline  mb-4">
        <input type="password" id="form6Example1" class="form-control" name="oldpassword"/>
        <label class="form-label" for="form6Example1">Old Password</label>
      </div>
      <div class="form-outline  mb-4">
        <input type="password" id="form6Example2" class="form-control" name="newpassword" />
        <label class="form-label" for="form6Example2">New Password</label>
      </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="password" id="form6Example3" class="form-control" name="password_confirmation" />
    <label class="form-label" for="form6Example3">Confirm Password</label>
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