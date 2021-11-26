@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')
<style type="text/css">
  button {
   display: block;
  }
</style>


<div class="container">
<div class="card my-5 card-body">
<h4> My Profile</h4>


   <div class="card" style="width: 350px;">
<img src="{{asset('public/assets/uploads/users/'.$myInfo->image)}} "class="card-image-top" style="width:120px; height: 120px; object-fit: cover;" />  <div class="card-body">
    <h5 class="card-title">My Profile</h5>
    <p class="card-text"> <button class="btn btn-light btn-sm">Name: </button>{{$myInfo->name}}</p>
    <p class="card-text"><button class="btn btn-light btn-sm"> Email: </button>{{$myInfo->email}}</p>
    <p class="card-text"><button class="btn btn-light btn-sm"> Contact NO:</button>{{$myInfo->phone}}</p>
    <p class="card-text"><button class="btn btn-light btn-sm"> District: </button>{{$myInfo->district}}</p>
    <p class="card-text"><button class="btn btn-light btn-sm"> Address: </button>{{$myInfo->address}}</p>
  </div>
</div>
   
	</div>
</div>

@endsection