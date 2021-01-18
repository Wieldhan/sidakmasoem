<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
	protected $table    = 'golongan';
	protected $fillable = ['id', 'golongan','gaji_pokok','uang_makan'];

	public function karyawan()
	{
		return $this->hasMany(Karyawan::class);
	}
	public function mutasi()
	{
		return $this->belongsToMany(Mutasi::class);
	}
}
