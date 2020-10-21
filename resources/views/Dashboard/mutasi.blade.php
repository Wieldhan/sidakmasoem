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
					<h1 style="font-size: 30px">APLIKASI MUTASI KARYAWAN</h1>
				</div>
			</div>
		</div>
	</div>
	<div class ="container-fluid">
		<div class="col" >
			<div class="card card-outline card-primary">
				<div class="card-header">
					<div class="card-title">FORM MUTASIAN KARYAWAN</div>
					<div class="card-tools">
						<button class="btn btn-success" >
							<i class="fas fa-search"></i> 
							Cari Karyawan
						</button>
					</div>					
				</div>
				<div class="card-body">
					<form id="editform" method="POST">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label>No Induk Karyawan</label>
								<input required readonly name="nik" type="text" class="form-control form-control-sm " id="nik">
							</div>
							<div class="form-group col-sm-6">
								<label>Nama Lengkap</label>
								<input required readonly name="nama_lengkap" type="text" class="form-control form-control-sm" id="nama_lengkap">
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
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label>Tanggal Berlaku</label>
								<input required name="tanggal" id="tanggal" type="date" class="form-control form-control-sm">
							</input>
						</div>
						<div class="form-group col-sm-4">
							<label>Status</label>
							<select required name="status" id="status" class="form-control form-control-sm">
								<option>Pilih Salah Satu</option>
								<option value="Mutasi">Mutasi</option>
								<option value="Promosi">Promosi</option>
								<option value="Desmosi">Desmosi</option>
							</select>
						</div>
						<div class="form-group col-sm-4">
							<label>Keterangan</label>
							<textarea required name="keterangan" id="keterangan" class="form-control form-control-sm"></textarea>
						</div>
					</div>												
					<div class="form-row">
						<div class="form-group col-sm">
							<button type="submit" class="btn btn-primary float-right">SIMPAN</button>
						</div>
					</div>                                 
				</form>
			</div>
		</div>
	</div>
</div>
<div class ="container-fluid">
	<div class="col" >
		<div class="card card-info">
			<div class="card-header" style="height: 50px;">
				<div class="card-title">HISTORY MUTASIAN KARYAWAN</div>
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
							<th>Nama Lengkap</th>
							<th>Jabatan</th>
							<th>Golongan</th>
							<th>Cabang</th>
							<th>Tanggal Berlaku</th>
							<th>Keterangan</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
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
				<form id="mutasiForm" method="POST">
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
@include('sweetalert::alert')
@endsection
@section ('javascript')
<script type="text/javascript" src="/datatables/datatables.min.js"></script>
<script type="text/javascript" src="/datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// 	$('#datatable').DataTable({
		// 		processing: true,
		// 		serverSide: true,
		// 		ajax:  'datakaryawan',
		// 		order: [[0, 'desc']],
		// 		columns: [
		// 		{ data: 'nik', name: 'nik' },
		// 		{ data: 'no_ktp', name: 'no_ktp' },
		// 		{ data: 'nama_lengkap', name: 'nama_lengkap' },
		// 		{ data: 'jk', name: 'jk' },
		// 		{ data: 'golongan', name: 'golongan' },
		// 		{ data: 'jabatan', name: 'jabatan' },
		// 		{ data: 'cabang', name: 'cabang' },
		// 		{ data: 'action', name: 'action' }
		// 		]
		// 	});

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
					$('#mutasiForm').attr('action', '/karyawan/update/'+data.id);
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