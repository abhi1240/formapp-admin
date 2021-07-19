@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">invoice</h4>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-invoice global-shadow border bg-white radius-xl w-100 mb-30">
                        <div class="payment-invoice__body">
                            <div class="payment-invoice-address d-flex justify-content-sm-between">
                                <div class="payment-invoice-logo">
                                    <a href="{{ asset('dashboard.index') }}"><img class="svg dark" src="{{ asset('img/Logo_Dark.svg') }}" alt=""></a>
                                </div>
                                <div class="payment-invoice-address__area">
                                    <address>Admin Company<br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107, USA<br>
                                        Reg.
                                        number : 245000003513</address>
                                </div>
                            </div><!-- End: .payment-invoice-address -->
                            <div class="payment-invoice-qr d-flex justify-content-between mb-40 px-xl-50 px-30 py-sm-30 py-20 ">
                                <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                    <div class="payment-invoice-qr__number">
                                        <div class="display-3">
                                            Invoice
                                        </div>
                                        <p>No : <span>#642678</span></p>
                                        <p>Date : <span>Jan 17, 2020</span></p>
                                    </div>
                                </div><!-- End: .d-flex -->
                                <div class="d-flex justify-content-center mb-lg-0 mb-25">
                                    <div class="payment-invoice-qr__code bg-white radius-xl p-20">
                                        <img src="{{ asset('img/qr.png') }}" alt="qr">
                                        <p>8364297359912267</p>
                                    </div>
                                </div><!-- End: .d-flex -->
                                <div class="d-flex justify-content-center">
                                    <div class="payment-invoice-qr__address">
                                        <p>Invoice To:</p>
                                        <span>Stanley Jones</span><br>
                                        <span>795 Folsom Ave, Suite 600</span><br>
                                        <span>San Francisco, CA 94107, USA</span>
                                    </div>
                                </div><!-- End: .d-flex -->
                            </div><!-- End: .payment-invoice-qr -->
                            <div class="payment-invoice-table">
                                <div class="table-responsive">
                                    <table id="cart" class="table table-borderless">
                                        <thead>
                                        <tr class="product-cart__header">
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col" class="text-right">Price Per Unit</th>
                                            <th scope="col" class="text-right">Quantity</th>
                                            <th scope="col" class="text-right">Order Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td class="Product-cart-title">
                                                <div class="media  align-items-center">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Fiber base chair</h5>
                                                        <div class="d-flex">
                                                            <p>Size:<span>large</span></p>
                                                            <p>color:<span>brown</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="unit text-right">$248.66</td>
                                            <td class="invoice-quantity text-right">1</td>
                                            <td class="text-right order">$5.11</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td class="Product-cart-title">
                                                <div class="media  align-items-center">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Fiber base chair</h5>
                                                        <div class="d-flex">
                                                            <p>Size:<span>large</span></p>
                                                            <p>color:<span>brown</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="unit text-right">$248.66</td>
                                            <td class="invoice-quantity text-right">2</td>
                                            <td class="text-right order">$5.11</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="order-summery float-right">
                                                <div class="total">
                                                    <div class="subtotalTotal mb-0 text-right">
                                                        Subtotal :
                                                    </div>
                                                    <div class="taxes mb-0 text-right">
                                                        discount :
                                                    </div>
                                                    <div class="shipping mb-0 text-right">
                                                        Shipping charge :
                                                    </div>
                                                </div>
                                                <div class="total-money d-flex justify-content-between align-items-center mt-2 text-right float-right">
                                                    <h6>Total :</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="total-order float-right text-right fs-14 fw-500">
                                                    <p>$1,690.26</p>
                                                    <p>-$126.30</p>
                                                    <p>$46.30</p>
                                                    <h5 class="text-primary">$1736.00</h5>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-invoice__btn mt-lg-50 pt-lg-30 mt-30 pt-20">
                                    <button type="button" class="btn border rounded-pill bg-normal text-gray px-25">
                                        <span data-feather="printer"></span>print</button>
                                    <button type="button" class="btn border rounded-pill bg-normal text-gray px-25">
                                        <span data-feather="send"></span>invoice</button>
                                    <button type="button" class="btn-primary btn rounded-pill px-25 text-white download">
                                        <span data-feather="upload"></span>download</button>
                                </div>
                            </div><!-- End: .payment-invoice-table -->
                        </div><!-- End: .payment-invoice__body -->
                    </div><!-- End: .payment-invoice -->
                </div><!-- End: .col -->
            </div>
        </div>
    </div>
@endsection
