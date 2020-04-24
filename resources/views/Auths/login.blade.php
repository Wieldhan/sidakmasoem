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
          <div class="row">
            <div class="col-6">
              <strong>Copyright &copy; 2019-2020</strong>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-primary btn-block float-right">LOGIN</button>
            </div>
            <div class="col-3">
              <a href="{{url('daftar')}}" class="btn btn-info btn-block float-right">DAFTAR</a>
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