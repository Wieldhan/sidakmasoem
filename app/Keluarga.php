<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
	protected $table    = 'keluarga';
	protected $fillable = [
		'id',
		'user_id',
		'nama_keluarga',
		'status'
	];

	public function karyawan()
	{
		return $this->hasMany(Karyawan::class);
	}
}
