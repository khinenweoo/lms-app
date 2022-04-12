<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditStudent extends Component
{
    use WithFileUploads;
    public $student_id;
    public $name, $email, $password,$newpassword, $confirm_password, $dob, $gender, $photo, $phone;
    public $new_avatar;
    public $address, $about, $status;

    public function render()
    {
        return view('livewire.admin.edit-student')->layout('layouts.livewirebase');
    }
    
    function mount($student_id)
    {

        $student = User::where('id', $student_id)->first();
        $this->student_id = $student->id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->password = $student->password;
        $this->dob = $student->dob;
        $this->gender = $student->gender;
        $this->photo = $student->photo;
        $this->phone= $student->phone;
        $this->address= $student->address;
        $this->about= $student->about;
        $this->status = 1;
    }

    /**
    *
    * Update the Student resource in storage.
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
            'dob' => ['nullable', 'date'],
            'gender' => ['nullable', 'in:male,female'],
            'new_avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png','max:2048'],
            'phone' => ['nullable','numeric', 'min:9'],
            'address' => ['nullable', 'string', 'max:255'],
            'about' => ['nullable', 'string', 'max:255'],
            'status' => ['required','in:0,1']
        ]);

        if($this->student_id) {
            $student = User::findOrFail($this->student_id);

            if($this->new_avatar != null) {
                $image_filename = $this->photoUpload($this->new_avatar);
            }else {
                $image_filename = $this->photo;
            }

            $student->update([
                'name' => $this->name,
                'email' => $this->email,
                'dob' => $this->dob,
                'gender' => $this->gender,
                'photo' => $image_filename,
                'phone' => $this->phone,
                'address' => $this->address,
                'about' => $this->about,
                'status' => $this->status,
            ]);

            if($student){

                $this->resetInput();
                session()->flash('message', 'User Updated.');

                return redirect()->route('admin.students');
            }
        }
    }

    public function changePassword()
    {
        $validateData = $this->validate([
            'newpassword' => ['nullable', 'string', 'min:8'],
            'confirm_password' => ['nullable', 'string', 'min:8', 'same:newpassword'],
        ]);

        if($validateData){
            $student = User::findOrFail($this->student_id);
            $newpw = Hash::make($this->newpassword);
            $student->update([
                'password' => $newpw,
            ]);

            $this->reset('newpassword');
            session()->flash('message', 'Password Changed.');

            return redirect()->route('admin.students');
        }

    }

    public function photoUpload($newphoto)
    {
        $file_name = 'std_'.$newphoto->getClientOriginalName();
        $newphoto->storeAs('students', $file_name, 'public');
        return $file_name;
    }

    public function resetInput()
    {
        $this->reset('name', 'email', 'password', 'dob', 'gender', 'photo', 'phone', 'address', 'about');
    }
}
