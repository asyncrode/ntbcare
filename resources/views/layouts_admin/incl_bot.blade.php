<script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('assets/js/codebase.app.min.js')}}""></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.js')}}""></script>
<script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets_user/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script> --}}

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ Codebase.helpers('select2'); });</script>
<script>jQuery(function(){ Codebase.helpers('content-filter'); });</script>

<script>
     $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
</script>


