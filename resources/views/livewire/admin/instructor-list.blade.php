<div class="overflow-hidden">
    <div class="header bg-dark-green pb-7 pt-5">
        <div class="container-fluid">
            <div class="header-body">
            <div class="card shadow mt-5 mb-3">
                    <div class="card-header header-bg p-3 border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="text-default mb-0">Instructor List</h3>
                            </div>
                            <div class="col">
                                <div class="section-header-breadcrumb d-flex justify-content-end" style="margin-left:auto;">
                                    <div class="breadcrumb-item">
                                        <a href="{{route('admin.dashboard')}}" style="font-size:12px;color:#828bb2;">Dashboard</a>
                                    </div>
                                    <div class="breadcrumb-item">
                                        <a href="{{route('admin.instructors')}}" style="font-size:12px;color:#828bb2;">Instructors</a>
                                    </div>
                                    <div class="breadcrumb-item">
                                        <a href="{{route('admin.instructors')}}" class="text-default" style="font-size:12px;">Instructor List</a>
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
                                    <a class="btn btn-sm btn-icon btn-3 btn-primary" href="{{ route('admin.instructor.add') }}">
                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                        <span class="btn-inner--text">Add Instructor</span>
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
                                                    <option value="email">Email Address</option>
                                                    <option value="phone">Phone</option>
                                                    <option value="gender">Gender</option>
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
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Courses</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instructors as $instructor)
                                        <tr>
                                            <td>{{ $instructor->id }}</td>
                                            <td ><img src="{{ asset('storage/instructors/'.$instructor->photo()) }}" class="img-fluid" style="max-width:100%;width:60px;" alt=""></td>
                                            <td>{{ $instructor->name() }}</td>
                                            <td>{{ $instructor->email() }}</td>
                                            <td>{{ $instructor->phone() }}</td>
                                            <td>{{ $instructor->gender() }}</td>
                                            <td>0</td>
                                            <td>
                                                <label class="custom-toggle">
                                                <input type="checkbox" {{ $instructor->status === 1? 'checked': '' }} disabled >
                                                <span class="custom-toggle-slider rounded-circle"></span>
                                                </label>
                                            </td>
                                            <td><a href="{{ route('admin.instructor.edit',['instructor_id'=>$instructor->id]) }}" class="btn btn-primary btn-sm" title="Edit Category" style="border-radius:14px;padding:.35rem .5rem;">
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" wire:click.prevent="confirmDelete({{ $instructor->id }})" data-toggle="modal" data-target="#modal-delete" class="btn btn-danger btn-sm" title="Delete Category" style="border-radius:14px;padding:.35rem .5rem;">
                                                <i class="fa fa-trash-alt"></i>
                                                </button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="pagination">

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
                                    <p>Are you sure you want to delete? Instructor contains data.</p>
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
</div>

@push('child-scripts')
<script>
            window.livewire.on('instructorUpdateModal', () => {
                $('#modal-update').modal('hide');
            });
</script>
@endpush
