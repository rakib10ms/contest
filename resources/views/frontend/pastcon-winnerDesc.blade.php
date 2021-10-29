@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')


<div class="container">
	<div class="row mt-4">

<div class="col-md-8 mt-4">
<div class="card-deck card-deck-sm mg-x-0">
          <div class="card shadow-base bd-0 mg-0">
            <figure class="card-item-img bg-mantle rounded-top " style="width:100%;height: 270px;object-fit: cover;overflow: hidden;">
              <img class="img-fluid rounded-top" src="" alt="Image">
            </figure>
            <div class="card-body pd-25">
              <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{$pastContestWinner->contest_id}}</p>
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">{{ $pastContestWinner->user_id}}</a></h5>
              <p class="tx-14 tx-gray-600 mg-b-25">{{$pastContestWinner->winning_position}} </p>
                    <p class="tx-16 mg-b-0">
                <a href="" class="badge badge-warning p-2"><i class="fas fa-calendar-check fa-2x px-2"></i></h5></a>
              

      <a href="" class="badge badge-info p-2"><i class="fas fa-calendar-check fa-2x px-2"></i></a>             

       </p>
      
    
         
         
            </div><!-- card-body -->
          </div><!-- card -->
        
   
        </div>
       </div>

    </div>
</div>
@endsection



