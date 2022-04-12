<div class="overflow-hidden">
    <div class="content-body bg-dark-green pb-7 pt-5">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="card shadow mt-5 mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-default mb-0">Edit {{ $name }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                                <li class="nav-item"  wire:ignore>
                                    <a class="nav-link active" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="true">Student Details</a>
                                </li>
                                <li class="nav-item"  wire:ignore>
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Change Password</a>
                                </li>
                    </ul>

                    <div class="tab-content">
                        <div id="detail" class="tab-pane fade show active" role="tabpanel" aria-labelledby="detail-tab" wire:ignore.self>
                            <form wire:submit.prevent="update" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input wire:model="userId" type="hidden">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input wire:model="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input wire:model="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea wire:model="about" class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" rows="3" ></textarea>
                                        @error('about') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group d-flex">
                                        <label for="" class="mr-4">Gender</label>
                                        <div class="custom-control custom-radio mb-3">
                                            <input wire:model="gender" name="gender" value="male" class="custom-control-input" id="customRadio5" type="radio">
                                            <label class="custom-control-label" for="customRadio5">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3 ml-4">
                                            <input wire:model="gender" name="gender" value="female" class="custom-control-input" id="customRadio6" checked="" type="radio">
                                            <label class="custom-control-label" for="customRadio6">Female</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="wrap d-flex justify-content-around">
                                        <label for="status" style="width:15%;">Status</label>
                                        <select wire:model="status"  class="form-control" style="display:inline-block;width:85%;">
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                    @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input wire:model="dob" class="form-control datepicker" name="dob" id="dob" placeholder="Select date" type="text" style="padding-left:15px;">
                                            @error('dob') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input wire:model="phone" type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" >
                                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea wire:model="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" rows="2"></textarea>
                                        @error('address') <span class="text-danger error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="change-avatar">
                                            <div class="profile-img">
                                                @if($new_avatar)
                                                    <img src="{{$new_avatar->temporaryUrl()}}"/>
                                                @else
                                                    <img src="{{asset('storage/students')}}/{{$photo}}"/>
                                                @endif
                                            </div>
                                            <div class="upload-img">
                                                <div class="change-photo-btn btn-form">
                                                    <span>
                                                        <i class="fa fa-upload"></i>
                                                        Upload Photo
                                                    </span>
                                                    <input type="file" class="upload" wire:model="new_avatar" >
                                                    @error('new_avatar') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                                <small class="form-text text-muted">Allowed JPG or PNG.Max size of 2MB</small>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Form Button -->
                            <div class="d-flex justify-content-center my-4">
                                <button type="submit" class="btn btn-primary btn-md">
                                    <i class="ni ni-check-bold"></i> Update Changes
                                </button>
                            </div>
                            </form>
                        </div>
                        <div id="profile" class="tab-pane fade" role="tabpanel" aria-labelledby="profile-tab" wire:ignore.self>
                             <!-- Passoword fields -->
                                <form wire:submit.prevent="changePassword">
                                    @csrf
                                    <div class="form-group mt-4 mb-4">
                                        <label for="">New Password</label>
                                        <input wire:model="newpassword" class="form-control d-block {{ $errors->has('newpassword') ? ' is-invalid' : '' }}" type="password" autocomplete="off" style="max-width:340px;width:100%;">
                                        @error('newpassword') <p class="text-danger error">{{ $message }}</p>@enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="">Confirm Password</label>
                                        <input wire:model="confirm_password" class="form-control d-block {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" type="password" autocomplete="off" style="max-width:340px;width:100%;">
                                        @error('confirm_password') <p class="text-danger error">{{ $message }}</p>@enderror

                                    </div>
                                    <!-- Form Button -->
                                    <div class=" my-4">
                                        <button type="submit" class="btn btn-primary btn-md">
                                            <i class="ni ni-check-bold"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


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
        $(".datepicker").on("change", function(e) {
        @this.set('dob', e.target.value)
        });
    });
    </script>
@endpush

