	@extends ('layout.master')
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
		<div class="col">
			<div class="card card-primary collapsed-card">
				<div class="card-header" style="height: 50px;">
					<h2 class="card-title align-middle">TAMBAH KARYAWAN</h2>
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
								<input name="nik" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-md-6">
								<label>NO KTP</label>
								<input name="no_ktp" type="text" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Nama Lengkap</label>
								<input name="nama" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-md-6">
								<label>Nama Panggilan</label>
								<input name="nama" type="text" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Username</label>
								<input name="username" type="text" class="form-control form-control-sm" placeholder="Username" >
							</div>
							<div class="form-group col-md-6">
								<label>Password</label>
								<input name="password" type="password" class="form-control form-control-sm" placeholder="Type Here">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Tempat Lahir</label>
								<input name="tempat_lahir" type="text" class="form-control form-control-sm" placeholder="Tempat Lahir">
							</div>
							<div class="form-group col-md-6">
								<label>Tanggal Lahir</label>
								<input name="tanggal_lahir" type="date" class="form-control form-control-sm">
							</div>	
						</div>
						<div class="form-group">
							<label>Agama</label>
							<input name="agama" type="text" class="form-control form-control-sm">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Golongan</label>
								<input name="golongan" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-md-6">
								<label>Jabatan</label>
								<input name="jabatan" type="text" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea name="alamat" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>No Telepon</label>
							<input name="no_telepon" type="text" class="form-control form-control-sm" >
						</div>
						<div class="form-group">
							<label>E-Mail</label>
							<input name="email" type="email" class="form-control form-control-sm">
						</div>								
						<div class="float-right">
							<button type="reset" class="btn btn-info" data-dismiss="card">BATAL</button>
							<button type="submit" class="btn btn-primary">SIMPAN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
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
					<table class="table table-sm table-hover" style="font-size: 14px;">
						<thead>
							<tr align="center">
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
									<a >
										<div class="btn-group dropleft">
											<button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												<div class="dropdown-menu" x-placement="bottom-left" style="font-size: 12px;position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
													<a class="dropdown-item" href="#">Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="/karyawan/hapus/{{$kar->id}}" onclick="return confirm('Yakin Ingin Menghapus DATA ini ?')"><i class="fas fa-trash"></i> Delete</a>
												</div>
												Action
											</button>
										</div>
									</a>
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