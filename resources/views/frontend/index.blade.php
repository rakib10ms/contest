@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')
<!--The html below this line is for display purpose only-->

<div class="py-5 text-center text-white bg-primary">
<div class="container py-5">
<div class="row py-5">
<div class="mx-auto col-lg-10">
  <h1 class="display-4 mb-4 ">This is a beautiful Bootstrap 4 Navbar with Social Media Icons </h1>
  <p class="lead mb-5">There is nothing more rare, nor more beautiful, than a woman being unapologetically herself; comfortable in her perfect imperfection. To me, that is the true essence of beauty.  </p> <a href="#" class="btn btn-lg btn-outline-light mx-1">Take me there</a> 
</div>
</div>
</div>
</div>

<div class="container">
	<div class="row mt-4">
			@foreach($contests as $contest)

<div class="col-md-4 mt-4">
<div class="card-deck card-deck-sm mg-x-0">
          <div class="card shadow-base bd-0 mg-0">
            <figure class="card-item-img bg-mantle rounded-top " style="width:100%;height: 270px;object-fit: cover;overflow: hidden;">
              <img class="img-fluid rounded-top" src="{{asset('assets/uploads/contest/'.$contest->image)}}" alt="Image">
            </figure>
            <div class="card-body pd-25">
              <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{$contest->topic_name}}</p>
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">{{$contest->name}}</a></h5>
              <p class="tx-14 tx-gray-600 mg-b-25">{{$contest->description}} </p>
              <p class="tx-13 mg-b-0">
                <a href="" class="tx-info">12 Likes</a>
                <a href="" class="tx-info mg-l-5">{{$contest->start_date}}</a>
                <a href="" class="tx-info mg-l-5"><i class="icon ion-more"></i> {{$contest->end_date}}</a>
              </p>
              <a href="{{route('contest-desc',$contest->id)}}" class="btn btn-primary btn-sm my-2">Full Bio</a>
            </div><!-- card-body -->
          </div><!-- card -->
        
   
        </div>
       </div>
            @endforeach

    </div>
</div>
@endsection



