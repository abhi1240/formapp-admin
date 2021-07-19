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
      <div class=" checkout wizard6 global-shadow border px-sm-50 px-20 pt-sm-50 py-30 mb-30 bg-white radius-xl w-100">
         <div class="row justify-content-center">
            <div class="col-xl-8">
               <div class="checkout-progress-indicator content-center">
                  <div class="checkout-progress">
                     <div class="step current" id="1">
                        <span> <img class="svg" src="{{ asset('img/svg/user.svg') }}" alt=""> </span>
                        <span>Create Account</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                     <div class="step" id="2">
                        <span><img class="svg" src="{{ asset('img/svg/address.svg') }}" alt=""></span>
                        <span>Shipping Address</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                     <div class="step" id="3">
                        <span><img class="svg" src="{{ asset('img/svg/155-credit-card.svg') }}" alt=""></span>
                        <span>Payment Method</span>
                     </div>
                     <div class="current"><img src="{{ asset('img/svg/checkout.svg') }}" alt="img" class="svg"></div>
                     <div class="step" id="4">
                        <span><img class="svg" src="{{ asset('img/svg/024-like.svg') }}" alt=""></span>
                        <span>Review Order</span>
                     </div>
                  </div>
               </div>
               <!-- checkout -->
               <div class="row justify-content-center">
                  <div class="col-xl-7 col-lg-8 col-sm-10">
                     <div class="card checkout-shipping-form border-0">
                        <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1">
                           <h4 class="fw-500">1. Please create your account</h4>
                        </div>
                        <div class="card-body">
                           <div class="edit-profile__body">
                              <form>
                                 <div class="form-group">
                                    <label for="name1">Usename</label>
                                    <input type="text" class="form-control" id="name1" placeholder="Usename">
                                 </div>
                                 <div class="form-group">
                                    <label for="name2">Email Address</label>
                                    <input type="email" class="form-control" id="name2" placeholder="username@email.com">
                                 </div>
                                 <div class="form-group create-passord">
                                    <label for="phoneNumber">Password</label>
                                    <input type="password" class="form-control" id="phoneNumber" placeholder="Password" value="121445">
                                    <span class="create-passord-warn">Enter a valid password. Min 6 characters long</span>
                                 </div>
                                 <div class="d-flex pt-20 mb-20 justify-content-md-end justify-content-center">
                                    <a href="{{ route('wizard.checkout2WizardOne') }}" class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save & Next<i class="ml-10 mr-0 las la-arrow-right"></i></a>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- ends: card -->
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