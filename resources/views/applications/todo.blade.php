@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="todo-breadcrumb">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">To-Do</h4>
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
                <div class="col-xl-6">
                    <div class="card mb-25">
                        <div class="card-header">
                            <h6>Task Lists</h6>
                        </div>
                        <div class="card-body px-0 pt-15 pb-25">
                            <div class="todo-task table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td1" checked>
                                                    <label for="check-grp-td1" class="fs-14 color-primary strikethrough">
                                                        Add images to the product gallery
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="active ">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td2" checked>
                                                    <label for="check-grp-td2" class="fs-14 color-primary strikethrough">
                                                        Update user profile page
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="active ">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td3">
                                                    <label for="check-grp-td3" class="fs-14 color-primary strikethrough">
                                                        Support tickets list doesn&#39;t support commas
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td4">
                                                    <label for="check-grp-td4" class="fs-14 color-primary strikethrough">
                                                        Changing title text on single locations pages
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="active ">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td5">
                                                    <label for="check-grp-td5" class="fs-14 color-primary strikethrough">
                                                        Registration Confirmation! Email is missing some information
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td6">
                                                    <label for="check-grp-td6" class="fs-14 color-primary strikethrough">
                                                        Login page not redirecting wrong
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td7">
                                                    <label for="check-grp-td7" class="fs-14 color-primary strikethrough">
                                                        Custom Field for Registration
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="add-task-action">
                                <button type="submit" class="btn btn-primary btn-transparent-primary btn-lg" data-toggle="modal" data-target="#add-todo-modal">
                                    <span data-feather="plus"></span> Add New Task</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: col-xl-6 -->
                <div class="col-xl-6">
                    <div class="card mb-25">
                        <div class="card-header">
                            <h6>Task Lists</h6>
                        </div>
                        <div class="card-body px-0 pt-15 pb-25">
                            <div class="todo-task table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td8" checked>
                                                    <label for="check-grp-td8" class="fs-14 color-primary strikethrough">
                                                        Add images to the product gallery
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="active ">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td9" checked>
                                                    <label for="check-grp-td9" class="fs-14 color-primary strikethrough">
                                                        Update user profile page
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="active ">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td10">
                                                    <label for="check-grp-td10" class="fs-14 color-primary strikethrough">
                                                        Support tickets list doesn&#39;t support commas
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td11">
                                                    <label for="check-grp-td11" class="fs-14 color-primary strikethrough">
                                                        Changing title text on single locations pages
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="active ">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td12">
                                                    <label for="check-grp-td12" class="fs-14 color-primary strikethrough">
                                                        Registration Confirmation! Email is missing some information
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td13">
                                                    <label for="check-grp-td13" class="fs-14 color-primary strikethrough">
                                                        Login page not redirecting wrong
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="todo-list ptl--hover ">
                                        <td>
                                            <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                    <input class="checkbox" type="checkbox" id="check-grp-td14">
                                                    <label for="check-grp-td14" class="fs-14 color-primary strikethrough">
                                                        Custom Field for Registration
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="todo-list__right">
                                                <ul class="d-flex align-content-center justify-content-end">
                                                    <li>
                                                        <a href="#" class="plus">
                                                            <span data-feather="move"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="">
                                                            <span data-feather="star"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span data-feather="trash-2"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- ends: todo-task -->
                            <div class="add-task-action">
                                <button type="submit" class="btn btn-primary btn-transparent-primary btn-lg" data-toggle="modal" data-target="#add-todo-modal">
                                    <span data-feather="plus"></span> Add New Task</button>
                            </div>
                            <!-- ends: add-task-action -->
                        </div>
                    </div>
                </div>
                <!-- ends: col-xl-6 -->
            </div>
        </div>
        <div class="add-todo-modal modal fade" id="add-todo-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md add-todo-dialog modal-dialog-centered" id="add-todo" role="document">
                <div class="modal-content">
                    <div class="modal-header add-todo-header">
                        <h6 class="modal-title add-todo-title">Add New Todo</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="add-todo-form">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="todo-text" placeholder="Write your task">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-lg btn-primary">Add Task</button>
                                </div>
                            </form>
                        </div>
                        <!-- ends: .add-todo-form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .add-todo-modal -->
    </div>
@endsection
