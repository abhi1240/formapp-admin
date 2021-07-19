@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Chat</h4>
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
            </div>
        </div>
        <div class="chat-area d-flex mb-40">
            <div class="mb-lg-0 mb-40 chat-sidebar">
                <div class="sidebar-group left-sidebar chat_sidebar">
                    <div id="chat" class="left-sidebar-wrap bg-white radius-xl active">
                        <div class="chat-wrapper py-25">
                            <div class="search-header">
                                <form action="/" class="d-flex align-items-center">
                                    <span data-feather="search"></span>
                                    <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div><!-- Ends: .search-header -->
                            <div class="search-tab">
                                <ul class="nav ap-tab-main border-bottom text-capitalize" id="ueberTab" role="tablist">
                                    <li class="nav-item mr-0">
                                        <a class="nav-link active" id="first-tab" data-target="#panel_b_first" data-secondary="#panel_a_first" data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="true">private
                                            chat</a>
                                    </li>
                                    <li class="nav-item mr-0">
                                        <a class="nav-link group-notification" id="second-tab" data-target="#panel_b_second" data-secondary="#panel_a_second" data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="false">
                                            group chat
                                            <span class="total-message ml-1">
                                                    <span class="badge badge-danger ">5</span>
                                                </span>
                                        </a>
                                    </li>
                                    <li class="nav-item mr-0">
                                        <a class="nav-link" id="third-tab" data-target="#panel_b_thrid" data-secondary="#panel_a_third" data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false">all
                                            contact</a>
                                    </li>
                                </ul>
                            </div><!-- Ends: .search-tab -->
                            <div class="search-body">
                                <div class="tab-content" id="ueberTabA">
                                    <div class="tab-pane fade show active" id="panel_a_first" role="tabpanel" aria-labelledby="first-tab">
                                        <ul class="user-list">
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet fdsfdsf sdf dsf dsf dsf dsf dsf d</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Shreyu Neu</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Domnic Harris</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">15</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Khalid Hasan</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse5.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Tuhin Molla</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Billal Hossain</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse7.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Ibn Adam</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse8.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Tanim</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse9.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Tabib Rahman</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Shreyu Neu</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Domnic Harris</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Khalid Hasan</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Billal Hossain</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="panel_a_second" role="tabpanel" aria-labelledby="second-tab">
                                        <ul class="user-list">
                                            <li>
                                                <div class="user-button-top">
                                                    <button type="button" class="border bg-normal color-gray rounded-pill content-center"><span data-feather="edit"></span>create a new group</button>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">2</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">12</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse5.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse7.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse8.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse9.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse10.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse11.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse12.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse13.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse15.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="panel_a_third" role="tabpanel" aria-labelledby="third-tab">
                                        <ul class="user-list">
                                            <li>
                                                <div class="user-button-top">
                                                    <button type="button" class="border bg-normal color-gray rounded-pill content-center"><span data-feather="user-plus"></span>Add New Contact</button>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse1.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse3.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">24</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse4.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse5.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse6.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offlien"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse7.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse8.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse9.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse10.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse11.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse12.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse13.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-offline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                            <div class="total-message mt-1 d-flex justify-content-end">
                                                                <span class="badge badge-success ">3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse2.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="user-list-item">
                                                <div class="user-list-item__wrapper">
                                                    <div class="avatar avatar-circle ml-0">
                                                        <img src="{{ asset('img/ellipse15.png') }}" class="rounded-circle wh-46 d-flex bg-opacity-primary" alt="image">
                                                        <div class="badge-direction-bottom">
                                                            <span class="chat-badge-dot avatar-online"></span>
                                                        </div>
                                                    </div>
                                                    <div class="users-list-body">
                                                        <div class="users-list-body-title">
                                                            <h6>Meyri Carles</h6>
                                                            <div class="text-limit" data-maxlength="10">
                                                                <p class="mb-0"><span>Lorem ipsum dolor us was they amet</span>...</p>
                                                            </div>
                                                        </div>
                                                        <div class="last-chat-time unread">
                                                            <small>14:45 pm</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- Ends: .search-body -->
                        </div><!-- Ends: .chat-wrapper -->
                    </div>
                </div><!-- Ends: .sidebar group -->
            </div><!-- Ends: .mb-lg-0 -->
            <div class="tab-content" id="ueberTabB">
                <div class="tab-pane fade  show active" id="panel_b_first" role="tabpanel" aria-labelledby="first-tab">
                    <div class="chat">
                        <div class="chat-body bg-white radius-xl">
                            <div class="chat-header">
                                <div class="media chat-name align-items-center">
                                    <div class="media-body align-self-center ">
                                        <h5 class=" mb-0 fw-500 mb-2">Domnic Harys</h5>
                                        <div class="media-body__content d-flex align-items-center">
                                            <span class="badge-dot dot-success mr-1"></span>
                                            <small class="d-flex color-light fs-12 text-capitalize">
                                                active now
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Chat Options -->
                                <ul class="nav flex-nowrap">
                                    <li class="nav-item list-inline-item mr-0">
                                        <div class="dropdown">
                                            <a href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-vertical"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="users"></span>
                                                    <span>Create new group</span>
                                                </a>
                                                <a class="dropdown-item align-items-center d-flex" href="#">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="trash-2"></span>
                                                    <span>Delete conversation</span>
                                                </a>
                                                <a class="dropdown-item align-items-center d-flex" href="#">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="x-octagon"></span>
                                                    <span>Block & report</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-box p-xl-30 pl-lg-20 pr-lg-0">
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Domnic Harys</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-20 mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-primary">
                                                            <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna aliquyam erat consetetur sadipscing elitr
                                                                sed
                                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                                aliquyam erat sed diam voluptua..</p>
                                                        </div>
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="chat-text-box__reaction px-sm-15 px-2">
                                                                <div class="emotions">
                                                                    <div class="dropdown  dropdown-click ">
                                                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span data-feather="smile"></span> </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                            <ul class="emotions__parent d-flex">
                                                                                <li>
                                                                                    <a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/cool.png') }}" alt="emotions">
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy2.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/shocked.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/like.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/heart.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span data-feather="more-horizontal"></span>
                                                                </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                    <a class="dropdown-item" href="#">Quote</a>
                                                                    <a class="dropdown-item" href="#">Forward</a>
                                                                    <a class="dropdown-item" href="#">Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <p class="social-connector text-center text-capitalize">
                                    <span>today</span>
                                </p>
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                        <a class="dropdown-item" href="#">remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna aliquyam erat consetetur sadipscing elitr
                                                                sed
                                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                                aliquyam erat sed diam voluptua..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                        <a class="dropdown-item" href="#">remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore et
                                                                dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-30">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Domnic Harys</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-20 mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-primary">
                                                            <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna.</p>
                                                        </div>
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="chat-text-box__reaction px-sm-15 px-2">
                                                                <div class="emotions">
                                                                    <div class="dropdown  dropdown-click ">
                                                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span data-feather="smile"></span> </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                            <ul class="emotions__parent d-flex">
                                                                                <li>
                                                                                    <a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/cool.png') }}" alt="emotions">
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy2.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/shocked.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/like.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/heart.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span data-feather="more-horizontal"></span>
                                                                </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                    <a class="dropdown-item" href="#">Quote</a>
                                                                    <a class="dropdown-item" href="#">Forward</a>
                                                                    <a class="dropdown-item" href="#">Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                        <a class="dropdown-item" href="#">remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore et
                                                                dolore magna.</p>
                                                        </div>
                                                    </div>
                                                    <div class="seen-chat d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                        <div class="chat-text-box__title d-flex align-items-center mr-10 ">
                                                                <span class="chat-text-box__time fs-12 color-light fw-400">Seen
                                                                    9:20
                                                                    PM</span>
                                                        </div>
                                                        <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-30">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="d-flex align-items-center ">
                                                        <div class="chat-text-box__subtitle typing cbg-light pr-30">
                                                            <p class="color-light text-capitalize">typing...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                            </div>
                            <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                                <div class="chat-type-text">
                                    <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                        <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                            <div class=" flex-1 d-flex align-items-center chat-type-text__write ml-0">
                                                <a href="#">
                                                    <span data-feather="smile"></span></a>
                                                <input class="form-control border-0 p-0 bg-transparent box-shadow-none" placeholder="Type your message...">
                                            </div>
                                            <div class="chat-type-text__btn">
                                                <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                    <span data-feather="image"></span></button>
                                                <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                    <span data-feather="paperclip"></span></button>
                                                <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                    <span data-feather="send"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .chat-->
                </div>
                <div class="tab-pane fade" id="panel_b_second" role="tabpanel" aria-labelledby="second-tab">
                    <div class="chat">
                        <div class="chat-body bg-white radius-xl">
                            <div class="chat-header bg-white">
                                <div class="media chat-name align-items-center">
                                    <div class="media-body align-self-center ">
                                        <h5 class=" mb-0 fw-500 text-uppercase">ui/ux group</h5>
                                    </div>
                                </div>
                                <div class="image-group">
                                    <ul class="d-flex">
                                        <li>
                                            <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                        </li>
                                        <li>
                                            <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-30 rounded-circle">
                                        </li>
                                        <li>
                                            <a href="#" class="bg-primary rounded-circle wh-30 color-white content-center fs-10 fw-500">20+</a>
                                        </li>
                                        <li>
                                            <a href="#" class="border rounded-circle wh-30 color-extra-light content-center">
                                                <span data-feather="plus"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Chat Options -->
                                <ul class="nav flex-nowrap">
                                    <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                                        <div class="dropdown">
                                            <a href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-vertical"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="users"></span>
                                                    <span>Create new group</span>
                                                </a>
                                                <a class="dropdown-item align-items-center d-flex" href="#">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="trash-2"></span>
                                                    <span>Delete conversation</span>
                                                </a>
                                                <a class="dropdown-item align-items-center d-flex" href="#">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="x-octagon"></span>
                                                    <span>Block & report</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-box p-xl-30 pl-lg-20 pr-lg-0">
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Domnic Harys</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-20 mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-primary">
                                                            <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna aliquyam erat consetetur sadipscing elitr
                                                                sed
                                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                                aliquyam erat sed diam voluptua..</p>
                                                        </div>
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="chat-text-box__reaction px-sm-15 px-2">
                                                                <div class="emotions">
                                                                    <div class="dropdown  dropdown-click ">
                                                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span data-feather="smile"></span> </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                            <ul class="emotions__parent d-flex">
                                                                                <li>
                                                                                    <a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/cool.png') }}" alt="emotions">
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy2.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/shocked.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/like.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/heart.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span data-feather="more-horizontal"></span>
                                                                </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                    <a class="dropdown-item" href="#">Quote</a>
                                                                    <a class="dropdown-item" href="#">Forward</a>
                                                                    <a class="dropdown-item" href="#">Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <p class="social-connector text-center text-capitalize">
                                    <span>today</span>
                                </p>
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                        <a class="dropdown-item" href="#">remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna aliquyam erat consetetur sadipscing elitr
                                                                sed
                                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                                aliquyam erat sed diam voluptua..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore et
                                                                dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-30">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Domnic Harys</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-20 mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-primary">
                                                            <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna.</p>
                                                        </div>
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="chat-text-box__reaction px-sm-15 px-2">
                                                                <div class="emotions">
                                                                    <div class="dropdown  dropdown-click ">
                                                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span data-feather="smile"></span> </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                            <ul class="emotions__parent d-flex">
                                                                                <li>
                                                                                    <a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/cool.png') }}" alt="emotions">
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy2.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/shocked.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/like.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/heart.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span data-feather="more-horizontal"></span>
                                                                </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                    <a class="dropdown-item" href="#">Quote</a>
                                                                    <a class="dropdown-item" href="#">Forward</a>
                                                                    <a class="dropdown-item" href="#">Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                        <a class="dropdown-item" href="#">remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore et
                                                                dolore magna.</p>
                                                        </div>
                                                    </div>
                                                    <div class="seen-chat seen-chat-group  d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                        <ul class="d-flex">
                                                            <li>
                                                                <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('img/author/2.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('img/author/3.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('img/author/4.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-30">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="d-flex align-items-center ">
                                                        <div class="chat-text-box__subtitle typing cbg-light pr-30">
                                                            <p class="color-light text-capitalize">typing...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Incomming -->
                            <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                                <div class="chat-type-text">
                                    <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                        <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                            <div class=" flex-1 d-flex align-items-center chat-type-text__write ml-0">
                                                <a href="#">
                                                    <span data-feather="smile"></span></a>
                                                <input class="form-control border-0 p-0 bg-transparent" placeholder="Type your message...">
                                            </div>
                                            <div class="chat-type-text__btn">
                                                <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                    <span data-feather="image"></span></button>
                                                <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                    <span data-feather="paperclip"></span></button>
                                                <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                    <span data-feather="send"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .chat -->
                </div>
                <div class="tab-pane fade" id="panel_b_thrid" role="tabpanel" aria-labelledby="third-tab">
                    <div class="chat">
                        <div class="chat-body bg-white radius-xl">
                            <div class="chat-header bg-white">
                                <div class="media chat-name align-items-center">
                                    <div class="media-body align-self-center ">
                                        <h5 class=" mb-0 fw-500 mb-2">Domnic Harys</h5>
                                        <div class="d-flex align-items-center">
                                            <span class="badge-dot dot-success mr-1"></span>
                                            <small class="d-flex color-light fs-12 text-capitalize">
                                                active now
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Chat Options -->
                                <ul class="nav flex-nowrap">
                                    <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                                        <div class="dropdown">
                                            <a href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-vertical"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item align-items-center d-flex" href="#" data-chat-info-toggle="">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="users"></span>
                                                    <span>Create new group</span>
                                                </a>
                                                <a class="dropdown-item align-items-center d-flex" href="#">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="trash-2"></span>
                                                    <span>Delete conversation</span>
                                                </a>
                                                <a class="dropdown-item align-items-center d-flex" href="#">
                                                    <!-- Default :: Inline SVG -->
                                                    <span data-feather="x-octagon"></span>
                                                    <span>Block & report</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-box p-xl-30 pl-lg-20 pr-lg-0">
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Domnic Harys</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-20 mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-primary">
                                                            <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna aliquyam erat consetetur sadipscing elitr
                                                                sed
                                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                                aliquyam erat sed diam voluptua..</p>
                                                        </div>
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="chat-text-box__reaction px-sm-15 px-2">
                                                                <div class="emotions">
                                                                    <div class="dropdown  dropdown-click ">
                                                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span data-feather="smile"></span> </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                            <ul class="emotions__parent d-flex">
                                                                                <li>
                                                                                    <a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/cool.png') }}" alt="emotions">
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy2.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/shocked.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/like.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/heart.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span data-feather="more-horizontal"></span>
                                                                </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                    <a class="dropdown-item" href="#">Quote</a>
                                                                    <a class="dropdown-item" href="#">Forward</a>
                                                                    <a class="dropdown-item" href="#">Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <p class="social-connector text-center text-capitalize">
                                    <span>today</span>
                                </p>
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                        <a class="dropdown-item" href="#">remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna aliquyam erat consetetur sadipscing elitr
                                                                sed
                                                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                                aliquyam erat sed diam voluptua..</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                        <a class="dropdown-item" href="#">remove</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore et
                                                                dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-30">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center">
                                                        <h6 class="fs-14">Domnic Harys</h6>
                                                        <span class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-20 mt-10">
                                                        <div class="chat-text-box__subtitle p-20 bg-primary">
                                                            <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                labore
                                                                et dolore magna.</p>
                                                        </div>
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="chat-text-box__reaction px-sm-15 px-2">
                                                                <div class="emotions">
                                                                    <div class="dropdown  dropdown-click ">
                                                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <span data-feather="smile"></span> </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                            <ul class="emotions__parent d-flex">
                                                                                <li>
                                                                                    <a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/cool.png') }}" alt="emotions">
                                                                                    </a>
                                                                                </li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy2.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/happy.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/shocked.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/like.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                                <li><a class="" href="#">
                                                                                        <img src="{{ asset('img/svg/heart.png') }}" alt="emotions">
                                                                                    </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown dropdown-click">
                                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span data-feather="more-horizontal"></span>
                                                                </button>
                                                                <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                    <a class="dropdown-item" href="#">Copy</a>
                                                                    <a class="dropdown-item" href="#">Quote</a>
                                                                    <a class="dropdown-item" href="#">Forward</a>
                                                                    <a class="dropdown-item" href="#">Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <!-- Start: Outgoing -->
                                <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="chat-text-box__other d-flex">
                                                            <div class="px-15">
                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span data-feather="more-horizontal"></span>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu" style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item" href="#">Quote</a>
                                                                        <a class="dropdown-item" href="#">Forward</a>
                                                                        <a class="dropdown-item" href="#">Report</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-box__subtitle p-20 bg-deep">
                                                            <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                labore et
                                                                dolore magna.</p>
                                                        </div>
                                                    </div>
                                                    <div class="seen-chat d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                        <div class="chat-text-box__title d-flex align-items-center mr-10 ">
                                                                <span class="chat-text-box__time fs-12 color-light fw-400">Seen
                                                                    9:20
                                                                    PM</span>
                                                        </div>
                                                        <img src="{{ asset('img/author/1.jpg') }}" alt="img" class="wh-20 rounded-circle">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Outgoing  -->
                                <!-- Start: Incomming -->
                                <div class="flex-1 incoming-chat mt-30">
                                    <div class="chat-text-box">
                                        <div class="media ">
                                            <div class="chat-text-box__photo ">
                                                <img src="{{ asset('img/author/1.jpg') }}" class="align-self-start mr-15 wh-46" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-text-box__content">
                                                    <div class="d-flex align-items-center ">
                                                        <div class="chat-text-box__subtitle typing cbg-light pr-30">
                                                            <p class="color-light text-capitalize">typing...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                            </div>
                            <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                                <div class="chat-type-text">
                                    <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                        <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                            <div class=" flex-1 d-flex align-items-center chat-type-text__write ml-0">
                                                <a href="#">
                                                    <span data-feather="smile"></span></a>
                                                <input class="form-control border-0 p-0 bg-transparent box-shadow-none" placeholder="Type your message...">
                                            </div>
                                            <div class="chat-type-text__btn">
                                                <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                    <span data-feather="image"></span></button>
                                                <button type="button" class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                    <span data-feather="paperclip"></span></button>
                                                <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                    <span data-feather="send"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .chat -->
                </div>
            </div><!-- Ends: .tab-content -->
        </div><!-- Ends: .chat-area -->
    </div>
@endsection
