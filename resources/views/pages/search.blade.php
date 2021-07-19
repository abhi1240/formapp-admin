@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">search</h4>
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
         <div class="col-md-6">
            <div class="search-result global-shadow rounded-pill bg-white">
               <form action="/" class="d-flex align-items-center justify-content-between">
                  <div class="border-right d-flex align-items-center w-100  pl-25 pr-sm-25 pr-0">
                     <span data-feather="search"></span>
                     <input class="form-control border-0 box-shadow-none" type="search" placeholder="Type and search" aria-label="Search">
                  </div>
                  <button type="button" class="border-0 bg-transparent px-25">search</button>
               </form>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="search-keyword mt-20">
               <ul class="nav m-n1" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">all</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Ui design</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Wireframe Kits</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-presentation-tab" data-toggle="pill" href="#pills-presentation" role="tab" aria-controls="pills-presentation" aria-selected="false">Presentation</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-web-tab" data-toggle="pill" href="#pills-web" role="tab" aria-controls="pills-web" aria-selected="false">web design</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-12">
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="search-content mt-30 bg-white radius-xl d-flex mb-50">
                     <div class="card  border-0 px-sm-30 px-20">
                        <div class="card-header flex-1 d-flex align-items-center flex-wrap justify-content-between border-bottom-0 px-0">
                           <p class="keyword-searching text-dark py-10">207 <span class="color-light fw-400">results found
                              for</span> “Keyword”
                           </p>
                           <p class="mb-0 fs-14 color-light fw-400 ">Showing 1-10 of 76 results</p>
                        </div>
                        <div class="card-body border-bottom border-top px-0 pb-0 pt-25">
                           <div class="search-content__keyResult">
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Keyword </span> installing
                                       lorem
                                       multi vendor marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Keyword </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Keyword </span></h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                       Keyword </span> marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Keyword </span> installing
                                       lorem
                                       multi vendor marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Keyword </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Keyword </span></h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                       Keyword </span> marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Keyword </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer border-0 pt-30 pb-40 px-0">
                           <nav class="atbd-page ">
                              <ul class="atbd-pagination d-flex">
                                 <li class="atbd-pagination__item">
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                    <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                    <a href="#" class="atbd-pagination__option">
                                    </a>
                                 </li>
                                 <li class="atbd-pagination__item">
                                    <div class="paging-option">
                                       <select name="page-number" class="page-selection">
                                          <option value="20">20/page</option>
                                          <option value="40">40/page</option>
                                          <option value="60">60/page</option>
                                       </select>
                                    </div>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="search-content mt-30 bg-white radius-xl d-flex mb-50">
                     <div class="card  border-0 px-sm-30 px-20">
                        <div class="card-header flex-1 d-flex align-items-center flex-wrap justify-content-between border-bottom-0 px-0">
                           <p class="keyword-searching text-dark py-10">207 <span class="color-light fw-400">results found
                              for</span> “Ui design”
                           </p>
                           <p class="mb-0 fs-14 color-light fw-400 py-10">Showing 1-10 of 76 results</p>
                        </div>
                        <div class="card-body border-bottom border-top px-0 pb-0 pt-25">
                           <div class="search-content__keyResult">
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Ui design </span> installing
                                       lorem
                                       multi vendor marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Ui design </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Ui design </span></h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                       Ui design </span> marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Ui design </span> installing
                                       lorem
                                       multi vendor marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Ui design </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> Ui design </span></h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                       Ui design </span> marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> Ui design </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer border-0 pt-30 pb-40 px-0">
                           <nav class="atbd-page ">
                              <ul class="atbd-pagination d-flex">
                                 <li class="atbd-pagination__item">
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                    <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                    <a href="#" class="atbd-pagination__option">
                                    </a>
                                 </li>
                                 <li class="atbd-pagination__item">
                                    <div class="paging-option">
                                       <select name="page-number" class="page-selection">
                                          <option value="20">20/page</option>
                                          <option value="40">40/page</option>
                                          <option value="60">60/page</option>
                                       </select>
                                    </div>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="search-content mt-30 bg-white radius-xl d-flex mb-50">
                     <div class="card  border-0 px-sm-30 px-20">
                        <div class="card-header flex-1 d-flex align-items-center flex-wrap justify-content-between border-bottom-0 px-0">
                           <p class="keyword-searching text-dark py-10">207 <span class="color-light fw-400">results found
                              for</span> “Wireframe Kits”
                           </p>
                           <p class="mb-0 fs-14 color-light fw-400 py-10">Showing 1-10 of 76 results</p>
                        </div>
                        <div class="card-body border-bottom border-top px-0 pb-0 pt-25">
                           <div class="search-content__keyResult">
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> wireframe Kits </span> installing
                                       lorem
                                       multi vendor marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> wireframe Kits </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing nonumy eirmod...</p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> wireframe Kits </span></h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                       wireframe Kits </span> marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> wireframe Kits </span> installing
                                       lorem
                                       multi vendor marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing elitr, sed diam nonumy eirmod...</p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> wireframe Kits </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to stop getting emails from lorem <span class="color-primary"> wireframe Kits </span></h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">How to installing lorem multi vendor <span class="color-primary">
                                       wireframe Kits </span> marketplace
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a world-class sadipscing...</p>
                              </div>
                              <div class="mb-30">
                                 <a href="#">
                                    <h6 class="fw-500">
                                       <span class="color-primary"> wireframe Kits </span> how to
                                       copyright and
                                       trademarks
                                    </h6>
                                 </a>
                                 <p class="mb-0">Lorem ipsum dolor amet consetetur get up and running with a
                                    world-class
                                    sadipscing elitr, sed diam nonumy eirmod...
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer border-0 pt-30 pb-40 px-0">
                           <nav class="atbd-page ">
                              <ul class="atbd-pagination d-flex">
                                 <li class="atbd-pagination__item">
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                    <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                    <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                    <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                    <a href="#" class="atbd-pagination__option">
                                    </a>
                                 </li>
                                 <li class="atbd-pagination__item">
                                    <div class="paging-option">
                                       <select name="page-number" class="page-selection">
                                          <option value="20">20/page</option>
                                          <option value="40">40/page</option>
                                          <option value="60">60/page</option>
                                       </select>
                                    </div>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-presentation" role="tabpanel" aria-labelledby="pills-presentation-tab">
               </div>
               <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection