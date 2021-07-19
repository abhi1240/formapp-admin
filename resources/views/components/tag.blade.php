@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Tag</h4>
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
                                <div class="atbd-tag-wrap">
                                    <div class="tag-box">
                                        <span class="atbd-tag tag-light ">Tag 1</span>
                                        <span><a class="atbd-tag tag-light" href="#">Tag 2</a></span>
                                        <span class="atbd-tag tag-light">Tag 3 <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
                                        <span class="atbd-tag tag-light">Prevent Default <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header  py-20">
                                <h6>Color Tag</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-tag-wrap mb-25">
                                    <h6>Preset:</h6>
                                    <div class="tag-box">
                                        <span class="atbd-tag tag-primary tag-transparented">Primary</span>
                                        <span class="atbd-tag tag-secondary tag-transparented">Secondary</span>
                                        <span class="atbd-tag tag-success tag-transparented">Success</span>
                                        <span class="atbd-tag tag-warning tag-transparented">Warning</span>
                                        <span class="atbd-tag tag-info tag-transparented">Info</span>
                                        <span class="atbd-tag tag-danger tag-transparented">Danger</span>
                                    </div>
                                </div>
                                <div class="atbd-tag-wrap">
                                    <h6>Custom:</h6>
                                    <div class="tag-box">
                                        <span class="atbd-tag tag-primary ">#f50</span>
                                        <span class="atbd-tag tag-secondary ">#2db7f5</span>
                                        <span class="atbd-tag tag-success ">#87d068</span>
                                        <span class="atbd-tag tag-warning ">#108ee9</span>
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
                                <h6>Dynamic</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-tag-wrap">
                                    <div class="tag-box">
                                        <span class="atbd-tag tag-light ">Tag 1</span>
                                        <span><a class="atbd-tag tag-light" href="#">Tag 2</a></span>
                                        <span class="atbd-tag tag-light">Tag 3 <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
                                        <span class="atbd-tag tag-light">Prevent Default <a href="#" class="tag-closable"><i class="la la-times"></i></a></span>
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
