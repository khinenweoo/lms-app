<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CategoryList extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';
    public $checked = [];

    public $category_id;
    public $name;
    public $slug;
    public $icon;
    public $description;
    public $status;
    public $updatedImage = null;
    public $updateMode = false;
    public $deleteId;
    public $iteration;
    
    public function render()
    {
        return view('livewire.admin.category-list', [
            'categories' => Category::search(trim($this->search))
                            ->orderBy($this->orderBy, $this->orderAsc)
                            ->paginate($this->perPage),
        ])->layout('layouts.livewirebase');
    }

    public function mount()
    {
        $this->resetInput();
    }


    public function store()
    {
        $validateData = $this->validate([
            'name' => ['required', 'unique:categories,name'],
            'icon' => ['nullable', 'image', 'mimes:jpg,png','max:3000'],
            'description' => ['string'],
        ]);

        if(isset($this->icon)) {
            $icon_file = $this->iconImageUpload($this->icon);
        }else {
            $icon_file = 'default.png';
        }

        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'icon' => $icon_file,
            'description' => $this->description,
            'status' => $this->status,
        ]);


        $this->resetInput();
        $this->reset('icon');

        session()->flash('message', 'Category Created Successfully');
        $this->emit('categoryCreateModal'); // Close model to using to jquery
    }

    public function iconImageUpload($iconimage)
    {
        $file_str = Str::random(10);
        $ext = strtolower($iconimage->getClientOriginalExtension());
        $iconName = $file_str.'.'.$ext;
        $iconimage->storeAs('categories', $iconName, 'public');

        return $iconName;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $this->updateMode = true;
        $category = Category::where('id', $id)->first();
        $this->category_id = $id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->icon = $category->icon;
        $this->description = $category->description;
        $this->status = $category->status;
    }
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
    /**
     * Update the Category resource in storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update()
    {
        if($this->category_id) {
            $category = Category::findOrFail($this->category_id);

            if($this->updatedImage) {
                $icon_file = $this->iconImageUpload($this->updatedImage);
            }else {
                $icon_file = 'default.png';
            }

            $category->update([
                'name' => $this->name,
                'slug' => Str::slug($this->name),
                'icon' => $icon_file,
                'description' => $this->description,
                'status' => $this->status,
            ]);

            $this->resetInput();
            //cleanup file name after upload 
            $this->reset('updatedImage');

            $this->updateMode = false;
            session()->flash('message', 'Category updated.');

            $this->emit('categoryUpdateModal');
        }
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        if ($this->deleteId) {
            Category::find($this->deleteId)->delete();
            session()->flash('message', 'Category deleted.');
        }
    }

    public function resetInput()
    {
        $this->reset('name', 'slug', 'icon', 'description', 'status');
    }

    // Check selected id is in checked array and style row with primary color
    public function isChecked($category_id) 
    {
        return in_array($category_id, $this->checked);
    }
    
    public function deleteRecords()
    {
        Category::whereKey($this->checked)->delete();
        $this->checked = [];
        session()->flash('message', 'Selected records deleted successfully.');
    
    }
}
