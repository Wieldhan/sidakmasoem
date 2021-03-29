<!-- Sidebar Menu -->
<nav class="mt-2">
   <ul class="nav nav-pills nav-sidebar nav-flat flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
         <a href="{{url('contact')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
               Contact
            </p>
         </a>
      </li>
      <li class="nav-item">
         <a href="{{url('skview')}}" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
               Arsip Surat Keputusan
            </p>
         </a>
      </li>
      <li class="nav-item">
         <a href="{{url('pembiayaanview')}}" class="nav-link">
            <i class="nav-icon fas fa-archive"></i>
            <p>
               Arsip Pembiayaan
            </p>
         </a>
      </li>
      @if(Auth::user()->level == 'admin'|| Auth::user()->level == 'sdm')
      <li class="nav-item has-treeview">
         <a href="#" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>
               Personalia
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
            <li class="nav-item">
               <a href="{{url('sk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keputusan</p>
               </a>
            </li>
         </ul>
      </li>
      @endif
      <li class="nav-item has-treeview">
         <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Aplikasi
               <i class="right fas fa-angle-left"></i>
            </p>
         </a>
         <ul class="nav nav-treeview">
            <li class="nav-item">
               <a href="{{url('error')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cuti</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{url('izin', Auth::user()->id)}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Izin</p>
               </a>
            </li>
            @if(Auth::user()->level == 'admin'|| Auth::user()->level == 'sdm')
            <li class="nav-item">
               <a href="{{url('mutasi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mutasi</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{url('error')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teguran</p>
               </a>
            </li>
            @endif
         </ul>
      </li>
      @if(Auth::user()->level == 'admin'|| Auth::user()->level == 'legal'|| Auth::user()->level == 'sdm')
      <li class="nav-item has-treeview">
         <a href="#" class="nav-link">
            <i class="nav-icon fas fa-balance-scale-left"></i>
            <p>
               Legal
               <i class="fas fa-angle-left right"></i>
            </p>
         </a>
         <ul class="nav nav-treeview">
            <li class="nav-item">
               <a href="{{url('pembiayaan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembiayaan</p>
               </a>
            </li>
         </ul>
      </li>
      @endif
</nav>
<!-- /.sidebar-menu -->