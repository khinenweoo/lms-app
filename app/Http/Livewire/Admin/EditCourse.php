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
    public $is_free, $course_fee, $duration_length, $starteddate, $expiredate, $enrollclosedate;
    public $published, $featured, $trending, $popular, $status;

    public $courseId;
    public $totalSteps = 3;
    public $currentStep = 1;

    public $new_cover;

    public function render()
    {
        // get all categories
        $categories = Category::where('status', '=', 1)->get();
        // Get all instructors
        $instructors = Instructor::where('status', '=', 1)->get();
        return view('livewire.admin.edit-course', [
            'instructors' => $instructors,
            'categories' => $categories,
        ])->layout('layouts.livewirebase');
    }

    function mount($course_slug)
    {
        $course = Course::where('slug', $course_slug)->first();
        $this->courseId = $course->id;
        $this->name = $course->name;
        $this->slug = $course->slug;
        $this->short_description = $course->short_description;
        $this->course_description = $course->course_description;
        $this->course_requirements = $course->course_requirements;
        $this->course_outcomes = $course->course_outcomes;
        $this->cover_image = $course->cover_image;
        $this->category_id = $course->category_id;
        $this->instructor_id = $course->instructor_id;
        $this->is_free = $course->is_free;
        $this->course_fee = $course->course_fee;
        $this->duration_length = $course->duration_length;
        $this->starteddate = $course->started_date;
        $this->expiredate = $course->end_date;
        $this->enrollclosedate = $course->enroll_close_date;
        $this->published = $course->published;
        $this->featured = $course->featured;
        $this->trending = $course->trending;
        $this->popular = $course->popular;
        $this->status= $course->status;
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
                'new_cover' => ['nullable', 'image', 'mimes:jpg,jpeg,png','max:2048'],
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

    public function update() {
        $this->validate([
            'starteddate' => ['required', 'date'],
            'expiredate' => ['required', 'date'],
            'enrollclosedate' => ['required', 'date'],
            'status' => ['in:enabled,disabled'],
        ]);    
  
        if($this->courseId){

            if($this->new_cover != null) {
                $image_filename = $this->photoUpload($this->new_cover);
            }else {
                $image_filename = $this->cover_image;
            }

            $data = array(
                'name' => $this->name,
                'slug' => $this->slug,
                'short_description' => $this->short_description,
                'course_description' => $this->course_description,
                'course_requirements' => $this->course_requirements,
                'course_outcomes' => $this->course_outcomes,
                'cover_image' => $image_filename,
                'category_id' => $this->category_id,
                'instructor_id' => $this->instructor_id,
                'is_free' => $this->is_free,
                'course_fee' => $this->course_fee,
                'duration_length' => $this->duration_length,
                'started_date' => $this->starteddate,
                'end_date' => $this->expiredate,
                'enroll_close_date' => $this->enrollclosedate,
                'published' => $this->published,
                'featured' => $this->featured,
                'trending' => $this->trending,
                'popular' => $this->popular,
                'status' => $this->status,
            );

            $update_course = Course::updateOrCreate(['id' => $this->courseId], $data);

            if($update_course){
                session()->flash('message', 'Course updated.');
            
                return redirect()->route('admin.courses');
            }
        }
    }

    public function photoUpload($image)
    {
        $str = Str::random(10);
        $ext = strtolower($image->getClientOriginalExtension());
        $file_name = $str.'.'.$ext;
        $image->storeAs('courses', $file_name, 'public');

        return $file_name;
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
    
}
