@extends ('layout.master')
@section('link')
    <link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section('content')
    <div class="container-fluid" style="padding-top:15px;">
        <div class="col">
            <div class="card card-info card-outline">
                <div class="card-header" style="height: 50px;">
                    <h2 class="card-title">Arsip Pembiayaan BPRS ALMASOEM</h2>
                    <div class="card-tools ">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-hover" id="datatable" style="font-size: 15px;">
                        <thead>
                            <tr>
                                <th align="center">No</th>
                                <th align="center">No Arsip</th>
                                <th>No Akad</th>
                                <th>CIF</th>
                                <th>No KTP</th>
                                <th>Nama Nasabah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataBiaya as $data)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td align="center">{{ $data->lemari . '/' . $data->laci . '/' . $data->no_berkas }}
                                    </td>
                                    <td>{{ $data->no_akad }}</td>
                                    <td>{{ $data->cif }}</td>
                                    <td>{{ $data->no_ktp }}</td>
                                    <td>{{ $data->nama_nasabah }}</td>
                                    <td>
                                        @if ($data->status == 'Arsip')
                                            <label class="badge badge-success" style="font-size: 15px">Arsip</label>
                                        @elseif($data->status == 'Dipinjam')
                                            <label class="badge badge-warning" style="font-size: 15px">Dipinjam</label>
                                        @else
                                            <label class="badge badge-danger" style="font-size: 15px">WO</label>
                                        @endif
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
@section('javascript')
    <script type="text/javascript" src="/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="/datatables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({});

            $(document).on('click', '.hapus', function() {
                var pembiayaan_id = $(this).attr('pembiayaan-id');
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    title: 'ALERT!!',
                    text: "Yakin Ingin Menghapus Data Karyawan??",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Hapus',
                    cancelButtonColor: '#ff3c4f',
                    CancelButtonText: 'Batal',
                    timer: '5000'
                }).then((result) => {
                    if (result.value) {
                        window.location = "/pembiayaan/hapus/" + pembiayaan_id + "";
                    }
                });
            });
        });
    </script>
@endsection
