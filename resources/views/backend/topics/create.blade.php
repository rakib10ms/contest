@extends('backend.master')
@section('section')

<h1> ADD TOPICS CATEGORY</h1>
@include('message.message')

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
      <select id="status" class="form-control" name="status" >
       <option value="">Select Status</option>

        <option value="1">Active</option>
        <option value="0">InActive</option>
      </select>
    </div>


    <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Description *</label>
    <textarea class="form-control" id="my-editor" rows="5"  name="description"></textarea>
 
</div>

 <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>


</form>






@endsection