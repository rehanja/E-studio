<?php

namespace App\Exports;

use App\Owner;
use Maatwebsite\Excel\Concerns\FromCollection;

class OwnerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Owner::all();
    }
}
