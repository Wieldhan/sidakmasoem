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
					<h3 class="profile-username text-center" style="font-size: 20px;">{{Auth::user()->karyawan->nama_lengkap}}</h3>
					<p class="text-muted text-center">{{Auth::user()->karyawan->jabatan->jabatan}}</p>
					<ul class="list-group list-group-unbordered mb-3">
						<li class="list-group-item">
							<a>Jenis Kelamin</a>
							<span class="float-right">{{Auth::user()->karyawan->jk}}</span>
						</li>
						<li class="list-group-item">
							<a>Agama</a>
							<span class="float-right">{{Auth::user()->karyawan->agama}}</span>
						</li>
						<li class="list-group-item">
							<a>Alamat</a>
							<span class="float-right">{{Auth::user()->karyawan->alamat}}</span>
						</li>
						<li class="list-group-item">
							<a>No Telepon</a>
							<span class="float-right">{{Auth::user()->karyawan->no_telepon}}</span>
						</li>
						<li class="list-group-item">
							<a>Email</a>
							<span class="float-right">{{Auth::user()->karyawan->user->email}}</span>
						</li>
						<li class="list-group-item">
							<a>Visi</a>
							<span class="float-right">{{Auth::user()->karyawan->visi}}</span>
						</li>
						<li class="list-group-item">
							<a>Misi</a>
							<span class="float-right">{{Auth::user()->karyawan->misi}}</span>
						</li>
					</ul>
					<button class="btn btn-sm btn-primary btn-block float-right" data-toggle="modal" data-target=".modal-edit-profil" title="Tambah Data Organisasi"><i class="fas fa-pencil mr-1"></i><b>Edit Profile</b></button>				
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
							<tr>									
								<th>Nama Instansi</th>
								<th>Jurusan</th>
								<th>Jenjang</th>
								<th>Tahun Lulus</th>								
							</tr>
						</thead>
						<tbody>
							@foreach ($pendidikan as $pend)
							<tr>
								<td>{{$pend->nama_instansi}}</td>
								<td>{{$pend->jurusan}}</td>
								<td>{{$pend->jenjang}}</td>
								<td>{{$pend->tahun_lulus}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>	
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
							<tr>									
								<th>Nama Organisasi</th>
								<th>Jabatan</th>
								<th>Periode</th>
								<th>Status Organisasi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($organisasi as $org)
							<tr>
								<td>{{$org->nama_org}}</td>
								<td>{{$org->jabatan_org}}</td>
								<td>{{$org->periode_org}}</td>
								<td>{{$org->status_org}}</td>							
							</tr>
							@endforeach
						</tbody>
					</table>
					<hr>
					<div class="row">
						<div class="col-10">
							<strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Pekerjaan</strong>
						</div>
						<div class="col-2">
							<button type="button" class="btn btn-sm btn-link float-right" data-toggle="modal" data-target=".modal-pekerjaan" title="Tambah Data Pekerjaan"><i class="fas fa-plus mr-1"></i></button>
						</div>
					</div>							
					<table class="table text-muted table-sm">
						<thead class="bg-secondary">
							<tr>
								<th>Nama Perusahaan</th>
								<th>Jabatan</th>
								<th>Tahun Masuk</th>
								<th>Tahun Keluar</th>
							</tr>
						</thead>
						<tbody>
							<tr>

							</tr>
						</tbody>
					</table>
					<hr>				
					<div>
						<strong><i class="far fa-file-alt mr-1"></i> Catatan Pekerjaan Almasoem</strong>
					</div>
					<table class="table text-muted table-sm">
						<thead class="bg-secondary">
							<tr>
								<th>Nama Jabatan</th>
								<th>Cabang</th>
								<th>Jenis Mutasi</th>
								<th>Tahun Mutasi</th>
							</tr>
						</thead>
						<tbody>
							<tr>

							</tr>
						</tbody>
					</table>
					<hr>
					<button class="btn btn-primary float-right" onclick="window.print()">
						<i class="fas fa-file-alt mr-1"></i>
						<b>Print CV</b></button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal pendidikan -->
		<div class="modal fade modal-pendidikan" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4>TAMBAH DATA PENDIDIKAN</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="/profile/simpanpend" method="POST">
							{{csrf_field()}}								
							<div class="form-group col-sm-12">
								<label>No Induk Karyawan</label>
								<input required name="nik" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->nik}}" readonly="true">
							</div>
							<div class="form-group col-sm-12">
								<label>Nama Instansi Pendidikan</label>
								<input required name="nama_instansi" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-row">										
								<div class="form-group col-sm-6">
									<label for="formcontroljenjang">Jenjang</label>
									<select required name="jenjang" class="form-control form-control-sm" id="formcontroljenjang">
										<option>--Pilih Salah Satu--</option>
										<option>SMA</option>
										<option>D3</option>											
										<option>Sarjana (S1)</option>
										<option>Pasca Sarjana (S2)</option>
										<option>Magister (S3)</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label>Jurusan</label>
									<input required name="jurusan" type="text" class="form-control form-control-sm">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label>Tahun Lulus</label>
									<input required name="tahun_lulus" type="text" onkeypress="hanyaangka(event)" class="form-control form-control-sm">
								</div>
								<div class="form-group col-sm-6">
									<label>Nilai Akhir</label>
									<input required name="nilai_akhir" type="text" onkeypress="hanyaangka(event)" class="form-control form-control-sm">
								</div>
							</div>	  
							<div class="form-row">
								<div class="col-8 float-right d-none d-sm-block" style="font-size: small;">
									<b>Version</b> 1.0.1
									<strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
								</div>
								<div class="col-2">
									<button type="reset" class="btn btn-sm btn-info btn-block float-right" data-dismiss="card">BATAL</button>
								</div>
								<div class="col-2">
									<button type="submit" class="btn btn-sm btn-primary btn-block float-right">SIMPAN</button>
								</div>
							</div>                                 
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end of modal pendidikan -->
		<!-- modal organisasi -->
		<div class="modal fade modal-organisasi" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4>TAMBAH DATA ORGANISASI</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="/profile/simpanorg" method="POST">
							{{csrf_field()}}								
							<div class="form-group">
								<label>No Induk Karyawan</label>
								<input required name="nik" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->nik}}" readonly="true">
							</div>
							<div class="form-group">
								<label>Nama Organisasi</label>
								<input required name="" type="text" class="form-control form-control-sm">
							</div>																
							<div class="form-group">
								<label>Jenis Organisasi</label>
								<input required name="" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group">
								<label>Status di Organisasi</label>
								<input required name="" type="text" class="form-control form-control-sm">
							</div>					
							<div class="form-group">
								<label>Status Organisasi</label>
								<input required name="" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-row">
								<div class="col-8 float-right d-none d-sm-block" style="font-size: small;">
									<b>Version</b> 1.0.1
									<strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
								</div>
								<div class="col-2">
									<button type="reset" class="btn btn-sm btn-info btn-block float-right" data-dismiss="card">BATAL</button>
								</div>
								<div class="col-2">
									<button type="submit" class="btn btn-sm btn-primary btn-block float-right">SIMPAN</button>
								</div>
							</div>                                 
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end of modal organisasi -->
		<!-- modal edit profil -->
		<div class="modal fade modal-edit-profil" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4>UBAH DATA DIRI</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="/update" method="POST">
							{{csrf_field()}}
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label>No Induk Karyawan</label>
									<input required name="nik" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->nik}}">
								</div>
								<div class="form-group col-sm-6">
									<label>No KTP</label>
									<input required name="no_ktp" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->no_ktp}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label>Nama Lengkap</label>
									<input required name="nama_lengkap" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->nama_lengkap}}">
								</div>
								<div class="form-group col-sm-6">
									<label for="formcontroljk">Jenis Kelamin</label>
									<select required name="jk" class="form-control form-control-sm" id="formcontroljk">									
										<option value="Laki Laki" {{Auth::user()->karyawan->jk === "Laki Laki"? "selected" : ""}}>Laki Laki</option>
										<option value="Perempuan" {{Auth::user()->karyawan->jk === "Perempuan"? "selected" : ""}}>Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="formcontrolagama">Agama</label>
									<select required name="agama" class="form-control form-control-sm" id="formcontrolagama" >
										<option value="Islam" {{Auth::user()->karyawan->agama === "Islam"? "selected" : ""}}>Islam</option>
										<option value="Protestan" {{Auth::user()->karyawan->agama === "Protestan"? "selected" : ""}}>Protestan</option>
										<option value="Khatolik" {{Auth::user()->karyawan->agama === "Khatolik"? "selected" : ""}}>Khatolik</option>
										<option value="Hindu" {{Auth::user()->karyawan->agama === "Hindu"? "selected" : ""}}>Hindu</option>
										<option value="Buddha" {{Auth::user()->karyawan->agama === "Buddha"? "selected" : ""}}>Buddha</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="formcontrolpernikahan">Status Pernikahan</label>
									<select required name="status_nikah" class="form-control form-control-sm" id="formcontrolpernikahan">
										<option value="Belum Menikah" {{Auth::user()->karyawan->status_nikah === "Belum Menikah"? "selected" : ""}}>Belum Menikah</option>
										<option value="Menikah" {{Auth::user()->karyawan->status_nikah === "Menikah"? "selected" : ""}}>Menikah</option>
										<option value="Cerai" {{Auth::user()->karyawan->status_nikah === "Cerai"? "selected" : ""}}>Cerai</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label>Tempat Lahir</label>
									<input required name="tempat_lahir" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->tempat_lahir}}">
								</div>
								<div class="form-group col-sm-6">
									<label>Tanggal Lahir</label>
									<input required name="tanggal_lahir" type="date" class="form-control form-control-sm" value="{{Auth::user()->karyawan->tanggal_lahir}}">
								</div> 
							</div>
							<div class="form-row"> 
								<div class="form-group col-sm-6">
									<label>Alamat</label>
									<textarea style="height: 75px;" required name="alamat" class="form-control">{{Auth::user()->karyawan->alamat}}</textarea>
								</div>
								<div class="form-group col-sm-6">
									<label>E-Mail</label>
									<input required name="email" type="email" class="form-control form-control-sm" value="{{Auth::user()->email}}">
								</div>
							</div>
							<div class="row">
								<div class="col-8 float-right d-none d-sm-block" style="font-size: small;">
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
		<!-- end of modal edit profil -->
	</div>
	@endsection
