<div class="overflow-hidden">
    <div class="content-body bg-gradient-green pb-7 pt-5">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="card shadow mt-5 mb-3">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="text-default mb-0">Update Instructor</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="update" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input wire:model="instructorId" type="hidden" placeholder="InstructorId" class="form-control {{ $errors->has('instructorId') ? ' is-invalid' : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input wire:model="name" type="text" placeholder="Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea wire:model="about" class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" rows="3" placeholder="Instructor info..."></textarea>
                                        @error('about') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input wire:model="email" type="email" placeholder="Email Address" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Image</label>
                                        <input wire:model="photo" type="file" class="form-control {{ $errors->has('photo') ? ' is-invalid' : '' }}">
                                        @error('photo') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i style="cursor:pointer;" class="fas fa-eye-slash eye toggle-password"></i></span>
                                            </div>
                                            <input wire:model="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" autocomplete="off">
                                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="password">Confirm Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i style="cursor:pointer;" class="fas fa-eye-slash eye toggle-password"></i></span>
                                            </div>
                                            <input wire:model="confirm_password" class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" type="password" autocomplete="off">
                                            @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group d-flex">
                                        <label for="password" class="mr-4">Gender</label>
                                        <!-- <div class="custom-control custom-radio mb-3 pl-5">
                                            <input wire:model="gender" name="gender" class="custom-control-input" id="customRadio5" value="male" type="radio">
                                            <label class="custom-control-label" for="male">Male</label>
                                        </div> -->
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
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input wire:model="dateofbirth" class="form-control datepicker" name="dateofbirth" id="dateofbirth" placeholder="Select date" type="text">
                                            @error('dateofbirth') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <p id="showdate"> No Date is Picked </p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input wire:model="phone" type="text" placeholder="-" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" >
                                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea wire:model="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" rows="3" placeholder="Instructor address..."></textarea>

                                        <!-- <input wire:model="address" type="text" placeholder="Address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"> -->
                                        @error('address') <span class="text-danger error">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Facebook URL</label>
                                        <input wire:model="facebook_link" type="text" placeholder="Facebook Link" class="form-control {{ $errors->has('facebook_link') ? ' is-invalid' : '' }}" >
                                        @error('facebook_link') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Linkedin URL</label>
                                        <input wire:model="linkedin_link" type="text" placeholder="Linkedin Link" class="form-control {{ $errors->has('linkedin_link') ? ' is-invalid' : '' }}" >
                                        @error('linkedin_link') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label mr-4">Status</label>
                                        <label class="custom-toggle mb-0">
                                            <input wire:model="status" type="checkbox" name="status" value="1">
                                            @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
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
                                            Update Instructor
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
        $(".datepicker").on("change", function(e) {
        @this.set('dateofbirth', e.target.value)
        });
    });
    </script>
@endpush