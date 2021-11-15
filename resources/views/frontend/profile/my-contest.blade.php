@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')



  <!--Only Card-->
  <div class="container my-5 ">
    <div class="card mb-3 filter shadow-lg  pb-3" style="padding: 0%; border: none; width: 100%;">
      <div class="row g-0 ">
        
        <div class="col-12 col-md-12  ">
          <div class="card-body text-white">
            <h3 class="card-title">Running Attendent Contest</h3>
            <table class="table bg-info p-2 text-white">
              <thead class="txt-white">
                <tr>
                  <th scope="col">#SL</th>
                  <th scope="col">Contest Code</th>
                  <th scope="col">Contest Name</th>
                  <th scope="col">Your File</th>
                  <th scope="col">Last Date</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                @if(count($runningAttendent)>=1)
                   @foreach($runningAttendent as $key => $contest)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$contest->code}}</td>
                  <td>{{$contest->name}}</td>
                   <td>file</td>

                  <td> <span class="bage badge-info p-2">{{$contest->end_date}} </span></td>
               

                    
                  <td> <a href="{{route('contestform-edit',$contest->id)}}" class="btn btn-info" style="margin-top:-10px;"><i class="fa fa-edit"> </i> Edit </a>
                </tr>
                @endforeach
                
                @else
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Hello! {{Auth::user()->name}}</strong> You have not partcipated any running attendent contest.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                
                @endif

              </tbody>
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </div>





 <div class="container my-5">
    <div class="card mb-3 filter shadow-lg  pb-3" style="padding: 0%; border: none; width: 100%;">
      <div class="row g-0 ">
        
        <div class="col-12 col-md-12 ">
          <div class="card-body">
            <h3 class="card-title">MY Contest Winning Result</h3>
            <table class="table  bg-warning p-2">
              <thead>
                <tr>
                  <th scope="col">#SL</th>
                  <th scope="col">Contest Code</th>
                  <th scope="col">Contest Name</th>
               <th scope="col">Winning Position</th>
                  <th scope="col">Winning Price</th>
                  <th scope="col">Message </th>
                </tr>
              </thead>
              <tbody>
                @if(count($userConresult)>=1)
                
                @foreach($userConresult as $key => $contest)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$contest->contest_code}}</td>
                  <td>{{$contest->contest_name}}</td>
                  <td>
                             @if($contest->winning_position=='1')
                  <badge class="badge badge-info py-2 px-3">First </badge>
                  @elseif($contest->winning_position=='2')
                  <badge class="badge badge-info py-2 px-3">Second</badge>
                       @elseif($contest->winning_position=='3')
                  <badge class="badge badge-info py-2 px-3">Third</badge>
                       @elseif($contest->winning_position=='4')
                  <badge class="badge badge-info py-2 px-3">Fourth</badge>

                       @elseif($contest->winning_position=='5')
                  <badge class="badge badge-info py-2 px-3">Fifth</badge>
                       @elseif($contest->winning_position=='6')
                  <badge class="badge badge-info py-2 px-3">Sixth</badge>
                       @elseif($contest->winning_position=='7')
                  <badge class="badge badge-info py-2 px-3">Seventh</badge>

                       @elseif($contest->winning_position=='8')
                  <badge class="badge badge-info py-2 px-3">Eighth</badge>
                       @elseif($contest->winning_position=='9')
                  <badge class="badge badge-info py-2 px-3">Ninth</badge>
                       @elseif($contest->winning_position=='10')
                  <badge class="badge badge-info py-2 px-3">Tenth</badge>

                  @endif
                  </td>
                <td>
                   {{$contest->winning_price}}
                       </td>
                  <td>{{$contest->message}}</td>
                </tr>
                @endforeach

                @else
            
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Hello! {{Auth::user()->name}}</strong> You have not won any contest.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                @endif
            

              </tbody>
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container my-5">
    <div class="card mb-3 filter shadow-lg  pb-3" style="padding: 0%; border: none; width: 100%;">
      <div class="row g-0 ">
        
        <div class="col-12 col-md-12 ">
          <div class="card-body">
            <h3 class="card-title">All Attendent Contest</h3>
            <table class="table  bg-light p-2">
              <thead>
                <tr>
                  <th scope="col">#SL</th>
                  <th scope="col">Contest Code</th>
                  <th scope="col">Contest Name</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">Last Date</th>
                </tr>
              </thead>
              <tbody>
                   @if(count($userConresult)>=1)

                @foreach($prevAttendContest as $key => $contest)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$contest->code}}</td>
                  <td>{{$contest->name}}</td>
                  <td>{{$contest->start_date}}</td>
                  <td> {{$contest->end_date}} </td>
                </tr>
                @endforeach
                @else

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Hello! {{Auth::user()->name}}</strong> You have participated any contest.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                @endif

              </tbody>
            </table>
             
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection