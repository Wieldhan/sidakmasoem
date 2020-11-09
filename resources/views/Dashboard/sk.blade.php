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
				<h1 style="font-size: 30px">DATA SK BPRS ALMASOEM</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".modal-sk">Tambah <i
						class="fas fa-plus"></i></button>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col">
		<div class="card card-info card-outline">
			<div class="card-header" style="height: 50px;">
				<h2 class="card-title">Surat Keputusan BPRS ALMASOEM</h2>
				<div class="card-tools ">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-sm table-hover" id="datatable" style="font-size: 15px;">
					<thead>
						<tr align="center">
							<th>No</th>
							<th>No SK</th>
							<th>Judul</th>
							<th>Keterangan</th>
							<th>Tanggal Pengesahan</th>
							<th>Inputer</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data_sk as $datask)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$datask->no_sk}}</td>
							<td>{{$datask->judul}}</td>
							<td>{{$datask->keterangan}}</td>
							<td>{{$datask->tanggal_sah}}</td>
							<td>{{$datask->user->nama_lengkap}}</td>
							<td>
								<button class="btn btn-sm btn-danger hapus" sk-id="{{$datask->id}}">Hapus</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- modal -->
	<div class="modal fade modal-sk" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4>TAMBAH SK BAMS</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="/sk/simpan" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group col-sm-auto">
							<label>Nomor SK</label>
							<input required name="no_sk" type="text" class="form-control">
						</div>
						<div class="form-group col-sm-auto">
							<label>Judul</label>
							<input required name="judul" type="text" class="form-control">
						</div>
						<div class="form-group col-sm-auto">
							<label>Keterangan</label>
							<textarea required name="keterangan" id="keterangan" class="form-control form-control-sm"></textarea>
						</div>
						<div class="form-group col-sm-auto">
							<label>Tanggal Pengesahan</label>
							<input required type="date" name="tanggal_sah" id="tanggal_sah" class="form-control form-control-sm">
						</div>
						<div class="form-group col-sm-auto">
							<label>Upload</label>
							<input required type="file" class="uploads form-control-file form-control-sm" name="file">
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
@include('sweetalert::alert')
@endsection
@section ('javascript')
<script type="text/javascript" src="/datatables/datatables.min.js"></script>
<script type="text/javascript" src="/datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$('#datatable').DataTable({
			});

			$(document).on('click','.hapus',function(){
				var sk_id = $(this).attr('sk-id');
				Swal.fire({
					toast : true,
					position: 'top-end',
					title: 'ALERT!!',
					text: "Yakin Ingin Menghapus Data Karyawan??",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Hapus',
					cancelButtonColor:'#ff3c4f',
					CancelButtonText:'Batal',
					timer : '5000'
				}).then((result) => {
					if (result.value) {
						window.location ="/sk/hapus/"+sk_id+"";
					}
				});
			});	
		});
</script>
@endsection