<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table ='pendidikan';
	protected $fillable = ['nik','nama_instansi','jurusan','jenjang','tahun_masuk','tahun_lulus'];

	public function karyawan()
	{
		return $this->hasMany(karyawan::class);
	}
}
