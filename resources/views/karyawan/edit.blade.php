<!DOCTYPE html>
<html>
<head>
  @include('layout.head')
</head>
<body style="font-family:'Oswald',sans-serif; background-color:#0A64F9">
  <div class="container-fluid" >
    <div class="card card-outline card-warning" style="margin-top: 50px; margin-bottom:50px; margin-left: 50px; margin-right: 50px;">
      <div class="card-header">
        <h2 class="card-subtitle align-middle">UBAH DATA DIRI</h2>
      </div>
      <div class="card-body">
        <form action="/karyawan/update/{{$karyawan->id}}" method="POST">
          {{csrf_field()}}
          <div class="form-row">
            <div class="form-group col-sm-3">
              <label>No Induk Karyawan</label> 
              <input maxlength="10" required name="nik" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" value="{{$karyawan->nik}}">
            </div>
            <div class="form-group col-sm-3">
              <label>No KTP</label>
              <input maxlength="20" required name="no_ktp" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" value="{{$karyawan->no_ktp}}">
            </div>
            <div class="form-group col-sm-3">
              <label>Nama Lengkap</label>
              <input maxlength="25" required name="nama_lengkap" type="text" class="form-control form-control-sm" value="{{$karyawan->nama_lengkap}}">
            </div>
            <div class="form-group col-sm-3">
              <label>Nama Panggilan</label>
              <input maxlength="15" required name="nama_panggilan" type="text" class="form-control form-control-sm" value="{{$karyawan->nama_panggilan}}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-3">
              <label for="formcontroljk">Jenis Kelamin</label>
              <select required name="jk" class="form-control form-control-sm" id="formcontroljk">
                <option value="Laki Laki" {{$karyawan->jk === "Laki Laki"? "selected" : ""}}>Laki Laki</option>
                <option value="Perempuan" {{$karyawan->jk === "Perempuan"? "selected" : ""}}>Perempuan</option>
              </select>
            </div>
            <div class="form-group col-sm-3">
              <label for="formcontrolagama">Agama</label>
              <select required name="agama" class="form-control form-control-sm" id="formcontrolagama" >
                <option value="Islam" {{$karyawan->agama === "Islam"? "selected" : ""}}>Islam</option>
                <option value="Protestan" {{$karyawan->agama === "Protestan"? "selected" : ""}}>Protestan</option>
                <option value="Khatolik" {{$karyawan->agama === "Khatolik"? "selected" : ""}}>Khatolik</option>
                <option value="Hindu" {{$karyawan->agama === "Hindu"? "selected" : ""}}>Hindu</option>
                <option value="Buddha" {{$karyawan->agama === "Buddha"? "selected" : ""}}>Buddha</option>
              </select>
            </div>
            <div class="form-group col-sm-3">
              <label>Tempat Lahir</label>
              <input maxlength="25" required name="tempat_lahir" type="text" class="form-control form-control-sm" value="{{$karyawan->tempat_lahir}}">
            </div>
            <div class="form-group col-sm-3">
              <label>Tanggal Lahir</label>
              <input required name="tanggal_lahir" type="date" class="form-control form-control-sm" value="{{$karyawan->tanggal_lahir}}">
            </div>  
          </div>
          <div class="form-row">
            <div class="form-group col-sm-4">
              <label>Nama Ibu Kandung</label>
              <input maxlength="25" required name="ibukandung" type="text" class="form-control form-control-sm" value="{{$karyawan->ibukandung}}">
            </div>
            <div class="form-group col-sm-4">
              <label for="formcontrolpernikahan">Status Pernikahan</label>
              <select required name="status_nikah" class="form-control form-control-sm" id="formcontrolpernikahan">
                <option value="Belum Menikah" {{$karyawan->status_nikah === "Belum Menikah"? "selected" : ""}}>Belum Menikah</option>
                <option value="Menikah" {{$karyawan->status_nikah === "Menikah"? "selected" : ""}}>Menikah</option>
                <option value="Cerai" {{$karyawan->status_nikah === "Cerai"? "selected" : ""}}>Cerai</option>
              </select>
            </div>
            <div class="form-group col-sm-4">
              <label>Nama Pasangan</label>
              <input maxlength="25" name="nama_pasangan" type="text" class="form-control form-control-sm" value="{{$karyawan->nama_pasangan}}">
            </div>
          </div>
          <hr>
          <div class="form-row">              
            <div class="form-group col-sm-4">
              <label for="formcontrolgolongan">Golongan</label>
              <select required name="golongan_id" class="form-control form-control-sm" id="formcontrolgolongan">
                @foreach($golongan as $dg)
                <option value="{{$dg->id}}" {{( $dg->id == $karyawan->golongan_id) ? 'selected' : '' }}>{{$dg->golongan}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-4">
              <label for="formcontroljabatan">Jabatan</label>
              <select required name="jabatan_id" class="form-control form-control-sm" id="formcontroljabatan" >
                @foreach($jabatan as $dj)
                <option value="{{$dj->id}}" {{( $dj->id == $karyawan->jabatan_id) ? 'selected' : '' }}>{{$dj->jabatan}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-sm-4">
              <label>Alamat</label>
              <textarea style="height: 75px;" required name="alamat" class="form-control">{{$karyawan->alamat}}</textarea>
            </div>
            <div class="form-group col-sm-4">
              <label>Visi</label>
              <textarea style="height: 75px;" required name="visi" class="form-control">{{$karyawan->visi}}</textarea>
            </div>
            <div class="form-group col-sm-4">
              <label>Misi</label>
              <textarea style="height: 75px;" required name="misi" class="form-control">{{$karyawan->misi}}</textarea>
            </div>
          </div>            
          <div class="form-row">
            <div class="form-group col-sm-4">
              <label>No Telepon</label>
              <input maxlength="15" required name="no_telepon" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" value="{{$karyawan->no_telepon}}">
            </div>
            <div class="form-group col-sm-4">
              <label>E-Mail</label>
              <input required readonly name="email" type="email" class="form-control form-control-sm" value="{{$karyawan->user->email}}">
            </div>
            <div class="form-group col-sm-4">
              <label>No Telepon Keluarga</label>
              <input maxlength="15" required name="no_keluarga" onkeypress="hanyaangka(event)" type="text" class="form-control form-control-sm" value="{{$karyawan->no_keluarga}}">
            </div>
          </div>
          <hr>
          <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT PENDIDIKAN</h3>
          <table class="table">
            <thead class="bg-primary">
              <tr align="center">
                <th>TINGKAT</th>
                <th>NAMA INSTITUSI</th>
                <th>JURUSAN</th>
                <th>TAHUN LULUS</th>
                <th>NILAI AKHIR / IPK</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span>SMA / SMK</span>
                </td>
                <td>
                  <input maxlength="25" name="sma_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->sma_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="sma_jurusan" type="text" class="form-control form-control-sm" value="{{$karyawan->sma_jurusan}}">
                </td>
                <td>
                  <input maxlength="25" name="sma_lulus" type="text" class="form-control form-control-sm" value="{{$karyawan->sma_lulus}}">
                </td>
                <td>
                  <input maxlength="25" name="sma_nilai" type="text" class="form-control form-control-sm" value="{{$karyawan->sma_nilai}}">
                </td>
              </tr>
              <tr>
                <td>
                  <span>PERGURUAN TINGGI</span>
                </td>
                <td>
                  <input maxlength="25" name="s1_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->s1_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="s1_jurusan" type="text" class="form-control form-control-sm" value="{{$karyawan->s1_jurusan}}">
                </td>
                <td>
                  <input maxlength="25" name="s1_lulus" type="text" class="form-control form-control-sm" value="{{$karyawan->s1_lulus}}">
                </td>
                <td>
                  <input maxlength="25" name="s1_nilai" type="text" class="form-control form-control-sm" value="{{$karyawan->s1_nilai}}">
                </td>
              </tr>
              <tr>
                <td>
                  <span>PERGURUAN TINGGI (S2)</span>
                </td>
                <td>
                  <input maxlength="25" name="s2_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->s2_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="s2_jurusan" type="text" class="form-control form-control-sm" value="{{$karyawan->s2_jurusan}}">
                </td>
                <td>
                  <input maxlength="25" name="s2_lulus" type="text" class="form-control form-control-sm" value="{{$karyawan->s2_lulus}}">
                </td>
                <td>
                  <input maxlength="25" name="s2_nilai" type="text" class="form-control form-control-sm" value="{{$karyawan->s2_nilai}}">
                </td>
              </tr>
            </tbody>
          </table>
          <hr>
          <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT ORGANISASI</h3>
          <table class="table">
            <thead class="bg-primary">
              <tr align="center">
                <th>NO</th>
                <th>NAMA ORGANISASI</th>
                <th>JENIS ORGANISASI</th>
                <th>STATUS KEANGGOTAAN</th>
                <th>PERIODE JABATAN</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span>1</span>
                </td>
                <td>
                  <input maxlength="25" name="or_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->or_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="or_jenis" type="text" class="form-control form-control-sm" value="{{$karyawan->or_jenis}}">
                </td>
                <td>
                  <input maxlength="25" name="or_status" type="text" class="form-control form-control-sm" value="{{$karyawan->or_status}}">
                </td>
                <td>
                  <input maxlength="25" name="or_periode" type="text" class="form-control form-control-sm" value="{{$karyawan->or_periode}}">
                </td>
              </tr>
              <tr>
                <td>
                  <span>2</span>
                </td>
                <td>
                  <input maxlength="25" name="or2_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->or2_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="or2_jenis" type="text" class="form-control form-control-sm" value="{{$karyawan->or2_jenis}}">
                </td>
                <td>
                  <input maxlength="25" name="or2_status" type="text" class="form-control form-control-sm" value="{{$karyawan->or2_status}}">
                </td>
                <td>
                  <input maxlength="25" name="or2_periode" type="text" class="form-control form-control-sm" value="{{$karyawan->or2_periode}}">
                </td>
              </tr>
              <tr>
                <td>
                  <span>3</span>
                </td>
                <td>
                  <input maxlength="25" name="or3_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->or3_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="or3_jenis" type="text" class="form-control form-control-sm" value="{{$karyawan->or3_jenis}}">
                </td>
                <td>
                  <input maxlength="25" name="or3_status" type="text" class="form-control form-control-sm" value="{{$karyawan->or3_status}}">
                </td>
                <td>
                  <input maxlength="25" name="or3_periode" type="text" class="form-control form-control-sm" value="{{$karyawan->or3_periode}}">
                </td>
              </tr>
            </tbody>
          </table>
          <hr>
          <h3 class="card-subtitle align-middle" style="margin-bottom: 20px;">RIWAYAT PEKERJAAN</h3>
          <table class="table">
            <thead class="bg-primary">
              <tr align="center">
                <th>NO</th>
                <th>NAMA PERUSAHAAN</th>
                <th>JABATAN TERAKHIR</th>
                <th>TAHUN MASUK</th>
                <th>TAHUN KELUAR</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span>1</span>
                </td>
                <td>
                  <input maxlength="25" name="pr_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->pr_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="pr_jabatan" type="text" class="form-control form-control-sm" value="{{$karyawan->pr_jabatan}}">
                </td>
                <td>
                  <input maxlength="25" name="pr_thmasuk" type="text" class="form-control form-control-sm" value="{{$karyawan->pr_thmasuk}}">
                </td>
                <td>
                  <input maxlength="25" name="pr_thkeluar" type="text" class="form-control form-control-sm" value="{{$karyawan->pr_thkeluar}}">
                </td>
              </tr>
              <tr>
                <td>
                  <span>2</span>
                </td>
                <td>
                  <input maxlength="25" name="pr2_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->pr2_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="pr2_jabatan" type="text" class="form-control form-control-sm" value="{{$karyawan->pr2_jabatan}}">
                </td>
                <td>
                  <input maxlength="25" name="pr2_thmasuk" type="text" class="form-control form-control-sm" value="{{$karyawan->pr2_thmasuk}}">
                </td>
                <td>
                  <input maxlength="25" name="pr2_thkeluar" type="text" class="form-control form-control-sm" value="{{$karyawan->pr2_thkeluar}}">
                </td>
              </tr>
              <tr>
                <td>
                  <span>3</span>
                </td>
                <td>
                  <input maxlength="25" name="pr3_nama" type="text" class="form-control form-control-sm" value="{{$karyawan->pr3_nama}}">
                </td>
                <td>
                  <input maxlength="25" name="pr3_jabatan" type="text" class="form-control form-control-sm" value="{{$karyawan->pr3_jabatan}}">
                </td>
                <td>
                  <input maxlength="25" name="pr3_thmasuk" type="text" class="form-control form-control-sm" value="{{$karyawan->pr3_thmasuk}}">
                </td>
                <td>
                  <input maxlength="25" name="pr3_thkeluar" type="text" class="form-control form-control-sm" value="{{$karyawan->pr3_thkeluar}}">
                </td>
              </tr>
            </tbody>
          </table>
          <hr>
          <div class="row">
            <div class="col-10 float-right d-none d-sm-block">
              <b>Version</b> 1.0.1
              <strong>Copyright &copy; 2019-2020 <a>SISTEM INFORMASI DATA KARYAWAN</a></strong>
            </div>
            <div class="col-2">
              <a href="/karyawan">
                <button type="button" class="btn btn-info">BACK</button>
              </a>
              <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@include('layout.script')
</body>
</html>
