@extends('backend.master')
@section('section')

<h1> EDIT CONTEST</h1>
@include('message.message')

	<form action="{{route('contest.update', $editContest->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-12">
    <div class="form-group col-md-10">
      <label for="text">Contest Name *</label>
      <input type="text" class="form-control" id="text" placeholder="Contest Name"  name="name" value="{{$editContest->name}}">
    </div>


        <div class="form-group col-md-10">
   <label for="topic_id">Topic Name *</label>
      <select id="" class="form-control" name="topic_id">
           <option value="">Select Topic--</option>

        @foreach($topics as $topic)
        <option value="{{$topic->id}}" {{$editContest->topic_id==$topic->id?'selected':''}}>{{$topic->name}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1">Description *</label>
    <textarea class="form-control" rows="5"  name="description">{{$editContest->description}}
    </textarea>
 
  </div>

   <div class="form-group  col-md-10">
    <label for="exampleFormControlTextarea1" class="d-block">Image *</label>
<img src="{{asset('assets/uploads/contest/'.$editContest->image)}}" style="height:100px;width: 100px;object-fit:cover"/>   <input type="file" class="form-control" id="text" placeholder="Contest Image"  name="image" value="{{$editContest->image}}" >

 
  </div>


  

  
    <div class="form-group col-md-10">
   <label for="startdate">Start Date *</label>
     <input type="date" class="form-control" id="startdate" placeholder="Start Date"  name="start_date"         value="{{$editContest->start_date}}"
>

    </div>

 
    <div class="form-group col-md-10">
   <label for="enddate">End  Date *</label>
     <input type="date" class="form-control" id="enddate" placeholder="End  Date"  name="end_date" value="{{$editContest->end_date}}"
>

    </div>

        <div class="form-group col-md-10">
   <label for="status">Status *</label>
      <select id="status" class="form-control" name="status" >
           <option value="">Select Status</option>

        <option value="1" {{$editContest->status==1?'selected':''}}>Active</option>
        <option value="0" {{$editContest->status==0?'selected':''}}>InActive</option>
      </select>
    </div>


 <div class="form-group">
  <button type="submit" class="btn btn-primary">Update</button>
</div>
</div>
</div>


</form>



@endsection

