<div>
    <div class="header pb-2 pt-5">
        <div class="container-fluid">
            <div class="header-body">
            <div class="card shadow mt-5 mb-3">
                    <div class="card-header header-white-box p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="text-default mb-0">Course Details</h3>
                            </div>
                            <div class="col">
                                <div class="section-header-breadcrumb d-flex justify-content-end" style="margin-left:auto;">
                                    <div class="breadcrumb-item">
                                        <a href="{{route('instructor.dashboard')}}" style="font-size:12px;color:#828bb2;">Dashboard</a>
                                    </div>
                                    <div class="breadcrumb-item">
                                        <a href="{{route('instructor.courses')}}" class="text-default" style="font-size:12px;">Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section class="course-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="course-chapters-tab" data-toggle="tab" href="#course-chapters" role="tab" aria-controls="course-chapters" aria-selected="true">
                                    <i class="ni ni-books"></i> Course Chapters
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="course-details-tab" data-toggle="tab" href="#course-details" role="tab" aria-controls="course-details-tab" aria-selected="false">
                                    <i class="ni ni-collection"></i> Course Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="course-lessons-tab" data-toggle="tab" href="#course-lessons" role="tab" aria-controls="course-lessons-tab" aria-selected="false">
                                    <i class="ni ni-credit-card"></i> Course Lessons</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">

                                    <!-- Course Chapter Start -->
                                    <div class="tab-pane fade show active" id="course-chapters" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                       
                                            <div class="card-header p-0 pb-3">
                                                <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#chapter-create">
                                                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>                             
                                                    <span class="btn-inner--text">Add Course Chapter</span>
                                                </button>
                                                <a wire:click.prevent="" class="btn btn-outline-danger">
                                                <span class="btn-inner--icon"><i class="fa fa-trash-alt"></i></span> 
                                                <span class="btn-inner--text">Delete Selected</span>
                                                 
                                                </a> 
                                            </div>
                                            <!-- Livewire Course Chapter Create Modal -->
                                            @include('livewire.instructor.chapter.create')

                                            <!-- Livewire Course Chapter Edit Modal -->
                                            @include('livewire.instructor.chapter.edit')
                        
                                            
                                            <div class="card-content">
                                                <!-- fliter row start -->
                                                <div class="filter-box d-md-flex w-full py-4" style="justify-content: space-between;">
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
                                                  
                                                    <div class="dropdown ml-3">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="selectedMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action Selected 
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="selectedMenu">
                                                            <a class="dropdown-item" href="#" type="button" onclick="confirm('Are you sure you want to delete these records?') || event.stopImmediatePropagation()" wire:click="deleteRecords()">Delete</a>
                                                            <a class="dropdown-item" href="#" type="button" onclick="confirm('Do you want to export these records?') || event.stopImmediatePropagation()" wire:click="exportSelected()">Export</a>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="sorting-group d-flex">
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
                                                <!-- fliter row end -->
                                                <!-- datatable start -->
                                                <div class="table-responsive">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Chapter Name</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Position</th>
                                                                <th scope="col">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($course_chapters as $chapter)
                                                            <tr>
                                                                <td><input type="checkbox" value="{{$chapter->id}}" wire:model="checked"></td>
                                                                <td>{{ $chapter->name }}</td>
                                                                <td>
                                                                    <label class="custom-toggle">
                                                                    <input type="checkbox" {{ $chapter->status === 'enabled'? 'checked': '' }} disabled >
                                                                    <span class="custom-toggle-slider rounded-circle"></span>
                                                                    </label>
                                                                </td>
                                                                <td>{{$chapter->position}}</td>
                                                                <td>
                                                                    <button type="button" wire:click.prevent="editChapter({{$chapter->id}})" data-toggle="modal" data-target="#chapter-update" class="btn btn-primary btn-sm" title="Edit Chapter" style="border-radius:14px;padding:.35rem .5rem;">
                                                                    <i class="fa fa-edit"></i>  
                                                                    </button>
                                                                    <button type="button" wire:click.prevent="chapterConfirmDelete({{ $chapter->id }})" data-toggle="modal" data-target="#chapter-delete" class="btn btn-danger btn-sm" title="Delete Chapter" style="border-radius:14px;padding:.35rem .5rem;">
                                                                    <i class="fa fa-trash-alt"></i>
                                                                    </button> 
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                            <!-- Livewire Course Chapter Delete Modal -->
                                                            @include('livewire.instructor.chapter.delete')
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- datatable end -->
                                            </div>

                                    </div>
                                    <!-- Course Chapter End -->
                                    <!-- Course Detail Start -->
                                    <div class="tab-pane fade" id="course-details" role="tabpanel" aria-labelledby="course-details-tab">
                                        <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                    </div>
                                    <!-- Course Detail End -->
                                    <div class="tab-pane fade" id="course-lessons" role="tabpanel" aria-labelledby="course-lessons-tab">
                                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@push('child-scripts')
<script>
    window.livewire.on('chapterCreateModal', () => {
        $('#chapter-create').modal('hide');
    });
    window.livewire.on('chapterEditModal', () => {
        $('#chapter-update').modal('hide');
    });
</script>
@endpush