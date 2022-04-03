<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Admin;

use Livewire\Component;

class UpdateProfile extends Component
{
    use WithFileUploads;
    protected $admin;
    public $admin_id;
    public $update_photo;
    public $name, $email, $password, $dob, $gender, $photo, $phone;
    public $address, $about;


    public function render()
    {
        return view('livewire.admin.update-profile', [
            'admin' => $this->admin
        ])->layout('layouts.livewirebase');
    }


    function mount($admin_id)
    {
        $this->admin_id = $admin_id;
        $admin = Admin::find($this->admin_id);
        $this->admin = $admin;
        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->password = $admin->password;
        $this->dob = $admin->dob;
        $this->gender = $admin->gender;
        $this->photo= $admin->photo;
        $this->phone= $admin->phone;
        $this->address= $admin->address;
        $this->about= $admin->about;
    }
     /**
      *
     * Update the Category resource in storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update()
    {
        if($this->admin_id) {
            $admin = Admin::find($this->admin_id);

            if(isset($this->update_photo)) {
                $image_filename = $this->photoUpload($this->update_photo);
            }else {
                $image_filename = $this->photo;
            }

            $admin->update([
                'adminId'=> $this->admin_id,
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'dob' => $this->dob,
                'gender' => $this->gender,
                'photo' => $image_filename,
                'phone' => $this->phone,
                'address' => $this->address,
                'about' => $this->about
            ]);

            if($admin){
            session()->flash('message', 'Admin Profile Updated.');
            $this->resetInput();
            return redirect()->route('admin.profile');
            }

        }
    }
    public function setDateFormat($value)
    {
        $this->dob = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function photoUpload($photo)
    {
        $file_name = 'ADMIN_'.$photo->getClientOriginalName();
        $photo->storeAs('admins', $file_name, 'public');
        return $file_name;
    }

    public function resetInput()
    {
        $this->reset('name', 'email', 'password', 'dob', 'gender', 'photo', 'phone', 'address', 'about');
    }
}

