@extends ('layout.master')
@section ('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<h1 style="font-size: 30px">PROFILE</h1>
			</div>
			<div class="col-6">
				<a href="{{URL::previous()}}" class="btn btn-info float-right">BACK</a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="card card-primary card-outline">
				<div class="card-body box-profile">
					<div class="text-center">
						<img class="profile-user-img img-fluid img-circle img" src="/images/avatardefault.png" alt="User profile picture">
					</div>
					<h3 class="profile-username text-center" style="font-size: 20px;">{{$karyawan->nama_lengkap}}</h3>
					<p class="text-muted text-center">{{$karyawan->jabatan->jabatan}}</p>
					<ul class="list-group list-group-unbordered mb-3">
						<li class="list-group-item">
							<a>Jenis Kelamin</a>
							<span class="float-right">{{$karyawan->jk}}</span>
						</li>
						<li class="list-group-item">
							<a>Agama</a>
							<span class="float-right">{{$karyawan->agama}}</span>
						</li>
						<li class="list-group-item">
							<a>Email</a>
							<span class="float-right">{{$karyawan->user->email}}</span>
						</li>
						<li class="list-group-item">
							<a>Password</a>
							<span class="float-right">*******</span>
						</li>
						<li class="list-group-item">
							<a>No Telepon</a>
							<span class="float-right">{{$karyawan->no_telepon}}</span>
						</li>
					</ul>
					<a href="#" class="btn btn-primary btn-block">
						<i class="fas fa-pencil-alt mr-1"></i>
						<b>Edit Profile</b></a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card card-outline card-warning">
					<div class="card-header">
						<h3 class="card-title"><b>CURRICULUME VITAE</b></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-10">
								<strong><i class="fas fa-graduation-cap"></i> Pendidikan</strong>
							</div>
							<div class="col-2">
								<button type="button" class="btn btn-sm btn-link float-right" data-toggle="modal" data-target=".modal-pendidikan" data-placement="right" title="Tambah Data Pendidikan"><i class="fas fa-plus mr-1"></i></button>
							</div>
						</div>
						<table class="table text-muted table-sm">
							<thead class="bg-secondary">
								<tr align="center">									
									<th>NAMA INSTANSI</th>
									<th>JURUSAN</th>
									<th>NILAI AKHIR</th>
									<th>PERIODE STUDI</th>
								</tr>
							</thead>
							<tbody>
								<tr>

								</tr>
							</tbody>
						</table>	
						<strong><i class="fas fa-pencil-alt mr-1"></i> Alamat</strong>					
						<p class="text-muted">
							{{$karyawan->alamat}}
						</p>
						<hr>												
						<strong><i class="fas fa-pencil-alt mr-1"></i> Visi</strong>
						<p class="text-muted">
							{{$karyawan->visi}}
						</p>
						<hr>
						<strong><i class="fas fa-pencil-alt mr-1"></i> Misi</strong>
						<p class="text-muted">
							{{$karyawan->misi}}
						</p>
						<hr>
						<div class="row">
							<div class="col-10">
								<strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Organisasi</strong>
							</div>
							<div class="col-2">
								<button type="button" class="btn btn-sm btn-link float-right" data-toggle="modal" data-target=".modal-organisasi" title="Tambah Data Organisasi"><i class="fas fa-plus mr-1"></i></button>
							</div>
						</div>						
						<table class="table text-muted table-sm">
							<thead class="bg-secondary">
								<tr align="center">									
									<th>NAMA ORGANISASI</th>
									<th>JENIS ORGANISASI</th>
									<th>STATUS KEANGGOTAAN</th>
									<th>PERIODE JABATAN</th>
								</tr>
							</thead>
							<tbody>
								<tr>									
								</tr>
							</tbody>
						</table>
						<div class="row">
							<div class="col-10">
								<strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Pekerjaan</strong>
							</div>
							<div class="col-2">
								<button type="button" class="btn btn-sm btn-link float-right" data-toggle="modal" data-target=".modal-pekerjaan" title="Tambah Data Pekerjaan"><i class="fas fa-plus mr-1"></i></button>
							</div>
						</div>							
						<table class="table text-muted table-sm">
							<thead class="bg-secondary" style="c">
								<tr align="center">
									<th>NAMA PERUSAHAAN</th>
									<th>JABATAN TERAKHIR</th>
									<th>TAHUN MASUK</th>
									<th>TAHUN KELUAR</th>
								</tr>
							</thead>
							<tbody>
								<tr>

								</tr>
							</tbody>
						</table>
						<strong><i class="far fa-file-alt mr-1"></i> Catatan Pekerjaan Almasoem</strong>
						<p class="text-muted">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade modal-pendidikan" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Form Pendaftaran</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="/simpandaftar" method="POST">
							{{csrf_field()}}
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label>No Induk Karyawan</label>
									<input required name="nik" type="text" class="form-control form-control-sm" >
								</div>
								<div class="form-group col-sm-6">
									<label>No KTP</label>
									<input required name="no_ktp" type="text" class="form-control form-control-sm">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label>Nama Lengkap</label>
									<input required name="nama_lengkap" type="text" class="form-control form-control-sm">
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
										<option>Islam</option>
										<option>Protestan</option>
										<option>Khatolik</option>
										<option>Hindu</option>
										<option>Buddha</option>
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
									<input required name="tempat_lahir" type="text" class="form-control form-control-sm">
								</div>
								<div class="form-group col-sm-6">
									<label>Tanggal Lahir</label>
									<input required name="tanggal_lahir" type="date" class="form-control form-control-sm">
								</div> 
							</div>
							<div class="form-row"> 
								<div class="form-group col-sm-6">
									<label>Alamat</label>
									<textarea style="height: 75px;" required name="alamat" class="form-control"></textarea>
								</div>
								<div class="form-group col-sm-6">
									<label>E-Mail</label>
									<input required name="email" type="email" class="form-control form-control-sm">
								</div>
							</div>
							<div class="row">
								<div class="col-8 float-right d-none d-sm-block">
									<b>Version</b> 1.0.1
									<strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
								</div>
								<div class="col-2">
									<button type="reset" class="btn btn-info btn-block float-right" data-dismiss="card">BATAL</button>
								</div>
								<div class="col-2">
									<button type="submit" class="btn btn-primary btn-block float-right">SIMPAN</button>
								</div>
							</div>                                 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
