<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembiayaan extends Model
{
    protected $table    = 'pembiayaan';
	protected $fillable = [
        'id',
        'lemari',
        'laci',
        'no_berkas',
        'no_akad',
        'cif',
        'no_ktp',
        'nama_nasabah',
        'nama_ao',
        'tanggal_pencairan',
        'status'];
}
