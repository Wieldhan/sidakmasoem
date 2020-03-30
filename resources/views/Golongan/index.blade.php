@extends ('layout.master')
@section ('content')
<div class="content-header">
			<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<h1 style="font-size: 30px">DATA GOLONGAN</h1>
				</div>
				<div class="col-6">
					<button style="margin-right: 10px;" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-xl">Tambah <i class="fas fa-plus"></i></button>
					<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4>Tambah Data Golongan</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="/golongan/simpan" method="POST">
										{{csrf_field()}}										
										<div class="form-group col-sm-auto">
											<label>Kode Golongan</label>
											<input name="golongan" type="text" class="form-control">
										</div>
										<div class="form-group col-sm-auto">
											<label>Gaji Pokok</label>
											<input name="gaji_pokok" type="text" class="form-control currency">
										</div>					
										<div class="form-group col-sm-auto">
											<label>Uang Makan</label>
											<input name="uang_makan" type="text" class="form-control currency">
										</div>																														
										<div class="float-right" style="margin-right: 15px;">
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
				<div class="card-header" style="height: 50px;">
					<h3 class="card-title" style="font-size: 15;">KELOLA DATA GOLONGAN</h3>
					<div class="card-tools ">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-sm table-hover">
						<thead>
							<tr align="center">
								<th>Nama Golongan</th>
								<th>Gaji Pokok</th>
								<th>Uang Makan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_golongan as $gol)
							<tr align="center">
								<td>{{$gol->golongan}}</td>
								<td>{{"Rp ".rupiah($gol->gaji_pokok)}}</td>
								<td>{{"Rp ".rupiah($gol->uang_makan)}}</td>
								<td>
									<a class="btn btn-sm btn-warning" data-toggle="modal" data-target=".gol-edit">Edit</a>
									<div class="modal fade gol-edit" tabindex="-1" role="dialog" aria-labelledby="gol-edit" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h2 style="font-size: 25px;">Update Data Golongan</h2>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body" style="text-align: left;">
													<form action="/golongan/{{$gol->id}}/update" method="POST">
														{{csrf_field()}}										
														<div class="form-group col-sm-auto">
															<label>Kode Golongan</label>
															<input name="golongan" type="text" class="form-control" value="{{$gol->golongan}}">
														</div>
														<div class="form-group col-sm-auto">
															<label>Gaji Pokok</label>
															<input name="gaji_pokok" type="text" class="form-control currency" value="{{$gol->gaji_pokok}}">
														</div>					
														<div class="form-group col-sm-auto">
															<label>Uang Makan</label>
															<input name="uang_makan" type="text" class="form-control currency" value="{{$gol->uang_makan}}">
														</div>
														<div class="float-right" style="margin-right: 15px;">
															<button type="reset" class="btn btn-secondary" data-dismiss="card">BATAL</button>
															<button type="submit" class="btn btn-primary">UPDATE</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<a href="/golongan/{{$gol->id}}/hapus" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus DATA ini ?')">Hapus</a>
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