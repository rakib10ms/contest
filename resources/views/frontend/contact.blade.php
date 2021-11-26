@extends('frontend.frontmaster')

@section('tittle')
Homepage
@endsection

@section('section')

<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
    body{
  background:background-color: #b8c6db;
background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<div class="container contact-form" style="background:#ddddd">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="{{route('contact-store')}}">
                @csrf
                <h3>Drop Us a Message</h3>
                
                 @if(session()->has('status'))
           <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
           @endif

               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" required="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required=""></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>




@endsection