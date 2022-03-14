<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Instructor;
use Carbon\Carbon;

class AddInstructor extends Component
{
    use WithFileUploads;

    public $name, $email, $password, $confirm_password, $dateofbirth, $gender, $photo, $phone;
    public $address, $about, $facebook_link, $twitter_link, $linkedin_link, $status;

    public function render()
    {
        return view('livewire.admin.add-instructor')->layout('layouts.livewirebase');
    }

    public function saveInstructor()
    {

        $validateData = $this->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:instructors,email'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8', 'same:password'],
            'dateofbirth' => ['nullable', 'date'],
            'gender' => ['nullable', 'in:male,female'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png','max:3000'],
            'phone' => ['nullable','numeric', 'min:9'],
            'address' => ['nullable', 'string', 'max:255'],
            'about' => ['nullable', 'string', 'max:255'],
            'facebook_link' => ['nullable', 'string'],
            'twitter_link' => ['nullable', 'string'],
            'linkedin_link' => ['nullable', 'string'],
        ]);
        // dd($validateData);

        $this->setDateFormat($this->dateofbirth);

        if(isset($this->photo)) {
            $image_filename = $this->photoUpload($this->photo);
        }else {
            $image_filename = 'default.jpg';
        }

        if($this->password == $this->confirm_password) {
            
        }
        $instructorData = Instructor::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'dateofbirth' => $this->dateofbirth,
            'gender' => $this->gender,
            'photo' => $image_filename,
            'phone' => $this->phone,
            'address' => $this->address,
            'about' => $this->about,
            'facebook_link' => $this->facebook_link,
            'twitter_link' => $this->twitter_link,
            'linkedin_link' => $this->linkedin_link,
            'status' => $this->status
        ]);

        if($instructorData){
        session()->flash('message', 'Instructor added.');
        $this->resetInput();
        return redirect()->route('admin.instructors');
        }
    }

    public function setDateFormat($value)
    {
        $this->dateofbirth = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function photoUpload($photo)
    {
        $file_name = 'INSTRUCTOR_'.$photo->getClientOriginalName();
        $photo->storeAs('instructors', $file_name, 'public');

        return $file_name;
    }

    public function resetInput()
    {
        $this->reset('name', 'email', 'password', 'dateofbirth', 'gender', 'photo', 'phone', 'address', 'about', 'facebook_link', 'twitter_link', 'linkedin_link', 'status');
    }


}
