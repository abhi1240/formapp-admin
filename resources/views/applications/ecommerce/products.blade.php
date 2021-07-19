@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">shop</h4>
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
        <div class="products_page product_page--grid mb-30">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="columns-1 col-lg-4 col-md-5 col-sm-8 order-md-0 order-1">
                        <div class="widget">
                            <div class="widget-header-title px-20 py-15 border-bottom">
                                <h6 class="d-flex align-content-center fw-500">
                                    <span data-feather="sliders"></span> Filters
                                </h6>
                            </div>
                            <div class="category_sidebar">
                                <!-- Start: Aside -->
                                <aside class="product-sidebar-widget mb-30">
                                    <!-- Title -->
                                    <div class="widget_title mb-20">
                                        <h6>Price Range</h6>
                                    </div>
                                    <!-- Title -->
                                    <!-- Body -->
                                    <div class="card border-0">
                                        <div class="product-price-ranges">
                                            <div id="price-range">
                                                <div class="section price">
                                                    <div class="price-slider"></div>
                                                    <p class="price-value"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Body -->
                                </aside>
                                <!-- End: Aside -->
                                <!-- Start: Aside -->
                                <aside class="product-sidebar-widget mb-30">
                                    <!-- Title -->
                                    <div class="widget_title mb-20">
                                        <h6>Category</h6>
                                    </div>
                                    <!-- Title -->
                                    <!-- Body -->
                                    <div class="card border-0">
                                        <div class="product-category">
                                            <ul>
                                                <li>
                                                    <div class="w-100">
                                                        <span class="fs-14 color-gray">Accessories<span class="item-numbers">25</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="w-100">
                                                        <span class="fs-14 color-gray">Appliances<span class="item-numbers">54</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="w-100">
                                                        <span class="fs-14 color-gray">Bags<span class="item-numbers">78</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="w-100">
                                                        <span class="fs-14 color-gray">Electronic<span class="item-numbers">42</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="w-100">
                                                        <span class="fs-14 color-gray">Entertainment<span class="item-numbers">35</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="w-100">
                                                        <span class="fs-14 color-gray">Induction<span class="item-numbers">64</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="w-100">
                                                        <span class="fs-14 color-gray">Mobile phone<span class="item-numbers">92</span></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="mt-2">
                                                <a href="#" class=" fs-13 fw-500 text-capitalize">see more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Body -->
                                </aside>
                                <!-- End: Aside -->
                                <!-- Start: Aside -->
                                <aside class="product-sidebar-widget mb-30">
                                    <!-- Title -->
                                    <div class="widget_title mb-20">
                                        <h6>Brands</h6>
                                    </div>
                                    <!-- Title -->
                                    <!-- Body -->
                                    <div class="card border-0">
                                        <div class="product-brands">
                                            <ul>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-1">
                                                        <label for="check-1">
                                                                <span class="checkbox-text">
                                                                    Appliances
                                                                    <span class="item-numbers">25</span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-2">
                                                        <label for="check-2">
                                                                <span class="checkbox-text">
                                                                    Bags
                                                                    <span class="item-numbers">54</span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-3">
                                                        <label for="check-3">
                                                                <span class="checkbox-text">
                                                                    Electronic
                                                                    <span class="item-numbers">78</span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-4">
                                                        <label for="check-4">
                                                                <span class="checkbox-text">
                                                                    Entertainment
                                                                    <span class="item-numbers">42</span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-5">
                                                        <label for="check-5">
                                                                <span class="checkbox-text">
                                                                    Induction
                                                                    <span class="item-numbers">35</span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-6">
                                                        <label for="check-6">
                                                                <span class="checkbox-text">
                                                                    Laptops
                                                                    <span class="item-numbers">64</span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="mt-2">
                                                <a href="#" class=" fs-13 fw-500 text-capitalize">see more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Body -->
                                </aside>
                                <!-- End: Aside -->
                                <!-- Start: Aside -->
                                <aside class="product-sidebar-widget mb-30">
                                    <!-- Title -->
                                    <div class="widget_title mb-20">
                                        <h6>Ratings</h6>
                                    </div>
                                    <!-- Title -->
                                    <!-- Body -->
                                    <div class="card border-0">
                                        <div class="product-ratings">
                                            <ul>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="rating-1">
                                                        <label for="rating-1">
                                                                <span class="stars-rating d-flex align-items-center">
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="checkbox-text">
                                                                        and up
                                                                        <span class="item-numbers">42</span>
                                                                    </span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="rating-3">
                                                        <label for="rating-3">
                                                                <span class="stars-rating d-flex align-items-center">
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="checkbox-text">
                                                                        and up
                                                                        <span class="item-numbers">54</span>
                                                                    </span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="rating-4">
                                                        <label for="rating-4">
                                                                <span class="stars-rating d-flex align-items-center">
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="checkbox-text">
                                                                        and up
                                                                        <span class="item-numbers">78</span>
                                                                    </span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="rating-5">
                                                        <label for="rating-5">
                                                                <span class="stars-rating d-flex align-items-center">
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="checkbox-text">
                                                                        and up
                                                                        <span class="item-numbers">42</span>
                                                                    </span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="rating-6">
                                                        <label for="rating-6">
                                                                <span class="stars-rating d-flex align-items-center">
                                                                    <span class="star-icon las la-star active"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                    <span class="checkbox-text">
                                                                        and up
                                                                        <span class="item-numbers">35</span>
                                                                    </span>
                                                                </span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Body -->
                                </aside>
                                <!-- End: Aside -->
                            </div>
                        </div><!-- End: .widget -->
                    </div><!-- End: .columns-1 -->
                    <div class="columns-2 col-lg-8 col-md-7 col-sm-8 order-md-1 order-0">
                        <!-- Start: Top Bar -->
                        <div class="shop_products_top_filter">
                            <div class="project-top-wrapper d-flex flex-wrap align-items-center">
                                <div class="project-top-left d-flex flex-wrap align-items-center">
                                    <div class="project-search shop-search  global-shadow ">
                                        <form action="/" class="d-flex align-items-center user-member__form">
                                            <span data-feather="search"></span>
                                            <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                    <span class="project-result-showing fs-14 color-gray ml-xl-25 mr-xl-0 text-center mt-lg-0 mt-20">Showing
                                            <span>1–8</span> of <span>86</span>
                                            results</span>
                                </div>
                                <div class="project-top-right d-flex flex-wrap align-items-center">
                                    <div class="project-category flex-wrap d-flex align-items-center">
                                        <p class="fs-14 color-gray text-capitalize">sort by:</p>
                                        <div class="project-tap b-light">
                                            <ul class="nav px-1 " id="ap-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="ap-overview-tab" data-toggle="pill" href="#ap-overview" role="tab" aria-controls="ap-overview" aria-selected="true">top rated</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="timeline-tab" data-toggle="pill" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">popular</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="activity-tab" data-toggle="pill" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Newest</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="draft-tab" data-toggle="pill" href="#draft" role="tab" aria-controls="draft" aria-selected="false">price</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="project-icon-selected content-center mt-lg-0 mt-25">
                                        <div class="listing-social-link pb-lg-0 pb-xs-2">
                                            <div class="icon-list-social d-flex">
                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center active ml-xl-20 mr-20" href="#">
                                                    <span data-feather="grid"></span></a>
                                                <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center  " href="{{ route('applications.ecommerce.productList') }}">
                                                    <span data-feather="list"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End: Top Bar -->
                        <div class="tab-content mt-25" id="ap-tabContent">
                            <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
                                <!-- Start: Shop Item -->
                                <div class="row product-page-list justify-content-center">
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/digital-chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Montes scelerisque</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/glass-cup.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/chair2.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Hanging lamp berlingo</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">commodo adipiscing</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/plate.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/chair3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Hanging lamp berlingo</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/juse.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">commodo adipiscing</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/coffe-glass.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/boss-chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Montes scelerisque</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/only-juss.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/flip-chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Hanging lamp berlingo</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">commodo adipiscing</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Shop Item -->
                            </div>
                            <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                <div class="row product-page-list">
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/boss-chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Montes scelerisque</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/only-juss.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/flip-chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Hanging lamp berlingo</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/chair.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">commodo adipiscing</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                                <div class="row product-page-list">
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/plate.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/chair3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Hanging lamp berlingo</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/juse.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">commodo adipiscing</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/coffe-glass.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab">
                                <div class="row product-page-list">
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/plate.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/chair3.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Hanging lamp berlingo</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/juse.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">commodo adipiscing</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                        <div class="card product product--grid">
                                            <div class="h-100">
                                                <div class="product-item">
                                                    <div class="product-item__image">
                                                            <span class="like-icon">
                                                                <button type="button" class="content-center">
                                                                    <i class="lar la-heart icon"></i>
                                                                </button>
                                                            </span>
                                                        <a href="#"><img class="card-img-top img-fluid" src="{{ asset('img/coffe-glass.png') }}" alt="digital-chair"></a>
                                                    </div>
                                                    <div class="card-body px-20 pb-25 pt-20">
                                                        <div class="product-item__body text-capitalize">
                                                            <a href="{{ route('applications.ecommerce.productDetails') }}">
                                                                <h6 class="card-title">Leo sodales varius</h6>
                                                            </a>
                                                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                                                <span class="product-desc-price mr-2">$200.00</span>
                                                                <span class="product-price mr-10">$100.00</span>
                                                                <span class="product-discount">50% Off</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star active"></span>
                                                                <span class="star-icon las la-star-half-alt active"></span>
                                                                <span class="stars-rating__point">4.9</span>
                                                                <span class="stars-rating__review">
                                                                        <span>778</span> Reviews</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__button d-flex mt-20 flex-wrap">
                                                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="shopping-bag"></span>
                                                                Add To Cart
                                                            </button>
                                                            <button class="btn btn-primary btn-default btn-squared border-0 ">buy now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End: .columns-2 -->
                </div>
            </div>
        </div><!-- End: .products -->
    </div>
@endsection
