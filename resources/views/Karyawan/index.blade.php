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
		<div class ="col">
			<div class="card card-primary">
				<div class="card-header" style="height: 50px;">
					<h2 class="card-title align-middle">TAMBAH KARYAWAN</h2>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<div class="row col-6">
						<h3 class="card-subtitle align-middle">DATA PRIBADI</h3>
					</div>
					<hr>
					<form action="/karyawan/simpan" method="POST">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-sm-3">
								<label>No Induk Karyawan</label>
								<input name="nik" type="text" class="form-control form-control-sm" placeholder="No. Reg atau NIK berdasarkan SK">
							</div>
							<div class="form-group col-sm-3">
								<label>No KTP</label>
								<input name="no_ktp" type="text" class="form-control form-control-sm" placeholder="Ex. 32100xxxx">
							</div>
							<div class="form-group col-sm-3">
								<label>Nama Lengkap</label>
								<input name="nama_lengkap" type="text" class="form-control form-control-sm" placeholder="Nama Sesuai KTP">
							</div>
							<div class="form-group col-sm-3">
								<label>Nama Panggilan</label>
								<input name="nama_panggilan" type="text" class="form-control form-control-sm" placeholder="Contoh: Dobleh">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-3">
								<label for="formcontroljk">Jenis Kelamin</label>
								<select class="form-control form-control-sm" id="formcontroljk">
									<option>Laki-Laki</option>
									<option>Perempuan</option>
								</select>
							</div>
							<div class="form-group col-sm-3">
								<label for="formcontrolagama">Agama</label>
								<select class="form-control form-control-sm" id="formcontrolagama" >
									<option>Islam</option>
									<option>Protestan</option>
									<option>Khatolik</option>
									<option>Hindu</option>
									<option>Buddha</option>
								</select>
							</div>
							<div class="form-group col-sm-3">
								<label>Tempat Lahir</label>
								<input name="tempat_lahir" type="text" class="form-control form-control-sm" placeholder="Kota Kelahiran">
							</div>
							<div class="form-group col-sm-3">
								<label>Tanggal Lahir</label>
								<input name="tanggal_lahir" type="date" class="form-control form-control-sm">
							</div>	
						</div>
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label>Nama Ibu Kandung</label>
								<input name="ibukandung" type="text" class="form-control form-control-sm" placeholder="sesuai dengan KK">
							</div>
							<div class="form-group col-sm-4">
								<label for="formcontrolpernikahan">Status Pernikahan</label>
								<select class="form-control form-control-sm" id="formcontrolpernikahan">
									<option>Belum Menikah</option>
									<option>Menikah</option>
									<option>Cerai</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label>Nama Pasangan</label>
								<input name="pasangan" type="text" class="form-control form-control-sm" placeholder="Nama Suami / Istri">
							</div>
						</div>
						<hr>
						<div class="form-row">							
							<div class="form-group col-sm-4">
								<label for="formcontrolgolongan">Golongan</label>
								<select class="form-control form-control-sm" id="formcontrolgolongan">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="formcontroljabatan">Jabatan</label>
								<select class="form-control form-control-sm" id="formcontroljabatan">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label>Alamat</label>
								<textarea style="height: 75px;" name="alamat" class="form-control" placeholder="Alamat tinggal saat ini"></textarea>
							</div>
							<div class="form-group col-sm-4">
								<label>Visi</label>
								<textarea style="height: 75px;" name="visi" class="form-control" placeholder="Visi Bekerja di BPRS MASOEM"></textarea>
							</div>
							<div class="form-group col-sm-4">
								<label>Misi</label>
								<textarea style="height: 75px;" name="misi" class="form-control" placeholder="Misi Bekerja di BPRS MASOEM"></textarea>
							</div>
						</div>						
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label>No Telepon</label>
								<input name="no_telepon" type="text" class="form-control form-control-sm" placeholder="081xxxxxx">
							</div>
							<div class="form-group col-sm-4">
								<label>E-Mail</label>
								<input name="email" type="email" class="form-control form-control-sm" placeholder="contohemail@gmail.com">
							</div>
							<div class="form-group col-sm-4">
								<label>No Telepon Keluarga</label>
								<input name="teleponkeluarga" type="text" class="form-control form-control-sm" placeholder="081xxxxxx">
							</div>
						</div>
						<hr>
						<h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT PENDIDIKAN</h3>
						<table class="table">
							<thead class="bg-primary">
								<tr align="center">
									<th>TINGKAT</th>
									<th>NAMA INSTITUSI</th>
									<th>JURUSAN</th>
									<th>TAHUN LULUS</th>
									<th>NILAI AKHIR / IPK</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span>SMA / SMK</span>
									</td>
									<td>
										<input name="tingkatsma" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jurusansma" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="lulussma" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="nilaisma" type="text" class="form-control form-control-sm">
									</td>
								</tr>
								<tr>
									<td>
										<span>PERGURUAN TINGGI</span>
									</td>
									<td>
										<input name="tingkatUniv" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jurusanUniv" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="lulusUniv" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="nilaiUniv" type="text" class="form-control form-control-sm">
									</td>
								</tr>
								<tr>
									<td>
										<span>PERGURUAN TINGGI (S2)</span>
									</td>
									<td>
										<input name="tingkatUniv2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jurusanUniv2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="lulusUniv2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="nilaiUniv2" type="text" class="form-control form-control-sm">
									</td>
								</tr>
							</tbody>
						</table>
						<hr>
						<h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT ORGANISASI</h3>
						<table class="table">
							<thead class="bg-primary">
								<tr align="center">
									<th>NO</th>
									<th>NAMA ORGANISASI</th>
									<th>JENIS ORGANISASI</th>
									<th>STATUS KEANGGOTAAN</th>
									<th>PERIODE JABATAN</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span>1</span>
									</td>
									<td>
										<input name="organisasi1" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jenis1" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="status1" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="periode1" type="text" class="form-control form-control-sm">
									</td>
								</tr>
								<tr>
									<td>
										<span>2</span>
									</td>
									<td>
										<input name="organisasi2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jenis2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="status2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="periode2" type="text" class="form-control form-control-sm">
									</td>
								</tr>
								<tr>
									<td>
										<span>3</span>
									</td>
									<td>
										<input name="organisasi3" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jenis3" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="status3" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="periode3" type="text" class="form-control form-control-sm">
									</td>
								</tr>
							</tbody>
						</table>
						<hr>
						<h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT PEKERJAAN</h3>
						<table class="table">
							<thead class="bg-primary">
								<tr align="center">
									<th>NO</th>
									<th>NAMA PERUSAHAAN</th>
									<th>JABATAN TERAKHIR</th>
									<th>STATUS</th>
									<th>PERIODE KERJA</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span>1</span>
									</td>
									<td>
										<input name="organisasi1" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jenis1" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="status1" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="periode1" type="text" class="form-control form-control-sm">
									</td>
								</tr>
								<tr>
									<td>
										<span>2</span>
									</td>
									<td>
										<input name="organisasi2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jenis2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="status2" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="periode2" type="text" class="form-control form-control-sm">
									</td>
								</tr>
								<tr>
									<td>
										<span>3</span>
									</td>
									<td>
										<input name="organisasi3" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="jenis3" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="status3" type="text" class="form-control form-control-sm">
									</td>
									<td>
										<input name="periode3" type="text" class="form-control form-control-sm">
									</td>
								</tr>
							</tbody>
						</table>
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
			<div class="card card-info">
				<div class="card-header" style="height: 50px;">
					<h2 class="card-title">KELOLA DATA KARYAWAN</h2>
					<div class="card-tools ">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
					</div>					
				</div>
				<div class="card-body">
					<table class="table table-sm table-hover datatable" style="font-size: 15px;">
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
			var table = $('.datatable').DataTable();
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