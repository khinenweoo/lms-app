<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Lesson;

class LessonList extends Component
{
    use WithPagination;
    use WithFileUploads;
    
    protected $paginationTheme = 'bootstrap';


    public $paginate = 10;


    public function render()
    {
        return view('livewire.admin.lesson', [
            'lessons' => Lesson::with('course')->paginate($this->paginate),
        ])->layout('layouts.livewirebase');
    }
}
