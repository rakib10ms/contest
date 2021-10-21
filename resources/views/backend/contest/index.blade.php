@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> All TOPICS  </h1>

<a href="{{route('contest.create')}}" class="btn btn-primary ">ADD CONTEST</a>
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

<!--     @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
   @endif
 -->
    <tr>
      <th scope="row">lol</th>
      <td>lol</td>
      <td>lol</td>
      <td>
     dsada
      </td>
        <td>
     <a href="" class="btn btn-success">EDIT  </a>
     <!-- Button trigger modal -->
      <a href="" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
        DELETE
      </a>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <a href="" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
      </div>

      </td>
      
      
    </tr>
  

  </tbody>
</table>

@endsection