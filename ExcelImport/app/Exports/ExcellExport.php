<?php

namespace App\Exports;

use App\Excell;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcellExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Excell::all();
    }
}
