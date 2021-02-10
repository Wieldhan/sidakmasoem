<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
	protected $table    = 'karyawan';
	protected $fillable = ['id','user_id','golongan_id','jabatan_id','cabang_id','nik','no_ktp','nama_lengkap','jk','agama','tempat_lahir','tanggal_lahir','status_nikah','alamat','visi','misi','no_telepon'];

	public function golongan()	
	{
		return $this->belongsTo(Golongan::class);
	}
	public function jabatan()
	{
		return $this->belongsTo(Jabatan::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	public function cabang()
	{
		return $this->belongsTo(Cabang::class);
	}
	public function pendidikan()
	{
		return $this->belongsToMany(Pendidikan::class);
	}
	public function organisasi()
	{
		return $this->belongsToMany(Organisasi::class);
	}
	public function pengalaman()
	{
		return $this->belongsToMany(Pengalaman::class);
	}
	public function keluarga()
	{
		return $this->belongsToMany(Keluarga::class);
	}
	public function mutasi()
	{
		return $this->belongsToMany(Mutasi::class);
	}
	public function izin()
	{
		return $this->belongsToMany(Izin::class);
	}
}
