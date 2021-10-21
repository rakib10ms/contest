<!DOCTYPE html>
<html lang="en">
  <head>
  @include('backend.inc.header')
   <title>@yield('tittle')</title>
   </head>
  <body>

    <!-- ########## START: LEFT PANEL ########## -->

  @include('backend.inc.sidebar')

    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->

    @include('backend.inc.topbar')

    <!-- ########## END: HEAD PANEL ########## -->



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
   <!--    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div> -->

      <div class="br-pagebody py-2">
        <div class="card">
          <div class="card-body">
     
      @yield('section')

   </div>
   </div>

      </div><!-- br-pagebody -->

        @include('backend.inc.footer')
    </div>

  </body>
</html>
