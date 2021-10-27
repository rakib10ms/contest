@extends('backend.master')
@section('section')

<h1>CONTSEST WINNER SELECTION EDIT</h1>
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

        <option value="1" {{$specific->winning_position=='1'?'selected':''}} >First</option>
        <option value="2"{{$specific->winning_position=='2'?'selected':''}} >Second</option>
        <option value="3" {{$specific->winning_position=='3'?'selected':''}}>Third</option>
        <option value="4" {{$specific->winning_position=='4'?'selected':''}}>Fourth</option>
        <option value="5" {{$specific->winning_position=='5'?'selected':''}}>Fifth</option>
        <option value="6" {{$specific->winning_position=='6'?'selected':''}}>Sixth</option>
        <option value="7" {{$specific->winning_position=='7'?'selected':''}}>Seven</option>
        <option value="8" {{$specific->winning_position=='8'?'selected':''}}>Eight</option>
        <option value="9" {{$specific->winning_position=='9'?'selected':''}}>Nine</option>
        <option value="10" {{$specific->winning_position=='10'?'selected':''}}>Ten</option>
      </select>
    </div>

     <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Winning Prize*</label>
    <textarea class="form-control" id="" rows="5"  name="winning_price" >{{$specific->winning_price}}</textarea>
 
    </div>



    <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Prize Name/Message*</label>
    <textarea class="form-control" id="" rows="5"  name="message" >{{$specific->message}}</textarea>
 
  </div>

  
 

 <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>


</form>






@endsection