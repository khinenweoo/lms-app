<div class="overflow-hidden">
    <div class="content-body bg-gradient-green pb-7 pt-5">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="card shadow mt-5 mb-3">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="text-default mb-0">Setup your Course</h3>
                            </div>
                        </div>
                    </div>
                    <form wire:submit.prevent="store" enctype="multipart/form-data"> 
                     @csrf
                    <div class="card-body">
                        <p>
                            Fill each section and click 'Next' to continue. Fields marked * are required 
                        </p>

                        @if($currentStep == 1)
                        <section id="step1">
                           
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Course Name</label>
                                        <input wire:model="name" type="text" placeholder="Title" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="short_description">Short Description</label>
                                        <textarea wire:model="short_description" class="form-control {{ $errors->has('short_description') ? ' is-invalid' : '' }}" rows="2" ></textarea>
                                        @if ($errors->has('short_description'))
                                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="course_description">Course Description</label>
                                        <textarea wire:model="course_description" class="form-control {{ $errors->has('course_description') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        @if ($errors->has('course_description'))
                                            <span class="text-danger">{{ $errors->first('course_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="course_requirements">Course Requirements</label>
                                        <textarea wire:model="course_requirements" class="form-control {{ $errors->has('course_requirements') ? ' is-invalid' : '' }}" rows="4" ></textarea>
                                        @error('course_requirements') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="course_outcomes">Course Outcomes</label>
                                        <textarea wire:model="course_outcomes" class="form-control {{ $errors->has('course_outcomes') ? ' is-invalid' : '' }}" rows="4" ></textarea>
                                        @error('course_outcomes') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="upload-photo">
                                            <div class="preview-img">
                                                    @if(empty($cover_image))
                                                        <img src="asset('storage/courses/default-course.png')" alt="">
                                                    @elseif($cover_image)
                                                        <img src="{{$cover_image->temporaryUrl()}}"/>
                                                    @else
                                                        <img src="{{asset('storage/courses')}}/{{$cover_image}}"/>
                                                    @endif
                                            </div>
                                            <div class="upload-img">
                                                <div class="change-photo-btn btn-form">
                                                        <span>
                                                            <i class="fa fa-upload"></i>
                                                            Upload Photo
                                                        </span>
                                                        <input type="file" class="upload" wire:model="cover_image" >
                                                        @error('cover_image') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                                <small class="form-text text-muted">Allowed JPG or PNG.Max size of 2MB</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        @endif
                        @if($currentStep == 2)
                        <section id="step2">
                            <div class="row">
                                <div class="col-xl-6">
                                    <label for="free">This Course is Free Course</label>
                                    <select wire:model="is_free" name="is_free" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1" selected="selected">Yes</option>
                                    </select>
                                    @error('is_free') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                @if($is_free == 0)
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Course Fee</label>
                                        <input  wire:model="course_fee" placeholder="Digits Only" step="any" pattern="[0-9]" name="price" type="text" id="price" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}">
                                        @error('course_fee') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group mt-2">
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
                                <div class="col-xl-12">
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
                                <div class="col-xl-6">
                                    <label for="status">Duration Length</label>
                                    <input wire:model="duration_length" type="text" class="form-control {{ $errors->has('duration_length') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('duration_length'))
                                        <span class="text-danger">{{ $errors->first('duration_length') }}</span>
                                    @endif
                                   
                                </div>
                                <div class="col-xl-6">
                                    <label for="status">Status</label>
                                    <select wire:model="status"  class="form-control">
                                        <option value="0">Disabled</option>
                                        <option value="1" selected>Enabled</option>
                                    </select>
                                    @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group d-flex mt-3">
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
                        </section>
                        @endif
                        @if($currentStep == 3)
                        <section id="step3">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>

                                            <input wire:model="starteddate" class="form-control datepicker" id="starteddate" placeholder="Select date" type="date">
                                            @error('starteddate') <span class="text-danger error">{{ $message }}</span>@enderror
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
                                            <input wire:model="expiredate" class="form-control datepicker" id="expiredate" placeholder="Select date" type="date">
                                            @error('expiredate') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Enrollment Closes</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input wire:model="enrollclosedate" class="form-control enrollclosedate" id="enrollclosedate" placeholder="Select date" type="date">

                                            @error('enrollclosedate') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </section>
                        @endif
                    </div>
                    
                    <div class="card-footer">
                        <div class="actionBar d-flex" style="justify-content:right">
                            <button type="button" class="btn btn-default btn-md buttonPrevious" wire:click.prevent="decreaseStep()">Previous</button>
                            <button type="button" class="btn btn-info btn-md buttonNext" wire:click.prevent="increaseStep()">Next</button>
                            @if($currentStep == 3)
                                <button type="submit" class="btn btn-primary buttonFinish">Save Course</button>
                            @endif
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@push('child-scripts')
<script src="{{ asset('assets') }}/vendor/js-cookie/js.cookie.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">


</script>  
@endpush