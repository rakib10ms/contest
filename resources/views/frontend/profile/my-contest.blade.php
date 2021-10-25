@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')



  <!--Only Card-->
  <div class="container my-5">
    <div class="card mb-3 filter shadow-lg mx-auto pt-3 pb-3" style="padding: 0%; border: none; width: 100%;">
      <div class="row g-0 ">
        
        <div class="col-12 col-md-7 py-3 px-md-1 px-1">
          <div class="card-body my-auto">
            <h3 class="card-title">Running Contest</h3>
              <p class="card-text " style="margin-top: 2%;">This is a wider card with text
                below as a natural lead-in to additional content. This content is a little bit
                longer, wider card with text
                below as a natural
              </p>
              <div class="buttonCard" style="margin-top: 3%;">
                <button class="btn btn-primary col-md-3 mt-1 mt-md-0 " type="submit">Get Now
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<!-- 
<div class="container">
  <div class="row">
    <div class="col-md-12">

 <table class="table table-bordered bg-light text-dark my-5 ">
  <thead>
    <tr>
      <th scope="col">#SL</th>
      <th scope="col">Contest Name</th>
      <th scope="col">Contest Winner</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>

 -->


@endsection