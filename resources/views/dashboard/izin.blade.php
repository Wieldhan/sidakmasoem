@extends('layout.master')
@section('link')
    <link rel="stylesheet" type="text/css" href="/datatables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/datatables/datatables.min.css">
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3>Aplikasi Izin Karyawan</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding: 15px;">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#izin" data-bs-toggle="tab">Perizinan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline" data-bs-toggle="tab">Timeline</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="izin">
                        <!-- Post -->
                        <div class="post">
                            <form action="/izin/store/{{ Auth::user()->id }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label>No Induk Karyawan</label>
                                        <input readonly="true" name="nik" type="text" class="form-control form-control-sm "
                                            id="nik" value="{{ Auth::user()->karyawan->nik }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Jabatan</label>
                                        <input readonly="true" required name="jabatan_id" type="text"
                                            class="form-control form-control-sm" id="jabatan_id"
                                            value="{{ Auth::user()->karyawan->jabatan->jabatan }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label>Nama Lengkap</label>
                                        <input readonly="true" required name="nama_lengkap" type="text"
                                            class="form-control form-control-sm" id="nama_lengkap"
                                            value="{{ Auth::user()->karyawan->nama_lengkap }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Golongan</label>
                                        <input readonly="true" required name="golongan_id" type="text"
                                            class="form-control form-control-sm " id="golongan_id"
                                            value="{{ Auth::user()->karyawan->golongan->golongan }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label>Tanggal Izin</label>
                                        <input required name="tanggal_izin" id="tanggal_izin" type="date"
                                            class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Perihal</label>
                                        <select required name="perihal" id="perihal" class="form-control form-control-sm">
                                            <option value="false">Pilih Salah Satu</option>
                                            <option value="Tidak Masuk Kerja">Tidak Masuk Kerja</option>
                                            <option value="Meninggalkan Pekerjaan">Meninggalkan Pekerjaan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label>Keterangan</label>
                                        <textarea required name="keterangan" id="keterangan"
                                            class="form-control form-control-sm" style="height: 150px;"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm">
                                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="timeline">
                        <table id="tabletimeline" class="table table-sm table-hover">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>No</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Tanggal Izin</th>
                                    <th>Perihal</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($izin as $izn)
                                    <tr style="text-align: center;">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $izn->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $izn->tanggal_izin->format('d/m/Y') }}</td>
                                        <td>{{ $izn->perihal }}</td>
                                        <td>{{ $izn->keterangan }}</td>
                                        <td>{{ $izn->status }}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Detail</button>
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
    @include('sweetalert::alert')
@endsection
@section('javascript')
    <script type="text/javascript" src="/datatables/datatables.min.js">
    </script>
    <script type="text/javascript" src="/datatables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({});
            $('#tabletimeline').DataTable({});
        });
    </script>
@endsection
