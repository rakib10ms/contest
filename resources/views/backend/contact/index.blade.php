@extends('backend.master')
@section('section')


<div class="header d-flex justify-content-between">
<h1> All CONTACT USER INFO  </h1>
</div>



@include('message.message')


<table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">#SL</th>
       <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User Phone</th>
      <th scope="col">User message</th>
  
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@foreach($allContact as $key => $contact)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$contact->name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->phone}}</td>
      <td>{{$contact->message}}</td>
      
        <td>
    <a href="{{route('contact-delete',$contact->id)}}" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal{{$contact->id}}">
      Delete User
    </a>
      <!-- Modal -->
      <div class="modal fade" id="deleteModal{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <a href="{{route('contact-delete',$contact->id)}}" class="btn btn-primary">Confirm </a>
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