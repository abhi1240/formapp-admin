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
       <div class=" checkout wizard10 global-shadow mb-30 bg-white radius-xl w-100">
           <div class="row justify-content-center">
               <div class="col-xl-10">
                   <div class="row justify-content-center">
                       <div class="col-lg-5">
                           <div class="checkout-progress-indicator border-0 p-0 radius-md mt-lg-30 p-xl-20 py-30 pl-30 pr-lg-0 pr-30">
                               <div class="checkout-progress3">
                                   <div class="step" id="1">
                                       <span>Create Account</span>
                                       <span>Setup Your Account Details</span>
                                   </div>
                                   <div class="step " id="2">
                                       <span>Shipping Address</span>
                                       <span>Choose Your Location</span>
                                   </div>
                                   <div class="step current bg-lighter" id="3">
                                       <span>Payment Method</span>
                                       <span>Use Credit or Debit Cards</span>
                                   </div>
                                   <div class="step" id="4">
                                       <span>Review Order</span>
                                       <span>Review and Submit</span>
                                   </div>
                               </div>
                           </div><!-- checkout -->
                       </div>
                       <div class="col-lg-7">
                           <div class="card checkout-shipping-form pt-lg-50">
                               <div class="payment-method-area payment-method-area--top w-100 mt-0">
                                   <h4 class="fw-500">Please select your payment method</h4>
                                   <div class="d-flex mt-sm-40 mt-20">
                                       <div class="card payment-method-card w-100 p-0 border-0 shadow-none">
                                           <div class="card-body bg-white shadow-none border-0 p-0">
                                               <form method="post">
                                                   <div class="form-cc">
                                                       <div class="form-group mb-30">
                                                           <label for="payment1">card number</label>
                                                           <div class=" d-flex justify-content-between align-items-center form-control pl-0">
                                                               <input type="text" class="w-100 border-0 box-shadow-none form-control" id="payment1" placeholder="number">
                                                               <img src="{{ asset('img/ms.png') }}" alt="visa" class="form-cc-img d-md-block d-none">
                                                           </div>
                                                       </div>
                                                       <div class="form-group mb-30">
                                                           <label for="payment2">name on card</label>
                                                           <input type="text" class="form-control" id="payment2" placeholder="full name">
                                                       </div>
                                                       <div class="form-group mb-15">
                                                           <label for="payment3">Expiration date</label>
                                                           <div class="d-flex flex-wrap flex-lg-nowrap mb-md-15">
                                                               <div class="w-100 mr-xl-20 mb-15">
                                                                   <select class="js-example-basic-single js-states form-control" id="month">
                                                                       <option value="JAN">Jan</option>
                                                                       <option value="FBR">FRB</option>
                                                                   </select>
                                                               </div>
                                                               <div class="w-100">
                                                                   <select class="js-example-basic-single js-states form-control" id="year">
                                                                       <option value="JAN">2020</option>
                                                                       <option value="FBR">2019</option>
                                                                   </select>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="form-group mb-0 payment-method-csv">
                                                           <label for="payment5">CVV</label>
                                                           <div class="d-flex align-items-center flex-wrap">
                                                               <input type="text" class="form-control mr-10" id="payment5" placeholder="XXX">
                                                           </div>
                                                       </div>
                                                   </div>
                                               </form>
                                           </div>
                                       </div><!-- ends: .card -->
                                   </div>
                               </div><!-- ends: payment area -->
                               <div class="button-group d-flex pt-40 mb-xl-20  justify-content-sm-between m-0 mb-xl-30 mb-30 flex-wrap border-top mt-30">
                                   <a href="{{ route('wizard.checkout2Wizard10') }}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-sm-0 m-1"><i class="las la-arrow-left mr-10"></i>Previous</a>
                                   <a href="{{ route('wizard.checkoutReviewWizard10') }}" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-sm-0 m-1">Save
                                       &
                                       Next<i class="ml-10 mr-0 las la-arrow-right"></i></a>
                               </div><!-- ends: button group -->
                           </div><!-- ends: .card -->
                       </div><!-- ends: col -->
                   </div>
               </div><!-- ends: col -->
           </div>
       </div><!-- End: .global-shadow-->
   </div>
</div>
@endsection