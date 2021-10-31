@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')



  <!--Only Card-->
  <div class="container my-5">
    <div class="card mb-3 filter shadow-lg  pb-3" style="padding: 0%; border: none; width: 100%;">
      <div class="row g-0 ">
        
        <div class="col-12 col-md-12 ">
          <div class="card-body">
            <h3 class="card-title">Running Attendent Contest</h3>
            <table class="table">
              <thead>
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
                @foreach($runningAttendent as $key => $contest)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$contest->code}}</td>
                  <td>{{$contest->name}}</td>
                   <td><img src="{{asset('assets/uploads/contest-result/'.$contest->image)}}"/></td>

                  <td> <span class="bage badge-info p-2">{{$contest->end_date}} </span></td>
               

                    
                  <td> <a href="{{route('contestform-edit',$contest->id)}}" class="btn btn-info" style="margin-top:-10px;"><i class="fa fa-edit"> </i> Edit </a>
                </tr>
                @endforeach

              </tbody>
            </table>
              <div class="buttonCard" style="margin-top: 3%;">
                <button class="btn btn-primary col-md-3 mt-1 mt-md-0 " type="submit">Get Now
                </button>
              </div>
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
            <table class="table">
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
                @foreach($userConresult as $key => $contest)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$contest->contest_code}}</td>
                  <td>{{$contest->contest_name}}</td>
                  <td>{{$contest->winning_price}}</td>
                <td>
                 
                                {{$contest->winning_position}}

                       </td>
                  <td>{{$contest->message}}</td>
                </tr>
                @endforeach

              </tbody>
            </table>
              <div class="buttonCard" style="margin-top: 3%;">
                <button class="btn btn-primary col-md-3 mt-1 mt-md-0 " type="submit">Get Now
                </button>
              </div>
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
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#SL</th>
                  <th scope="col">Contest Code</th>
                  <th scope="col">Contest Name</th>
                  <th scope="col">Last Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($prevAttendContest as $key => $contest)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$contest->code}}</td>
                  <td>{{$contest->name}}</td>
                  <td>{{$contest->start_date}}</td>
                  <td> {{$contest->end_date}} </td>
                </tr>
                @endforeach

              </tbody>
            </table>
              <div class="buttonCard" style="margin-top: 3%;">
                <button class="btn btn-primary col-md-3 mt-1 mt-md-0 " type="submit">Get Now
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection