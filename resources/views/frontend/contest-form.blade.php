@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')
<div class="container">
	<div class="row">
		<div class="col-md-10 mt-5">
        <div class="row justify-content-center ">
          <div class="col-md-8">
            <span class="anchor" id="formContact"></span>
            <!-- form contact -->
            <div class="card card-outline-secondary " style="background: #c1c1c1; color: black;">
              <div class="card-header">
                <h3 class="mb-0">Contact</h3>
              </div>
              <div class="card-body">

                <form autocomplete="off" class="form" role="form" method="POST" enctype="multipart/form-data" action="{{route('contest-forms',$contestId->id)}}">
                	@csrf

                  <input type="hidden" name="contest_id" value="{{$contestId->id}}">
                  <fieldset>
                    <label class="mb-0" for="name2">Name</label>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <input class="form-control" id="name2" name="name2" readonly type="text" value="{{$user->name}}">
                      </div>
                    </div>
										<label class="mb-0" for="email2">Email</label>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <input class="form-control" id="email2" name="email2" readonly value="{{$user->email}}" type="text">
                      </div>
                    </div>
							<label class="mb-0" for="file">File</label>

                         <div class="row mb-1">
                      <div class="col-lg-12">
                        <input class="form-control" id="file" name="file"  type="file">
                      </div>
                    </div>
					<label class="mb-0" for="message2">Message</label>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <textarea class="form-control" id="message2" name="notes"  rows="6"></textarea>
                      </div>
                    </div>
										<button class="btn btn-primary btn-lg float-right" type="submit">Submit</button>
                  </fieldset>
                </form>


              </div>
            </div><!-- /form contact -->
          </div><!--/col-->
        </div>
</div>
</div>
</div>
@endsection


