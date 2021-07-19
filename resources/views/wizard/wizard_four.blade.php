@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="shop-breadcrumb">
               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">checkout</h4>
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
      </div>
   </div>
   <div class="container-fluid">
      <div class=" checkout wizard9 global-shadow border px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
         <div class="row justify-content-center">
            <div class="col-xl-8">
               <div class="row justify-content-center">
                  <div class="col-lg-4">
                     <div class="checkout-progress-indicator border-color p-30 radius-md">
                        <div class="checkout-progress2">
                           <div class="step current" id="1">
                              <span>1</span>
                              <span>Start</span>
                           </div>
                           <div class="step" id="2">
                              <span>2</span>
                              <span>Profile</span>
                           </div>
                           <div class="step" id="3">
                              <span>3</span>
                              <span>Hints</span>
                           </div>
                           <div class="step" id="4">
                              <span>4</span>
                              <span>Finished</span>
                           </div>
                        </div>
                     </div>
                     <!-- checkout -->
                  </div>
                  <div class="col-lg-7">
                     <div class="card checkout-shipping-form px-30 pt-2 pb-0 border-color mt-lg-0 radius-md mt-30 ">
                        <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1 px-0">
                           <h4 class="fw-500">1. Please create your account</h4>
                        </div>
                        <div class="card-body px-0 pb-0 pt-0">
                           <div class="edit-profile__body">
                              <form>
                                 <div class="form-group">
                                    <label for="name1">Username</label>
                                    <input type="text" class="form-control" id="name1" placeholder="Usename">
                                 </div>
                                 <div class="form-group create-passord">
                                    <label for="phoneNumber1">Password</label>
                                    <input type="password" class="form-control" id="phoneNumber1" placeholder="Password" value="121445">
                                 </div>
                                 <div class="form-group create-passord">
                                    <label for="phoneNumber">Confirm Password</label>
                                    <input type="password" class="form-control" id="phoneNumber" placeholder="Password" value="121445">
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- ends: card -->
                     <div class="d-flex pt-40 justify-content-md-end justify-content-center">
                        <a href="{{ route('wizard.checkout2Wizard9') }}" class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save
                        & Next<i class="ml-10 mr-0 las la-arrow-right"></i></a>
                     </div>
                  </div>
                  <!-- ends: col -->
               </div>
            </div>
            <!-- ends: col -->
         </div>
      </div>
      <!-- End: .global-shadow-->
   </div>
</div>
@endsection