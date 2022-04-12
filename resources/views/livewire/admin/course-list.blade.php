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
                                        <a href="{{route('admin.courses')}}" style="font-size:12px;color:#828bb2;">Courses</a>
                                    </div>
                                    <div class="breadcrumb-item">
                                        <a href="{{route('admin.courses')}}" class="text-default" style="font-size:12px;">Course List</a>
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
            <div class="row mt-5">
                <div class="col-xl-12 mb-5">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-3 col-12">
                                    <a class="btn btn-sm btn-icon btn-3 btn-primary" href="{{route('admin.course.add')}}">
                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>                             
                                        <span class="btn-inner--text">Add Course</span>
                                    </a>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="d-md-flex w-full" style="justify-content: space-between;">
                                        <!-- Search box -->
                                        <div class="searchbox">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                                </div>
                                                <input wire:model="search" class="form-control" placeholder="Search" type="text">
                                            </div>  
                                        </div>
                                        <div class="sorting-group d-flex">
                                            <!-- Order By -->
                                            <div class="orderby pr-2">
                                                <select wire:model="orderBy" id="orderBy" class="form-control">
                                                    <option value="id">ID</option>
                                                    <option value="name">Name</option>
                                                    <option value="course_description">Description</option>
                                                    <option value="started_date">Start Date</option>
                                                    <option value="end_date">End Date</option>
                                                    <option value="published">Published</option>
                                                </select>
                                            </div>
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
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">Course Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Instructor</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Lessons</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td>{{ $course->name }}</td>
                                            <td>{{ $course->category->name }}</td>
                                            <td>{{ $course->instructor->name }}</td>
                                            <td>
                                                <label class="custom-toggle">
                                                <input type="checkbox" {{ $course->status === 1? 'checked': '' }} disabled >
                                                <span class="custom-toggle-slider rounded-circle"></span>
                                                </label>
                                            </td>
                                            <!-- enroll close date column -->
                                            <!-- <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $course->enroll_close_date )->format('d/M/Y') }}</td> -->
                                            <td>Lessons</td>
                                            <td>
                                                <a href="{{route('admin.course.edit',['course_slug' => $course->slug])}}" class="btn btn-primary btn-sm" title="Edit Course" style="border-radius:14px;padding:.35rem .5rem;">
                                                <i class="fa fa-edit"></i>  
                                                </a>
                                                <button type="button" wire:click.prevent="" data-toggle="modal" data-target="#modal-delete" class="btn btn-danger btn-sm" title="Delete Course" style="border-radius:14px;padding:.35rem .5rem;">
                                                <i class="fa fa-trash-alt"></i>
                                                </button> 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="pagination">
                    
                </div>

            </div>
        </div>
    </div>
</div>