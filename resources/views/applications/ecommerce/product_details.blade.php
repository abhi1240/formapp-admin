@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">product detatils</h4>
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
        <div class="products mb-30">
            <div class="container-fluid">
                <!-- Start: Card -->
                <div class="card product-details h-100">
                    <div class="product-item d-flex p-sm-40 p-20">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Start: Product Slider -->
                                <div class="product-item__image">
                                    <div class="wrap-gallery-article">
                                        <div id="myCarouselArticle" class="carousel slide carousel-fade" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarouselArticle" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarouselArticle" data-slide-to="1"></li>
                                                <li data-target="#myCarouselArticle" data-slide-to="2"></li>
                                                <li data-target="#myCarouselArticle" data-slide-to="3"></li>
                                                <li data-target="#myCarouselArticle" data-slide-to="4"></li>
                                                <li data-target="#myCarouselArticle" data-slide-to="5"></li>
                                                <li data-target="#myCarouselArticle" data-slide-to="6"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-fluid d-flex bg-opacity-primary " src="{{ asset('img/slider-details.png') }}" alt="Card image cap" title="">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('img/slide-deatils2.png') }}" alt="Card image cap" title="">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('img/slide-deatils3.png') }}" alt="Card image cap" title="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden " id="slider-thumbs">
                                            <!-- Bottom switcher of slider -->
                                            <ul class="reset-ul d-flex flex-wrap list-thumb-gallery">
                                                <li>
                                                    <a href="#" class="thumbnail" data-target="#myCarouselArticle" data-slide-to="0">
                                                        <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('img/slider-details.png') }}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="thumbnail" data-target="#myCarouselArticle" data-slide-to="1">
                                                        <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('img/slide-deatils2.png') }}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="thumbnail" data-target="#myCarouselArticle" data-slide-to="2">
                                                        <img class="img-fluid d-flex bg-opacity-primary" src="{{ asset('img/slide-deatils3.png') }}" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Product Slider -->
                            </div>
                            <div class=" col-lg-7">
                                <!-- Start: Product Details -->
                                <div class=" border-bottom mb-25 pb-sm-30 pb-15 mt-lg-0 mt-15">
                                    <div class="product-item__body">
                                        <!-- Start: Product Title -->
                                        <div class="product-item__title">
                                            <h2 class="card-title fw-500">
                                                <a href="#">This stools are also decently
                                                    stored</a>
                                            </h2>
                                        </div>
                                        <!-- End: Product Title -->
                                        <div class="product-item__content text-capitalize">
                                            <!-- Start: Product Ratings -->
                                            <div class="stars-rating d-flex align-items-center">
                                                <span class="star-icon las la-star active"></span>
                                                <span class="star-icon las la-star active"></span>
                                                <span class="star-icon las la-star active"></span>
                                                <span class="star-icon las la-star active"></span>
                                                <span class="star-icon las la-star-half-alt active"></span>
                                                <span class="stars-rating__point">4.9</span>
                                                <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                            </div>
                                            <!-- End: Product Ratings -->
                                            <!-- Start: Product Brand -->
                                            <span class="product-details-brandName">Brand:<span>Louis
                                                        Poulsen</span></span>
                                            <span class="product-desc-price mr-2">
                                                    $200.00</span>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="product-price mr-10">$100.00</span>
                                                <span class="product-discount">50% Off</span>
                                            </div>
                                            <!-- End: Product Brand -->
                                            <!-- Start: Product Description -->
                                            <p class=" product-deatils-pera">Lorem ipsum dolor sit amet, consetetur
                                                sadipscing elitr, sed diam
                                                nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                            <!-- End: Product Description -->
                                            <!-- Start: Product Stock -->
                                            <div class="product-details__availability">
                                                <div class="title">
                                                    <p>Available:</p>
                                                    <span class="stock">In stock</span>
                                                </div>
                                                <div class="title">
                                                    <p>Shipping:</p>
                                                    <span class="free"> Free</span>
                                                </div>
                                            </div>
                                            <!-- End: Product Stock -->
                                            <!-- Start: Product Quantity -->
                                            <div class="quantity product-quantity flex-wrap">
                                                <div class="mr-15 d-flex align-items-center flex-wrap">
                                                    <p class="fs-14 fw-500 color-dark">Quantity:</p>
                                                    <input type="button" value="-" class="qty-minus bttn bttn-left wh-36">
                                                    <input type="number" value="1" class="qty qh-36 input">
                                                    <input type="button" value="+" class="qty-plus bttn bttn-right wh-36">
                                                </div>
                                                <span class="fs-13 fw-400 color-light my-sm-0 my-10">540 pieces available</span>
                                            </div>
                                            <!-- End: Product Quantity -->
                                            <!-- Start: Product Selections -->
                                            <div class="product-item__button mt-lg-30 mt-sm-25 mt-20 d-flex flex-wrap">
                                                <div class=" d-flex flex-wrap product-item__action align-items-center">
                                                    <button class="btn btn-primary btn-default btn-squared border-0 mr-10 my-sm-0 my-2">buy
                                                        now</button>
                                                    <button class="btn btn-secondary btn-default btn-squared border-0 px-25 my-sm-0 my-2 mr-2">
                                                        <span data-feather="shopping-bag"></span>
                                                        Add To Cart</button>
                                                    <div class="like-icon">
                                                        <button type="button">
                                                            <i class="lar la-heart icon"></i>
                                                        </button>
                                                    </div>
                                                    <div class="like-icon mr-10 my-sm-0 my-3 ">
                                                        <button type="button">
                                                            <span data-feather="share-2"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-deatils__social my-xl-0 my-10 d-flex align-items-center">
                                                    <ul class="d-flex">
                                                        <li>
                                                            <a href="#">
                                                                <i class="lab la-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lab la-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lab la-pinterest"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lab la-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lab la-telegram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End: Product Selections -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Start: Product Availability -->
                                <div class="product-details__availability">
                                    <div class="title">
                                        <p>Category:</p>
                                        <span class="free">Furniture</span>
                                    </div>
                                    <div class="title">
                                        <p>Tags:</p>
                                        <span class="free"> Blue, Green, Light</span>
                                    </div>
                                </div>
                                <!-- End: Product Availability -->
                                <!-- End: Product Details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Card -->
            </div>
        </div>
    </div>
@endsection
