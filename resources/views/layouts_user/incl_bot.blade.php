<script src="{{asset('assets_user/js/codebase.core.min.js')}}"></script>
<script src="{{asset('assets_user/js/codebase.app.min.js')}}"></script>
{{-- Select 2 --}}
<script src="{{asset('assets_user/js/plugins/select2/js/select2.full.min.js')}}"></script>

{{-- Validate --}}
<script src="{{asset('assets_user/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets_user/js/plugins/jquery-validation/additional-methods.js')}}"></script>

{{-- Kartik --}}
<script src="{{asset('assets_user/js/plugins/kartik/js/fileinput.js')}}"></script>
<script src="{{asset('assets_user/js/plugins/kartik/themes/fa/theme.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ Codebase.helpers('select2'); });</script>
<script>
     $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
</script>

<script src="{{asset('assets_user/js/plugins/slick/slick.min.js')}}"></script>

