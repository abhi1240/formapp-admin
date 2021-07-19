@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main user-member justify-content-sm-between ">
               <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                  <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                     <h4 class="text-capitalize fw-500 breadcrumb-title">projects</h4>
                     <span class="sub-title ml-sm-25 pl-sm-25">12 Running projects</span>
                  </div>
               </div>
               <div class="action-btn">
                  <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                  <i class="las la-plus fs-16"></i>Add New Member</a>
                  <!-- Modal -->
                  <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                           <div class="modal-header">
                              <h6 class="modal-title fw-500" id="staticBackdropLabel">Create project</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span data-feather="x"></span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="new-member-modal">
                                 <form>
                                    <div class="form-group mb-20">
                                       <input type="text" class="form-control" placeholder="Duran Clayton">
                                    </div>
                                    <div class="form-group mb-20">
                                       <div class="category-member">
                                          <select class="js-example-basic-single js-states form-control" id="category-member">
                                             <option value="JAN">1</option>
                                             <option value="FBR">2</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group mb-20">
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Project description"></textarea>
                                    </div>
                                    <div class="form-group textarea-group">
                                       <label class="mb-15">status</label>
                                       <div class="d-flex">
                                          <div class="project-task-list__left d-flex align-items-center">
                                             <div class="checkbox-group d-flex mr-50 pr-10">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-1" checked>
                                                   <label for="check-grp-1" class="fs-14 color-light strikethrough">
                                                   status
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="checkbox-group d-flex mr-50 pr-10">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-2">
                                                   <label for="check-grp-2" class="fs-14 color-light strikethrough">
                                                   Deactivated
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-3">
                                                   <label for="check-grp-3" class="fs-14 color-light strikethrough">
                                                   bloked
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mb-25">
                                       <div class="form-group mb-10">
                                          <label for="name47">project member</label>
                                          <input type="text" class="form-control" id="name47" placeholder="Search members">
                                       </div>
                                       <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
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
                                       </ul>
                                    </div>
                                    <div class="d-flex new-member-calendar">
                                       <div class="form-group w-100 mr-sm-15 form-group-calender">
                                          <label for="datepicker">start Date</label>
                                          <div class="position-relative">
                                             <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy">
                                             <a href="#">
                                             <span data-feather="calendar"></span></a>
                                          </div>
                                       </div>
                                       <div class="form-group w-100 form-group-calender">
                                          <label for="datepicker2">End Date</label>
                                          <div class="position-relative">
                                             <input type="text" class="form-control" id="datepicker2" placeholder="mm/dd/yyyy">
                                             <a href="#">
                                             <span data-feather="calendar"></span></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="button-group d-flex pt-25">
                                       <button class="btn btn-primary btn-default btn-squared text-capitalize">add new project
                                       </button>
                                       <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Modal -->
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="project-top-wrapper project-top-progress d-flex justify-content-between flex-wrap">
               <div class="project-top-left d-flex flex-wrap justify-content-lg-between justify-content-center mt-n10">
                  <div class="project-tap global-shadow order-lg-1 order-2 my-10">
                     <ul class="nav px-1" id="ap-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="ap-overview-tab" data-toggle="pill" href="#ap-overview" role="tab" aria-controls="ap-overview" aria-selected="true">all projects</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="timeline-tab" data-toggle="pill" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">in progress</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="activity-tab" data-toggle="pill" href="#activity" role="tab" aria-controls="activity" aria-selected="false">completed</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="late-tab" data-toggle="pill" href="#late" role="tab" aria-controls="late" aria-selected="false">late</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="early-tab" data-toggle="pill" href="#early" role="tab" aria-controls="early" aria-selected="false">early</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="draft-tab" data-toggle="pill" href="#draft" role="tab" aria-controls="draft" aria-selected="false">draft</a>
                        </li>
                     </ul>
                  </div>
                  <div class="project-search project-search--height global-shadow order-md-2 order-1 ml-md-20 my-10">
                     <form action="/" class="d-flex align-items-center user-member__form">
                        <span data-feather="search"></span>
                        <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                     </form>
                  </div>
               </div>
               <!-- End: .project-top-left -->
               <div class="project-top-right d-flex flex-wrap">
                  <div class="project-category">
                     <div class="d-flex align-items-center">
                        <p class="mb-0 mr-10 fs-14 color-light">sort by:</p>
                        <div class="project-category__select">
                           <select class="js-example-basic-single js-states form-control" id="event-category">
                              <option value="all" selected>project category</option>
                              <option value="JAN">event</option>
                              <option value="FBR">Venues</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <!-- End: .project-category -->
                  <div class="project-icon-selected">
                     <div class="listing-social-link pb-lg-0 pb-xs-2">
                        <div class="icon-list-social d-flex">
                           <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center ml-xl-20 mr-20 " href="projects.html"><span data-feather="grid"></span></a>
                           <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center  active" href="#"><span data-feather="list"></span></a>
                        </div>
                     </div>
                  </div>
                  <!-- End: .project-icon-selected -->
               </div>
               <!-- End: .project-top-right -->
            </div>
            <!-- End: .project-top-wrapper -->
         </div>
         <!-- End: .col -->
      </div>
      <!-- Tab Menu End -->
      <div class="projects-tab-content">
         <div class="tab-content mt-25" id="ap-tabContent">
            <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
               <div class="row">
                  <div class="userDatatable projectDatatable project-table global-shadow border p-30 bg-white radius-xl w-100 mx-15">
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
            <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
               <div class="row">
                  <div class="userDatatable projectDatatable project-table  global-shadow border p-30 bg-white radius-xl w-100 mx-15">
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
                        </tbody>
                     </table>
                  </div>
                  <!-- End: .userDatatable-->
               </div>
            </div>
            <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
               <div class="row">
                  <div class="userDatatable projectDatatable project-table  global-shadow border p-30 bg-white radius-xl w-100 mx-15">
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
                        </tbody>
                     </table>
                  </div>
                  <!-- End: .userDatatable -->
               </div>
            </div>
            <div class="tab-pane fade" id="late" role="tabpanel" aria-labelledby="late-tab">
               <div class="row">
                  <div class="userDatatable projectDatatable project-table  global-shadow border p-30 bg-white radius-xl w-100 mx-15">
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
                        </tbody>
                     </table>
                  </div>
                  <!-- End: .userDatatable -->
               </div>
            </div>
            <div class="tab-pane fade" id="early" role="tabpanel" aria-labelledby="early-tab">
               <div class="row">
                  <div class="userDatatable projectDatatable project-table  global-shadow border p-30 bg-white radius-xl w-100 mx-15">
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
                        </tbody>
                     </table>
                  </div>
                  <!-- End: .userDatatable -->
               </div>
            </div>
            <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab">
               <div class="row">
                  <div class="userDatatable projectDatatable project-table  global-shadow border p-30 bg-white radius-xl w-100 mx-15">
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
                  </div>
                  <!-- End: .userDatatable -->
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="d-flex  mt-30 mb-30">
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
      <!-- End: .project-tap-content -->
   </div>
</div>
@endsection