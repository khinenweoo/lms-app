<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CategoryComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = 'asc';

    protected $categories;

    public $name;
    public $slug;
    public $icon;
    public $description;
    public $status;

    public function render()
    {
        $this->fetchCategories();
        return view('livewire.admin.category-component', [
            'categories' => $this->categories,
        ])->layout('layouts.livewirebase');
    }

    public function fetchCategories()
    {
        $categories =  Category::search($this->search)
        ->orderBy($this->orderBy, $this->orderAsc)
        ->paginate($this->perPage);
        $this->categories = $categories;
    }

    public function store()
    {
        $validateData = $this->validate([
            'name' => ['required', 'unique:categories,name'],
            'icon' => ['nullable', 'image', 'mimes:png','max:3000'],
            'description' => ['string'],
            'status' => ['required'],
        ]);

        if(isset($this->icon)) {
            $icon_file = $this->iconImageUpload($this->icon);
        }else {
            $icon_file = '';
        }

        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'icon' => $icon_file,
            'description' => $this->description,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Category Created Successfully');
        $this->resetInput();
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

    public function resetInput()
    {
        $this->reset('name', 'slug', 'icon', 'description', 'status');
    }
}
