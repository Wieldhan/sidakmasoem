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
				<div class="col-6">
					<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-xl">Tambah <i class="fas fa-plus"></i></button>
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
								<th>NO KTP</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<!-- <th>Agama</th> -->
								<th>Golongan</th>
								<th>Jabatan</th>
								<!-- <th>Alamat</th>
								<th>No Telepon</th>
								<th>Email</th> -->
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
								<td>{{$karyawan->tempat_lahir}}</td>
								<td>{{$karyawan->tanggal_lahir}}</td>
								<!-- <td>{{$karyawan->agama}}</td> -->
								<td>{{$karyawan->golongan->golongan}}</td>
								<td>{{$karyawan->jabatan->jabatan}}</td>
								<!-- <td>{{$karyawan->alamat}}</td>
								<td>{{$karyawan->no_telepon}}</td>
								<td>{{$karyawan->user->email}}</td> -->
								<td>
									<button type="button" class="btn btn-sm btn-warning edit" data-toggle="modal" data-target=".editkaryawan">Edit</button>									
									<button class="btn btn-sm btn-danger hapus" karyawan-id="{{$karyawan->id}}">Hapus</button>
								</td>								
							</tr>
							@endforeach
						</tbody>
					</table>
					<div class="modal fade editkaryawan" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4>UPDATE DATA KARYAWAN</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="/karyawan/update/{{$karyawan->id}}" method="POST">
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
												<select required disabled="true" name="jk" class="form-control form-control-sm" id="jk">
													<option>Laki Laki</option>
													<option>Perempuan</option>
												</select>
											</div>
										</div>																	
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>Jabatan</label>
												<select required name="jabatan_id" class="form-control form-control-sm" id="jabatan" >
													@foreach($jabatan as $dj)
													<option value="{{$dj->id}}" {{( $dj->id == $karyawan->jabatan_id) ? 'selected' : '' }}>{{$dj->jabatan}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group col-sm-6">
												<label>Golongan</label>
												<select required name="golongan_id" class="form-control form-control-sm" id="golongan">
													@foreach($golongan as $dg)
													<option value="{{$dg->id}}" {{( $dg->id == $karyawan->golongan_id) ? 'selected' : '' }}>{{$dg->golongan}}</option>
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
					<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4>TAMBAH DATA KARYAWAN</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="/karyawan/store" method="POST">
										{{csrf_field()}}										
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>No Induk Karyawan</label>
												<input required name="nik" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" placeholder="No. Reg atau NIK berdasarkan SK">
											</div>
											<div class="form-group col-sm-6">
												<label>No KTP</label>
												<input required name="no_ktp" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>Nama Lengkap</label>
												<input required name="nama_lengkap" type="text" class="form-control form-control-sm" placeholder="Nama Sesuai KTP">
											</div>
											<div class="form-group col-sm-6">
												<label for="formcontroljk">Jenis Kelamin</label>
												<select required name="jk" class="form-control form-control-sm" id="formcontroljk">
													<option>Laki Laki</option>
													<option>Perempuan</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label for="formcontrolagama">Agama</label>
												<select required name="agama" class="form-control form-control-sm" id="formcontrolagama" >
													<option >Islam</option>
													<option >Protestan</option>
													<option >Khatolik</option>
													<option >Hindu</option>
													<option >Buddha</option>
												</select>
											</div>
											<div class="form-group col-sm-6">
												<label for="formcontrolpernikahan">Status Pernikahan</label>
												<select required name="status_nikah" class="form-control form-control-sm" id="formcontrolpernikahan">
													<option>Belum Menikah</option>
													<option>Menikah</option>
													<option>Cerai</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>Tempat Lahir</label>
												<input required name="tempat_lahir" type="text" class="form-control form-control-sm" placeholder="Kota Kelahiran">
											</div>
											<div class="form-group col-sm-6">
												<label>Tanggal Lahir</label>
												<input required name="tanggal_lahir" type="date" class="form-control form-control-sm">
											</div> 
										</div>
										<div class="form-row"> 
											<div class="form-group col-sm-6">
												<label>Alamat</label>
												<textarea style="height: 75px;" required name="alamat" class="form-control" placeholder="Alamat tinggal saat ini"></textarea>
											</div>
											<div class="form-group col-sm-6">
												<label>E-Mail</label>
												<input required name="email" type="email" class="form-control form-control-sm" placeholder="contohemail@gmail.com">
											</div>
										</div>																												
										<div class="float-right" style="margin-right: 15px;">
											<button type="reset" class="btn btn-secondary" data-dismiss="card">BATAL</button>
											<button type="submit" class="btn btn-primary">SIMPAN</button>
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
				$('#nik').val(data[1]);
				$('#no_ktp').val(data[2]);
				$('#nama_lengkap').val(data[3]);
				$('#jk').val(data[4]);
				$('#editform').attr('action','/karyawan/update/'+data[0]);
				$('#editmodal').modal('show');
			});	
		});

		$('.hapus').click(function(){
			var karyawan_id = $(this).attr('karyawan-id');
			Swal.fire({
				title: 'ATTENTION !!',
				text: "Yakin Ingin Menghapus Data ID "+karyawan_id+"",
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