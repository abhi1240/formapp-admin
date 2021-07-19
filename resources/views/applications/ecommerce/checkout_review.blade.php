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
            <div class=" global-shadow checkout-review border p-sm-50 p-20 mb-50 bg-white radius-xl w-100">
                <div class="row">
                    <div class="col-12">
                        <div class="checkout-progress-indicator">
                            <div class="checkout-progress">
                                <div class="step completed" id="1">
                                    <span class="las la-check"></span>
                                    <span>Create Account</span>
                                </div>
                                <div class="current"><img src="{{ asset('img/svg/green.svg') }}" alt="img" class="svg"></div>
                                <div class="step completed" id="2">
                                    <span class="las la-check"></span>
                                    <span>Shipping Address</span>
                                </div>
                                <div class="current"><img src="{{ asset('img/svg/green.svg') }}" alt="img" class="svg"></div>
                                <div class="step completed" id="3">
                                    <span class="las la-check"></span>
                                    <span>Payment Method</span>
                                </div>
                                <div class="current"><img src="{{ asset('img/svg/checkoutin.svg') }}" alt="img" class="svg"></div>
                                <div class="step current" id="4">
                                    <span>4</span>
                                    <span>Review Order</span>
                                </div>
                            </div><!-- ends: checkout progress -->
                        </div><!-- ends: checkout -->
                        <h4 class="fw-500 checkout-review-title">4. Review and confirm your order</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <div class="card crc bg-normal p-sm-30 p-15">
                                    <div class="card-body mb-30 bg-white bg-shadow radius-xl px-sm-30 px-15 pt-25  mb-30">
                                        <div class="crc__title mb-30">
                                            <h5 class="color-gray">Shipping Information</h5> <span class="color"></span>
                                            <button type="submit" class="border-0 crc__title-btn shadow-none bg-transparent color-info content-center fs-14"><span data-feather="edit"></span>edit</button>
                                        </div>
                                        <div class="d-flex mb-10">
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
                                        <button type="submit" class="border-0 crc__title-btn shadow-none bg-transparent color-info content-center fs-13 fw-500 p-0"><span data-feather="plus"></span>Add new address</button>
                                    </div>
                                    <div class="card-body mb-30 bg-white bg-shadow radius-xl px-sm-30 px-15 pt-25  mb-30">
                                        <div class="crc__title mb-30">
                                            <h5 class="color-gray">Payment Method</h5> <span class="color"></span>
                                        </div>
                                        <div class="d-flex mb-20 align-items-center">
                                            <div class="radio-theme-default custom-radio   mr-2">
                                                <input class="radio" type="radio" name="radio-vertical2" value=0 id="radio-vl6">
                                                <label for="radio-vl6">
                                                    <span class="radio-text"></span>
                                                </label>
                                            </div>
                                            <span class="crc__method"><img src="{{ asset('img/ms.png') }}" alt="img"> •••• •••• ••••
                                                    2527</span>
                                        </div>
                                        <button type="submit" class="border-0 crc__title-btn shadow-none bg-transparent color-info content-center fs-13 fw-500 p-0"><span data-feather="plus"></span>Add new card </button>
                                    </div>
                                    <div class="card-body bg-white bg-shadow radius-xl crc-table p-sm-30 p-15 ">
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
                            </div><!-- ends: col -->
                            <div class="col-xl-5">
                                <div class="card order-summery order-summery--width bg-normal p-sm-25 p-15 ml-0 mt-xl-0 mt-30">
                                    <div class="card-header border-bottom-0 p-0 pb-25">
                                        <h5 class="fw-500">Order Summary</h5>
                                    </div>
                                    <div class="card-body bg-white">
                                        <div class="total">
                                            <div class="subtotalTotal">
                                                Subtotal:
                                                <span>$1,690.26</span>
                                            </div>
                                            <div class="taxes">
                                                discount:
                                                <span>-$126.30</span>
                                            </div>
                                            <div class="shipping">
                                                Shipping charge:
                                                <span>$46.30</span>
                                            </div>
                                        </div>
                                        <div class="select-cupon position-relative">
                                            <span class="percent"><img src="{{ asset('img/svg/coupon.svg') }}" alt="svg" class="svg"></span>
                                            <select class="js-example-basic-single js-states form-control" id="cupon">
                                                <option value="01">HROJSF</option>
                                                <option value="02">RYZZWK</option>
                                                <option value="03">CLMVBG</option>
                                                <option value="04">RQAEAD</option>
                                                <option value="05">DFINSX</option>
                                            </select>
                                        </div>
                                        <div class="promo-code">
                                            <form>
                                                <label for="exampleInputEmail1">promo code</label>
                                                <div class="d-flex align-items-center">
                                                    <input id="exampleInputEmail1" type="text" class="form-control" />
                                                    <a href="#" class="btn">apply</a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="total-money d-flex justify-content-between mt-45">
                                            <h6>Total :</h6>
                                            <h5 class="text-primary">$1738.60</h5>
                                        </div>
                                        <a href="{{ route('applications.ecommerce.paymentStatus') }}" class="checkout btn-secondary content-center w-100 btn-lg mt-25"> place order</a>
                                    </div>
                                </div><!-- ends: .card -->
                            </div><!-- ends: col -->
                        </div>
                    </div><!-- ends: col -->
                </div>
            </div>
        </div>
    </div>
@endsection
