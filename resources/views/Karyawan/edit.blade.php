<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BPRS ALMASOEM | SIDAK MASOEM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/adminLTE/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/adminlte/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Oswald&display=swap" rel="stylesheet">
</head>
<body style="font-family:'Oswald',sans-serif; background-color:#0A64F9">
  <div class="container-fluid" >
    <div class="card card-outline card-warning" style="margin-top: 50px; margin-bottom:50px; margin-left: 50px; margin-right: 50px;">
      <div class="card-header">
        <h2 class="card-subtitle align-middle">UBAH DATA DIRI</h2>
      </div>
      <div class="card-body">
            <form action="#" method="POST">
        {{csrf_field()}}
        <div class="form-row">
          <div class="form-group col-sm-3">
            <label>No Induk Karyawan</label>
            <input name="nik" type="text" class="form-control form-control-sm" placeholder="No. Reg atau NIK berdasarkan SK">
          </div>
          <div class="form-group col-sm-3">
            <label>No KTP</label>
            <input name="no_ktp" type="text" class="form-control form-control-sm" placeholder="Ex. 32100xxxx">
          </div>
          <div class="form-group col-sm-3">
            <label>Nama Lengkap</label>
            <input name="nama_lengkap" type="text" class="form-control form-control-sm" placeholder="Nama Sesuai KTP">
          </div>
          <div class="form-group col-sm-3">
            <label>Nama Panggilan</label>
            <input name="nama_panggilan" type="text" class="form-control form-control-sm" placeholder="Contoh: Dobleh">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-3">
            <label for="formcontroljk">Jenis Kelamin</label>
            <select name="jk" class="form-control form-control-sm" id="formcontroljk">
              <option>Laki Laki</option>
              <option>Perempuan</option>
            </select>
          </div>
          <div class="form-group col-sm-3">
            <label for="formcontrolagama">Agama</label>
            <select name="agama" class="form-control form-control-sm" id="formcontrolagama" >
              <option >Islam</option>
              <option >Protestan</option>
              <option >Khatolik</option>
              <option >Hindu</option>
              <option >Buddha</option>
            </select>
          </div>
          <div class="form-group col-sm-3">
            <label>Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control form-control-sm" placeholder="Kota Kelahiran">
          </div>
          <div class="form-group col-sm-3">
            <label>Tanggal Lahir</label>
            <input name="tanggal_lahir" type="date" class="form-control form-control-sm">
          </div>  
        </div>
        <div class="form-row">
          <div class="form-group col-sm-4">
            <label>Nama Ibu Kandung</label>
            <input name="ibukandung" type="text" class="form-control form-control-sm" placeholder="sesuai dengan KK">
          </div>
          <div class="form-group col-sm-4">
            <label for="formcontrolpernikahan">Status Pernikahan</label>
            <select name="status_nikah" class="form-control form-control-sm" id="formcontrolpernikahan">
              <option>Belum Menikah</option>
              <option>Menikah</option>
              <option>Cerai</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label>Nama Pasangan</label>
            <input name="nama_pasangan" type="text" class="form-control form-control-sm" placeholder="Nama Suami / Istri">
          </div>
        </div>
        <hr>
        <div class="form-row">              
          <div class="form-group col-sm-4">
            <label for="formcontrolgolongan">Golongan</label>
            <select name="golongan_id" class="form-control form-control-sm" id="formcontrolgolongan" >
              @foreach($data_golongan as $dg)
              <option value="{{$dg->id}}">{{$dg->golongan}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="formcontroljabatan">Jabatan</label>
            <select name="jabatan_id" class="form-control form-control-sm" id="formcontroljabatan" >
              @foreach($data_jabatan as $dj)
              <option value="{{$dj->id}}">{{$dj->jabatan}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-4">
            <label>Alamat</label>
            <textarea style="height: 75px;" name="alamat" class="form-control" placeholder="Alamat tinggal saat ini"></textarea>
          </div>
          <div class="form-group col-sm-4">
            <label>Visi</label>
            <textarea style="height: 75px;" name="visi" class="form-control" placeholder="Visi Bekerja di BPRS MASOEM"></textarea>
          </div>
          <div class="form-group col-sm-4">
            <label>Misi</label>
            <textarea style="height: 75px;" name="misi" class="form-control" placeholder="Misi Bekerja di BPRS MASOEM"></textarea>
          </div>
        </div>            
        <div class="form-row">
          <div class="form-group col-sm-4">
            <label>No Telepon</label>
            <input name="no_telepon" type="text" class="form-control form-control-sm" placeholder="081xxxxxx">
          </div>
          <div class="form-group col-sm-4">
            <label>E-Mail</label>
            <input name="email" type="email" class="form-control form-control-sm" placeholder="contohemail@gmail.com">
          </div>
          <div class="form-group col-sm-4">
            <label>No Telepon Keluarga</label>
            <input name="no_keluarga" type="text" class="form-control form-control-sm" placeholder="081xxxxxx">
          </div>
        </div>
        <hr>
        <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT PENDIDIKAN</h3>
        <table class="table">
          <thead class="bg-primary">
            <tr align="center">
              <th>TINGKAT</th>
              <th>NAMA INSTITUSI</th>
              <th>JURUSAN</th>
              <th>TAHUN LULUS</th>
              <th>NILAI AKHIR / IPK</th>
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
                <span>PERGURUAN TINGGI</span>
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
                <span>PERGURUAN TINGGI (S2)</span>
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
        <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT ORGANISASI</h3>
        <table class="table">
          <thead class="bg-primary">
            <tr align="center">
              <th>NO</th>
              <th>NAMA ORGANISASI</th>
              <th>JENIS ORGANISASI</th>
              <th>STATUS KEANGGOTAAN</th>
              <th>PERIODE JABATAN</th>
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
        <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT PEKERJAAN</h3>
        <table class="table">
          <thead class="bg-primary">
            <tr align="center">
              <th>NO</th>
              <th>NAMA PERUSAHAAN</th>
              <th>JABATAN TERAKHIR</th>
              <th>TAHUN MASUK</th>
              <th>TAHUN KELUAR</th>
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
          <div class="col-10 float-right d-none d-sm-block">
            <b>Version</b> 1.0.1
            <strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
          </div>
          <div class="col-2">
            <button type="reset" class="btn btn-info" data-dismiss="card">BATAL</button>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="/adminlte/jquery/jquery.min.js"></script>
<script src="/adminlte/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/adminlte/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/adminlte/js/adminlte.min.js"></script>
<script src="/adminlte/js/demo.js"></script>
</body>
</html>
