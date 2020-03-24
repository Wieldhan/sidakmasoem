	@extends ('layout.master')
	@section ('content')
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<h1 style="font-size: 30px">DATA GOLONGAN</h1>
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-xl">Tambah Golongan</button>
					<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h2 style="font-size: 30px; ">TAMBAH DATA GOLONGAN</h2>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="/golongan/simpan" method="POST">
										{{csrf_field()}}										
										<div class="form-group col-md-12">
											<label>Kode Golongan</label>
											<input name="golongan" id="golongan"	type="text" class="form-control">
										</div>
										<div class="form-group col-md-12">
											<label>Gaji Pokok</label>
											<input name="gaji_pokok" id="gaji" type="text" class="form-control">
										</div>					
										<div class="form-group col-md-12">
											<label>Uang Makan</label>
											<input name="uang_makan" id="uang_makan" type="text" class="form-control">
										</div>
										<div class="form-group col-md-12">
											<label>Transport</label>
											<input name="transport" id="transport" type="text" class="form-control">
										</div>																							
										<div class="float-right">
											<button type="reset" class="btn btn-secondary" data-dismiss="card">BATAL</button>
											<button type="submit" class="btn btn-primary">SIMPAN</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class ="container-fluid">
		<div class="col-sm-auto" >
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">KELOLA DATA GOLONGAN</h3>
					<div class="card-tools ">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-sm table-hover">
						<thead>
							<tr align="center">
								<th scope="col">Nama Golongan</th>
								<th scope="col">Gaji Pokok</th>
								<th scope="col">Uang Makan</th>
								<th scope="col">Transport</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_golongan as $gol)
							<tr align="center">
								<td>{{$gol->golongan}}</td>
								<td>{{$gol->gaji_pokok}}</td>
								<td>{{$gol->uang_makan}}</td>
								<td>{{$gol->transport}}</td>
								<td>
									<a href="#" class="btn btn-warning">Edit</a>
									<a href="/golongan/hapus/{{$gol->id}}" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus DATA ini ?')">Hapus</a>
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
