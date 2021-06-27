<?php

namespace App\Imports;

use App\Excell;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcellImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Excell([
            'nama' => $row[1],
            'nim' => $row[2], 
            'uts' => $row[3],
            'uas' => $row[4],
            'remidiasi' => $row[5], 
            'nilaiAkhir' => $row[6],
        ]);
    }
}
