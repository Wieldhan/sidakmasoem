<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
  protected $table    = 'organisasi';
	protected $fillable = ['id','user_id','nik','nama_org','jabatan_org','periode_org','status_org'];

	public function karyawan()
	{
		return $this->hasMany(Karyawan::class);
	}
}