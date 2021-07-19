@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="atbd-page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Form</h4>
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
            <div class="col-lg-6">
               <div class="card card-default card-md mb-4">
                  <div class="card-header">
                     <h6>Basic</h6>
                  </div>
                  <div class="card-body">
                     <div class="basic-form-wrapper">
                        <form action="#">
                           <div class="form-basic">
                              <div class="form-group mb-25">
                                 <label>Username or Email Address</label>
                                 <input class="form-control form-control-lg" type="text" name="username" placeholder="name@example.com">
                              </div>
                              <div class="form-group mb-25">
                                 <label>Password</label>
                                 <div class="input-container position-relative icon-right">
                                    <a href="#" class="input-icon icon-right"><span data-feather="eye-off"></span></a>
                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Password">
                                 </div>
                                 <div class="form-inline-action d-flex justify-content-between align-items-center">
                                    <div class="checkbox-theme-default custom-checkbox ">
                                       <input class="checkbox" type="checkbox" id="check-1">
                                       <label for="check-1">
                                       <span class="checkbox-text">
                                       Keep me logged in
                                       </span>
                                       </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot password?</a>
                                 </div>
                              </div>
                              <div class="form-group mb-0">
                                 <button type="submit" class="btn btn-lg btn-primary btn-submit">Log In</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- ends: .card -->
            </div>
            <!-- ends: .col-lg-6 -->
         </div>
      </div>
   </div>
   <!-- ends: .atbd-page-content -->
</div>
@endsection