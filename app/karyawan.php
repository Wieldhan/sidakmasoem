<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
	protected $table ='karyawan';
	protected $fillable = ['id','nik','user_id','no_ktp','nama_lengkap','nama_panggilan','jk','agama','tempat_lahir','tanggal_lahir','ibukandung','status_nikah','nama_pasangan','golongan_id','jabatan_id','alamat','visi','misi','no_telepon','no_keluarga','sma_nama','sma_jurusan','sma_lulus','sma_nilai','s1_nama','s1_jurusan','s1_lulus','s1_nilai','s2_nama','s2_jurusan','s2_lulus','s2_nilai','or_nama','or_jenis','or_status','or_periode','or2_nama','or2_jenis','or2_status','or2_periode','or3_nama','or3_jenis','or3_status','or3_periode','pr_nama','pr_jabatan','pr_thmasuk','pr_thkeluar','pr2_nama','pr2_jabatan','pr2_thmasuk','pr2_thkeluar','pr3_nama','pr3_jabatan','pr3_thmasuk','pr3_thkeluar'];

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
}