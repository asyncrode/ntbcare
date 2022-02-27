<script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('assets/js/codebase.app.min.js')}}""></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.js')}}""></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}""></script>
<script>jQuery(function(){ Codebase.helpers('content-filter'); });</script>
