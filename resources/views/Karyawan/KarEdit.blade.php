<!DOCTYPE html>
<html>
<head>
	@include('layout.head')
</head>
<body>
	<script src="js/main.js"></script>
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Quick Example</h3>
		</div>
		<div class="card-body">
			<form action="/karyawan/update/{{$kar->id}}" method="POST">
				{{csrf_field()}}
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>NIK</label>
						<input name="nik" type="text" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label>NO KTP</label>
						<input name="no_ktp" type="text" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Nama Lengkap</label>
						<input name="nama" type="text" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label>Nama Panggilan</label>
						<input name="nama" type="text" class="form-control">
					</div>
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
					<button type="reset" class="btn btn-info" data-dismiss="card">BATAL</button>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
		<script src="/adminlte/jquery/jquery.min.js"></script>
		<script src="/adminlte/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/adminlte/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<script src="/adminlte/js/adminlte.min.js"></script>
		<script src="/adminlte/js/demo.js"></script>
		<script src="/sweetalert/src/js/sweetalert.all.js"></script>
		@include('sweetalert::alert')
	</body>
	</html>