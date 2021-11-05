@extends ('layout.master')
@section('link')
    <link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h1 style="font-size: 30px">APLIKASI MUTASI KARYAWAN</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <div class="card-title">FORM MUTASIAN KARYAWAN</div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-sm btn-success cari-karyawan"> <i class="fas fa-search"></i>
                            Cari Karyawan
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="mutasiform" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label>No Induk Karyawan</label>
                                <input required readonly name="nik" type="text" class="form-control form-control-sm "
                                    id="nik">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Nama Lengkap</label>
                                <input required readonly name="nama_lengkap" type="text"
                                    class="form-control form-control-sm" id="nama_lengkap">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label>Jabatan</label>
                                <select required name="jabatan_id" id="jabatan_id" class="form-control form-control-sm">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Golongan</label>
                                <select required name="golongan_id" id="golongan_id" class="form-control form-control-sm">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Cabang</label>
                                <select required name="cabang_id" id="cabang_id" class="form-control form-control-sm">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label>Tanggal Berlaku</label>
                                <input required name="tanggal_mutasi" id="tanggal_mutasi" type="date"
                                    class="form-control form-control-sm">
                                </input>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Status</label>
                                <select required name="status" id="status" class="form-control form-control-sm">
                                    <option>Pilih Salah Satu</option>
                                    <option value="Mutasi">Mutasi</option>
                                    <option value="Promosi">Promosi</option>
                                    <option value="Desmosi">Desmosi</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Keterangan</label>
                                <textarea required name="keterangan" id="keterangan"
                                    class="form-control form-control-sm"></textarea>
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
        </div>
    </div>
    <div class="container-fluid">
        <div class="col">
            <div class="card card-info">
                <div class="card-header" style="height: 50px;">
                    <div class="card-title">HISTORY MUTASIAN KARYAWAN</div>
                    <div class="card-tools ">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-hover" width="100%" id="datatable-mutasi" style="font-size: 15px;">
                        <thead>
                            <tr align="center">
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Golongan</th>
                                <th>Cabang</th>
                                <th>Tanggal Berlaku</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Karyawan -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>DAFTAR KARYAWAN BPRS ALMASOEM</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive-sm">
                        <table class="table table-sm table-hover" width="100%" id="datatable-karyawan"
                            style="font-size: 15px;">
                            <thead>
                                <tr align="center">
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Golongan</th>
                                    <th>Cabang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-8 float-right d-none d-sm-block">
                            <b>Version</b> 1.0.1
                            <strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
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
            $('.cari-karyawan').click(function() {
                $('#detailModal').modal('show');
            });
            $('#datatable-karyawan').DataTable({
                processing: true,
                serverSide: true,
                type: 'get',
                ajax: 'tabelkaryawan',
                order: [
                    [0, 'desc']
                ],
                columns: [{
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'nama_lengkap',
                        name: 'nama_lengkap'
                    },
                    {
                        data: 'jabatan',
                        name: 'jabatan'
                    },
                    {
                        data: 'golongan',
                        name: 'golongan'
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

            $('#datatable-mutasi').DataTable({
                processing: true,
                serverSide: true,
                type: 'get',
                ajax: 'tabelmutasi',
                order: [
                    [0, 'desc']
                ],
                columns: [{
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'nama_lengkap',
                        name: 'nama_lengkap'
                    },
                    {
                        data: 'jabatan',
                        name: 'jabatan'
                    },
                    {
                        data: 'golongan',
                        name: 'golongan'
                    },
                    {
                        data: 'cabang',
                        name: 'cabang'
                    },
                    {
                        data: 'tanggal_mutasi',
                        name: 'tanggal_mutasi'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                    {
                        data: 'status',
                        name: 'status'
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

            $(document).on('click', '.pilih', function() {
                var id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url: "{{ url('karyawandetail') }}",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        $('#nik').val(data.no_induk);
                        $('#nama_lengkap').val(data.nama_lengkap);
                        $('#golongan_id').empty();
                        $('#golongan_id').append('<option value="' + data.id_gol + '">' + data
                            .gol + '</option>');
                        var x = data.golongan;
                        x.forEach(function(x) {
                            if (x.id != data.id_gol) {
                                $('#golongan_id').append('<option value="' + x.id +
                                    '">' + x.golongan + '</option>');
                            }
                        });
                        $('#jabatan_id').empty();
                        $('#jabatan_id').append('<option value="' + data.id_jabat + '">' + data
                            .jb + '</option>');
                        var y = data.jabatan;
                        y.forEach(function(y) {
                            if (y.id != data.id_jabat) {
                                $('#jabatan_id').append('<option value="' + y.id +
                                    '">' + y.jabatan + '</option>');
                            }
                        });
                        $('#cabang_id').empty();
                        $('#cabang_id').append('<option value="' + data.id_cab + '">' + data
                            .cab + '</option>');
                        var z = data.cabang;
                        z.forEach(function(z) {
                            if (z.id != data.id_cab) {
                                $('#cabang_id').append('<option value="' + z.id + '">' +
                                    z.cabang + '</option>');
                            }
                        });
                        $('#mutasiform').attr('action', '/mutasi/store/' + data.id);
                        $('#detailModal').modal('hide');
                    }
                });
            });
        });
    </script>
@endsection
