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
				<form action="/profile/update/{{auth::user()->id}}" method="POST">
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
							<label>No Telepon</label>
							<input required name="no_telepon" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->no_telepon}}">
						</div>
						<div class="form-group col-sm-6">
							<label>Alamat</label>
							<textarea style="height: 75px;" required name="alamat" class="form-control">{{Auth::user()->karyawan->alamat}}</textarea>
						</div>
					</div>
					<div class="form-row"> 
						<div class="form-group col-sm-6">
							<label>Visi</label>
							<textarea style="height: 75px;" required name="visi" class="form-control">{{Auth::user()->karyawan->visi}}</textarea>
						</div>
						<div class="form-group col-sm-6">
							<label>Misi</label>
							<textarea style="height: 75px;" required name="misi" class="form-control">{{Auth::user()->karyawan->misi}}</textarea>
						</div>
					</div>
					<div class="row">
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
<!-- end of modal edit profil -->
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
					<div class="form-group col-sm-6">
						<label>No Induk Karyawan</label>
						<input required name="nik" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->nik}}" readonly="true">
					</div>
					<div class="form-group col-sm">
						<label>Nama Instansi Pendidikan</label>
						<input required name="nama_instansi" type="text" class="form-control form-control-sm">
					</div>																	
					<div class="form-group col-sm">
						<label>Jenjang</label>
						<select required name="jenjang" class="form-control form-control-sm" id="formcontroljenjang">
							<option>--Pilih Salah Satu--</option>
							<option>SMA</option>
							<option>D3</option>											
							<option>Sarjana (S1)</option>
							<option>Pasca Sarjana (S2)</option>
							<option>Magister (S3)</option>
						</select>
					</div>
					<div class="form-group col-sm">
						<label>Jurusan</label>
						<input required name="jurusan" type="text" class="form-control form-control-sm">
					</div>														
					<div class="form-group col-sm">
						<label>Tahun Lulus</label>
						<input required name="tahun_lulus" type="date" class="form-control form-control-sm">
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
<!-- pengalaman pekerjaan -->
<div class="modal fade modal-pengalaman" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4>TAMBAH DATA PENGALAMAN KERJA</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/profile/simpanpeng" method="POST">
					{{csrf_field()}}								
					<div class="form-group">
						<label>No Induk Karyawan</label>
						<input required name="nik" type="text" class="form-control form-control-sm" value="{{Auth::user()->karyawan->nik}}" readonly="true">
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>Nama Perusahaan</label>
							<input required name="nama_pr" type="text" class="form-control form-control-sm">
						</div>																
						<div class="form-group col-sm-6">
							<label>Jabatan Terakhir</label>
							<input required name="jabatan_pr" type="text" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>Tahun Masuk</label>
							<input required name="th_masuk" type="date" class="form-control form-control-sm">
						</div>			
						<div class="form-group col-sm-6">
							<label>Tahun Resign</label>
							<input required name="th_keluar" type="date" class="form-control form-control-sm">
						</div>			
					</div>
					<div class="form-group col-sm">
						<label>Alasan Resign</label>
						<input required name="alasan_resign" type="text" class="form-control form-control-sm">
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
<!-- end of pengalaman pekerjaan -->
<!-- pengalaman organisasi -->
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
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>Nama Organisasi</label>
							<input required name="nama_org" type="text" class="form-control form-control-sm">
						</div>																
						<div class="form-group col-sm-6">
							<label>Jabatan Organisasi</label>
							<input required name="jabatan_org" type="text" class="form-control form-control-sm">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>Periode di Organisasi</label>
							<input required name="periode_org" type="date" class="form-control form-control-sm">
						</div>					
						<div class="form-group col-sm-6">
							<label>Status Organisasi</label>
							<select required name="status_org" class="form-control form-control-sm">
								<option value="Aktif">Aktif</option>
								<option value="Non Aktif">Non Aktif</option>
							</select>
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
<!-- end of organisasi -->