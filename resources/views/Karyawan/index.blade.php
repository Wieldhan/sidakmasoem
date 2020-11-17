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
				<h1 style="font-size: 30px">DATA KARYAWAN</h1>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col">
		<div class="card card-success card-outline">
			<div class="card-header" style="height: 50px;">
				<h2 class="card-title">KELOLA DATA KARYAWAN</h2>
				<div class="card-tools ">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="card-tools" style="margin-bottom: 20px">
					<a href="karyawan/export" class="btn btn-sm btn-success">
						<i class="fas fa-file-export"></i> Export To Excel
					</a>
					<a href="#" class="btn btn-sm btn-danger">
						<i class="fas fa-file-export"></i> Export To PDF
					</a>
				</div>
				<table class="table table-sm table-hover" id="datatable" style="font-size: 15px;">
					<thead>
						<tr align="center">
							<th>NIK</th>
							<th>No KTP</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Golongan</th>
							<th>Jabatan</th>
							<th>Cabang</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
				<!-- edit -->
				<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4>UPDATE DATA KARYAWAN</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="editform" method="POST">
									{{csrf_field()}}
									<div class="form-row">
										<div class="form-group col-sm-6">
											<label>No Induk Karyawan</label>
											<input required readonly name="nik" type="text" class="form-control form-control-sm " id="nik">
										</div>
										<div class="form-group col-sm-6">
											<label>No KTP</label>
											<input required readonly name="no_ktp" type="text" class="form-control form-control-sm"
												id="no_ktp">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-sm-6">
											<label>Nama Lengkap</label>
											<input required readonly name="nama_lengkap" type="text" class="form-control form-control-sm"
												id="nama_lengkap">
										</div>
										<div class="form-group col-sm-6">
											<label>Jenis Kelamin</label>
											<input required readonly name="jk" class="form-control form-control-sm" id="jk">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-sm-4">
											<label>Jabatan</label>
											<select required name="jabatan_id" id="jabatan_id" class="form-control form-control-sm">
												<option></option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label>Golongan</label>
											<select required name="golongan_id" id="golongan_id" class="form-control form-control-sm">
												<option></option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label>Cabang</label>
											<select required name="cabang_id" id="cabang_id" class="form-control form-control-sm">
												<option></option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-8 float-right d-none d-sm-block">
											<b>Version</b> 1.0.1
											<strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
										</div>
										<div class="col-2">
										</div>
										<div class="col-2">
											<button type="submit" class="btn btn-primary btn-block float-right">UPDATE</button>
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
			$('#datatable').DataTable({
				processing: true,
				serverSide: true,
				ajax:  'datakaryawan',
				order: [[0, 'desc']],
				columns: [
				{ data: 'nik', name: 'nik' },
				{ data: 'no_ktp', name: 'no_ktp' },
				{ data: 'nama_lengkap', name: 'nama_lengkap' },
				{ data: 'jk', name: 'jk' },
				{ data: 'golongan', name: 'golongan' },
				{ data: 'jabatan', name: 'jabatan' },
				{ data: 'cabang', name: 'cabang' },
				{ data: 'action', name: 'action' }
				]
			});

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

			// $(document).on('click','.edit',function(){
			// 	var id = $(this).data('id');
			// 	console.log(id);
			// 	$.ajax({
			// 			url 		: "{{ url('/karyawan/detailKaryawan')}}",
			// 			method 	: "POST",
			// 			dataType: "JSON",
			// 			data 		: {
			// 			id 			: id,
			// 			_token 	: '{{ csrf_token() }}',
			// 		}, 
			// 		success: function(data) {
			// 			$('#editmodal').modal('show');
			// 			$('#editform').attr('action', '/karyawan/update/'+data.id);
			// 			$('#nik').val(data.no_induk);
			// 			$('#no_ktp').val(data.no_ktp);
			// 			$('#nama_lengkap').val(data.nama_lengkap);
			// 			$('#jk').val(data.jk);

			// 			$('#golongan_id').empty();
			// 			$('#golongan_id').append('<option value="'+ data.id_gol+'">'+ data.gol+'</option>');
			// 			var x = data.golongan;
			// 			x.forEach(function (x){
			// 				if (x.id != data.id_gol) {
			// 					$('#golongan_id').append('<option value="'+ x.id+'">'+ x.golongan+'</option>');
			// 				}
			// 			});

			// 			$('#jabatan_id').empty();
			// 			$('#jabatan_id').append('<option value="'+ data.id_jabat+'">'+ data.jb+'</option>');
			// 			var y = data.jabatan;
			// 			y.forEach(function (y){
			// 				if (y.id != data.id_jabat) {
			// 					$('#jabatan_id').append('<option value="'+ y.id+'">'+ y.jabatan+'</option>');
			// 				}
			// 			});

			// 			$('#cabang_id').empty();
			// 			$('#cabang_id').append('<option value="'+ data.id_cab+'">'+ data.cab+'</option>');
			// 			var z = data.cabang;
			// 			z.forEach(function (z){
			// 				if (z.id != data.id_cab) {
			// 					$('#cabang_id').append('<option value="'+ z.id+'">'+ z.cabang+'</option>');
			// 				}
			// 			});
			// 		}
			// 	});
			// });
		});
</script>
@endsection