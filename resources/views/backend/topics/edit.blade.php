@extends('backend.master')
@section('section')

<h1> EDIT TOPICS</h1>

<div class="card card-body">
	<form action="{{route('topic.update',$topicEdit->id)}}" method="POST">
    @csrf
    <div class="form-group col-md-10">
      <label for="text">Topic Name *</label>
      <input type="text" class="form-control" id="text" placeholder="Topic Name"  name="name" value="{{$topicEdit->name}}">
   
    </div>


    <div class="form-group col-md-10 ">
    <label for="description" class="d-block">Description *</label>
    <textarea class="form-control" id="my-editor" rows="5"  name="description">{{$topicEdit->description}}</textarea>
  
     </div>
  
    <div class="form-group col-md-10">
      <label for="status">Status *</label>
      <select id="status" class="form-control" name="status" >
        <option value="1" {{$topicEdit->status==1?'selected':''}}>Active</option>
        <option value="0" {{$topicEdit->status==0?'selected':''}}>InActive</option>
      </select>

    </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
  </form>

</div>






@endsection