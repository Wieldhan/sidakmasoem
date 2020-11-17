<?php

namespace App\Exports;

use App\Karyawan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KaryawanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        return Karyawan::all();
    }

    public function map($karyawan): array
    {
        return [
            $karyawan->id,
            $karyawan->nik,
            $karyawan->no_ktp,
            $karyawan->nama_lengkap,
            $karyawan->jk,
            $karyawan->agama,
            $karyawan->tempat_lahir,
            $karyawan->tanggal_lahir,
            $karyawan->alamat,
            $karyawan->no_telepon,
            $karyawan->user->email
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nik',
            'KTP',
            'Nama Lengkap',
            'Jenis Kelamin',
            'Agama',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat',
            'No Telepon',
            'Email'
        ];
    }
}
