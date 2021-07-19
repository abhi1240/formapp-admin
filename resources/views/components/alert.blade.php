@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Alert</h4>
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
                                    <div class="card-header  py-20">
                                        <h6>Basic</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class=" alert alert-success " role="alert">
                                            <div class="alert-content">
                                                <p>Success Text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header  py-20">
                                        <h6>Closable</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class=" alert alert-warning  alert-dismissible fade show " role="alert">
                                            <div class="alert-content">
                                                <p>Warning Text Warning Text Warning TextW arning Text Warning Text Warning TextWarning Text</p>
                                                <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                                                    <span data-feather="x" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="alert-big alert alert-danger  alert-dismissible fade show " role="alert">
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Error Text</h6>
                                                <p>Warning Text Warning Text Warning TextW arning Text Warning Text Warning TextWarning Text</p>
                                                <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                                                    <span data-feather="x" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header  py-20">
                                        <h6>Icon</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert-icon-area alert alert-success " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <p>Success Tips</p>
                                            </div>
                                        </div>
                                        <div class="alert-icon-area alert alert-info " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <p>Informational Notes</p>
                                            </div>
                                        </div>
                                        <div class="alert-icon-area alert alert-warning " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <p>Warning</p>
                                            </div>
                                        </div>
                                        <div class="alert-icon-area alert alert-danger " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <p>Error</p>
                                            </div>
                                        </div>
                                        <div class="alert-icon-big alert alert-success " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Success Tips</h6>
                                                <p>Detailed description and advice about successful copywriting.</p>
                                            </div>
                                        </div>
                                        <div class="alert-icon-big alert alert-info " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Informational Notes</h6>
                                                <p>Additional description and information about copywriting.</p>
                                            </div>
                                        </div>
                                        <div class="alert-icon-big alert alert-warning " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Warning</h6>
                                                <p>This is a warning notice about copywriting.</p>
                                            </div>
                                        </div>
                                        <div class="alert-icon-big alert alert-danger " role="alert">
                                            <div class="alert-icon">
                                                <span data-feather="layers"></span>
                                            </div>
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Error</h6>
                                                <p>This is an error message about copywriting.</p>
                                            </div>
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
                                    <div class="card-header  py-20">
                                        <h6>More Types</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class=" alert alert-success " role="alert">
                                            <div class="alert-content">
                                                <p>Success Text</p>
                                            </div>
                                        </div>
                                        <div class=" alert alert-info " role="alert">
                                            <div class="alert-content">
                                                <p>Info Text</p>
                                            </div>
                                        </div>
                                        <div class=" alert alert-warning " role="alert">
                                            <div class="alert-content">
                                                <p>Warning Text</p>
                                            </div>
                                        </div>
                                        <div class=" alert alert-danger " role="alert">
                                            <div class="alert-content">
                                                <p>Error Text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header  py-20">
                                        <h6>Description</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert-big alert alert-success " role="alert">
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Success Text</h6>
                                                <p>Detailed description and advice about successful copywriting.</p>
                                            </div>
                                        </div>
                                        <div class="alert-big alert alert-info " role="alert">
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Info Text</h6>
                                                <p>Additional description and information about copywriting.</p>
                                            </div>
                                        </div>
                                        <div class="alert-big alert alert-warning " role="alert">
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Warning Text</h6>
                                                <p>This is a warning notice about copywriting.</p>
                                            </div>
                                        </div>
                                        <div class="alert-big alert alert-danger " role="alert">
                                            <div class="alert-content">
                                                <h6 class='alert-heading'>Error Text</h6>
                                                <p>This is an error message about copywriting.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header  py-20">
                                        <h6>Customized Close Text</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-capitalize alert alert-info  alert-dismissible fade show " role="alert">
                                            <div class="alert-content">
                                                <p>Info Text</p>
                                                <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">close now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header  py-20">
                                        <h6>Smoothly Unmount</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class=" alert alert-success  alert-dismissible fade show " role="alert">
                                            <div class="alert-content">
                                                <p>Alert Message Text</p>
                                                <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                                                    <span data-feather="x" aria-hidden="true"></span>
                                                </button>
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
