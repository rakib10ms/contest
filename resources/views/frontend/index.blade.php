@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')

<style type="text/css">
  .card-item-img{

  }
body{
  background:background-color: #b8c6db;
background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
}
</style>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="width: 100%;height:60vh;object-fit:cover; margin:0 auto;">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="https://us.123rf.com/450wm/nexusplexus/nexusplexus2001/nexusplexus200106784/139002611-hand-touch-technology-background-with-lines-and-dots-3d-rendering.jpg?ver=6" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://media.istockphoto.com/photos/businessman-writing-yellow-five-star-to-customer-evaluation-service-picture-id1276634862?b=1&k=20&m=1276634862&s=170667a&w=0&h=WWr2lgOPbg5iE3w6ycKSvdrysktLoztbmpfruFTPZyo=" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://st3.depositphotos.com/1071909/19574/i/600/depositphotos_195745476-stock-photo-artificial-intelligence-ai.jpg" alt="Third slide">
    </div>
  </div>

</div>

<div class="container">
	<div class="row mt-4 ">
			@foreach($contests as $contest)

    <div class="col-md-4 mt-4">
            <div class="card">
                      <div class="card shadow-base bd-0 mg-0">
                        <figure class=" bg-mantle rounded-top " style="width:100%;min-height: 250px;object-fit: cover;overflow: hidden;">
                          <img class="img-fluid rounded-top" src="{{asset('public/assets/uploads/contest/'.$contest->image)}}" alt="Image">
                        </figure>
                        <div class="card-body ">
                         <a href="{{url('/all-runningContest',$contest->topic_id)}}"> <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info"> {{$contest->topic_name}} </p></a>
                          <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="#" class="tx-inverse hover-info">{{$contest->name}}</a></h5>
                          <p class="tx-14 tx-gray-600 mg-b-25">{{ Str::limit($contest->description, 90) }} </p>
                          <p class="tx-16 mg-b-0">
                            <a href="#" class="badge badge-warning p-2"><i class="fas fa-calendar-check fa-2x px-2"></i> {{date('d-m-Y', strtotime($contest->start_date));}}</h5></a>
                          

                  <a href="#" class="badge badge-dark p-2"><i class="fas fa-calendar-times fa-2x px-2"></i>
                    {{date('d-m-Y', strtotime($contest->end_date));}}
                </a>             

                   </p>
                          <a href="{{route('contest-desc',$contest->id)}}" class="btn btn-primary  my-3">Full Bio</a>
                        </div><!-- card-body -->
                      </div><!-- card -->
                    
               
                    </div>
                   </div>
            @endforeach
   
   </div>
     <div class=" mt-2 d-flex justify-content-center">
            {!!$contests->links("pagination::bootstrap-4") !!}
        </div>
</div>

</div>

@endsection



