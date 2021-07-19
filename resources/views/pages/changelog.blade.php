@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">Changelog</h4>
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
         <div class="col-12 changelog-19 d-block">
            <div class="changelog mb-30">
               <div class="card">
                  <div class="card-header">
                     <div class="changelog__title">
                        <span class="v-num">Version 1.1.0</span>
                        <span class="sign">-</span>
                        <span class="rl-date">Feb 10, 2021</span>
                     </div>
                     <div class="changelog__titleExtra"></div>
                  </div>
                  <div class="card-body p-30">
                     <div class="version-list">
                        <div class="version-list__single">
                           <div class="version-list__top">
                              <span class="badge badge-round badge-success badge-lg">New</span>
                           </div>
                           <ul class="version-success">
                              <li>CRM Dashboard</li>
                              <li>Sales Performance Dashboard</li>
                              <li>Layouts Module</li>
                              <li>Changelog Page</li>
                              <li>Users Grid</li>
                              <li>Add User</li>
                              <li>Contact Create</li>
                              <li>Kanban Board App</li>
                              <li>Import & Export App</li>
                              <li>Laravel CRUD</li>
                              <li>Grid</li>
                              <li>Basic Table</li>
                              <li>Data Table</li>
                              <li>Widgets Page</li>
                              <li>Wizard Page</li>
                              <li>Banners</li>
                              <li>Testimonials</li>
                              <li>Blank Page</li>
                              <li>Knowledgebase Pages</li>
                              <li>Support Center Pages</li>
                              <li>FileManager app</li>
                              <li>Coming Soon Page</li>
                              <li>Cards</li>
                              <li>Menu Item Rearrange</li>
                              <li>Update note app with drag & drop</li>
                              <li>New 8 card styles</li>
                           </ul>
                        </div>
                        <div class="version-list__single">
                           <div class="version-list__top">
                              <span class="badge badge-round badge-info badge-lg">fixed</span>
                           </div>
                           <ul class="version-info">
                              <li>Preloader issues</li>
                              <li>Responsive issues</li>
                              <li>Other css issues</li>
                           </ul>
                        </div>
                        <div class="version-list__single">
                           <div class="version-list__top">
                              <span class="badge badge-round badge-primary badge-lg">updated</span>
                           </div>
                           <ul class="version-primary">
                              <li>Menu Item Rearranged</li>
                              <li>Improved Kanban board</li>
                           </ul>
                        </div>
                     </div>
                     <div class="changelog__according">
                        <div class="changelog__accordingWrapper">
                           <div id="accordion">
                              <div class="card">
                                 <div class="card-header w-100 px-sm-30 px-15" id="headingsix">
                                    <div role="button" class="w-100 changelog__accordingCollapsed collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                                       <div class="changelog__accordingTitle d-flex justify-content-between w-100">
                                          <div class="v-num">1.0.0<span class="v-arrow">-</span> <span class="rl-date">Jan 20, 2021</span></div>
                                          <div class="changelog__accordingArrow">
                                             <span data-feather="chevron-right"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                                    <div class="card-body">
                                       <div class="version-list">
                                          <div class="version-list__single">
                                             <ul class="version-success">
                                                <li>Initial Release</li>
                                             </ul>
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
         <div class="col-12 changelog-5 d-block">
            <div class="changeLog-history mb-30">
               <div class="card">
                  <div class="card-header py-20 px-20">
                     <div class="changelog-history__title text-uppercase">
                        CHANGELOG
                     </div>
                     <div class="changelog-history__titleExtra">
                     </div>
                  </div>
                  <div class="card-body p-25">
                     <h4 class="history-title">VERSION HISTORY</h4>
                     <ul class="v-history-list">
                        <li><span class="version-name">Version 1.1.0</span><span class="version-date">Feb 10,
                           2021</span>
                        </li>
                        <li><span class="version-name">Version 1.0.0</span><span class="version-date">Jan 20,
                           2021</span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection