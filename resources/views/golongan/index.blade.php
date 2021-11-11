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
                    <h3 class="card-title">Kelola Data Golongan</h3>
                    <div class="card-tools ">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-tools" style="margin-bottom: 20px">
                        <a href="golongan/export" class="btn btn-sm btn-success">
                            <i class="fas fa-file-export"></i> Export To Excel
                        </a>
                        <button class="btn btn-sm btn-danger" disabled>
                            <i class="fas fa-file-export"></i> Export To PDF
                        </button>
                        <button type="button" class="btn btn-sm btn-primary float-right" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-xl">Tambah <i class="fas fa-plus"></i></button>
                    </div>
                    <table id="datatable" class="table table-sm text-sm table-striped">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Kode Golongan</th>
                                <th>Gaji Pokok</th>
                                <th>Uang Makan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_golongan as $gol)
                                <tr align="center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gol->golongan }}</td>
                                    <td>{{ $gol->gaji_pokok }}</td>
                                    <td>{{ $gol->uang_makan }}</td>
                                    <td>
                                        <a class=" edit btn btn-sm btn-warning" data-toggle="modal"
                                            data-target=".gol-edit">Ubah</a>
                                        <button class="btn btn-sm btn-danger hapus"
                                            gol-id="{{ $gol->id }}">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Tambah Data Golongan</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/golongan/simpan" method="POST">
                                        @csrf
                                        <div class="form-group col-sm-auto">
                                            <label>Kode Golongan</label>
                                            <input name="golongan" type="text" class="form-control" required
                                                maxlength="15">
                                        </div>
                                        <div class="form-group col-sm-auto">
                                            <label>Gaji Pokok</label>
                                            <input name="gaji_pokok" type="text" class="form-control" required
                                                maxlength="15" onkeypress="hanyaangka(event)">
                                        </div>
                                        <div class="form-group col-sm-auto">
                                            <label>Uang Makan</label>
                                            <input name="uang_makan" type="text" class="form-control" required
                                                maxlength="15" onkeypress="hanyaangka(event)">
                                        </div>
                                        <div class="float-right" style="margin-right: 15px;">
                                            <button type="reset" class="btn btn-secondary"
                                                data-dismiss="card">BATAL</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="editmodal" class="modal fade gol-edit" tabindex="-1" role="dialog" aria-labelledby="gol-edit"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 style="font-size: 25px;">Ubah Data Golongan</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="text-align: left;">
                                    <form method="POST" id="editform">
                                        @csrf
                                        <div class="form-group col-sm-auto">
                                            <label>Kode Golongan</label>
                                            <input name="golongan" id="golong" type="text" class="form-control" required
                                                maxlength="15">
                                        </div>
                                        <div class="form-group col-sm-auto">
                                            <label>Gaji Pokok</label>
                                            <input name="gaji_pokok" id="gaji" type="text" class="form-control" required
                                                maxlength="15" onkeypress="hanyaangka(event)">
                                        </div>
                                        <div class="form-group col-sm-auto">
                                            <label>Uang Makan</label>
                                            <input name="uang_makan" id="makan" type="text" class="form-control" required
                                                maxlength="15" onkeypress="hanyaangka(event)">
                                        </div>
                                        <div class="float-right" style="margin-right: 15px;">
                                            <button type="reset" class="btn btn-secondary"
                                                data-dismiss="card">BATAL</button>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
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
@endsection

@section('javascript')
    <script type="text/javascript" src="/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/datatables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#datatable').DataTable();
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#golong').val(data[1]);
                $('#gaji').val(data[2]);
                $('#makan').val(data[3]);
                $('#editform').attr('action', '/golongan/update/' + data[0]);
                $('#editmodal').modal('show');
            });
        });

        $(document).on('click', '.hapus', function() {
            var gol_id = $(this).attr('gol-id');
            Swal.fire({
                toast: true,
                position: 'top-end',
                title: 'ALERT!!',
                text: "Yakin Ingin Menghapus Data Golongan??",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                timer: '5000'
            }).then((result) => {
                if (result.value) {
                    window.location = "/golongan/hapus/" + gol_id + "";
                }
            });
        });
    </script>
@endsection
