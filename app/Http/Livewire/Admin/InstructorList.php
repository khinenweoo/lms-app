<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Instructor;

class InstructorList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';
    protected $instructors;
    public $checked = [];


    public function render()
    {

        return view('livewire.admin.instructor-list', [
            'instructors' => Instructor::with('courses')
            ->search(trim($this->search))
            ->paginate($this->paginate),
        ])->layout('layouts.livewirebase');
    }


    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        if ($this->deleteId) {
            $instructor = Instructor::findOrFail($this->deleteId);
            $instructor->delete();
            session()->flash('message', 'Instructor deleted.');
        }
    }

    // Check selected id is in checked array and style row with primary color
    public function isChecked($instructor_id) 
    {
        return in_array($instructor_id, $this->checked);
    }

    public function deleteRecords()
    {
        Instructor::whereKey($this->checked)->delete();
        $this->checked = [];
        session()->flash('message', 'Selected records deleted successfully.');

    }

}
