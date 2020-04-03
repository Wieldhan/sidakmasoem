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
					<h1 style="font-family:'Oswald',sans-serif; font-size: 30px">DATA KARYAWAN</h1>
				</div>
			</div>
		</div>
	</div>
	<div class ="container-fluid">
		<div class ="col">
			<div class="card card-primary" style="font-family:'Oswald',sans-serif;">
				<div class="card-header" style="height: 50px;">
					<h2 class="card-title align-middle">TAMBAH KARYAWAN</h2>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<div class="row col-6">
						<h3 class="card-subtitle align-middle " >DATA PRIBADI</h3>
					</div>
					<hr>
					<form action="/karyawan/simpan" method="POST" style="font-family:'Oswald',sans-serif;">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-sm-3">
								<label>NIK</label>
								<input name="nik" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-sm-3">
								<label>NO KTP</label>
								<input name="no_ktp" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-sm-3">
								<label>Nama Lengkap</label>
								<input name="nama" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-sm-3">
								<label>Nama Panggilan</label>
								<input name="nama" type="text" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label>Tempat Lahir</label>
								<input name="tempat_lahir" type="text" class="form-control form-control-sm" placeholder="Tempat Lahir">
							</div>
							<div class="form-group col-sm-6">
								<label>Tanggal Lahir</label>
								<input name="tanggal_lahir" type="date" class="form-control form-control-sm">
							</div>	
						</div>
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label for="FormControlSelect">Agama</label>
								<select class="form-control form-control-sm" id="FormControlSelect">
									<option>Islam</option>
									<option>Protestan</option>
									<option>Khatolik</option>
									<option>Hindu</option>
									<option>Buddha</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label>Golongan</label>
								<input name="golongan" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-sm-4">
								<label>Jabatan</label>
								<input name="jabatan" type="text" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label>Alamat</label>
								<textarea style="height: 150px;" name="alamat" class="form-control"></textarea>
							</div>
						</div>						
						<div class="form-row">
							<div class="form-group col-sm-3">
								<label>No Telepon</label>
								<input name="no_telepon" type="text" class="form-control form-control-sm" >
							</div>
							<div class="form-group col-sm-3">
								<label>E-Mail</label>
								<input name="email" type="email" class="form-control form-control-sm">
							</div>
						</div>
						<hr>
						<div class="float-right">
							<button type="reset" class="btn btn-info" data-dismiss="card">BATAL</button>
							<button type="submit" class="btn btn-primary">SIMPAN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col" >
			<div class="card card-info" style="font-family:'Oswald',sans-serif;">
				<div class="card-header" style="height: 50px;">
					<h2 class="card-title">KELOLA DATA KARYAWAN</h2>
					<div class="card-tools ">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
					</div>					
				</div>
				<div class="card-body">
					<table id="datatable" class="table table-sm table-hover" style="font-size: 15px;">
						<thead>
							<tr align="center">
								<th>ID</th>
								<th>NIK</th>
								<th>NO KTP</th>
								<th>Nama</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<!-- <th>Agama</th> -->
								<th>Golongan</th>
								<th>Jabatan</th>
								<th>Alamat</th>
								<th>No Telepon</th>
								<!-- <th>Email</th> -->
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_karyawan as $kar)
							<tr align="left">
								<td>{{$kar->nik}}</td>
								<td>{{$kar->no_ktp}}</td>
								<td>{{$kar->nama}}</td>
								<td>{{$kar->tempat_lahir}}</td>
								<td>{{$kar->tanggal_lahir}}</td>
								<!-- <td>{{$kar->agama}}</td> -->
								<td>{{$kar->golongan}}</td>
								<td>{{$kar->jabatan}}</td>
								<td>{{$kar->alamat}}</td>
								<td>{{$kar->no_telepon}}</td>
								<!-- <td>{{$kar->email}}</td> -->
								<td>
									<a href="#" class="btn btn-sm btn-warning edit">Edit</a>
									<a href="/jabatan/hapus/{{$jabat->id}}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus DATA ini ?')">Hapus</a>
								</td>								
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
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
			});	
		});
	</script>
	@endsection