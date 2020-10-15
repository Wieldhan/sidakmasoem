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
	<div class ="container-fluid">
		<div class="col" >
			<div class="card card-info">
				<div class="card-header" style="height: 50px;">
					<h2 class="card-title">KELOLA DATA KARYAWAN</h2>
					<div class="card-tools ">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
					</div>					
				</div>
				<div class="card-body">
					<table class="table table-sm table-hover" id="datatable" style="font-size: 15px;">
						<thead>
							<tr align="center">
								<th>ID</th>
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
						<tbody>
							@foreach($karyawan as $karyawan)
							<tr align="left">
								<td>{{$karyawan->id}}</td>
								<td>{{$karyawan->nik}}</td>
								<td>{{$karyawan->no_ktp}}</td>
								<td>{{$karyawan->nama_lengkap}}</td>
								<td>{{$karyawan->jk}}</td>
								<td>{{$karyawan->golongan->golongan}}</td>
								<td>{{$karyawan->jabatan->jabatan}}</td>
								<td>{{$karyawan->cabang->nama_cabang}}</td>								
								<td>
									<button class="btn btn-sm btn-warning edit" >Edit</button>									
									<button class="btn btn-sm btn-danger hapus" karyawan-id="{{$karyawan->id}}">Hapus</button>
								</td>								
							</tr>
							@endforeach
						</tbody>
					</table>
					<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
												<input required readonly name="no_ktp" type="text" class="form-control form-control-sm" id="no_ktp">
											</div>											
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>Nama Lengkap</label>
												<input required readonly name="nama_lengkap" type="text" class="form-control form-control-sm" id="nama_lengkap">
											</div>
											<div class="form-group col-sm-6">
												<label>Jenis Kelamin</label>
												<input required readonly name="jk" class="form-control form-control-sm" id="jk">
											</div>
										</div>																	
										<div class="form-row">
											<div class="form-group col-sm-4">
												<label>Jabatan</label>
												<select required name="jabatan_id" class="form-control form-control-sm">
													@foreach($jabatan as $dj)
													<option value="{{$dj->id}}" {{( $dj->id == $karyawan->jabatan_id) ? 'selected' : '' }}>{{$dj->jabatan}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group col-sm-4">
												<label>Golongan</label>
												<select required name="golongan_id" class="form-control form-control-sm">		
													@foreach($golongan as $dg)
													<option value="{{$dg->id}}" {{( $dg->id == $karyawan->golongan_id) ? 'selected' : '' }}>{{$dg->golongan}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group col-sm-4">
												<label>Cabang</label>
												<select required name="cabang_id" class="form-control form-control-sm" id="cabang">
													@foreach($cabang as $dc)
													<option value="{{$dc->id}}" {{( $dc->id == $karyawan->cabang_id) ? 'selected' : '' }}>{{$dc->nama_cabang}}</option>
													@endforeach
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
			var table = $('#datatable').DataTable();
			table.on('click','.edit', function(){
				$tr = $(this).closest('tr');
				if ($($tr).hasClass('child')){
					$tr = $tr.prev('.parent');
				}
				var data = table.row($tr).data();
				console.log(data);
				$('#editmodal').modal('show');
				$('#nik').val(data[1]);
				$('#no_ktp').val(data[2]);
				$('#nama_lengkap').val(data[3]);
				$('#jk').val(data[4]);
				$('#jabatan').val(data[6]);
				$('#editform').attr('action','/karyawan/update/'+data[0]);
			});	
		});

		$('.hapus').click(function(){
			var karyawan_id = $(this).attr('karyawan-id');
			Swal.fire({
				toast : true,
				position: 'top-end',
				title: 'ALERT!!',
				text: "Yakin Ingin Menghapus Data Karyawan??",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Hapus',
				cancelButtonText:'Batal'
			}).then((result) => {
				if (result.value) {
					window.location ="/karyawan/destroy/"+karyawan_id+"";
				}
			});
		});	
	</script>
	@endsection