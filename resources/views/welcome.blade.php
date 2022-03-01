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
                <a href="#" class="btn-get-started wow fadeInLeft">Get Started</a>
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
        <div class="row pb-4">
            <div class="col-lg-12" style="padding-top:50px;">
                <div class="section-title text-center wow bounceIn">
                    <h2>popular <span>categories</span></h2>
                </div><hr>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-1.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>web design</h4>
                        </div>
                        <span>03 course(S)</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-2.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>marketing</h4>
                        </div>
                        <span>02 course(S)</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-3.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>education</h4>
                        </div>
                        <span>10 course(S)</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-4.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>business</h4>
                        </div>
                        <span>04 course(S)</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-5.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>psychology</h4>
                        </div>
                        <span>04 course(S)</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-6.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>UI & UX design</h4>
                        </div>
                        <span>04 course(S)</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-7.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>technology</h4>
                        </div>
                        <span>04 course(S)</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 wow flipInX">
                <a href="#">
                    <div class="single-category-item">
                        <div class="category-image">
                            <img src="{{ asset('frontend/assets/img/category-icon-8.png') }}" alt="image">
                            <img src="{{ asset('frontend/assets/img/round-shape-3.png') }}" alt="shape" class="feature-round-shape-3">
                        </div>
                        <div class="category-title">
                            <h4>photography</h4>
                        </div>
                        <span>04 course(S)</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{--  <!-- About Section Starts -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>know about <span>courses</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="about-content-left">
                    <div class="about-single-content">
                        <div class="content-top">
                            <div class="content-icon template-icon green-icon" style="font-family: 'IcoFont' !important;">
                                <i class="icofont-document-folder"></i>
                            </div>
                            <h5>learn anything</h5>
                        </div>
                        <p>Explore a variety of fresh topics Podcasting better management inside workflows.</p>
                    </div>
                    <div class="about-single-content">
                        <div class="content-top">
                            <div class="content-icon template-icon yellow-icon">
                                <i class="icofont-layers"></i>
                            </div>
                            <h5>learn together</h5>
                        </div>
                        <p>Explore a variety of fresh topics Podcasting better management inside workflows.</p>
                    </div>
                    <div class="about-single-content">
                        <div class="content-top">
                            <div class="content-icon template-icon blue-icon">
                                <i class="icofont-hard-disk"></i>
                            </div>
                            <h5>online course</h5>
                        </div>
                        <p>Explore a variety of fresh topics Podcasting better management inside workflows.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="padding-top: 140px;">
                <div class="video-popup-area">
                    <div class="video-play-button">
                        <a href="#" class="button-video">
                            <i class="fa fa-play item-ripple"></i>
                        </a>
                    </div>
                    <img src="{{ asset('frontend/assets/img/about-image.png') }}" style="width:100%;" alt="image">
                    <div class="image-absolute">
                        <img src="{{ asset('frontend/assets/img/hero-small-image-4.png') }}" alt="image" class="top-absolute">
                        <img src="{{ asset('frontend/assets/img/hero-small-image-2.png') }}" alt="image" class="bottom-absolute">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content-right">
                    <div class="about-single-content">
                        <div class="content-top">
                            <div class="content-icon template-icon green-icon">
                                <i class="icofont-learn"></i>
                            </div>
                            <h5>bright mind &amp; idea</h5>
                        </div>
                        <p>Explore a variety of fresh topics Podcasting better management inside workflows.</p>
                    </div>
                    <div class="about-single-content">
                        <div class="content-top">
                            <div class="content-icon template-icon yellow-icon">
                                <i class="icofont-library"></i>
                            </div>
                            <h5>wherever you go</h5>
                        </div>
                        <p>Explore a variety of fresh topics Podcasting better management inside workflows.</p>
                    </div>
                    <div class="about-single-content">
                        <div class="content-top">
                            <div class="content-icon template-icon blue-icon">
                                <i class="icofont-certificate-alt-1"></i>
                            </div>
                            <h5>customer preference</h5>
                        </div>
                        <p>Explore a variety of fresh topics Podcasting better management inside workflows.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  --}}
<section class="about-area3 fix" style="padding-top:30px;">
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
                </div><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="cat_card">
                    <div class="card_container">
                        <div class="course_description">
                            <i class="fas fa-balance-scale course_icon"></i>
                            <h4 class="course_title">Financial Course</h4>
                            <p class="course_price">$ 15000 MMK</p>
                        </div>
                        <hr>
                        <div class="course_view">
                            <div class="desc mb-4">
                                <p class="course_play"><i class="fas fa-play-circle"></i>45 Lessons</p>
                                <p><i class="fas fa-user-circle"></i>23 Students</p>
                            </div>
                            <a href="#" class="btn_join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="cat_card">
                    <div class="card_container">
                        <div class="course_description">
                            <i class="fas fa-business-time course_icon"></i>
                            <h4 class="course_title">Business Course</h4>
                            <p class="course_price">$ 25000 MMK</p>
                        </div>
                        <hr>
                        <div class="course_view">
                            <div class="desc mb-4">
                                <p class="course_play"><i class="fas fa-play-circle"></i>40 Lessons</p>
                                <p><i class="fas fa-user-circle"></i>10 Students</p>
                            </div>
                            <a href="#" class="btn_join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="cat_card">
                    <div class="card_container">
                        <div class="course_description">
                            <i class="fas fa-ad course_icon"></i>
                            <h4 class="course_title">Marketing Course</h4>
                            <p class="course_price">$ 13000 MMK</p>
                        </div>
                        <hr>
                        <div class="course_view">
                            <div class="desc mb-4">
                                <p class="course_play"><i class="fas fa-play-circle"></i>17 Lessons</p>
                                <p><i class="fas fa-user-circle"></i>17 Students</p>
                            </div>
                            <a href="#" class="btn_join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="cat_card">
                    <div class="card_container">
                        <div class="course_description">
                            <i class="fas fa-code course_icon"></i>
                            <h4 class="course_title">Programming Course</h4>
                            <p class="course_price">$ 22000 MMK</p>
                        </div>
                        <hr>
                        <div class="course_view">
                            <div class="desc mb-4">
                                <p class="course_play"><i class="fas fa-play-circle"></i>31 Lessons</p>
                                <p><i class="fas fa-user-circle"></i>40 Students</p>
                            </div>
                            <a href="#" class="btn_join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="cat_card">
                    <div class="card_container">
                        <div class="course_description">
                            <i class="fas fa-palette course_icon"></i>
                            <h4 class="course_title">Drawing Course</h4>
                            <p class="course_price">$ 38000 MMK</p>
                        </div>
                        <hr>
                        <div class="course_view">
                            <div class="desc mb-4">
                                <p class="course_play"><i class="fas fa-play-circle"></i>48 Lessons</p>
                                <p><i class="fas fa-user-circle"></i>23 Students</p>
                            </div>
                            <a href="#" class="btn_join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="cat_card">
                    <div class="card_container">
                        <div class="course_description">
                            <i class="fas fa-compact-disc course_icon"></i>
                            <h4 class="course_title">Music Course</h4>
                            <p class="course_price">$ 57000 MMK</p>
                        </div>
                        <hr>
                        <div class="course_view">
                            <div class="desc mb-4">
                                <p class="course_play"><i class="fas fa-play-circle"></i>10 Lessons</p>
                                <p><i class="fas fa-user-circle"></i>23 Students</p>
                            </div>
                            <a href="#" class="btn_join">Join Now</a>
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
{{--  <section class="instructor-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 sty>top online <span>instructors</span></h2>
                </div><hr>
            </div>
        </div>
        <div class="row owl-carousel">
            <div class="col-lg-3 col-md-6">
                <div class="single-instructor">
                    <span class="instructor-sign">john</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-1.png') }}" alt="image"></a>
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

            <div class="col-lg-3 col-md-6">
                <div class="single-instructor diffrent-bg-color" style="background-color: #fffcf6 !important;">
                    <span class="instructor-sign">arya</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-3.png') }}" alt="image"></a>
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

            <div class="col-lg-3 col-md-6">
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
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-instructor diffrent-bg-color" style="background-color: #fffcf6 !important;">
                    <span class="instructor-sign">devid</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-4.png') }}" alt="image"></a>
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

            <div class="col-lg-3 col-md-6">
                <div class="single-instructor">
                    <span class="instructor-sign">john</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-1.png') }}" alt="image"></a>
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

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="instructor-button mt-2 text-center">
                    <a href="#" class="btn-instructor">see more instructor</a>
                </div>
            </div>
        </div>
    </div>
</section>  --}}

<section class="team-area section-padding40 fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center wow bounceIn">
                    <h2 sty>top online <span>instructors</span></h2>
                </div><hr>
            </div>
        </div>
        <div class="team-active wow fadeInUp">
            <div class="single-cat text-center">
                <div class="single-instructor">
                    <span class="instructor-sign">john</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-1.png') }}" alt="image"></a>
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
                    <span class="instructor-sign">arya</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-3.png') }}" alt="image"></a>
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
                    <span class="instructor-sign">devid</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-4.png') }}" alt="image"></a>
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
                    <span class="instructor-sign">john</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-1.png') }}" alt="image"></a>
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
                    <span class="instructor-sign">arya</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-3.png') }}" alt="image"></a>
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
                    <span class="instructor-sign">devid</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/instructor-4.png') }}" alt="image"></a>
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

            {{--  <div class="single-cat text-center">
                <div class="single-instructor">
                    <span class="instructor-sign">saiful</span>
                    <div class="instructor-image">
                        <a href="#"><img src="{{ asset('frontend/assets/img/gallery/team3.png') }}" alt="image"></a>
                    </div>
                    <div class="instructor-content">
                        <h4><a href="#">Mr. saiful</a></h4>
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
            </div>  --}}
        </div><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="instructor-button mt-2 text-center">
                    <a href="#" class="btn-instructor">see more instructor</a>
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



















{{--  <script>
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
</script>
<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })

    $('.responsive').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
</script>  --}}
