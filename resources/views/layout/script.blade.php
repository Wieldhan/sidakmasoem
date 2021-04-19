<script src="{{ asset('adminLTE/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('adminLTE/js/adminlte.min.js')}}"></script>
<script src="{{ asset('adminLTE/js/demo.js')}}"></script>
<script src="{{ asset('adminLTE/js/currency.js')}}"></script>
<script src="{{ asset('adminLTE/js/hanyaangka.js')}}"></script>
<script src="{{ asset('sweetalert/src/js/sweetalert.all.js')}}"></script>
<script src="{{ asset('adminLTE/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('adminLTE/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('toastr/toastr.min.js')}}"></script>
<script>
$(document).ready(function() {
   function readURL() {
      var input = this;
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function(e) {
            $(input).prev().attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
      }
   }

   $(function() {
      $(".uploads").change(readURL)
      $("#f").submit(function() {
         return false
      })
   })
});
</script>