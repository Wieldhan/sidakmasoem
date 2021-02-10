@extends ('layout.master')
@section('link')
<link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section ('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 style="font-size: 30px">DASHBOARD</h1>
			</div>
		</div>
	</div>
</div>
<section class="content">
	@if(Auth::user()->level == 'admin')
	<div class="form-row">
		<div class="col-lg-3 col-6">
			<div class="small-box bg-primary">
				<div class="inner">
					<h3>Go To</h3>
					<p>bprsalmasoem.com</p>
				</div>
				<div class="icon">
					<i class="ion ion-earth"></i>
				</div>
				<a target="_blank" href="https://almasoembank.co.id" class="small-box-footer">Detail <i
						class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3>{{$izin->where('status', 'Waiting')->count()}} Data</h3>
					<p>Pengajuan Izin</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-6">
			<div class="small-box bg-success">
				<div class="inner">
					<h3>{{$karyawan->count()}} Orang</h3>
					<p>Jumlah Karyawan</p>
				</div>
				<div class="icon">
					<i class="ion ion-person"></i>
				</div>
				<a href="{{url('karyawan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-6">
			<div class="small-box bg-danger">
				<div class="inner">
					<h3>65</h3>
					<p>Unique Visitors</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="form-row">
		<div class="container-fluid">
			<div>
				<div class="card card-info card-outline">
					<div class="card-header" style="height: 50px;">
						<h2 class="card-title">HISTORY IZIN KARYAWAN</h2>
						<div class="card-tools ">
							<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-sm table-hover" id="datatable">
							<thead>
								<tr style="text-align: center;">
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Tanggal Izin</th>
									<th>Perihal</th>
									<th>Keterangan</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($izin as $izal)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$izal->karyawan->nama_lengkap}}</td>
									<td>{{$izal->tanggal_izin->format('d/m/Y')}}</td>
									<td>{{$izal->perihal}}</td>
									<td>{{$izal->keterangan}}</td>
									<td>@if($izal->status == 'Waiting')
										<label class="badge badge-warning" style="font-size: 15px">Waiting</label>
										@else
										<label class="badge badge-success" style="font-size: 15px">Approved</label>
										@endif</td>
									<td>
										<form action="{{ route('approve', $izal->id) }}" method="POST">
											{{ csrf_field() }}
											<button type="submit" class="btn btn-success btn-sm confirm"
												izal-id="{{$izal->id}}">Confirm</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>
@endsection
@section('javascript')
<script type="text/javascript" src="/datatables/datatables.min.js"></script>
<script type="text/javascript" src="/datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	$('#datatable').DataTable({ 
	});
});
</script>
@endsection