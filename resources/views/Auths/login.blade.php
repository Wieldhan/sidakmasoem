<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BPRS ALMASOEM | LOGIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/adminLTE/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/adminlte/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Oswald&display=swap" rel="stylesheet">
</head>
<body class="align-content-center login-page" style="font-family:'Oswald',sans-serif; background-image: url('../images/bg-login.jpg'); background-size: auto; background-repeat: no-repeat; background-attachment:fixed;">
  <div class="col-lg-4 mx-auto login-box" style="width: 650px; align-content: center;">
    <div class="login-logo">
      <h1 style=" font-size:35px; color: white;">SISTEM INFORMASI DATA KARYAWAN ( SIDAK )</h1>
    </div>
    <div class="container-fluid card card-primary">
      <div class="card-body">
        <p class="login-box-msg">LOGIN Untuk Masuk Kedalam Sistem</p>
        <form action="/postlogin" method="POST">
          {{csrf_field()}}
          <div class="input-group mb-4">
            <input name="email" type="email" class="form-control" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-4">
            <input name="password" type="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-6" style="font-size: small;">
              <b>Version</b> 1.0.1
              <strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
            </div>
            <div class="col-3">
              <button type="button" class="btn btn-sm btn-info btn-block float-right" data-toggle="modal" data-target=".modal-daftar">DAFTAR</button>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-sm btn-primary btn-block float-right">LOGIN</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <form action="/simpandaftar" method="POST">
            {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label>No Induk Karyawan</label>
                <input required name="nik" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" placeholder="No. Reg atau NIK berdasarkan SK">
              </div>
              <div class="form-group col-sm-6">
                <label>No KTP</label>
                <input required name="no_ktp" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label>Nama Lengkap</label>
                <input required name="nama_lengkap" type="text" class="form-control form-control-sm" placeholder="Nama Sesuai KTP">
              </div>
              <div class="form-group col-sm-6">
                <label for="formcontroljk">Jenis Kelamin</label>
                <select required name="jk" class="form-control form-control-sm" id="formcontroljk">
                  <option>--Pilih Salah Satu--</option>
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="formcontrolagama">Agama</label>
                <select required name="agama" class="form-control form-control-sm" id="formcontrolagama" >
                  <option>--Pilih Salah Satu--</option>
                  <option>Islam</option>
                  <option>Protestan</option>
                  <option>Khatolik</option>
                  <option>Hindu</option>
                  <option>Buddha</option>
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label for="formcontrolpernikahan">Status Pernikahan</label>
                <select required name="status_nikah" class="form-control form-control-sm" id="formcontrolpernikahan">
                  <option>--Pilih Salah Satu--</option>
                  <option>Belum Menikah</option>
                  <option>Menikah</option>
                  <option>Cerai</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label>Tempat Lahir</label>
                <input required name="tempat_lahir" type="text" class="form-control form-control-sm" placeholder="Kota Kelahiran">
              </div>
              <div class="form-group col-sm-6">
                <label>Tanggal Lahir</label>
                <input required name="tanggal_lahir" type="date" class="form-control form-control-sm">
              </div> 
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label>E-Mail</label>
                <input required name="email" type="email" class="form-control form-control-sm" placeholder="contohemail@gmail.com">
              </div>
              <div class="form-group col-sm-6">
                <label>No Telepon</label>
                <input maxlength="15" required name="no_telepon" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm">
              </div>
            </div>
            <div class="form-row"> 
              <div class="form-group col-sm-4">
                <label>Alamat</label>
                <textarea style="height: 75px;" required name="alamat" class="form-control"></textarea>
              </div>
              <div class="form-group col-sm-4">
                <label>Visi</label>
                <textarea style="height: 75px;" required name="visi" class="form-control"></textarea>
              </div>
              <div class="form-group col-sm-4">
                <label>Misi</label>
                <textarea style="height: 75px;" required name="misi" class="form-control"></textarea>
              </div>
            </div>
            <div class="row" style="font-size: small;">
              <div class="col-8 float-right d-none d-sm-block">
                <b>Version</b> 1.0.1
                <strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
              </div>
              <div class="col-2">
                <button type="reset" class="btn btn-sm btn-info btn-block float-right" data-dismiss="card">BATAL</button>
              </div>
              <div class="col-2">
                <button type="submit" class="btn btn-sm btn-primary btn-block float-right">SIMPAN</button>
              </div>
            </div>                                 
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="/adminlte/jquery/jquery.min.js"></script>
  <script src="/adminlte/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/adminlte/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="/adminlte/js/adminlte.min.js"></script>
  <script src="/adminlte/js/demo.js"></script>
  @include('sweetalert::alert')
</body>
</html>