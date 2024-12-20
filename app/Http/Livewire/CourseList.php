<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Course;
use App\Exports\CoursesExport;

class CourseList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';
    protected $courses;
    public $deleteId;

    public $checked = [];

    public function render()
    {
        return view('livewire.course-list', [
            'courses' => Course::with(['category','instructor'])
            ->search(trim($this->search))
            ->orderBy($this->orderBy, $this->orderAsc)
            ->paginate($this->perPage),
        ])->layout('layouts.livewirebase');
    }

    // Check selected id is in checked array and style row with primary color
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

    public function exportSelected()
    {
        return (new CoursesExport($this->checked))->download('courses.xlsx');

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

}
