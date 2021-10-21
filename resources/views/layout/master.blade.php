<!DOCTYPE html>
<html>

<head>
   @include('layout.head')
   @yield('link')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper flex-auto">
      <nav class="main-header navbar navbar-expand navbar-light bg-white flex-wrap">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a href="#" class="nav-link" data-widget="pushmenu"><i class="fab fa-lg fa-windows"></i></a>
            </li>
            <li class="nav-item" >
               <a class="nav-link d-flex" href="{{url('profile', Auth::user()->id)}}" aria-expanded="false">
                  @if(Auth::user()->avatar == '')
                  <img class="rounded d-block" style="width: 35px; height: 35px; margin-top:-5px; "
                     src="{{asset('images/avatars/avatardefault.png')}}" alt="profile image">
                  @else
                  <img class="rounded d-block" style="width: 35px; height: 35px; margin-top:-5px;"
                     src="{{asset('images/avatars/'.Auth::user()->avatar)}}" alt="profile image">
                  @endif
                  <span class="profile-text">Hello, {{Auth::user()->nama_lengkap}}</span>
               </a>
            </li>
         </ul>
         <div class="navbar-nav ml-auto">
            <li class="nav-item dropdown flex-wrap" style="margin-top: 4px;">
               <a href="#" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
               <ul class="dropdown-menu dropdown-menu-right">
               <a class="dropdown-item nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" type="button" class="btn btn-sm btn-link " data-bs-toggle="modal"
                     data-bs-target=".modal-photo"><i class="fas fa-cogs"></i> Pengaturan Akun</a>
               </ul>
            </li>
         </div>
      </nav>
      <div class="main-sidebar sidebar-light-primary elevation-4" style="color: white;">
         <div class="sidebar">
            <a href="{{url('dashboard')}}" class="brand-link">
               <img src="{{asset('images\sidak-2.png')}}" class="brand-image" style="width: 35px; height: 35px; margin-left: 5px;">
               <span class="brand-text font-weight-light">Dashboard</span>
             </a>
            @include('layout.sidebar')
         </div>
      </div>
      <div class="content-wrapper">
         @yield('content')
      </div>
      <footer class="main-footer">
         <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.1
         </div>
         <strong><a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
      </footer>
   </div>
   <!-- Modal Photo Profil -->
   <div class="modal fade modal-photo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
      aria-hidden="true">
      <div class="modal modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h4>Pengaturan Akun</h4>
               <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="/profile/account/{{auth::user()->id}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-group">
                     <label>Ubah E-Mail</label>
                     <input name="email" type="email" class="form-control form-control-sm"
                        value="{{Auth::user()->email}}">
                  </div>
                  <div class="form-group">
                     <label>Ubah Password</label>
                     <input name="password" type="password" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                     <label>Ubah Photo Profile</label>
                     <div class="col-sm-6">
                        <img class="img-circle rounded" style="width: 70%; height: 70%;">
                        <input type="file" class="uploads form-control-file form-control-sm" style="margin-top: 20px;"
                           name="avatar">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="col-8 float-right d-none d-sm-block" style="font-size: small;">
                        <b>Version</b> 1.0.1
                        <strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
                     </div>
                     <div class="col-2">
                        <button type="reset" class="btn btn-sm btn-info btn-block float-right"
                           data-bs-dismiss="card">BATAL</button>
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