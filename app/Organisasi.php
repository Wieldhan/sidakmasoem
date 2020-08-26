<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
   protected $table ='organisasi';
	protected $fillable = ['nik','nama_org','jabatan_org','periode_org'];

	public function karyawan()
	{
		return $this->hasMany(karyawan::class);
	}
}
