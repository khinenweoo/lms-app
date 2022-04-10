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

    public $name, $slug, $short_description, $course_description, $course_requirements, $course_outcomes, $cover_image;
    public $category_id, $instructor_id;
    public $is_free = 0;
    public $course_fee, $duration_length, $starteddate, $expiredate, $enrollclosedate;
    public $published, $featured, $trending, $popular, $status;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        // get all categories
        $categories = Category::where('status', '=', 1)->get();
        // Get all instructors
        $instructors = Instructor::where('status', '=', 1)->get();

        return view('livewire.admin.add-course', [
            'instructors' => $instructors,
            'categories' => $categories,
        ])->layout('layouts.livewirebase');
    }

    public function validateInfo()
    {
        if($this->currentStep == 1){
            $this->validate([
                'name' => ['required', 'string', 'max:100', 'min:5'],
                'short_description' => ['required', 'string', 'min:5', 'max:300'],
                'course_description' => ['nullable', 'string', 'min:5'],
                'course_requirements' => ['nullable', 'string'],
                'course_outcomes' => ['nullable', 'string'],
                'cover_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png','max:2048'],
            ]);         
        }
    }

    public function validateOptions()
    {
        if($this->currentStep == 2){
            $this->validate([
                'is_free' => ['required', 'max:1'],
                'course_fee' => ['nullable', 'numeric'],
                'category_id' => ['required', 'numeric', 'exists:categories,id'],
                'instructor_id' => ['required', 'numeric', 'exists:instructors,id'],
                'duration_length' => ['nullable', 'string', 'max:20'],
            ]);         
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
    */
    public function store() 
    {

        
        if($this->slug == "" || $this->slug == null) {
            $slug = Str::slug($this->name);
        }elseif ($this->slug != null) {
            $slug = $this->slug;
        }

        if($this->cover_image == null) {
            $cover_image_file = '';
        }else {
            $cover_image_file = $this->photoUpload($this->cover_image);
        }

        $course = new Course();
        $course->name = $this->name;
        $course->slug = $slug;
        $course->short_description = $this->short_description;
        $course->course_description = $this->course_description;
        $course->course_requirements = $this->course_requirements;
        $course->course_outcomes = $this->course_outcomes;
        $course->cover_image = $cover_image_file;
        $course->category_id = $this->category_id;
        $course->instructor_id = $this->instructor_id;
        $course->is_free = $this->is_free;
        $course->course_fee = $this->course_fee;
        $course->duration_length = $this->duration_length;
        $course->started_date = $this->starteddate;
        $course->end_date = $this->expiredate;
        $course->enroll_close_date = $this->enrollclosedate;
        $course->published = $this->published == 1? 1:0;
        $course->featured = $this->featured == 1? 1:0;
        $course->trending = $this->trending == 1? 1:0;
        $course->popular = $this->popular == 1? 1:0;
        $course->status = $this->status;
        $course->save();

        if($course){
            session()->flash('message', 'New course added.');
        
            return redirect()->route('admin.courses');
        }

    }

    public function increaseStep()
    {
        if($this->currentStep == 1) {
            $this->validateInfo();
        }elseif($this->currentStep == 2) {
            $this->validateOptions();
        }
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->currentStep--;
        if($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function photoUpload($image)
    {
        $str = Str::random(10);
        $ext = strtolower($image->getClientOriginalExtension());
        $file_name = $str.'.'.$ext;
        // $file_name = 'C_'.$image->getClientOriginalName();
        $image->storeAs('courses', $file_name, 'public');

        return $file_name;
    }

}
