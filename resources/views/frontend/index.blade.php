@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')


<div class="container">
	<div class="row mt-4">
			@foreach($contests as $contest)

<div class="col-md-4">
<div class="card-deck card-deck-sm mg-x-0">
          <div class="card shadow-base bd-0 mg-0">
            <figure class="card-item-img bg-mantle rounded-top">
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
            </div><!-- card-body -->
          </div><!-- card -->
        
   
        </div>
       </div>
            @endforeach

    </div>
</div>
@endsection



