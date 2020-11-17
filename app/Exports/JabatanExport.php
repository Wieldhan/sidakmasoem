<?php

namespace App\Exports;

use App\Jabatan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JabatanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jabatan::all();
    }

    public function map($jabatan): array
    {
        return [
            $jabatan->id,
            $jabatan->jabatan,
            $jabatan->transport,
            $jabatan->pulsa,
            $jabatan->tunj_jab,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Jabatan',
            'Transport',
            'Pulsa',
            'Tunjangan Jabatan'
        ];
    }
}
