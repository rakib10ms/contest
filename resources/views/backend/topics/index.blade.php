@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> All TOPICS CATEGORY </h1>

<a href="{{route('topic.create')}}" class="btn btn-primary ">ADD TOPICS CATEGORY</a>
</div>

<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>
      <th scope="col">Topic Name</th>
      <th scope="col">Topic Description</th>
      <th scope="col">Topic Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
   @endif

    @foreach($topics as $key => $topic)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$topic->name}}</td>
      <td>{{$topic->description}}</td>
      <td>
      @if( $topic->status==1)
     <span class="badge badge-success">Active </span>
     @else
          <span class="badge badge-secondary">In Active </span>

     @endif
      </td>
        <td>
     <a href="{{route('topic.edit',$topic->id)}}" class="btn btn-success">EDIT  </a>
     <!-- Button trigger modal -->
      <a href="{{route('topic.destroy',$topic->id)}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$topic->id}}">
        DELETE
      </a>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal{{$topic->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Do You Confirm To Delete This?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
              <a href="{{route('topic.destroy',$topic->id)}}" class="btn btn-danger">Confirm</a>
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