<!DOCTYPE html>
<html>

<head>
    @include('layout.head')
</head>

<body
    style="background-image: url('../images/bg-login.jpg'); background-size: 100%; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container-fluid">
        <div class="card card-outline card-warning"
            style="margin-top: 50px; margin-bottom:50px; margin-left: 50px; margin-right: 50px;">
            <div class="card-header">
                <h2 class="card-subtitle align-middle">Input Data Diri</h2>
            </div>
            <div class="card-body">
                <form action="/simpandaftar" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label>No Induk Karyawan</label>
                            <input required name="nik" onkeypress="hanyaangka(event)" type="text"
                                class="form-control form-control-sm" placeholder="No. Reg atau NIK berdasarkan SK">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>No KTP</label>
                            <input required name="no_ktp" onkeypress="hanyaangka(event)" type="text"
                                class="form-control form-control-sm" placeholder="Ex. 32100xxxx">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Nama Lengkap</label>
                            <input required name="nama_lengkap" type="text" class="form-control form-control-sm"
                                placeholder="Nama Sesuai KTP">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Nama Panggilan</label>
                            <input required name="nama_panggilan" type="text" class="form-control form-control-sm"
                                placeholder="Contoh: Dobleh">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="formcontroljk">Jenis Kelamin</label>
                            <select required name="jk" class="form-control form-control-sm" id="formcontroljk">
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="formcontrolagama">Agama</label>
                            <select required name="agama" class="form-control form-control-sm" id="formcontrolagama">
                                <option>Islam</option>
                                <option>Protestan</option>
                                <option>Khatolik</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Tempat Lahir</label>
                            <input required name="tempat_lahir" type="text" class="form-control form-control-sm"
                                placeholder="Kota Kelahiran">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Tanggal Lahir</label>
                            <input required name="tanggal_lahir" type="date" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Nama Ibu Kandung</label>
                            <input required name="ibukandung" type="text" class="form-control form-control-sm"
                                placeholder="sesuai dengan KK">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="formcontrolpernikahan">Status Pernikahan</label>
                            <select required name="status_nikah" class="form-control form-control-sm"
                                id="formcontrolpernikahan">
                                <option>Belum Menikah</option>
                                <option>Menikah</option>
                                <option>Cerai</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Nama Pasangan</label>
                            <input required name="nama_pasangan" type="text" class="form-control form-control-sm"
                                placeholder="Nama Suami / Istri">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="formcontrolgolongan">Golongan</label>
                            <select required name="golongan_id" class="form-control form-control-sm"
                                id="formcontrolgolongan">
                                @foreach ($data_golongan as $dg)
                                    <option value="{{ $dg->id }}">{{ $dg->golongan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="formcontroljabatan">Jabatan</label>
                            <select required name="jabatan_id" class="form-control form-control-sm"
                                id="formcontroljabatan">
                                @foreach ($data_jabatan as $dj)
                                    <option value="{{ $dj->id }}">{{ $dj->jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Alamat</label>
                            <textarea style="height: 75px;" required name="alamat" class="form-control"
                                placeholder="Alamat tinggal saat ini"></textarea>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Visi</label>
                            <textarea style="height: 75px;" required name="visi" class="form-control"
                                placeholder="Visi Bekerja di BPRS MASOEM"></textarea>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Misi</label>
                            <textarea style="height: 75px;" required name="misi" class="form-control"
                                placeholder="Misi Bekerja di BPRS MASOEM"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>No Telepon</label>
                            <input required name="no_telepon" onkeypress="hanyaangka(event)" type="text"
                                class="form-control form-control-sm" placeholder="081xxxxxx">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>E-Mail</label>
                            <input required name="email" type="email" class="form-control form-control-sm"
                                placeholder="contohemail@gmail.com">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>No Telepon Keluarga</label>
                            <input required name="no_keluarga" onkeypress="hanyaangka(event)" type="text"
                                class="form-control form-control-sm" placeholder="081xxxxxx">
                        </div>
                    </div>
                    <hr>
                    <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">Riwayat Pendidikan</h3>
                    <table class="table">
                        <thead class="bg-primary">
                            <tr align="center">
                                <th>Tingkat</th>
                                <th>Nama Institusi</th>
                                <th>Jurusan</th>
                                <th>Tahun Lulus</th>
                                <th>Nilai Akhir / IPK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span>SMA / SMK</span>
                                </td>
                                <td>
                                    <input name="sma_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="sam_jurusan" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="sma_lulus" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="sma_nilai" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Perguruan Tinggi</span>
                                </td>
                                <td>
                                    <input name="s1_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="s1_jurusan" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="s1_lulus" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="s1_nilai" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Perguruan Tinggi (S2)</span>
                                </td>
                                <td>
                                    <input name="s2_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="s2_jurusan" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="s2_lulus" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="s2_nilai" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">Riwayat Organisasi</h3>
                    <table class="table">
                        <thead class="bg-primary">
                            <tr align="center">
                                <th>No</th>
                                <th>Nama Organisasi</th>
                                <th>Jenis Organisasi</th>
                                <th>Status Organisasi</th>
                                <th>Periode Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span>1</span>
                                </td>
                                <td>
                                    <input name="or_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or_jenis" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or_status" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or_periode" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2</span>
                                </td>
                                <td>
                                    <input name="or2_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or2_jenis" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or2_status" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or2_periode" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>3</span>
                                </td>
                                <td>
                                    <input name="or3_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or3_jenis" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or3_status" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="or3_periode" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">Riwayat Pekerjaan</h3>
                    <table class="table">
                        <thead class="bg-primary">
                            <tr align="center">
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Jabatan Terakhir</th>
                                <th>Tahun Masuk</th>
                                <th>Tahun Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span>1</span>
                                </td>
                                <td>
                                    <input name="pr_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr_jabatan" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr_thmasuk" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr_thkeluar" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2</span>
                                </td>
                                <td>
                                    <input name="pr2_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr2_jabatan" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr2_thmasuk" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr2_thkeluar" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>3</span>
                                </td>
                                <td>
                                    <input name="pr3_nama" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr3_jabatan" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr3_thmasuk" type="text" class="form-control form-control-sm">
                                </td>
                                <td>
                                    <input name="pr3_thkeluar" type="text" class="form-control form-control-sm">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="row">
                        <div class="col-2">
                            <button type="reset" class="btn btn-info" data-dismiss="card">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layout.script')
    @include('sweetalert::alert')
</body>

</html>
