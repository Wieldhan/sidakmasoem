<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
	protected $table    = 'Mutasi';
	protected $fillable = [
		'id',
		'karyawan_id',
		'jabatan_id',
		'golongan_id',
		'cabang_id',
		'tanggal_mutasi',
		'keterangan',
		'status'
	];
	
	public function karyawan()
	{
		return $this->belongsTo(Karyawan::class);
	}

	public function golongan()
	{
		return $this->belongsTo(Golongan::class);
	}

	public function cabang()
	{
		return $this->belongsTo(Cabang::class);
	}
	
	public function jabatan()
	{
		return $this->belongsTo(Jabatan::class);
	}
}
