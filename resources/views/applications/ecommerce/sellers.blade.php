@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">sellers</h4>
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
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="userDatatable orderDatatable sellerDatatable global-shadow border mb-30 py-30 px-sm-30 px-20 bg-white radius-xl w-100">
                        <div class="project-top-wrapper d-flex justify-content-between flex-wrap mb-25 mt-n10">
                            <div class="d-flex align-items-center flex-wrap justify-content-center">
                                <div class="project-search order-search  global-shadow mt-10">
                                    <form action="/" class="order-search__form">
                                        <span data-feather="search"></span>
                                        <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Filter by keyword" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="content-center">
                                <div class="button-group m-0 mt-sm-0 mt-10 order-button-group">
                                    <button type="button" class="order-bg-opacity-secondary text-secondary btn radius-md">Export</button>
                                    <button type="button" class="btn btn-sm btn-primary mr-0 radius-md">
                                        <i class="la la-plus"></i> Add order</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0 table-borderless border-0">
                                <thead>
                                <tr class="userDatatable-header">
                                    <th scope="col">
                                        <div class="d-flex align-items-center">
                                            <div class="bd-example-indeterminate">
                                                <div class="checkbox-theme-default custom-checkbox  check-all">
                                                    <input class="checkbox" type="checkbox" id="check-23">
                                                    <label for="check-23">
                                                                <span class="checkbox-text ">
                                                                    sellers
                                                                </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <span class="userDatatable-title">Store Name</span>
                                    </th>
                                    <th scope="col">
                                        <span class="userDatatable-title">Products</span>
                                    </th>
                                    <th scope="col">
                                        <span class="userDatatable-title">Wallet Balance</span>
                                    </th>
                                    <th scope="col">
                                        <span class="userDatatable-title float-right">Create Date</span>
                                    </th>
                                    <th scope="col">
                                        <span class="userDatatable-title float-right">Actions</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-11">
                                                            <label for="check-grp-11"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm1.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Kellie Marquot
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Marquot Store
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            324
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-12">
                                                            <label for="check-grp-12"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm2.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Carroll Maharry
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Maharry Shipment
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            3125
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 20, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-13">
                                                            <label for="check-grp-13"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm3.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Rosenbaum Reichel
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Reichel
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            115
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 21, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-14">
                                                            <label for="check-grp-14"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm4.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Ashley Briggs
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Ashley
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            258
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 22, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-15">
                                                            <label for="check-grp-15"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm5.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Carl Jenkins
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Jenkins
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            268
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 23, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-16">
                                                            <label for="check-grp-16"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm6.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Bertha Martin
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Martin
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            136
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 23, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-17">
                                                            <label for="check-grp-17"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm1.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Stacie Hall
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Hall Store
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            348
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 24, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-18">
                                                            <label for="check-grp-18"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm2.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Kellie Marquot
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Marquot Store
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            257
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 25, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-19">
                                                            <label for="check-grp-19"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm3.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Carroll Maharry
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Reichel
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            286
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 26, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-20">
                                                            <label for="check-grp-20"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm4.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Rosenbaum Reichel
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Maharry Shipment
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            287
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 26, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-21">
                                                            <label for="check-grp-21"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm5.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Ashley Briggs
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Marquot Store
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            235
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 27, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-22">
                                                            <label for="check-grp-22"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm6.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Kellie Marquot
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Hall Store
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            349
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 28, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 d-flex align-items-center">
                                                <div class="checkbox-group-wrapper">
                                                    <div class="checkbox-group d-flex mr-3">
                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                            <input class="checkbox" type="checkbox" id="check-grp-23">
                                                            <label for="check-grp-23"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-32" style="background-image:url('{{ asset('img/tm1.png') }}'); background-size: cover;"></a>
                                            </div>
                                            <div class="orderDatatable-title">
                                                <p class="d-block mb-0">
                                                    Stacie Hall
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            Ashley
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            245
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title">
                                            $84,248.66
                                        </div>
                                    </td>
                                    <td>
                                        <div class="orderDatatable-title float-right">
                                            January 29, 2020
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right">
                                            <li>
                                                <a href="#" class="edit">
                                                    <span data-feather="edit"></span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="remove">
                                                    <span data-feather="trash-2"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-15 pt-25 border-top">
                            <nav class="atbd-page ">
                                <ul class="atbd-pagination d-flex">
                                    <li class="atbd-pagination__item">
                                        <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                        <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                        <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                        <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                        <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                        <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                        <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                        <a href="#" class="atbd-pagination__option">
                                        </a>
                                    </li>
                                    <li class="atbd-pagination__item">
                                        <div class="paging-option">
                                            <select name="page-number" class="page-selection">
                                                <option value="20">20/page</option>
                                                <option value="40">40/page</option>
                                                <option value="60">60/page</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
