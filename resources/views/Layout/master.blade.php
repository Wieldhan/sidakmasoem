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
          <a href="{{url('dashboard')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><span>{{Auth::user()->email}}</span></a>
        </li>
      </ul> 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"><span>{{Auth::user()->level}}</span></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/logout" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light" style="margin-left: 50px;">CONTROL PANEL</span>
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