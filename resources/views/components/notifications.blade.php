@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content notification-modal-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Notifications</h4>
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
                                <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default">Open the Notification Box</button>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Duration</h6>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default" data-duration="5000">Open the Notification Box</button>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Custom Close</h6>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default" data-customclose="true" data-duration="8000">Open the Notification Box</button>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card card-default card-md">
                                <div class="card-header">
                                    <h6>With Icon</h6>
                                </div>
                                <div class="card-body">
                                    <div class="button-group flex-wrap">
                                        <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="info" data-toastIcon="info">Info</button>
                                        <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="success" data-toastIcon="check-circle">Success</button>
                                        <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="danger" data-toastIcon="x-circle">Error</button>
                                        <button class="btn btn-outline-lighten btn-outline-lighten__height fw-400 btn-toast" data-toastType="warning" data-toastIcon="alert-circle">Warning</button>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Placement</h6>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-12 mb-2">
                                        <div class="notification-placement-wrap d-flex align-items-center">
                                            <div class="atbd-select">
                                                <select name="noti-placement" id="noti-placement" class="form-control">
                                                    <option value="tl">Top Left</option>
                                                    <option value="tr">Top Right</option>
                                                    <option value="bl">Bottom Left</option>
                                                    <option value="br">Bottom Right</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-primary btn-sm btn-squired btn-toast notification-modal-box__btn" data-toastType="default">Open the Notification Box</button>
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
        <div class="notification-wrapper top-right"></div>
    </div>
@endsection
