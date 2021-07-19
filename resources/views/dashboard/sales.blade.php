@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="crm sales">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-10">
               <div class="row ">
                  <div class="col-lg-12">
                     <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Sales Performance</h4>
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
               <!-- ends: .row -->
               <div class="row">
                  <div class="col-xxl-4">
                     <div class="row">
                        <div class="col-xxl-12 col-md-6">
                           <!-- Card 2 End  -->
                           <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                              <div>
                                 <div class="overview-content overview-content3">
                                    <div class="d-flex">
                                       <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-primary">
                                          <img src="{{ asset('img/svg/customer.svg') }}" alt="img" class="svg">
                                       </div>
                                       <div>
                                          <h2>7,461</h2>
                                          <p class="mb-3 mt-1">New Customer</p>
                                          <div class="ap-po-details-time">
                                             <span class="color-success"><i class="las la-arrow-up"></i>
                                             <strong>25%</strong></span>
                                             <small>Since last week</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Card 2 End  -->
                        </div>
                        <div class="col-xxl-12 col-md-6">
                           <!-- Card 1 -->
                           <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                              <div>
                                 <div class="overview-content overview-content3">
                                    <div class="d-flex">
                                       <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-secondary">
                                          <img src="{{ asset('img/svg/revenue.svg') }}" alt="img" class="svg">
                                       </div>
                                       <div>
                                          <h2>$67.5k</h2>
                                          <p class="mb-3 mt-1">Sales Revenue</p>
                                          <div class="ap-po-details-time">
                                             <span class="color-success"><i class="las la-arrow-up"></i>
                                             <strong>25%</strong></span>
                                             <small>Since last week</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Card 1 End -->
                        </div>
                        <div class="col-xxl-12 col-md-6">
                           <!-- Card 3 -->
                           <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                              <div>
                                 <div class="overview-content overview-content3">
                                    <div class="d-flex">
                                       <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-success">
                                          <img src="{{ asset('img/svg/profit.svg') }}" alt="img" class="svg">
                                       </div>
                                       <div>
                                          <h2>$40.2k</h2>
                                          <p class="mb-3 mt-1">Profit</p>
                                          <div class="ap-po-details-time">
                                             <span class="color-danger"><i class="las la-arrow-down"></i>
                                             <strong>8.2%</strong></span>
                                             <small>Since last week</small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Card 3 End -->
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-lg-12 mb-25">
                     <div class="card revenueChartTwo broder-0">
                        <div class="card-header">
                           <h6>Average Sales Revenue</h6>
                           <div class="card-extra">
                              <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                 <li>
                                    <a class="active" href="#tl_revenue-today" data-toggle="tab" id="tl_revenue-today-tab" role="tab" aria-selected="false">Today</a>
                                 </li>
                                 <li>
                                    <a href="#tl_revenue-week" data-toggle="tab" id="tl_revenue-week-tab" role="tab" aria-selected="false">Week</a>
                                 </li>
                                 <li>
                                    <a href="#tl_revenue-month" data-toggle="tab" id="tl_revenue-month-tab" role="tab" aria-selected="false">Month</a>
                                 </li>
                                 <li>
                                    <a href="#tl_revenue-year" data-toggle="tab" id="tl_revenue-year-tab" role="tab" aria-selected="true">Year</a>
                                 </li>
                              </ul>
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" id="revenue2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span data-feather="more-horizontal"></span>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="revenue2">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body pt-0 px-20">
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="tl_revenue-today" role="tabpanel" aria-labelledby="tl_revenue-today-tab">
                                 <div class="cashflow-display cashflow-display2 d-flex">
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">This Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-success fs-14 fw-600 mr-10"><i class="las la-arrow-up"></i> <strong>15%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">Last Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-danger fs-14 fw-600 mr-10"><i class="las la-arrow-down"></i> <strong>12%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                 </div>
                                 <!-- ends: .performance-stats -->
                                 <div class="wp-chart">
                                    <div class="parentContainer">
                                       <div>
                                          <canvas id="myChart6TExtra"></canvas>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="revenue-labels pl-15 mb-0">
                                    <div class="current">
                                       <span>Current Period</span>
                                    </div>
                                    <div>
                                       <span>Previous Period</span>
                                    </div>
                                 </div>
                                 <!-- ends: .performance-stats -->
                              </div>
                              <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel" aria-labelledby="tl_revenue-week-tab">
                                 <div class="cashflow-display cashflow-display2 d-flex">
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">This Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-success fs-14 fw-600 mr-10"><i class="las la-arrow-up"></i> <strong>15%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">Last Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-danger fs-14 fw-600 mr-10"><i class="las la-arrow-down"></i> <strong>12%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                 </div>
                                 <!-- ends: .performance-stats -->
                                 <div class="wp-chart">
                                    <div class="parentContainer">
                                       <div>
                                          <canvas id="myChart6WExtra"></canvas>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="revenue-labels pl-15 mb-0">
                                    <div class="current">
                                       <span>Current Period</span>
                                    </div>
                                    <div>
                                       <span>Previous Period</span>
                                    </div>
                                 </div>
                                 <!-- ends: .performance-stats -->
                              </div>
                              <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel" aria-labelledby="tl_revenue-month-tab">
                                 <div class="cashflow-display cashflow-display2 d-flex">
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">This Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-success fs-14 fw-600 mr-10"><i class="las la-arrow-up"></i> <strong>15%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">Last Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-danger fs-14 fw-600 mr-10"><i class="las la-arrow-down"></i> <strong>12%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                 </div>
                                 <!-- ends: .performance-stats -->
                                 <div class="wp-chart">
                                    <div class="parentContainer">
                                       <div>
                                          <canvas id="myChart6MExtra"></canvas>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="revenue-labels pl-15 mb-0">
                                    <div class="current">
                                       <span>Current Period</span>
                                    </div>
                                    <div>
                                       <span>Previous Period</span>
                                    </div>
                                 </div>
                                 <!-- ends: .performance-stats -->
                              </div>
                              <div class="tab-pane fade" id="tl_revenue-year" role="tabpanel" aria-labelledby="tl_revenue-year-tab">
                                 <div class="cashflow-display cashflow-display2 d-flex">
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">This Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-success fs-14 fw-600 mr-10"><i class="las la-arrow-up"></i> <strong>15%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                    <div class="cashflow-display__single">
                                       <span class="cashflow-display__title">Last Month Revenue</span>
                                       <h3 class="cashflow-display__amount">$28.4k<span class="color-danger fs-14 fw-600 mr-10"><i class="las la-arrow-down"></i> <strong>12%</strong></span></h3>
                                    </div>
                                    <!-- ends: .cashflow-display__single -->
                                 </div>
                                 <!-- ends: .performance-stats -->
                                 <div class="wp-chart">
                                    <div class="parentContainer">
                                       <div>
                                          <canvas id="myChart6Extra"></canvas>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="revenue-labels pl-15 mb-0">
                                    <div class="current">
                                       <span>Current Period</span>
                                    </div>
                                    <div>
                                       <span>Previous Period</span>
                                    </div>
                                 </div>
                                 <!-- ends: .performance-stats -->
                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-body -->
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-12 mb-25">
                     <div class="card revenueChartTwo broder-0">
                        <div class="card-header">
                           <h6>Monthly Sales Target</h6>
                           <div class="card-extra">
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" id="revenue4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span data-feather="more-horizontal"></span>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="revenue4">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body px-sm-50 pb-sm-50 pt-sm-45 px-30 pb-30 pt-25 mb-sm-30">
                           <div class="d-flex justify-content-center">
                              <div class="">
                                 <div class="sales-target__progress-bar">
                                    <div class="left"></div>
                                    <div class="right">
                                       <div class="back"></div>
                                    </div>
                                    <div class="barOverflow">
                                       <div class="bar">
                                          <div class="top-circle"></div>
                                       </div>
                                    </div>
                                    <div class="total-count">
                                       <span>70</span>%
                                       <div class="total-count__text">
                                          progress
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="sales-target d-flex justify-content-between">
                              <div class="sales-target__single">
                                 <h3 class="text-success">$5,870</h3>
                                 <span class="fs-14 color-gray">Revenue</span>
                              </div>
                              <!-- ends: .cashflow-display__single -->
                              <div class="sales-target__single">
                                 <h3>$7,870</h3>
                                 <span class="fs-14 color-gray">Target</span>
                              </div>
                              <!-- ends: .cashflow-display__single -->
                           </div>
                           <!-- ends: .performance-stats -->
                        </div>
                        <!-- ends: .card-body -->
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-12 mb-25">
                     <div class="card revenueChartTwo broder-0">
                        <div class="card-header">
                           <h6>Monthly Sales Target</h6>
                           <div class="card-extra">
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" id="revenue5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span data-feather="more-horizontal"></span>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="revenue5">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body pt-30 pb-20 px-0">
                           <div class="sales-target d-flex justify-content-between mt-0 mb-sm-50 mb-30 px-25">
                              <div class="sales-target__single">
                                 <h3>$5,870</h3>
                                 <span class="fs-14 color-gray">Progress</span>
                              </div>
                              <!-- ends: .cashflow-display__single -->
                              <div class="sales-target__single">
                                 <h3>$7,870</h3>
                                 <span class="fs-14 color-gray">Target</span>
                              </div>
                              <!-- ends: .cashflow-display__single -->
                           </div>
                           <!-- ends: .performance-stats -->
                           <div class="pl-2 pr-15">
                              <div>
                                 <canvas id="salesLineChart"></canvas>
                              </div>
                           </div>
                           <!-- ends: .performance-stats -->
                        </div>
                        <!-- ends: .card-body -->
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-12 mb-25">
                     <div class="card border-0">
                        <div class="card-header">
                           <h6>Sales by Location</h6>
                           <div class="card-extra">
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" id="somethings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span data-feather="more-horizontal"></span>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="somethings">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body pt-45">
                           <div class="d-flex align-items-center justify-content-center">
                              <div class="regions-svg">
                                 <div id="region-map"></div>
                              </div>
                           </div>
                           <div>
                              <div class="table-responsive table-top-location">
                                 <table class="table table--default table-borderless mb-0">
                                    <tbody>
                                       <tr>
                                          <td>United States</td>
                                          <td>$26,457</td>
                                       </tr>
                                       <tr>
                                          <td>United Kingdom</td>
                                          <td>$44,658</td>
                                       </tr>
                                       <tr>
                                          <td>Canada</td>
                                          <td>$101,698</td>
                                       </tr>
                                       <tr>
                                          <td>China</td>
                                          <td>$2,856</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 mb-25">
                     <div class="card border-0">
                        <div class="card-header">
                           <h6>Top Selling Products</h6>
                           <div class="card-extra">
                              <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                 <li>
                                    <a class="active" href="#t_selling-today" data-toggle="tab" id="t_selling-today-tab" role="tab" aria-selected="true">Today</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-week" data-toggle="tab" id="t_selling-week-tab" role="tab" aria-selected="true">Week</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-month" data-toggle="tab" id="t_selling-month-tab" role="tab" aria-selected="true">Month</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-year" data-toggle="tab" id="t_selling-year-tab" role="tab" aria-selected="true">Year</a>
                                 </li>
                              </ul>
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" id="todo2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span data-feather="more-horizontal"></span>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="todo2">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel" aria-labelledby="t_selling-today-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>Samsung Galaxy S8 256GB</span>
                                                   </div>
                                                </td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>Half Sleeve Shirt</span>
                                                   </div>
                                                </td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Marco Shoes</span>
                                                   </div>
                                                </td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/315.png') }}" alt="img">
                                                      <span>15" Mackbook Pro</span>
                                                   </div>
                                                </td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Apple iPhone X</span>
                                                   </div>
                                                </td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-week" role="tabpanel" aria-labelledby="t_selling-week-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>Samsung Galaxy S8 256GB</span>
                                                   </div>
                                                </td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>Half Sleeve Shirt</span>
                                                   </div>
                                                </td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Marco Shoes</span>
                                                   </div>
                                                </td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/315.png') }}" alt="img">
                                                      <span>15" Mackbook Pro</span>
                                                   </div>
                                                </td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Apple iPhone X</span>
                                                   </div>
                                                </td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-month" role="tabpanel" aria-labelledby="t_selling-month-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>Samsung Galaxy S8 256GB</span>
                                                   </div>
                                                </td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>Half Sleeve Shirt</span>
                                                   </div>
                                                </td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Marco Shoes</span>
                                                   </div>
                                                </td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/315.png') }}" alt="img">
                                                      <span>15" Mackbook Pro</span>
                                                   </div>
                                                </td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Apple iPhone X</span>
                                                   </div>
                                                </td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-year" role="tabpanel" aria-labelledby="t_selling-year-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>Samsung Galaxy S8 256GB</span>
                                                   </div>
                                                </td>
                                                <td>$289</td>
                                                <td>339</td>
                                                <td>$60,258</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>Half Sleeve Shirt</span>
                                                   </div>
                                                </td>
                                                <td>$29</td>
                                                <td>136</td>
                                                <td>$2,483</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Marco Shoes</span>
                                                   </div>
                                                </td>
                                                <td>$59</td>
                                                <td>448</td>
                                                <td>$19,758</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/315.png') }}" alt="img">
                                                      <span>15" Mackbook Pro</span>
                                                   </div>
                                                </td>
                                                <td>$1,299</td>
                                                <td>159</td>
                                                <td>$197,458</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Apple iPhone X</span>
                                                   </div>
                                                </td>
                                                <td>$899</td>
                                                <td>146</td>
                                                <td>115,254</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 mb-25">
                     <div class="card border-0">
                        <div class="card-header">
                           <h6>Recent Orders</h6>
                           <div class="card-extra">
                              <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                 <li>
                                    <a class="active" href="#t_selling-today2" data-toggle="tab" id="t_selling-today2-tab" role="tab" aria-selected="true">Today</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-week2" data-toggle="tab" id="t_selling-week2-tab" role="tab" aria-selected="true">Week</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-month3" data-toggle="tab" id="t_selling-month3-tab" role="tab" aria-selected="true">Month</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-year4" data-toggle="tab" id="t_selling-year4-tab" role="tab" aria-selected="true">Year</a>
                                 </li>
                              </ul>
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" id="todo10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span data-feather="more-horizontal"></span>
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="todo10">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="t_selling-today2" role="tabpanel" aria-labelledby="t_selling-today2-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Customer</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>John Mark</span>
                                                   </div>
                                                </td>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$339</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-primary color-primary">Shipped</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>David Miller
                                                      </span>
                                                   </div>
                                                </td>
                                                <td>Half Sleeve Shirt </td>
                                                <td>$136</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Chris Lein</span>
                                                   </div>
                                                </td>
                                                <td>Marco Shoes</td>
                                                <td>$448</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-danger color-danger">panding</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/325.png') }}" alt="img">
                                                      <span>Robert Philips</span>
                                                   </div>
                                                </td>
                                                <td>15" Mackbook Pro</td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Ahmad Abdullah</span>
                                                   </div>
                                                </td>
                                                <td>Apple iPhone X </td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-week2" role="tabpanel" aria-labelledby="t_selling-week2-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Customer</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>John Mark</span>
                                                   </div>
                                                </td>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$339</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-primary color-primary">Shipped</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>David Miller
                                                      </span>
                                                   </div>
                                                </td>
                                                <td>Half Sleeve Shirt </td>
                                                <td>$136</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Chris Lein</span>
                                                   </div>
                                                </td>
                                                <td>Marco Shoes</td>
                                                <td>$448</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-danger color-danger">panding</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/325.png') }}" alt="img">
                                                      <span>Robert Philips</span>
                                                   </div>
                                                </td>
                                                <td>15" Mackbook Pro</td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Ahmad Abdullah</span>
                                                   </div>
                                                </td>
                                                <td>Apple iPhone X </td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-month3" role="tabpanel" aria-labelledby="t_selling-month3-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Customer</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>John Mark</span>
                                                   </div>
                                                </td>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$339</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-primary color-primary">Shipped</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>David Miller
                                                      </span>
                                                   </div>
                                                </td>
                                                <td>Half Sleeve Shirt </td>
                                                <td>$136</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Chris Lein</span>
                                                   </div>
                                                </td>
                                                <td>Marco Shoes</td>
                                                <td>$448</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-danger color-danger">panding</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/325.png') }}" alt="img">
                                                      <span>Robert Philips</span>
                                                   </div>
                                                </td>
                                                <td>15" Mackbook Pro</td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Ahmad Abdullah</span>
                                                   </div>
                                                </td>
                                                <td>Apple iPhone X </td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-year4" role="tabpanel" aria-labelledby="t_selling-year4-tab">
                                 <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table--default">
                                          <thead>
                                             <tr>
                                                <th>Customer</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/287.png') }}" alt="img">
                                                      <span>John Mark</span>
                                                   </div>
                                                </td>
                                                <td>Samsung Galaxy S8 256GB</td>
                                                <td>$339</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-primary color-primary">Shipped</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid" src="{{ asset('img/165.png') }}" alt="img">
                                                      <span>David Miller
                                                      </span>
                                                   </div>
                                                </td>
                                                <td>Half Sleeve Shirt </td>
                                                <td>$136</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/166.png') }}" alt="img">
                                                      <span>Chris Lein</span>
                                                   </div>
                                                </td>
                                                <td>Marco Shoes</td>
                                                <td>$448</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-danger color-danger">panding</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/325.png') }}" alt="img">
                                                      <span>Robert Philips</span>
                                                   </div>
                                                </td>
                                                <td>15" Mackbook Pro</td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="{{ asset('img/506.png') }}" alt="img">
                                                      <span>Ahmad Abdullah</span>
                                                   </div>
                                                </td>
                                                <td>Apple iPhone X </td>
                                                <td>$146</td>
                                                <td>
                                                   <div class="d-flex justify-content-end">
                                                      <span class="selling-badge order-bg-opacity-success color-success">paid</span>
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('vendor_assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor_assets/js/charts.js') }}"></script>
@endsection