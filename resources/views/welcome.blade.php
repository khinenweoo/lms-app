@extends('layouts.frontbase')

@section('content')

<!-- Baner Section Starts -->
<section class="herosect" id="hero_section">
    <div class="herosect_container container">
        <div class="row">
            <div class="col-lg-6" style="padding-top:150px;">
                <div class="section-title text-center wow fadeInLeft">
                    <h2><span>Title Here</span></h2>
                </div>
                <p class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#" class="btn btn3 wow fadeInLeft">Get Started</a>
            </div>
            <div class="col-lg-6 wow fadeInRight" style="padding-top:120px;">
                <div class="video-wrapper">
                    <div class="video-container" id="video-container">
                            <video id="video" class="hero_video" autoplay loop>
                                <source src="{{ asset('frontend/assets/videos/hero_video.mp4') }}" type="video/mp4">
                            </video>
                        <div class="play-button-wrapper">
                            <div title="Play video" class="play-gif" id="circle-play-b">
                                <!-- SVG Play Button -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Section Starts -->
<section class="category-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center wow bounceIn">
                    <h2>popular <span>categories</span></h2>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/c1.jpg') }}" class="cat-img" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="cat-content">
                            <div class="category-title">
                                <h4>Literature</h4>
                            </div>
                            <span>03 course(S)</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/c2.jpg') }}" class="cat-img" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="cat-content">
                            <div class="category-title">
                                <h4>IT & Computer Science</h4>
                            </div>
                            <span>03 course(S)</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/c3.jpg') }}" class="cat-img" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="cat-content">
                            <div class="category-title">
                                <h4>Study Skills</h4>
                            </div>
                            <span>03 course(S)</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/c4.jpg') }}" class="cat-img" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="cat-content">
                            <div class="category-title">
                                <h4>Arts & Photography</h4>
                            </div>
                            <span>03 course(S)</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/c5.jpg') }}" class="cat-img" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="cat-content">
                            <div class="category-title">
                                <h4>Healthcare & Medicine</h4>
                            </div>
                            <span>03 course(S)</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/c6.jpg') }}" class="cat-img" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="cat-content">
                            <div class="category-title">
                                <h4>Science & Engineering</h4>
                            </div>
                            <span>03 course(S)</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/c7.jpg') }}" class="cat-img" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="cat-content">
                            <div class="category-title">
                                <h4>Business Management</h4>
                            </div>
                            <span>03 course(S)</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
    <!--? About Area-1 Start -->
    <section class="about-area1 fix pt-10">
        <div class="support-wrapper align-items-center">
            <div class="left-content1">
                <div class="about-icon">
                    <img src="{{ asset('frontend/assets/img/icon/about.svg') }}" alt="">
                </div>
                <!-- section tittle -->
                <div class="section-tittle section-tittle2 mb-55">
                    <div class="front-text">
                        <h2 class="">Learn new skills online with top educators</h2>
                        <p>The automated process all your website tasks. Discover tools and
                            techniques to engage effectively with vulnerable children and young
                        people.</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('frontend/assets/img/icon/right-icon.svg') }}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Techniques to engage effectively with vulnerable children and young people.</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('frontend/assets/img/icon/right-icon.svg') }}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Join millions of people from around the world  learning together.</p>
                    </div>
                </div>

                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('frontend/assets/img/icon/right-icon.svg') }}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
                    </div>
                </div>
            </div>
            <div class="right-content1">
                <!-- img -->
                <div class="right-img">
                    <img src="{{ asset('frontend/assets/img/gallery/about.png') }}" alt="">

                    <div class="video-icon" >
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
<section class="about-area3 fix">
    <div class="support-wrapper align-items-center">
        <div class="right-content3 wow slideInLeft">
            <!-- img -->
            <div class="right-img">
                <img src="{{ asset('frontend/assets/img/gallery/about3.png') }}" alt="">
            </div>
        </div>
        <div class="left-content3 wow slideInRight">
            <!-- section tittle -->
            <div class="section-tittle section-tittle2 mb-20">
                <div class="front-text">
                    <h2 class="">Learner outcomes on courses you will take</h2>
                </div>
            </div>
            <div class="single-features">
                <div class="features-icon">
                    <img src="{{ asset('frontend/assets/img/icon/right-icon.svg') }}" alt="">
                </div>
                <div class="features-caption">
                    <p>Techniques to engage effectively with vulnerable children and young people.</p>
                </div>
            </div>
            <div class="single-features">
                <div class="features-icon">
                    <img src="{{ asset('frontend/assets/img/icon/right-icon.svg') }}" alt="">
                </div>
                <div class="features-caption">
                    <p>Join millions of people from around the world
                    learning together.</p>
                </div>
            </div>
            <div class="single-features">
                <div class="features-icon">
                    <img src="{{ asset('frontend/assets/img/icon/right-icon.svg') }}" alt="">
                </div>
                <div class="features-caption">
                    <p>Join millions of people from around the world learning together.
                    Online learning is as easy and natural.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Section Starts -->
<section class="course_section pt-3" id="course_section">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="section-title text-center wow bounceIn">
                    <h2>popular <span>courses</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="course_card">
                    <div class="card_img">
                        <img src="{{ asset('frontend/assets/img/c1.jpg') }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="card_container">
                        <div class="course_description">
                            <h4 class="course_cat">Economics</h4>
                            <h3 class="course_title">Financial Course</h3>
                        </div>
                        
                        <div class="course_view">
                            <div class="desc" style="width:100%;">
                                <p class="course_play"><i class="fas fa-play-circle"></i>45 Lessons</p>
                                <p class="course_stud"><i class="fas fa-user-circle"></i>23 Students</p>
                            </div>
                            <hr>
                            <div class="desc mb-2">
                                @if(isset($ratings))
                                <p class="course_rating"><i class="fas fa-star"></i> 0 Ratings</p>
                                @else
                                <p class="course_rating">No Rating (0 Reviews)</p>
                                
                                @endif
                                <p class="course_price">42000 MMK</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="course_card">
                    <div class="card_img">
                        <img src="{{ asset('frontend/assets/img/c1.jpg') }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="card_container">
                        <div class="course_description">
                            <h4 class="course_cat">Art</h4>
                            <h3 class="course_title">Business Course</h3>
                        </div>
                        <div class="course_view">
                            <div class="desc" style="width:100%;">
                                <p class="course_play"><i class="fas fa-play-circle"></i>40 Lessons</p>
                                <p class="course_stud"><i class="fas fa-user-circle"></i>10 Students</p>
                            </div>
                            <hr>
                            <div class="desc mb-2">
                                <p class="course_rating"><i class="fas fa-star"></i> 0 Ratings</p>
                                <p class="course_price">42000 MMK</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="course_card">
                    <div class="card_img">
                        <img src="{{ asset('frontend/assets/img/c1.jpg') }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="card_container">
                        <div class="course_description">
                            <h4 class="course_cat">Analysis</h4>
                            <h3 class="course_title">Marketing Course</h3>
                        </div>
                        <div class="course_view">
                            <div class="desc" >
                                <p class="course_play"><i class="fas fa-play-circle"></i>17 Lessons</p>
                                <p class="course_stud"><i class="fas fa-user-circle"></i>17 Students</p>
                            </div>
                            <hr>
                            <div class="desc mb-2">
                                <p class="course_rating"><i class="fas fa-star"></i> 0 Ratings</p>
                                <p class="course_price">80000 MMK</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="course_card">
                    <div class="card_img">
                        <img src="{{ asset('frontend/assets/img/c1.jpg') }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="card_container">
                        <div class="course_description">
                            <h4 class="course_cat">Engineering</h4>
                            <h3 class="course_title">Programming Course</h3>
                        </div>
                        <div class="course_view">
                            <div class="desc">
                                <p class="course_play"><i class="fas fa-play-circle"></i>31 Lessons</p>
                                <p class="course_stud"><i class="fas fa-user-circle"></i>40 Students</p>
                            </div>
                            <hr>
                            <div class="desc mb-2">
                                <p class="course_rating"><i class="fas fa-star"></i> 0 Ratings</p>
                                <p class="course_price">42000 MMK</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="course_card">
                    <div class="card_img">
                        <img src="{{ asset('frontend/assets/img/c2.png') }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="card_container">
                        <div class="course_description">
                            <h4 class="course_cat">Design</h4>
                            <h3 class="course_title">Drawing Course</h3>
                        </div>
                        <div class="course_view">
                            <div class="desc">
                                <p class="course_play"><i class="fas fa-play-circle"></i>48 Lessons</p>
                                <p class="course_stud"><i class="fas fa-user-circle"></i>23 Students</p>
                            </div>
                            <hr>
                            <div class="desc mb-2">
                                <p class="course_rating"><i class="fas fa-star"></i> 0 Ratings</p>
                                <p class="course_price">42000 MMK</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="course_card">
                    <div class="card_img">
                        <img src="{{ asset('frontend/assets/img/c1.jpg') }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="card_container">
                        <div class="course_description">
                            <h4 class="course_cat">Music</h4>
                            <h3 class="course_title">Music Course</h3>
                        </div>
                        <div class="course_view">
                            <div class="desc">
                                <p class="course_play"><i class="fas fa-play-circle"></i>10 Lessons</p>
                                <p class="course_stud"><i class="fas fa-user-circle"></i>23 Students</p>
                            </div>
                            <hr>
                            <div class="desc mb-2">
                                <p class="course_rating"><i class="fas fa-star"></i> 0 Ratings</p>
                                <p class="course_price">Free</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CounterUp Section Starts -->
<section class="counterup-section">
    <div class="container">
        <div class="counterup-content common-section pb-3" style="background-image: url({{asset('../frontend/assets/img/counter-bg.jpg')}}); background-repeat: no-repeat; position: relative; box-shadow: 0 20px 40px #eaeaea; z-index: 1; padding-left: 40px; padding-top:40px;">
            <div class="counter-shape">
                <img src="{{ asset('frontend/assets/img/round-shape-2.png') }}" alt="shape" class="round-shape-2" style="position: absolute; top: 40%; left: 20px;">
                <img src="{{ asset('frontend/assets/img/plus-sign.png') }}" alt="shape" class="plus-sign item-rotate" style="position: absolute; bottom: 10px; left: 50%;">
                <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="round-shape-3" style="position: absolute; top: 40%; right: 20px;">
            </div>
            <div class="row align-items-center">

                <div class="col-xl-3 col-sm-6">
                    <div class="single-counterup" style="align-items: center; display: flex; margin-bottom: 30px;">
                        <div class="single-counterup-image" style="margin-right: 10px;">
                            <img src="{{ asset('frontend/assets/img/counter-image-1.png') }}" alt="image" style="max-height: 80px;">
                        </div>
                        <div class="single-counterup-content">
                            <div class="counter-number" style="display: flex;">
                                <h3 class="title counter" style="color: #374a5e; font-size: 30px; font-weight: 700;">2000</h3>
                                <h3 class="title" style="color: #374a5e; font-size: 30px; font-weight: 700;">+</h3>
                            </div>
                            <span style="text-transform: capitalize;">expert instructors</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="single-counterup" style="align-items: center; display: flex; margin-bottom: 30px;">
                        <div class="single-counterup-image" style="margin-right: 10px;">
                            <img src="{{ asset('frontend/assets/img/category-icon-3.png') }}" alt="image" style="max-height: 80px;">
                        </div>
                        <div class="single-counterup-content">
                            <div class="counter-number" style="display: flex;">
                                <h3 class="title counter" style="color: #374a5e; font-size: 30px; font-weight: 700;">7000</h3>
                                <h3 class="title" style="color: #374a5e; font-size: 30px; font-weight: 700;">+</h3>
                            </div>
                            <span style="text-transform: capitalize;">students enrolled</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="single-counterup" style="align-items: center; display: flex; margin-bottom: 30px;">
                        <div class="single-counterup-image"  style="margin-right: 10px;">
                            <img src="{{ asset('frontend/assets/img/counter-image-2.png') }}" alt="image" style="max-height: 80px;">
                        </div>
                        <div class="single-counterup-content">
                            <div class="counter-number" style="display: flex;">
                                <h3 class="title counter" style="color: #374a5e; font-size: 30px; font-weight: 700;">10</h3>
                                <h3 class="title" style="color: #374a5e; font-size: 30px; font-weight: 700;">+</h3>
                            </div>
                            <span style="text-transform: capitalize;">experience years</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="single-counterup" style="align-items: center; display: flex; margin-bottom: 30px;">
                        <div class="single-counterup-image" style="margin-right: 10px;">
                            <img src="{{ asset('frontend/assets/img/category-icon-6.png') }}" alt="image" style="max-height: 80px;">
                        </div>
                        <div class="single-counterup-content">
                            <div class="counter-number" style="display: flex;">
                                <h3 class="title counter" style="color: #374a5e; font-size: 30px; font-weight: 700;">50</h3>
                                <h3 class="title" style="color: #374a5e; font-size: 30px; font-weight: 700;">+</h3>
                            </div>
                            <span style="text-transform: capitalize;">total course</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Instructors Section Starts -->

<section class="team-area section-padding40 fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center wow bounceIn">
                    <h2>top online <span>instructors</span></h2>
                </div>
            </div>
        </div>
        <div class="team-active wow fadeInUp">
            <div class="single-cat text-center">
                <div class="single-instructor">
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-1.jpg') }}" alt="image"></a>
                    </div>
                    <div class="instructor-content">
                        <h4><a href="#">john doe</a></h4>
                        <span>founder CEO</span>
                    </div>
                    <div class="hover-state">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-cat text-center">
                <div class="single-instructor diffrent-bg-color" style="background-color: #fffcf6 !important;">
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-2.jpg') }}" alt="image"></a>
                    </div>
                    <div class="instructor-content">
                        <h4><a href="#">arya stark</a></h4>
                        <span>web teacher</span>
                    </div>
                    <div class="hover-state">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-cat text-center">
                <div class="single-instructor">
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-3.jpg') }}" alt="image"></a>
                    </div>
                    <div class="instructor-content">
                        <h4><a href="#">chris wokes</a></h4>
                        <span>UI UX teacher</span>
                    </div>
                    <div class="hover-state">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-cat text-center">
                <div class="single-instructor diffrent-bg-color" style="background-color: #fffcf6 !important;">
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-4.jpg') }}" alt="image"></a>
                    </div>
                    <div class="instructor-content">
                        <h4><a href="#">devid walter</a></h4>
                        <span>marketing teacher</span>
                    </div>
                    <div class="hover-state">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-cat text-center">
                <div class="single-instructor">
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-5.jpg') }}" alt="image"></a>
                    </div>
                    <div class="instructor-content">
                        <h4><a href="#">john doe</a></h4>
                        <span>founder CEO</span>
                    </div>
                    <div class="hover-state">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="instructor-button mt-2 text-center">
                    <a href="#" class="btn btn3">View all Instructor</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
            const video = document.getElementById("video");
            const circlePlayButton = document.getElementById("circle-play-b");

            function togglePlay() {
                if (video.paused || video.ended) {
                    video.play();
                } else {
                    video.pause();
                }
            }

            circlePlayButton.addEventListener("click", togglePlay);
            video.addEventListener("playing", function () {
                circlePlayButton.style.opacity = 0;
            });
            video.addEventListener("pause", function () {
                circlePlayButton.style.opacity = 1;
            });

            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
</script>
@endsection