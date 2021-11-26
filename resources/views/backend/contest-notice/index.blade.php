@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> All CONTEST NOTICE </h1>

<a href="{{route('contest-notice.create')}}" class="btn btn-primary ">ADD CONTEST NOTICE</a>
</div>

<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>
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

  @foreach( $allConNotice as $notice)
    <tr>
      <th scope="row"></th>
      <td>{{$notice->description}}</td>
      <td>
     
     <span class="badge badge-success">Active </span>
          <span class="badge badge-secondary">In Active </span>

      </td>
        <td>
     <a href="{{route('contest-notice.edit',$notice->id)}}" class="btn btn-success">EDIT  </a>
     <!-- Button trigger modal -->
      <a href="{{route('contest-notice.delete',$notice->id)}}" type="button" class="btn btn-danger">
        DELETE
      </a>

      <!-- Modal -->
     <div class="modal fade" id="exampleModal{{$notice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <a href="{{route('contest-notice.delete',$notice->id)}}" class="btn btn-primary">Save changes</a>
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