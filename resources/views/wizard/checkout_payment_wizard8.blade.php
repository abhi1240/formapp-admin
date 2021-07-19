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
               <div class="col-xl-10">
                   <div class="row justify-content-center">
                       <div class="col-xl-5">
                           <div class="checkout-progress-indicator">
                               <div class="checkout-progress justify-content-center px-0">
                                   <div class="step completed" id="1">
                                       <span class="las la-check"></span>
                                   </div>
                                   <div class="step completed" id="2">
                                       <span class="las la-check"></span>
                                   </div>
                                   <div class="step current" id="3">
                                       <span>3</span>
                                   </div>
                                   <div class="step" id="4">
                                       <span>4</span>
                                   </div>
                               </div><!-- ends: checkout progress -->
                               <div class="card-header border-bottom-0">
                                   <h4>Please select your payment method</h4>
                                   <p>Lorem Ipsum is simply dummy text of the
                                       dummy typesetting industry.</p>
                                   <img class="svg" src="{{ asset('img/svg/progress2.svg') }}" alt="">
                               </div>
                           </div><!-- checkout -->
                       </div>
                       <div class="col-xl-7 col-lg-8 col-sm-10">
                           <div class="card checkout-shipping-form">
                               <div class="payment-method-area payment-method-area--top w-100 mb-20">
                                   <h4 class="fw-500">3. Please select your payment method</h4>
                                   <div class="d-flex  mt-sm-50 mt-30">
                                       <div class="radio-theme-default custom-radio  mt-40 mr-2">
                                           <input class="radio box-shadow-none" type="radio" name="radio-vertical" value=0 id="radio-vl5" checked>
                                           <label for="radio-vl5">
                                               <span class="radio-text"></span>
                                           </label>
                                       </div>
                                       <div class="card payment-method-card w-100  bg-normal px-sm-25 px-15 pt-20 pb-20">
                                           <div class="card-header border-bottom-0 p-0 pb-25 m-0">
                                               <h6>Credit / Debit card</h6>
                                               <div class="payment-way mt-xl-0 mt-20 d-flex align-items-center">
                                                   <img src="{{ asset('img/ms.png') }}" alt="payment">
                                                   <img src="{{ asset('img/visa.png') }}" alt="payment">
                                                   <img src="{{ asset('img/american-express.png') }}" alt="payment">
                                               </div>
                                           </div>
                                           <div class="card-body bg-white">
                                               <form method="post">
                                                   <div class="form-cc">
                                                       <div class="form-group mb-30">
                                                           <label for="payment1">card number</label>
                                                           <div class=" d-flex justify-content-between align-items-center form-control">
                                                               <input type="text" class="w-100 border-0 box-shadow-none" id="payment1" placeholder="number">
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
                                                               <a href="#" class="color-info">what is this</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </form>
                                           </div>
                                       </div><!-- ends: .card -->
                                   </div>
                               </div><!-- ends: payment area -->
                               <div class="payment-method-paypal">
                                   <div class="d-flex align-items-center mb-20">
                                       <div class="radio-theme-default custom-radio  d-flex mr-2">
                                           <input class="radio" type="radio" name="radio-vertical" value=0 id="radio-vl6">
                                           <label for="radio-vl6">
                                               <span class="radio-text"></span>
                                           </label>
                                       </div>
                                       <button type="button" class=" form-control d-flex align-items-center justify-content-between">Pay with
                                           PayPal<img src="{{ asset('img/paypal.png') }}" alt="paypal" class="d-lg-block d-none"></button>
                                   </div>
                                   <div class="d-flex align-items-center">
                                       <div class="radio-theme-default custom-radio  d-flex mr-2">
                                           <input class="radio" type="radio" name="radio-vertical" value=0 id="radio-vl7">
                                           <label for="radio-vl7">
                                               <span class="radio-text"></span>
                                           </label>
                                       </div>
                                       <button type="button" class=" form-control d-flex align-items-center" id="payment3">Cash
                                           on
                                           delivery</button>
                                   </div>
                               </div><!-- ends: payment paypal -->
                               <div class="button-group d-flex pt-40 mb-xl-20  justify-content-sm-between justify-content-center m-0 mb-xl-30 mb-30 flex-wrap">
                                   <a href="{{ route('wizard.checkout2Wizard8') }}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-sm-0 m-1"><i class="las la-arrow-left mr-10"></i>Previous</a>
                                   <a href="{{ route('wizard.checkoutReviewWizard8') }}" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-sm-0 m-1">Save
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