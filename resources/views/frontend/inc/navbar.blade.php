<style type="text/css">
	.dropdown-toggle::after {
    display: none;
  }
.text-decoration-none{
  text-decoration: none!important;
}
/* Font Awesome Icons have variable width. Added fixed width to fix that.*/
.icon-width { width: 2rem;
}

</style>
<style type="text/css">
.drop>p:hover{
 background: #f2f2f2;

}
.drop>p{
     border-bottom: 1px solid #f2f2f2;

}
</style>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
<div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">

<span class="ml-3 font-weight-bold">CONTEST</apan>
</a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navbar4">
<ul class="navbar-nav mr-auto pl-lg-4">
<li class="nav-item px-lg-2 active"> <a class="nav-link" href="{{url('/')}}"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a> </li>

<li class="nav-item px-lg-2"> <a class="nav-link" href="{{url('/about')}}"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>About</a> </li>
<li class="nav-item px-lg-2"> <a class="nav-link" href="{{route('contest')}}"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Running Contest</a> </li>
<li class="nav-item px-lg-2"> <a class="nav-link" href="{{route('past-contest')}}"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Past Contest</a> </li>

</li>

<li class="nav-item px-lg-2"> <a class="nav-link" href="{{url('/contact')}}"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-envelope"></i></span>Contact</a> </li>
</ul>
<ul class="navbar-nav ml-auto mt-3 mt-lg-0">
           <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown mx-3">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-bell fa-2x" style="color:red;"></i>
                                </a>
                            <div class="dropdown-menu dropdown-menu-right drop" aria-labelledby="navbarDropdown" style="width:400px;padding: 6px;">


                            @if(Illuminate\Support\Facades\Auth::check())
                                   @php
                                    $all=DB::table('contest_notices')->get();
                                   @endphp

                                    @foreach($all as $noti)
                                       <p class="p-2">
                                        {{$noti->description}}
                                    </p>

                                    @endforeach
                                  
                            @endif
                             
                                   
                                </div>
                           </li>

    
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <i class="fas fa-angle-down"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="{{route('my-profile')}}">My Profile</a>
                                     <a class="dropdown-item" href="{{route('my-contest')}}">My Contest</a>
                                 <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
</ul>
</div>
</div>
</nav>










