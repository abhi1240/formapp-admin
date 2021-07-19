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
       <div class=" checkout wizard8 global-shadow border px-sm-50 px-20 mb-30 bg-white radius-xl w-100">
           <div class="row justify-content-center">
               <div class="col-xl-12">
                   <div class="row justify-content-center">
                       <div class="col-xl-4">
                           <div class="checkout-progress-indicator h-100vh">
                               <div class="checkout-progress justify-content-center px-0">
                                   <div class="step completed" id="1">
                                       <span class="las la-check fs-18"></span>
                                   </div>
                                   <div class="step completed" id="2">
                                       <span class="las la-check fs-18"></span>
                                   </div>
                                   <div class="step completed" id="3">
                                       <span class="las la-check fs-18"></span>
                                   </div>
                                   <div class="step completed" id="4">
                                       <span class="las la-check fs-18"></span>
                                   </div>
                               </div><!-- End: .checkout-progress -->
                               <div class="card-header border-bottom-0 mt-50">
                                   <img class="svg" src="{{ asset('img/svg/progress5.svg') }}" alt="">
                               </div>
                           </div><!-- checkout -->
                       </div>
                       <div class="col-xl-7 col-lg-8 col-sm-10">
                           <div class="checkout-shipping-form pt-50 mt-0 pr-0 h-100vh">
                               <div class="card payment-status bg-normal mt-0 p-sm-30 p-15">
                                   <div class="card-body bg-white bg-shadow radius-xl px-sm-30 pt-sm-25 m-0 p-0">
                                       <div class="payment-status__area  py-sm-25 py-20 text-center">
                                           <div class="content-center">
                                               <span class="wh-34 bg-success rounded-circle content-center">
                                                   <span class="las la-check fs-16 color-white"></span></span>
                                           </div>
                                           <h4 class="fw-500 mt-20 mb-10">Payment Successful</h4>
                                           <span class="fs-15 color-gray">Thank you! We've received your payment.</span>
                                       </div>
                                   </div>
                               </div><!-- End: .card -->
                           </div>
                       </div><!-- ends: col -->
                   </div>
               </div><!-- ends: col -->
           </div>
       </div><!-- End: .global-shadow-->
   </div>
</div>
@endsection