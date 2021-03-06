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
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="col">
		<div class="card card-success card-outline">
			<div class="card-header" style="height: 50px;">
				<h2 class="card-title">Arsip Surat Keputusan BPRS ALMASOEM</h2>
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
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data_sk as $datask)
						<tr>
							<td align="center">{{$loop->iteration}}</td>
							<td align="center">{{$datask->no_sk}}</td>
							<td>{{$datask->judul}}</td>
							<td align="center">{{$datask->keterangan}}</td>
							<td align="center">{{$datask->tanggal_sah->format('d/m/Y')}}</td>
							<td align="center">
								<a href="{{ route('downloadsk', $datask->id) }}" class="btn btn-success btn-sm"><i
										class="fas fa-download"></i> Download</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
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
		});
</script>
@endsection