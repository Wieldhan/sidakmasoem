<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar nav-flat flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           @if(Auth::user()->level == 'admin')
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('golongan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Golongan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('jabatan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('karyawan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karyawan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Transaksi
              <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('izin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Format Izin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('cuti')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Format Cuti</p>
                </a>
              </li>
              @if(Auth::user()->level == 'admin')
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Format Teguran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('mutasi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Format Mutasi</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NONE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NONE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NONE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NONE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NONE</p>
                </a>
              </li>
            </ul>
          </li>
        </nav>
        <!-- /.sidebar-menu -->
