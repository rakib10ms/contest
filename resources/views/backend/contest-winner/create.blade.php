@extends('backend.master')
@section('section')

<h1>CONTSEST WINNER SELECTION</h1>
@include('message.message')

	<form action="" method="POST" >
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

               <option value=""></option>
      </select>
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
    <label for="exampleFormControlTextarea1">Message*</label>
    <textarea class="form-control" id="" rows="5"  name="message" ></textarea>
 
  </div>

  


  

  
    <div class="form-group col-md-10">
   <label for="startdate">Start Date *</label>
     <input type="date" class="form-control" id="startdate" placeholder="Start Date"  name="start_date" >

    </div>

 
    <div class="form-group col-md-10">
   <label for="enddate">End  Date *</label>
     <input type="date" class="form-control" id="enddate" placeholder="End  Date"  name="end_date"  >

    </div>

 

 <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>


</form>






@endsection