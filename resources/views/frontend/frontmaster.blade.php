@include('frontend.inc.header')

   <tittle> @yield('tittle')  </tittle>

  <body>


@include('frontend.inc.navbar')

@yield('section')

@include('frontend.inc.footer')


    

 </body>
</html>