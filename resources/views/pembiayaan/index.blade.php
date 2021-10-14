@extends ('layout.master')
@section ('link')
<link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css">
@endsection
@section ('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<h1 style="font-size: 30px">DATA PEMBIAYAAN BPRS ALMASOEM</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
					data-bs-target=".modal-pembiayaan">Tambah <i class="fas fa-plus"></i></button>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col">
		<div class="card card-info card-outline">
			<div class="card-header" style="height: 50px;">
				<h2 class="card-title">ARSIP PEMBIAYAAN BPRS ALMASOEM</h2>
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
							<th>No Arsip</th>
							<th>No Akad</th>
							<th>CIF</th>
							<th>No KTP</th>
							<th>Nama Nasabah</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($pembiayaan as $data)
						<tr>
							<td align="center">{{$loop->iteration}}</td>
							<td align="center">{{$data->lemari.'/'.$data->laci.'/'.$data->no_berkas}}</td>
							<td>{{$data->no_akad}}</td>
							<td>{{$data->cif}}</td>
							<td>{{$data->no_ktp}}</td>
							<td>{{$data->nama_nasabah}}</td>
							<td>
								@if($data->status == 'Arsip')
								<label class="badge badge-success" style="font-size: 15px">Arsip</label>
								@elseif($data->status == 'Dipinjam')
								<label class="badge badge-warning" style="font-size: 15px">Dipinjam</label>
								@else
								<label class="badge badge-danger" style="font-size: 15px">WO</label>
								@endif
							</td>
							<td align="center">
								<div class="btn-group dropleft">
									<button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdown" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										Action
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdown">
										<form action="{{ route('arsip', $data->id) }}" method="POST">
											{{ csrf_field() }}
											<button class="dropdown-item btn">Arsip</button>
										</form>
										<form action="{{ route('dipinjam', $data->id) }}" method="POST">
											{{ csrf_field() }}
											<button class="dropdown-item btn">Dipinjam</button>
										</form>
										<form action="{{ route('wo', $data->id) }}" method="POST">
											{{ csrf_field() }}
											<button class="dropdown-item btn">WO</button>
										</form>
									</div>
								</div>
								<button class="btn btn-sm btn-danger hapus" pembiayaan-id="{{$data->id}}">Hapus</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- modal -->
	<div class="modal fade modal-pembiayaan" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4>TAMBAH DATA PEMBIAYAAN</h4>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="pembiayaan/simpan" method="POST">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label>Lemari</label>
								<input required name="lemari" type="number" min="0" class="form-control
									form-control-sm">
							</div>
							<div class="form-group col-sm-4">
								<label>Laci</label>
								<select required name="laci" class="form-control form-control-sm">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label>No Berkas</label>
								<input required name="no_berkas" type="number" min="0" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label>No Akad</label>
								<input required name="no_akad" onkeypress="hanyaangka(event)" type="text" maxlength="15"
									class="form-control form-control-sm">
							</div>
							<div class="form-group col-sm-6">
								<label>CIF</label>
								<input required name="cif" onkeypress="hanyaangka(event)" type="text" maxlength="11"
									class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label>No KTP</label>
								<input required name="no_ktp" type="text" onkeypress="hanyaangka(event)" maxlength="20"
									class="form-control form-control-sm">
							</div>
							<div class="form-group col-sm-6">
								<label>Nama Nasabah</label>
								<input required name="nama_nasabah" type="text" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">
								<label>Nama AO</label>
								<input required name="nama_ao" type="text" class="form-control form-control-sm">
							</div>
							<div class="form-group col-sm-6">
								<label>Tanggal Pencairan</label>
								<input required name="tanggal_pencairan" type="date" class="form-control form-control-sm">
							</div>
						</div>
						<div class="float-right">
							<button type="reset" class="btn btn-sm btn-danger" data-bs-dismiss="card">BATAL</button>
							<button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
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
<script type="text/javascript" src="../datatables/datatables.min.js"></script>
<script type="text/javascript" src="../datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$('#datatable').DataTable({
			});

			$(document).on('click','.hapus',function(){
				var pembiayaan_id = $(this).attr('pembiayaan-id');
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
						window.location ="/pembiayaan/hapus/"+pembiayaan_id+"";
					}
				});
			});	
		});
</script>
@endsection