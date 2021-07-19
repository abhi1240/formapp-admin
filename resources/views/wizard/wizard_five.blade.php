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
                           <div class="step current bg-lighter" id="1">
                              <span>Create Account</span>
                              <span>Setup Your Account Details</span>
                           </div>
                           <div class="step" id="2">
                              <span>Shipping Address</span>
                              <span>Choose Your Location</span>
                           </div>
                           <div class="step" id="3">
                              <span>Payment Method</span>
                              <span>Use Credit or Debit Cards</span>
                           </div>
                           <div class="step" id="4">
                              <span>Review Order</span>
                              <span>Review and Submit</span>
                           </div>
                        </div>
                     </div>
                     <!-- checkout -->
                  </div>
                  <div class="col-lg-6">
                     <div class=" checkout-shipping-form pt-lg-50">
                        <div class="card px-0 pt-0 pb-0 mt-lg-0 radius-md border-0">
                           <div class="card-header border-bottom-0 align-content-start pb-sm-0 pb-3 px-0 mb-0 pt-0">
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
                                       <label for="phoneNumber1">Email Address</label>
                                       <input type="Email" class="form-control" id="phoneNumber1" placeholder="username@email.com">
                                    </div>
                                    <div class="form-group create-passord mb-0">
                                       <label for="phoneNumber">Confirm Password</label>
                                       <input type="password" class="form-control" id="phoneNumber" placeholder="Password" value="121445">
                                    </div>
                                    <span class="create-passord-warn">Enter a valid password. Min 6 characters
                                    long</span>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- ends: card -->
                        <div class="d-flex pt-40 justify-content-md-end justify-content-center border-top mt-25">
                           <a href="{{ route('wizard.checkout2Wizard10') }}" class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save
                           & Next<i class="ml-10 mr-0 las la-arrow-right"></i></a>
                        </div>
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