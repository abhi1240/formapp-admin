@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="atbd-page-content">
      <div class="container-fluid">
         <div class="fileM-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb-main">
                     <h4 class="text-capitalize breadcrumb-title">File manager</h4>
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
               <div class="col-lg-12">
                  <div class="fileM-contents">
                     <div class="row">
                        <div class=" col-20 col-lg-3 col-sm-4">
                           <div class="fileM-sidebar-wrapper mb-30">
                              <div class="fileM-sidebar">
                                 <div class="card border-0 shadow-none">
                                    <div class="card-body px-15 pt-30">
                                       <div class="px-xl-3">
                                          <div class="fileM-action__right">
                                             <div class="dropdown dropleft content-center d-flex">
                                                <a href="#" class="btn btn-primary btn-default btn-rounded content-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="plus"></span>
                                                Add Files</a>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#staticBackdrop1"><span data-feather="folder"></span>Create folder</a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#staticBackdrop2"><span data-feather="folder"></span>File Upload </a>
                                                   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#staticBackdrop3"><span data-feather="folder"></span>Folder Upload</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Modal -->
                                       <div class="modal fade fileM-Modal-overlay" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h6 class="modal-title fw-500" id="staticBackdrop1Label">Create File</h6>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true" data-feather="x"></span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form>
                                                      <div class="form-group mb-20">
                                                         <input type="text" class="form-control" placeholder="File name">
                                                      </div>
                                                   </form>
                                                </div>
                                                <div class="modal-footer m-n1">
                                                   <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-dismiss="modal">Cancel</button>
                                                   <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize">Create</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Modal -->
                                       <div class="modal fade fileM-Modal-overlay" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h6 class="modal-title fw-500" id="staticBackdrop2Label">File Upload File</h6>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true" data-feather="x"></span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form>
                                                      <div class="form-group mb-20">
                                                         <input type="text" class="form-control" placeholder="File name">
                                                      </div>
                                                   </form>
                                                </div>
                                                <div class="modal-footer m-n1">
                                                   <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-dismiss="modal">Cancel</button>
                                                   <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize">Create</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Modal -->
                                       <div class="modal fade fileM-Modal-overlay" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop3Label" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h6 class="modal-title fw-500" id="staticBackdrop3Label">Folder Upload</h6>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true" data-feather="x"></span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form>
                                                      <div class="form-group mb-20">
                                                         <input type="text" class="form-control" placeholder="Folder name">
                                                      </div>
                                                   </form>
                                                </div>
                                                <div class="modal-footer m-n1">
                                                   <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-dismiss="modal">Cancel</button>
                                                   <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize">Create</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="fileM-types">
                                          <div class="sidebar__menu-group">
                                             <ul class="sidebar_nav">
                                                <li class="menu-title">
                                                   <span>Files</span>
                                                </li>
                                                <li class="has-child">
                                                   <a href="#" class="">
                                                   <span data-feather="file" class="nav-icon"></span>
                                                   <span class="menu-text">My files</span>
                                                   <span class="toggle-icon"></span>
                                                   </a>
                                                   <ul>
                                                      <li class="has-child">
                                                         <a href="#" class="">
                                                         <span data-feather="folder" class="nav-icon"></span>
                                                         <span class="menu-text">My files</span>
                                                         <span class="toggle-icon"></span>
                                                         </a>
                                                         <ul class="nav flex-column mb-3" role="tablist">
                                                            <li>
                                                               <a class=" active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><span data-feather="folder" class="nav-icon"></span>Prototypes</a>
                                                            </li>
                                                            <li>
                                                               <a id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><span data-feather="folder" class="nav-icon"></span>Images</a>
                                                            </li>
                                                            <li>
                                                               <a id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><span data-feather="folder" class="nav-icon"></span>Illustrations</a>
                                                            </li>
                                                         </ul>
                                                      </li>
                                                      <li>
                                                         <a class="" href="#"><span data-feather="folder" class="nav-icon"></span>Prototypes</a>
                                                      </li>
                                                      <li>
                                                         <a class="" href="#"><span data-feather="folder" class="nav-icon"></span>Images</a>
                                                      </li>
                                                      <li>
                                                         <a class="" href="#"><span data-feather="folder" class="nav-icon"></span>Illustrations</a>
                                                      </li>
                                                   </ul>
                                                </li>
                                                <li>
                                                   <a href="#" class="">
                                                   <span data-feather="file" class="nav-icon"></span>
                                                   <span class="menu-text">My Computer</span>
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="fileM-progress">
                                          <div class="user-group-progress-bar">
                                             <p>Storage</p>
                                             <div class="progress-wrap d-flex align-items-center mb-0">
                                                <div class="progress">
                                                   <div class="progress-bar bg-success" role="progressbar" style="width:84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="progress-percentage">83%</span>
                                             </div>
                                             <span class="">9.5 GB of 15 GB used</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ends: .col-lg-2 -->
                        <div class="col-79 col-lg-9 col-sm-8">
                           <div class="fileM-grid-wrapper mb-30 ">
                              <div class="tab-content" id="pills-tabContent">
                                 <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="fileM-wrapper">
                                       <div class="fileM-top-search">
                                          <form action="/" class="d-flex align-items-center">
                                             <span data-feather="search"></span>
                                             <input class="form-control px-10 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                          </form>
                                          <div class="project-icon-selected">
                                             <div class="listing-social-link pb-lg-0 pb-xs-2">
                                                <div class="icon-list-social d-flex">
                                                   <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center ml-xl-20 mr-20  active" href="#">
                                                   <span data-feather="grid"></span></a>
                                                   <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center " href="file-manager-list.html">
                                                   <span data-feather="list"></span></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <h6 class="fileM-wrapper__title">Quick Access</h6>
                                       <div class="row">
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/pdf.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/psd.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="fileM-wrapper">
                                       <h6 class="fileM-wrapper__title">Recent files</h6>
                                       <div class="row">
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/pdf.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/psd.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/pdf.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/psd.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/pdf.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="fileM-wrapper">
                                       <div class="fileM-top-search">
                                          <form action="/" class="d-flex align-items-center">
                                             <span data-feather="search"></span>
                                             <input class="form-control px-10 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                          </form>
                                          <div class="project-icon-selected">
                                             <div class="listing-social-link pb-lg-0 pb-xs-2">
                                                <div class="icon-list-social d-flex">
                                                   <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center ml-xl-20 mr-20  active" href="#">
                                                   <span data-feather="grid"></span></a>
                                                   <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center " href="file-manager-list.html">
                                                   <span data-feather="list"></span></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <h6 class="fileM-wrapper__title">Images</h6>
                                       <div class="row">
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/pdf.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/psd.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="fileM-wrapper">
                                       <div class="fileM-top-search">
                                          <form action="/" class="d-flex align-items-center">
                                             <span data-feather="search"></span>
                                             <input class="form-control px-10 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                          </form>
                                          <div class="project-icon-selected">
                                             <div class="listing-social-link pb-lg-0 pb-xs-2">
                                                <div class="icon-list-social d-flex">
                                                   <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center ml-xl-20 mr-20  active" href="#">
                                                   <span data-feather="grid"></span></a>
                                                   <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center " href="file-manager-list.html">
                                                   <span data-feather="list"></span></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <h6 class="fileM-wrapper__title">Illustrations</h6>
                                       <div class="row">
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/pdf.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Product-guidelines.pdf </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/psd.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">admin-wireframe.psd </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xl-3 col-lg-4 col-sm-6">
                                             <div class="fileM-single mb-25">
                                                <div class="fileM-card ">
                                                   <div class="card border-0">
                                                      <div class="card-body pb-40 pt-45">
                                                         <div class="fileM-img">
                                                            <img class="wh-50" src="{{ asset('img/zip.png') }}" alt="">
                                                         </div>
                                                         <p class="fileM-excerpt">Main-admin-design.zip </p>
                                                         <div class="fileM-action">
                                                            <div class="fileM-action__right ">
                                                               <div class="dropdown dropleft position-absolute">
                                                                  <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <span data-feather="more-vertical"></span>
                                                                  </button>
                                                                  <div class="dropdown-menu">
                                                                     <a class="dropdown-item" href="#"><span data-feather="download"></span>Download</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="link-2"></span>Copy</a>
                                                                     <a class="dropdown-item" href="#"><span data-feather="trash-2"></span>Delete</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- ends: .col-lg-10 -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .col-lg-12 -->
            </div>
         </div>
      </div>
   </div>
   <!-- ends: .atbd-page-content -->
   <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabal" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
               <form action="/">
                  <div class="form-group mb-25">
                     <label for="text">Title</label>
                     <input type="text" class="form-control" placeholder="Note Title" id="text">
                  </div>
                  <div class="form-group mb-25">
                     <label for="textarea">Description</label>
                     <textarea id="textarea" class="form-control" placeholder="Note Description"></textarea>
                  </div>
                  <div class="form-group">
                     <label for="n-labels">Note Label</label>
                     <select class="form-control" id="n-labels">
                        <option>Social</option>
                        <option>Work</option>
                        <option>Personal</option>
                        <option>Important</option>
                     </select>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection