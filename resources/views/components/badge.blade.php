@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Avatar</h4>
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
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Basic</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-avatar-list d-flex align-items-center">
                                                <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge- badge-sm">5</span>
                                                    </span>
                                                </span>
                                            <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge- badge-sm">0</span>
                                                    </span>
                                                </span>
                                            <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap avatar-badge-icon">
                                                        <span class="badge-icon badge-icon-danger" data-feather="clock"></span>
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Overflow Count</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-avatar-list d-flex align-items-center">
                                                <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge-round badge-md">99</span>
                                                    </span>
                                                </span>
                                            <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge-round badge-md">99+</span>
                                                    </span>
                                                </span>
                                            <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge-round badge-md">10+</span>
                                                    </span>
                                                </span>
                                            <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge-round badge-md">999+</span>
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Clickable</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-avatar-list d-flex align-items-center">
                                            <a href="#">
                                                    <span class="avatar avatar-light avatar-md avatar-square avatar-badge-round ">
                                                        <span class="avatar-badge-wrap">
                                                            <span class="badge badge-danger badge-round badge-md">99</span>
                                                        </span>
                                                    </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Status</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="status-list-inline d-flex mb-3">
                                            <span class="badge-dot dot-success"></span>
                                            <span class="badge-dot dot-danger"></span>
                                            <span class="badge-dot dot-default"></span>
                                            <span class="badge-dot dot-info"></span>
                                            <span class="badge-dot dot-warning"></span>
                                        </div>
                                        <!-- ends: .status-list-inline -->
                                        <div class="status-list-inrow d-flex flex-column">
                                            <div class="atbd-badge-text">
                                                <span class="badge-dot dot-success"></span>
                                                <span>Success</span>
                                            </div>
                                            <div class="atbd-badge-text">
                                                <span class="badge-dot dot-danger"></span>
                                                <span>Danger</span>
                                            </div>
                                            <div class="atbd-badge-text">
                                                <span class="badge-dot dot-default"></span>
                                                <span>Default</span>
                                            </div>
                                            <div class="atbd-badge-text">
                                                <span class="badge-dot dot-info"></span>
                                                <span>Info</span>
                                            </div>
                                            <div class="atbd-badge-text">
                                                <span class="badge-dot dot-warning"></span>
                                                <span>Warning</span>
                                            </div>
                                        </div>
                                        <!-- ends: .status-list-inrow -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                        </div>
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Standalone</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-badge-list d-flex align-items-center">
                                                <span class="badge badge-round badge-danger badge-lg">
                                                    25
                                                </span>
                                            <span class="badge badge-round badge-light badge-lg badge-outlined">
                                                    4
                                                </span>
                                            <span class="badge badge-round badge-success badge-lg">
                                                    99+
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Red badge</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-badge-list d-flex align-items-center">
                                            <div class="badge badge-red color-dark">
                                                <span data-feather="bell"></span>
                                                <div class="badge-dot-wrap">
                                                    <span class="badge-dot dot-danger"></span>
                                                </div>
                                            </div>
                                            <div class="badge badge-red color-dark">
                                                <span data-feather="bell"></span>
                                            </div>
                                            <div class="badge badge-red color-dark badge-text">
                                                <a href="#" class="color-info">Link something</a>
                                                <div class="badge-dot-wrap">
                                                    <span class="badge-dot dot-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Dynamic</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="dynamic-badge-block mb-4">
                                                <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge-round badge-sm">5</span>
                                                    </span>
                                                </span>
                                            <div class="btn-group atbd-button-group btn-group-normal ml-3">
                                                <button class="btn btn-icon btn-light btn-square btn-outlined btn-inc">
                                                    <span data-feather="plus"></span>
                                                </button>
                                                <button class="btn btn-icon btn-light btn-square btn-outlined btn-dec">
                                                    <span data-feather="minus"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="dynamic-badge-block">
                                                <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="badge-dot-wrap">
                                                        <span class="badge-dot dot-danger"></span>
                                                    </span>
                                                </span>
                                            <div class="custom-control custom-switch switch-info switch-md ">
                                                <input type="checkbox" class="custom-control-input" id="switch-dynamic-badge" checked>
                                                <label class="custom-control-label" for="switch-dynamic-badge"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                        </div>
                    </div>
                    <!-- ends: .col-lg-6 -->
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
    </div>
@endsection
