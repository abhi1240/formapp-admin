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
                                                <span class="avatar avatar-light avatar-lg avatar-circle  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                            <span class="avatar avatar-light avatar-md avatar-circle  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                            <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                            <span class="avatar avatar-light avatar-xs avatar-circle  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                        </div>
                                        <div class="atbd-avatar-list d-flex align-items-center">
                                                <span class="avatar avatar-light avatar-lg avatar-square  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                            <span class="avatar avatar-light avatar-md avatar-square  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                            <span class="avatar avatar-light avatar-sm avatar-square  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                            <span class="avatar avatar-light avatar-xs avatar-square  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                        </div>
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
                                        <h6>Type</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-avatar-list d-flex align-items-center">
                                                <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                            <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                                    <span class="avatar-letter">U</span>
                                                </span>
                                            <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                                    <span class="avatar-text">user</span>
                                                </span>
                                            <span class="avatar avatar-light avatar-sm avatar-circle  ">
                                                    <img class="avatar-img" src="{{ asset('img/author/1.jpg') }}" alt="">
                                                </span>
                                            <span class="avatar avatar-warning avatar-sm avatar-circle   avatar-transparent ">
                                                    <span class="avatar-letter">U</span>
                                                </span>
                                            <span class="avatar avatar-success avatar-sm avatar-circle  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>With Badge</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-avatar-list d-flex align-items-center">
                                                <span class="avatar avatar-light avatar-sm avatar-square  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                    <span class="avatar-badge-wrap">
                                                        <span class="badge badge-danger badge- badge-sm">2</span>
                                                    </span>
                                                </span>
                                            <span class="avatar avatar-light avatar-sm avatar-square  ">
                                                    <span class="avatar-icon" data-feather="user"></span>
                                                    <span class="badge-dot-wrap">
                                                        <span class="badge-dot dot-danger"></span>
                                                    </span>
                                                </span>
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
