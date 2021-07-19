@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Pageheader</h4>
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
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body">
                                <div class="page-title-block">
                                    <div class="page-title-wrap  wrapper-bordered">
                                        <div class="page-title d-flex justify-content-between">
                                            <div class="page-title__left">
                                                <a href="#"><i class="las la-arrow-left"></i></a>
                                                <span class="title-text">Title</span>
                                                <span class="sub-title">This is a subtitle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>White background mode</h6>
                            </div>
                            <div class="card-body">
                                <div class="page-title-block bg-lighter bg-container">
                                    <div class="page-title-bg bg-white">
                                        <div class="page-title-wrap ">
                                            <div class="page-title d-flex justify-content-between">
                                                <div class="page-title__left">
                                                    <a href="#"><i class="las la-arrow-left"></i></a>
                                                    <span class="title-text">Title</span>
                                                    <span class="sub-title">This is a subtitle</span>
                                                </div>
                                                <div class="page-title__right">
                                                    <div class="page-top-action d-flex">
                                                        <a href="#" class="btn btn-outline-lighten btn-xs">Operation</a>
                                                        <a href="#" class="btn btn-outline-lighten btn-xs">Operation</a>
                                                        <a href="#" class="btn btn-primary btn-xs">Primary</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-info d-flex">
                                            <div class="page-info__item">
                                                <div class="page-info__single">
                                                    <span class="info-title">Created :</span>
                                                    <span class="info-text">David Miller</span>
                                                </div>
                                                <div class="page-info__single">
                                                    <span class="info-title">Effective Time :</span>
                                                    <span class="info-text">2017-10-10</span>
                                                </div>
                                            </div>
                                            <div class="page-info__item">
                                                <div class="page-info__single">
                                                    <span class="info-title">Association :</span>
                                                    <span class="info-text color-primary">421421</span>
                                                </div>
                                                <div class="page-info__single">
                                                    <span class="info-title">Remarks :</span>
                                                    <span class="info-list">
                                                            <span>Gonghu Road,</span>
                                                            <span>Xihu District, </span>
                                                            <span> Hangzhou,</span>
                                                            <span>Zhejiang,</span>
                                                            <span>China</span>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="page-info__item">
                                                <div class="page-info__single">
                                                    <span class="info-title">Creation Time :</span>
                                                    <span class="info-text">2017-10-10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Use with breadcrumbs</h6>
                            </div>
                            <div class="card-body">
                                <div class="page-title-block">
                                    <div class="page-title-wrap  wrapper-bordered">
                                        <ul class="atbd-breadcrumb nav">
                                            <li class="atbd-breadcrumb__item">
                                                <a href="#"> First-level Menu </a>
                                                <span class="breadcrumb__seperator">
                                                        <span class="la la-slash"></span>
                                                    </span>
                                            </li>
                                            <li class="atbd-breadcrumb__item">
                                                <a href="#">Second-level Menu</a>
                                                <span class="breadcrumb__seperator">
                                                        <span class="la la-slash"></span>
                                                    </span>
                                            </li>
                                            <li class="atbd-breadcrumb__item">
                                                <span>Third-level Menu</span>
                                            </li>
                                        </ul>
                                        <div class="page-title d-flex justify-content-between">
                                            <div class="page-title__left">
                                                <a href="#"><i class="las la-arrow-left"></i></a>
                                                <span class="title-text">Title</span>
                                                <span class="sub-title">This is a subtitle</span>
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
