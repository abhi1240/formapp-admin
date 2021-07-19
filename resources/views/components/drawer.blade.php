@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Drawer</h4>
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
                                <div class="drawer-btn">
                                    <button class="btn btn-primary btn-default btn-squared drawer-trigger" data-drawer="basic">Open</button>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Basic</h6>
                            </div>
                            <div class="card-body position-relative overflow-hidden">
                                <div class="area-drawer-wrapper">
                                    <h6>Render in this</h6>
                                    <div class="drawer-btn d-flex justify-content-center">
                                        <button class="btn btn-primary btn-default btn-squared drawer-trigger" data-drawer="area">Open</button>
                                    </div>
                                    <div class="area-drawer">
                                        <div class="atbd-drawer">
                                            <div class="atbd-drawer__header">
                                                <h6 class="drawer-title">Basic Drawer</h6>
                                            </div>
                                            <!-- ends: .atbd-drawer__header -->
                                            <div class="atbd-drawer__body">
                                                <div class="drawer-content">
                                                    <p>Some Content</p>
                                                </div>
                                            </div>
                                            <!-- ends: .atbd-drawer__body -->
                                        </div>
                                        <!-- ends: .atbd-drawer -->
                                        <div class="area-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Preview draw</h6>
                            </div>
                            <div class="card-body">
                                <div class="drawer-profile-box">
                                    <div class="drawer-profile-box__single d-flex justify-content-between align-items-center">
                                        <div class="profile-author media align-items-center">
                                            <img src="{{ asset('img/tm4.png') }}" alt="Profile Image">
                                            <div class="profile-text media-body">
                                                <span class="author-name">David</span>
                                                <p class="author-title">Progresser XTech</p>
                                            </div>
                                        </div>
                                        <a href="#" class="drawer-trigger" data-drawer="profile">View Profile</a>
                                    </div>
                                    <!-- ends: .drawer-profile-box__single -->
                                    <div class="drawer-profile-box__single d-flex justify-content-between align-items-center">
                                        <div class="profile-author media align-items-center">
                                            <img src="{{ asset('img/tm4.png') }}" alt="Profile Image">
                                            <div class="profile-text media-body">
                                                <span class="author-name">David</span>
                                                <p class="author-title">Progresser XTech</p>
                                            </div>
                                        </div>
                                        <a href="#" class="drawer-trigger" data-drawer="profile">View Profile</a>
                                    </div>
                                    <!-- ends: .drawer-profile-box__single -->
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                    <!-- ends: .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Custom Placement</h6>
                            </div>
                            <div class="card-body">
                                <div class="drawer-placement-wrap d-flex align-items-center">
                                    <div class="radio-horizontal-list radio-horizontal-list2 d-flex">
                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="radio-placement" value=top id="radio-pd1">
                                            <label for="radio-pd1">
                                                <span class="radio-text">Top</span>
                                            </label>
                                        </div>
                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="radio-placement" value=right id="radio-pd2">
                                            <label for="radio-pd2">
                                                <span class="radio-text">Right</span>
                                            </label>
                                        </div>
                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="radio-placement" value=bottom id="radio-pd3">
                                            <label for="radio-pd3">
                                                <span class="radio-text">Bottom</span>
                                            </label>
                                        </div>
                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="radio-placement" value=left id="radio-pd4">
                                            <label for="radio-pd4">
                                                <span class="radio-text">Left</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="drawer-btn">
                                        <button class="btn btn-primary btn-default btn-squared drawer-trigger" data-drawer="basic">Open</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Submit form in drawer</h6>
                            </div>
                            <div class="card-body">
                                <div class="drawer-btn d-flex justify-content-center">
                                    <button class="btn btn-primary btn-default btn-squared drawer-trigger" data-drawer="account">+ New account</button>
                                </div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Multi-level drawer</h6>
                            </div>
                            <div class="card-body">
                                <div class="drawer-btn d-flex justify-content-center">
                                    <button class="btn btn-primary btn-default btn-squared drawer-multiTrigger" data-drawer="level-one">Open Drawer</button>
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
        <div class="drawer-basic-wrap">
            <div class="atbd-drawer drawer-basic d-none">
                <div class="atbd-drawer__header">
                    <h6 class="drawer-title">Basic Drawer</h6>
                </div><!-- ends: .atbd-drawer__header -->
                <div class="atbd-drawer__body">
                    <div class="drawer-content">
                        <p>Some Content</p>
                        <p>Some Content</p>
                        <p>Some Content</p>
                    </div>
                </div><!-- ends: .atbd-drawer__body -->
            </div><!-- ends: .atbd-drawer -->
            <div class="atbd-drawer drawer-account d-none">
                <div class="atbd-drawer__header d-flex aling-items-center justify-content-between">
                    <h6 class="drawer-title">Create a new account</h6>
                    <a href="#" class="btdrawer-close"><i class="la la-times"></i></a>
                </div><!-- ends: .atbd-drawer__header -->
                <div class="atbd-drawer__body">
                    <div class="drawer-content">
                        <div class="drawer-account-form form-basic">
                            <form action="#">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="username">Name</label>
                                        <input type="text" name="name" id="username" class="form-control form-control-sm" placeholder="Please Enter Your Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="url">Url</label>
                                        <input type="url" name="name" id="url" class="form-control form-control-sm" placeholder="Please Enter URL">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="owner">Owner</label>
                                        <select name="url" id="owner" class="form-control-sm">
                                            <option value="">Jack Ma</option>
                                            <option value="">Tom liu</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="type">Type</label>
                                        <select name="url" id="type" class="form-control-sm">
                                            <option value="">Jack Ma</option>
                                            <option value="">Tom liu</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="approver">Approver</label>
                                        <select name="url" id="approver" class="form-control-sm">
                                            <option value="">Jack Ma</option>
                                            <option value="">Tom liu</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="datepicker">DateTime</label>
                                        <input type="text" name="name" id="datepicker" class="form-control form-control-sm" placeholder="Please Enter URL">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="description">Discription</label>
                                        <textarea name="description" id="description" class="form-control form-control-sm" placeholder="PLease Enter Url Description"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- ends: .atbd-drawer__body -->
            </div><!-- ends: .atbd-drawer -->
            <div class="atbd-drawer drawer-profile d-none">
                <div class="atbd-drawer__body">
                    <div class="drawer-content">
                        <h6>User Profile</h6>
                        <div class="profile-info-box">
                            <div class="profile-info-box__single">
                                <h6>Personal</h6>
                                <div class="profile-info d-flex flex-wrap">
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Full Name:</span>
                                        <span class="profile-info__text">Lily</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Account:</span>
                                        <span class="profile-info__text">adminDesign@example.com</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">City:</span>
                                        <span class="profile-info__text">Toronto</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Country:</span>
                                        <span class="profile-info__text">Canada</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Birthday:</span>
                                        <span class="profile-info__text">February 21,2020</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Website:</span>
                                        <span class="profile-info__text">-</span>
                                    </div><!-- ends: .profile-info__single -->
                                </div>
                                <div class="profile-info-extra">
                                    <span class="profile-info__label">Message:</span>
                                    <span class="profile-info__text">Make things as simple as possible but no simpler.</span>
                                </div>
                            </div><!-- ends: .aprofile-info-box__single -->
                            <div class="profile-info-box__single">
                                <h6>Company</h6>
                                <div class="profile-info d-flex flex-wrap">
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Position:</span>
                                        <span class="profile-info__text">Programmer</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Responsibilities:</span>
                                        <span class="profile-info__text">Coding</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Department:</span>
                                        <span class="profile-info__text">XTech</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Supervisor:</span>
                                        <span class="profile-info__text">Canada</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Birthday:</span>
                                        <span class="profile-info__text">February 21,2020</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Website:</span>
                                        <span class="profile-info__text">-</span>
                                    </div><!-- ends: .profile-info__single -->
                                </div>
                                <div class="profile-info-extra">
                                    <span class="profile-info__label">Skills:</span>
                                    <span class="profile-info__text">C / C + +, data structures, software engineering, operating systems, computer networks, databases, compiler theory, computer architecture, Microcomputer Principle and Interface Technology, Computer English, Java, ASP, etc.</span>
                                </div>
                            </div><!-- ends: .aprofile-info-box__single -->
                            <div class="profile-info-box__single">
                                <h6>Conact</h6>
                                <div class="profile-info d-flex flex-wrap">
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Email:</span>
                                        <span class="profile-info__text">adminDesign@example.com</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Phone Number:</span>
                                        <span class="profile-info__text">+86 181 0000 0000</span>
                                    </div><!-- ends: .profile-info__single -->
                                    <div class="profile-info__single">
                                        <span class="profile-info__label">Github:</span>
                                        <span class="profile-info__text"><a href="#">github.com/admin-desing/</a></span>
                                    </div><!-- ends: .profile-info__single -->
                                </div>
                            </div><!-- ends: .aprofile-info-box__single -->
                        </div>
                    </div>
                </div><!-- ends: .atbd-drawer__body -->
            </div><!-- ends: .atbd-drawer -->
        </div>
        <div class="drawer-multiLevel">
            <div class="atbd-drawer drawer-level-one">
                <div class="atbd-drawer__header">
                    <h6 class="drawer-title">Two-level Drawer</h6>
                </div><!-- ends: .atbd-drawer__header -->
                <div class="atbd-drawer__body">
                    <div class="drawer-content">
                        <p>Some Content</p>
                        <button class="btn btn-primary btn-default btn-squared drawer-multiTrigger" data-drawer="level-two">Two Lavel Drawer</button>
                    </div>
                </div><!-- ends: .atbd-drawer__body -->
            </div><!-- ends: .atbd-drawer -->
            <div class="atbd-drawer drawer-level-two">
                <div class="atbd-drawer__header">
                    <h6 class="drawer-title">Two-level Drawer</h6>
                </div><!-- ends: .atbd-drawer__header -->
                <div class="atbd-drawer__body">
                    <div class="drawer-content">
                    </div>
                </div><!-- ends: .atbd-drawer__body -->
            </div><!-- ends: .atbd-drawer -->
        </div>
        <div class="overlay-dark"></div>
        <div class="overlay-dark-l2"></div>
    </div>
@endsection
