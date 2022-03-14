<div class="overflow-hidden">
    <div class="content-body bg-gradient-green pb-7 pt-5">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="card shadow mt-5 mb-3">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="text-default mb-0">Add New Course</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form wire:submit.prevent="create" enctype="multipart/form-data"> 
                            @csrf
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="form-group">
                                        <label for="name">Title</label>
                                        <input wire:model="name" wire:keyup="generateslug" type="text" placeholder="Title" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label for="instructors">Assign Instructors</label>
                                        <select wire:model="instructor_id" name="instructor_id" class="form-control">
                                            <option value=""  selected>Select Instructor</option>
                                            @foreach($instructors as $instructor)
                                                <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('instructor_id') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="form-group">
                                        <label for="name">Slug</label>
                                        <input wire:model="slug" type="text" placeholder="Enter slug or it will be generated" class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}">
                                        @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select wire:model="category_id" name="category_id" class="form-control">
                                            <option value=""  selected>Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="course_description">Course Description</label>
                                        <textarea wire:model="course_description" class="form-control {{ $errors->has('course_description') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        @error('course_description') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="course_requirements">Course Requirements</label>
                                        <textarea wire:model="course_requirements" class="form-control {{ $errors->has('course_requirements') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        @error('course_requirements') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="course_outcomes">Course Outcomes</label>
                                        <textarea wire:model="course_outcomes" class="form-control {{ $errors->has('course_outcomes') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        @error('course_outcomes') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="custom-toggle mt-4 mb-0">
                                            <input wire:model="free" type="checkbox" name="is_free" value="1">
                                            @error('free') <span class="text-danger error">{{ $message }}</span>@enderror 
                                            <span class="custom-toggle-slider rounded-circle pt-2"></span>
                                        </label>
                                        <label class="pl-3 mb-0">This course is a free course</label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Price (in Ks)</label>
                                        <input  wire:model="price" placeholder="Price" step="any" pattern="[0-9]" name="price" type="number" id="price" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}">
                                        @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                  
                            </div>
                    
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input wire:model="started_date" class="form-control datepicker start-date" name="started_date" id="started_date" placeholder="Select date" type="text">
                                            @error('started_date') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Course Expire Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input wire:model="end_date" class="form-control datepicker end-date" name="end_date" id="end_date" placeholder="Select date" type="text">
                                            @error('end_date') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Course Thumbnail Image(Max image size 1MB)</label>
                                        <input wire:model="course_image" type="file" class="form-control {{ $errors->has('course_image') ? ' is-invalid' : '' }}">
                                        @error('course_image') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
           
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label class="control-label">Overview Video</label>
                                        <select wire:model="video_type" class="form-control">
                                            <option value=""  selected="selected">Select</option>
                                            <option value="youtube">Youtube</option>
                                            <option value="upload">Upload</option>
                                            <option value="embed">Embed</option>
                                        </select>
                                        @error('video_type') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <input wire:model="overview_video" type="file" class="form-control {{ $errors->has('overview_video') ? ' is-invalid' : '' }}">
                                        @error('overview_video') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group d-flex">
                                        <div class="custom-control custom-checkbox d-inline mb-3">
                                            <input wire:model="featured" value="1" class="custom-control-input" id="featured" type="checkbox">
                                            <label class="custom-control-label" for="featured">Featured</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-inline mb-3 ml-3">
                                            <input wire:model="trending" value="1" class="custom-control-input" id="trending" type="checkbox">
                                            <label class="custom-control-label" for="trending">Trending</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-inline mb-3 ml-3">
                                            <input wire:model="popular" value="1" class="custom-control-input" id="popular" type="checkbox">
                                            <label class="custom-control-label" for="popular">Popular</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="meta-keywords">Meta Keywords</label>
                                        <input wire:model="meta_keywords" type="text" class="form-control {{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}">
                                        @error('meta_keywords') <span class="text-danger error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="meta-description">Meta Description</label>
                                        <textarea wire:model="meta_description" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" rows="3"></textarea>
                                        @error('meta_description') <span class="text-danger error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                          
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label mr-4">Published</label>
                                        <label class="custom-toggle mb-0">
                                            <input wire:model="published" type="checkbox" name="published" value="1">
                                            @error('published') <span class="text-danger error">{{ $message }}</span>@enderror 
                                            <span class="custom-toggle-slider rounded-circle pt-2"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="action d-flex justify-content-center my-4">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="ni ni-check-bold"></i>
                                            Add Course
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('child-scripts')
<script src="{{ asset('assets') }}/vendor/js-cookie/js.cookie.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datepicker({  
        format: 'MM/DD/YYYY'
        });  
        $(".datepicker.start-date").on("change", function(e) {
        @this.set('started_date', e.target.value)
        });
        $(".datepicker.end-date").on("change", function(e) {
        @this.set('end_date', e.target.value)
        });
    });
    </script>  
@endpush