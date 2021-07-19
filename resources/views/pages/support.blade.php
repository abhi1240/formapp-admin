@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">Support Center</h4>
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
      <div class="banner-feature--14 card mb-25">
         <div class="row justify-content-center">
            <div class="col-md-9">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="card-body d-inline-block">
                        <h1 class="d-flex">Hello, We are here to help</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        </p>
                        <div class="d-flex justify-content-start">
                           <button class="btn btn-primary btn-default btn-squared btn-shadow-primary" type="button">Create
                           Support Ticket
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="banner-feature__shape mt-50 d-flex justify-content-end">
                        <img src="{{ asset('img/svg/banne-group21.svg') }}" alt="img" class="svg">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="ard banner-feature--16 mb-50  px-xxl-0 px-sm-30 px-15">
         <div class="row justify-content-center">
            <div class="col-xxl-9">
               <div class="row">
                  <div class="col-xxl-4 col-lg-6 mb-25">
                     <div class="card shadow-none border-0">
                        <div class="card-body banner-feature--15">
                           <div class="banner-feature__shape d-flex justify-content-center">
                              <div class="wh-80 bg-primary rounded-circle content-center">
                                 <img src="{{ asset('img/svg/idea.svg') }}" alt="img" class="svg">
                              </div>
                           </div>
                           <div class="pb-md-0 pb-30 text-center">
                              <h4>Knowledgebase</h4>
                              <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy</p>
                           </div>
                           <div class="content-center mt-25">
                              <button class="btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill">Learn
                              More</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6 mb-25">
                     <div class="card shadow-none border-0">
                        <div class="card-body banner-feature--15">
                           <div class="banner-feature__shape d-flex justify-content-center">
                              <div class="wh-80 bg-info rounded-circle content-center">
                                 <img src="{{ asset('img/svg/chat.svg') }}" alt="img" class="svg">
                              </div>
                           </div>
                           <div class="pb-md-0 pb-30 text-center">
                              <h4>FAQ</h4>
                              <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy</p>
                           </div>
                           <div class="content-center mt-25">
                              <button class="btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill">Learn
                              More</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6 mb-25">
                     <div class="card shadow-none border-0">
                        <div class="card-body banner-feature--15">
                           <div class="banner-feature__shape d-flex justify-content-center">
                              <div class="wh-80 bg-success rounded-circle content-center">
                                 <img src="{{ asset('img/svg/documents.svg') }}" alt="img" class="svg">
                              </div>
                           </div>
                           <div class="pb-md-0 pb-30 text-center">
                              <h4>Documentation</h4>
                              <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr, sed diam nonumy</p>
                           </div>
                           <div class="content-center mt-25">
                              <button class="btn btn-primary btn-sm btn-squared btn-transparent-primary rounded-pill">Learn
                              More</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="banner-feature--17 px-xxl-0 px-sm-30 px-0">
            <div class="row justify-content-center">
               <div class="col-xxl-9">
                  <div class="card pb-0 mb-md-50 mb-30 border">
                     <div class="card-header px-30 pt-30 pb-25 border-bottom-0">
                        <h4 class="fw-500">Frequently Asked Questions</h4>
                     </div>
                     <div class="card-body pt-0 pb-30 px-md-30 px-15">
                        <div class="application-faqs">
                           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <!-- panel 1 -->
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                       <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       How long does it take to download updates?
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="panel-body">
                                       <p class="mb-sm-35 mb-20">Many support queries and technical questions will
                                          already be answered in supporting documentation such as FAQ's
                                          and comments from previous buyers. Anim pariatur cliche
                                          reprehenderit, enim eiusmod high life accusamus terry richardson
                                          ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                          dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                          3 wolf moon tempor, sunt aliqua put a bird on it squid
                                          single-origin coffee nulla assumenda shoreditch et.
                                       </p>
                                       <span class="fs-14 fw-500 color-dark">Was this article
                                       helpful?</span>
                                       <div class="button-group d-flex mt-2 flex-wrap">
                                          <button class="btn btn-default btn-squared btn-outline-success px-15 "><span data-feather="meh"></span>
                                          Yes
                                          </button>
                                          <button class="btn btn-default btn-squared btn-outline-warning px-15 "><span data-feather="frown"></span>
                                          No
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- panel 2 -->
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                       <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       How to use SCSS variables to build custom color?
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapseTwo" class="panel-collapse collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                       <p class="mb-sm-35 mb-20">Many support queries and technical questions will
                                          already be answered in supporting documentation such as FAQ's
                                          and comments from previous buyers. Anim pariatur cliche
                                          reprehenderit, enim eiusmod high life accusamus terry richardson
                                          ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                          dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                          3 wolf moon tempor, sunt aliqua put a bird on it squid
                                          single-origin coffee nulla assumenda shoreditch et.
                                       </p>
                                       <span class="fs-14 fw-500 color-dark">Was this article
                                       helpful?</span>
                                       <div class="button-group d-flex mt-2 flex-wrap">
                                          <button class="btn btn-default btn-squared btn-outline-success px-15 "><span data-feather="meh"></span>
                                          Yes
                                          </button>
                                          <button class="btn btn-default btn-squared btn-outline-warning px-15 "><span data-feather="frown"></span>
                                          No
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- panel 3 -->
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                       <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       How long does it take to download updates?
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="panel-body">
                                       <p class="mb-sm-35 mb-20">Many support queries and technical questions will
                                          already be answered in supporting documentation such as FAQ's
                                          and comments from previous buyers. Anim pariatur cliche
                                          reprehenderit, enim eiusmod high life accusamus terry richardson
                                          ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                          dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                          3 wolf moon tempor, sunt aliqua put a bird on it squid
                                          single-origin coffee nulla assumenda shoreditch et.
                                       </p>
                                       <span class="fs-14 fw-500 color-dark">Was this article
                                       helpful?</span>
                                       <div class="button-group d-flex mt-2 flex-wrap">
                                          <button class="btn btn-default btn-squared btn-outline-success px-15 "><span data-feather="meh"></span>
                                          Yes
                                          </button>
                                          <button class="btn btn-default btn-squared btn-outline-warning px-15 "><span data-feather="frown"></span>
                                          No
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- panel 4 -->
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingfour">
                                    <h4 class="panel-title">
                                       <a class="collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                       What is the flex layout?
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">
                                    <div class="panel-body">
                                       <p class="mb-sm-35 mb-20">Many support queries and technical questions will
                                          already be answered in supporting documentation such as FAQ's
                                          and comments from previous buyers. Anim pariatur cliche
                                          reprehenderit, enim eiusmod high life accusamus terry richardson
                                          ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                          dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                          3 wolf moon tempor, sunt aliqua put a bird on it squid
                                          single-origin coffee nulla assumenda shoreditch et.
                                       </p>
                                       <span class="fs-14 fw-500 color-dark">Was this article
                                       helpful?</span>
                                       <div class="button-group d-flex mt-2 flex-wrap">
                                          <button class="btn btn-default btn-squared btn-outline-success px-15 "><span data-feather="meh"></span>
                                          Yes
                                          </button>
                                          <button class="btn btn-default btn-squared btn-outline-warning px-15 "><span data-feather="frown"></span>
                                          No
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- panel 5 -->
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingfive">
                                    <h4 class="panel-title">
                                       <a class="collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                       How long does it take to download updates?
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion">
                                    <div class="panel-body">
                                       <p class="mb-sm-35 mb-20">Many support queries and technical questions will
                                          already be answered in supporting documentation such as FAQ's
                                          and comments from previous buyers. Anim pariatur cliche
                                          reprehenderit, enim eiusmod high life accusamus terry richardson
                                          ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                          dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                          3 wolf moon tempor, sunt aliqua put a bird on it squid
                                          single-origin coffee nulla assumenda shoreditch et.
                                       </p>
                                       <span class="fs-14 fw-500 color-dark">Was this article
                                       helpful?</span>
                                       <div class="button-group d-flex mt-2 flex-wrap">
                                          <button class="btn btn-default btn-squared btn-outline-success px-15 "><span data-feather="meh"></span>
                                          Yes
                                          </button>
                                          <button class="btn btn-default btn-squared btn-outline-warning px-15 "><span data-feather="frown"></span>
                                          No
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- panel 6 -->
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingsix">
                                    <h4 class="panel-title">
                                       <a class="collapsed" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                       Where to buy this UI dashboard?
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" data-parent="#accordion">
                                    <div class="panel-body">
                                       <p class="mb-sm-35 mb-20">Many support queries and technical questions will
                                          already be answered in supporting documentation such as FAQ's
                                          and comments from previous buyers. Anim pariatur cliche
                                          reprehenderit, enim eiusmod high life accusamus terry richardson
                                          ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                          dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                          3 wolf moon tempor, sunt aliqua put a bird on it squid
                                          single-origin coffee nulla assumenda shoreditch et.
                                       </p>
                                       <span class="fs-14 fw-500 color-dark">Was this article
                                       helpful?</span>
                                       <div class="button-group d-flex mt-2 flex-wrap">
                                          <button class="btn btn-default btn-squared btn-outline-success px-15 "><span data-feather="meh"></span>
                                          Yes
                                          </button>
                                          <button class="btn btn-default btn-squared btn-outline-warning px-15 "><span data-feather="frown"></span>
                                          No
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- panel 7 -->
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingseven">
                                    <h4 class="panel-title">
                                       <a class="collapsed" data-toggle="collapse" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                       How long does it take to download updates?
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven" data-parent="#accordion">
                                    <div class="panel-body">
                                       <p class="mb-sm-35 mb-20">Many support queries and technical questions will
                                          already be answered in supporting documentation such as FAQ's
                                          and comments from previous buyers. Anim pariatur cliche
                                          reprehenderit, enim eiusmod high life accusamus terry richardson
                                          ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                          dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                          3 wolf moon tempor, sunt aliqua put a bird on it squid
                                          single-origin coffee nulla assumenda shoreditch et.
                                       </p>
                                       <span class="fs-14 fw-500 color-dark">Was this article
                                       helpful?</span>
                                       <div class="button-group d-flex mt-2 flex-wrap">
                                          <button class="btn btn-default btn-squared btn-outline-success px-15 "><span data-feather="meh"></span>
                                          Yes
                                          </button>
                                          <button class="btn btn-default btn-squared btn-outline-warning px-15 "><span data-feather="frown"></span>
                                          No
                                          </button>
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
   </div>
</div>
@endsection