@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Statistic</h4>
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
                                <div class="atbd-statistics-wrap d-flex">
                                    <div class="statistics-item statistics-default">
                                        <span class="statistics-item__title">Active Users</span>
                                        <p class="statistics-item__number">
                                            112,893
                                        </p>
                                    </div>
                                    <div class="statistics-item statistics-default">
                                        <span class="statistics-item__title">Account Balance (CNY)</span>
                                        <p class="statistics-item__number">
                                            112,893.00
                                        </p>
                                        <div class="statistics-item__action">
                                            <a href="#" class="btn btn-shadow-primary btn-primary btn-md">Recharge</a>
                                        </div>
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
                                <h6>Unit</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-statistics-wrap d-flex">
                                    <div class="statistics-item statistics-default">
                                        <span class="statistics-item__title">Feedback</span>
                                        <p class="statistics-item__number">
                                            <i class="la la-thumbs-up"></i> 1,128
                                        </p>
                                    </div>
                                    <div class="statistics-item statistics-default">
                                        <span class="statistics-item__title">Unmerged</span>
                                        <p class="statistics-item__number">
                                            93 <span class="text-gray">/100</span>
                                        </p>
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
                                <h6>In Card</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-statistics-wrap d-flex">
                                    <div class="statistics-item statistics-success">
                                        <span class="statistics-item__title">Active</span>
                                        <p class="statistics-item__number">
                                            <i class="la la-arrow-up"></i> 11 <span class="number-fraction">.28</span>
                                        </p>
                                    </div>
                                    <div class="statistics-item statistics-danger">
                                        <span class="statistics-item__title">Idle</span>
                                        <p class="statistics-item__number">
                                            <i class="la la-arrow-down"></i> 9 <span class="number-fraction">.30</span>
                                        </p>
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
                                <h6>In Card</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-statistics-wrap d-flex">
                                    <div class="statistics-countdown">
                                        <span class="statistics-countdown__title">Countdown</span>
                                        <div class="countdown" data-countdown="2020/12/31">
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
