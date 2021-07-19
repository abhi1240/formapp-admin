@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Collapse</h4>
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
                                <div class="atbd-collapse">
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header active">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-1" aria-expanded="true" aria-controls="collapse-body-1">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-1" class="collapse atbd-collapse-item__body show">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-2" aria-expanded="true" aria-controls="collapse-body-2">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-2" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-3" aria-expanded="true" aria-controls="collapse-body-3">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-3" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Nested panel</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-collapse ">
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-n-1" aria-expanded="true" aria-controls="collapse-body-n-1">
                                                <i class="la la-angle-down"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-n-1" class="collapse atbd-collapse-item__body  show">
                                            <div class="callapse-nested-block">
                                                <div class="atbd-collapse-item">
                                                    <div class="atbd-collapse-item__header">
                                                        <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-nested-n-1" aria-expanded="true" aria-controls="collapse-body-nested-n-1">
                                                            <i class="la la-angle-down"></i>
                                                            <h6>This is panel header 1</h6>
                                                        </a>
                                                    </div>
                                                    <div id="collapse-body-nested-n-1" class="collapse atbd-collapse-item__body  show">
                                                        <div class="collapse-body-text">
                                                            <p>
                                                                A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                                welcome guest in many households across the world.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-n-2" aria-expanded="true" aria-controls="collapse-body-n-2">
                                                <i class="la la-angle-down"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-n-2" class="collapse atbd-collapse-item__body ">
                                            <div class="callapse-nested-block">
                                                <div class="atbd-collapse-item">
                                                    <div class="atbd-collapse-item__header">
                                                        <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-nested-n-2" aria-expanded="true" aria-controls="collapse-body-nested-n-2">
                                                            <i class="la la-angle-down"></i>
                                                            <h6>This is panel header 1</h6>
                                                        </a>
                                                    </div>
                                                    <div id="collapse-body-nested-n-2" class="collapse atbd-collapse-item__body ">
                                                        <div class="collapse-body-text">
                                                            <p>
                                                                A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                                welcome guest in many households across the world.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-n-3" aria-expanded="true" aria-controls="collapse-body-n-3">
                                                <i class="la la-angle-down"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-n-3" class="collapse atbd-collapse-item__body ">
                                            <div class="callapse-nested-block">
                                                <div class="atbd-collapse-item">
                                                    <div class="atbd-collapse-item__header">
                                                        <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-nested-n-3" aria-expanded="true" aria-controls="collapse-body-nested-n-3">
                                                            <i class="la la-angle-down"></i>
                                                            <h6>This is panel header 1</h6>
                                                        </a>
                                                    </div>
                                                    <div id="collapse-body-nested-n-3" class="collapse atbd-collapse-item__body ">
                                                        <div class="collapse-body-text">
                                                            <p>
                                                                A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                                welcome guest in many households across the world.
                                                            </p>
                                                        </div>
                                                    </div>
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
                                <h6>No arrow</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-collapse">
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header active">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-h-1" aria-expanded="true" aria-controls="collapse-body-h-1">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-h-1" class="collapse atbd-collapse-item__body show">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-h-2" aria-expanded="true" aria-controls="collapse-body-h-2">
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-h-2" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-h-3" aria-expanded="true" aria-controls="collapse-body-h-3">
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-h-3" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
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
                                <h6>Accordion</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-collapse atbd-accordion">
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-a-1" aria-expanded="true" aria-controls="collapse-body-a-1">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-a-1" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-a-2" aria-expanded="true" aria-controls="collapse-body-a-2">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-a-2" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-a-3" aria-expanded="true" aria-controls="collapse-body-a-3">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-a-3" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Borderless</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-collapse atbd-collapse-borderless">
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header active">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-b-1" aria-expanded="true" aria-controls="collapse-body-b-1">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-b-1" class="collapse atbd-collapse-item__body show">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-b-2" aria-expanded="true" aria-controls="collapse-body-b-2">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-b-2" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-b-3" aria-expanded="true" aria-controls="collapse-body-b-3">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-b-3" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header py-20">
                                <h6>Custom Panel</h6>
                            </div>
                            <div class="card-body">
                                <div class="atbd-collapse atbd-collapse-custom">
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header active">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-c-1" aria-expanded="true" aria-controls="collapse-body-c-1">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-c-1" class="collapse atbd-collapse-item__body show">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-c-2" aria-expanded="true" aria-controls="collapse-body-c-2">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-c-2" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="atbd-collapse-item">
                                        <div class="atbd-collapse-item__header">
                                            <a href="#" class="item-link" data-toggle="collapse" data-target="#collapse-body-c-3" aria-expanded="true" aria-controls="collapse-body-c-3">
                                                <i class="la la-angle-right"></i>
                                                <h6>This is panel header 1</h6>
                                            </a>
                                        </div>
                                        <div id="collapse-body-c-3" class="collapse atbd-collapse-item__body">
                                            <div class="collapse-body-text">
                                                <p>
                                                    A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a
                                                    welcome guest in many households across the world.
                                                </p>
                                            </div>
                                        </div>
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
