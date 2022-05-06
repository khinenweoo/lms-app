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
                <h2>course page</h2>
                <div class="breadcrumb-link mt-1">
                    <span><a href="#" style="color: #50be46;">home</a> / course page</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Section Starts -->
<section class="course_section">
    <div class="course-page-content">
        <div class="container">

            <div class="page-content-top">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="course-tab">
                            <ul>
                                <li class="active" data-filter="*">All courses</li>
                                <li data-filter=".collection">collection</li>
                                <li data-filter=".wishlist">wishlist</li>
                                <li data-filter=".archived">archived</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="#">
                                <input type="text" placeholder="Course Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item collection" >
                    <div class="course-single-item">
                        <div class="course-image">
                            <img src="{{ asset('frontend/assets/img/course-image-3.png') }}" alt="image">
                            <div class="course-video-part">
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="#">learning photoshop design beginner to pro</a></h4>
                            <p class="mt-2">Learn WordPress like a Professional! Start from the basics and go way to creating.</p>

                            <div class="signle-progressbar">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="progressbar-text">
                                            <h6>80%</h6>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div id="bar1" class="barfiller">
                                            <span class="fill" data-percentage="80" style="background: rgb(80, 190, 70); width: 157.2px; transition: width 1s ease-in-out 0s;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cotent-bottom">
                                <div class="content-left">
                                    <h6>leave a rating</h6>
                                </div>
                                <div class="content-right">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item archived" >
                    <div class="course-single-item" style="background-color: #fffcf6 !important;">
                        <div class="course-image">
                            <img src="{{ asset('frontend/assets/img/course-image-2.png') }}" alt="image">
                            <div class="course-video-part">
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="#">learning photoshop design beginner to pro</a></h4>
                            <p class="mt-2">Learn WordPress like a Professional! Start from the basics and go way to creating.</p>

                            <div class="signle-progressbar">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="progressbar-text">
                                            <h6>60%</h6>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div id="bar2" class="barfiller">
                                            <span class="fill" data-percentage="60" style="background: rgb(80, 190, 70); width: 157.2px; transition: width 1s ease-in-out 0s;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cotent-bottom">
                                <div class="content-left">
                                    <h6>leave a rating</h6>
                                </div>
                                <div class="content-right">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item wishlist" >
                    <div class="course-single-item">
                        <div class="course-image">
                            <img src="{{ asset('frontend/assets/img/course-image-6.png') }}" alt="image">
                            <div class="course-video-part">
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="#">learning photoshop design beginner to pro</a></h4>
                            <p class="mt-2">Learn WordPress like a Professional! Start from the basics and go way to creating.</p>

                            <div class="signle-progressbar">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="progressbar-text">
                                            <h6>70%</h6>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div id="bar3" class="barfiller">
                                            <span class="fill" data-percentage="70" style="background: rgb(80, 190, 70); width: 183.4px; transition: width 1s ease-in-out 0s;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cotent-bottom">
                                <div class="content-left">
                                    <h6>leave a rating</h6>
                                </div>
                                <div class="content-right">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item archived" >
                    <div class="course-single-item" style="background-color: #fffcf6 !important;">
                        <div class="course-image">
                            <img src="{{ asset('frontend/assets/img/course-image-4.png') }}" alt="image">
                            <div class="course-video-part">
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="#">learning photoshop design beginner to pro</a></h4>
                            <p class="mt-2">Learn WordPress like a Professional! Start from the basics and go way to creating.</p>

                            <div class="signle-progressbar">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="progressbar-text">
                                            <h6>50%</h6>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div id="bar4" class="barfiller">
                                            <span class="fill" data-percentage="50" style="background: rgb(80, 190, 70); width: 131px; transition: width 1s ease-in-out 0s;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cotent-bottom">
                                <div class="content-left">
                                    <h6>leave a rating</h6>
                                </div>
                                <div class="content-right">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item collection" >
                    <div class="course-single-item">
                        <div class="course-image">
                            <img src="{{ asset('frontend/assets/img/course-image-5.png') }}" alt="image">
                            <div class="course-video-part">
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="#">learning photoshop design beginner to pro</a></h4>
                            <p class="mt-2">Learn WordPress like a Professional! Start from the basics and go way to creating.</p>

                            <div class="signle-progressbar">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="progressbar-text">
                                            <h6>70%</h6>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div id="bar5" class="barfiller">
                                            <span class="fill" data-percentage="70" style="background: rgb(80, 190, 70); width: 183.4px; transition: width 1s ease-in-out 0s;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cotent-bottom">
                                <div class="content-left">
                                    <h6>leave a rating</h6>
                                </div>
                                <div class="content-right">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item wishlist" >
                    <div class="course-single-item" style="background-color: #fffcf6;">
                        <div class="course-image">
                            <img src="{{ asset('frontend/assets/img/course-image-1.png') }}" alt="image">
                            <div class="course-video-part">
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=8AGgbIQyqR8" class="button-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="#">learning photoshop design beginner to pro</a></h4>
                            <p class="mt-2">Learn WordPress like a Professional! Start from the basics and go way to creating.</p>

                            <div class="signle-progressbar">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="progressbar-text">
                                            <h6>60%</h6>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div id="bar6" class="barfiller">
                                            <span class="fill" data-percentage="60" style="background: rgb(80, 190, 70); width: 157.2px; transition: width 1s ease-in-out 0s;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cotent-bottom">
                                <div class="content-left">
                                    <h6>leave a rating</h6>
                                </div>
                                <div class="content-right">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="template-pagination">
                        <ul>
                            <li class="pagination-arrow"><a href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li class="pagination-arrow"><a href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
