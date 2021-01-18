<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
	protected $table ='cuti';
	protected $fillable = [
		'id'
		,'karyawan_id'
		,'jabatan_id'
		,'golongan_id'
		,'tgl_awal'
		,'tgl_akhir'
		,'keterangan'
		,'status'
	];

	public function karyawan()
    {
    	return $this->belongsTo(karyawan::class);
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
