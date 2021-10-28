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
            <h2>Contact</h2>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid">
   <div class="card card-info card-outline">
      <div class="card-header" style="height: 50px;">
         <h2 class="card-title">Arsip Pembiayaan BPRS ALMASOEM</h2>
         <div class="card-tools ">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-sm table-hover" id="datatable" style="font-size: 15px;">
            <thead>
               <tr>
                  <th align="center">No</th>
                  <th align="center">Avatar</th>
                  <th>Nama Lengkap</th>
                  <th>Jabatan</th>
                  <th>No Telepon</th>
                  <th>Detail</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($data as $datas)
               <tr>
                  <td align="center">{{$loop->iteration}}</td>
                  <td align="center">
                     @if($datas->avatar == '')
                     <img src="{{asset('images/avatars/avatardefault.png')}}" class="img-circle img-fluid"
                        style="width:50px; height: 50px;" alt="profile picture">
                     @else
                     <img src="{{asset('images/avatars/'.$datas->avatar)}}" class="img-circle img-fluid"
                        style="width:50px; height: 50px;" alt="profile picture">
                     @endif
                  </td>
                  <td>{{$datas->nama_lengkap}}</td>
                  <td>{{$datas->no_telepon}}</td>
                  <td>{{$datas->jabatan}}</td>
                  <td>
                     <a href="/profile/detail/{{$datas->user_id}}" class="btn btn-sm btn-primary float-right">Detail</a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
   {{-- <div class="card-deck">
      @foreach ($data as $datas)
      <div class="col-sm-3 my-3">
         <div class="card card-primary card-outline card-sm">
            <div class="card-body">
               <div class="text-center" style="margin-bottom:  10px;">
                  @if($datas->avatar == '')
                  <img src="{{asset('images/avatars/avatardefault.png')}}" class="img-circle img-fluid"
                     style="width:150px; height: 150px;" alt="profile picture">
                  @else
                  <img src="{{asset('images/avatars/'.$datas->avatar)}}" class="img-circle img-fluid"
                     style="width:150px; height: 150px;" alt="profile picture">
                  @endif
               </div>
               <h5 class="card-title">{{$datas->nama_lengkap}}</h5>
               <p class="card-text text-muted" style="font-size: 13px">{{$datas->jabatan}}</p>
               <p class="card-text text-muted" style="font-size: 13px">{{$datas->no_telepon}}</p>
               <a href="/profile/detail/{{$datas->user_id}}" class="btn btn-sm btn-primary float-right">Detail</a>
            </div>
         </div>
      </div>
      @endforeach
   </div> --}}
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