<?php

namespace App\Exports;

use App\Models\Monster;
use Maatwebsite\Excel\Concerns\FromCollection;

class MonstersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Monster::all();
    }
}
