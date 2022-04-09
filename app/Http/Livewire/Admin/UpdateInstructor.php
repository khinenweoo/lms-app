<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Instructor;
class UpdateInstructor extends Component
{
    use WithFileUploads;
    public $instructor_id;
    public $newphoto;
    public $name, $email, $password, $confirm_password, $dateofbirth, $gender, $photo, $phone;
    public $address, $about, $facebook_link, $twitter_link, $linkedin_link, $status;

    public function render()
    {
        return view('livewire.admin.update-instructor')->layout('layouts.livewirebase');
    }

    function mount($instructor_id)
    {
        $this->instructor_id = $instructor_id;
        $instructor = Instructor::find($this->instructor_id);
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
        if($this->instructor_id) {
            $instructor = Instructor::find($this->instructor_id);

            if($this->newphoto != null) {
                $image_filename = $this->photoUpload($this->newphoto);
            }else {
                $image_filename = $this->photo;
            }

            $instructor->update([
                'instructorId'=> $this->instructor_id,
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

            if($instructor){
            session()->flash('message', 'Instructor Updated.');
            $this->resetInput();
            return redirect()->route('admin.instructors');
            }

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
