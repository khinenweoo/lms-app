<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class AdminProfile extends Component
{
    protected $admin;

    public function render()
    {
        return view('livewire.admin.admin-profile', [
            'admin' => $this->admin,
        ])->layout('layouts.livewirebase');
    }

    public function mount(){
        $adminId = Auth::guard('admin')->id();
        $this->admin = Admin::where('id', $adminId)->first();
    }

}
