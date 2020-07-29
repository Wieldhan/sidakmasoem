<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
	protected $table ='karyawan';
	protected $fillable = ['id','user_id','golongan_id','jabatan_id','nik','no_ktp','nama_lengkap','jk','agama','tempat_lahir','tanggal_lahir','status_nikah','alamat'];

	public function golongan()	
	{
		return $this->belongsTo(golongan::class);
	}
	public function jabatan()
	{
		return $this->belongsTo(jabatan::class);
	}
	public function user()
	{
		return $this->belongsTo(user::class);
	}
}