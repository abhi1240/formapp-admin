@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">Form Layouts</h4>
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
         <div class="col-lg-6">
            <div class="card card-horizontal card-default card-md mb-4">
               <div class="card-header">
                  <h6>Horizontal Form</h6>
               </div>
               <div class="card-body py-md-30">
                  <div class="horizontal-form">
                     <form action="#">
                        <div class="form-group row mb-25">
                           <div class="col-sm-3 d-flex aling-items-center">
                              <label for="inputName" class=" col-form-label color-dark fs-14 fw-500 align-center">Name</label>
                           </div>
                           <div class="col-sm-9">
                              <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="inputName" placeholder="Duran Clayton">
                           </div>
                        </div>
                        <div class="form-group row mb-25">
                           <div class="col-sm-3 d-flex aling-items-center">
                              <label for="inputPassword" class="col-form-label  color-dark fs-14 fw-500 align-center">Email
                              Address</label>
                           </div>
                           <div class="col-sm-9">
                              <input type="email" class="form-control  ih-medium ip-gray radius-xs b-light px-15" id="inputEmail" placeholder="username@email.com">
                           </div>
                        </div>
                        <div class="form-group row mb-0">
                           <div class="col-sm-3">
                              <label for="inputPassword" class=" col-form-label  color-dark fs-14 fw-500 align-center">Password</label>
                           </div>
                           <div class="col-sm-9">
                              <input type="password" class="form-control  ih-medium ip-gray radius-xs b-light px-15" id="inputPassword">
                              <div class="layout-button mt-25">
                                 <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                 <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
         <div class="col-lg-6">
            <div class="card card-horizontal card-default card-md mb-4">
               <div class="card-header">
                  <h6>Horizontal Form With Icons</h6>
               </div>
               <div class="card-body py-md-30">
                  <div class="horizontal-form">
                     <form action="#">
                        <div class="form-group row mb-25">
                           <div class="col-sm-3 d-flex aling-items-center">
                              <label for="inputNameIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Name</label>
                           </div>
                           <div class="col-sm-9">
                              <div class="with-icon">
                                 <span class="la-user lar color-gray"></span>
                                 <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputNameIcon" placeholder="Duran Clayton">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row mb-25">
                           <div class="col-sm-3 d-flex aling-items-center">
                              <label for="inputEmailIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Email
                              Address</label>
                           </div>
                           <div class="col-sm-9">
                              <div class="with-icon">
                                 <span class="lar la-envelope color-gray"></span>
                                 <input type="email" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputEmailIcon" placeholder="username@email.com">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row mb-0">
                           <div class="col-sm-3">
                              <label for="inputPasswordIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Password</label>
                           </div>
                           <div class="col-sm-9">
                              <div class="with-icon">
                                 <span class="las la-lock color-gray"></span>
                                 <input type="password" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputPasswordIcon">
                              </div>
                              <div class="layout-button mt-25">
                                 <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                 <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
         <div class="col-lg-6">
            <div class="card card-Vertical card-default card-md mb-4">
               <div class="card-header">
                  <h6>Vertical Form</h6>
               </div>
               <div class="card-body pb-md-30">
                  <div class="Vertical-form">
                     <form action="#">
                        <div class="form-group">
                           <label for="formGroupExampleInput" class="color-dark fs-14 fw-500 align-center">Name</label>
                           <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="formGroupExampleInput" placeholder="Duran Clayton">
                        </div>
                        <div class="form-group">
                           <label for="formGroupExampleInput2" class="color-dark fs-14 fw-500 align-center">Email Address</label>
                           <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="formGroupExampleInput2" placeholder="username@email.com">
                        </div>
                        <div class="form-group">
                           <label for="formGroupExampleInput3" class="color-dark fs-14 fw-500 align-center">Password</label>
                           <input type="password" class="form-control ih-medium ip-gray radius-xs b-light px-15" id="formGroupExampleInput3">
                        </div>
                        <div class="layout-button mt-25">
                           <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                           <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
         <div class="col-lg-6">
            <div class="card card-Vertical card-default card-md mb-4">
               <div class="card-header">
                  <h6>Vertical Form With Icon</h6>
               </div>
               <div class="card-body pb-md-30">
                  <div class="Vertical-form">
                     <form action="#">
                        <div class="form-group">
                           <label for="formGroupExampleInput4" class=" color-dark fs-14 fw-500 align-center">Name</label>
                           <div class="with-icon">
                              <span class="la-user lar"></span>
                              <input type="text" class="form-control ih-medium ip-gray radius-xs b-light" id="formGroupExampleInput4" placeholder="Duran Clayton">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="formGroupExampleInput5" class=" color-dark fs-14 fw-500 align-center">Email Address</label>
                           <div class="with-icon">
                              <span class="lar la-envelope"></span>
                              <input type="email" class="form-control ih-medium ip-gray radius-xs b-light" id="formGroupExampleInput5" placeholder="username@email.com">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="formGroupExampleInput6" class=" color-dark fs-14 fw-500 align-center">Password</label>
                           <div class="with-icon">
                              <span class="las la-lock"></span>
                              <input type="password" class="form-control ih-medium ip-gray radius-xs b-light" id="formGroupExampleInput6">
                           </div>
                        </div>
                        <div class="layout-button mt-25">
                           <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                           <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
         <div class="col-lg-12">
            <div class="card card-Vertical card-default card-md mb-4">
               <div class="card-header">
                  <h6>Multiple Column </h6>
               </div>
               <div class="card-body py-md-30">
                  <form>
                     <div class="row">
                        <div class="col-md-6 mb-25">
                           <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="First Name">
                        </div>
                        <div class="col-md-6 mb-25">
                           <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Last Name">
                        </div>
                        <div class="col-md-6 mb-25">
                           <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="City">
                        </div>
                        <div class="col-md-6 mb-25">
                           <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Country">
                        </div>
                        <div class="col-md-6 mb-25">
                           <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Company">
                        </div>
                        <div class="col-md-6 mb-25">
                           <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                           <div class="layout-button mt-0">
                              <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                              <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <!-- ends: .card -->
         </div>
      </div>
   </div>
</div>
@endsection