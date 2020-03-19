	@extends ('layout.master')
	@section ('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-6">
					<h1 style="font-size: 30px">DATA KARYAWAN</h1>
				</div>
			</div>
		</div>
	</div>
	<div class ="container-fluid">
		<div class="col">
			<div class="card card-primary collapsed-card">
				<div class="card-header">
					<h3 class="card-title align-middle">TAMBAH KARYAWAN</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<form action="/karyawan/simpan" method="POST">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>NIK</label>
								<input name="nik" type="text" class="form-control" placeholder="Nomor Induk Karyawan" >
							</div>
							<div class="form-group col-md-6">
								<label>NO KTP</label>
								<input name="no_ktp" type="text" class="form-control" placeholder="No Identitas KTP">
							</div>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Username</label>
								<input name="username" type="text" class="form-control" placeholder="Username" >
							</div>
							<div class="form-group col-md-6">
								<label>Password</label>
								<input name="password" type="password" class="form-control" placeholder="Type Here">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Tempat Lahir</label>
								<input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
							</div>
							<div class="form-group col-md-6">
								<label>Tanggal Lahir</label>
								<input name="tanggal_lahir" type="date" class="form-control">
							</div>	
						</div>
						<div class="form-group">
							<label>Agama</label>
							<input name="agama" type="text" class="form-control">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Golongan</label>
								<input name="golongan" type="text" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<label>Jabatan</label>
								<input name="jabatan" type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea name="alamat" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>No Telepon</label>
							<input name="no_telepon" type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>E-Mail</label>
							<input name="email" type="email" class="form-control">
						</div>								
						<div class="float-right">
							<button type="button" class="btn btn-secondary" data-dismiss="card">BATAL</button>
							<button type="submit" class="btn btn-primary">SIMPAN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div>
			<div class="col-md-auto" >
				<div class="card card-success">
					<div class="card-header">
						<h3 class="card-title">KELOLA DATA KARYAWAN</h3>
						<div class="card-tools ">
							<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-sm table-hover">
							<thead>
								<tr align="center">
									<th scope="col">NIK</th>
									<th scope="col">NO KTP</th>
									<th scope="col">Nama</th>
									<th scope="col">Tempat Lahir</th>
									<th scope="col">Tanggal Lahir</th>
									<th scope="col">Agama</th>
									<th scope="col">Golongan</th>
									<th scope="col">Jabatan</th>
									<th scope="col">Alamat</th>
									<th scope="col">No Telepon</th>
									<th scope="col">Email</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data_karyawan as $karyawan)
								<tr align="left">
									<td>{{$karyawan->nik}}</td>
									<td>{{$karyawan->no_ktp}}</td>
									<td>{{$karyawan->nama}}</td>
									<td>{{$karyawan->tempat_lahir}}</td>
									<td>{{$karyawan->tanggal_lahir}}</td>
									<td>{{$karyawan->agama}}</td>
									<td>{{$karyawan->golongan}}</td>
									<td>{{$karyawan->jabatan}}</td>
									<td>{{$karyawan->alamat}}</td>
									<td>{{$karyawan->no_telepon}}</td>
									<td>{{$karyawan->email}}</td>
									<td>
										<a href="#" class="btn btn-warning">Edit</a>
										<a href="/karyawan/hapus/{{$karyawan->id}}" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus DATA ini ?')">Hapus</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	<!-- /.content-wrapper -->
