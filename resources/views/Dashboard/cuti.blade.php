@extends('layout.master')
@section('link')
<link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<h1 style="font-size: 30px">APLIKASI CUTI KARYAWAN</h1>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col">
		<div class="card card-primary card-outline">
			<div class="card-header">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link active" href="#cuti" data-toggle="tab">Perizinan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
					</li>
				</ul>
			</div>
			<div class="card-body">
				<div class="tab-content">
					<div class="tab-pane active" id="cuti">
						<!-- Post -->
						<div class="post">
							<form action="cuti/store/{{Auth::user()->id}}" method="POST">
								{{ csrf_field() }}
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label>No Induk Karyawan</label>
										<input readonly="true" name="nik" type="text" class="form-control form-control-sm "
											id="nik" value="{{Auth::user()->karyawan->nik}}">
									</div>
									<div class="form-group col-sm-6">
										<label>Jabatan</label>
										<input readonly="true" required name="jabatan_id" type="text"
											class="form-control form-control-sm" id="jabatan_id"
											value="{{Auth::user()->karyawan->jabatan->jabatan}}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label>Nama Lengkap</label>
										<input readonly="true" required name="nama_lengkap" type="text"
											class="form-control form-control-sm" id="nama_lengkap"
											value="{{Auth::user()->karyawan->nama_lengkap}}">
									</div>
									<div class="form-group col-sm-6">
										<label>Golongan</label>
										<input readonly="true" required name="golongan_id" type="text"
											class="form-control form-control-sm " id="golongan_id"
											value="{{Auth::user()->karyawan->golongan->golongan}}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label>Awal Cuti</label>
										<input required name="tanggal_awal" id="tanggal_awal" type="date"
											class="form-control form-control-sm">
									</div>
									<div class="form-group col-sm-6">
										<label>Akhir Cuti</label>
										<input required name="tanggal_akhir" id="tanggal_akhir" type="date"
											class="form-control form-control-sm">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label>Lama Cuti</label>
										<input readonly="true" required name="lama_cuti" id="lama_cuti" type="text"
											class="form-control form-control-sm">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12">
										<label>Keterangan</label>
										<textarea required name="keterangan" id="keterangan" class="form-control form-control-sm"
											style="height: 150px;"></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm">
										<button type="submit" class="btn btn-primary float-right">SIMPAN</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="tab-pane" id="timeline">
						<table id="tabletimeline" class="table table-sm table-hover">
							<thead>
								<tr style="text-align: center;">
									<th>No</th>
									<th>Tanggal Pengajuan</th>
									<th>Tanggal Izin</th>
									<th>Perihal</th>
									<th>Keterangan</th>
									<th>Status</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@include('sweetalert::alert')
@endsection
@section('javascript')
<script type="text/javascript" src="/datatables/datatables.min.js">
</script>
<script type="text/javascript" src="/datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js">
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#datatable').DataTable({
		});

		$('#tabletimeline').DataTable({
		});
			});
</script>
@endsection