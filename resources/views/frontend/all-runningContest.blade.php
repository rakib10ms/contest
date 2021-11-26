@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')

<style type="text/css">
  body{
  background:background-color: #b8c6db;
background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
}
</style>


<div class="container">
  
	<div class="row mt-4">

			@foreach($findContest as $contest)

<div class="col-md-4 mt-4">
<div class="card-deck card-deck-sm mg-x-0">
          <div class="card shadow-base bd-0 mg-0">
            <figure class="rounded-top " style="width:100%;height: 250px;object-fit: cover;overflow: hidden;">
              <img class="img-fluid rounded-top" src="{{asset('public/assets/uploads/contest/'.$contest->image)}}" alt="Image">
            </figure>
            <div class="card-body pd-25">
             <a href="{{url('/all-runningContest',$contest->topic_id)}}"> <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info"> {{$contest->topic_name}} </p></a>
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">{{$contest->name}}</a></h5>
              <p class="tx-14 tx-gray-600 mg-b-25">{{ Str::limit($contest->description, 90) }} </p>
              <p class="tx-16 mg-b-0">
                <a href="#" class="badge badge-warning p-2"><i class="fas fa-calendar-check fa-2x px-2"></i>{{$contest->start_date}} </h5></a>
              

      <a href="#" class="badge badge-info p-2"><i class="fas fa-calendar-check fa-2x px-2"></i>{{$contest->end_date}}</a>             

       </p>
              <a href="{{route('contest-desc',$contest->id)}}" class="btn btn-primary  my-3">Full Bio</a>
            </div><!-- card-body -->
          </div><!-- card -->
        
   
        </div>
       </div>
            @endforeach
  
    </div>
</div>
@endsection



