<script src="../adminLTE/jquery/jquery.min.js"></script>
<script src="../adminLTE/js/adminlte.min.js"></script>
<script src="../adminLTE/js/demo.js"></script>
<script src="../adminLTE/js/currency.js"></script>
<script src="../adminLTE/js/hanyaangka.js"></script>
<script src="../sweetalert/src/js/sweetalert.all.js"></script>
<script src="../adminLTE/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../adminLTE/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../toastr/toastr.min.js"></script>
<script>
	$(document).ready(function () {
	function readURL() {
			var input = this;
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$(input).prev().attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$(function () {
			$(".uploads").change(readURL)
			$("#f").submit(function(){
              return false
          })
		})
	});
</script>