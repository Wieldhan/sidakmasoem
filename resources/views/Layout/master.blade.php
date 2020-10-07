<!DOCTYPE html>
<html>
<head>
  @include('layout.head') 
  @yield('link')
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="font-family:'Oswald',sans-serif;">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="nav-link" data-widget="pushmenu"><i class="fab fa-lg fa-windows"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><i class="fas fa-user"></i> Contact</a>
        </li>
      </ul> 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="{{url('profile', Auth::user()->id)}}" aria-expanded="false">
            @if(Auth::user()->avatar == '')
            <img class="rounded-circle img" style="width: 35px; height: 35px;" src="{{asset('images/avatars/avatardefault.png')}}" alt="profile image">
            @else
            <img class="rounded-circle img"  style="width: 35px; height: 35px;" src="{{asset('images/avatars/'.Auth::user()->avatar)}}" alt="profile image">
            @endif
            <span class="profile-text">Hello, {{Auth::user()->nama_lengkap}}</span>
          </a>
        </li>
        <li class="nav-item dropdown" style="margin-top: 4px;">
          <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">Account</a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" type="button" class="btn btn-sm btn-link " data-toggle="modal" data-target=".modal-photo"><i class="fas fa-cogs"></i> Pengaturan Akun</a>
          </div>
        </li>  
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="color: white;">
      <a href="{{url('dashboard')}}" class="brand-text">
        <span class="brand-text font-weight-light" style="text-align: center; margin-left: 50px; font-size: 24px; color: white;">CONTROL PANEL</span>
      </a>
      <div class="sidebar">
        @include('layout.sidebar')
      </div>
    </aside>
    <div class="content-wrapper">
      @yield('content')
    </div>
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.1
      </div>
      <strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
    </footer>
  </div>
  <!-- Modal Photo Profil -->
  <div class="modal fade modal-photo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Pengaturan Akun</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/profile/account/{{auth::user()->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}  
            <div class="form-group">
              <label>E-Mail</label>
              <input name="email" type="email" class="form-control form-control-sm" value="{{Auth::user()->email}}">
            </div>  
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="password" class="form-control form-control-sm">
            </div>  
            <div class="form-group">
              <label>Photo Profile</label>
              <div class="col-sm-6">
                <img class="img-circle rounded" style="width: 70%; height: 70%;">
                <input type="file" class="uploads form-control-file form-control-sm" style="margin-top: 20px;" name="avatar">
              </div>
            </div>                             
            <div class="form-row">
              <div class="col-8 float-right d-none d-sm-block" style="font-size: small;">
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
  <!-- End of modal photo profil -->
</body>
@include('sweetalert::alert')
@include('layout.script')
@yield('javascript')
</html>