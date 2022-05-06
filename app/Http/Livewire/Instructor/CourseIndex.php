<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Exports\CoursesExport;

class CourseIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $mycourses;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';
    public $checked = [];

    public function render()
    {
 
        // $instructorId = auth('instructor')->user()->id;
        // $courses = Course::where('instructor_id', $instructorId)->get();
       // $courses = Course::ofTeacher()->get();

        return view('livewire.instructor.course-index', [
            'courses' =>  Course::ofTeacher()->with(['category','instructor'])
            ->search(trim($this->search))
            ->orderBy($this->orderBy, $this->orderAsc)
            ->paginate($this->perPage),
        ])->layout('layouts.livewirebase');
    }

    public function isChecked($course_id) 
    {
        return in_array($course_id, $this->checked);
    }
    
    public function deleteRecords()
    {
        Course::whereKey($this->checked)->delete();
        $this->checked = [];
        session()->flash('message', 'Selected records deleted successfully.');
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        if ($this->deleteId) {
            Course::find($this->deleteId)->delete();
            session()->flash('message', 'Course deleted.');
        }
    }

    public function exportSelected()
    {
        return (new CoursesExport($this->checked))->download('courses.xlsx');

    }
}
