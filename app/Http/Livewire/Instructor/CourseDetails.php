<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\Chapter;
use App\Models\Course;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class CourseDetails extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $search = '';
    public $checked = [];
    public $course_id;
    public $chapter_id, $chaptername, $chapterstatus, $chapterposition;
    public $chapterDeleteId;

    public function mount($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $this->course_id = $course->id;
    }

    public function render()
    {   $courseId = $this->course_id;
        $course = Course::with('chapters')
        ->whereHas('chapters', function($query) use ($courseId) {
            $query->where('course_id', $courseId);
        })
        ->get();

        return view('livewire.instructor.course-details', [
            'course_chapters' => Chapter::where('course_id',$courseId)
            ->search(trim($this->search))
            ->paginate($this->perPage),
        ])->layout('layouts.livewirebase');
    }

    public function storeChapter()
    {
        $validateData = $this->validate([
            'course_id' => ['required', 'numeric', 'exists:courses,id'],
            'chaptername' => ['required','string'],
        ]);

        $chapter = Chapter::create([
                'course_id' => $this->course_id,
                'name' => $this->chaptername,
                'status' => $this->chapterstatus,
            ] + ['position' => Chapter::where('course_id',$this->course_id)->max('position') + 1]) ;

        if($chapter){
            $this->resetChapterInput();
            session()->flash('message', 'Chapter added successfully.');
            $this->emit('chapterCreateModal');
        }else {
            session()->flash('message', 'Failed action.');
        }

    }

    
    /**
     * Show the modal for editing the chapter resource.
     *
     * @param int $id
     * @return Response
     */
    public function editChapter($id)
    {
        $chapter = Chapter::findOrFail($id);
        $this->chapter_id = $id;
        $this->chaptername = $chapter->name;
        $this->chapterstatus = $chapter->status;
        $this->chapterposition = $chapter->position;
    }

    /**
     * Update the chapter resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateChapter()
    {
        
        if($this->chapter_id){

            $validateData = $this->validate([
                'course_id' => ['required', 'numeric', 'exists:courses,id'],
                'chaptername' => ['required','string'],
                'chapterstatus' => 'required',
            ]);
            
            $data = array(
                'course_id' => $this->course_id,
                'name' => $this->chaptername,
                'status' => $this->chapterstatus,
            );

            $updated = Chapter::updateOrCreate(['id' => $this->chapter_id], $data);
            if($updated){

                session()->flash('message', 'Chapter updated.');
                $this->updateMode = false;
                $this->emit('chapterEditModal');
                $this->resetChapterInput();
            }
        }
    }

    public function chapterConfirmDelete($id)
    {
        $this->chapterDeleteId = $id;
    }
    /**
     * Remove the chapter from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteChapter()
    {
        if ($this->chapterDeleteId) {
            Chapter::find($this->chapterDeleteId)->delete();
            session()->flash('message', 'Chapter deleted.');
        }
    }

    public function resetChapterInput()
    {
        $this->reset('chaptername', 'chapterstatus');
    }
    
}
