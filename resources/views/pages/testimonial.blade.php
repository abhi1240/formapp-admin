@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="testimonial-area">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Testimonials</h4>
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
         </div>
         <div class="testimonial-section">
            <div class=" testimonial-section__padding bg-white">
               <div class="container-fluid">
                  <div class="row justify-content-center">
                     <div class="col-12">
                        <div class="testimonial-section__title text-center">
                           <h1>Testimonial 1</h1>
                        </div>
                     </div>
                     <div class="col-sm-10">
                        <div class="testimonial-slider1 testimonial-slider-global">
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <div class="d-flex justify-content-center">
                                       <img class="wh-80 rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                    </div>
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <div class="d-flex justify-content-center">
                                       <img class="wh-80 rounded-circle" src="{{ asset('img/team-2.png') }}" alt="">
                                    </div>
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <div class="d-flex justify-content-center">
                                       <img class="wh-80 rounded-circle" src="{{ asset('img/team-3.png') }}" alt="">
                                    </div>
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <div class="d-flex justify-content-center">
                                       <img class="wh-80 rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                    </div>
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <div class="d-flex justify-content-center">
                                       <img class="wh-80 rounded-circle" src="{{ asset('img/team-2.png') }}" alt="">
                                    </div>
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <div class="d-flex justify-content-center">
                                       <img class="wh-80 rounded-circle" src="{{ asset('img/team-3.png') }}" alt="">
                                    </div>
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="testimonial-section__padding bg-normal rounded-0">
               <div class="container-fluid">
                  <div class="row justify-content-center">
                     <div class="col-12">
                        <div class="testimonial-section__title text-center">
                           <h1>Testimonial 2</h1>
                        </div>
                     </div>
                     <div class="col-sm-10">
                        <div class="testimonial-slider2 testimonial-slider-global">
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3 d-flex justify-content-between">
                                    <div class="d-flex flex-wrap">
                                       <div class="mr-20">
                                          <img class="wh-70 rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                       </div>
                                       <div>
                                          <p class="mb-0">Duran Clayton</p>
                                          <span>UI/UX Designer</span>
                                       </div>
                                    </div>
                                    <div class="div">
                                       <img src="{{ asset('img/svg/quote2.svg') }}" alt="">
                                    </div>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3 d-flex justify-content-between">
                                    <div class="d-flex flex-wrap">
                                       <div class="mr-20">
                                          <img class="wh-70 rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                       </div>
                                       <div>
                                          <p class="mb-0">Duran Clayton</p>
                                          <span>UI/UX Designer</span>
                                       </div>
                                    </div>
                                    <div class="div">
                                       <img src="{{ asset('img/svg/quote2.svg') }}" alt="">
                                    </div>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body">
                                 <!-- Start Author Commentcontant -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3 d-flex justify-content-between">
                                    <div class="d-flex flex-wrap">
                                       <div class="mr-20">
                                          <img class="wh-70 rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                       </div>
                                       <div>
                                          <p class="mb-0">Duran Clayton</p>
                                          <span>UI/UX Designer</span>
                                       </div>
                                    </div>
                                    <div class="div">
                                       <img src="{{ asset('img/svg/quote2.svg') }}" alt="">
                                    </div>
                                 </div>
                                 <p class="author-comment">It is a long established fact that a reader will page
                                    when
                                    looking at its layout. The point of be distracted by the readable
                                 </p>
                                 <!-- End Author Comment -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="testimonial-section__padding bg-white rounded-0">
               <div class="container-fluid">
                  <div class="row justify-content-center">
                     <div class="col-12">
                        <div class="testimonial-section__title text-center">
                           <h1>Testimonial 3</h1>
                        </div>
                     </div>
                     <div class="col-sm-8">
                        <div class="row justify-content-center">
                           <div class="col-lg-6">
                              <div class="testimonial-slider3-nav testimonial-slider-global">
                                 <div class="d-flex m-0 justify-content-center">
                                    <img class=" rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                 </div>
                                 <div class="d-flex m-0 justify-content-center">
                                    <img class=" rounded-circle" src="{{ asset('img/team-2.png') }}" alt="">
                                 </div>
                                 <div class="d-flex m-0 justify-content-center">
                                    <img class="rounded-circle" src="{{ asset('img/team-3.png') }}" alt="">
                                 </div>
                                 <div class="d-flex m-0 justify-content-center">
                                    <img class=" rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                 </div>
                                 <div class="d-flex m-0 justify-content-center">
                                    <img class=" rounded-circle" src="{{ asset('img/team-2.png') }}" alt="">
                                 </div>
                                 <div class="d-flex m-0 justify-content-center">
                                    <img class=" rounded-circle" src="{{ asset('img/team-3.png') }}" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-8">
                        <div class="testimonial-slider3-for testimonial-slider-global">
                           <div class="card shadow-none border-0">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">John Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                           <div class="card shadow-none border-0">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea.At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Robin Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                           <div class="card shadow-none border-0">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Heri Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                           <div class="card shadow-none border-0">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Gomlms Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                           <div class="card shadow-none border-0">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                           <div class="card shadow-none border-0">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="testimonial-section__padding bg-normal rounded-0">
               <div class="container-fluid">
                  <div class="row justify-content-center">
                     <div class="col-12">
                        <div class="testimonial-section__title text-center">
                           <h1>Testimonial 4</h1>
                        </div>
                     </div>
                     <div class="col-sm-7">
                        <div class="testimonial-slider4 testimonial-slider-global">
                           <div class="card">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <div class="d-flex justify-content-center">
                                    <img class="wh-100 rounded-circle" src="{{ asset('img/team-center.png') }}" alt="">
                                 </div>
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <div class="d-flex justify-content-center">
                                    <img class="wh-100 rounded-circle" src="{{ asset('img/team-3.png') }}" alt="">
                                 </div>
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-body text-center">
                                 <!-- Start Author Commentcontant -->
                                 <div class="d-flex justify-content-center">
                                    <img class="wh-100 rounded-circle" src="{{ asset('img/team-2.png') }}" alt="">
                                 </div>
                                 <p class="author-comment">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    doloresea 
                                 </p>
                                 <!-- End Author Comment -->
                                 <div class="author-thumb mb-sm-6 mb-xs-3">
                                    <p class="mb-0">Duran Clayton</p>
                                    <span class="d-flex justify-content-center">UI/UX Designer</span>
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
</div>
@endsection