@extends ('layout.master')
@section('content')
    <div class="container-fluid" style="padding-top: 10px;">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if (Auth::user()->avatar == '')
                                <img style="width:150px; height: 150px;" class="img-thumbnail rounded-circle elevation-1"
                                    src="{{ asset('images/avatars/avatardefault.png') }}" alt="profile picture">
                            @else
                                <img style="width:150px; height: 150px;" class="img-thumbnail rounded-circle elevation-1"
                                    src="{{ asset('images/avatars/' . Auth::user()->avatar) }}" alt="profile picture">
                            @endif
                        </div>
                        <h3 class="profile-username text-center" style="font-size: 20px;">
                            {{ Auth::user()->karyawan->nama_lengkap }}
                        </h3>
                        <p class="text-muted text-center">{{ Auth::user()->karyawan->jabatan->jabatan }}</p>
                        <ul class="list-group list-group-unbordered mb-3" style="font-size: 10pt;">
                            <li class="list-group-item">
                                <a class="font-weight-bold">Jenis Kelamin</a>
                                <span class="float-right">{{ Auth::user()->karyawan->jk }}</span>
                            </li>
                            <li class="list-group-item">
                                <a class="font-weight-bold">Agama</a>
                                <span class="float-right">{{ Auth::user()->karyawan->agama }}</span>
                            </li>
                            <li class="list-group-item">
                                <a class="font-weight-bold">Alamat</a>
                                <span class="float-right"
                                    style="text-align: justify;">{{ Auth::user()->karyawan->alamat }}</span>
                            </li>
                            <li class="list-group-item">
                                <a class="font-weight-bold">No Telepon</a>
                                <span class="float-right">{{ Auth::user()->karyawan->no_telepon }}</span>
                            </li>
                            <li class="list-group-item">
                                <a class="font-weight-bold">Email</a>
                                <span class="float-right">{{ Auth::user()->karyawan->user->email }}</span>
                            </li>
                            <li class="list-group-item">
                                <a class="font-weight-bold">Visi</a>
                                <span class="float-right">{{ Auth::user()->karyawan->visi }}</span>
                            </li>
                            <li class="list-group-item">
                                <a class="font-weight-bold">Misi</a>
                                <span class="float-right">{{ Auth::user()->karyawan->misi }}</span>
                            </li>
                        </ul>
                        <button class="btn btn-sm btn-primary btn-block float-right" data-toggle="modal"
                            data-target=".modal-edit-profil" title="Tambah Data Organisasi"><i
                                class="fas fa-pencil mr-1"></i><b>Ubah
                                Profil</b></button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="form-row">
                            <div class="col-sm-4 text-center">
                                <h4>Curiculum Vitae</h4>
                            </div>
                            <div class="col-sm-8">
                                <ul class="nav nav-pills nav-fill">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profil" data-bs-toggle="tab">Riwayat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#datakeluarga" data-bs-toggle="tab">Data
                                            Keluarga</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profil">
                                <div class="row">
                                    <div class="col-10">
                                        <strong><i class="fas fa-graduation-cap"></i> Pendidikan</strong>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-sm btn-link float-right" data-bs-toggle="modal"
                                            data-bs-target=".modal-pendidikan" data-bs-placement="right"
                                            title="Tambah Data Pendidikan"><i class="fas fa-plus mr-1"></i></button>
                                    </div>
                                </div>
                                <table class="table text-muted table-sm">
                                    <thead class="bg-secondary">
                                        <tr style="text-align: center;">
                                            <th hidden="true">ID</th>
                                            <th>Nama Instansi</th>
                                            <th>Jurusan</th>
                                            <th>Jenjang</th>
                                            <th>Tahun Lulus</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pendidikan as $pend)
                                            <tr>
                                                <td hidden="true">{{ $pend->id }}</td>
                                                <td>{{ $pend->nama_instansi }}</td>
                                                <td>{{ $pend->jurusan }}</td>
                                                <td style="text-align: center;">{{ $pend->jenjang }}</td>
                                                <td style="text-align: center;">{{ $pend->tahun_lulus }}</td>
                                                <td style="text-align: center;">
                                                    <button class="btn btn-sm btn-danger hapuspend"
                                                        pend-id="{{ $pend->id }}"><i class="fa fa-trash"
                                                            aria-hidden="true" title="Hapus"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-10">
                                        <strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Organisasi</strong>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-sm btn-link float-right" data-bs-toggle="modal"
                                            data-bs-target=".modal-organisasi" title="Tambah Data Organisasi"><i
                                                class="fas fa-plus mr-1"></i></button>
                                    </div>
                                </div>
                                <table class="table text-muted table-sm">
                                    <thead class="bg-secondary">
                                        <tr style="text-align: center;">
                                            <th hidden="true">ID</th>
                                            <th>Nama Organisasi</th>
                                            <th>Jabatan</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($organisasi as $org)
                                            <tr>
                                                <td hidden="true">{{ $org->id }}</td>
                                                <td>{{ $org->nama_org }}</td>
                                                <td>{{ $org->jabatan_org }}</td>
                                                <td style="text-align: center;">{{ $org->periode_org }}</td>
                                                <td style="text-align: center;">{{ $org->status_org }}</td>
                                                <td style="text-align: center;">
                                                    <button class="btn btn-sm btn-danger hapusorg"
                                                        org-id="{{ $org->id }}"><i class="fa fa-trash"
                                                            aria-hidden="true" title="Hapus"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-10">
                                        <strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Pekerjaan</strong>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-sm btn-link float-right" data-bs-toggle="modal"
                                            data-bs-target=".modal-pengalaman" title="Tambah Data Pekerjaan"><i
                                                class="fas fa-plus mr-1"></i></button>
                                    </div>
                                </div>
                                <table class="table text-muted table-sm">
                                    <thead class="bg-secondary">
                                        <tr style="text-align: center;">
                                            <th>Nama Perusahaan</th>
                                            <th>Jabatan</th>
                                            <th>Tahun Masuk</th>
                                            <th>Tahun Keluar</th>
                                            <th>Alasan Resign</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengalaman as $peng)
                                            <tr>
                                                <td hidden="true">{{ $peng->id }}</td>
                                                <td>{{ $peng->nama_pr }}</td>
                                                <td>{{ $peng->jabatan_pr }}</td>
                                                <td style="text-align: center;">{{ $peng->th_masuk }}</td>
                                                <td style="text-align: center;">{{ $peng->th_keluar }}</td>
                                                <td>{{ $peng->alasan_resign }}</td>
                                                <td style="text-align: center;">
                                                    <button class="btn btn-sm btn-danger hapuspeng"
                                                        peng-id="{{ $peng->id }}"><i class="fa fa-trash"
                                                            aria-hidden="true" title="Hapus"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <strong><i class="far fa-file-alt mr-1"></i> Catatan Pekerjaan Almasoem</strong>
                                </div>
                                <table class="table text-muted table-sm">
                                    <thead class="bg-secondary">
                                        <tr style="text-align: center;">
                                            <th>Jabatan</th>
                                            <th>Golongan</th>
                                            <th>Cabang</th>
                                            <th>Jenis</th>
                                            <th>Tahun Mutasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mutasi as $muta)
                                            <tr>
                                                <td hidden="true">{{ $muta->id }}</td>
                                                <td>{{ $muta->jabatan->jabatan }}</td>
                                                <td style="text-align: center;">{{ $muta->golongan->golongan }}</td>
                                                <td style="text-align: center;">{{ $muta->cabang->cabang }}</td>
                                                <td style="text-align: center;">{{ $muta->status }}</td>
                                                <td style="text-align: center;">{{ $muta->tanggal_mutasi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button class="btn btn-primary float-right" onclick="window.print()">
                                    <i class="fas fa-file-alt mr-1"></i>
                                    <b>Print CV</b></button>
                            </div>
                            <div class="tab-pane" id="datakeluarga">
                                <form action="/profile/simpankel" method="POST">
                                    {{ csrf_field() }}
                                    <label>Nama Keluarga</label>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <input required name="nama_keluarga" type="text"
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <div class="input-group input-group-sm">
                                                <select name="status" class="custom-select" id="inputGroupSelect04">
                                                    <option>--Pilih Salah Satu--</option>
                                                    <option value="Orangtua">Orangtua</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Suami">Suami</option>
                                                    <option value="Anak">Anak</option>
                                                    <option value="Saudara Kandung">Saudara Kandung</option>
                                                    <option value="Kerabat Keluarga">Kerabat Keluarga</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-sm"
                                                        type="submit">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <table class="table text-muted table-sm">
                                    <thead class="bg-secondary">
                                        <tr>
                                            <th hidden="true">ID</th>
                                            <th>Nama Keluarga</th>
                                            <th>Kekerabatan</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($keluarga as $kel)
                                            <tr>
                                                <td hidden="true">{{ $kel->id }}</td>
                                                <td>{{ $kel->nama_keluarga }}</td>
                                                <td>{{ $kel->status }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger hapuskel"
                                                        kel-id="{{ $kel->id }}"><i class="fa fa-trash"
                                                            aria-hidden="true" title="Hapus"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('karyawan.modal')
@endsection
@section('javascript')
    <script>
        $(document).on('click', '.hapusorg', function() {
            var org_id = $(this).attr('org-id');
            Swal.fire({
                toast: true,
                position: 'top-end',
                title: 'ALERT!!',
                text: "Ingin Menghapus Data Organisasi??",
                icon: 'warning',
                timer: '5000',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    window.location = "/profile/orgdestroy/" + org_id + "";
                }
            });
        });

        $(document).on('click', '.hapuspend', function() {
            var pend_id = $(this).attr('pend-id');
            Swal.fire({
                toast: true,
                position: 'top-end',
                title: 'ALERT!!',
                text: "Ingin Menghapus Data Pendidikan??",
                icon: 'warning',
                timer: '5000',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    window.location = "/profile/penddestroy/" + pend_id + "";
                }
            });
        });

        $(document).on('click', '.hapuspeng', function() {
            var peng_id = $(this).attr('peng-id');
            Swal.fire({
                toast: true,
                position: 'top-end',
                title: 'ALERT!!',
                text: "Ingin Menghapus Data Pengalaman Kerja??",
                icon: 'warning',
                timer: '5000',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    window.location = "/profile/pengdestroy/" + peng_id + "";
                }
            });
        });

        $(document).on('click', '.hapuskel', function() {
            var kel_id = $(this).attr('kel-id');
            Swal.fire({
                toast: true,
                position: 'top-end',
                title: 'ALERT!!',
                text: "Ingin Menghapus Data Keluarga??",
                icon: 'warning',
                timer: '5000',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    window.location = "/profile/keldestroy/" + kel_id + "";
                }
            });
        });
    </script>
@endsection
