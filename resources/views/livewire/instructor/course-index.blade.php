<div class="overflow-hidden">
    <div class="header bg-dark-green pb-7 pt-5">
        <div class="container-fluid">
            <div class="header-body">
            <div class="card shadow mt-5 mb-3">
                    <div class="card-header header-bg p-3 border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="text-default mb-0">Course List</h3>
                            </div>
                            <div class="col">
                                <div class="section-header-breadcrumb d-flex justify-content-end" style="margin-left:auto;">
                                    <div class="breadcrumb-item">
                                        <a href="{{route('admin.dashboard')}}" style="font-size:12px;color:#828bb2;">Dashboard</a>
                                    </div>
                                    <div class="breadcrumb-item">
                                        <a href="{{route('admin.courses')}}" class="text-default" style="font-size:12px;">Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            </div>
        </div>
    </div>
    <div class="content-body" style="background-color:#fafdfb;">
        <div class="container-fluid mt--7">
            <div class="row">

                @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('message') }}
                        </div>
                @endif
            </div>
            <div class="row mt-3">
                <div class="col-xl-12 mb-3">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-12">
                                    <a class="btn btn-sm btn-icon btn-3 btn-primary" href="{{route('instructor.course.add')}}">
                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>                             
                                        <span class="btn-inner--text">Add Course</span>
                                    </a>
                                </div>
                                <div class="col-md-10 col-12">
                                    <div class="d-md-flex w-full" style="justify-content: space-between;">
                                        <!-- Search box -->
                                        <div class="searchbox" style="min-width:340px;">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                                </div>
                                                <input wire:model.debounce.500ms="search" class="form-control" placeholder="Search by title, category, instructor" type="text">
                                            </div>  
                                        </div>
                                        <!-- Checked Action Dropdown -->
                                         @if ($checked) 
                                        <div class="dropdown ml-3">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="selectedMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action Selected ({{count($checked)}})
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="selectedMenu">
                                                <a class="dropdown-item" href="#" type="button" onclick="confirm('Are you sure you want to delete these records?') || event.stopImmediatePropagation()" wire:click="deleteRecords()">Delete</a>
                                                <a class="dropdown-item" href="#" type="button" onclick="confirm('Do you want to export these records?') || event.stopImmediatePropagation()" wire:click="exportSelected()">Export</a>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="sorting-group d-flex">
                                            <!-- Order Asc -->
                                            <div class="orderasc pr-2">
                                                <select wire:model="orderAsc" id="orderAsc" class="form-control">
                                                    <option value="asc">Ascending</option>
                                                    <option value="desc">Descending</option>
                                                </select>
                                            </div>
                                            <!-- Order Asc -->
                                            <div class="perpage">
                                                <select wire:model="perPage" name="" id="perPage" class="form-control">
                                                    <span>Per Page</span>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="50">50</option>
                                                    <option value="70">70</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course_section">
                <div class="row mb-4">
                    @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <input type="checkbox" wire:model="checked" value="{{$course->id}}" class="checkbox position-absolute" style="z-index:99;left:40px;right:auto;top:-8px;">
                        <!-- card -->
                        <div class="card course-single-item @if ($this->isChecked($course->id)) bg-default @endif">
                            <div class="course-image">
                                <img class="card-img-top" src="{{ asset('storage/courses/'.$course->cover_image) }}" alt="{{$course->name}}">
                            </div>
                            <div class="card-img-block">
                                <h5 class="course-type">{{$course->is_free == 1?'Free':'Paid'}}</h5>
                            </div>
                            <div class="card-body course-content">
                                <h4 class="card-title mt-2">{{$course->name}}</h4>
                                <p>
                                <li class="mt-3" style="list-style-type:none;">Category <span class="value-align">{{ $course->category? $course->category->name: '-' }}</span></li>
                                <li class="mt-3" style="list-style-type:none;">Featured <span class="value-align">{{$course->featured === 1? 'Yes':'No'}}</span></li>
                                <li class="mt-3" style="list-style-type:none;">Status <span class="value-align">{{$course->status === 'enabled'? 'Active':'Inactive'}}</span></li>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="row mt-3 mb-3">
                                    <div class="col-2"></div>
                                    <div class="col-2">
                                        <a href="{{route('instructor.course.details',['course_id' => $course->id])}}" class="" title="Edit Course">
                                            <i class="fa fa-edit"></i>  
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{route('instructor.course.details',['course_id' => $course->id])}}" class="" title="View Course" >
                                            <i class="fa fa-eye"></i>  
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a wire:click.prevent="confirmDelete({{$course->id}})" data-toggle="modal" data-target="#modal-delete" class="" title="Delete Course" >
                                            <i class="fa fa-trash-alt" style="color:#5e72e4;"></i>
                                        </a> 
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </div>
                    @endforeach
                </div>

                <div class="pagination">
                    @if(!empty($courses))
                    {{ $courses->links() }}
                    @endif
                </div>
            </div>
              <!-- Delete Confirmation Modal -->       
                <div wire:ignore.self class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true close-btn">×</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                                    <p>Are you sure you want to delete? Course contains data.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- end Modal -->

        </div>
    </div>
</div>