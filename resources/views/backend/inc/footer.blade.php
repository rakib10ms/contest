      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('Backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Backend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('Backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Backend/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('Backend/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('Backend/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('Backend/lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{asset('Backend/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{asset('Backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('Backend/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('Backend/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('Backend/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('Backend/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('Backend/lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('Backend/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg')}}"></script>
    <script src="{{asset('Backend/lib/gmaps/gmaps.min.js')}}"></script>

    <script src="{{asset('Backend/js/bracket.js')}}"></script>
    <script src="{{asset('Backend/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('Backend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('Backend/js/dashboard.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
   <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"> </script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>

    <script type="text/javascript">
      $('#example').DataTable({
      responsive: true,
      
    });
    </script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor',
  {
    customConfig: '/custom/ckeditor_config.js'
});
    </script>