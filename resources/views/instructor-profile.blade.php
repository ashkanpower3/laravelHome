@extends("page-contnet")
@section('pages')

    <!-- breadcrumb-area -->
      <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="/assets/img/breadcrumb/breadcrumb-bg-1.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title mb-20">Instructor Profile</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span><a href="instructor.html">Instructor</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span class="sub-page-black">Instructor Profile</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- instructor-portfolio-area -->
      <section class="instructor-portfolio pt-120 pb-80">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-5">
                  <div class="instruc-sidebar mb-40">
                     <div class="isntruc-side-thumb mb-30">
                        <img src="/assets/img/bg/instruc-sibedar-thumb-01.jpg" alt="instructor-thumb">
                     </div>
                     <div class="instructor-sidebar-widget">
                        <div class="isntruc-side-content text-center">
                           <h4 class="side-instructor-title mb-15">{{$instructor->name}}</h4>
                           <p>UX/UI Designer, Chemical Engineer, Youtuber, Life Style Blogger</p>
                        </div>
                        <div class="instruc-follower d-flex align-items-center justify-content-center mb-25">
                           <div class="ins-followers">
                              <h4>35,600</h4>
                              <span>Followers</span>
                           </div>
                           <div class="ins-following">
                              <h4>135</h4>
                              <span>Following</span>
                           </div>
                        </div>
                        <div class="instruc-side-btn text-center mb-40">
                           <a class="ins-btn" href="#">Follow +</a>
                        </div>
                        <div class="cd-information instruc-profile-info mb-35">
                           <ul>
                              <li><i class="fi fi-rr-briefcase"></i> <label>Job Title</label> <span>Lead UX Engineer</span></li>
                              <li><i class="fi fi-rr-phone-call"></i> <label>Phone</label> <span>+00 365 9852 65</span></li>
                              <li><i class="fi fi-rr-envelope"></i> <label>Email</label> <span>epora@mail.com</span></li>
                              <li><i class="fi fi-rr-time-forward"></i> <label>Experiences</label> <span>12+ Years</span></li>
                              <li><i class="fi fi-rs-time-check"></i> <label>Skill Level</label> <span>Pro Level</span></li>
                              <li><i class="fi fi-br-comments"></i> <label>Language</label> <span>English</span></li>
                           </ul>
                        </div>
                        <div class="c-details-social">
                           <h5 class="cd-social-title mb-25">Follow More:</h5>
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-7">
                  <div class="instructor-main-content ml-30 mb-40">
                     <div class="instruc-biography mb-50">
                        <h4 class="ins-bio-title mb-30">Biography</h4>
                        <p>Synergistically foster 24/7 leadership rather than scalable platforms. Conveniently visualize installed base products before interactive results. Collaboratively restore corporate experiences and open-source applications. Proactively mesh cooperative growth strategies for covalent opportunities. Competently create efficient markets through best-of-breed potentialities.</p>
                        <p>Compellingly exploit B2B vortals with emerging total linkage. Appropriately pursue strategic leadership whe intermandated ideas. Proactively revolutionize interoperable "outside the box" thinking with fully researched innovation. Dramatically facilitate exceptional architectures and bricks-and-clicks data. Progressively genera extensible e-services for.</p>
                     </div>
                     <div class="instruc-statics mb-20">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-4">
                              <div class="isntruc-tp-counter mb-30">
                                 <h4 class="isntruc-tp-counter__title p-relative"><span class="counter">276</span>K</h4>
                                 <p>Worldwide Students</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-4">
                              <div class="isntruc-tp-counter mb-30">
                                 <h4 class="isntruc-tp-counter__title p-relative"><span class="counter">35</span>+</h4>
                                 <p>Professional Courses</p>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-4">
                              <div class="isntruc-tp-counter mb-30">
                                 <h4 class="isntruc-tp-counter__title p-relative"><span class="counter">47</span>K+</h4>
                                 <p>Beautiful Review</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="instructor-tp-course">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="instruc-biography">
                                 <h2 class="ins-bio-title mb-35">Courses</h2>
                              </div>
                           </div>
                        </div>
                        <div class="row">

                            @foreach($courses as $course)
                           <div class="col-xl-6 col-lg-12 col-md-6">
                              <div class="tpcourse mb-40">
                                 <div class="tpcourse__thumb p-relative w-img fix">
                                    <a href="course-details.html"><img src="/assets/img/course/course-thumb-01.jpg" alt="course-thumb"></a>
                                    <div class="tpcourse__tag">
                                       <a href="#"><i class="fi fi-rr-heart"></i></a>
                                    </div>
                                    <div class="tpcourse__img-icon">
                                       <img src="/assets/img/icon/course-3-avata-1.png" alt="course-avata">
                                    </div>
                                 </div>
                                 <div class="tpcourse__content-2">
                                    <div class="tpcourse__category mb-10">
                                       <ul class="tpcourse__price-list d-flex align-items-center">
                                          <li><a class="c-color-yellow" href="course-details.html">Design</a></li>
                                          <li><a class="c-color-red" href="course-details.html">Development</a></li>
                                       </ul>
                                    </div>
                                    <div class="tpcourse__ava-title mb-15">
                                       <h4 class="tpcourse__title"><a href="course-details.html">{{$course->title}}</a></h4>
                                    </div>
                                    <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                       <ul class="d-flex align-items-center">
                                          <li><img src="/assets/img/icon/c-meta-01.png" alt="meta-icon"> <span>35 Classes</span></li>
                                          <li><img src="/assets/img/icon/c-meta-02.png" alt="meta-icon"> <span>291 Students</span></li>
                                       </ul>
                                       </ul>
                                    </div>
                                    <div class="tpcourse__rating d-flex align-items-center justify-content-between">
                                       <div class="tpcourse__rating-icon">
                                          <span>4.7</span>
                                          <i class="fi fi-ss-star"></i>
                                          <i class="fi fi-ss-star"></i>
                                          <i class="fi fi-ss-star"></i>
                                          <i class="fi fi-ss-star"></i>
                                          <i class="fi fi-rs-star"></i>
                                          <p>(125)</p>
                                       </div>
                                       <div class="tpcourse__pricing">
                                          <h5 class="price-title">$29.99</h5>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            @endforeach
                        </div>
                        <div class="basic-pagination">
                           <nav>
                              <ul>
                                 <li>
                                    <a href="blog.html">
                                       <i class="far fa-angle-left"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <span class="current">1</span>
                                 </li>
                                 <li>
                                    <a href="blog.html">2</a>
                                 </li>
                                 <li>
                                    <a href="blog.html">3</a>
                                 </li>
                                 <li>
                                    <a href="blog.html">
                                       <i class="far fa-angle-right"></i>
                                    </a>
                                 </li>
                              </ul>
                            </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- instructor-portfolio-area-end -->

      <!-- counter-area -->
      <section class="tp-counter-area theme-bg pt-90">
         <div class="counter-b-border">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-md-6">
                     <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                           <h4 class="counter-item__title counter-left-title"><span class="counter">276</span>K</h4>
                           <p>Worldwide Students</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                           <h4 class="counter-item__title counter-left-title"><span class="counter">23</span>+</h4>
                           <p>Years Experience</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                           <h4 class="counter-item__title counter-left-title"><span class="counter">735</span>+</h4>
                           <p>Professional Courses</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="counter-item mb-70">
                        <div class="counter-item__content counter-white-text">
                           <h4 class="counter-item__title counter-left-title"><span class="counter">4.7</span>K+</h4>
                           <p>Beautiful Review</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- counter-area-end -->
@endsection
