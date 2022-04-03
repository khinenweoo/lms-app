<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Instructor;

class InstructorList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';
    protected $instructors;


    public function render()
    {
        $this->instructors = $this->filterInstructors();

        return view('livewire.admin.instructor-list', [
            'instructors' => $this->instructors,
        ])->layout('layouts.livewirebase');
    }

    public function filterInstructors()
    {
        $instructors =  Instructor::search($this->search)
        ->orderBy($this->orderBy, $this->orderAsc)
        ->paginate($this->perPage);

        return $instructors;
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        if ($this->deleteId) {
            Instructor::find($this->deleteId)->delete();
            session()->flash('message', 'Instructor deleted.');
        }
    }

}
