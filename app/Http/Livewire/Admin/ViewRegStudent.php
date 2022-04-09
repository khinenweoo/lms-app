<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\User;

class ViewRegStudent extends Component
{
    use WithFileUploads;
    public $user_id;
    public $name, $email, $password, $confirm_password, $dob, $gender, $avatar_photo, $phone;
    public $newphoto;
    public $address, $about, $status;

    public function render()
    {
        return view('livewire.admin.view-reg-student')->layout('layouts.livewirebase');
    }

    function mount($user_id)
    {
        $this->user_id = $user_id;
        $user = User::find($this->user_id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->dob = $user->dob;
        $this->gender = $user->gender;
        $this->avatar_photo= $user->avatar_photo;
        $this->phone= $user->phone;
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
        $validateData = $this->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:8'],
            'confirm_password' => ['nullable', 'string', 'min:8', 'same:password'],
            'dob' => ['nullable', 'date'],
            'gender' => ['nullable', 'in:male,female'],
            'newphoto' => ['nullable', 'image', 'mimes:jpg,jpeg,png','max:3000'],
            'phone' => ['nullable','numeric', 'min:9'],
            'address' => ['nullable', 'string', 'max:255'],
            'about' => ['nullable', 'string', 'max:255'],
            'status' => ['in:0,1']
        ]);

        if($this->user_id) {
            $user = User::find($this->user_id);

            $this->setDateFormat($this->dob);

            if(isset($this->newphoto)) {
                $image_filename = $this->photoUpload($this->newphoto);
            }else {
                $image_filename = $this->avatar_photo;
            }


            $user->update([
                'userId'=> $this->user_id,
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'dob' => $this->dob,
                'gender' => $this->gender,
                'avatar_photo' => $image_filename,
                'phone' => $this->phone,
                'address' => $this->address,
                'about' => $this->about,
            ]);

            if($user){
            session()->flash('message', 'User Updated.');
            $this->resetInput();
            return redirect()->route('admin.students');
            }
        }
    }
    
    public function setDateFormat($value)
    {
        $this->dob = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function photoUpload($avatar_photo)
    {
        $file_name = 'STUDENTS_'.$avatar_photo->getClientOriginalName();
        $avatar_photo->storeAs('students', $file_name, 'public');
        return $file_name;
    }

    public function resetInput()
    {
        $this->reset('name', 'email', 'password', 'dob', 'gender', 'avatar_photo', 'phone', 'address', 'about');
    }
}
