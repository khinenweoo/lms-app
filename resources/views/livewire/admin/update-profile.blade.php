<div class="container">
    <div class="row">
        <div class="col-lg-12" style="padding:0;">
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
                <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
                <!-- Header container -->
                <div class="container-fluid d-flex align-items-center">
                    <div class="row">
                        <div class="col-md-12">
                            {{--  <h1 class="display-2 text-white">{{ "Hello" . ' '. $admin->name }}</h1>  --}}
                            <h1 class="display-2 text-white">Hello! Admin</h1>
                                <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you have made with your work and manage your projects or assigned tasks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="z-index: 1;position: relative;margin-top: -12%;">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update" enctype="multipart/form-data">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <div class="pl-lg-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <input wire:model="adminId" type="hidden" class="form-control {{ $errors->has('adminId') ? ' is-invalid' : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input wire:model="name" type="text" placeholder="Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input wire:model="email" type="email" placeholder="Email Address" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
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
                                        <label class="control-label">Date of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input wire:model="dob" class="form-control datepicker" name="dob" id="dob" placeholder="Select date" type="text">
                                            @error('dob') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input wire:model="phone" type="text" placeholder="-" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone', auth()->user()->phone) }}">
                                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input wire:model="address" type="text" placeholder="Address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">
                                        @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
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

                             <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                    <hr class="my-4" />
                    <form method="post" action="{{ route('user.password') }}" autocomplete="off">
                        @csrf
                        @method('put')

                        <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                        @if (session('password_status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('password_status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                                <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>

                                @if ($errors->has('old_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                                <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

