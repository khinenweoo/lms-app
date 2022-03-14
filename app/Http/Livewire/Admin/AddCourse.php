<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Support\Str;

class AddCourse extends Component
{
    use WithFileUploads;

    public $name, $slug, $course_description, $course_requirements, $course_outcomes, $price;
    public $category_id, $instructor_id;
    public $course_image, $overview_video, $video_type;
    public $started_date, $end_date, $reg_close_date;
    public $published, $free, $featured, $trending, $popular, $meta_keywords, $meta_desc, $status;


    public function render()
    {
        // get all categories
        $categories = Category::where('status', '=', 1)->pluck('name','id');

        $instructors = Instructor::where('status', '=', 1)->pluck('name','id');


        return view('livewire.admin.add-course', [
            'instructors' => $instructors,
            'categories' => $categories,
        ])->layout('layouts.livewirebase');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store() 
    {
        $validateData = $this->validate([
            'name' => ['required', 'string', 'max:100', 'min:5'],
            'slug' => ['required', 'string'],
            'course_description' => ['required', 'string', 'min:5'],
            'category_id' => ['required', 'numeric'],
            'instructor_id' => ['required', 'numeric'],
            'course_requirements' => ['nullable', 'string'],
            'course_outcomes' => ['nullable', 'string'],
            'price' => ['nullable'],
            'started_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
            'reg_close_date' => ['nullable', 'date'],
            'course_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png','max:2048'],
            'overview_video' => ['nullable','max:2048'],
            'meta_keywords' => ['nullable', 'string'],
            'meta_desc' => ['nullable', 'string'],
        ]);


    }

}
