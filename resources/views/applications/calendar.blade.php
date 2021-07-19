@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="atbd-page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">calendar</h4>
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
         <div class="row calendar-grid justify-content-center">
            <div class="col-xxl-3 col-xl-5 col-md-6 col-sm-8">
               <div class="atbd-calendar-left">
                  <button class="btn btn-secondary btn-lg btn-create-event" data-toggle="modal" data-target="#c-event-modal">
                  <span data-feather="plus"></span>Create New Event</button>
                  <div class="card card-md mb-4">
                     <div class="card-body px-10">
                        <div class="date-picker">
                           <div class="date-picker__calendar"></div>
                           <!-- ends: .date-picker__calendar -->
                        </div>
                     </div>
                  </div>
                  <div class="card card-md mb-4">
                     <div class="card-body">
                        <div class="draggable-events" id="draggable-events">
                           <div class="draggable-events__top d-flex justify-content-between">
                              <h6>My Calendars</h6>
                              <a href="#">
                              <span data-feather="plus"></span></a>
                           </div>
                           <ul class="draggable-event-list">
                              <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                 <span class="badge-dot badge-primary"></span>
                                 <span class="event-text">Family Events</span>
                              </li>
                              <!-- ends: .draggable-event-list__single -->
                              <li class="draggable-event-list__single d-flex align-items-center" data-class="secondary">
                                 <span class="badge-dot badge-secondary"></span>
                                 <span class="event-text">Product Launch</span>
                              </li>
                              <!-- ends: .draggable-event-list__single -->
                              <li class="draggable-event-list__single d-flex align-items-center" data-class="success">
                                 <span class="badge-dot badge-success"></span>
                                 <span class="event-text">Team Meeting</span>
                              </li>
                              <!-- ends: .draggable-event-list__single -->
                              <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                 <span class="badge-dot badge-primary"></span>
                                 <span class="event-text">UI/UX Tasks</span>
                              </li>
                              <!-- ends: .draggable-event-list__single -->
                              <li class="draggable-event-list__single d-flex align-items-center" data-class="warning">
                                 <span class="badge-dot badge-warning"></span>
                                 <span class="event-text">Project Update</span>
                              </li>
                              <!-- ends: .draggable-event-list__single -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- ends: .card -->
               </div>
            </div>
            <!-- ends: .col-lg-3 -->
            <div class="col-xxl-9 col-xl-7">
               <div class="card card-default card-md mb-4">
                  <div class="card-body">
                     <div id='full-calendar'></div>
                  </div>
               </div>
               <!-- ends: .card -->
            </div>
         </div>
      </div>
   </div>
   <!-- ends: .atbd-page-content -->
   <div class="c-event-modal modal fade" id="c-event-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md c-event-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title">Create Event</h6>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span data-feather="x"></span></button>
            </div>
            <div class="modal-body">
               <div class="c-event-form">
                  <form action="#">
                     <div class="e-form-row d-flex">
                        <div class="e-form-row__left">
                           <label>Title</label>
                        </div>
                        <div class="e-form-row__right">
                           <input type="text" name="e-title" placeholder="Weekly report meeting" class="form-control form-control-md">
                        </div>
                     </div>
                     <!-- ends: .e-form-row -->
                     <div class="e-form-row d-flex">
                        <div class="e-form-row__left">
                           <label>Event type</label>
                        </div>
                        <div class="e-form-row__right">
                           <div class="radio-horizontal-list d-flex flex-wrap">
                              <div class="radio-theme-default custom-radio ">
                                 <input class="radio" type="radio" name="radio-e-type" value="01" id="radio-1">
                                 <label for="radio-1">
                                 <span class="radio-text">Event</span>
                                 </label>
                              </div>
                              <div class="radio-theme-default custom-radio ">
                                 <input class="radio" type="radio" name="radio-e-type" value="02" id="radio-2">
                                 <label for="radio-2">
                                 <span class="radio-text">Remainder</span>
                                 </label>
                              </div>
                              <div class="radio-theme-default custom-radio ">
                                 <input class="radio" type="radio" name="radio-e-type" value="03" id="radio-3">
                                 <label for="radio-3">
                                 <span class="radio-text">Task</span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- ends: .e-form-row -->
                     <div class="e-form-row d-flex">
                        <div class="e-form-row__left">
                           <label>Start</label>
                        </div>
                        <div class="e-form-row__right d-flex">
                           <div class="input-container icon-left position-relative mr-2">
                              <span class="input-icon icon-left">
                              <span data-feather="calendar"></span></span>
                              <input type="text" class="form-control form-control-md" name="s-date" placeholder="Select Date">
                           </div>
                           <div class="input-container icon-left position-relative">
                              <span class="input-icon icon-left">
                              <span data-feather="clock"></span></span>
                              <input type="text" class="form-control form-control-md" name="s-time" placeholder="Select Time">
                           </div>
                        </div>
                     </div>
                     <!-- ends: .e-form-row -->
                     <div class="e-form-row d-flex">
                        <div class="e-form-row__left">
                           <label>End</label>
                        </div>
                        <div class="e-form-row__right d-flex">
                           <div class="input-container icon-left position-relative mr-2">
                              <span class="input-icon icon-left">
                              <span data-feather="calendar"></span></span>
                              <input type="text" class="form-control form-control-md" name="e-date" placeholder="Select Date">
                           </div>
                           <div class="input-container icon-left position-relative">
                              <span class="input-icon icon-left">
                              <span data-feather="clock"></span></span>
                              <input type="text" class="form-control form-control-md" name="e-time" placeholder="Select Time">
                           </div>
                        </div>
                     </div>
                     <!-- ends: .e-form-row -->
                     <div class="e-form-row d-flex">
                        <div class="e-form-row__left">
                           <label>Description</label>
                        </div>
                        <div class="e-form-row__right">
                           <textarea name="e-description" class="form-control form-control-md" placeholder="Add Description"></textarea>
                        </div>
                     </div>
                     <!-- ends: .e-form-row -->
                  </form>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-white btn-sm" data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-primary btn-sm">Save</button>
            </div>
         </div>
      </div>
   </div>
   <!-- ends: .c-event-modal -->
   <div class="e-info-modal modal fade" id="e-info-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm e-info-dialog modal-dialog-centered" id="c-event" role="document">
         <div class="modal-content">
            <div class="modal-header e-info-header bg-primary">
               <h6 class="modal-title e-info-title">Project Update</h6>
               <div class="e-info-action">
                  <button class="btn-icon">
                  <span data-feather="edit"></span></button>
                  <button class="btn-icon">
                  <span data-feather="mail"></span></button>
                  <button class="btn-icon">
                  <span data-feather="trash-2"></span></button>
                  <button type="button" class="btn-icon btn-close" data-dismiss="modal" aria-label="Close">
                  <span data-feather="x"></span></button>
               </div>
            </div>
            <div class="modal-body">
               <ul class="e-info-list">
                  <li>
                     <span data-feather="calendar"></span>
                     <span class="list-line">
                     <span class="list-label">Date :</span>
                     <span class="list-meta"> Thursday, January 23</span>
                     </span>
                  </li>
                  <li>
                     <span data-feather="clock"></span>
                     <span class="list-line">
                     <span class="list-label">Time :</span>
                     <span class="list-meta"> 23⋅5:00 – 6:00 am</span>
                     </span>
                  </li>
                  <li>
                     <span data-feather="align-left"></span>
                     <span class="list-line">
                     <span class="list-text"> Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam consetetur sadipscing elitr sed diam</span>
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- ends: .e-info-modal -->
</div>
@endsection