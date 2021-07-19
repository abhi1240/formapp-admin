@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">cards</h4>
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
                            <div class="card-header">
                                <h6>Basic card</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="cards-wrapper">
                                            <div class="card-single mb-4">
                                                <div class="card card-default card-md bg-white card-bordered">
                                                    <div class="card-header">
                                                        <h6>Default size card</h6>
                                                        <div class="card-extra">
                                                            <div class="dropdown dropdown-hover">
                                                                <a class="btn-link" href="">More</a>
                                                                <div class="dropdown-default">
                                                                    <a class="dropdown-item" href="#">More One</a>
                                                                    <a class="dropdown-item" href="#">More Two</a>
                                                                    <a class="dropdown-item" href="#">More Three</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="card-content">
                                                            <p>Card content</p>
                                                            <p>Card content</p>
                                                            <p>Card content</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-single">
                                                <div class="card card-default card-sm bg-white card-bordered">
                                                    <div class="card-header">
                                                        <h6>Small size card</h6>
                                                        <div class="card-extra">
                                                            <div class="dropdown dropdown-hover">
                                                                <a class="btn-link" href="">More</a>
                                                                <div class="dropdown-default">
                                                                    <a class="dropdown-item" href="#">More One</a>
                                                                    <a class="dropdown-item" href="#">More Two</a>
                                                                    <a class="dropdown-item" href="#">More Three</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="card-content">
                                                            <p>Card content</p>
                                                            <p>Card content</p>
                                                            <p>Card content</p>
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
                    </div>
                    <!-- ends: .col-12 -->
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Basic card</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="cards-wrapper">
                                            <div class="card-single mb-4">
                                                <div class="card card-default card-md bg-normal card-bordered">
                                                    <div class="card-header">
                                                        <h6>Default size card</h6>
                                                        <div class="card-extra">
                                                            <div class="dropdown dropdown-hover">
                                                                <a class="btn-link" href="">More</a>
                                                                <div class="dropdown-default">
                                                                    <a class="dropdown-item" href="#">More One</a>
                                                                    <a class="dropdown-item" href="#">More Two</a>
                                                                    <a class="dropdown-item" href="#">More Three</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="card-content">
                                                            <p>Card content</p>
                                                            <p>Card content</p>
                                                            <p>Card content</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-single">
                                                <div class="card card-default card-sm bg-normal card-bordered">
                                                    <div class="card-header">
                                                        <h6>Small size card</h6>
                                                        <div class="card-extra">
                                                            <div class="dropdown dropdown-hover">
                                                                <a class="btn-link" href="">More</a>
                                                                <div class="dropdown-default">
                                                                    <a class="dropdown-item" href="#">More One</a>
                                                                    <a class="dropdown-item" href="#">More Two</a>
                                                                    <a class="dropdown-item" href="#">More Three</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="card-content">
                                                            <p>Card content</p>
                                                            <p>Card content</p>
                                                            <p>Card content</p>
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
                    </div>
                    <!-- ends: .col-12 -->
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Simple card</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="cards-wrapper">
                                            <div class="card-single">
                                                <div class="card card-default card-md bg-white card-bordered">
                                                    <div class="card-body">
                                                        <div class="card-content">
                                                            <p>Card content</p>
                                                            <p>Card content</p>
                                                            <p>Card content</p>
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
                    </div>
                    <!-- ends: .col-12 -->
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Simple card</h6>
                            </div>
                            <div class="card-body">
                                <div class="columnCard-wrapper">
                                    <div class="row">
                                        <div class="col-lg-4 mb-20">
                                            <div class="card card-default card-md bg-white ">
                                                <div class="card-header">
                                                    <h6>Card title</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <p>Card content</p>
                                                        <p>Card content</p>
                                                        <p>Card content</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-20">
                                            <div class="card card-default card-md bg-white ">
                                                <div class="card-header">
                                                    <h6>Card title</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <p>Card content</p>
                                                        <p>Card content</p>
                                                        <p>Card content</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-20">
                                            <div class="card card-default card-md bg-white ">
                                                <div class="card-header">
                                                    <h6>Card title</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <p>Card content</p>
                                                        <p>Card content</p>
                                                        <p>Card content</p>
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
                    <!-- ends: .col-12 -->
                    <div class="col-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Simple card</h6>
                            </div>
                            <div class="card-body">
                                <div class="columnGrid-wrapper">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card card-default card-md bg-white card-bordered">
                                                <div class="card-header">
                                                    <h6>Card title</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-grid-table table-responsive">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                                <td>
                                                                    <p>Content</p>
                                                                </td>
                                                            </tr>
                                                        </table>
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
                    <!-- ends: .col-12 -->
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
    </div>
@endsection
