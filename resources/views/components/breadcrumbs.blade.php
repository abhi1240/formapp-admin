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
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">
                                            Home
                                        </a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-slash"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application Center</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-slash"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application list</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-slash"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>An Application</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Bread crumbs with drop down menu</h6>
                            </div>
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">
                                            Home
                                        </a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-slash"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application Center</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-slash"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <div class="dropdown dropdown-hover">
                                            <a href="#" data-toggle="dropdown">General</a>
                                            <span class="breadcrumb__seperator">
                                                    <span class="la la-slash"></span>
                                                </span>
                                            <div class="dropdown-default">
                                                <a class="dropdown-item" href="#">Item One</a>
                                                <a class="dropdown-item" href="#">Item Two</a>
                                                <a class="dropdown-item" href="#">Item Three</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>An Application</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">
                                            <span class="la la-home"></span>
                                        </a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-slash"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application Center</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-slash"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>An Application</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Configuring the Separator</h6>
                            </div>
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">
                                            Home
                                        </a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-angle-right"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application Center</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-angle-right"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application list</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-angle-right"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>An Application</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Configuring the Separator</h6>
                            </div>
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#" class="mr-1">Location : </a>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application Center</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-angle-right"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#">Application list</a>
                                        <span class="breadcrumb__seperator">
                                                <span class="la la-angle-right"></span>
                                            </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>An Application</span>
                                    </li>
                                </ul>
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
