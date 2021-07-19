@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">buttons</h4>
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
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-primary btn-default btn-squared ">Primary
                                            </button>
                                            <button class="btn btn-secondary btn-default btn-squared ">Secondary
                                            </button>
                                            <button class="btn btn-success btn-default btn-squared ">Success
                                            </button>
                                            <button class="btn btn-info btn-default btn-squared ">Info
                                            </button>
                                            <button class="btn btn-warning btn-default btn-squared ">Wraning
                                            </button>
                                            <button class="btn btn-danger btn-default btn-squared ">Danger
                                            </button>
                                            <button class="btn btn-link btn-default btn-squared ">Link
                                            </button>
                                            <button class="btn btn-dark btn-default btn-squared ">Dark
                                            </button>
                                            <button class="btn btn-light btn-default btn-squared ">Light
                                            </button>
                                            <button class="btn btn-white btn-default btn-squared ">White
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Light Color</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-primary btn-default btn-squared btn-transparent-primary ">Primary
                                            </button>
                                            <button class="btn btn-secondary btn-default btn-squared btn-transparent-secondary ">Secondary
                                            </button>
                                            <button class="btn btn-success btn-default btn-squared btn-transparent-success ">Success
                                            </button>
                                            <button class="btn btn-info btn-default btn-squared btn-transparent-info ">Info
                                            </button>
                                            <button class="btn btn-warning btn-default btn-squared btn-transparent-warning ">Wraning
                                            </button>
                                            <button class="btn btn-danger btn-default btn-squared btn-transparent-danger ">Danger
                                            </button>
                                            <button class="btn btn-dark btn-default btn-squared btn-transparent-dark ">Dark
                                            </button>
                                            <button class="btn btn-light btn-default btn-squared btn-transparent-light text-gray">Light
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Rounded</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-primary btn-default btn-rounded ">Primary
                                            </button>
                                            <button class="btn btn-secondary btn-default btn-rounded ">Secondary
                                            </button>
                                            <button class="btn btn-success btn-default btn-rounded ">Success
                                            </button>
                                            <button class="btn btn-info btn-default btn-rounded ">Info
                                            </button>
                                            <button class="btn btn-warning btn-default btn-rounded ">Wraning
                                            </button>
                                            <button class="btn btn-danger btn-default btn-rounded ">Danger
                                            </button>
                                            <button class="btn btn-dark btn-default btn-rounded ">Dark
                                            </button>
                                            <button class="btn btn-light btn-default btn-rounded ">Light
                                            </button>
                                            <button class="btn btn-white btn-default btn-rounded ">White
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Icon</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-primary btn-default btn-squared "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-primary btn-default btn-squared btn-transparent-primary "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-primary "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-light "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-light btn-default btn-squared "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-white btn-default btn-squared btn-shadow-white "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-icon btn-primary btn-squared">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-squared btn-outline-primary ">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-light btn-squared">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-squared btn-outline-light ">
                                                <span data-feather="layers"></span>
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Size</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap align-items-end">
                                            <button class="btn btn-primary btn-lg btn-squared ">Large Buton
                                            </button>
                                            <button class="btn btn-secondary btn-default btn-squared ">Default
                                            </button>
                                            <button class="btn btn-success btn-sm btn-squared ">Small
                                            </button>
                                            <button class="btn btn-info btn-xs btn-squared ">Extra small
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Multiple Buttons</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap align-items-end">
                                            <button class="btn btn-primary btn-default btn-squared ">Primary
                                            </button>
                                            <button class="btn btn-secondary btn-default btn-squared ">Secondary
                                            </button>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-light btn-outlined btn-outline-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                    <i class="la la-angle-down"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Btn Action One</a>
                                                    <a class="dropdown-item" href="#">Btn Action One</a>
                                                    <a class="dropdown-item" href="#">Btn Action One</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Group Button</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-block">
                                            <h6>Basic</h6>
                                            <div class="button-inline-list my-n2">
                                                <div class="btn-group atbd-button-group btn-group-normal my-2" role="group"><button type="button" class="btn  btn-xs active btn-outline-light">Today</button>
                                                    <button type="button" class="btn  btn-xs btn-outline-light">Week</button>
                                                    <button type="button" class="btn  btn-xs btn-outline-light">Month</button>
                                                    <button type="button" class="btn  btn-xs btn-outline-light">Year</button>
                                                </div>
                                                <div class="btn-group atbd-button-group btn-group-normal my-2" role="group"><button type="button" class="btn  btn-xs btn-outline-light">Cancel</button>
                                                    <button type="button" class="btn  btn-xs btn-outline-light">Ok</button>
                                                </div>
                                                <div class="btn-group atbd-button-group btn-group-solid my-2" role="group"><button type="button" class="btn  btn-xs btn-outline-light">Left</button>
                                                    <button type="button" class="btn  btn-xs btn-outline-light">Middle</button>
                                                    <button type="button" class="btn  btn-xs btn-outline-light">Right</button>
                                                </div>
                                            </div>
                                            <!-- ends: .button-inline-list" -->
                                        </div>
                                        <div class="atbd-button-block m-top-30">
                                            <h6>With Icon</h6>
                                            <div class="button-inline-list">
                                                <div class="btn-group atbd-button-group btn-group-withIcon my-2" role="group"><button type="button" class="btn btn-primary btn-xs active">
                                                        <span data-feather="chevron-left"></span>
                                                        Go Back
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        Go Forward
                                                        <span data-feather="chevron-right"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- ends: .button-inline-list" -->
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Block</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list">
                                            <button class="btn btn-primary btn-lg btn-squared btn-block ">Large Button
                                            </button>
                                            <button class="btn btn-secondary btn-default btn-squared btn-block ">Default
                                            </button>
                                            <button class="btn btn-success btn-sm btn-squared btn-block ">Samll
                                            </button>
                                            <button class="btn btn-info btn-xs btn-squared btn-block ">Extra Small
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Outline</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-default btn-squared btn-outline-primary ">Primary
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-secondary ">Secondary
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-success ">Success
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-info ">Info
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-warning ">Wraning
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-danger ">Danger
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-dark ">Dark
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-light text-gray">Light
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-dashed ">Dashed
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Raised</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-primary btn-default btn-squared btn-shadow-primary ">Primary
                                            </button>
                                            <button class="btn btn-secondary btn-default btn-squared btn-shadow-secondary ">Secondary
                                            </button>
                                            <button class="btn btn-success btn-default btn-squared btn-shadow-success ">Success
                                            </button>
                                            <button class="btn btn-info btn-default btn-squared btn-shadow-info ">Info
                                            </button>
                                            <button class="btn btn-warning btn-default btn-squared btn-shadow-warning ">Wraning
                                            </button>
                                            <button class="btn btn-danger btn-default btn-squared btn-shadow-danger ">Danger
                                            </button>
                                            <button class="btn btn-dark btn-default btn-squared btn-shadow-dark ">Dark
                                            </button>
                                            <button class="btn btn-white btn-default btn-squared btn-shadow-white ">White
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Rounded Outline</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-default btn-rounded btn-outline-primary ">Primary
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-secondary ">Secondary
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-success ">Success
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-info ">Info
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-warning ">Wraning
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-danger ">Danger
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-dark ">Dark
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-light text-gray">Light
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-dashed ">Dashed
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Rounded with Icon</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-primary btn-default btn-rounded "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-primary btn-default btn-rounded btn-transparent-primary "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-primary "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-default btn-rounded btn-outline-light "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-light btn-default btn-rounded "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-white btn-default btn-squared btn-shadow-white "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-icon btn-primary btn-circle">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-circle btn-outline-primary ">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-light btn-circle">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-circle btn-outline-light ">
                                                <span data-feather="layers"></span>
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Disabled</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap align-items-end mb-1">
                                            <button class="btn btn-primary btn-default btn-squared ">Primary
                                            </button>
                                            <button class="btn btn-primary btn-default btn-squared " disabled>Primary(Disabled)
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                        <div class="atbd-button-list d-flex flex-wrap align-items-end">
                                            <button class="btn btn-default btn-squared btn-outline-light text-gray">Default
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-light " disabled>Default(Disabled)
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Loading</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-primary btn-default btn-squared "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-primary btn-default btn-squared btn-transparent-primary "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-primary "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-default btn-squared btn-outline-light "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-light btn-default btn-squared "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-white btn-default btn-squared btn-shadow-white "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                            <button class="btn btn-icon btn-primary btn-squared">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-squared btn-outline-primary ">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-light btn-squared">
                                                <span data-feather="layers"></span>
                                            </button>
                                            <button class="btn btn-icon btn-squared btn-outline-light ">
                                                <span data-feather="layers"></span>
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Button Ghost</h6>
                                    </div>
                                    <div class="card-body gradient1">
                                        <div class="atbd-button-list d-flex flex-wrap">
                                            <button class="btn btn-ghost btn-default btn-squared ">Primary
                                            </button>
                                            <button class="btn btn-ghost btn-default btn-squared ">Secondary
                                            </button>
                                            <button class="btn btn-ghost btn-default btn-squared "><span data-feather="layers"></span>
                                                Default
                                            </button>
                                        </div>
                                        <!-- ends: .atbd-button-list" -->
                                    </div>
                                </div>
                                <!-- ends: .card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
    </div>
@endsection
