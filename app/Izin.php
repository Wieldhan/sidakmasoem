<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
	protected $table    = 'Izin';
	protected $fillable = [
		'id',
		'karyawan_id',
		'tanggal_izin',
		'keterangan',
		'perihal',
		'status'
	];

	public function karyawan()
	{
		return $this->belongsTo(karyawan::class);
	}

	public function jabatan()
	{
		return $this->belongsTo(jabatan::class);
	}

	public function golongan()
	{
		return $this->belongsTo(golongan::class);
	}

	public function cabang()
	{
		return $this->belongsTo(cabang::class);
	}
}
