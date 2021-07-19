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
      <div class=" checkout wizard7 global-shadow border px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
         <div class="row justify-content-center">
            <div class="col-xl-8 col-12">
               <div class="checkout-progress-indicator content-center">
                  <div class="checkout-progress justify-content-center">
                     <div class="step completed" id="1">
                        <span class="las la-check"></span>
                        <span>Start</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/green.svg') }}" alt="img" class="svg"></div>
                     <div class="step completed" id="2">
                        <span class="las la-check"></span>
                        <span>Profile</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/green.svg') }}" alt="img" class="svg"></div>
                     <div class="step completed" id="3">
                        <span class="las la-check"></span>
                        <span>Hints</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                     <div class="step current" id="4">
                        <span>4</span>
                        <span>Finish</span>
                     </div>
                  </div>
                  <!-- ends: checkout progress -->
               </div>
               <!-- ends: .checkout-progress-indicator -->
               <div class="row justify-content-center">
                  <div class="col-xl-7 col-lg-8 col-sm-10">
                     <div class="card checkout-shipping-form px-30 pt-2 pb-15 border-color">
                        <div class="card-header border-bottom-0 pb-sm-0 pb-1 px-0">
                           <h4 class="fw-500">4. Let's Finished</h4>
                        </div>
                        <div class="card-body p-0">
                           <div class="edit-profile__body">
                              <div class="checkbox-theme-default custom-checkbox">
                                 <input class="checkbox" type="checkbox" id="mail-1">
                                 <label for="mail-1">I Agree with the
                                 Terms and Conditions.</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- ends: .card -->
                     <div class="button-group d-flex pt-40 justify-content-between flex-wrap">
                        <a href="{{ route('wizard.checkoutPaymentWizard7') }}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-1"><i class="las la-arrow-left mr-10"></i>Previous</a>
                        <a href="{{ route('wizard.paymentStatusWizard7') }}" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save
                        & Next<i class="ml-10 mr-0 las la-arrow-right"></i></a>
                     </div>
                  </div>
                  <!-- ends: .col -->
               </div>
            </div>
            <!-- ends: col -->
         </div>
      </div>
      <!-- ends: .global-shadow -->
   </div>
</div>
@endsection