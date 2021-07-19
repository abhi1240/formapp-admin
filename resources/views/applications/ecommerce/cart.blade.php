@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">product cart</h4>
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
            <div class="cartPage  global-shadow border pr-sm-30 pl-sm-30  p-15 py-sm-30 bg-white radius-xl w-100 mb-30">
                <div class="row justify-content-center">
                    <div class="cus-xl-9 col-12 ">
                        <div class="product-cart mb-sm-0 mb-20">
                            <div class="table-responsive">
                                <table id="cart" class="table table-borderless table-hover">
                                    <thead>
                                    <tr class="product-cart__header">
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col" class="text-center">total</th>
                                        <th scope="col" class=""></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="Product-cart-title">
                                            <div class="media  align-items-center">
                                                <img class="mr-3 wh-80 align-self-center radius-xl bg-opacity-primary" src="{{ asset('img/cart1.png') }}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Fiber base chair</h5>
                                                    <div class="d-flex">
                                                        <p>Size:<span>large</span></p>
                                                        <p>color:<span>brown</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">$248.66</td>
                                        <td>
                                            <!-- Start: Product Quantity -->
                                            <div class="quantity product-cart__quantity">
                                                <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                <input type="number" value="1" class="qty qh-36 input">
                                                <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                            </div>
                                            <!-- End: Product Quantity -->
                                        </td>
                                        <td class="text-center subtotal">$5.11</td>
                                        <td class="actions">
                                            <button type="button" class="action-btn float-right">
                                                <i class="las la-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="Product-cart-title">
                                            <div class="media  align-items-center">
                                                <img class="mr-3 wh-80 align-self-center radius-xl bg-opacity-primary" src="{{ asset('img/cart2.png') }}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Fiber base chair</h5>
                                                    <div class="d-flex">
                                                        <p>Size:<span>large</span></p>
                                                        <p>color:<span>brown</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">$248.66</td>
                                        <td>
                                            <!-- Start: Product Quantity -->
                                            <div class="quantity product-cart__quantity">
                                                <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                <input type="number" value="1" class="qty qh-36 input">
                                                <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                            </div>
                                            <!-- End: Product Quantity -->
                                        </td>
                                        <td class="text-center subtotal">$5.11</td>
                                        <td class="actions">
                                            <button type="button" class="action-btn float-right">
                                                <i class="las la-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="Product-cart-title">
                                            <div class="media  align-items-center">
                                                <img class="mr-3 wh-80 align-self-center radius-xl bg-opacity-primary" src="{{ asset('img/cart3.png') }}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Fiber base chair</h5>
                                                    <div class="d-flex">
                                                        <p>Size:<span>large</span></p>
                                                        <p>color:<span>brown</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">$248.66</td>
                                        <td>
                                            <!-- Start: Product Quantity -->
                                            <div class="quantity product-cart__quantity">
                                                <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                <input type="number" value="1" class="qty qh-36 input">
                                                <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                            </div>
                                            <!-- End: Product Quantity -->
                                        </td>
                                        <td class="text-center subtotal">$5.11</td>
                                        <td class="actions">
                                            <button type="button" class="action-btn float-right">
                                                <i class="las la-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <div class="product-cart__cupon">
                                                <input type="text" class="form-control  col-xl-4 col-md-6 " placeholder="Coupon code" />
                                                <a href="#" class="btn btn-primary col-xl-3 col-lg-4 space-nowrap">Apply Coupon</a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table><!-- End: table -->
                            </div>
                        </div><!-- End: .product-cart-->
                    </div><!-- End: .cus-xl-9 -->
                    <div class="cus-xl-3 col-md-8  ">
                        <div class="card order-summery bg-normal p-sm-25 p-15 order-summery--width ">
                            <div class="card-header border-bottom-0 p-0 pb-25">
                                <h5 class="fw-500">Order Summary</h5>
                            </div>
                            <div class="card-body bg-white px-sm-25 px-20">
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
                                <div class="total-money d-flex justify-content-between">
                                    <h6>Total :</h6>
                                    <h5>$1738.60</h5>
                                </div>
                                <a href="{{ route('applications.ecommerce.checkout') }}" class="checkout btn-secondary content-center w-100 btn-lg mt-20"> procdces to
                                    checkout<i class="las la-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- End: .order-summery-->
                    </div><!-- End: .cus-xl-9 -->
                </div>
            </div><!-- End: .global-shadow -->
        </div>
    </div>
@endsection
