@extends('layouts.app')

@section('content')

    <div class="main">

        <!-- Secondary Navbar -->
        <nav class="newnavbar navbar-secondary navbar-expand-lg">
            <div class="container">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                            <i class="ni ni-tv-2 text-green"></i><span>{{ __('Dashboard') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-users text-green"></i><span>{{ __('Instructors') }}</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#student-nav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                            <i class="ni ni-hat-3 text-green"></i>
                            <span class="nav-link-text">{{ __('Students') }}</span>
                        </a>

                        <div class="collapse" id="student-nav">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        {{ __('Add Student') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        {{ __('All Students') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        {{ __('Enrolled Student') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#course-nav" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                            <i class="ni ni-books text-green"></i>
                            <span class="nav-link-text">{{ __('Courses Management') }}</span>
                        </a>

                        <div class="collapse" id="course-nav">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.categories')}}">
                                        {{ __('Manage Categories') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        {{ __('All Courses') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        {{ __('Course Level') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        {{ __('Active Courses') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                        {{ __('Pending Courses') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('user.profile') }}">
                            <i class="ni ni-circle-08 text-green"></i><span>{{ __('Account') }}</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('user.profile') }}">
                            <i class="fas fa-pencil-alt text-green"></i><span>{{ __('Blog') }}</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="main-dashboard">
            <div class="container">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item">
                                <a href="">Home</a>
                            </div>
                            <div class="breadcrumb-item">Dashboard</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card card-danger">
                                    <div class="card-header">
                                        <div><h4><i class="fa fa-edit"></i> Homework</h4></div>
                                    </div>
                                    <div class="card-body">
                                        You have pending Homework. Please click to submit now.
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-success">
                                            <i class="fa fa-edit"></i> View Homework</a>
                                    </div>
                                </div>

                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>
                                        <i class="fa fa-book"></i> Courses &amp; Sessions</h4>
                                        <div class="card-header-action">
                                            <a href="#" class="btn btn-primary">View All</a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="summary">
                                            <div class="summary-item">
                                                <h6>Enrolled Courses
                                                    <span class="text-muted">(1 Items)</span></h6>
                                                <ul class="list-unstyled list-unstyled-border">
                                                    <li class="media">
                                                        <a href="#">
                                                            <img class="mr-3 rounded" src="http://traineasyv3.intermaticsng.com/tmp/cache/usermedia/6/cold-calling_720-671x480.jpg" alt="product" width="50">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-right">
                                                                <a class="btn btn-primary btn-sm">
                                                                    <i class="fa fa-play-circle"></i>
                                                                    View
                                                                </a>
                                                            </div>
                                                            <div class="media-title">
                                                                <a href="#">Cold Calling Mastery</a>
                                                                <div class="progress-div">
                                                                    <div class="progress" data-height="3">
                                                                        <div class="progress-bar" role="progressbar" data-width="0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-muted text-small">
                                                                <a href="#">3 Classes</a>
                                                                <div class="bullet"></div> Online Course
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-success">
                                    <div class="card-header">
                                        <h4 class="d-inline"><i class="fa fa-comments"></i> Discussions</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Student Forum</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Instructor Chats</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                                <div class="card-title">Latest forum topics </div>
                                                    <ul class="list-unstyled list-unstyled-border">
                                                        <li class="media">
                                                            <img data-toggle="tooltip" data-placement="top" data-original-title="John" class="mr-3 rounded-circle" width="50" src="http://traineasyv3.intermaticsng.com/tmp/cache/usermedia/student_uploads/2020_12/16069975961_Secretary-300x300.jpg" alt="avatar">
                                                            <div class="media-body">
                                                                <a class="badge badge-pill badge-success mb-1 float-right" href="#">View</a>
                                                                <h6 class="media-title">
                                                                    <a href="#">I am terrified of cold calling!</a></h6>
                                                                <div class="text-small text-muted">  Cold Calling Mastery
                                                                    <div class="bullet"></div>
                                                                    <span class="text-primary">1 year ago</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="btn btn-primary btn-sm"></i> View All</a>
                                            </div>

                                            <div class="tab-pane fade show active" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                                    <ul class="list-unstyled list-unstyled-border">
                                                        <li class="media">
                                                            <div class="media-body">
                                                                <a class="badge badge-pill badge-success mb-1 float-right" href="#">View</a>
                                                                    <h6 class="media-title">
                                                                        <a href="#">Enquiry</a></h6>
                                                                    <div class="text-small text-muted">
                                                                        Cold Calling Mastery  <div class="bullet"></div>
                                                                        0 Replies <div class="bullet"></div>
                                                                        <span class="text-primary">1 year ago</span>
                                                                    </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="btn btn-primary btn-sm"></i> View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4><i class="fa fa-certificate"></i> Certificates</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="#">
                                                    <h1><i class="fa fa-file-pdf"></i></h1>
                                                </a>
                                                <div class="mt-2 font-weight-bold">Cold calling certification</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-info">
                                    <div class="card-header">
                                        <h4>
                                        <i class="fas fa-check-circle"></i>  Tests</h4>
                                        <div class="card-header-action">
                                            <a href="#" class="btn btn-primary">View All</a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="summary">
                                            <div class="summary-item">
                                                <h6>Your recent performance</h6>
                                                <ul class="list-unstyled list-unstyled-border">
                                                    <li class="media">
                                                        <div class="media-body">
                                                            <div class="media-right">100%</div>
                                                            <div class="media-title"><a href="#">Animal Kingdom</a></div>
                                                            <div class="text-muted text-small">Taken On    03 12 2020</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-2">
                                <ul class="list-group">
                                    <li class="list-group-item active">My Account</li>
                                    <li class="list-group-item"><a href="#"><i class="fas fa-chalkboard-teacher"></i> My Courses</a></li>
                                    <li class="list-group-item"><a href="#"><i class="fas fa-edit"></i> Homework</a> </li>
                                    <li class="list-group-item"><a href="#"><i class="fas fa-comments"></i> Student Forum</a> </li>
                                    <li class="list-group-item"><a href="#"><i class="fas fa-comment"></i> Instructor Chat</a> </li>
                                    <li class="list-group-item"><a href="#"><i class="fas fa-download"></i> Downloads</a> </li>
                                    <li class="list-group-item"><a href="#"><i class="fas fa-certificate"></i> Certificates</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>





    </div>

    //With Inline CSS
    {{--  <div class="main" style="font-size: 14px;">

        <!-- Secondary Navbar -->
        <nav class="newnavbar navbar-secondary navbar-expand-lg" style="height: 70px; box-shadow: 0 4px 8px rgb(0 0 0 / 3%); background-color: #fff; top: 90px; padding: 0; z-index: 889; transition: all .5s; position: absolute; left: 0; right: 0;">
            <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
                <ul class="navbar-nav" style="display: flex; padding-left: 0; margin-bottom: 0; list-style: none;">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}" style="padding-top: 0;">
                            <i class="ni ni-tv-2 text-green" style="width: 30px; font-size: 16px;"></i><span style="line-height: 74px;">{{ __('Dashboard') }}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="" style="padding-top: 0;">
                            <i class="fas fa-users text-green" style="width: 30px; font-size: 16px;"></i><span style="line-height: 74px;">{{ __('Instructors') }}</span>
                        </a>
                    </li>


                    <li class="nav-item" style="position: relative;">
                        <a class="nav-link" href="#student-nav" style="color: #868e96; font-size: 13px; letter-spacing: .3px; height: 70px; padding: 0; padding-left: 0 !important; padding-right: 0 !important; margin-left: 15px; margin-right: 15px; position: relative; margin-right: 35px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                            <i class="ni ni-hat-3 text-green" style="width: 30px; font-size: 16px;"></i>
                            <span class="nav-link-text" style="line-height: 74px;">{{ __('Students') }}</span>
                        </a>

                        <div class="collapse" id="student-nav">
                            <ul class="nav nav-sm flex-column" style="box-shadow: 0 4px 8px rgb(0 0 0 / 3%); border: solid 1px #CCCCCC; padding: 0; position: absolute; float: none;">
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('Add Student') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('All Students') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('Enrolled Student') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item" style="position: relative;">
                        <a class="nav-link" href="#course-nav" style="color: #868e96; font-size: 13px; letter-spacing: .3px; height: 70px; padding: 0; padding-left: 0 !important; padding-right: 0 !important; margin-left: 15px; margin-right: 15px; position: relative; margin-right: 35px;" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                            <i class="ni ni-books text-green" style="width: 30px; font-size: 16px;"></i>
                            <span class="nav-link-text" style="line-height: 74px;">{{ __('Courses Management') }}</span>
                        </a>

                        <div class="collapse" id="course-nav">
                            <ul class="nav nav-sm flex-column" style="box-shadow: 0 4px 8px rgb(0 0 0 / 3%); border: solid 1px #CCCCCC; padding: 0; position: absolute; float: none;">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.categories')}}" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('Manage Categories') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('All Courses') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('Course Level') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('Active Courses') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: #6c757d; font-weight: 600; letter-spacing: .3px; padding: 7px !important; padding-left: 20px !important; padding-right: 20px !important;background: white;">
                                        {{ __('Pending Courses') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('user.profile') }}" style="padding-top: 0;">
                            <i class="ni ni-circle-08 text-green" style="width: 30px; font-size: 16px;"></i><span style="line-height: 74px;">{{ __('Account') }}</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('user.profile') }}" style="padding-top: 0;">
                            <i class="fas fa-pencil-alt text-green" style="width: 30px; font-size: 16px;"></i><span style="line-height: 74px;">{{ __('Blog') }}</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="main-dashboard" style="min-height: 554px; padding-left: 0; padding-right: 0; padding-top: 180px; width: 100%; position: relative; transition: all .5s; left:0; right:0;">
            <div class="container">
                <section class="section" style="position: relative; z-index: 1;">
                    <div class="section-header" style="box-shadow: 0 4px 8px rgb(0 0 0 / 3%); background-color: #fff; border-radius: 3px; border: none; position: relative; margin-bottom: 30px; padding: 20px; display: flex; align-items: center;">
                        <h1 style="margin-bottom: 0; font-weight: 700; display: inline-block; font-size: 24px; margin-top: 3px; color: #34395e;">Dashboard</h1>
                        <div class="section-header-breadcrumb" style="margin-left: auto; display: flex; align-items: center;">
                            <div class="breadcrumb-item" style="font-size: 12px;">
                                <a href="" style="color: #6777ef; font-weight: 500;">Home</a>
                            </div>
                            <div class="breadcrumb-item" style="font-size: 12px; padding-left: 0.5rem;">Dashboard</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row" style="display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px;">
                            <div class="col-md-5">
                                <div class="card card-danger" style="border-top: 2px solid #fc544b !important; box-shadow: 0 4px 8px rgb(0 0 0 / 3%); background-color: #fff; border-radius: 3px; border: none; position: relative; margin-bottom: 30px; display: flex; background-clip: border-box; flex-direction: column; min-width: 0; word-wrap: break-word;">
                                    <div class="card-header" style="background-color: transparent; border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom: 0;">
                                        <div><h4 style="font-size: 16px; line-height: 28px; padding-right: 10px; margin-bottom: 0;"><i class="fa fa-edit"></i> Homework</h4></div>
                                    </div>
                                    <div class="card-body" style="padding-top: 20px; padding-bottom: 20px; background-color: transparent; padding: 20px 25px; flex: 1 1 auto;">
                                        You have pending Homework. Please click to submit now.
                                    </div>
                                    <div class="card-footer" style="background-color: transparent; border: none; padding: 20px 25px; border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);">
                                        <a href="#" class="btn btn-success" style="float: right!important;">
                                            <i class="fa fa-edit"></i> View Homework</a>
                                    </div>
                                </div>

                                <div class="card card-primary" style="border-top: 2px solid #6777ef !important;  box-shadow: 0 4px 8px rgb(0 0 0 / 3%); background-color: #fff; border-radius: 3px; border: none; position: relative; margin-bottom: 30px; display: flex; background-clip: border-box; flex-direction: column; min-width: 0; word-wrap: break-word;">
                                    <div class="card-header" style="background-color: transparent; border-bottom-color: #f9f9f9; line-height: 30px; align-self: center; width: 100%; min-height: 70px; padding: 15px 25px; display: flex; align-items: center; border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom: 0; border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;">
                                        <h4 style="font-size: 16px; line-height: 28px; padding-right: 10px; margin-bottom: 0;">
                                        <i class="fa fa-book"></i> Courses &amp; Sessions</h4>
                                        <div class="card-header-action" style="margin-left: auto;">
                                            <a href="#" class="btn btn-primary" style="font-size: 12px;margin-top: 1px; padding: 2px 15px; border-radius: 30px !important; padding-left: 13px !important; padding-right: 13px !important; box-shadow: 0 2px 6px #acb5f6 !important; background-color: #6777ef !important; border-color: #6777ef !important; margin-top: 4px; padding: 8px 20px;">View All</a>
                                        </div>
                                    </div>

                                    <div class="card-body" style="padding-top: 20px; padding-bottom: 20px; background-color: transparent; padding: 20px 25px; flex: 1 1 auto;">
                                        <div class="summary" style="display: inline-block; width: 100%;">
                                            <div class="summary-item" style="margin-top: 20px;">
                                                <h6 style="font-size: 12px; font-weight: 600; margin-top: 5px; margin-bottom: 20px;">Enrolled Courses
                                                    <span class="text-muted" style="color: #98a6ad !important;">(1 Items)</span></h6>
                                                <ul class="list-unstyled list-unstyled-border" style="padding-left: 0; list-style: none;;">
                                                    <li class="media" style="margin-bottom: 0; padding-bottom: 0; border-bottom: none; display: flex; align-items: flex-start;">
                                                        <a href="#" style="color: #6777ef; font-weight: 500;">
                                                            <img class="mr-3 rounded" src="http://traineasyv3.intermaticsng.com/tmp/cache/usermedia/6/cold-calling_720-671x480.jpg" alt="product" width="50" style="margin-right: 16px;">
                                                        </a>
                                                        <div class="media-body" style="flex: 1;">
                                                            <div class="media-right" style="float: right; color: #6777ef; font-weight: 600; font-size: 16px;">
                                                                <a class="btn btn-primary btn-sm" href="#" style="padding: 5px 13px; font-size: 12px; box-shadow: 0 2px 6px #acb5f6 !important; background-color: #6777ef !important; border-color: #6777ef !important; font-weight: 600; letter-spacing: .5px; line-height: 24px; border-radius: 0.2rem; color: #fff;">
                                                                    <i class="fa fa-play-circle"></i>
                                                                    View
                                                                </a>
                                                            </div>
                                                            <div class="media-title" style="margin-top: 0; margin-bottom: 5px; font-weight: 600; font-size: 15px; color: #34395e;">
                                                                <a href="#" style="font-weight: inherit; color: #000;">Cold Calling Mastery</a>
                                                                <div class="progress-div" style="width: 70%">
                                                                    <div class="progress" data-height="3" style="display: flex; height: 1rem; overflow: hidden; font-size: .75rem; background-color: #e9ecef; border-radius: 0.25rem;">
                                                                        <div class="progress-bar"style="background-color: #6777ef; display: flex; flex-direction: column; justify-content: center; color: #fff; text-align: center; white-space: nowrap; transition: width .6s ease;" role="progressbar" data-width="0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-muted text-small">
                                                                <a href="#" style="color: #6777ef; font-weight: 500;">3 Classes</a>
                                                                <div class="bullet" style="display: inline; margin: 0 4px;"></div> Online Course
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-success" style="border-top: 2px solid #63ed7a !important; box-shadow: 0 4px 8px rgb(0 0 0 / 3%); background-color: #fff; border-radius: 3px; border: none; position: relative; margin-bottom: 30px; display: flex; flex-direction: column; min-width: 0; word-wrap: break-word; background-clip: border-box;">
                                    <div class="card-header" style="border-bottom-color: #f9f9f9; line-height: 30px; align-self: center; width: 100%; min-height: 70px; padding: 15px 25px; display: flex; align-items: center; background-color: transparent; border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom: 0;">
                                        <h4 class="d-inline" style="font-size: 16px; line-height: 28px; padding-right: 10px; margin-bottom: 0;"><i class="fa fa-comments"></i> Discussions</h4>
                                    </div>
                                    <div class="card-body" style="padding-top: 20px; padding-bottom: 20px; background-color: transparent; padding: 20px 25px;">
                                        <ul class="nav nav-pills" id="myTab3" role="tablist" style="display: flex; flex-wrap: wrap; padding-left: 0;  margin-bottom: 0; list-style: none; background: none;">
                                            <li class="nav-item">
                                                <a class="nav-link active" style="box-shadow: 0 2px 6px #acb5f6; color: #fff; background-color: #6777ef; padding-left: 15px !important; padding-right: 15px !important;" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Student Forum</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" style="" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Instructor Chats</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3" style="line-height: 28px; padding: 10px 0;">
                                                <div class="card-title" style="margin-bottom: 0.75rem;">Latest forum topics </div>
                                                    <ul class="list-unstyled list-unstyled-border">
                                                        <li class="media" style="display: flex; align-items: flex-start; margin-bottom: 0; padding-bottom: 0; border-bottom: none;">
                                                            <img data-toggle="tooltip" data-placement="top" data-original-title="John" class="mr-3 rounded-circle" width="50" src="http://traineasyv3.intermaticsng.com/tmp/cache/usermedia/student_uploads/2020_12/16069975961_Secretary-300x300.jpg" alt="avatar" style="margin-right: 20px;">
                                                            <div class="media-body" style="flex: 1;">
                                                                <a class="badge badge-pill badge-success mb-1 float-right" href="#" style="background-color: #63ed7a; vertical-align: middle; color: #fff; padding: 7px 12px; font-weight: 600; letter-spacing: .3px; border-radius: 30px; font-size: 12px; float: right!important;">View</a>
                                                                <h6 class="media-title" style="margin-top: 0; margin-bottom: 5px; font-weight: 600; font-size: 15px; color: #34395e;">
                                                                    <a href="#" style="font-weight: inherit; color: #000;">I am terrified of cold calling!</a></h6>
                                                                <div class="text-small text-muted" style="font-size: 12px; line-height: 20px;">  Cold Calling Mastery
                                                                    <div class="bullet" style="display: inline; margin: 0 4px;"></div>
                                                                    <span class="text-primary" style="color: #6777ef !important;">1 year ago</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="btn btn-primary btn-sm" style="box-shadow: 0 2px 6px #acb5f6; background-color: #6777ef; border-color: #6777ef; padding: 10px;"><i class="fa fa-arrow-circle-right" style="font-size: 12px;"></i> View All</a>
                                            </div>

                                            <div class="tab-pane fade show active" id="profile3" role="tabpanel" aria-labelledby="profile-tab3" style="line-height: 28px; padding: 10px 0;">
                                                    <ul class="list-unstyled list-unstyled-border">
                                                        <li class="media" style="display: flex; align-items: flex-start; margin-bottom: 0; padding-bottom: 0; border-bottom: none;">
                                                            <div class="media-body" style="flex: 1;">
                                                                <a class="badge badge-pill badge-success mb-1 float-right" href="#" style="background-color: #63ed7a; vertical-align: middle; color: #fff; padding: 7px 12px; font-weight: 600; letter-spacing: .3px; border-radius: 30px; font-size: 12px; float: right!important;">View</a>
                                                                    <h6 class="media-title" style="margin-top: 0; margin-bottom: 5px; font-weight: 600; font-size: 15px; color: #34395e;">
                                                                        <a href="#" style="font-weight: inherit; color: #000;">Enquiry</a></h6>
                                                                    <div class="text-small text-muted" style="font-size: 12px; line-height: 20px;">
                                                                        Cold Calling Mastery  <div class="bullet" style="display: inline; margin: 0 4px;"></div>
                                                                        0 Replies <div class="bullet" style="display: inline; margin: 0 4px;"></div>
                                                                        <span class="text-primary" style="color: #6777ef !important;">1 year ago</span>
                                                                    </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="btn btn-primary btn-sm" style="box-shadow: 0 2px 6px #acb5f6; background-color: #6777ef; border-color: #6777ef; padding: 10px;"><i class="fa fa-arrow-circle-right" style="font-size: 12px;"></i> View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="card card-primary" style="border-top: 2px solid #6777ef !important;  box-shadow: 0 4px 8px rgb(0 0 0 / 3%); background-color: #fff; border-radius: 3px; border: none; position: relative; margin-bottom: 30px; display: flex; background-clip: border-box; flex-direction: column; min-width: 0; word-wrap: break-word;">
                                    <div class="card-header" style="background-color: transparent; border-bottom-color: #f9f9f9; line-height: 30px; align-self: center; width: 100%; min-height: 70px; padding: 15px 25px; display: flex; align-items: center; border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom: 0; border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;">
                                        <h4 style="font-size: 16px; line-height: 28px; padding-right: 10px; margin-bottom: 0;"><i class="fa fa-certificate"></i> Certificates</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="#">
                                                    <h1 style="color: #6777ef; font-weight: 500;"><i class="fa fa-file-pdf"></i></h1>
                                                </a>
                                                <div class="mt-2 font-weight-bold">Cold calling certification</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-info" style="border-top: 2px solid #3abaf4 !important;  box-shadow: 0 4px 8px rgb(0 0 0 / 3%); background-color: #fff; border-radius: 3px; border: none; position: relative; margin-bottom: 30px; display: flex; background-clip: border-box; flex-direction: column; min-width: 0; word-wrap: break-word;">
                                    <div class="card-header" style="background-color: transparent; border-bottom-color: #f9f9f9; line-height: 30px; align-self: center; width: 100%; min-height: 70px; padding: 15px 25px; display: flex; align-items: center; border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom: 0; border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;">
                                        <h4 style="font-size: 16px; line-height: 28px; padding-right: 10px; margin-bottom: 0;">
                                        <i class="fas fa-check-circle"></i>  Tests</h4>
                                        <div class="card-header-action" style="margin-left: auto;">
                                            <a href="#" class="btn btn-primary" style="font-size: 12px;margin-top: 1px; padding: 2px 15px; border-radius: 30px !important; padding-left: 13px !important; padding-right: 13px !important; box-shadow: 0 2px 6px #acb5f6 !important; background-color: #6777ef !important; border-color: #6777ef !important; margin-top: 4px; padding: 8px 20px;">View All</a>
                                        </div>
                                    </div>

                                    <div class="card-body" style="padding-top: 20px; padding-bottom: 20px; background-color: transparent; padding: 20px 25px; flex: 1 1 auto;">
                                        <div class="summary" style="display: inline-block; width: 100%;">
                                            <div class="summary-item" style="margin-top: 20px;">
                                                <h6 style="font-size: 12px; font-weight: 600; margin-top: 5px; margin-bottom: 20px;">Your recent performance</h6>
                                                <ul class="list-unstyled list-unstyled-border">
                                                    <li class="media" style="margin-bottom: 0; padding-bottom: 0; border-bottom: none; display: flex; align-items: flex-start;">
                                                        <div class="media-body" style="flex: 1;">
                                                            <div class="media-right" style="float: right; color: #6777ef; font-weight: 600; font-size: 16px;">100%</div>
                                                            <div class="media-title" style="margin-top: 0; margin-bottom: 5px; font-weight: 600; font-size: 15px; color: #34395e;"><a href="#">Animal Kingdom</a></div>
                                                            <div class="text-muted text-small" style="font-size: 12px; line-height: 20px;">Taken On    03 12 2020</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-2">
                                <ul class="list-group" style="display: flex; flex-direction: column; padding-left: 0; margin-bottom: 0;">
                                    <li class="list-group-item active" style="background-color: #6777ef; z-index: 2; color: #fff; border-color: #007bff; display: block; padding: 0.75rem 1.25rem; margin-bottom: -1px; border: 1px solid rgba(0,0,0,.125);">My Account</li>
                                    <li class="list-group-item" style="display: block; padding: 0.75rem 1.25rem; margin-bottom: -1px; border: 1px solid rgba(0,0,0,.125);"><a href="#" style="color: #6777ef; font-weight: 500;"><i class="fas fa-chalkboard-teacher"></i> My Courses</a></li>
                                    <li class="list-group-item" style="display: block; padding: 0.75rem 1.25rem; margin-bottom: -1px; border: 1px solid rgba(0,0,0,.125);"><a href="#" style="color: #6777ef; font-weight: 500;"><i class="fas fa-edit"></i> Homework</a> </li>
                                    <li class="list-group-item" style="display: block; padding: 0.75rem 1.25rem; margin-bottom: -1px; border: 1px solid rgba(0,0,0,.125);"><a href="#" style="color: #6777ef; font-weight: 500;"><i class="fas fa-comments"></i> Student Forum</a> </li>
                                    <li class="list-group-item" style="display: block; padding: 0.75rem 1.25rem; margin-bottom: -1px; border: 1px solid rgba(0,0,0,.125);"><a href="#" style="color: #6777ef; font-weight: 500;"><i class="fas fa-comment"></i> Instructor Chat</a> </li>
                                    <li class="list-group-item" style="display: block; padding: 0.75rem 1.25rem; margin-bottom: -1px; border: 1px solid rgba(0,0,0,.125);"><a href="#" style="color: #6777ef; font-weight: 500;"><i class="fas fa-download"></i> Downloads</a> </li>
                                    <li class="list-group-item" style="display: block; padding: 0.75rem 1.25rem; margin-bottom: -1px; border: 1px solid rgba(0,0,0,.125);"><a href="#" style="color: #6777ef; font-weight: 500;"><i class="fas fa-certificate"></i> Certificates</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>  --}}
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
