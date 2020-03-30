@extends ('layout.master')
@section ('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<h1 style="font-size: 30px">DATA JABATAN</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-xl">Tambah <i class="fas fa-plus"></i></button>
				<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4>Tambah Data jabatan</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="/jabatan/simpan" method="POST">
									{{csrf_field()}}										
									<div class="form-group col-sm-auto">
										<label>Nama jabatan</label>
										<input name="jabatan" type="text" class="form-control">
									</div>
									<div class="form-group col-sm-auto">
										<label>Transport</label>
										<input name="transport" type="text" class="form-control currency">
									</div>					
									<div class="form-group col-sm-auto">
										<label>Pulsa</label>
										<input name="pulsa" type="text" class="form-control currency">
									</div>	
									<div class="form-group col-sm-auto">
										<label>Tunjangan Jabatan</label>
										<input name="tunj_jab" type="text" class="form-control currency">
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
				<h3 class="card-title" style="font-size: 15;">KELOLA DATA JABATAN</h3>
				<div class="card-tools ">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-sm table-hover">
					<thead>
						<tr align="center">
							<th>Nama jabatan</th>
							<th>Transport</th>
							<th>Pulsa</th>
							<th>Tunjangan Jabatan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data_jabatan as $jabat)
						<tr align="center">
							<td>{{$jabat->jabatan}}</td>
							<td>@currency($jabat->transport)</td>
							<td>@currency($jabat->pulsa)</td>
							<td>@currency($jabat->tunj_jab)</td>
							<td>
								<a class="btn btn-sm btn-warning" data-toggle="modal" data-target=".jabat-edit">Edit</a>
								<div class="modal fade jabat-edit" tabindex="-1" role="dialog" aria-labelledby="jabat-edit" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h2 style="font-size: 25px;">Update Data jabatan</h2>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body" style="text-align: left;">
												<form action="/jabatan/{{$jabat->id}}/update" method="POST">
													{{csrf_field()}}										
													<div class="form-group col-sm-auto">
														<label>Nama jabatan</label>
														<input name="jabatan" id="jabatan" type="text" class="form-control" value="{{$jabat->jabatan}}">
													</div>
													<div class="form-group col-sm-auto">
														<label>Transport</label>
														<input name="transport" id="transport" type="text" class="form-control currency" value="{{$jabat->transport}}">
													</div>					
													<div class="form-group col-sm-auto">
														<label>Pulsa</label>
														<input name="pulsa" id="pulsa" type="text" class="form-control currency" value="{{$jabat->pulsa}}">
													</div>
													<div class="form-group col-sm-auto">
														<label>Tunjangan Jabatan</label>
														<input name="tunj_jab" id="tunj_jab" type="text" class="form-control currency" value="{{$jabat->tunj_jab}}">
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
								<a href="/jabatan/{{$jabat->id}}/hapus" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Ingin Menghapus DATA ini ?')">Hapus</a>
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