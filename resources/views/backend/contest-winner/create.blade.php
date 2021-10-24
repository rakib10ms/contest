@extends('backend.master')
@section('section')

<h1>CONTSEST WINNER SELECTION</h1>
@include('message.message')



	<form action="{{route('contest.selectUpdate',$specific->id)}}" method="POST" >
    @csrf
    <div class="row">
      <div class="col-md-12">
    <div class="form-group col-md-10">
      <label for="text">Contest Name *</label>
      <input type="text" class="form-control" id="text" placeholder="Contest Name"  value="{{$specific->contest_name}}" readonly="" >

           <div class="form-group col-md-10">
      <input type="text" class="form-control" id="text" placeholder="User Name"  name="contest_id" value="{{$specific->contest_id}}" hidden>
    </div>

    </div>



        <div class="form-group col-md-10">
      <label for="text">User Name </label>
      <input type="text" class="form-control" id="text" placeholder="User Name"   value="{{$specific->user_name}}" readonly="" >
    </div>
        <div class="form-group col-md-10">
      <input type="text" class="form-control" id="text" placeholder="User Name"  name="user_id" value="{{$specific->user_id}}" hidden="">
    </div>


         <div class="form-group col-md-10">
      <label for="text">User Email </label>
      <input type="text" class="form-control" id="text" placeholder="User Name"   value="{{$specific->email}}" readonly="">
    </div>


    
           <div class="form-group col-md-10">
   <label for="status">Position *</label>
      <select id="status" class="form-control" name="winning_position" >
           <option value="">Winner Position--</option>

        <option value="1" >First</option>
        <option value="2" >Second</option>
        <option value="3" >Third</option>
        <option value="4" >Fourth</option>
        <option value="5" >Fifth</option>
        <option value="6" >Sixth</option>
        <option value="7" >Seven</option>
        <option value="8" >Eight</option>
        <option value="9" >Nine</option>
        <option value="10" >Ten</option>
      </select>
    </div>

     <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Winning Prize*</label>
    <textarea class="form-control" id="" rows="5"  name="winning_price" ></textarea>
 
    </div>



    <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Prize Name/Message*</label>
    <textarea class="form-control" id="" rows="5"  name="message" ></textarea>
 
  </div>

  
 

 <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>


</form>






@endsection