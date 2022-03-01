@extends('layouts.frontbase')

@section('content')
        <!-- Breadcrumb Section Starts -->
        <section class="breadcrumb-section">
            <div class="breadcrumb-shape">
                <img src="{{ asset('frontend/assets/img/round-shape-2.png') }}" alt="shape" class="hero-round-shape-2 item-moveTwo">
                <img src="{{ asset('frontend/assets/img/plus-sign.png') }}" alt="shape" class="hero-plus-sign item-rotate">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>course details page</h2>
                        <div class="breadcrumb-link mt-1">
                            <span><a href="#" style="color: #50be46;">home</a> / course details page</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Course Details Section Starts -->
        <section class="course-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3">
                        <div class="course-details-sidebar">
                            <div class="course-details-widget">
                                <div class="course-widget-title">
                                    <h4>course details</h4>
                                </div>
                                <div class="course-widget-items">
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fas fa-usd"></i> price</span>
                                        </div>
                                        <div class="item-right">
                                            <span>$ 200.00</span>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fas fa-user-circle"></i> instructor</span>
                                        </div>
                                        <div class="item-right">
                                            <span>john doe</span>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fa fa-clock-o"></i> duration</span>
                                        </div>
                                        <div class="item-right">
                                            <span>16 hourse</span>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fa fa-file-video-o"></i> lecture</span>
                                        </div>
                                        <div class="item-right">
                                            <span>20</span>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fas fa-shopping-cart"></i> enrolled</span>
                                        </div>
                                        <div class="item-right">
                                            <span>50 student</span>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fas fa-language"></i> language</span>
                                        </div>
                                        <div class="item-right">
                                            <span>english</span>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fas fa-calendar"></i> deadline</span>
                                        </div>
                                        <div class="item-right">
                                            <span>22 oct 2020</span>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="item-left">
                                            <span><i class="fas fa-share-alt"></i> share</span>
                                        </div>
                                        <div class="item-right">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fas fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fas fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-widget-buttons">
                                    <a href="#" class="template-button">buy membership</a>
                                    <a href="#" class="template-button">buy this course</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-9">
                        <div class="course-details-title">
                            <h2>web development</h2>
                        </div>
                        <div class="course-details-tab">
                            <div class="tab">
                                <ul class="nav-tabs tab" role="tablist">
                                    <ul class="nav">
                                        <li class="nav-item tab-one active" tabindex="1">
                                            <a class="nav-link active" data-toggle="tab" href="#overview"><span>overview</span></a>
                                        </li>
                                        <li class="nav-item tab-two" tabindex="2">
                                            <a class="nav-link" data-toggle="tab" href="#curriculum"><span>curriculum</span></a>
                                        </li>
                                        <li class="nav-item tab-three" tabindex="3">
                                            <a class="nav-link" data-toggle="tab" href="#instructor"><span>instructor</span></a>
                                        </li>
                                        <li class="nav-item tab-four" tabindex="4">
                                            <a class="nav-link" data-toggle="tab" href="#review"><span>review</span></a>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="overview" class="container tab-pane active overview-content tab-content-bg" id="Overview">
                                    <h4>course description</h4>
                                    <p class="mt-2">This course is aimed at teaching photographers what it takes to improve your techniques to earn more money.You will start with the basics and tackle how a camera operates, the types of cameras and lenses available, and equipment you will need for accomplishing your goals.</p>
                                    <div class="overview-video mt-3">
                                        <img src="{{ asset('frontend/assets/img/blog-image-2.jpg') }}" alt="thumbnail">
                                        <div class="video-play-button">
                                            <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="overview-title mt-3">
                                        <h4>what you will learn?</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="learn-item">
                                                <li><i class="fas fa-check"></i> Assemble machine learning algorithms from scratch! Digital Marketing Trade<span></span></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="learn-item">
                                                <li><i class="fas fa-check"></i> <span> Unique Ways of Promoting a Business from Scratch Inbound Marketing</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="learn-item">
                                                <li><i class="fas fa-check"></i> <span>How to Generate More Traffic and Leads for Your Brand Marketing Strategy</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="learn-item">
                                                <li><i class="fas fa-check"></i> <span>Digital Marketing Tools and Strategies Income Statements</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mt-2">This course is aimed at teaching photographers what it takes to improve your techniques to earn more money.You'll start with the basics and tackle how a camera operates. While there are plenty of digital photography courses that focus on specific styles or how to use gear, it's hard to find a comprehensive course like this one, which is for beginner to advanced photographers.</p>
                                    <div class="overview-title mt-2">
                                        <h4>requirements</h4>
                                    </div>
                                    <ul class="require-item mt-2">
                                        <li><i class="fas fa-square"></i> <span>computer</span></li>
                                        <li><i class="fas fa-square"></i> <span>internet</span></li>
                                    </ul>
                                    <p>This course is aimed at teaching photographers what it takes to improve your techniques to earn more money.You will start with the basics and tackle how a camera operates. While there are plenty of digital photography courses that focus on specific styles.</p>
                                </div>
                                <div id="curriculum" class="container tab-pane curriculum-content tab-content-bg" id="Curriculum">
                                    <h4>course content</h4>
                                    <p class="mt-4">Advanced story telling techniques for writers: Personas, Characters &amp; Plots.</p>
                                    <div class="curriculum-accordion mt-3">
                                        <div class="accordion-wrapper tab-margin-bottom-50" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">introduction <span>2 lectures</span></a>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 01
                                                            </a>
                                                            <span class="preview"><a href="course-video.html">preview</a></span>
                                                            <span>02:50</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 02
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>03:20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <a href="#" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">basic knowledge <span>5 lectures</span></a>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 01
                                                            </a>
                                                            <span class="preview"><a href="course-video.html">preview</a></span>
                                                            <span>02:50</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 02
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>03:20</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 03
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>04:10</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 04
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>07:20</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 05
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>08:40</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <a href="#" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">theme development <span>4 lectures</span></a>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 01
                                                            </a>
                                                            <span class="preview"><a href="course-video.html">preview</a></span>
                                                            <span>02:50</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 02
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>03:20</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 03
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>04:10</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 04
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>07:20</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <a href="#" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">plugin development <span>6 lectures</span></a>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 01
                                                            </a>
                                                            <span class="preview"><a href="course-video.html">preview</a></span>
                                                            <span>02:50</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 02
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>03:20</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 03
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>04:10</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 04
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>07:20</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 05
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>08:40</span>
                                                        </div>
                                                        <div class="single-course-video">
                                                            <a href="course-video.html" class="button-video">
                                                                <i class="fas fa-play-circle"></i> lesson 06
                                                            </a>
                                                            <span class="locked"><a href="#">locked</a></span>
                                                            <span>08:40</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-title mt-6">
                                        <h4>requirements</h4>
                                    </div>
                                    <ul class="require-item">
                                        <li><i class="fas fa-square"></i> <span>computer</span></li>
                                        <li><i class="fas fa-square"></i> <span>internet</span></li>
                                    </ul>
                                    <p>This course is aimed at teaching photographers what it takes to improve your techniques to earn more money.You will start with the basics and tackle how a camera operates. While there are plenty of digital photography courses that focus on specific styles.</p>
                                </div>
                                <div id="instructor" class="container tab-pane instructor-content tab-content-bg" id="Instructor">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="instructor-author">
                                                <div class="single-instructor">
                                                    <span class="instructor-sign">chris</span>
                                                    <div class="instructor-image">
                                                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-2.png') }}" alt="image"></a>
                                                    </div>
                                                    <div class="instructor-content">
                                                        <h4><a href="#">chris wokes</a></h4>
                                                        <span>UI UX teacher</span>
                                                    </div>
                                                    <div class="hover-state">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="instructor-about">
                                                <h4>about chris wokes</h4>
                                                <p>Blanche has always been a passionate educator and instructor for students who have a talent for languages and technical science. </p>
                                                <p>She founded MaxCoach in 1988 and trained over 5000 students online, many of whom are now successful businessmen, educators &amp; technicians.</p>
                                                <div class="instructor-button">
                                                    <a href="instructor-details.html" class="template-button">know more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="instructor-skill-part">
                                        <div class="bottom-content-title">
                                            <h4>my skills</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-skill-item">
                                                    <div class="progress-info d-flex justify-content-between">
                                                        <div class="progress-info-left">
                                                            <span>UI &amp; UX design</span>
                                                        </div>
                                                        <div class="progress-info-right">
                                                            <span>80%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-skill-item">
                                                    <div class="progress-info d-flex justify-content-between">
                                                        <div class="progress-info-left">
                                                            <span>wordPress</span>
                                                        </div>
                                                        <div class="progress-info-right">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-skill-item">
                                                    <div class="progress-info d-flex justify-content-between">
                                                        <div class="progress-info-left">
                                                            <span>technology</span>
                                                        </div>
                                                        <div class="progress-info-right">
                                                            <span>70%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-skill-item">
                                                    <div class="progress-info d-flex justify-content-between">
                                                        <div class="progress-info-left">
                                                            <span>marketing</span>
                                                        </div>
                                                        <div class="progress-info-right">
                                                            <span>60%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="review" class="container tab-pane review-content tab-content-bg" id="Review">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="rating-left">
                                                <h2>4.5</h2>
                                                <ul class="green-starts">
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                </ul>
                                                <span>average rating</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="rating-right">
                                                <div class="review-title">
                                                    <h4>course reviews</h4>
                                                </div>
                                                <div class="single-review">
                                                    <div class="progress-part">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="start-part">
                                                        <ul class="yellow-starts">
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="percentage-part">
                                                        <span>80%</span>
                                                    </div>
                                                </div>
                                                <div class="single-review">
                                                    <div class="progress-part">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="start-part">
                                                        <ul class="yellow-starts">
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="percentage-part">
                                                        <span>50%</span>
                                                    </div>
                                                </div>
                                                <div class="single-review">
                                                    <div class="progress-part">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="start-part">
                                                        <ul class="yellow-starts">
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="percentage-part">
                                                        <span>20%</span>
                                                    </div>
                                                </div>
                                                <div class="single-review">
                                                    <div class="progress-part">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="start-part">
                                                        <ul class="yellow-starts">
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="percentage-part">
                                                        <span>10%</span>
                                                    </div>
                                                </div>
                                                <div class="single-review">
                                                    <div class="progress-part">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="start-part">
                                                        <ul class="yellow-starts">
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="percentage-part">
                                                        <span>10%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

