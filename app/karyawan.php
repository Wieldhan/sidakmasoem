<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
  protected $table ='karyawan';
  protected $fillable = ['nik','no_ktp','username','password','nama','tempat_lahir','tanggal_lahir','agama','golongan','jabatan','alamat','no_telepon','email'];
}
