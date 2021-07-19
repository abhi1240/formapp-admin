@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">Finance Dashboard</h4>
               <div class="breadcrumb-action justify-content-center flex-wrap">
                  <div class="action-btn">
                     <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                           <span class="input-icon icon-left">
                           <span data-feather="calendar"></span>
                           </span>
                           <input type="text" class="form-control form-control-default date-ranger"
                              name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                           <span class="input-icon icon-right">
                           <span data-feather="chevron-down"></span>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown action-btn">
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                        id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                        id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
         <div class="col-xxl-6 col-12">
            <div class="row">
               <div class="col-md-6 mb-25">
                  <div class="forcast-cardbox">
                     <h6 class="forcast-title">Net Profit</h6>
                     <div class="forcast-details">
                        <h1 class="forcast-value">$42.5k</h1>
                        <p class="forcast-status">
                           <span class="percentage color-success">
                           <span data-feather="arrow-up"></span>
                           <span>25%</span>
                           </span>
                           <span class="forcast-text">Since last month</span>
                        </p>
                     </div>
                     <div class="forcast__chart">
                        <div class="parentContainer">
                           <div>
                              <canvas id="lineChartforcastOne"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ends: .forcast-cardbox -->
               </div>
               <div class="col-md-6 mb-25">
                  <div class="forcast-cardbox">
                     <h6 class="forcast-title">Gross Profit</h6>
                     <div class="forcast-details">
                        <h1 class="forcast-value">$82.24k</h1>
                        <p class="forcast-status">
                           <span class="percentage color-danger">
                           <span data-feather="arrow-up"></span>
                           <span>8%</span>
                           </span>
                           <span class="forcast-text">Since last month</span>
                        </p>
                     </div>
                     <div class="forcast__chart">
                        <div class="parentContainer">
                           <div>
                              <canvas id="lineChartforcastTwo"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ends: .forcast-cardbox -->
               </div>
               <div class="col-md-6 mb-25">
                  <div class="ratio-box card">
                     <div class="card-body">
                        <h6 class="ratio-title">Quick Ratio</h6>
                        <div class="ratio-info d-flex justify-content-between align-items-center">
                           <h1 class="ratio-point">1.8</h1>
                           <span class="ratio-percentage color-success">180%</span>
                        </div>
                        <div class="progress-wrap mb-0">
                           <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"
                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <span class="progress-text">
                           <span class="color-dark dark">1 or higher</span>
                           <span class="progress-target">quick ratio target</span>
                           </span>
                        </div>
                     </div>
                  </div>
                  <!-- ends: .ratio-box -->
               </div>
               <div class="col-md-6 mb-25">
                  <div class="ratio-box card">
                     <div class="card-body">
                        <h6 class="ratio-title">Current Ratio</h6>
                        <div class="ratio-info d-flex justify-content-between align-items-center">
                           <h1 class="ratio-point">2.4</h1>
                           <span class="ratio-percentage color-warning">72%</span>
                        </div>
                        <div class="progress-wrap mb-0">
                           <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 72%;"
                                 aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <span class="progress-text">
                           <span class="color-dark dark">1 or higher</span>
                           <span class="progress-target">quick ratio target</span>
                           </span>
                        </div>
                     </div>
                  </div>
                  <!-- ends: .ratio-box -->
               </div>
            </div>
         </div>
         <div class="col-xxl-6 col-12 mb-25">
            <div class="card broder-0">
               <div class="card-header">
                  <h6>
                     Total Revenue
                     <span>Nov 23, 2019 - Nov 29, 2019</span>
                  </h6>
                  <div class="card-extra">
                     <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                        <li>
                           <a href="#t_revenue-week" data-toggle="tab" id="t_revenue-week-tab" role="tab"
                              aria-selected="true">Week</a>
                        </li>
                        <li>
                           <a href="#t_revenue-month" data-toggle="tab" id="t_revenue-month-tab" role="tab"
                              aria-selected="false">Month</a>
                        </li>
                        <li>
                           <a class="active" href="#t_revenue-year" data-toggle="tab" id="t_revenue-year-tab"
                              role="tab" aria-selected="false">Year</a>
                        </li>
                     </ul>
                     <div class="dropdown dropleft">
                        <a href="#" role="button" id="cash" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="cash">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-header -->
               <div class="card-body">
                  <div class="tab-content">
                     <div class="tab-pane fade" id="t_revenue-week" role="tabpanel"
                        aria-labelledby="t_revenue-week-tab">
                        <div class="cashflow-display d-flex">
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Current Balance</span>
                              <h2 class="cashflow-display__amount color-primary">$2,784</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Cash in</span>
                              <h2 class="cashflow-display__amount">$4,240</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Cash out</span>
                              <h2 class="cashflow-display__amount">$2,470</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                        </div>
                        <div class="cashflow-chart">
                           <div class="parentContainer">
                              <div>
                                 <canvas id="barChartCashflow_W"></canvas>
                              </div>
                           </div>
                           <ul class="legend-static">
                              <li class="custom-label">
                                 <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                              </li>
                              <li class="custom-label">
                                 <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="t_revenue-month" role="tabpanel"
                        aria-labelledby="t_revenue-month-tab">
                        <div class="cashflow-display d-flex">
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Current Balance</span>
                              <h2 class="cashflow-display__amount color-primary">$52,784</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Cash in</span>
                              <h2 class="cashflow-display__amount">$74,240</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Cash out</span>
                              <h2 class="cashflow-display__amount">$22,470</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                        </div>
                        <div class="cashflow-chart">
                           <div class="parentContainer">
                              <div>
                                 <canvas id="barChartCashflow_M"></canvas>
                              </div>
                           </div>
                           <ul class="legend-static">
                              <li class="custom-label">
                                 <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                              </li>
                              <li class="custom-label">
                                 <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade active show" id="t_revenue-year" role="tabpanel"
                        aria-labelledby="t_revenue-year-tab">
                        <div class="cashflow-display d-flex">
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Current Balance</span>
                              <h2 class="cashflow-display__amount color-primary">$92,784</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Cash in</span>
                              <h2 class="cashflow-display__amount">$104,240</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                           <div class="cashflow-display__single">
                              <span class="cashflow-display__title">Cash out</span>
                              <h2 class="cashflow-display__amount">$872,470</h2>
                           </div>
                           <!-- ends: .cashflow-display__single -->
                        </div>
                        <div class="cashflow-chart">
                           <div class="parentContainer">
                              <div>
                                 <canvas id="barChartCashflow"></canvas>
                              </div>
                           </div>
                           <ul class="legend-static">
                              <li class="custom-label">
                                 <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                              </li>
                              <li class="custom-label">
                                 <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-body -->
            </div>
         </div>
         <div class="col-12 mb-25">
            <div class="card broder-0">
               <div class="card-header">
                  <h6>Income And Expenses<span>Nov 23, 2019 - Nov 29, 2019</span></h6>
                  <div class="card-extra">
                     <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                        <li>
                           <a href="#incExp-week" data-toggle="tab" id="incExp-week-tab" role="tab"
                              aria-selected="true">Week</a>
                        </li>
                        <li>
                           <a href="#incExp-month" data-toggle="tab" id="incExp-month-tab" role="tab"
                              aria-selected="true">Month</a>
                        </li>
                        <li>
                           <a href="#incExp-year" class="active" data-toggle="tab" id="incExp-year-tab"
                              role="tab" aria-selected="true">Year</a>
                        </li>
                     </ul>
                     <div class="dropdown dropleft">
                        <a href="#" role="button" id="income" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                        <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="income">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-header -->
               <div class="card-body pt-0 pb-0">
                  <div class="tab-content">
                     <div class="tab-pane fade" id="incExp-week" role="tabpanel"
                        aria-labelledby="incExp-week-tab">
                        <div class="inEx-wrap d-flex">
                           <div class="inEx-box">
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Total income</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$4,820</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>37%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Total expenses</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$4,820</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-danger">
                                    <span data-feather="arrow-down"></span>25%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Cost of goods sold</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$2,143</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>25%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Net profit</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$2,727</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>17%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                           </div>
                           <div class="inEx-chart">
                              <div class="parentContainer">
                                 <div>
                                    <canvas id="barChartInEx_W"></canvas>
                                 </div>
                              </div>
                              <ul class="legend-static">
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(95, 99, 242);"></span>Total Income
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(255, 105, 165);"></span>Cost of goods
                                    sold
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(250, 139, 12);"></span>Total expenses
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(32, 201, 151);"></span>Net profit
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="incExp-month" role="tabpanel"
                        aria-labelledby="incExp-month-tab">
                        <div class="inEx-wrap d-flex">
                           <div class="inEx-box">
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Total income</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$74,820</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>37%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Total expenses</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$74,820</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-danger">
                                    <span data-feather="arrow-down"></span>25%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Cost of goods sold</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$32,143</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>25%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Net profit</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$52,727</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>17%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                           </div>
                           <div class="inEx-chart">
                              <div class="parentContainer">
                                 <div>
                                    <canvas id="barChartInEx_M"></canvas>
                                 </div>
                              </div>
                              <ul class="legend-static">
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(95, 99, 242);"></span>Total Income
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(255, 105, 165);"></span>Cost of goods
                                    sold
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(250, 139, 12);"></span>Total expenses
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(32, 201, 151);"></span>Net profit
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade active show" id="incExp-year" role="tabpanel"
                        aria-labelledby="incExp-year-tab">
                        <div class="inEx-wrap d-flex">
                           <div class="inEx-box">
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Total income</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$274,820</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>37%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Total expenses</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$274,820</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-danger">
                                    <span data-feather="arrow-down"></span>25%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Cost of goods sold</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$532,143</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>25%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                              <div class="inEx__single">
                                 <span class="inEx-subtitle">Net profit</span>
                                 <div class="inEx__info d-flex align-items-end">
                                    <h3 class="inEx__title">$252,727</h3>
                                    <span class="inEx-tail color-light">
                                    <span class="inEx__percentage color-success">
                                    <span data-feather="arrow-up"></span>17%</span>
                                    Since last month
                                    </span>
                                 </div>
                              </div>
                              <!-- ends: .inEx__single -->
                           </div>
                           <div class="inEx-chart">
                              <div class="parentContainer">
                                 <div>
                                    <canvas id="barChartInEx"></canvas>
                                 </div>
                              </div>
                              <ul class="legend-static">
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(95, 99, 242);"></span>Total Income
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(255, 105, 165);"></span>Cost of goods
                                    sold
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(250, 139, 12);"></span>Total expenses
                                 </li>
                                 <li style="display: inline-flex; align-items: center;">
                                    <span style="background-color: rgb(32, 201, 151);"></span>Net profit
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-body -->
            </div>
         </div>
         <div class="col-md-6 mb-25">
            <div class="card broder-0">
               <div class="card-header">
                  <h6>Account Receivable</h6>
                  <div class="card-extra">
                     <div class="dropdown dropleft">
                        <a href="#" role="button" id="receivable" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                        <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="receivable">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-header -->
               <div class="card-body">
                  <div class="account-chart">
                     <div>
                        <canvas id="lineChartAccountReceive"></canvas>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-body -->
            </div>
         </div>
         <div class="col-md-6 mb-25">
            <div class="card broder-0">
               <div class="card-header">
                  <h6>Account Payable</h6>
                  <div class="card-extra">
                     <div class="dropdown dropleft">
                        <a href="#" role="button" id="payable" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                        <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="payable">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-header -->
               <div class="card-body">
                  <div class="account-chart">
                     <div>
                        <canvas id="lineChartAccountPayable"></canvas>
                     </div>
                  </div>
               </div>
               <!-- ends: .card-body -->
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