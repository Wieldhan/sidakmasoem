<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
	protected $table    ='pengalaman';
	protected $fillable = ['id','user_id','nik','nama_pr','jabatan_pr','th_masuk','th_keluar','alasan_resign'];

	public function karyawan()
	{
		return $this->hasMany(karyawan::class);
	}
}

