@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Dropdown</h4>
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
                            <div class="card-header py-20">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <div class="dropdown  dropdown-hover">
                                    <a class="btn-link" href="">
                                        Hover me
                                        <span data-feather=chevron-down></span>
                                    </a>
                                    <div class="dropdown-default">
                                        <a class="dropdown-item" href="#">Item One</a>
                                        <a class="dropdown-item" href="#">Item Two</a>
                                        <a class="dropdown-item" href="#">Item Three</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Other elements</h6>
                            </div>
                            <div class="card-body">
                                <div class="dropdown  dropdown-hover">
                                    <a class="btn-link" href="">
                                        Hover me
                                        <span data-feather=chevron-down></span>
                                    </a>
                                    <div class="dropdown-default">
                                        <a class="dropdown-item" href="#">Item One</a>
                                        <a class="dropdown-item" href="#">Item Two</a>
                                        <a class="dropdown-item" href="#">Item Three</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Click event</h6>
                            </div>
                            <div class="card-body">
                                <div class="dropdown dropdown-hover">
                                    <a class="btn-link" href="">
                                        Hover me, Click menu item
                                        <span data-feather=chevron-down></span>
                                    </a>
                                    <div class="dropdown-default dropdown-clickEvent">
                                        <a class="dropdown-item" href="#">Item One</a>
                                        <a class="dropdown-item" href="#">Item Two</a>
                                        <a class="dropdown-item" href="#">Item Three</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Placement</h6>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-12 mb-2">
                                        <div class="dropdown-list">
                                            <div class="dropdown dropdown-btn dropdown-hover">
                                                <button class="btn btn-outline-lighten fs-14 fw-400">
                                                    Bottom Left
                                                </button>
                                                <div class="dropdown-default dropdown-bottomLeft">
                                                    <a class="dropdown-item" href="#">Item One</a>
                                                    <a class="dropdown-item" href="#">Item Two</a>
                                                    <a class="dropdown-item" href="#">Item Three</a>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-btn dropdown-hover">
                                                <button class="btn btn-outline-lighten fs-14 fw-400">
                                                    Bottom Right
                                                </button>
                                                <div class="dropdown-default dropdown-bottomRight">
                                                    <a class="dropdown-item" href="#">Item One</a>
                                                    <a class="dropdown-item" href="#">Item Two</a>
                                                    <a class="dropdown-item" href="#">Item Three</a>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-btn dropdown-hover">
                                                <button class="btn btn-outline-lighten fs-14 fw-400">
                                                    Bottom Center
                                                </button>
                                                <div class="dropdown-default dropdown-bottomCenter">
                                                    <a class="dropdown-item" href="#">Item One</a>
                                                    <a class="dropdown-item" href="#">Item Two</a>
                                                    <a class="dropdown-item" href="#">Item Three</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="dropdown-list">
                                            <div class="dropdown dropdown-btn dropdown-hover">
                                                <button class="btn btn-outline-lighten fs-14 fw-400">
                                                    Top Left
                                                </button>
                                                <div class="dropdown-default dropdown-topLeft">
                                                    <a class="dropdown-item" href="#">Item One</a>
                                                    <a class="dropdown-item" href="#">Item Two</a>
                                                    <a class="dropdown-item" href="#">Item Three</a>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-btn dropdown-hover">
                                                <button class="btn btn-outline-lighten fs-14 fw-400">
                                                    Top Center
                                                </button>
                                                <div class="dropdown-default dropdown-topCenter">
                                                    <a class="dropdown-item" href="#">Item One</a>
                                                    <a class="dropdown-item" href="#">Item Two</a>
                                                    <a class="dropdown-item" href="#">Item Three</a>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-btn dropdown-hover">
                                                <button class="btn btn-outline-lighten fs-14 fw-400">
                                                    Top Right
                                                </button>
                                                <div class="dropdown-default dropdown-topRight">
                                                    <a class="dropdown-item" href="#">Item One</a>
                                                    <a class="dropdown-item" href="#">Item Two</a>
                                                    <a class="dropdown-item" href="#">Item Three</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Trigger mode</h6>
                            </div>
                            <div class="card-body">
                                <div class="dropdown  dropdown-click ">
                                    <a class="btn-link" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Click me
                                        <span data-feather=chevron-down></span>
                                    </a>
                                    <div class="dropdown-default dropdown-menu">
                                        <a class="dropdown-item" href="#">Item One</a>
                                        <a class="dropdown-item" href="#">Item Two</a>
                                        <a class="dropdown-item" href="#">Item Three</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Button with dropdown menu</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="dropdown-list">
                                            <div class="dropdown dropdown-click">
                                                <div class="btn-group dropleft">
                                                    <button class="btn btn-outline-lighten btn-sm">Dropdown</button>
                                                    <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span data-feather=more-horizontal></span>
                                                    </button>
                                                    <div class="dropdown-default dropdown-menu">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <div class="btn-group dropleft">
                                                    <button class="btn btn-outline-lighten btn-sm">Dropdown</button>
                                                    <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span data-feather=user></span>
                                                    </button>
                                                    <div class="dropdown-default dropdown-menu">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-click dropdown-disable">
                                                <div class="btn-group dropleft">
                                                    <button class="btn btn-outline-lighten btn-sm">Dropdown</button>
                                                    <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split">
                                                        <span data-feather=more-horizontal></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <div class="btn-group dropleft">
                                                    <button class="btn btn-outline-lighten btn-sm">With Tooltip</button>
                                                    <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span data-feather=more-horizontal></span>
                                                    </button>
                                                    <div class="dropdown-default dropdown-menu">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-click">
                                                <div class="btn-group dropleft">
                                                    <button class="btn btn-outline-lighten btn-sm">Button</button>
                                                    <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span data-feather=chevron-down></span>
                                                    </button>
                                                    <div class="dropdown-default dropdown-menu">
                                                        <a class="dropdown-item" href="#">Item One</a>
                                                        <a class="dropdown-item" href="#">Item Two</a>
                                                        <a class="dropdown-item" href="#">Item Three</a>
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
        <div class="atbd-message"></div>
        <!-- ends: .atbd-message -->
    </div>
@endsection
