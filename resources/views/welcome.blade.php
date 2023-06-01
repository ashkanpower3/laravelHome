@extends('layout')
@section('body')

    <body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->



    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header class="header__transparent">
        <div class="header__area pl-220 pr-220 pt-30">
            <div class="main-header" id="header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-6">
                            <div class="logo-area d-flex align-items-center">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="/assets/img/logo/logo.png" alt="logo">
                                    </a>
                                </div>
                                <div class="header-cat-menu ml-40 d-none d-md-block">
                                    <nav>
                                        <ul>
                                            <li><a href="course-grid.html"> Categorie <span><i
                                                            class="arrow_carrot-down"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li><a href="course-grid.html">Bangla Medium</a></li>
                                                    <li><a href="course-grid.html">English Medium</a></li>
                                                    <li><a href="course-grid.html">Video Edition</a></li>
                                                    <li><a href="course-grid.html">Logo Design</a></li>
                                                    <li><a href="course-grid.html">Francy Medium</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-xxl-9 col-xl-9 col-lg-7 col-md-6 col-6 d-flex align-items-center justify-content-end">
                            <div class="main-menu d-flex justify-content-end mr-15">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="index.html">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="about.html">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="checkout.html">Check Out</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="sign-in.html">Sign In</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="instructor.html">Instructor</a>
                                            <ul class="submenu">
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="instructor-profile.html">Instructor Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="course-grid.html">Course</a>
                                            <ul class="submenu">
                                                <li><a href="course-grid.html">Course Grid</a></li>
                                                <li><a href="course-list.html">Course List</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog Sidebar</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right d-md-flex align-items-center">
                                <div class="header__search d-none d-lg-block">
                                    <form action="#" method="get">
                                        <div class="header__search-input">
                                            <button class="header__search-btn">
                                                <i class="fa-regular fa-magnifying-glass"></i>
                                            </button>
                                            <input type="text" name="search" placeholder="Search Courses">
                                        </div>
                                    </form>
                                </div>
                                <div class="header-meta">
                                    <ul>
                                        <li><a href="sign-in.html" class="d-none d-md-block"><i
                                                    class="fi fi-rr-user"></i></a></li>
                                        <li><a href="cart.html" class="d-none d-md-block"><i
                                                    class="	 fi fi-rr-shopping-bag"></i></a></li>
                                        <li><a href="#" class="tp-menu-toggle d-xl-none"><i class="icon_ul"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <div class="tp-sidebar-menu">
        <button class="sidebar-close"><i class="icon_close"></i></button>
        <div class="side-logo mb-30">
            <a href="index.html"><img src="/assets/img/logo/logo-black.png" alt="logo"></a>
        </div>
        <div class="mobile-menu"></div>
        <div class="sidebar-info">
            <h4 class="mb-15">Contact Info</h4>
            <ul class="side_circle">
                <li>27 Division St, New York</li>
                <li><a href="tel:123456789">+1 800 123 456 78</a></li>
                <li><a href="mailto:epora@example.com">epora@example.com</a></li>
            </ul>
            <div class="side-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>

    <main>

        <!-- banner-area -->
        <section class="banner-area fix p-relative">
            <div class="banner-bg" data-background="/assets/img/banner/banner-01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8">
                            <div class="hero-content">
                                <span>Learn New Skills & Popular Courses</span>
                                <h2 class="hero-title mb-35">For Every Student, Every <i>Classroom</i>.</h2>
                                <p>Dramatically supply transparent deliverables before backward<br>comp internal or
                                    "organic"
                                    sources. Competently leverage other.</p>
                                <div class="tp-banner-btn">
                                    <a href="course-list.html" class="tp-btn">Explore Courses</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-info d-none">
                                <ul>
                                    <li><span>235K</span>Worldwide Students</li>
                                    <li><span>3.5K</span>Free Pro Courses</li>
                                    <li><span>4.7<i class="fi fi-rr-star "></i></span>Worldwide Review</li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-shape d-none d-lg-block">
                            <img src="/assets/img/banner/banner-img-1.png" alt="banner-shape" class="b-shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- feature-area -->
        <section class="tp-feature-area grey-bg pt-115 pb-90 pl-205 pr-205 bg-bottom"
                 data-background="/assets/img/bg/shape-bg-1.png">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-60">
                            <span class="tp-sub-title mb-20">What We Offer</span>
                            <h2 class="tp-section-title">For Your Future Learning.</h2>
                        </div>
                    </div>
                </div>
                <div class="tp-feature-cn">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-paper-plane"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Online Courses</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for
                                        change my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-user"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Expert Trainer</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for
                                        change my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-document"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Get Certificate</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for
                                        change my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="tpfea mb-30">
                                <div class="tpfea__icon mb-25">
                                    <i class="fi fi-rr-calendar"></i>
                                </div>
                                <div class="tpfea__text">
                                    <h5 class="tpfea__title mb-20">Life Time Access</h5>
                                    <p>Interactively provide access world class materials for unique catalysts for
                                        change my ocardinat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area-end -->

        <!-- about-area -->
        <section class="tp-about-area pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6">
                        <div class="tp-about-img p-relative pb-30 ml-10">
                            <img src="/assets/img/about/about-img.png" alt="about-img">
                            <div class="tp-about-line-shape d-none d-md-block">
                                <img src="/assets/img/about/about-shape-03.png" alt="about-shape" class="tp-aline-one">
                                <img src="/assets/img/about/about-shape-04.png" alt="about-shape" class="tp-aline-two">
                                <img src="/assets/img/about/about-shape-05.png" alt="about-shape"
                                     class="tp-aline-three">
                            </div>
                            <div class="tp-about-shape  d-none d-xl-block">
                                <img src="/assets/img/about/about-shape-01.png" alt="about-shape" class="a-shape-one">
                                <img src="/assets/img/about/about-shape-02.png" alt="about-shape" class="a-shape-two">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6">
                        <div class="tp-about-content pb-30 ml-80">
                            <div class="section-title mb-55">
                                <span class="tp-sub-title mb-20">About Our Courses</span>
                                <h2 class="tp-section-title mb-15">Explore Thousands of Creative Classes.</h2>
                                <p>Dramatically supply transparent deliverables beforese backward comp internal or
                                    "organic" sources. Comp transparent leverage other.</p>
                            </div>
                            <div class="about-btn">
                                <a href="about.html" class="tp-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- catrgory-area -->
        <section class="tp-category-area bg-bottom grey-bg pt-110 pb-80"
                 data-background="/assets/img/bg/shape-bg-1.png">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title">Top Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-01.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">Design Deve</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-02.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">Development</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-03.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">Marketing</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-04.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">It & Software</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-05.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">Videography</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-06.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">Business Sys</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-07.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">Photography</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-cat-item mb-40 d-flex align-items-center">
                            <div class="tp-category-icon mr-15">
                                <img src="/assets/img/category/category-08.png" alt="category-img">
                            </div>
                            <h4 class="tp-category-title"><a href="course-grid.html">Musical Intru</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- catrgory-area-end -->

        <!-- course-area -->
        <section class="course-area pt-115 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title mb-20">Explore Popular Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    @if(count($courses) == 0)
                        <h2 class="tp-sub-title mb-25" style="text-align: center;">{{"No Course yet"}}</h2>
                    @endif
                    @foreach($courses as $course)

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="tpcourse mb-40">
                                <div class="tpcourse__thumb p-relative w-img fix">
{{--                                    <a href="course-details.html"><img src="/assets/img/course/course-thumb-01.jpg"--}}
                                    <a href="course-details.html"><img src="{{$course->image}}"
                                                                       alt="course-thumb"></a>
                                    <div class="tpcourse__tag">
                                        <a href="course-details.html"><i class="fi fi-rr-heart"></i></a>
                                    </div>
                                </div>
                                <div class="tpcourse__content">
                                    <div class="tpcourse__avatar d-flex align-items-center mb-20">
                                        <img src="/assets/img/icon/course-avata-01.png" alt="course-avata">
                                        <h4 class="tpcourse__title"><a href="/course/{{$course->slug}}">{{$course->title}}</a>
                                        </h4>
                                    </div>
                                    <div class="tpcourse__meta pb-15 mb-20">
                                        <ul class="d-flex align-items-center">
                                            <li><img src="/assets/img/icon/c-meta-01.png" alt="meta-icon"> <span>35 Classes</span>
                                            </li>
                                            <li><img src="/assets/img/icon/c-meta-02.png" alt="meta-icon"> <span>291 Students</span>
                                            </li>
                                            <li><img src="/assets/img/icon/c-meta-03.png" alt="meta-icon">
                                                <span>4.7</span></li>
                                        </ul>
                                    </div>
                                    <div class="tpcourse__category d-flex align-items-center justify-content-between">
                                        <ul class="tpcourse__price-list d-flex align-items-center">
                                            <li><a href="course-details.html">{{$course->category->name}}</a></li>

                                        </ul>
                                        <h5 class="tpcourse__course-price">$29.99</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{$courses->links()}}
                </div>
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="course-btn mt-20"><a class="tp-btn" href="course-details.html">Browse All
                                Courses</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course-area-end -->


        <!-- choose-area -->
        <section class="choose-area pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="tp-choose-img p-relative mb-30 ml-25">
                            <img src="/assets/img/bg/choose-img-01.jpg" alt="choose-img">
                            <div class="tpchoose-img-text d-none d-md-block">
                                <ul>
                                    <li>
                                        <i>23+</i>
                                        <p>Years Experiences</p>
                                    </li>
                                    <li>
                                        <i class="fa-light fa-check"></i>
                                        <p>Fully Safe & Secure</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="tp-choose-content mb-30">
                            <div class="section-title mb-25">
                                <span class="tp-sub-title mb-25">Why Choose Us</span>
                                <h2 class="tp-section-title mb-20">Why You Choose Our<br>E-Pora Online learning</h2>
                                <p>Dramatically supply transparent deliverables before & can backward comp internal or
                                    "organic" sources.</p>
                            </div>
                            <div class="tp-choose-list mb-35">
                                <ul>
                                    <li><i class="fa-light fa-check"></i>Increasing Your Learning Skills</li>
                                    <li><i class="fa-light fa-check"></i>High Quality Video & Audio Classes</li>
                                    <li><i class="fa-light fa-check"></i>Finish Your Course, Get Certificate</li>
                                </ul>
                            </div>
                            <div class="choose-btn">
                                <a href="about.html" class="tp-btn">Explore Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-area-end -->

        <!-- counter-area -->
        <section class="tp-counter-area bg-bottom grey-bg pt-120 pb-60" data-background="/assets/img/bg/shape-bg-1.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-user"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">276</span>K</h4>
                                <p>Worldwide Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-document"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">23</span>+</h4>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-apps"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">735</span>+</h4>
                                <p>Professional Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-60 text-center">
                            <div class="counter-item__icon mb-25">
                                <i class="fi fi-rr-star"></i>
                            </div>
                            <div class="counter-item__content">
                                <h4 class="counter-item__title"><span class="counter">4.7</span>K+</h4>
                                <p>Beautiful Review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->

        <!-- instructor-area -->
        <section class="instructor-area pt-110 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-7 col-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title mb-20">Our Expert Instructor</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-5 col-6">
                        <div class="tp-instruc-arrow d-flex justify-content-md-end"></div>
                    </div>
                </div>
                <div class="intruc-active mb-15 tp-slide-space">
                    <div class="tp-instruc-item">
                        <div class="tp-instructor text-center p-relative mb-30">
                            <div class="tp-instructor__thumb mb-25">
                                <img src="/assets/img/bg/instructor-bg-01.jpg" alt="instructor-profile">
                            </div>
                            <div class="tp-instructor__content">
                                <h4 class="tp-instructor__title mb-20"><a href="instructor-profile.html">Devon Lane</a>
                                </h4>
                                <span>Instructor</span>
                                <div class="tp-instructor__social">
                                    <ul>
                                        <li><a href="instructor-profile.html"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-instruc-item">
                        <div class="tp-instructor text-center p-relative mb-30">
                            <div class="tp-instructor__thumb mb-20">
                                <img src="/assets/img/bg/instructor-bg-02.jpg" alt="instructor-profile">
                            </div>
                            <div class="tp-instructor__content">
                                <h4 class="tp-instructor__title  mb-20"><a href="instructor-profile.html">Jane
                                        Cooper</a></h4>
                                <span>Instructor</span>
                                <div class="tp-instructor__social">
                                    <ul>
                                        <li><a href="instructor-profile.html"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-instruc-item">
                        <div class="tp-instructor text-center p-relative mb-30">
                            <div class="tp-instructor__thumb mb-20">
                                <img src="/assets/img/bg/instructor-bg-03.jpg" alt="instructor-profile">
                            </div>
                            <div class="tp-instructor__content">
                                <h4 class="tp-instructor__title mb-20"><a href="instructor-profile.html">Courtney
                                        Henry</a></h4>
                                <span>Instructor</span>
                                <div class="tp-instructor__social">
                                    <ul>
                                        <li><a href="instructor-profile.html"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-instruc-item">
                        <div class="tp-instructor text-center p-relative mb-30">
                            <div class="tp-instructor__thumb mb-20">
                                <img src="/assets/img/bg/instructor-bg-04.jpg" alt="instructor-profile">
                            </div>
                            <div class="tp-instructor__content">
                                <h4 class="tp-instructor__title mb-20"><a href="instructor-profile.html">Devon Lane</a>
                                </h4>
                                <span>Instructor</span>
                                <div class="tp-instructor__social">
                                    <ul>
                                        <li><a href="instructor-profile.html"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="instructor-btn text-center">
                            <a class="tp-btn" href="instructor.html">All Instructor</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instructor-area-enfd -->

        <!-- suitable-area -->
        <section class="suitable-area pb-90">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-60">
                            <span class="tp-sub-title mb-25">Join With Us</span>
                            <h2 class="tp-section-title">Which One is Suitable For You?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-suit mb-30 p-relative">
                            <div class="tp-suit__content">
                                <h4 class="tp-suit__title">Do you want to <span>Learn</span> here?</h4>
                                <p>Dramatically supply transpa deliverables before & you.</p>
                                <div class="tp-suit__btn pt-5">
                                    <a href="contact.html" class="tp-border-btn">Join Now</a>
                                </div>
                            </div>
                            <div class="tp-suit__img">
                                <img src="/assets/img/bg/suit-bg-01.png" alt="suitable-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-suit mb-30 p-relative">
                            <div class="tp-suit__content">
                                <h4 class="tp-suit__title">Do you want to <span>Teach</span> here?</h4>
                                <p>Dramatically supply transpa deliverables before & you.</p>
                                <div class="tp-suit__btn pt-5">
                                    <a href="contact.html" class="tp-border-btn">Join Now</a>
                                </div>
                            </div>
                            <div class="tp-suit__tech">
                                <img src="/assets/img/bg/suit-bg-02.png" alt="suitable-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- suitable-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area bg-bottom pt-110 pb-90 " data-background="/assets/img/bg/shape-bg-1.png">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8 col-12">
                        <div class="section-title mb-65">
                            <h2 class="tp-section-title mb-20">Our Expert Instructor</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4 col-6">
                        <div class="tp-section-arrow d-flex justify-content-md-end mb-40"></div>
                    </div>
                </div>
                <div class="testimonial-active tp-slide-space">
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="/assets/img/icon/test-ava-01.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverab before & you backward comp internal or
                                    "organic" sources.</p>
                                <h3 class="tp-testi__title">Courtney Henry</h3>
                                <i>Sr. UX/UI Designer</i>
                            </div>
                        </div>
                    </div>
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="/assets/img/icon/test-ava-02.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverab before & you backward comp internal or
                                    "organic" sources.</p>
                                <h3 class="tp-testi__title">Devon Lane</h3>
                                <i>Software Engineer</i>
                            </div>
                        </div>
                    </div>
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="/assets/img/icon/test-ava-03.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverab before & you backward comp internal or
                                    "organic" sources.</p>
                                <h3 class="tp-testi__title">Jenny Wilson</h3>
                                <i>Content Writter</i>
                            </div>
                        </div>
                    </div>
                    <div class="tp-test-slide-item">
                        <div class="tp-testi p-relative mt-65">
                            <div class="tp-testi__avatar">
                                <img src="/assets/img/icon/test-ava-03.png" alt="testi-avatar">
                            </div>
                            <div class="tp-testi__rating pb-5">
                                <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-ss-star"></i></li>
                                    <li><i class="fi fi-rs-star"></i></li>
                                </ul>
                            </div>
                            <div class="tp-testi__avainfo">
                                <p>Dramatically supply transparent deliverables before & can backward comp internal or
                                    "organic" sources.</p>
                                <h3 class="tp-testi__title">Jenny Wilson</h3>
                                <i>Content Writter</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-110 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-65 text-center">
                            <h2 class="tp-section-title mb-20">Latest Blogs & News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-blog mb-60">
                            <div class="tp-blog__thumb p-relative">
                                <div class="tp-blog__timg fix">
                                    <a href="blog-details.html"><img src="/assets/img/bg/blog-img-01.jpg"
                                                                     alt="blog-img"></a>
                                </div>
                                <div class="tp-blog__icon"><a href="blog-details.html"><i
                                            class="fi fi-rs-angle-right"></i></a></div>
                            </div>
                            <div class="tp-blog__content">
                                <div class="tp-blog__meta mb-10">
                                    <a href="blog-details.html">Education</a> <span>-</span>
                                    <a href="blog-details.html">Jan 21 , 2022</a>
                                </div>
                                <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Educational Technology &
                                        Mobile Learning</a></h3>
                                <p>Dramatically supply transparent deliverab before & you backward comp internal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-blog mb-60">
                            <div class="tp-blog__thumb p-relative">
                                <div class="tp-blog__timg fix">
                                    <a href="blog-details.html"><img src="/assets/img/bg/blog-img-02.jpg"
                                                                     alt="blog-img"></a>
                                </div>
                                <div class="tp-blog__icon"><a href="#"><i class="fi fi-rs-angle-right"></i></a></div>
                            </div>
                            <div class="tp-blog__content">
                                <div class="tp-blog__meta mb-10">
                                    <a href="blog-details.html">Education</a> <span>-</span>
                                    <a href="blog-details.html">Jan 21 , 2022</a>
                                </div>
                                <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Computer Technology & Fild
                                        Work Experiences</a></h3>
                                <p>Dramatically supply transparent deliverab before & you backward comp internal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-blog mb-60">
                            <div class="tp-blog__thumb p-relative">
                                <div class="tp-blog__timg fix">
                                    <a href="blog-details.html"><img src="/assets/img/bg/blog-img-03.jpg"
                                                                     alt="blog-img"></a>
                                </div>
                                <div class="tp-blog__icon"><a href="#"><i class="fi fi-rs-angle-right"></i></a></div>
                            </div>
                            <div class="tp-blog__content">
                                <div class="tp-blog__meta mb-10">
                                    <a href="blog-details.html">Education</a> <span>-</span>
                                    <a href="blog-details.html">Jan 21 , 2022</a>
                                </div>
                                <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Engineering Technology &
                                        Academic Learning</a></h3>
                                <p>Dramatically supply transparent deliverab before & you backward comp internal.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-btn text-center">
                            <a href="blog.html" class="tp-btn">All Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- brand-area -->
        <section class="brand-area pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-65 text-center">
                            <h2 class="tp-section-title mb-20">Our Key Supporters</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-area tp-brand-active">
                            <div class="brand-item">
                                <a href="#"><img src="/assets/img/icon/brand-icon-01.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="/assets/img/icon/brand-icon-02.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="/assets/img/icon/brand-icon-03.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="/assets/img/icon/brand-icon-04.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="/assets/img/icon/brand-icon-05.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="/assets/img/icon/brand-icon-01.png" alt="brand-logo"></a>
                            </div>
                            <div class="brand-item">
                                <a href="#"><img src="/assets/img/icon/brand-icon-02.png" alt="brand-logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand-area-end -->

    </main>

    <!-- footer-area -->
    <footer>
        <div class="footer-bg theme-bg bg-bottom" data-background="/assets/img/bg/shape-bg-02.png">
            <div class="f-border pt-115 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-md-4">
                            <div class="footer-widget footer-col-1 mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">About</h3>
                                </div>
                                <div class="footer-widget__link">
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">In Press</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <div class="footer-widget footer-col-2 mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">Quick Links</h3>
                                </div>
                                <div class="footer-widget__link">
                                    <ul>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Documentation</a></li>
                                        <li><a href="#">Chat online</a></li>
                                        <li><a href="#">Order Cancel</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <div class="footer-widget footer-col-3 mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">Support</h3>
                                </div>
                                <div class="footer-widget__link">
                                    <ul>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="#">Online Chat</a></li>
                                        <li><a href="#">Whatsapp</a></li>
                                        <li><a href="#">Telegram</a></li>
                                        <li><a href="#">Ticketing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8">
                            <div class="footer-widget footer-col-4  mb-50">
                                <div class="footer-widget__text mb-35">
                                    <h3 class="footer-widget__title">Support</h3>
                                </div>
                                <p>Be the first one to know about discounts, offers and events. Unsubscribe whenever you
                                    like.</p>
                                <div class="footer-widget__f-newsletter mb-40">
                                    <form action="index.html">
                                        <span><i class="icon_mail_alt"></i></span>
                                        <input type="email" placeholder="Enter your email">
                                        <button class="footer-widget__submit tp-border-btn2">Subscribe Now</button>
                                    </form>
                                </div>
                                <div class="footer-widget__social d-flex align-items-center">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fa-light fa-basketball"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-copyright pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="f-copyright__logo mb-30">
                                <a href="index.html"><img src="/assets/img/logo/Logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="f-copyright__text text-md-end mb-30">
                                <span>Copyright©Uxaction 2022, All Rights Reserved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="/assets/js/vendor/jquery.js"></script>
    <script src="/assets/js/vendor/waypoints.js"></script>
    <script src="/assets/js/bootstrap-bundle.js"></script>
    <script src="/assets/js/meanmenu.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/magnific-popup.js"></script>
    <script src="/assets/js/parallax.js"></script>
    <script src="/assets/js/backtotop.js"></script>
    <script src="/assets/js/nice-select.js"></script>
    <script src="/assets/js/counterup.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/isotope-pkgd.js"></script>
    <script src="/assets/js/imagesloaded-pkgd.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/main.js"></script>
    </body>
@endsection
