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
               <div class="col-xl-12">
                   <div class="row justify-content-center">
                       <div class="col-lg-4">
                           <div class="checkout-progress-indicator border-0 p-0 radius-md mt-lg-30 p-xl-20 py-30 pl-30 pr-lg-0 pr-30">
                               <div class="checkout-progress3">
                                   <div class="step" id="1">
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
                                   <div class="step current bg-lighter" id="4">
                                       <span>Review Order</span>
                                       <span>Review and Submit</span>
                                   </div>
                               </div>
                           </div><!-- checkout -->
                       </div>
                       <div class="col-lg-7">
                           <div class="checkout-shipping-form pt-45">
                               <h4 class="fw-500 checkout-review-title mb-50 mt-0">Review and confirm your order</h4>
                               <div class="card crc p-0 border-0">
                                   <div class="card-body mb-30 bg-lighter shadow-none radius-xl px-sm-30 px-15 pt-25  mb-30">
                                       <div class="crc__title mb-30">
                                           <h5 class="color-gray">Shipping Information</h5> <span class="color"></span>
                                           <button type="submit" class="border-0 crc__title-btn shadow-none bg-transparent color-info content-center fs-14"><span data-feather="edit"></span>edit</button>
                                       </div>
                                       <div class="d-flex">
                                           <div class="radio-theme-default custom-radio   mr-2">
                                               <input class="radio" type="radio" name="radio-vertical" value=0 id="radio-vl5" checked>
                                               <label for="radio-vl5">
                                                   <span class="radio-text"></span>
                                               </label>
                                           </div>
                                           <div class="check-review__contact">
                                               <p>Ibn Adam <br> Phone: +61412345678</p>
                                               <span>795 Folsom Ave, Suite 600 San Francisco, CA 94107 United States</span>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card-body mb-30 bg-lighter shadow-none radius-xl px-sm-30 px-15 pt-25  mb-30">
                                       <div class="crc__title mb-30">
                                           <h5 class="color-gray">Payment Method</h5> <span class="color"></span>
                                       </div>
                                       <div class="d-flex align-items-center">


                                           <div class="radio-theme-default custom-radio   mr-2">
                                               <input class="radio" type="radio" name="radio-vertical2" value=0 id="radio-vl6">
                                               <label for="radio-vl6">
                                                   <span class="radio-text"></span>
                                               </label>
                                           </div>
                                           <span class="crc__method"><img src="{{ asset('img/ms.png') }}" alt="img"> •••• •••• ••••
                                               2527</span>
                                       </div>
                                   </div>
                                   <div class="card-body bg-lighter shadow-none radius-xl crc-table p-sm-30 p-15 ">
                                       <div class="table-responsive">
                                           <table id="cart" class="table table-borderless mb-0">
                                               <tbody>
                                                   <tr>
                                                       <td class="Product-cart-title">
                                                           <div class="media  align-items-center">
                                                               <img class="mr-3 wh-80 align-self-center" src="{{ asset('img/review1.png') }}" alt="Generic placeholder image">
                                                               <div class="media-body">
                                                                   <h5 class="mt-0">Fiber base chair</h5>
                                                                   <div class="d-flex">
                                                                       <p>Size:<span>large</span></p>
                                                                       <p>color:<span>brown</span></p>

                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <!-- Start: Product Quantity -->
                                                           <div class="quantity product-cart__quantity">
                                                               <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                               <input type="number" value="1" class="qty qh-36 input">
                                                               <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                                           </div>
                                                           <!-- End: Product Quantity -->
                                                       </td>
                                                       <td class=" subtotal">$743.30</td>
                                                   </tr>
                                                   <tr>
                                                       <td class="Product-cart-title">
                                                           <div class="media  align-items-center">
                                                               <img class="mr-3 wh-80 align-self-center" src="{{ asset('img/review2.png') }}" alt="Generic placeholder image">
                                                               <div class="media-body">
                                                                   <h5 class="mt-0">Fiber base chair</h5>
                                                                   <div class="d-flex">
                                                                       <p>Size:<span>large</span></p>
                                                                       <p>color:<span>brown</span></p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <!-- Start: Product Quantity -->
                                                           <div class="quantity product-cart__quantity">
                                                               <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                               <input type="number" value="1" class="qty qh-36 input">
                                                               <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                                           </div>
                                                           <!-- End: Product Quantity -->
                                                       </td>
                                                       <td class=" subtotal">$878.30</td>
                                                   </tr>
                                               </tbody>
                                               <tfoot>
                                                   <tr>
                                                       <td>

                                                       </td>
                                                       <td colspan="2" class="order-summery">
                                                           <div class="total">
                                                               <div class="subtotalTotal">
                                                                   Subtotal:
                                                                   <span>$1,690.26</span>
                                                               </div>
                                                               <div class="shipping">
                                                                   Shipping charge:
                                                                   <span>$46.30</span>
                                                               </div>
                                                           </div>
                                                           <div class="total-money d-flex justify-content-between align-items-center mt-1">
                                                               <h6>Total :</h6>
                                                               <h5 class="text-primary">$1738.60</h5>
                                                           </div>
                                                       </td>
                                                   </tr>
                                               </tfoot>
                                           </table><!-- ends: table -->
                                       </div>
                                   </div>
                               </div><!-- ends: .card -->
                               <div class="button-group d-flex pt-40 mb-xl-20  justify-content-sm-between justify-content-center m-0 mb-xl-30 mb-30 flex-wrap">
                                   <a href="{{ route('wizard.checkoutPaymentWizard10') }}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize m-sm-0 m-1"><i class="las la-arrow-left mr-10"></i>Previous</a>
                                   <a href="{{ route('wizard.paymentStatusWizard10') }}" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-sm-0 m-1" data-toggle="modal" data-target="#exampleModal">Submit</a>
                               </div><!-- ends: button group -->
                               <!-- Modal -->
                               <div class="modal fade payment-success-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content p-50 d-flex align-items-center">
                                           <div class="modal-icon"><span class="las la-check"></span></div>
                                           <p>All is good! Please confirm the form
                                               submission.</p>
                                           <div class="button-group d-flex justify-content-center flex-wrap">
                                               <a href="#" class="btn text-white btn-primary btn-default btn-squared text-capitalize " data-toggle="modal" data-target="#exampleModal">Submit</a>
                                               <a href="{{ route('wizard.wizardFive') }}" class="btn btn-light btn-default btn-squared fw-400 text-capitalize ">cencel</a>
                                           </div><!-- ends: button group -->
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div><!-- ends: col -->
                   </div>
               </div><!-- ends: col -->
           </div>
       </div><!-- End: .global-shadow-->
   </div>
</div>
@endsection