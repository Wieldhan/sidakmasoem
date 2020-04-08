<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table ='jabatan';
	protected $fillable = ['jabatan','transport','pulsa','tunj_jab'];

	public function karyawan()
	{
		return $this->hasMany(karyawan::class);
	}
}
