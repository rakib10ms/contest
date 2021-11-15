
@extends('backend.master')
@section('section')
<style>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</style>

<h1> ADD CONTEST</h1>
@include('message.message')

    <form action="{{route('contest.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-12">
    <div class="form-group col-md-10">
      <label for="text">Contest Name *</label>
      <input type="text" class="form-control" id="text" placeholder="Contest Name"  name="name" >
    </div>


        <div class="form-group col-md-10">
   <label for="topic_id">Topic Name *</label>
      <select id="" class="form-control" name="topic_id">
           <option value="">Select Topic--</option>

        @foreach($topics as $topic)
        <option value="{{$topic->id}}">{{$topic->name}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Description *</label>
    <textarea class="form-control"  rows="5"  name="description" ></textarea>
 
  </div>

   <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Image *</label>
   <input type="file" class="form-control" id="text" placeholder="Contest Image"  name="image"  >

 
  </div>


  

  
    <div class="form-group col-md-10">
   <label for="startdate">Start Date *</label>
     <input type="text"  id="datepicker" placeholder="Start Date"  name="start_date"  class="form-control datepicker" autocomplete="off">

    </div>

 
    <div class="form-group col-md-10">
   <label for="enddate">End  Date *</label>
     <input type="text"  class="form-control datepicker" autocomplete="off" id="enddate" placeholder="End  Date"  name="end_date"  >

    </div>

        <div class="form-group col-md-10">
   <label for="status">Status *</label>
      <select id="status" class="form-control" name="status" >
           <option value="">Select Status</option>

        <option value="1">Active</option>
        <option value="0">InActive</option>
      </select>
    </div>


 


 <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>


</form>


@endsection

@section('scripts')
<script type="text/javascript">
   
    $('.datepicker').datepicker({ 
        startDate: new Date()
    });
  
</script>
@endsection




