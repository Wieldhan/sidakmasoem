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
						<h3 class="card-title"><b>About Me</b></h3>
					</div>
					<div class="card-body">
						<strong><i class="fas fa-graduation-cap"></i> Pendidikan</strong>
						<div class="text-muted">
							<!-- SMA -->
							<b>SMA</b>
							<a><span>{{$karyawan->sma_lulus}}</span>---<span>{{$karyawan->sma_nama}}</span> Jurusan <span>{{$karyawan->sma_jurusan}}</span> Nilai Kelulusan <span>{{$karyawan->sma_nilai}}</span></a>
						</div>
						<div class="text-muted">
							<!-- S1 -->
							<b>Sarjana/Ahli Madya</b>
							<a><span>{{$karyawan->s1_lulus}}</span>---<span>{{$karyawan->s1_nama}}</span> Jurusan <span>{{$karyawan->s1_jurusan}}</span> Nilai Kelulusan <span>{{$karyawan->s1_nilai}}</span></a>
						</div>
						<div class="text-muted">
							<!-- S2 -->
							<b>Magister</b>
							<a><span>{{$karyawan->s2_lulus}}</span>---<span>{{$karyawan->s2_nama}}</span> Jurusan <span>{{$karyawan->s2_jurusan}}</span> Nilai Kelulusan <span>{{$karyawan->s2_nilai}}</span></a>
						</div>
						<hr>
						<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
						<p class="text-muted">
							{{$karyawan->alamat}}
						</p>
						<hr>
						<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
						<p class="text-muted">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<hr>
						<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
						<p class="text-muted">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
