@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Datepicker</h4>
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
                            <div class="card-header">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <div class="date-picker-list">
                                    <div class="atbd-date-picker">
                                        <div class="form-group mb-0 form-group-calender">
                                            <div class="position-relative">
                                                <input type="text" class="form-control form-control-default" id="datepicker" placeholder="January 20, 2018">
                                                <a href="#"><span data-feather="calendar"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-date-ranger position-relative d-flex align-items-center">
                                        <div class="form-group mb-0">
                                            <input type="text" name="date-range-from" class="form-control form-control-default" id="date-from-2" placeholder="Start">
                                        </div>
                                        <span class="divider">-</span>
                                        <div class="form-group mb-0">
                                            <input type="text" name="date-range-to" class="form-control form-control-default" id="date-to-2" placeholder="End">
                                        </div>
                                        <a class="date-picker-icon" href="#"><span data-feather="calendar"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Disabled</h6>
                            </div>
                            <div class="card-body">
                                <div class="date-picker-list">
                                    <div class="atbd-date-picker">
                                        <div class="form-group mb-0 form-group-calender">
                                            <div class="position-relative">
                                                <input type="text" class="form-control form-control-default date-picker-disabled" id="datepicker2" placeholder="January 20, 2018" disabled>
                                                <a href="#"><span data-feather="calendar"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-date-ranger position-relative d-flex align-items-center date-picker-disabled">
                                        <div class="form-group mb-0">
                                            <input type="text" name="date-range-from" class="form-control form-control-default date-picker-disabled" id="date-from-4" placeholder="Start" disabled>
                                        </div>
                                        <span class="divider">-</span>
                                        <div class="form-group mb-0">
                                            <input type="text" name="date-range-to" class="form-control form-control-default date-picker-disabled" id="date-to-4" placeholder="End" disabled>
                                        </div>
                                        <a class="date-picker-icon" href="#"><span data-feather="calendar"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Three Sizes</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-nav-controller date-picker-size">
                                    <div class="btn-group atbd-button-group btn-group-normal nav" role="tablist">
                                        <a href="#large" class="btn btn-sm btn-outline-light nav-link active" id="size-large" data-toggle="tab" role="tab" aria-controls="large" aria-selected="true">Large</a>
                                        <a href="#default" class="btn btn-sm btn-outline-light nav-link" id="size-default" data-toggle="tab" role="tab" aria-controls="default" aria-selected="false">Default</a>
                                        <a href="#small" class="btn btn-sm btn-outline-light nav-link" id="size-small" data-toggle="tab" role="tab" aria-controls="small" aria-selected="false">Small</a>
                                    </div>
                                    <div class="nav-controller-content tab-content">
                                        <div class="tab-pane fade show active" id="large" role="tabpanel" aria-labelledby="size-large">
                                            <div class="date-picker-list">
                                                <div class="atbd-date-picker">
                                                    <div class="form-group mb-0 form-group-calender">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control form-control-lg" id="datepicker3" placeholder="January 20, 2018">
                                                            <a href="#"><span data-feather="calendar"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="atbd-date-ranger position-relative d-flex align-items-center">
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="date-range-from" class="form-control form-control-lg" id="date-from-7" placeholder="Start">
                                                    </div>
                                                    <span class="divider">-</span>
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="date-range-to" class="form-control form-control-lg" id="date-to-7" placeholder="End">
                                                    </div>
                                                    <a class="date-picker-icon" href="#"><span data-feather="calendar"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="default" role="tabpanel" aria-labelledby="size-default">
                                            <div class="date-picker-list">
                                                <div class="atbd-date-picker">
                                                    <div class="form-group mb-0 form-group-calender">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control form-control-default" id="datepicker4" placeholder="January 20, 2018">
                                                            <a href="#"><span data-feather="calendar"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="atbd-date-ranger position-relative d-flex align-items-center">
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="date-range-from" class="form-control form-control-default" id="date-from-9" placeholder="Start">
                                                    </div>
                                                    <span class="divider">-</span>
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="date-range-to" class="form-control form-control-default" id="date-to-9" placeholder="End">
                                                    </div>
                                                    <a class="date-picker-icon" href="#"><span data-feather="calendar"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="small" role="tabpanel" aria-labelledby="size-small">
                                            <div class="date-picker-list">
                                                <div class="atbd-date-picker">
                                                    <div class="form-group mb-0 form-group-calender">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control form-control-sm" id="datepicker5" placeholder="January 20, 2018">
                                                            <a href="#"><span data-feather="calendar"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="atbd-date-ranger position-relative d-flex align-items-center">
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="date-range-from" class="form-control form-control-sm" id="date-from-11" placeholder="Start">
                                                    </div>
                                                    <span class="divider">-</span>
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="date-range-to" class="form-control form-control-sm" id="date-to-11" placeholder="End">
                                                    </div>
                                                    <a class="date-picker-icon" href="#"><span data-feather="calendar"></span></a>
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
