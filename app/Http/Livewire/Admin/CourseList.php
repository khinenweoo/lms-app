<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Course;

class CourseList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';
    protected $courses;

    public function render()
    {
        $this->courses = $this->searchCourses();
        return view('livewire.admin.course-list', [
            'courses' => $this->courses,
        ])->layout('layouts.livewirebase');
    }

    public function searchCourses()
    {
        $courses =  Course::search($this->search)
        ->orderBy($this->orderBy, $this->orderAsc)
        ->paginate($this->perPage);

        return $courses;
    }
}
