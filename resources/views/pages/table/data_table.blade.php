@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">table</h4>
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
      <div class="row">
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                  Project List
               </div>
               <div class="card-body">
                  <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr class="userDatatable-header">
                                 <th>
                                    <span class="projectDatatable-title">project</span>
                                 </th>
                                 <th>
                                    <span class="projectDatatable-title">start date</span>
                                 </th>
                                 <th>
                                    <span class="projectDatatable-title">deadline</span>
                                 </th>
                                 <th>
                                    <span class="projectDatatable-title">Assigned To</span>
                                 </th>
                                 <th>
                                    <span class="projectDatatable-title">status</span>
                                 </th>
                                 <th>
                                    <span class="projectDatatable-title">completion</span>
                                 </th>
                                 <th>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Dashboard UI Project</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-primary">early</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Custom Software Development</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                                       </li>
                                       <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-secondary">on time</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Application UI Design</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                                       </li>
                                       <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-primary">early</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Website Builder</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                                       </li>
                                       <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-primary">early</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Component Library</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                                       </li>
                                       <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-danger">on hold</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Dashboard UI Project</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                                       </li>
                                       <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-warning">late</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Custom Software Development</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-success">complete</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="media-ui--completed ">
                                          <div class="user-group-progress-bar">
                                             <div class="progress-wrap d-flex align-items-center mb-0">
                                                <div class="progress">
                                                   <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="progress-icon"><span class="color-success" data-feather="check"></span></span>
                                             </div>
                                             <p class="color-light fs-12 mt-1 mb-0">15 / 15 tasks completed</p>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Application UI Design</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                                       </li>
                                       <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-primary">early</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Website Builder</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm6.png') }}" alt="author"></a>
                                       </li>
                                       <li class="d-flex align-items-center ml-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-primary">early</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Custom Software Development</h6>
                                          </a>
                                          <p class="pt-1 d-block mb-0">
                                             Web Design
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       26 Dec 2019
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Mar 2020
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="d-flex user-group-people__parent align-content-center">
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                       </li>
                                       <li>
                                          <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                       </li>
                                    </ul>
                                 </td>
                                 <td>
                                    <div class="d-inline-block">
                                       <span class="media-badge color-white bg-secondary">on time</span>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress d-flex align-items-center">
                                       <div class="user-group-progress-bar">
                                          <div class="progress-wrap d-flex align-items-center mb-0">
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                             <span class="progress-percentage">30%</span>
                                          </div>
                                          <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-progress text-right">
                                       <div class="dropdown  dropdown-click ">
                                          <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span data-feather=more-horizontal></span>
                                          </button>
                                          <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                             <a class="dropdown-item" href="#">Item One</a>
                                             <a class="dropdown-item" href="#">Item Two</a>
                                             <a class="dropdown-item" href="#">Item Three</a>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <!-- End: .table -->
                     </div>
                  </div>
                  <!-- End: .userDatatable -->
               </div>
            </div>
         </div>
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                  User List
               </div>
               <div class="card-body">
                  <div class="userDatatable global-shadow border-0 bg-white w-100">
                     <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                           <thead>
                              <tr class="userDatatable-header">
                                 <th>
                                    <div class="d-flex align-items-center">
                                       <div class="custom-checkbox  check-all">
                                          <input class="checkbox" type="checkbox" id="check-3">
                                          <label for="check-3">
                                          <span class="checkbox-text userDatatable-title">user</span>
                                          </label>
                                       </div>
                                    </div>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">emaill</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">company</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">position</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">join date</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">status</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title float-right">action</span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-12">
                                                   <label for="check-grp-12"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm6.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-13">
                                                   <label for="check-grp-13"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm1.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivete</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-14">
                                                   <label for="check-grp-14"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm2.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">blocked</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-4">
                                                   <label for="check-grp-4"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm3.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-5">
                                                   <label for="check-grp-5"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm4.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-6">
                                                   <label for="check-grp-6"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm5.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-7">
                                                   <label for="check-grp-7"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm6.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-8">
                                                   <label for="check-grp-8"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm1.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-9">
                                                   <label for="check-grp-9"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm2.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-10">
                                                   <label for="check-grp-10"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm3.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-11">
                                                   <label for="check-grp-11"></label>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{ asset('img/tm4.png') }}'); background-size: cover;"></a>
                                       </div>
                                       <div class="userDatatable-inline-title">
                                          <a href="#" class="text-dark fw-500">
                                             <h6>Kellie Marquot</h6>
                                          </a>
                                          <p class="d-block mb-0">
                                             San Francisco, CA
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       john-keller@gmail.com
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Business Development
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       Web Developer
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       January 20, 2020
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="#" class="view">
                                          <span data-feather="eye"></span></a>
                                       </li>
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
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                  Basic Usage
               </div>
               <div class="card-body p-0">
                  <div class="form-group mb-0 status-radio px-25 pt-25">
                     <div class="d-flex">
                        <div class="radio-horizontal-list d-flex flex-wrap">
                           <div class="radio-theme-default custom-radio  mr-20">
                              <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl1">
                              <label for="radio-hl1">
                              <span class="radio-text">Checkbox</span>
                              </label>
                           </div>
                           <div class="radio-theme-default custom-radio  mr-20">
                              <input class="radio" type="radio" name="radio-optional" value=0 id="radio-hl2">
                              <label for="radio-hl2">
                              <span class="radio-text">Radio</span>
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="table4 p-25 bg-white mb-30">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr class="userDatatable-header">
                                 <th>
                                    <div class="d-flex align-items-center">
                                       <div class="custom-checkbox  check-all">
                                          <input class="checkbox" type="checkbox" id="check-4">
                                          <label for="check-4">
                                          <span class="ml-20 userDatatable-title">Name</span>
                                          </label>
                                       </div>
                                    </div>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">Age</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">Address</span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-52">
                                                   <label for="check-grp-52"></label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="userDatatable-content">
                                          Mike
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       32
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       10 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-flex">
                                       <div class="userDatatable__imgWrapper d-flex align-items-center">
                                          <div class="checkbox-group-wrapper">
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-53">
                                                   <label for="check-grp-53"></label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="userDatatable-content">
                                          Jhon
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       42
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Downing Street
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                  Filter and sorter
               </div>
               <div class="card-body p-0">
                  <div class="table4 table5 p-25 bg-white">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr class="userDatatable-header">
                                 <th>
                                    <div class="userDatatable-title">
                                       Age
                                       <div class="d-flex justify-content-between align-items-center w-100">
                                          <span class="userDatatable-sort">
                                          <i class="fas fa-caret-down"></i>
                                          </span>
                                          <span class="userDatatable-filter">
                                          <i class="fas fa-filter"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="userDatatable-title">
                                       Age
                                       <div class="d-flex justify-content-between align-items-center w-100">
                                          <span class="userDatatable-sort">
                                          <i class="fas fa-sort-up up"></i>
                                          <i class="fas fa-caret-down down"></i>
                                          </span>
                                          <span class="userDatatable-filter">
                                          <i class="fas fa-filter"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="userDatatable-title">
                                       Address
                                       <div class="d-flex justify-content-between align-items-center w-100">
                                          <span class="userDatatable-sort">
                                          <i class="fas fa-sort-up up"></i>
                                          <i class="fas fa-caret-down down"></i>
                                          </span>
                                          <span class="userDatatable-filter">
                                          <i class="fas fa-filter"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Mike
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       32
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       10 Herry Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Jhon
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       2
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       34 Lolona Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Hulk
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       4
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Rigliah Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Percy Jacksion
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       24 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Donald
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       7
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Mac Jons
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       8
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Hery
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       15
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Jhon Bush
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       85 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Rabin
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       23
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Herry
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       28
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       12 Downing Street
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                  Pagination
               </div>
               <div class="card-body p-0">
                  <div class="table4 table5 p-25 bg-white">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr class="userDatatable-header">
                                 <th>
                                    <div class="userDatatable-title">
                                       Age
                                       <div class="d-flex justify-content-between align-items-center w-100">
                                          <span class="userDatatable-sort">
                                          <i class="fas fa-caret-down"></i>
                                          </span>
                                          <span class="userDatatable-filter">
                                          <i class="fas fa-filter"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="userDatatable-title">
                                       Age
                                       <div class="d-flex justify-content-between align-items-center w-100">
                                          <span class="userDatatable-sort">
                                          <i class="fas fa-sort-up up"></i>
                                          <i class="fas fa-caret-down down"></i>
                                          </span>
                                          <span class="userDatatable-filter">
                                          <i class="fas fa-filter"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="userDatatable-title">
                                       Address
                                       <div class="d-flex justify-content-between align-items-center w-100">
                                          <span class="userDatatable-sort">
                                          <i class="fas fa-sort-up up"></i>
                                          <i class="fas fa-caret-down down"></i>
                                          </span>
                                          <span class="userDatatable-filter">
                                          <i class="fas fa-filter"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Mike
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       32
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       10 Herry Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Jhon
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       2
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       34 Lolona Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Hulk
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       4
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Rigliah Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Percy Jacksion
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       24 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Donald
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       7
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Mac Jons
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       8
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Hery
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       15
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Jhon Bush
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       18
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       85 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Rabin
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       23
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       5 Downing Street
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="userDatatable-content">
                                       Herry
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       28
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       12 Downing Street
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="d-flex justify-content-end mt-30">
                        <div class="pagination-total-text">1-3 of 8 items</div>
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
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                  Task list
               </div>
               <div class="card-body p-0">
                  <div class="card-body px-0 pt-15 pb-15">
                     <div class="project-task table-responsive">
                        <table class="table table-borderless">
                           <tbody>
                              <tr class="project-task-list ptl--hover draggable " draggable="true">
                                 <td>
                                    <div class="checkbox-group d-flex">
                                       <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                          <input class="checkbox" type="checkbox" id="check-grp-1" checked>
                                          <label for="check-grp-1" class="fs-14 color-light strikethrough">
                                          Add images to the product
                                          gallery
                                          </label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-task-list__right">
                                       <ul class="d-flex align-content-center">
                                          <li>
                                             <span class="fs-12 text-light time-completed">09:30
                                             AM</span>
                                          </li>
                                          <li><img src="{{ asset('img/tm1.png') }}" alt="img" class="wh-30"></li>
                                          <li>
                                             <a href="#" class="plus">
                                             <span data-feather="move"></span></a>
                                          </li>
                                          <li>
                                             <div class="dropdown dropleft">
                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">view</a>
                                                   <a class="dropdown-item" href="#">edit</a>
                                                   <a class="dropdown-item" href="#">leave</a>
                                                   <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="project-task-list ptl--hover draggable " draggable="true">
                                 <td>
                                    <div class="checkbox-group d-flex">
                                       <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                          <input class="checkbox" type="checkbox" id="check-grp-2" checked>
                                          <label for="check-grp-2" class="fs-14 color-light strikethrough">
                                          Update user profile page
                                          </label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-task-list__right">
                                       <ul class="d-flex align-content-center">
                                          <li>
                                             <span class="fs-12 text-light time-completed">09:30
                                             AM</span>
                                          </li>
                                          <li><img src="{{ asset('img/tm2.png') }}" alt="img" class="wh-30"></li>
                                          <li>
                                             <a href="#" class="plus">
                                             <span data-feather="move"></span></a>
                                          </li>
                                          <li>
                                             <div class="dropdown dropleft">
                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">view</a>
                                                   <a class="dropdown-item" href="#">edit</a>
                                                   <a class="dropdown-item" href="#">leave</a>
                                                   <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="project-task-list ptl--hover draggable " draggable="true">
                                 <td>
                                    <div class="checkbox-group d-flex">
                                       <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                          <input class="checkbox" type="checkbox" id="check-grp-task3">
                                          <label for="check-grp-task3" class="fs-14 color-light strikethrough">
                                          Support tickets list doesn&#39;t support commas
                                          </label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-task-list__right">
                                       <ul class="d-flex align-content-center">
                                          <li>
                                             <span class="fs-12 text-light time-completed">8:30
                                             AM</span>
                                          </li>
                                          <li><img src="{{ asset('img/tm3.png') }}" alt="img" class="wh-30"></li>
                                          <li>
                                             <a href="#" class="plus">
                                             <span data-feather="move"></span></a>
                                          </li>
                                          <li>
                                             <div class="dropdown dropleft">
                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">view</a>
                                                   <a class="dropdown-item" href="#">edit</a>
                                                   <a class="dropdown-item" href="#">leave</a>
                                                   <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="project-task-list ptl--hover draggable " draggable="true">
                                 <td>
                                    <div class="checkbox-group d-flex">
                                       <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                          <input class="checkbox" type="checkbox" id="check-grp-task4">
                                          <label for="check-grp-task4" class="fs-14 color-light strikethrough">
                                          Changing title text on single locations pages
                                          </label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-task-list__right">
                                       <ul class="d-flex align-content-center">
                                          <li>
                                             <span class="fs-12 text-light time-completed">10:00
                                             AM</span>
                                          </li>
                                          <li><img src="{{ asset('img/tm4.png') }}" alt="img" class="wh-30"></li>
                                          <li>
                                             <a href="#" class="plus">
                                             <span data-feather="move"></span></a>
                                          </li>
                                          <li>
                                             <div class="dropdown dropleft">
                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">view</a>
                                                   <a class="dropdown-item" href="#">edit</a>
                                                   <a class="dropdown-item" href="#">leave</a>
                                                   <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="project-task-list ptl--hover draggable " draggable="true">
                                 <td>
                                    <div class="checkbox-group d-flex">
                                       <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                          <input class="checkbox" type="checkbox" id="check-grp-task5">
                                          <label for="check-grp-task5" class="fs-14 color-light strikethrough">
                                          Registration Confirmation! Email is missing some information
                                          </label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-task-list__right">
                                       <ul class="d-flex align-content-center">
                                          <li>
                                             <span class="fs-12 text-light time-completed">8:30
                                             PM</span>
                                          </li>
                                          <li><img src="{{ asset('img/tm5.png') }}" alt="img" class="wh-30"></li>
                                          <li>
                                             <a href="#" class="plus">
                                             <span data-feather="move"></span></a>
                                          </li>
                                          <li>
                                             <div class="dropdown dropleft">
                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">view</a>
                                                   <a class="dropdown-item" href="#">edit</a>
                                                   <a class="dropdown-item" href="#">leave</a>
                                                   <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="project-task-list ptl--hover draggable " draggable="true">
                                 <td>
                                    <div class="checkbox-group d-flex">
                                       <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                          <input class="checkbox" type="checkbox" id="check-grp-task6">
                                          <label for="check-grp-task6" class="fs-14 color-light strikethrough">
                                          Login page not redirecting wrong
                                          </label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-task-list__right">
                                       <ul class="d-flex align-content-center">
                                          <li>
                                             <span class="fs-12 text-light time-completed">Yesterday</span>
                                          </li>
                                          <li><img src="{{ asset('img/tm5.png') }}" alt="img" class="wh-30"></li>
                                          <li>
                                             <a href="#" class="plus">
                                             <span data-feather="move"></span></a>
                                          </li>
                                          <li>
                                             <div class="dropdown dropleft">
                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">view</a>
                                                   <a class="dropdown-item" href="#">edit</a>
                                                   <a class="dropdown-item" href="#">leave</a>
                                                   <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="project-task-list ptl--hover draggable " draggable="true">
                                 <td>
                                    <div class="checkbox-group d-flex">
                                       <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                          <input class="checkbox" type="checkbox" id="check-grp-task7">
                                          <label for="check-grp-task7" class="fs-14 color-light strikethrough">
                                          Custom Field for Registration
                                          </label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="project-task-list__right">
                                       <ul class="d-flex align-content-center">
                                          <li>
                                             <span class="fs-12 text-light time-completed">Wed</span>
                                          </li>
                                          <li><img src="{{ asset('img/tm5.png') }}" alt="img" class="wh-30"></li>
                                          <li>
                                             <a href="#" class="plus">
                                             <span data-feather="move"></span></a>
                                          </li>
                                          <li>
                                             <div class="dropdown dropleft">
                                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                                </button>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#">view</a>
                                                   <a class="dropdown-item" href="#">edit</a>
                                                   <a class="dropdown-item" href="#">leave</a>
                                                   <a class="dropdown-item" href="#">delete</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="task-list-btn px-25 my-10">
                           <button class="text-primary">
                           <span data-feather="plus"></span>Add New
                           Task</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
