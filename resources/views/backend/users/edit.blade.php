@extends('backend.master')
@section('section')
<div class="header d-flex justify-content-between">
<h1> Edit User Status </h1>

</div>

<div class="col-md-6">
<div class="card card-body">

  <form action="{{route('updateStatus',$user->id)}}" method="POST">
  	@csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">Change Status</label>
    <select class="form-control" id="exampleFormControlSelect1" name="status">
      <option value= "1" {{$user->status=='1'? 'selected':''}}>Active</option>
      <option value= "0"{{$user->status=='0'? 'selected':''}}>InActive</option>
      
    </select>
  </div>
  <button type="submit" class="btn btn-primary"> Submit</button>
</form>
</div>
</div>
@endsection