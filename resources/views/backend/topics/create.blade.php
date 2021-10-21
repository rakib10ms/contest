@extends('backend.master')
@section('section')

<h1> ADD TOPICS</h1>

	<form action="{{route('topic.store')}}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-12">
    <div class="form-group col-md-10">
      <label for="text">Topic Name *</label>
      <input type="text" class="form-control" id="text" placeholder="Topic Name"  name="name" >
    </div>
  
    <div class="form-group col-md-10">
   <label for="status">Status *</label>
      <select id="status" class="form-control" name="status" required>
        <option value="1">Active</option>
        <option value="0">InActive</option>
      </select>
    </div>


    <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Description *</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="description"  required></textarea>
 
</div>

 <div class="form-group">
  <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</div>
</div>


</form>






@endsection