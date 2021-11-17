@extends ('layout.master')
@section('link')
    <link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section('content')
    <div class="container-fluid" style="padding-top: 15px;">
        <div class="col-sm-auto">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Kelola Data Jabatan</h3>
                    <div class="card-tools ">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-tools" style="margin-bottom: 20px">
                        <a href="jabatan/export" class="btn btn-sm btn-success">
                            <i class="fas fa-file-export"></i> Export To Excel
                        </a>
                        <button class="btn btn-sm btn-danger" disabled>
                            <i class="fas fa-file-export"></i> Export To PDF
                        </button>
                        <button type="button" class="btn btn-sm btn-primary float-right" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-xl">Tambah <i class="fas fa-plus"></i></button>
                    </div>
                    <table id="datatable" class="table table-striped table-sm text-sm" style="width: 100%;">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Jabatan</th>
                                <th>Transport</th>
                                <th>Pulsa</th>
                                <th>Tunjangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_jabatan as $jabat)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jabat->jabatan }}</td>
                                    <td>{{ $jabat->transport }}</td>
                                    <td>{{ $jabat->pulsa }}</td>
                                    <td>{{ $jabat->tunj_jab }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning edit">Ubah</a>
                                        <button class="btn btn-sm btn-danger hapus"
                                            jabat-id="{{ $jabat->id }}">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="editmodal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Ubah Data Jabatan</h3>
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: left;">
                        <form method="POST" id="editform">
                            @csrf
                            <div class="form-group col-sm-auto">
                                <label>Nama Jabatan</label>
                                <input name="jabatan" id="jabatan" type="text" class="form-control" required
                                    maxlength="191">
                            </div>
                            <div class="form-group col-sm-auto">
                                <label>Transport</label>
                                <input name="transport" id="transport" type="text" class="form-control" required
                                    maxlength="15" onkeypress="hanyaangka(event)">
                            </div>
                            <div class="form-group col-sm-auto">
                                <label>Pulsa</label>
                                <input name="pulsa" id="pulsa" type="text" class="form-control" required maxlength="15"
                                    onkeypress="hanyaangka(event)">
                            </div>
                            <div class="form-group col-sm-auto">
                                <label>Tunjangan Jabatan</label>
                                <input name="tunj_jab" id="tunjangan" type="text" class="form-control" required
                                    maxlength="15" onkeypress="hanyaangka(event)">
                            </div>
                            <div class="float-right" style="margin-right: 15px;">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="card">Batal</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Tambah Data Jabatan</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/jabatan/simpan" method="POST">
                            @csrf
                            <div class="form-group col-sm-auto">
                                <label>Nama Jabatan</label>
                                <input name="jabatan" type="text" class="form-control" required maxlength="191">
                            </div>
                            <div class="form-group col-sm-auto">
                                <label>Transport</label>
                                <input name="transport" type="text" class="form-control" required maxlength="15"
                                    onkeypress="hanyaangka(event)">
                            </div>
                            <div class="form-group col-sm-auto">
                                <label>Pulsa</label>
                                <input name="pulsa" type="text" class="form-control" required maxlength="15"
                                    onkeypress="hanyaangka(event)">
                            </div>
                            <div class="form-group col-sm-auto">
                                <label>Tunjangan Jabatan</label>
                                <input name="tunj_jab" type="text" class="form-control" required maxlength="15"
                                    onkeypress="hanyaangka(event)">
                            </div>
                            <div class="float-right" style="margin-right: 15px;">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="card">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript" src="/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/datatables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                scrollX: true,
            });
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#jabatan').val(data[1]);
                $('#transport').val(data[2]);
                $('#pulsa').val(data[3]);
                $('#tunjangan').val(data[4]);
                $('#editform').attr('action', '/jabatan/update/' + data[0]);
                $('#editmodal').modal('show');
            });
        });

        $(document).on('click', '.hapus', function() {
            var jabat_id = $(this).attr('jabat-id');
            Swal.fire({
                toast: true,
                position: 'top-end',
                title: 'ALERT!!',
                text: "Yakin Ingin Menghapus Data Jabatan??",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonColor: '#ff7777',
                cancelButtonText: 'Batal',
                timer: '5000'
            }).then((result) => {
                if (result.value) {
                    window.location = "/jabatan/hapus/" + jabat_id + "";
                }
            });
        });
    </script>
@endsection
