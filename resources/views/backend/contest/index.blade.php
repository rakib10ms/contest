@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> All CONTEST  </h1>

<div class="col-md-6 d-flex">
  <form action="{{route('contest.search')}}" method="POST">
    @csrf
<div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="contest_code" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</form>
</div>



@include('message.message')

<a href="{{route('contest.create')}}" class="btn btn-primary ">ADD CONTEST</a>
</div>

<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>
       <th scope="col">Contest Code</th>
      <th scope="col">Contest Name</th>
      <th scope="col">Topic Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Contest Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@foreach($contests as $key => $contest)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$contest->code}}</td>
      <td>{{$contest->name}}</td>
      <td>{{$contest->topic_name}}</td>
      <td>{{$contest->description}}</td>
      <td><img src="{{asset('assets/uploads/contest/'.$contest->image)}}" style="height:100px;width: 100px;object-fit:cover"/></td>
      <td>{{$contest->start_date}}</td>
      <td>{{$contest->end_date}}</td>
      <td>
        @if( $contest->status==1)
       <span class="badge badge-success">Active </span>
       @else
            <span class="badge badge-secondary">In Active </span>

       @endif
     </td>    
        <td>
     <a href="{{route('contest.edit',$contest->id)}}" class="btn btn-success">EDIT  </a>
     <a href="{{route('contest.specificUsers',$contest->id)}}" class="btn btn-info">All Users  </a>
     <!-- Button trigger modal -->
      <a href="{{route('contest.destroy',$contest->id)}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$contest->id}}">
        DELETE
      </a>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal{{$contest->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Do You Confirm To Delete This?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              <a href="{{route('contest.destroy',$contest->id)}}" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
      </div>

      </td>
      
      
    </tr>
  @endforeach

  </tbody>
</table>

@endsection