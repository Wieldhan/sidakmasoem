<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
	protected $table ='Mutasi';
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
		return $this->belongsTo(karyawan::class);
	}

	public function golongan()
	{
		return $this->belongsTo(golongan::class);
	}

	public function cabang()
	{
		return $this->belongsTo(cabang::class);
	}
	
	public function jabatan()
	{
		return $this->belongsTo(jabatan::class);
	}
}
