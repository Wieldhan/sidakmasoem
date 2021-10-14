<!DOCTYPE html>
<html>
   @include('layout.head')
<body class="align-content-center login-page"
   style="background-image: url('../images/bg-login.jpg'); background-size: 1360px; background-repeat: no-repeat; background-attachment:fixed;">
   <div class="col-lg-4 mx-auto login-box" style="width: 650px; align-content: center;">
      <div class="login-logo">
         <img class="img-fluid" style="width:350px; height: auto;" src="{{asset('images/sidak-login-logo.png')}}">
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
                  </div>
                  <div class="col-3">
                     <button type="button" class="btn btn-sm font-weight-bold btn-block float-right"
                        style="color:white; background: #5688FB;" data-bs-toggle="modal"
                        data-bs-target=".modal-daftar">Daftar</button>
                  </div>
                  <div class="col-3">
                     <button type="submit" class="btn btn-sm btn-primary btn-block float-right font-weight-bold">Login</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Modal Daftar -->
   <div class="modal fade modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <form action="/simpandaftar" method="POST">
                  {{csrf_field()}}
                  <div class="form-row">
                     <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }} col-sm-6">
                        <label>No Registrasi Karyawan</label>
                        <input required name="nik" onkeypress="hanyaangka(event)" type="text" maxlength="6"
                           class="form-control form-control-sm" placeholder="No. Reg atau NIK berdasarkan SK">
                        @if ($errors->has('nik'))
                        <span class="help-block">
                           {{ $errors->first('nik') }}
                        </span>
                        @endif
                     </div>
                     <div class="form-group {{ $errors->has('no_ktp') ? ' has-error' : '' }} col-sm-6">
                        <label>No KTP</label>
                        <input required name="no_ktp" onkeypress="hanyaangka(event)" type="text" maxlength="20"
                           class="form-control form-control-sm">
                        @if ($errors->has('no_ktp'))
                        <span class="help-block">
                           {{ $errors->first('no_ktp') }}
                        </span>
                        @endif
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group {{ $errors->has('nama_lengkap') ? ' has-error' : '' }} col-sm-6">
                        <label>Nama Lengkap</label>
                        <input required name="nama_lengkap" type="text" class="form-control form-control-sm"
                           placeholder="Nama Sesuai KTP">
                        @if ($errors->has('nama_lengkap'))
                        <span class="help-block">
                           {{ $errors->first('nama_lengkap') }}
                        </span>
                        @endif
                     </div>
                     <div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }} col-sm-6">
                        <label>Jenis Kelamin</label>
                        <select required name="jk" class="form-control form-control-sm" id="formcontroljk">
                           <option>--Pilih Salah Satu--</option>
                           <option>Laki Laki</option>
                           <option>Perempuan</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }} col-sm-6">
                        <label>Agama</label>
                        <select required name="agama" class="form-control form-control-sm" id="formcontrolagama">
                           <option>--Pilih Salah Satu--</option>
                           <option>Islam</option>
                           <option>Protestan</option>
                           <option>Khatolik</option>
                           <option>Hindu</option>
                           <option>Buddha</option>
                        </select>
                     </div>
                     <div class="form-group {{ $errors->has('status_nikah') ? ' has-error' : '' }} col-sm-6">
                        <label>Status Pernikahan</label>
                        <select required name="status_nikah" class="form-control form-control-sm"
                           id="formcontrolpernikahan">
                           <option>--Pilih Salah Satu--</option>
                           <option>Belum Menikah</option>
                           <option>Menikah</option>
                           <option>Cerai</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }} col-sm-6">
                        <label>Tempat Lahir</label>
                        <input required name="tempat_lahir" type="text" maxlength="50"
                           class="form-control form-control-sm" placeholder="Kota Kelahiran">
                     </div>
                     <div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }} col-sm-6">
                        <label>Tanggal Lahir</label>
                        <input required name="tanggal_lahir" type="date" class="form-control form-control-sm">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} col-sm-6">
                        <label>E-Mail</label>
                        <input required name="email" type="email" class="form-control form-control-sm"
                           placeholder="contohemail@gmail.com">
                        @if ($errors->has('email'))
                        <span class="help-block">
                           {{ $errors->first('email') }}
                        </span>
                        @endif
                     </div>
                     <div class="form-group {{ $errors->has('no_telepon') ? ' has-error' : '' }} col-sm-6">
                        <label>No Telepon</label>
                        <input maxlength="15" required name="no_telepon" onkeypress="hanyaangka(event)" type="text"
                           class="form-control form-control-sm">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }} col-sm-4">
                        <label for="alamat">Alamat</label>
                        <textarea style="height: 75px;" required name="alamat" id="alamat" class="form-control"></textarea>
                     </div>
                     <div class="form-group {{ $errors->has('visi') ? ' has-error' : '' }} col-sm-4">
                        <label>Visi</label>
                        <textarea style="height: 75px;" required name="visi" class="form-control"></textarea>
                     </div>
                     <div class="form-group {{ $errors->has('misi') ? ' has-error' : '' }}col-sm-4">
                        <label>Misi</label>
                        <textarea style="height: 75px;" required name="misi" class="form-control"></textarea>
                     </div>
                  </div>
                  <div class="row" style="font-size: small;">
                     <div class="col-8 float-right d-none d-sm-block">
                     </div>
                     <div class="col-2">
                        <button type="reset" class="btn font-weight-bold btn-sm btn-danger btn-block float-right"
                           data-dismiss="card">BATAL</button>
                     </div>
                     <div class="col-2">
                        <button type="submit" class="btn font-weight-bold btn-sm btn-primary btn-block float-right">SIMPAN</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- End Modal Daftar -->
   <script src="../adminLTE/jquery/jquery.min.js"></script>
   <script src="../adminLTE/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../adminLTE/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <script src="../adminLTE/js/adminlte.min.js"></script>
   <script src="../adminLTE/js/demo.js"></script>
   @include('sweetalert::alert')
</body>

</html>