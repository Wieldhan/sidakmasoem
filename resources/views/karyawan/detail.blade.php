@extends ('layout.master')
@section ('content')
<div class="container-fluid" style="margin-top: 10px;">
   <div class="row">
      <div class="col-md-3">
         <div class="card card-primary card-outline">
            <div class="card-body box-profile">
               <div class="text-center">
                  @if($karyawan->user->avatar == '')
                  <img src="{{asset('images/avatars/avatardefault.png')}}" class="img-circle img-fluid"
                     style="width:150px; height: 150px;" alt="profile picture">
                  @else
                  <img src="{{asset('images/avatars/'.$karyawan->user->avatar)}}" class="img-circle img-fluid"
                     style="width:150px; height: 150px;" alt="profile picture">
                  @endif
               </div>
               <h3 class="profile-username text-center" style="font-size: 20px;">
                  {{$karyawan->nama_lengkap}}
               </h3>
               <p class="text-muted text-center">{{$karyawan->jabatan->jabatan}}</p>
               <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                     <a>Jenis Kelamin</a>
                     <span class="float-right">{{$karyawan->jk}}</span>
                  </li>
                  <li class="list-group-item">
                     <a>Agama</a>
                     <span class="float-right">{{$karyawan->agama}}</span>
                  </li>
                  <li class="list-group-item">
                     <a>Alamat</a>
                     <span class="float-right" style="text-align: justify;">{{$karyawan->alamat}}</span>
                  </li>
                  <li class="list-group-item">
                     <a>No Telepon</a>
                     <span class="float-right">{{$karyawan->no_telepon}}</span>
                  </li>
                  <li class="list-group-item">
                     <a>Email</a>
                     <span class="float-right">{{$karyawan->user->email}}</span>
                  </li>
                  <li class="list-group-item">
                     <a>Visi</a>
                     <span class="float-right">{{$karyawan->visi}}</span>
                  </li>
                  <li class="list-group-item">
                     <a>Misi</a>
                     <span class="float-right">{{$karyawan->misi}}</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-md-9">
         <div class="card card-primary card-outline">
            <div class="card-header">
               <div class="form-row">
                  <div class="col-sm-4">
                     <h1 style="font-size: 30px">Curiculum Vitae</h1>
                  </div>
                  <div class="col-sm-8">
                     <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                           <a class="nav-link active" href="#profil" data-bs-toggle="tab">Riwayat</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#datakeluarga" data-bs-toggle="tab">Data Keluarga</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="profil">
                     <div class="row">
                        <div class="col-10">
                           <strong><i class="fas fa-graduation-cap"></i> Pendidikan</strong>
                        </div>
                        <div class="col-2">
                        </div>
                     </div>
                     <table class="table text-muted table-sm">
                        <thead class="bg-secondary">
                           <tr style="text-align: center;">
                              <th hidden="true">ID</th>
                              <th>Nama Instansi</th>
                              <th>Jurusan</th>
                              <th>Jenjang</th>
                              <th>Tahun Lulus</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($pendidikan as $pend)
                           <tr>
                              <td hidden="true">{{$pend->id}}</td>
                              <td>{{$pend->nama_instansi}}</td>
                              <td>{{$pend->jurusan}}</td>
                              <td style="text-align: center;">{{$pend->jenjang}}</td>
                              <td style="text-align: center;">{{$pend->tahun_lulus}}</td>
                              @endforeach
                        </tbody>
                     </table>
                     <hr>
                     <div class="row">
                        <div class="col-10">
                           <strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Organisasi</strong>
                        </div>
                        <div class="col-2">
                        </div>
                     </div>
                     <table class="table text-muted table-sm">
                        <thead class="bg-secondary">
                           <tr style="text-align: center;">
                              <th hidden="true">ID</th>
                              <th>Nama Organisasi</th>
                              <th>Jabatan</th>
                              <th>Tahun</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($organisasi as $org)
                           <tr>
                              <td hidden="true">{{$org->id}}</td>
                              <td>{{$org->nama_org}}</td>
                              <td>{{$org->jabatan_org}}</td>
                              <td style="text-align: center;">{{$org->periode_org}}</td>
                              <td style="text-align: center;">{{$org->status_org}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                     <hr>
                     <div class="row">
                        <div class="col-10">
                           <strong><i class="fas fa-pencil-alt mr-1"></i> Pengalaman Pekerjaan</strong>
                        </div>
                        <div class="col-2">
                        </div>
                     </div>
                     <table class="table text-muted table-sm">
                        <thead class="bg-secondary">
                           <tr style="text-align: center;">
                              <th>Nama Perusahaan</th>
                              <th>Jabatan</th>
                              <th>Tahun Masuk</th>
                              <th>Tahun Keluar</th>
                              <th>Alasan Resign</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($pengalaman as $peng)
                           <tr>
                              <td hidden="true">{{$peng->id}}</td>
                              <td>{{$peng->nama_pr}}</td>
                              <td>{{$peng->jabatan_pr}}</td>
                              <td style="text-align: center;">{{$peng->th_masuk}}</td>
                              <td style="text-align: center;">{{$peng->th_keluar}}</td>
                              <td>{{$peng->alasan_resign}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                     <hr>
                     <div>
                        <strong><i class="far fa-file-alt mr-1"></i> Catatan Pekerjaan Di Almasoem</strong>
                     </div>
                     <table class="table text-muted table-sm">
                        <thead class="bg-secondary">
                           <tr style="text-align: center;">
                              <th>Jabatan</th>
                              <th>Golongan</th>
                              <th>Cabang</th>
                              <th>Jenis</th>
                              <th>Tahun Mutasi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($mutasi as $muta)
                           <tr>
                              <td hidden="true">{{$muta->id}}</td>
                              <td>{{$muta->jabatan->jabatan}}</td>
                              <td style="text-align: center;">{{$muta->golongan->golongan}}</td>
                              <td style="text-align: center;">{{$muta->cabang->cabang}}</td>
                              <td style="text-align: center;">{{$muta->status}}</td>
                              <td style="text-align: center;">{{$muta->tanggal_mutasi}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                     {{-- <hr>
                     <button class="btn btn-primary float-right" onclick="window.print()">
                        <b>Print CV</b></button> --}}
                  </div>
                  <div class="tab-pane" id="datakeluarga">
                     <table class="table text-muted table-sm">
                        <thead class="bg-secondary">
                           <tr>
                              <th hidden="true">ID</th>
                              <th>Nama Keluarga</th>
                              <th>Kekerabatan</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($keluarga as $kel)
                           <tr>
                              <td hidden="true">{{$kel->id}}</td>
                              <td>{{$kel->nama_keluarga}}</td>
                              <td>{{$kel->status}}</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('sweetalert::alert')
@endsection