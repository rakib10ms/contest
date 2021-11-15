@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')
<style type="text/css">
  .color:hover{
  background: #0000ff;
  }
  body{
  background:background-color: #b8c6db;
background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
}
</style>


<div class="container">
	<div class="row mt-4">

<div class="col-md-10 mt-4">
<div class="card-deck card-deck-sm mg-x-0">
          <div class="card shadow-base bd-0 mg-0">
            <figure class=" rounded-top " style="width:100%;height: 350px;overflow-y: hidden;">
              <img class="img-fluid rounded-top color" src="{{asset('assets/uploads/contest/'.$contestDescription->image)}}" alt="Image" style="width:100%;height:100%;object-fit: cover;">
            </figure>
            <div class="card-body pd-25">
              <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{$contestDescription->topic_name}}</p>
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info">{{$contestDescription->name}}</a></h5>
              <p class="tx-14 tx-gray-600 mg-b-25">{{$contestDescription->description}} </p>
                    <p class="tx-16 mg-b-0">
                <a href="#" class="badge badge-warning p-2"><i class="fas fa-calendar-check fa-2x px-2"></i>{{$contestDescription->start_date}} </h5></a>
              

      <a href="#" class="badge badge-info p-2"><i class="fas fa-calendar-times fa-2x px-2"></i>{{$contestDescription->end_date}}</a>             

       </p>
      
    
               @if($check->exists())
               <div class="alert alert-danger my-3"> You already Participated this contest !</div>
               @else
             <a href="{{url('/contest-form',$contestDescription->id)}}" class="btn btn-primary my-3 d-block">Participate Contest</a>
                     
             @endif
         
            </div><!-- card-body -->
          </div><!-- card -->
        
   
        </div>
       </div>

    </div>
</div>
@endsection



