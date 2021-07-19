@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Select</h4>
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
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-select-list d-flex">
                                    <div class="atbd-select ">
                                        <select name="select-1" id="select-1" class="form-control ">
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                        </select>
                                    </div>
                                    <div class="atbd-select disabled ">
                                        <select name="select-2" id="select-2" class="form-control " disabled>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Search Field</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-select-list d-flex">
                                    <div class="atbd-select ">
                                        <select name="select-search" id="select-search" class="form-control ">
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Select Tag</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-tag-mode">
                                    <div class="atbd-select ">
                                        <select name="select-tag" id="select-tag" class="form-control " multiple="multiple">
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                            <option value="01">Option 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Select Size</h6>
                            </div>
                            <div class="card-body">
                                <div class="select-size">
                                    <div class="atbd-nav-controller select-size__control">
                                        <div class="btn-group atbd-button-group btn-group-normal nav" role="tablist">
                                            <a href="#large" class="btn btn-sm btn-outline-light nav-link active" id="size-large" data-toggle="tab" role="tab" aria-controls="large" aria-selected="true">Large</a>
                                            <a href="#default" class="btn btn-sm btn-outline-light nav-link" id="size-default" data-toggle="tab" role="tab" aria-controls="default" aria-selected="false">Default</a>
                                            <a href="#small" class="btn btn-sm btn-outline-light nav-link" id="size-small" data-toggle="tab" role="tab" aria-controls="small" aria-selected="false">Small</a>
                                        </div>
                                        <div class="nav-controller-content select-size-content tab-content">
                                            <div class="tab-pane fade show active" id="large" role="tabpanel" aria-labelledby="size-large">
                                                <div class="select-size-content__single">
                                                    <div class="atbd-select ">
                                                        <select name="select-size-1" id="select-size-1" class="form-control  form-control-lg">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="atbd-select ">
                                                        <select name="select-size-3" id="select-size-3" class="form-control  form-control-lg">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="atbd-select ">
                                                        <select name="select-size-2" id="select-size-2" class="form-control  form-control-lg">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="default" role="tabpanel" aria-labelledby="size-small">
                                                <div class="select-size-content__single">
                                                    <div class="atbd-select ">
                                                        <select name="select-size-4" id="select-size-4" class="form-control  form-control-default">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="atbd-select ">
                                                        <select name="select-size-5" id="select-size-5" class="form-control  form-control-default">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="atbd-select ">
                                                        <select name="select-size-6" id="select-size-6" class="form-control  form-control-default">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="small" role="tabpanel" aria-labelledby="size-default">
                                                <div class="select-size-content__single">
                                                    <div class="atbd-select ">
                                                        <select name="select-size-17" id="select-size-17" class="form-control  form-control-sm">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="atbd-select ">
                                                        <select name="select-size-9" id="select-size-9" class="form-control  form-control-sm">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="atbd-select ">
                                                        <select name="select-size-0" id="select-size-0" class="form-control  form-control-sm">
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                            <option value="01">Option 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
    </div>
@endsection
