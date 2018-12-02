<?php

namespace App\Imports;

use App\Models\Monster;
use Maatwebsite\Excel\Concerns\ToModel;

class MonstersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Monster([
            //'name' => str_replace(","," ", $row[0]),
            'name' => $row[0],
            'cr' => $row[1],
            'size' => $row[2],
            'type' => $row[3],
            'subtype' => $row[3],
            'hd' => $row[4],
            'al' => $row[5],
            'clime' => $row[6],
            'environment' => $row[7],
            'home_plane' => $row[8],
            'page' => $row[9],
            'book' => $row[10],
            'system_id' => $row[11],
        ]);
    }
}
