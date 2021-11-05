@extends ('layout.master')
@section('link')
    <link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">
        <div class="card card-info card-outline">
            <div class="card-header" style="height: 50px;">
                <h2 class="card-title">Kontak</h2>
                <div class="card-tools ">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-sm table-hover" id="datatable" style="font-size: 15px;">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Avatar</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    @if ($datas->avatar == '')
                                        <img src="{{ asset('images/avatars/avatardefault.png') }}"
                                            class="img-circle img-fluid" style="width:60px; height: 60px;"
                                            alt="profile picture">
                                    @else
                                        <img src="{{ asset('images/avatars/' . $datas->avatar) }}"
                                            class="img-circle img-fluid" style="width:60px; height: 60px;"
                                            alt="profile picture">
                                    @endif
                                </td>
                                <td>{{ $datas->nama_lengkap }}</td>
                                <td>{{ $datas->email }}</td>
                                <td>{{ $datas->no_telepon }}</td>
                                <td class="text-center">
                                    <a href="/profile/detail/{{ $datas->user_id }}"
                                        class="btn btn-sm btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
