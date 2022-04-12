<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;

class UpdateInstructor extends Component
{
    use WithFileUploads;
    public $instructor_id;
    public $name, $email, $password, $confirm_password, $dateofbirth, $gender, $photo, $phone;
    public $address, $about, $facebook_link, $twitter_link, $linkedin_link, $status;
    public $newphoto, $newpassword;
    public function render()
    {
        return view('livewire.admin.update-instructor')->layout('layouts.livewirebase');
    }

    function mount($instructor_id)
    {

        $instructor = Instructor::where('id', $instructor_id)->first();
        $this->instructor_id = $instructor->id;
        $this->name = $instructor->name;
        $this->email = $instructor->email;
        $this->dateofbirth = $instructor->dateofbirth;
        $this->gender = $instructor->gender;
        $this->photo= $instructor->photo;
        $this->phone= $instructor->phone;
        $this->address= $instructor->address;
        $this->about= $instructor->about;
        $this->facebook_link= $instructor->facebook_link;
        $this->twitter_link= $instructor->twitter_link;
        $this->linkedin_link= $instructor->linkedin_link;
        $this->status= $instructor->status;
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
            'dateofbirth' => ['nullable', 'date'],
            'gender' => ['nullable', 'in:male,female'],
            'newphoto' => ['nullable', 'image', 'mimes:jpg,jpeg,png','max:2048'],
            'phone' => ['nullable','numeric', 'min:9'],
            'address' => ['nullable', 'string', 'max:255'],
            'about' => ['nullable', 'string', 'max:255'],
            'facebook_link' =>  ['nullable', 'string', 'max:100'],
            'linkedin_link' =>  ['nullable', 'string', 'max:100'],
            'status' => ['required','in:0,1']
        ]);

        if($this->instructor_id) {

            $instructor = Instructor::findOrFail($this->instructor_id);

            if($this->newphoto != null) {
                $image_filename = $this->photoUpload($this->newphoto);
            }else {
                $image_filename = $this->photo;
            }

            $instructor->update([
                'name' => $this->name,
                'email' => $this->email,
                'dateofbirth' => $this->dateofbirth,
                'gender' => $this->gender,
                'photo' => $image_filename,
                'phone' => $this->phone,
                'address' => $this->address,
                'about' => $this->about,
                'facebook_link' => $this->facebook_link,
                'linkedin_link' => $this->linkedin_link,
                'status' => $this->status
            ]);

            if($instructor){
                $this->resetInput();
                session()->flash('message', 'Instructor Updated.');

                return redirect()->route('admin.instructors');
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
            $instructor = Instructor::findOrFail($this->instructor_id);

            $newpw = Hash::make($this->newpassword);
            $instructor->update([
                'password' => $newpw,
            ]);

            $this->reset('newpassword');
            session()->flash('message', 'Password Changed.');

            return redirect()->route('admin.instructors');
        }

    }

    // public function setDateFormat($value)
    // {
    //     $this->dateofbirth = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    // }

    public function photoUpload($photo)
    {
        $file_name = 'instructor_'.$photo->getClientOriginalName();
        $photo->storeAs('instructors', $file_name, 'public');
        return $file_name;
    }

    public function resetInput()
    {
        $this->reset('name', 'email', 'password', 'dateofbirth', 'gender', 'photo', 'phone', 'address', 'about', 'facebook_link', 'twitter_link', 'linkedin_link', 'status');
    }
}
