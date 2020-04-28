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
										<input name="jabatan" type="text" class="form-control" required maxlength="50">
									</div>
									<div class="form-group col-sm-auto">
										<label>Transport</label>
										<input name="transport" type="text" class="form-control" required maxlength="15" onkeypress="hanyaangka(event)">
									</div>					
									<div class="form-group col-sm-auto">
										<label>Pulsa</label>
										<input name="pulsa" type="text" class="form-control" required maxlength="15" onkeypress="hanyaangka(event)">
									</div>	
									<div class="form-group col-sm-auto">
										<label>Tunjangan Jabatan</label>
										<input name="tunj_jab" type="text" class="form-control" required maxlength="15" onkeypress="hanyaangka(event)">
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
				<table id="datatable" class="table table-sm">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama jabatan</th>
							<th>Transport</th>
							<th>Pulsa</th>
							<th>Tunjangan Jabatan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data_jabatan as $jabat)
						<tr>
							<td>{{$jabat->id}}</td>
							<td>{{$jabat->jabatan}}</td>
							<td>{{$jabat->transport}}</td>
							<td>{{$jabat->pulsa}}</td>
							<td>{{$jabat->tunj_jab}}</td>
							<td>
								<button class="btn btn-sm btn-warning edit">Edit</button>
								<div id="editmodal" class="modal fade" tabindex="-1" role="dialog">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h2 style="font-size: 25px;">Update Data jabatan</h2>
												<button type="button" class="close" data-dismiss="modal">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body" style="text-align: left;">
												<form method="POST" id="editform">
													{{csrf_field()}}
													<div class="form-group col-sm-auto">
														<label>Nama jabatan</label>
														<input name="jabatan" id="jabatan" type="text" class="form-control" required maxlength="50" >
													</div>
													<div class="form-group col-sm-auto">
														<label>Transport</label>
														<input name="transport" id="transport" type="text" class="form-control" required maxlength="15" onkeypress="hanyaangka(event)">
													</div>					
													<div class="form-group col-sm-auto">
														<label>Pulsa</label>
														<input name="pulsa" id="pulsa" type="text" class="form-control" required maxlength="15" onkeypress="hanyaangka(event)">
													</div>
													<div class="form-group col-sm-auto">
														<label>Tunjangan Jabatan</label>
														<input name="tunj_jab" id="tunjangan" type="text" class="form-control" required maxlength="15" onkeypress="hanyaangka(event)">
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
								<button class="btn btn-sm btn-danger hapus" jabat-id="{{$jabat->id}}">Hapus</button>
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
<script>
	$(document).ready(function(){
		var table = $('#datatable').DataTable();
		table.on('click','.edit', function(){
			$tr = $(this).closest('tr');
			if ($($tr).hasClass('child')){
				$tr = $tr.prev('.parent');
			}
			var data = table.row($tr).data();
			console.log(data);
			$('#jabatan').val(data[1]);
			$('#transport').val(data[2]);
			$('#pulsa').val(data[3]);
			$('#tunjangan').val(data[4]);
			$('#editform').attr('action', '/jabatan/update/'+data[0]);
			$('#editmodal').modal('show');
		});	
	});

	$('.hapus').click(function(){
		var jabat_id = $(this).attr('jabat-id');
		Swal.fire({
			title: 'ATTENTION !!',
			text: "Yakin Ingin Menghapus Data ID "+jabat_id+"",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Hapus',
			cancelButtonText:'Batal'
		}).then((result) => {
			if (result.value) {
				window.location ="/jabatan/hapus/"+jabat_id+"";
			}
		});
	});
</script>
@endsection