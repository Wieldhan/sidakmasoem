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
						<strong><i class="fas fa-graduation-cap"></i> Pendidikan</strong>
						<table class="table text-muted table-sm">
							<thead class="bg-secondary">
								<tr>									
									<th>NAMA INSTANSI</th>
									<th>JURUSAN</th>
									<th>NILAI AKHIR</th>
									<th>PERIODE STUDI</th>
								</tr>
							</thead>
							<tbody>
								<tr>									
									<td>{{$karyawan->sma_nama}}</td>
									<td>{{$karyawan->sma_jurusan}}</td>
									<td>{{$karyawan->sma_nilai}}</td>
									<td>{{$karyawan->sma_lulus}}</td>
								</tr>
								<tr>
									<td>{{$karyawan->s1_nama}}</td>
									<td>{{$karyawan->s1_jurusan}}</td>
									<td>{{$karyawan->s1_nilai}}</td>
									<td>{{$karyawan->s1_lulus}}</td>
								</tr>
								<tr>
									<td>{{$karyawan->s2_nama}}</td>
									<td>{{$karyawan->s2_jurusan}}</td>
									<td>{{$karyawan->s2_nilai}}</td>
									<td>{{$karyawan->s2_lulus}}</td>
								</tr>
							</tbody>
						</table>
						<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
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
						<strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Organisasi</strong>
						<table class="table text-muted table-sm">
							<thead class="bg-secondary">
								<tr>									
									<th>NAMA ORGANISASI</th>
									<th>JENIS ORGANISASI</th>
									<th>STATUS KEANGGOTAAN</th>
									<th>PERIODE JABATAN</th>
								</tr>
							</thead>
							<tbody>
								<tr>									
									<td>{{$karyawan->or_nama}}</td>
									<td>{{$karyawan->or_jenis}}</td>
									<td>{{$karyawan->or_status}}</td>
									<td>{{$karyawan->or_periode}}</td>
								</tr>
								<tr>
									<td>{{$karyawan->or2_nama}}</td>
									<td>{{$karyawan->or2_jenis}}</td>
									<td>{{$karyawan->or2_status}}</td>
									<td>{{$karyawan->or2_periode}}</td>
								</tr>
								<tr>
									<td>{{$karyawan->or3_nama}}</td>
									<td>{{$karyawan->or3_jenis}}</td>
									<td>{{$karyawan->or3_status}}</td>
									<td>{{$karyawan->or3_periode}}</td>
								</tr>
							</tbody>
						</table>
						<strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Pekerjaan</strong>
						<table class="table text-muted table-sm">
							<thead class="bg-secondary">
								<tr>
									<th>NAMA PERUSAHAAN</th>
									<th>JABATAN TERAKHIR</th>
									<th>TAHUN MASUK</th>
									<th>TAHUN KELUAR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{$karyawan->pr_nama}}</td>
									<td>{{$karyawan->pr_jabatan}}</td>
									<td>{{$karyawan->pr_thmasuk}}</td>
									<td>{{$karyawan->pr_thkeluar}}</td>
								</tr>
								<tr>
									<td>{{$karyawan->pr2_nama}}</td>
									<td>{{$karyawan->pr2_jabatan}}</td>
									<td>{{$karyawan->pr2_thmasuk}}</td>
									<td>{{$karyawan->pr2_thkeluar}}</td>
								</tr>
								<tr>
									<td>{{$karyawan->pr3_nama}}</td>
									<td>{{$karyawan->pr3_jabatan}}</td>
									<td>{{$karyawan->pr3_thmasuk}}</td>
									<td>{{$karyawan->pr3_thkeluar}}</td>
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
	</div>
	@endsection
