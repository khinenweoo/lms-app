<?php

namespace App\Exports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class CoursesExport implements FromQuery
{
    use Exportable;
    protected $courses;

    public function __construct($courses)
    {
        $this->courses = $courses;
    }
    
    public function query()
    {
        return Course::query()->whereKey($this->courses);
    }
}
