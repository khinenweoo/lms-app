<div class="overflow-hidden">
    <div class="header bg-gradient-green pb-7 pt-5">
        <div class="container-fluid">
            <div class="header-body">
            <div class="card shadow mt-5 mb-3">
                    <div class="card-header p-3 border-0">
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
                                        <a href="#" style="font-size:12px;color:#828bb2;">Instructors</a>
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
                                    <button class="btn btn-icon btn-3 btn-success" type="button">
                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>                             
                                        <span class="btn-inner--text">Add Instructor</span>
                                    </button>
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
                                                    <option value="dateofbirth">Date of Birth</option>
                                                    <option value="phone">Phone</option>
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
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instructors as $instructor)
                                        <tr>
                                            <td ><img src="{{ asset('storage/instructors/'.$instructor->photo()) }}" class="img-fluid" style="max-width:100%;width:60px;" alt=""></td>
                                            <td>{{ $instructor->name() }}</td>
                                            <td>{{ $instructor->email() }}</td>
                                            <td>{{ $instructor->status() }}</td>
                                            <td>Action buttons</td>
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
