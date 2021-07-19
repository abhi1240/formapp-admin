@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Drag &amp; Drop</h4>
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
                    <div class="card mb-25">
                        <div class="card-header">
                            <h6>Drag & Drop</h6>
                        </div>
                        <div class="card-body pt-0 pb-0">
                            <div class="drag-drop-wrap">
                                <div class="drag-drop table-responsive-lg bg-white w-100 mb-30">
                                    <table class="table mb-0 table-basic">
                                        <tbody>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm6.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm1.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm2.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm3.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm4.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm5.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm6.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm7.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="draggable" draggable="true">
                                            <td>
                                                <div class="item d-flex align-items-center">
                                                    <span data-feather="move"></span>
                                                    <div class="item-info d-flex align-items-center">
                                                        <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('public/img/tm3.png') }}'); background-size: cover;"></a>
                                                        <div class="item_title">
                                                            <h6>
                                                                <a href="#">Kellie Marquot</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                Marquot Store
                                            </td>
                                            <td>
                                                347
                                            </td>
                                            <td>
                                                $84,248.66
                                            </td>
                                            <td>
                                                <span class="date">January 20, 2020</span>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <a href="#">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <a href="#">
                                                        <span data-feather="trash-2"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: card -->
                </div>
                <!-- ends: col-12 -->
            </div>
        </div>
    </div>
@endsection
