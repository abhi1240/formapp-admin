@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">Widgets Cards</h4>
               <div class="breadcrumb-action justify-content-center flex-wrap">
                  <div class="action-btn">
                     <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                           <span class="input-icon icon-left">
                           <span data-feather="calendar"></span>
                           </span>
                           <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                           <span class="input-icon icon-right">
                           <span data-feather="chevron-down"></span>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown action-btn">
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="la la-download"></i> Export
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <span class="dropdown-item">Export With</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                        <i class="la la-print"></i> Printer</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-pdf"></i> PDF</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-text"></i> Google Sheets</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-excel"></i> Excel (XLSX)</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-csv"></i> CSV</a>
                     </div>
                  </div>
                  <div class="dropdown action-btn">
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="la la-share"></i> Share
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                        <span class="dropdown-item">Share Link</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                        <i class="la la-facebook"></i> Facebook</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-twitter"></i> Twitter</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-google"></i> Google</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-feed"></i> Feed</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-instagram"></i> Instagram</a>
                     </div>
                  </div>
                  <div class="action-btn">
                     <a href="" class="btn btn-sm btn-primary btn-add">
                     <i class="la la-plus"></i> Add New</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single1.png') }}" alt="">
                  <figcaption>
                     <h4>Technology Change the World</h4>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <button class="btn-md btn">View More</button>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single2.png') }}" alt="">
                  <figcaption>
                     <h4>Power of Unity And Strength</h4>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <button class=" btn-md btn">View More</button>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single3.png') }}" alt="">
                  <figcaption>
                     <h4>A Success Story Entrepreneur</h4>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <button class="btn-md btn">View More</button>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single4.png') }}" alt="">
                  <figcaption>
                     <h4>Important of Team Works</h4>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <button class="btn-md btn">View More</button>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards3">
               <img class="svg" src="{{ asset('img/svg/feature1.svg') }}" alt="">
               <figcaption>
                  <h2>Creative Planning</h2>
                  <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled and
                     typesetting industry.
                  </p>
                  <a href="/strikingdash/admin/widgets/card">Learn More</a>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards3">
               <img class="svg" src="{{ asset('img/svg/feature2.svg') }}" alt="">
               <figcaption>
                  <h2>Perfect Design</h2>
                  <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled and
                     typesetting industry.
                  </p>
                  <a href="/strikingdash/admin/widgets/card">Learn More</a>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards3">
               <img class="svg" src="{{ asset('img/svg/feature3.svg') }}" alt="">
               <figcaption>
                  <h2>Code Standard</h2>
                  <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled and
                     typesetting industry.
                  </p>
                  <a href="/strikingdash/admin/widgets/card">Learn More</a>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards3">
               <img class="svg" src="{{ asset('img/svg/feature4.svg') }}" alt="">
               <figcaption>
                  <h2>User Friendly</h2>
                  <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled and
                     typesetting industry.
                  </p>
                  <a href="/strikingdash/admin/widgets/card">Learn More</a>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards4">
               <img class="svg" src="{{ asset('img/svg/feature-cards5.svg') }}" alt="">
               <figcaption>
                  <h2>Perfect Design</h2>
                  <p>Lorem Ipsum is simply dummy text of the
                     and typesetting industry.
                  </p>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards4">
               <img class="svg" src="{{ asset('img/svg/feature-cards6.svg') }}" alt="">
               <figcaption>
                  <h2>Code Standard</h2>
                  <p>Lorem Ipsum is simply dummy text of the
                     and typesetting industry.
                  </p>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards4">
               <img class="svg" src="{{ asset('img/svg/feature-cards7.svg') }}" alt="">
               <figcaption>
                  <h2>Nice Environment</h2>
                  <p>Lorem Ipsum is simply dummy text of the
                     and typesetting industry.
                  </p>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards4">
               <img class="svg" src="{{ asset('img/svg/feature-cards8.svg') }}" alt="">
               <figcaption>
                  <h2>User Friendly</h2>
                  <p>Lorem Ipsum is simply dummy text of the
                     and typesetting industry.
                  </p>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards feature-card--1">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single1.png') }}" alt="">
                  <figcaption>
                     <div class="feature-cards__top">
                        <span>Web Development</span><span>01 July 2020 </span>
                     </div>
                     <h5>Technology Change the World</h5>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <div class="feature-cards__bottom">
                        <div class="feedbackSection">
                           <div class="author">
                              <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                              <span>Burns Marks</span>
                           </div>
                           <div class="feedback">
                              <span class="like"><span data-feather="heart"></span> 70</span>
                              <span class="view"><span data-feather="eye"></span> 120</span>
                           </div>
                        </div>
                     </div>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards feature-card--1">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single2.png') }}" alt="">
                  <figcaption>
                     <div class="feature-cards__top">
                        <span>Web Development</span><span>01 July 2020 </span>
                     </div>
                     <h5>Technology Change the World</h5>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <div class="feature-cards__bottom">
                        <div class="feedbackSection">
                           <div class="author">
                              <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                              <span>Burns Marks</span>
                           </div>
                           <div class="feedback">
                              <span class="like"><span data-feather="heart"></span> 70</span>
                              <span class="view"><span data-feather="eye"></span> 120</span>
                           </div>
                        </div>
                     </div>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards feature-card--1">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single3.png') }}" alt="">
                  <figcaption>
                     <div class="feature-cards__top">
                        <span>Web Development</span><span>01 July 2020 </span>
                     </div>
                     <h5>Technology Change the World</h5>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <div class="feature-cards__bottom">
                        <div class="feedbackSection">
                           <div class="author">
                              <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                              <span>Burns Marks</span>
                           </div>
                           <div class="feedback">
                              <span class="like"><span data-feather="heart"></span> 70</span>
                              <span class="view"><span data-feather="eye"></span> 120</span>
                           </div>
                        </div>
                     </div>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards feature-card--1">
               <figure class="feather-cards__figure">
                  <img src="{{ asset('img/blog-single4.png') }}" alt="">
                  <figcaption>
                     <div class="feature-cards__top">
                        <span>Web Development</span><span>01 July 2020 </span>
                     </div>
                     <h5>Technology Change the World</h5>
                     <p>Lorem Ipsum is simply dummy text of the printer took a galley of type and scrambled</p>
                     <div class="feature-cards__bottom">
                        <div class="feedbackSection">
                           <div class="author">
                              <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                              <span>Burns Marks</span>
                           </div>
                           <div class="feedback">
                              <span class="like"><span data-feather="heart"></span> 70</span>
                              <span class="view"><span data-feather="eye"></span> 120</span>
                           </div>
                        </div>
                     </div>
                  </figcaption>
               </figure>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards2">
               <img class="w-100" src="{{ asset('img/fc4.png') }}" alt="">
               <figcaption>
                  <h2>Advancer Places</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing
                     printer took a galley of type and scrambled. 
                  </p>
                  <div class="feedbackSection">
                     <div class="author">
                        <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                        <span>Burns
                        Marks</span>
                     </div>
                  </div>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards2">
               <img class="w-100" src="{{ asset('img/fc2.png') }}" alt="">
               <figcaption>
                  <h2>Latest Features of Apples Products</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing
                     printer took a galley of type and scrambled. 
                  </p>
                  <div class="feedbackSection">
                     <div class="author">
                        <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                        <span>Burns
                        Marks</span>
                     </div>
                  </div>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards2">
               <img class="w-100" src="{{ asset('img/fc3.png') }}" alt="">
               <figcaption>
                  <h2>Best Resort Around the World</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing
                     printer took a galley of type and scrambled. 
                  </p>
                  <div class="feedbackSection">
                     <div class="author">
                        <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                        <span>Burns
                        Marks</span>
                     </div>
                  </div>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards2">
               <img class="w-100" src="{{ asset('img/fc1.png') }}" alt="">
               <figcaption>
                  <h2>How to find a Best Lawyers</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing
                     printer took a galley of type and scrambled. 
                  </p>
                  <div class="feedbackSection">
                     <div class="author">
                        <img class="rounded-circle" src="{{ asset('img/blog-author.jpg') }}" alt="">
                        <span>Burns
                        Marks</span>
                     </div>
                  </div>
               </figcaption>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="card position-relative user-member-card">
               <div class="card-body text-center p-30">
                  <div class="account-profile">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main rounded-circle mb-20 bg-opacity-primary wh-150" src="{{ asset('img/tm1.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress pb-3">
                        <h6 class="ap-nameAddress__title">Garry Sobars </h6>
                        <p class="ap-nameAddress__subTitle fs-13 pt-1 m-0">Founder &amp; CEO</p>
                     </div>
                     <ul class="db-social-parent mb-0 justify-content-center">
                        <li class="db-social-parent__item"><a class="color-facebook hover-facebook wh-38 fs-16 rounded-circle" href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-twitter hover-twitter wh-38 fs-16 rounded-circle" href="#"><i class="lab la-twitter"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-ruby hover-ruby  wh-38 fs-16 rounded-circle" href="#"><i class="las la-basketball-ball"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-instagram hover-instagram wh-38 fs-16 rounded-circle" href="#"><i class="lab la-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="tm-card-overlay position-absolute">
                     <div class="dropdown  dropdown-click ">
                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span data-feather=more-horizontal></span>
                        </button>
                        <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                           <a class="dropdown-item" href="#">Item One</a>
                           <a class="dropdown-item" href="#">Item Two</a>
                           <a class="dropdown-item" href="#">Item Three</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="card position-relative user-member-card">
               <div class="card-body text-center p-30">
                  <div class="account-profile">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main rounded-circle mb-20 bg-opacity-primary wh-150" src="{{ asset('img/tm2.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress pb-3">
                        <h6 class="ap-nameAddress__title">Barbara Marion </h6>
                        <p class="ap-nameAddress__subTitle fs-13 pt-1 m-0">Tech Executive</p>
                     </div>
                     <ul class="db-social-parent mb-0 justify-content-center">
                        <li class="db-social-parent__item"><a class="color-facebook hover-facebook wh-38 fs-16 rounded-circle" href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-twitter hover-twitter wh-38 fs-16 rounded-circle" href="#"><i class="lab la-twitter"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-ruby hover-ruby  wh-38 fs-16 rounded-circle" href="#"><i class="las la-basketball-ball"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-instagram hover-instagram wh-38 fs-16 rounded-circle" href="#"><i class="lab la-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="tm-card-overlay position-absolute">
                     <div class="dropdown  dropdown-click ">
                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span data-feather=more-horizontal></span>
                        </button>
                        <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                           <a class="dropdown-item" href="#">Item One</a>
                           <a class="dropdown-item" href="#">Item Two</a>
                           <a class="dropdown-item" href="#">Item Three</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="card position-relative user-member-card">
               <div class="card-body text-center p-30">
                  <div class="account-profile">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main rounded-circle mb-20 bg-opacity-primary wh-150" src="{{ asset('img/tm3.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress pb-3">
                        <h6 class="ap-nameAddress__title">Christine Arnold </h6>
                        <p class="ap-nameAddress__subTitle fs-13 pt-1 m-0">Lead Designer</p>
                     </div>
                     <ul class="db-social-parent mb-0 justify-content-center">
                        <li class="db-social-parent__item"><a class="color-facebook hover-facebook wh-38 fs-16 rounded-circle" href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-twitter hover-twitter wh-38 fs-16 rounded-circle" href="#"><i class="lab la-twitter"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-ruby hover-ruby  wh-38 fs-16 rounded-circle" href="#"><i class="las la-basketball-ball"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-instagram hover-instagram wh-38 fs-16 rounded-circle" href="#"><i class="lab la-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="tm-card-overlay position-absolute">
                     <div class="dropdown  dropdown-click ">
                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span data-feather=more-horizontal></span>
                        </button>
                        <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                           <a class="dropdown-item" href="#">Item One</a>
                           <a class="dropdown-item" href="#">Item Two</a>
                           <a class="dropdown-item" href="#">Item Three</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="card position-relative user-member-card">
               <div class="card-body text-center p-30">
                  <div class="account-profile">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main rounded-circle mb-20 bg-opacity-primary wh-150" src="{{ asset('img/tm4.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress pb-3">
                        <h6 class="ap-nameAddress__title">Natalie Corwin</h6>
                        <p class="ap-nameAddress__subTitle fs-13 pt-1 m-0">Product Designer</p>
                     </div>
                     <ul class="db-social-parent mb-0 justify-content-center">
                        <li class="db-social-parent__item"><a class="color-facebook hover-facebook wh-38 fs-16 rounded-circle" href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-twitter hover-twitter wh-38 fs-16 rounded-circle" href="#"><i class="lab la-twitter"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-ruby hover-ruby  wh-38 fs-16 rounded-circle" href="#"><i class="las la-basketball-ball"></i></a></li>
                        <li class="db-social-parent__item"><a class="color-instagram hover-instagram wh-38 fs-16 rounded-circle" href="#"><i class="lab la-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="tm-card-overlay position-absolute">
                     <div class="dropdown  dropdown-click ">
                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span data-feather=more-horizontal></span>
                        </button>
                        <div class="dropdown-default dropdown-bottomRight dropdown-menu">
                           <a class="dropdown-item" href="#">Item One</a>
                           <a class="dropdown-item" href="#">Item Two</a>
                           <a class="dropdown-item" href="#">Item Three</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
               <div class="application-task d-flex align-items-center">
                  <div class="application-task-icon wh-60 bg-primary content-center">
                     <img class="svg" src="{{ asset('img/svg/feature-cards9.svg') }}" alt="">
                  </div>
                  <div class="application-task-content">
                     <h4>47</h4>
                     <span class="text-light fs-14 mt-1 text-capitalize">total tasks</span>
                  </div>
               </div>
               <div class="card__more-action dropdown dropdown-click">
                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span data-feather="more-horizontal"></span>
                  </button>
                  <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                     <a class="dropdown-item" href="#">view</a>
                     <a class="dropdown-item" href="#">edit</a>
                     <a class="dropdown-item" href="#">delete</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
               <div class="application-task d-flex align-items-center">
                  <div class="application-task-icon wh-60 bg-secondary content-center">
                     <img class="svg" src="{{ asset('img/svg/feature-cards10.svg') }}" alt="">
                  </div>
                  <div class="application-task-content">
                     <h4>34</h4>
                     <span class="text-light fs-14 mt-1 text-capitalize">Tasks completed</span>
                  </div>
               </div>
               <div class="card__more-action dropdown dropdown-click">
                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span data-feather="more-horizontal"></span>
                  </button>
                  <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                     <a class="dropdown-item" href="#">view</a>
                     <a class="dropdown-item" href="#">edit</a>
                     <a class="dropdown-item" href="#">delete</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
               <div class="application-task d-flex align-items-center">
                  <div class="application-task-icon wh-60 bg-success content-center">
                     <img class="svg" src="{{ asset('img/svg/feature-cards11.svg') }}" alt="">
                  </div>
                  <div class="application-task-content">
                     <h4>$27,500</h4>
                     <span class="text-light fs-14 mt-1 text-capitalize">Spendings</span>
                  </div>
               </div>
               <div class="card__more-action dropdown dropdown-click">
                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span data-feather="more-horizontal"></span>
                  </button>
                  <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                     <a class="dropdown-item" href="#">view</a>
                     <a class="dropdown-item" href="#">edit</a>
                     <a class="dropdown-item" href="#">delete</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
               <div class="application-task d-flex align-items-center">
                  <div class="application-task-icon wh-60 bg-warning content-center">
                     <img class="svg" src="{{ asset('img/svg/feature-cards12.svg') }}" alt="">
                  </div>
                  <div class="application-task-content">
                     <h4>250</h4>
                     <span class="text-light fs-14 mt-1 text-capitalize">Hours spent</span>
                  </div>
               </div>
               <div class="card__more-action dropdown dropdown-click">
                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span data-feather="more-horizontal"></span>
                  </button>
                  <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                     <a class="dropdown-item" href="#">view</a>
                     <a class="dropdown-item" href="#">edit</a>
                     <a class="dropdown-item" href="#">delete</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards6">
               <div class="card-short">
                  <h4 class="card-short__title align-items-center">
                     <img src="{{ asset('img/svg/adobe.svg') }}" alt="">
                     <span>Adobe CC</span>
                  </h4>
                  <div class="card-short__content">
                     <p>Lorem Ipsum is simply dummy text of the and the</p>
                  </div>
                  <div class="card-short__bottom installed">
                     <div class="card-short-checkbox">
                        <div class="checkbox-theme-default custom-checkbox ">
                           <input class="checkbox" type="checkbox" id="check-563">
                           <label for="check-563">
                           <span class="checkbox-text">
                           installed
                           </span>
                           </label>
                        </div>
                     </div>
                     <div class="card-short-actions">
                        <div class="content-installed content-action">
                           <button type="button" class="btn btn-outline-primary">
                           <span>Open</span>
                           </button>
                           <div class="more">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                        <div class="content-not-installed content-action d-none">
                           <button type="button" class="btn btn-primary"><span>Install</span></button>
                           <div class="more">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                 </svg>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards6">
               <div class="card-short">
                  <h4 class="card-short__title align-items-center">
                     <img src="{{ asset('img/svg/slack.svg') }}" alt="">
                     <span>Slack</span>
                  </h4>
                  <div class="card-short__content">
                     <p>Lorem Ipsum is simply dummy text of the and the</p>
                  </div>
                  <div class="card-short__bottom installed">
                     <div class="card-short-checkbox">
                        <div class="d-none">
                           <div class="checkbox-theme-default custom-checkbox ">
                              <input class="checkbox" type="checkbox" id="check-567">
                              <label for="check-567">
                              <span class="checkbox-text">
                              installed
                              </span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="card-short-actions">
                        <div class="content-not-installed content-action">
                           <button type="button" class="btn btn-primary"><span>Install</span></button>
                           <div class="more">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards6">
               <div class="card-short">
                  <h4 class="card-short__title align-items-center">
                     <img src="{{ asset('img/svg/trello.svg') }}" alt="">
                     <span>Trello</span>
                  </h4>
                  <div class="card-short__content">
                     <p>Lorem Ipsum is simply dummy text of the and the</p>
                  </div>
                  <div class="card-short__bottom installed">
                     <div class="card-short-checkbox">
                        <div class="checkbox-theme-default custom-checkbox ">
                           <input class="checkbox" type="checkbox" id="check-569">
                           <label for="check-569">
                           <span class="checkbox-text">
                           installed
                           </span>
                           </label>
                        </div>
                     </div>
                     <div class="card-short-actions">
                        <div class="content-installed content-action">
                           <button type="button" class="btn btn-outline-primary">
                           <span>Open</span>
                           </button>
                           <div class="more">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                        <div class="content-not-installed content-action d-none">
                           <button type="button" class="btn btn-primary"><span>Install</span></button>
                           <div class="more">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                 </svg>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards6">
               <div class="card-short">
                  <h4 class="card-short__title align-items-center">
                     <img src="{{ asset('img/svg/whatsapp.svg') }}" alt="">
                     <span>Whatsapp</span>
                  </h4>
                  <div class="card-short__content">
                     <p>Lorem Ipsum is simply dummy text of the and the</p>
                  </div>
                  <div class="card-short__bottom installed">
                     <div class="card-short-checkbox">
                        <div class="d-none">
                           <div class="checkbox-theme-default custom-checkbox ">
                              <input class="checkbox" type="checkbox" id="check-567">
                              <label for="check-567">
                              <span class="checkbox-text">
                              installed
                              </span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="card-short-actions">
                        <div class="content-not-installed content-action">
                           <button type="button" class="btn btn-primary"><span>Install</span></button>
                           <div class="more">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-xl-4 mb-25 col-md-6">
            <div class="user-group radius-xl bg-white media-ui media-ui--early pt-30 pb-25">
               <div class="border-bottom px-30">
                  <div class="media user-group-media d-flex justify-content-between">
                     <div class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                        <a href="application-ui.html">
                           <h6 class="mt-0  fw-500 user-group media-ui__title">Dashboard UI Project</h6>
                        </a>
                        <span class="my-sm-0 my-2 media-badge text-uppercase color-white bg-primary">early</span>
                     </div>
                     <div class="mt-n15">
                        <div class="dropdown dropleft">
                           <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span data-feather="more-horizontal"></span>
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">view</a>
                              <a class="dropdown-item" href="#">edit</a>
                              <a class="dropdown-item" href="#">leave</a>
                              <a class="dropdown-item" href="#">delete</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-group-people mt-15 text-capitalize">
                     <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                     <div class="user-group-project">
                        <div class="d-flex align-items-center user-group-progress-top">
                           <div class="media-ui__start">
                              <span class="color-light fs-12">Start Date</span>
                              <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                           </div>
                           <div class="media-ui__end">
                              <span class="color-light fs-12">end date</span>
                              <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-group-progress-bar">
                     <div class="progress-wrap d-flex align-items-center mb-0">
                        <div class="progress">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-percentage">83%</span>
                     </div>
                     <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                  </div>
               </div>
               <div class="mt-20 px-30">
                  <p class="fs-13 color-light mb-10">Assigned To</p>
                  <ul class="d-flex flex-wrap user-group-people__parent">
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm5.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 mb-25 col-md-6">
            <div class="user-group radius-xl bg-white media-ui media-ui--onHold pt-30 pb-25">
               <div class="border-bottom px-30">
                  <div class="media user-group-media d-flex justify-content-between">
                     <div class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                        <a href="application-ui.html">
                           <h6 class="mt-0  fw-500 user-group media-ui__title">Application UI Design</h6>
                        </a>
                        <span class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on hold</span>
                     </div>
                     <div class="mt-n15">
                        <div class="dropdown dropleft">
                           <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span data-feather="more-horizontal"></span>
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">view</a>
                              <a class="dropdown-item" href="#">edit</a>
                              <a class="dropdown-item" href="#">leave</a>
                              <a class="dropdown-item" href="#">delete</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-group-people mt-15 text-capitalize">
                     <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                     <div class="user-group-project">
                        <div class="d-flex align-items-center user-group-progress-top">
                           <div class="media-ui__start">
                              <span class="color-light fs-12">Start Date</span>
                              <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                           </div>
                           <div class="media-ui__end">
                              <span class="color-light fs-12">end date</span>
                              <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-group-progress-bar">
                     <div class="progress-wrap d-flex align-items-center mb-0">
                        <div class="progress">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-percentage">83%</span>
                     </div>
                     <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                  </div>
               </div>
               <div class="mt-20 px-30">
                  <p class="fs-13 color-light mb-10">Assigned To</p>
                  <ul class="d-flex flex-wrap user-group-people__parent">
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm5.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 mb-25 col-md-6">
            <div class="user-group radius-xl bg-white media-ui media-ui--late pt-30 pb-25">
               <div class="border-bottom px-30">
                  <div class="media user-group-media d-flex justify-content-between">
                     <div class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                        <a href="application-ui.html">
                           <h6 class="mt-0  fw-500 user-group media-ui__title">Custom Software Development</h6>
                        </a>
                        <span class="my-sm-0 my-2 media-badge text-uppercase color-white bg-danger">late</span>
                     </div>
                     <div class="mt-n15">
                        <div class="dropdown dropleft">
                           <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span data-feather="more-horizontal"></span>
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">view</a>
                              <a class="dropdown-item" href="#">edit</a>
                              <a class="dropdown-item" href="#">leave</a>
                              <a class="dropdown-item" href="#">delete</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-group-people mt-15 text-capitalize">
                     <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod dolor ame.</p>
                     <div class="user-group-project">
                        <div class="d-flex align-items-center user-group-progress-top">
                           <div class="media-ui__start">
                              <span class="color-light fs-12">Start Date</span>
                              <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                           </div>
                           <div class="media-ui__end">
                              <span class="color-light fs-12">end date</span>
                              <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-group-progress-bar">
                     <div class="progress-wrap d-flex align-items-center mb-0">
                        <div class="progress">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-percentage">83%</span>
                     </div>
                     <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                  </div>
               </div>
               <div class="mt-20 px-30">
                  <p class="fs-13 color-light mb-10">Assigned To</p>
                  <ul class="d-flex flex-wrap user-group-people__parent">
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm5.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                     </li>
                     <li>
                        <a href="#"><img class="rounded-circle wh-34 bg-opacity-secondary" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6 mb-25">
            <div class="card h-100">
               <div class="card-header py-20  px-sm-25 px-3 ">
                  <h6>files</h6>
               </div>
               <div class="card-body">
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/zip@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Main-admin-design.zip</p>
                              <span class="color-light fs-12 d-flex ">7.05 MB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10"></a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/pdf@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Product-guidelines.pdf</p>
                              <span class="color-light fs-12 d-flex ">5.07 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/psd@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">admin-wireframe.psd</p>
                              <span class="color-light fs-12 d-flex ">2.05 MB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10"></a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/jpg@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Wirefram-escreenshots.jpg</p>
                              <span class="color-light fs-12 d-flex ">522 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/png@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Logo.png</p>
                              <span class="color-light fs-12 d-flex ">522 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
         <div class="col-xl-4 col-md-6 mb-25">
            <div class="card h-100">
               <div class="card-header py-20  px-sm-25 px-3 ">
                  <h6>files</h6>
               </div>
               <div class="card-body">
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/zip@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Main-admin-design.zip</p>
                              <span class="color-light fs-12 d-flex ">7.05 MB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10"></a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/pdf@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Product-guidelines.pdf</p>
                              <span class="color-light fs-12 d-flex ">5.07 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/psd@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">admin-wireframe.psd</p>
                              <span class="color-light fs-12 d-flex ">2.05 MB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10"></a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/jpg@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Wirefram-escreenshots.jpg</p>
                              <span class="color-light fs-12 d-flex ">522 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/png@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Logo.png</p>
                              <span class="color-light fs-12 d-flex ">522 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
         <div class="col-xl-4 col-md-6 mb-25">
            <div class="card h-100">
               <div class="card-header py-20  px-sm-25 px-3 ">
                  <h6>files</h6>
               </div>
               <div class="card-body">
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/zip@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Main-admin-design.zip</p>
                              <span class="color-light fs-12 d-flex ">7.05 MB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10"></a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/pdf@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Product-guidelines.pdf</p>
                              <span class="color-light fs-12 d-flex ">5.07 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/psd@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">admin-wireframe.psd</p>
                              <span class="color-light fs-12 d-flex ">2.05 MB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10"></a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mb-20">
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/jpg@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Wirefram-escreenshots.jpg</p>
                              <span class="color-light fs-12 d-flex ">522 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="files-area d-flex justify-content-between align-items-center">
                        <div class="files-area__left d-flex align-items-center">
                           <div class="files-area__img">
                              <img src="{{ asset('img/png@2x.png') }}" alt="img" class="wh-42">
                           </div>
                           <div class="files-area__title">
                              <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Logo.png</p>
                              <span class="color-light fs-12 d-flex ">522 KB</span>
                              <div class="d-flex text-capitalize">
                                 <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                 <a href="#" class="fs-12 fw-500 color-primary ml-10">download</a>
                              </div>
                           </div>
                        </div>
                        <div class="files-area__right">
                           <div class="dropdown dropleft">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">leave</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
         <div class="col-12">
            <div class="bg-white p-25 mb-25 radius-xl">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <figure class="feature-cards7 feature-cards7--1">
                        <div class=" banner-card banner-card-border">
                           <div class="banner-card__top align-center-v justify-content-between">
                              <h4 class="banner-card__title">
                                 <img src="{{ asset('img/svg/layers.svg') }}" class="svg" alt="StrikingDash Banner">
                                 <span>Dark Color</span>
                              </h4>
                              <div class="banner-card__action">
                                 <div class="more">
                                    <div class="card__more-action dropdown dropdown-click">
                                       <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                       <span data-feather="more-horizontal"></span>
                                       </button>
                                       <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                          <a class="dropdown-item" href="#">view</a>
                                          <a class="dropdown-item" href="#">edit</a>
                                          <a class="dropdown-item" href="#">delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="banner-card__body">
                              <p>Lorem Ipsum is simply dummy text of the printing printer took a galley of type
                                 and
                                 scrambled
                                 and typesetting industry.
                              </p>
                           </div>
                           <div class="banner-card__bottom  align-center-v justify-content-between">
                              <div class="card-author"><img src="{{ asset('img/author-more.png') }}" alt=""><span class="author-name">Barbara Marion</span></div>
                              <div class="card-meta">
                                 <ul>
                                    <li>
                                       <span data-feather="heart"></span>
                                       <span class="view-count">70</span>
                                    </li>
                                    <li>
                                       <span data-feather="eye"></span>
                                       <span class="view-count">70</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </figure>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <figure class="feature-cards7 feature-cards7--1">
                        <div class=" banner-card banner-card-border">
                           <div class="banner-card__top align-center-v justify-content-between">
                              <h4 class="banner-card__title">
                                 <img src="{{ asset('img/svg/feature-upload.svg') }}" class="svg" alt="StrikingDash Banner">
                                 <span>Dark Color</span>
                              </h4>
                              <div class="banner-card__action">
                                 <div class="more">
                                    <div class="card__more-action dropdown dropdown-click">
                                       <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                       <span data-feather="more-horizontal"></span>
                                       </button>
                                       <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                          <a class="dropdown-item" href="#">view</a>
                                          <a class="dropdown-item" href="#">edit</a>
                                          <a class="dropdown-item" href="#">delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="banner-card__body">
                              <p>Lorem Ipsum is simply dummy text of the printing printer took a galley of type
                                 and
                                 scrambled
                                 and typesetting industry.
                              </p>
                           </div>
                           <div class="banner-card__bottom  align-center-v justify-content-between">
                              <div class="card-author"><img src="{{ asset('img/author-more.png') }}" alt=""><span class="author-name">Barbara Marion</span></div>
                              <div class="card-meta">
                                 <ul>
                                    <li>
                                       <span data-feather="heart"></span>
                                       <span class="view-count">70</span>
                                    </li>
                                    <li>
                                       <span data-feather="eye"></span>
                                       <span class="view-count">70</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </figure>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <figure class="feature-cards7 feature-cards7--1">
                        <div class=" banner-card banner-card-border">
                           <div class="banner-card__top align-center-v justify-content-between">
                              <h4 class="banner-card__title">
                                 <img src="{{ asset('img/svg/feature-img.svg') }}" class="svg" alt="StrikingDash Banner">
                                 <span>Image</span>
                              </h4>
                              <div class="banner-card__action">
                                 <div class="more">
                                    <div class="card__more-action dropdown dropdown-click">
                                       <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                       <span data-feather="more-horizontal"></span>
                                       </button>
                                       <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                          <a class="dropdown-item" href="#">view</a>
                                          <a class="dropdown-item" href="#">edit</a>
                                          <a class="dropdown-item" href="#">delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="banner-card__body">
                              <p>Lorem Ipsum is simply dummy text of the printing printer took a galley of type
                                 and
                                 scrambled
                                 and typesetting industry.
                              </p>
                           </div>
                           <div class="banner-card__bottom  align-center-v justify-content-between">
                              <div class="card-author"><img src="{{ asset('img/author-more.png') }}" alt=""><span class="author-name">Garry Sobars</span></div>
                              <div class="card-meta">
                                 <ul>
                                    <li>
                                       <span data-feather="heart"></span>
                                       <span class="view-count">70</span>
                                    </li>
                                    <li>
                                       <span data-feather="eye"></span>
                                       <span class="view-count">70</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards7 feature-cards7--2">
               <div class=" banner-card bg-primary">
                  <div class="banner-card__top align-center-v justify-content-between">
                     <h4 class="banner-card__title">
                        <img src="{{ asset('img/svg/feature-lock.svg') }}" class="svg" alt="StrikingDash Banner">
                        <span>Dark Color</span>
                     </h4>
                     <div class="banner-card__action">
                        <div class="more">
                           <div class="card__more-action dropdown dropdown-click">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="banner-card__body">
                     <p>Lorem Ipsum is simply dummy text of the printing printer took a galley of type and
                        scrambled
                        and typesetting industry.
                     </p>
                  </div>
                  <div class="banner-card__bottom  align-center-v justify-content-between">
                     <div class="card-author"><img src="{{ asset('img/author-more.png') }}" alt=""><span class="author-name">Barbara
                        Marion</span>
                     </div>
                     <div class="card-meta">
                        <ul>
                           <li>
                              <span data-feather="heart"></span>
                              <span class="view-count">70</span>
                           </li>
                           <li>
                              <span data-feather="eye"></span>
                              <span class="view-count">70</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards7 feature-cards7--2">
               <div class=" banner-card bg-dark">
                  <div class="banner-card__top align-center-v justify-content-between">
                     <h4 class="banner-card__title">
                        <img src="{{ asset('img/svg/feature-lock.svg') }}" class="svg" alt="StrikingDash Banner">
                        <span>Dark Color</span>
                     </h4>
                     <div class="banner-card__action">
                        <div class="more">
                           <div class="card__more-action dropdown dropdown-click">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="banner-card__body">
                     <p>Lorem Ipsum is simply dummy text of the printing printer took a galley of type and
                        scrambled
                        and typesetting industry.
                     </p>
                  </div>
                  <div class="banner-card__bottom  align-center-v justify-content-between">
                     <div class="card-author"><img src="{{ asset('img/author-more.png') }}" alt=""><span class="author-name">Barbara
                        Marion</span>
                     </div>
                     <div class="card-meta">
                        <ul>
                           <li>
                              <span data-feather="heart"></span>
                              <span class="view-count">70</span>
                           </li>
                           <li>
                              <span data-feather="eye"></span>
                              <span class="view-count">70</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </figure>
         </div>
         <div class="col-lg-4 col-md-6 mb-25">
            <figure class="feature-cards7 feature-cards7--2">
               <div class=" banner-card banner-card-image">
                  <div class="banner-card__top align-center-v justify-content-between">
                     <h4 class="banner-card__title">
                        <img src="{{ asset('img/svg/feature-lock.svg') }}" class="svg" alt="StrikingDash Banner">
                        <span>Dark Color</span>
                     </h4>
                     <div class="banner-card__action">
                        <div class="more">
                           <div class="card__more-action dropdown dropdown-click">
                              <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <span data-feather="more-horizontal"></span>
                              </button>
                              <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                                 <a class="dropdown-item" href="#">view</a>
                                 <a class="dropdown-item" href="#">edit</a>
                                 <a class="dropdown-item" href="#">delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="banner-card__body">
                     <p>Lorem Ipsum is simply dummy text of the printing printer took a galley of type and
                        scrambled
                        and typesetting industry.
                     </p>
                  </div>
                  <div class="banner-card__bottom  align-center-v justify-content-between">
                     <div class="card-author"><img src="{{ asset('img/author-more.png') }}" alt=""><span class="author-name">Barbara
                        Marion</span>
                     </div>
                     <div class="card-meta">
                        <ul>
                           <li>
                              <span data-feather="heart"></span>
                              <span class="view-count">70</span>
                           </li>
                           <li>
                              <span data-feather="eye"></span>
                              <span class="view-count">70</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </figure>
         </div>
      </div>
   </div>
</div>
@endsection