<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class RegisterStudent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';
    public $name, $email, $phone;
    protected $users;

    public function render()
    {
        $this->users = $this->searchStudents();

        return view('livewire.admin.register-student', [
            'users' => $this->users,
        ])->layout('layouts.livewirebase');
    }
    public function searchStudents()
    {
        $users =  User::search($this->search)
        ->paginate($this->perPage);

        return $users;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $student = User::findOrFail($id);
        $this->name = $student->name;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInput();
    }
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        if ($this->deleteId) {
            User::find($this->deleteId)->delete();
            session()->flash('message', 'Student deleted.');
        }
    }
    public function resetInput()
    {
        $this->reset('name', 'email', 'phone');
    }
}
