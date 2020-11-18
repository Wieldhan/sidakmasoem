<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
	protected $table    = 'karyawan';
	protected $fillable = ['id','user_id','golongan_id','jabatan_id','cabang_id','nik','no_ktp','nama_lengkap','jk','agama','tempat_lahir','tanggal_lahir','status_nikah','alamat','visi','misi','no_telepon'];

	public function golongan()	
	{
		return $this->belongsTo(golongan::class);
	}
	public function jabatan()
	{
		return $this->belongsTo(jabatan::class);
	}
	public function user()
	{
		return $this->belongsTo(user::class);
	}
	public function cabang()
	{
		return $this->belongsTo(cabang::class);
	}
	public function pendidikan()
	{
		return $this->belongsToMany(pendidikan::class);
	}
	public function organisasi()
	{
		return $this->belongsToMany(organisasi::class);
	}
	public function pengalaman()
	{
		return $this->belongsToMany(pengalaman::class);
	}
	public function keluarga()
	{
		return $this->belongsToMany(keluarga::class);
	}
	public function mutasi()
	{
		return $this->belongsToMany(mutasi::class);
	}
	public function izin()
	{
		return $this->belongsToMany(izin::class);
	}
}
