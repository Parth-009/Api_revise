<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentsExport implements FromCollection
{
    protected $data;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return ["ID", "Name", "Address", "Mobile", "Gender"];
    }

    public function collection()
    {
        return Student::all();
    }
}
