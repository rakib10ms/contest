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

<div class="col-md-12 mt-4">
<div class="card-deck ">
          <div class="card  bd-0 mg-0">
            <figure class=" " style="width:100%;height: 350px;overflow-y: hidden;">
              <img class="img-fluid rounded-top" src="{{asset('public/assets/uploads/contest/'.$pastCon->image)}}" alt="Image"  style="width:100%;height:100%;object-fit: cover;">
            </figure>
            <div class="card-body pd-25">
              <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{$pastCon->name}}</p>
              <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="" class="tx-inverse hover-info"></a></h5>
              <table class="table "> 
                <tr>
                <th> #SL </th>
                <th> Name </th>
                <th> Zilla </th>
                <th> Email </th>
                <th> Winning Position </th>
              </tr>
              <tbody>
               @if(count($pastContestWinner)==0)
               <div class="alert alert-success"> Contest winner result will update soon by Admin..!</div> 
               @else
                @foreach($pastContestWinner as $key=> $winner)
                <tr>
                  <td> {{$key+1}}</td>
                <td> {{$winner->user_name}}</td>
                <td> {{$winner->district}}</td>
                <td> {{$winner->email}}</td>
                <td> 
                  @if($winner->winning_position=='1')
                  <badge class="badge badge-info py-2 px-3">First </badge>
                  @elseif($winner->winning_position=='2')
                  <badge class="badge badge-info py-2 px-3">Second</badge>
                       @elseif($winner->winning_position=='3')
                  <badge class="badge badge-info py-2 px-3">Third</badge>
                       @elseif($winner->winning_position=='4')
                  <badge class="badge badge-info py-2 px-3">Fourth</badge>

                       @elseif($winner->winning_position=='5')
                  <badge class="badge badge-info py-2 px-3">Fifth</badge>
                       @elseif($winner->winning_position=='6')
                  <badge class="badge badge-info py-2 px-3">Sixth</badge>
                       @elseif($winner->winning_position=='7')
                  <badge class="badge badge-info py-2 px-3">Seventh</badge>

                       @elseif($winner->winning_position=='8')
                  <badge class="badge badge-info py-2 px-3">Eighth</badge>
                       @elseif($winner->winning_position=='9')
                  <badge class="badge badge-info py-2 px-3">Ninth</badge>
                       @elseif($winner->winning_position=='10')
                  <badge class="badge badge-info py-2 px-3">Tenth</badge>

                  @endif
                </td>
              </tr>
              @endforeach
              @endif
              </tbody>
              </table>
                   
      
    
         
         
            </div><!-- card-body -->
          </div><!-- card -->
        
   
        </div>
       </div>

    </div>
</div>
@endsection



