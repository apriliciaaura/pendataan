<?php

namespace App\Exports;

use App\Models\Pendaki;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendakiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pendaki::all();
    }
}
