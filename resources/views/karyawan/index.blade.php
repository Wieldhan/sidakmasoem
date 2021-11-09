@extends ('layout.master')
@section('link')
    <link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 15px;">
        <div class="col">
            <div class="card card-success card-outline">
                <div class="card-header" style="height: 50px;">
                    <h2 class="card-title">Kelola Data Karyawan</h2>
                    <div class="card-tools ">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-tools" style="padding-bottom: 25px">
                        <a href="karyawan/export" class="btn btn-sm btn-success">
                            <i class="fas fa-file-export"></i> Export To Excel
                        </a>
                        <button disabled class="btn btn-sm btn-danger">
                            <i class="fas fa-file-export"></i> Export To PDF
                        </button>
                    </div>
                    <table class="table table-sm text-sm table-striped" id="datatable" style="width: 100%;">
                        <thead>
                            <tr align="center">
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No KTP</th>
                                <th>Jenis Kelamin</th>
                                <th>Golongan</th>
                                <th>Jabatan</th>
                                <th>Cabang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <!-- edit -->
                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>UBah Data Karyawan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editform" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label>No Induk Karyawan</label>
                                                <input required readonly name="nik" type="text"
                                                    class="form-control form-control-sm " id="nik">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>No KTP</label>
                                                <input required readonly name="no_ktp" type="text"
                                                    class="form-control form-control-sm" id="no_ktp">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label>Nama Lengkap</label>
                                                <input required readonly name="nama_lengkap" type="text"
                                                    class="form-control form-control-sm" id="nama_lengkap">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label>Jenis Kelamin</label>
                                                <input required readonly name="jk" class="form-control form-control-sm"
                                                    id="jk">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-sm-4">
                                                <label>Jabatan</label>
                                                <select required name="jabatan_id" id="jabatan_id"
                                                    class="form-control form-control-sm">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Golongan</label>
                                                <select required name="golongan_id" id="golongan_id"
                                                    class="form-control form-control-sm">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Cabang</label>
                                                <select required name="cabang_id" id="cabang_id"
                                                    class="form-control form-control-sm">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <button type="submit"
                                                    class="btn btn-primary btn-block float-right">Ubah</button>
                                            </div>
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
    @include('sweetalert::alert')
@endsection
@section('javascript')
    <script type="text/javascript" src="/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/datatables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'datakaryawan',
                order: [
                    [2, 'asc']
                ],
                columns: [{
                        data: 'nama_lengkap',
                        name: 'nama_lengkap'
                    },
                    {
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'no_ktp',
                        name: 'no_ktp'
                    },
                    {
                        data: 'jk',
                        name: 'jk'
                    },
                    {
                        data: 'golongan',
                        name: 'golongan'
                    },
                    {
                        data: 'jabatan',
                        name: 'jabatan'
                    },
                    {
                        data: 'cabang',
                        name: 'cabang'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });

            $(document).on('click', '.hapus', function() {
                var karyawan_id = $(this).attr('karyawan-id');
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    title: 'ALERT!!',
                    text: "Yakin Ingin Menghapus Data Karyawan??",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal',
                    timer: '5000'
                }).then((result) => {
                    if (result.value) {
                        window.location = "/karyawan/destroy/" + karyawan_id + "";
                    }
                });
            });

            // $(document).on('click','.edit',function(){
            // 	var id = $(this).data('id');
            // 	console.log(id);
            // 	$.ajax({
            // 			url 		: "{{ url('/karyawan/detailKaryawan') }}",
            // 			method 	: "POST",
            // 			dataType: "JSON",
            // 			data 		: {
            // 			id 			: id,
            // 			_token 	: '{{ csrf_token() }}',
            // 		}, 
            // 		success: function(data) {
            // 			$('#editmodal').modal('show');
            // 			$('#editform').attr('action', '/karyawan/update/'+data.id);
            // 			$('#nik').val(data.no_induk);
            // 			$('#no_ktp').val(data.no_ktp);
            // 			$('#nama_lengkap').val(data.nama_lengkap);
            // 			$('#jk').val(data.jk);

            // 			$('#golongan_id').empty();
            // 			$('#golongan_id').append('<option value="'+ data.id_gol+'">'+ data.gol+'</option>');
            // 			var x = data.golongan;
            // 			x.forEach(function (x){
            // 				if (x.id != data.id_gol) {
            // 					$('#golongan_id').append('<option value="'+ x.id+'">'+ x.golongan+'</option>');
            // 				}
            // 			});

            // 			$('#jabatan_id').empty();
            // 			$('#jabatan_id').append('<option value="'+ data.id_jabat+'">'+ data.jb+'</option>');
            // 			var y = data.jabatan;
            // 			y.forEach(function (y){
            // 				if (y.id != data.id_jabat) {
            // 					$('#jabatan_id').append('<option value="'+ y.id+'">'+ y.jabatan+'</option>');
            // 				}
            // 			});

            // 			$('#cabang_id').empty();
            // 			$('#cabang_id').append('<option value="'+ data.id_cab+'">'+ data.cab+'</option>');
            // 			var z = data.cabang;
            // 			z.forEach(function (z){
            // 				if (z.id != data.id_cab) {
            // 					$('#cabang_id').append('<option value="'+ z.id+'">'+ z.cabang+'</option>');
            // 				}
            // 			});
            // 		}
            // 	});
            // });
        });
    </script>
@endsection
