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
              <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{$pastContestname->contest_name}}</p>
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info"></a></h5>
              <table class="table "> 
                <tr>
                <th> #SL </th>
                <th> Name </th>
                <th> Email </th>
                <th> Winning Position </th>
              </tr>
              <tbody>
                @foreach($pastContestWinner as $key=> $winner)
                <tr>
                  <td> {{$key+1}}</td>
                <td> {{$winner->user_name}}</td>
                <td> {{$winner->email}}</td>
                <td> {{$winner->winning_position}}</td>
              </tr>
              @endforeach
              </tbody>
              </table>
                   
      
    
         
         
            </div><!-- card-body -->
          </div><!-- card -->
        
   
        </div>
       </div>

    </div>
</div>
@endsection



