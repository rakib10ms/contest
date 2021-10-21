@extends('backend.master')
@section('section')

<h1> ADD CONTEST</h1>

	<form action="{{route('contest.store')}}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-12">
    <div class="form-group col-md-10">
      <label for="text">Contest Name *</label>
      <input type="text" class="form-control" id="text" placeholder="Contest Name"  name="name" >
    </div>


        <div class="form-group col-md-10">
   <label for="topic_id">Topic Name *</label>
      <select id="topic_id" class="form-control" name="topic_id" required>
        @foreach($topics as $topic)
        <option value="{{$topic->id}}">{{$topic->name}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Description *</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  name="description"  required></textarea>
 
  </div>

   <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Image *</label>
   <input type="file" class="form-control" id="text" placeholder="Contest Image"  name="image" required="" >

 
  </div>


  

  
    <div class="form-group col-md-10">
   <label for="startdate">Start Date *</label>
     <input type="date" class="form-control" id="startdate" placeholder="Start Date"  name="start_date" required="" >

    </div>

 
    <div class="form-group col-md-10">
   <label for="enddate">End  Date *</label>
     <input type="date" class="form-control" id="enddate" placeholder="End  Date"  name="end_date" required="" >

    </div>

        <div class="form-group col-md-10">
   <label for="status">Status *</label>
      <select id="status" class="form-control" name="status" required>
        <option value="1">Active</option>
        <option value="0">InActive</option>
      </select>
    </div>


 <div class="form-group">
  <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</div>
</div>


</form>






@endsection