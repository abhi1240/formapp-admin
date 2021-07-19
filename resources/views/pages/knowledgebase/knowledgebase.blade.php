@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="social-dash-wrap">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Knowledgebase</h4>
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
         <div class="knowledgebase">
            <div class="row justify-content-center">
               <div class="cus-6 col-md-10">
                  <div class="kb text-center">
                     <h1>How Can We Help?</h1>
                     <div class="kb__header-search" tabindex="0">
                        <form class="kb__header-search-form">
                           <div class="input-group">
                              <div class="kb__select-wrapper">
                                 <select class="kb__select">
                                    <option value=" ">All products</option>
                                    <option value="kb">Articles</option>
                                    <option value="post">Posts</option>
                                    <option value="dvfaq">FAQ</option>
                                    <option value="page">Pages</option>
                                 </select>
                              </div>
                              <input type="text" class="form-control ui-autocomplete-input" placeholder="Search anything" name="s" autocomplete="off">
                              <div class="input-group-append">
                                 <button type="submit" class="btn">Search
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="kb__home-categories-area">
                     <ul class="kb__categories content-center">
                        <li>
                           <p>Popular topics:</p>
                        </li>
                        <li>
                           <a href="#">
                           Message formatting
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           Notifications
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           Change password
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="knowledgebase-details knowledgebase-details--row">
            <div class="row justify-content-center">
               <div class="cus-8 col-md-10 ">
                  <ul class="nav nav-tabs knowledgebase__nav" id="knowledgebase" role="tablist">
                     <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="plugins-tab" data-toggle="pill" href="#plugins" role="tab" aria-controls="plugins" aria-selected="true">Plugins</a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a class="nav-link" id="themes-tab" data-toggle="pill" href="#themes" role="tab" aria-controls="themes" aria-selected="false">Themes</a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a class="nav-link" id="extensions-tab" data-toggle="pill" href="#extensions" role="tab" aria-controls="extensions" aria-selected="false">Extensions</a>
                     </li>
                  </ul>
               </div>
               <div class="cus-8 col-md-10">
                  <div class="tab-content" id="knowledgebaseContent">
                     <div class="tab-pane fade show active" id="plugins" role="tabpanel" aria-labelledby="plugins-tab">
                        <div class="row">
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Introduction to Plugin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Manage your account</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Productivity tools for your Plugin admin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Introduction to Plugin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Manage your account</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Productivity tools for your Plugin admin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="knowledgebase__hr"></div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="knowledgebase__article-title">
                                 <h2>Popular articles</h2>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="card knowledgebase__article bg-primary mb-30">
                                 <div class="card-body">
                                    <span>Article</span>
                                    <h3>Learn everything you need
                                       to know getting help with
                                       Lorem Ipsum
                                    </h3>
                                    <div class="knowledgebase__article-more">
                                       <a href="#">read more <i class="las la-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="card knowledgebase__article bg-warning mb-30">
                                 <div class="card-body">
                                    <span>Article</span>
                                    <h3>Learn everything you need
                                       to know getting help with
                                       Lorem Ipsum
                                    </h3>
                                    <div class="knowledgebase__article-more">
                                       <a href="#">read more <i class="las la-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="card knowledgebase__article bg-success mb-30">
                                 <div class="card-body">
                                    <span>Article</span>
                                    <h3>Learn the basics via this module-based course.</h3>
                                    <div class="knowledgebase__article-more">
                                       <a href="#">read more <i class="las la-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="card knowledgebase__article bg-info mb-30">
                                 <div class="card-body">
                                    <span>Article</span>
                                    <h3>Does Lorem comply with
                                       the General Data
                                       Protection Regulation for
                                       EU customers?
                                    </h3>
                                    <div class="knowledgebase__article-more">
                                       <a href="#">read more <i class="las la-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="card knowledgebase__article bg-secondary mb-30">
                                 <div class="card-body">
                                    <span>Article</span>
                                    <h3>Does Lorem comply with
                                       the General Data
                                       Protection Regulation for
                                       EU customers?
                                    </h3>
                                    <div class="knowledgebase__article-more">
                                       <a href="#">read more <i class="las la-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="card knowledgebase__article bg-danger mb-30">
                                 <div class="card-body">
                                    <span>Article</span>
                                    <h3>Learn the basics via this
                                       module-based course.
                                    </h3>
                                    <div class="knowledgebase__article-more">
                                       <a href="#">read more <i class="las la-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                           <div class="col-md-12">
                              <div class="knowledgebase__cta mt-20">
                                 <h3>Still no luck? We can help!</h3>
                                 <p>Contact us and we’ll get back to you as soon as possible.</p>
                                 <div class="content-center">
                                    <button type="button" class="btn btn-primary btn-default btn-squared btn-shadow-primary">Submit
                                    a Request</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="themes" role="tabpanel" aria-labelledby="themes-tab">
                        <div class="row">
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Introduction to Plugin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Manage your account</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Productivity tools for your Plugin admin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Introduction to Plugin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Manage your account</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Productivity tools for your Plugin admin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="extensions" role="tabpanel" aria-labelledby="extensions-tab">
                        <div class="row">
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Introduction to Plugin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Manage your account</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Productivity tools for your Plugin admin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Introduction to Plugin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Manage your account</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="knowledgebase-2.html">see more <i class="las la-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6">
                              <div class="knowledgebase__list">
                                 <h3>Productivity tools for your Plugin admin</h3>
                                 <ul>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                    </li>
                                 </ul>
                                 <div class="knowledgebase__more">
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">see more <i class="las la-arrow-right"></i></a>
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