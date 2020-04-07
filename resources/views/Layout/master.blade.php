<!DOCTYPE html>
<html>
<head>
  @include('layout.head') 
  @yield('link')
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="font-family:'Oswald',sans-serif;">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{url('dashboard')}}" class="brand-link">
        <img src="/adminLTE/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">BPRS ALMASOEM</span>
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
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
</body>
  @include('sweetalert::alert')
  @include('layout.script')
  @yield('javascript')
</html>