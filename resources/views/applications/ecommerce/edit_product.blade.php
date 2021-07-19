@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">edit product</h4>
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
                    <!-- Start: product page -->
                    <div class="global-shadow border px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-10">
                                <div class="mx-sm-30 mx-20 ">
                                    <!-- Start: card -->
                                    <div class="card add-product p-sm-30 p-20 mb-30">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">About Product</h6>
                                            </div>
                                            <!-- Start: card body -->
                                            <div class="add-product__body px-sm-40 px-20">
                                                <!-- Start: form -->
                                                <form>
                                                    <!-- form group -->
                                                    <div class="form-group">
                                                        <label for="name1">product name</label>
                                                        <input type="text" class="form-control" id="name1" placeholder="red chair">
                                                    </div>
                                                    <!-- form group 1 -->
                                                    <div class="form-group">
                                                        <label for="name2">sub text</label>
                                                        <input type="text" class="form-control" id="name2" placeholder="sub heading">
                                                    </div>
                                                    <!-- form group 2 -->
                                                    <div class="form-group">
                                                        <div class="countryOption">
                                                            <label for="countryOption">
                                                                category
                                                            </label>
                                                            <select class="js-example-basic-single js-states form-control" id="countryOption">
                                                                <option value="JAN">event</option>
                                                                <option value="FBR">Venues</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- form group 3 -->
                                                    <div class="form-group quantity-appearance">
                                                        <label>price</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <span data-feather="dollar-sign"></span></span>
                                                            </div>
                                                            <div class="pt_Quantity">
                                                                <input type="number" class="form-control" min="0" max="100" step="1" value="0" data-inc="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- form group 4 -->
                                                    <div class="form-group quantity-appearance">
                                                        <label>Discount</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon2">
                                                                        <span data-feather="percent"></span></span>
                                                            </div>
                                                            <div class="pt_Quantity">
                                                                <input type="number" class="form-control" min="0" max="100" step="1" value="0" data-inc="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- form group 5 -->
                                                    <div class="form-group status-radio add-product-status-radio mb-20">
                                                        <label class="mb-15">status</label>
                                                        <div class="d-flex">
                                                            <div class="radio-horizontal-list d-flex flex-wrap">
                                                                <div class="radio-theme-default custom-radio ">
                                                                    <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl1">
                                                                    <label for="radio-hl1">
                                                                        <span class="radio-text">Published</span>
                                                                    </label>
                                                                </div>
                                                                <div class="radio-theme-default custom-radio ">
                                                                    <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl2">
                                                                    <label for="radio-hl2">
                                                                        <span class="radio-text">draft</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- form group 6 -->
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Product Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="loram ipsum dolor sit amit"></textarea>
                                                    </div>
                                                    <!-- form group 7 -->
                                                    <div class="form-group">
                                                        <label for="name8">Meta Title</label>
                                                        <input type="text" class="form-control" id="name8" placeholder="Meta title">
                                                    </div>
                                                    <!-- form group 8 -->
                                                    <div class="form-group mb-0">
                                                        <label for="name9">Meta Keyword</label>
                                                        <input type="text" class="form-control" id="name9" placeholder="Meta keyword">
                                                    </div>
                                                </form>
                                                <!-- End: form -->
                                            </div>
                                            <!-- End: card body -->
                                        </div>
                                    </div>
                                    <!-- End: card -->
                                    <!-- Start: card -->
                                    <div class="card add-product p-sm-30 p-20 ">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">Product image</h6>
                                            </div>
                                            <!-- Start: product body -->
                                            <div class="add-product__body-img px-sm-40 px-20">
                                                <label for="upload" class="file-upload__label">
                                                        <span class="upload-product-img px-10 d-block">
                                                            <span class="file-upload">
                                                                <span data-feather="upload"></span>
                                                                <input id="upload" class="file-upload__input" type="file" name="file-upload">
                                                            </span>
                                                            <span class="pera">Drag and drop an image</span>
                                                            <span>or <a href="#" class="color-secondary">Browse</a> to choose a
                                                                file</span>
                                                        </span>
                                                </label>
                                                <div class="upload-product-media d-flex justify-content-between align-items-center mt-25">
                                                    <div class="upload-media-area d-flex">
                                                        <img src="{{ asset('img/food-restaurant-media.png') }}" alt="img">
                                                        <div class=" upload-media-area__title  d-flex flex-wrap align-items-center ml-10">
                                                            <div>
                                                                <p>Product_image.jpg</p>
                                                                <span>68.8 KB</span>
                                                            </div>
                                                            <div class="upload-media-area__btn">
                                                                <button type="button" class="transparent rounded-circle wh-30 border-0 color-danger">
                                                                    <span data-feather="trash-2"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End: product body -->
                                        </div>
                                    </div>
                                    <!-- End: card -->
                                    <!-- Start: button group -->
                                    <div class="button-group add-product-btn d-flex justify-content-end mt-40">
                                        <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                        </button>
                                        <button class="btn btn-primary btn-default btn-squared text-capitalize">save product
                                        </button>
                                    </div>
                                    <!-- End: button group -->
                                </div>
                            </div>
                            <!-- ends: col-lg-8 -->
                        </div>
                    </div>
                    <!-- End: Product page -->
                </div>
                <!-- ends: col-lg-12 -->
            </div>
        </div>
    </div>
@endsection
