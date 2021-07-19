@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Modal</h4>
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
                                <div class="d-flex flex-wrap justify-content-sm-start justify-content-center">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-basic">Open Modal</button>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Confirmation modal dialog</h6>
                            </div>
                            <div class="card-body">
                                <div class="modal-btn-group d-flex align-items-center justify-content-sm-start justify-content-center">
                                    <button type="button" class="btn btn-outline-lighten btn-outline-lighten__height" data-toggle="modal" data-target="#modal-info-confirmed">Confirm</button>
                                    <button type="button" class="btn btn-outline-lighten btn-outline-lighten__height" data-toggle="modal" data-target="#modal-info-delete">Delete</button>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Color Modal</h6>
                            </div>
                            <div class="card-body">
                                <div class="modal-btn-group d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-colored-primary">Primary</button>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-colored-success">Success</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-colored-danger">Danger</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-colored-warning">Warning</button>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Info Modal</h6>
                            </div>
                            <div class="card-body">
                                <div class="modal-btn-group d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center">
                                    <button type="button" class="btn btn-outline-lighten btn-outline-lighten__height" data-toggle="modal" data-target="#modal-info">Info</button>
                                    <button type="button" class="btn btn-outline-lighten btn-outline-lighten__height" data-toggle="modal" data-target="#modal-info-success">Success</button>
                                    <button type="button" class="btn btn-outline-lighten btn-outline-lighten__height" data-toggle="modal" data-target="#modal-info-error">Error</button>
                                    <button type="button" class="btn btn-outline-lighten btn-outline-lighten__height" data-toggle="modal" data-target="#modal-info-warning">Warning</button>
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
        <div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content modal-bg-white ">
                    <div class="modal-header">
                        <h6 class="modal-title">Basic title</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-Basic -->
        <div class="modal-colored-primary modal fade show" id="modal-colored-primary" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content modal-bg-primary modal-colored">
                    <div class="modal-header">
                        <h6 class="modal-title">Basic title</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-colored-primary -->
        <div class="modal-colored-success modal fade show" id="modal-colored-success" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content modal-bg-success modal-colored">
                    <div class="modal-header">
                        <h6 class="modal-title">Basic title</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-colored-success -->
        <div class="modal-colored-danger modal fade show" id="modal-colored-danger" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content modal-bg-danger modal-colored">
                    <div class="modal-header">
                        <h6 class="modal-title">Basic title</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-colored-danger -->
        <div class="modal-colored-warning modal fade show" id="modal-colored-warning" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content modal-bg-warning modal-colored">
                    <div class="modal-header">
                        <h6 class="modal-title">Basic title</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                        <p>Some contents...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-colored-warning -->
        <div class="modal-info modal fade show" id="modal-info" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon primary">
                                <span data-feather="info"></span>
                            </div>
                            <div class="modal-info-text">
                                <p>Some contents...</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info -->
        <div class="modal-info-success modal fade show" id="modal-info-success" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon success">
                                <span data-feather="check-circle"></span>
                            </div>
                            <div class="modal-info-text">
                                <p>Some contents...</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info-success -->
        <div class="modal-info-error modal fade show" id="modal-info-error" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon danger">
                                <span data-feather="x-circle"></span>
                            </div>
                            <div class="modal-info-text">
                                <p>Some contents...</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info-error -->
        <div class="modal-info-warning modal fade show" id="modal-info-warning" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon warning">
                                <span data-feather="info"></span>
                            </div>
                            <div class="modal-info-text">
                                <p>Some contents...</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info-warning -->
        <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon warning">
                                <span data-feather="info"></span>
                            </div>
                            <div class="modal-info-text">
                                <h6>Do you Want to delete these items?</h6>
                                <p>Some descriptions</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-outlined btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info-confirmed -->
        <div class="modal-info-delete modal fade show" id="modal-info-delete" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon warning">
                                <span data-feather="info"></span>
                            </div>
                            <div class="modal-info-text">
                                <h6>Do you Want to delete these items?</h6>
                                <p>Some contents...</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-success btn-outlined btn-sm" data-dismiss="modal">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .modal-info-Delete -->
    </div>
@endsection
