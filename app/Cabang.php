<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
	protected $table    = 'cabang';
	protected $fillable = ['kode_cabang','cabang'];

	public function karyawan()
	{
		return $this->hasMany(Karyawan::class);
	}
	public function mutasi()
	{
		return $this->belongsToMany(Mutasi::class);
	}
}