<?php

namespace App\Exports;

use App\Golongan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GolonganExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Golongan::all();
    }

    public function map($golongan): array
    {
        return [
            $golongan->id,
            $golongan->golongan,
            $golongan->gaji_pokok,
            $golongan->uang_makan
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Kode Golongan',
            'Gaji Pokok',
            'Uang Makan'
        ];
    }
}
