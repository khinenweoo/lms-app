<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Support\Str;

class EditCourse extends Component
{
    use WithFileUploads;

    public $name, $slug, $short_description, $course_description, $course_requirements, $course_outcomes, $cover_image;
    public $category_id, $instructor_id;
    public $course_fee, $duration_length, $starteddate, $expiredate, $enrollclosedate;
    public $is_free, $published, $featured, $trending, $popular, $status;

    public $totalSteps = 3;
    public $currentStep = 1;


    public function render()
    {
        return view('livewire.admin.edit-course');
    }

    
}
