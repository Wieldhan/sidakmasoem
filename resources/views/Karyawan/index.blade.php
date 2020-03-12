	@extends ('layout.master')
	@section ('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-6">
					<h1 style="font-size: 30px">DATA KARYAWAN</h1>
				</div>
				<!-- BUTTON TAMBAH -->
				<div class="col-6">
					<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#staticBackdrop">TAMBAH KARYAWAN</button>
					<!-- Modal -->
					<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">FORM TAMBAH KARYAWAN</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									{{ csrf_field() }}
									<form action="/karyawan/create" method="POST">
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
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
											<button type="submit" class="btn btn-primary">SIMPAN</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class ="container-fluid">
		<div>
			<table class=" table-sm table-hover form-control-sm">
				<thead>
					<tr align="center">
						<th scope="col">NIK</th>
						<th scope="col">NO KTP</th>
						<th scope="col">Nama</th>
						<th scope="col">Tempat Lahir</th>
						<th scope="col" scope="col">Tanggal Lahir</th>
						<th scope="col">Agama</th>
						<th scope="col">Golongan</th>
						<th scope="col">Jabatan</th>
						<th scope="col">Alamat</th>
						<th scope="col">No Telepon</th>
						<th scope="col">Email</th>
					</tr>
				</thead>
				@foreach($data_karyawan as $karyawan)
				<tbody class="table-bordered" >
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
					</tr>
				</tbody>
				@endforeach
			</table>
		</div>
	</div>
	@endsection
	<!-- /.content-wrapper -->
