<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
	protected $table    = 'izin';
	protected $fillable = [
		'id',
		'karyawan_id',
		'tanggal_izin',
		'keterangan',
		'perihal',
		'status'
	];
	protected $dates    = ['tanggal_izin','created_at'];
	
	public function karyawan()
	{
		return $this->belongsTo(Karyawan::class);
	}

	public function jabatan()
	{
		return $this->belongsTo(Jabatan::class);
	}

	public function golongan()
	{
		return $this->belongsTo(Golongan::class);
	}

	public function cabang()
	{
		return $this->belongsTo(Cabang::class);
	}
}
