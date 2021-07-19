@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Checkbox</h4>
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
                                <h6>Basic card</h6>
                            </div>
                            <div class="card-body pt-sm-20 pt-3 ">
                                <div class="checkbox-theme-default custom-checkbox ">
                                    <input class="checkbox" type="checkbox" id="check-1">
                                    <label for="check-1">
                                            <span class="checkbox-text">
                                                Checkbox
                                            </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Controlled Checkbox</h6>
                            </div>
                            <div class="card-body pt-sm-20 pt-3">
                                <div class="checkbox-controll">
                                    <div class="checkbox-theme-default custom-checkbox ">
                                        <input class="checkbox" type="checkbox" id="check-2" checked>
                                        <label for="check-2">
                                                <span class="checkbox-text">
                                                    Checked Unabled
                                                </span>
                                        </label>
                                    </div>
                                    <div class="checkbox-controll__actions d-flex">
                                        <button class="btn btn-primary btn-xs btn-squared btn-checkToggle">Unchecke
                                        </button>
                                        <button class="btn btn-primary btn-xs btn-squared btn-activeToggle">Disable
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Check all</h6>
                            </div>
                            <div class="card-body pt-sm-20 pt-3">
                                <div class="checkbox-group-header mb-20">
                                    <div class="checkbox-theme-2 custom-checkbox  check-all">
                                        <input class="checkbox" type="checkbox" id="check-3">
                                        <label for="check-3">
                                                <span class="checkbox-text">
                                                    Checkbox
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="checkbox-group-wrapper">
                                    <div class="checkbox-group d-flex">
                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                            <input class="checkbox" type="checkbox" id="check-grp-1">
                                            <label for="check-grp-1">
                                                <span class="checkbox-text">Apple</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                            <input class="checkbox" type="checkbox" id="check-grp-2">
                                            <label for="check-grp-2">
                                                <span class="checkbox-text">Peer</span>
                                            </label>
                                        </div>
                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                            <input class="checkbox" type="checkbox" id="check-grp-3">
                                            <label for="check-grp-3">
                                                <span class="checkbox-text">Orange</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-12 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Disabled</h6>
                            </div>
                            <div class="card-body">
                                <div class="checkbox-list">
                                    <div class="checkbox-list__single mb-1">
                                        <div class="checkbox-theme-default custom-checkbox disabled ">
                                            <input class="checkbox" type="checkbox" id="check-5">
                                            <label for="check-5">
                                                    <span class="checkbox-text">
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="checkbox-list__single">
                                        <div class="checkbox-theme-default custom-checkbox disabled ">
                                            <input class="checkbox" type="checkbox" id="check-4" checked>
                                            <label for="check-4">
                                                    <span class="checkbox-text">
                                                    </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Checkbox Group</h6>
                            </div>
                            <div class="card-body pt-sm-20 pt-3">
                                <div class="checkbox-list">
                                    <div class="checkbox-list__single mb-3">
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-4">
                                                <label for="check-grp-4">
                                                    <span class="checkbox-text">Apple</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-5">
                                                <label for="check-grp-5">
                                                    <span class="checkbox-text">Peer</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-6">
                                                <label for="check-grp-6">
                                                    <span class="checkbox-text">Orange</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-list__single mb-3">
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-7">
                                                <label for="check-grp-7">
                                                    <span class="checkbox-text">Apple</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-8">
                                                <label for="check-grp-8">
                                                    <span class="checkbox-text">Peer</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-9">
                                                <label for="check-grp-9">
                                                    <span class="checkbox-text">Orange</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-list__single">
                                        <div class="checkbox-group d-flex">
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-10">
                                                <label for="check-grp-10">
                                                    <span class="checkbox-text">Apple</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-11">
                                                <label for="check-grp-11">
                                                    <span class="checkbox-text">Peer</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                <input class="checkbox" type="checkbox" id="check-grp-12">
                                                <label for="check-grp-12">
                                                    <span class="checkbox-text">Orange</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md  mb-4">
                            <div class="card-header py-20">
                                <h6>Checkbox Group</h6>
                            </div>
                            <div class="card-body pt-sm-20 pt-3">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-grid-1">
                                                    <label for="check-grid-1">
                                                            <span class="checkbox-text">
                                                                A
                                                            </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-grid-2">
                                                    <label for="check-grid-2">
                                                            <span class="checkbox-text">
                                                                B
                                                            </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-grid-3">
                                                    <label for="check-grid-3">
                                                            <span class="checkbox-text">
                                                                C
                                                            </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-grid-4">
                                                    <label for="check-grid-4">
                                                            <span class="checkbox-text">
                                                                D
                                                            </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-grid-5">
                                                    <label for="check-grid-5">
                                                            <span class="checkbox-text">
                                                                E
                                                            </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md  mb-4">
                            <div class="card-header py-20">
                                <h6>Indeterminate</h6>
                            </div>
                            <div class="card-body  pt-sm-20 pt-3">
                                <div class="bd-example-indeterminate">
                                    <div class="checkbox-theme-default custom-checkbox ">
                                        <input class="checkbox" type="checkbox" id="check-23">
                                        <label for="check-23">
                                                <span class="checkbox-text ">
                                                    Checkbox
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-12 -->
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
    </div>
@endsection
