@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Menu</h4>
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
                                <h6>Top Navigation</h6>
                            </div>
                            <div class="card-body">
                                <a href="" class="menu-mob-trigger d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <div class="menu-wrapper">
                                    <ul class="atbd-menu menu-top menu-horizontal ">
                                        <li class="atbd-menu__item has-submenu">
                                            <a class="atbd-menu__link active" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation One</span>
                                            </a>
                                            <ul class="atbd-submenu">
                                                <li class="atbd-menu__item">
                                                    <span class="submenu-title">Item One</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="atbd-menu__item has-submenu">
                                                    <a href="#" class="atbd-menu__link">Item One</a>
                                                    <ul class="atbd-submenu">
                                                        <li><a class="atbd-menu__link" href="#"> Option 1</a></li>
                                                        <li><a class="atbd-menu__link" href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="atbd-menu__item menu-item-disabled">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation Two</span>
                                            </a>
                                        </li>
                                        <li class="atbd-menu__item has-submenu">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="settings"></span></span>
                                                <span class="atbd-menu__text">Navigation Three-Submenu</span>
                                            </a>
                                            <ul class="atbd-submenu">
                                                <li>
                                                    <span class="submenu-title">Item One</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="submenu-title">Item Two</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="atbd-menu__item">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation Four Link</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-12 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Vertical Menu</h6>
                            </div>
                            <div class="card-body">
                                <div class="menu-wrapper">
                                    <ul class="atbd-menu menu-top menu-vertical ">
                                        <li class="atbd-menu__item has-submenu">
                                            <a class="atbd-menu__link active" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation One</span>
                                            </a>
                                            <ul class="atbd-submenu">
                                                <li class="atbd-menu__item">
                                                    <span class="submenu-title">Item One</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="atbd-menu__item has-submenu">
                                                    <a href="#" class="atbd-menu__link">Item One</a>
                                                    <ul class="atbd-submenu">
                                                        <li><a class="atbd-menu__link" href="#"> Option 1</a></li>
                                                        <li><a class="atbd-menu__link" href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="atbd-menu__item menu-item-disabled">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation Two</span>
                                            </a>
                                        </li>
                                        <li class="atbd-menu__item has-submenu">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="settings"></span></span>
                                                <span class="atbd-menu__text">Navigation Three-Submenu</span>
                                            </a>
                                            <ul class="atbd-submenu">
                                                <li>
                                                    <span class="submenu-title">Item One</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="submenu-title">Item Two</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="atbd-menu__item">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation Four Link</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Current Sub Menu</h6>
                            </div>
                            <div class="card-body">
                                <div class="menu-wrapper">
                                    <ul class="atbd-menu menu-top menu-vertical menu-collapsable">
                                        <li class="atbd-menu__item has-submenu">
                                            <a class="atbd-menu__link active" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation One</span>
                                            </a>
                                            <ul class="atbd-submenu">
                                                <li class="atbd-menu__item">
                                                    <span class="submenu-title">Item One</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="atbd-menu__item has-submenu">
                                                    <a href="#" class="atbd-menu__link">Item One</a>
                                                    <ul class="atbd-submenu">
                                                        <li><a class="atbd-menu__link" href="#"> Option 1</a></li>
                                                        <li><a class="atbd-menu__link" href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="atbd-menu__item menu-item-disabled">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation Two</span>
                                            </a>
                                        </li>
                                        <li class="atbd-menu__item has-submenu">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="settings"></span></span>
                                                <span class="atbd-menu__text">Navigation Three-Submenu</span>
                                            </a>
                                            <ul class="atbd-submenu">
                                                <li>
                                                    <span class="submenu-title">Item One</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="submenu-title">Item Two</span>
                                                    <ul class="atbd-submenu-item">
                                                        <li><a href="#"> Option 1</a></li>
                                                        <li><a href="#"> Option 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="atbd-menu__item">
                                            <a class="atbd-menu__link" href="#">
                                                <span class="atbd-menu__icon"><span data-feather="mail"></span></span>
                                                <span class="atbd-menu__text">Navigation Four Link</span>
                                            </a>
                                        </li>
                                    </ul>
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
        <div class="mobile-nav-wrapper">
            <a href="#" class="nav-close">
                <span data-feather="x"></span></a>
        </div>
    </div>
@endsection
