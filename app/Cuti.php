<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
	protected $table ='Cuti';
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
    	return $this->belongsTo(golongan::class);
    }

    public function cabang()
    {
    	return $this->belongsTo(cabang::class);
    }
}
