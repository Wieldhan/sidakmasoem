	@extends ('layout.master')
	@section ('link')
	<link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
	@endsection
	@section ('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<h1 style="font-size: 30px">PENGAJUAN CUTI KARYAWAN</h1>
				</div>
			</div>
		</div>
	</div>
	<div class ="container-fluid">
		<div class="col" >
			<div class="card card-info">
				<div class="card-header" style="height: 50px;">
					<h2 class="card-title">FORM PENGAJUAN CUTI</h2>
					<div class="card-tools ">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
					</div>					
				</div>
				<div class="card-body">
					<table class="table table-sm table-hover" id="datatable" style="font-size: 15px;">
						<thead>
							<tr align="center">
								<th>NIK</th>
								<th>No KTP</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Jabatan</th>
								<th>Cabang</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
					<!-- edit -->
					<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4>DETAIL</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form id="detailForm" method="POST">
										{{csrf_field()}}

										<div class="row">
											<div class="col-8 float-right d-none d-sm-block">
												<b>Version</b> 1.0.1
												<strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
											</div>
											<div class="col-2">
											</div>
											<div class="col-2">
												<button type="submit" class="btn btn-primary btn-block float-right">PRINT</button>
											</div>
										</div>                                 
									</form>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	@include('sweetalert::alert')
	@endsection
	@section ('javascript')
	<script type="text/javascript" src="/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="/datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// $('#datatable').DataTable({
			// 	processing: true,
			// 	serverSide: true,
			// 	ajax:  'datakaryawan',
			// 	order: [[0, 'desc']],
			// 	columns: [
			// 	{ data: 'nik', name: 'nik' },
			// 	{ data: 'no_ktp', name: 'no_ktp' },
			// 	{ data: 'nama_lengkap', name: 'nama_lengkap' },
			// 	{ data: 'jk', name: 'jk' },
			// 	{ data: 'golongan', name: 'golongan' },
			// 	{ data: 'jabatan', name: 'jabatan' },
			// 	{ data: 'cabang', name: 'cabang' },
			// 	{ data: 'action', name: 'action' }
			// 	]
			// });

			$(document).on('click','.hapus',function(){
				var karyawan_id = $(this).attr('karyawan-id');
				Swal.fire({
					toast : true,
					position: 'top-end',
					title: 'ALERT!!',
					text: "Yakin Ingin Menghapus Data Karyawan??",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Hapus',
					cancelButtonText:'Batal',
					timer : '5000'
				}).then((result) => {
					if (result.value) {
						window.location ="/karyawan/destroy/"+karyawan_id+"";
					}
				});
			});

			$(document).on('click','.edit',function(){
				var id = $(this).data('id');
				console.log(id);
				$.ajax({
					url 			: "{{ url('/karyawan/detailKaryawan')}}",
					method 		: "POST",
					dataType 	: "JSON",
					data 			: {
						id 			: id,
						_token 	: '{{ csrf_token() }}',
					}, 
					success: function(data) {
						$('#detailModal').modal('show');
						$('#detailForm').attr('action', '/karyawan/update/'+data.id);
						$('#nik').val(data.no_induk);
						$('#no_ktp').val(data.no_ktp);
						$('#nama_lengkap').val(data.nama_lengkap);
						$('#jk').val(data.jk);
					}
				});
			});
		});
	</script>
	@endsection