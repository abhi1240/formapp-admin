@extends('admin.layouts.app')
@section('content')
  <style media="screen">
  .counter{
  color: #eb3b5a;
  font-family: 'Muli', sans-serif;
  width: 200px;
  height: 200px;
  text-align: center;
  border-radius: 100%;
  padding: 77px 32px 40px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}
.counter:before,
.counter:after{
  content: "";
  background: #fff;
  width: 80%;
  height: 80%;
  border-radius: 100%;
  box-shadow: -5px 5px 5px rgba(0,0,0,0.3);
  transform: translateX(-50%)translateY(-50%);
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: -1;
}
.counter:after{
  background: linear-gradient(45deg,#B81242 49%, #D74A75 50%);
  width: 100%;
  height: 100%;
  box-shadow: none;
  transform: translate(0);
  top: 0;
  left: 0;
  z-index: -2;
  clip-path: polygon(50% 50%, 50% 0, 100% 0, 100% 100%, 0 100%, 0 50%);
}
.counter .counter-icon{
  color: #fff;
  background: linear-gradient(45deg,#B81242 49%, #D74A75 50%);
  font-size: 33px;
  line-height: 70px;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  position: absolute;
  top:  0;
  left: 0;
  z-index: 1;
  transition: all 0.3s;
}
.counter .counter-icon i.fa{
  transform: rotateX(0deg);
  transition: all 0.3s ease 0s;
}
.counter:hover .counter-icon i.fa{ transform: rotateX(360deg); }
.counter h3{
  font-size: 14px;
    font-weight: 500;
    /* text-transform: uppercase; */
    margin: 0 0 3px;
    color: #4f4b49;
}
.counter .counter-value{
  font-size: 30px;
  font-weight: 700;
}
.counter.theme1{ color: #d9a5b3; }
.counter.theme1:after, .counter.theme1 .counter-icon {
    background: linear-gradient(45deg,#d9a5b3 49%,#d9a5b3b0 50%);
}
.counter.theme2{ color: #ff9a8d; }
.counter.theme2:after,
.counter.theme2 .counter-icon{
  background: linear-gradient(45deg,#ff9a8d 49%,#ff9a8da3 50%)
}
.counter.theme3{ color: #5DB3E4; }
.counter.theme3:after,
.counter.theme3 .counter-icon{
  background: linear-gradient(45deg,#5DB3E4 49%,#7ebee1d1 50%)
}
.counter.theme4{ color: #fa728a; }
.counter.theme4:after,
.counter.theme4 .counter-icon{
  background: linear-gradient(45deg,#fa728a 49%,#ff5270a1 50%)
}
.counter.theme5{ color: #46a567; }
.counter.theme5:after,
.counter.theme5 .counter-icon{
  background: linear-gradient(45deg,#46a567 49%,#45a466bd 50%)
}
.counter.theme6{ color: #4d5198; }
.counter.theme6:after,
.counter.theme6 .counter-icon{
  background: linear-gradient(45deg,#4d5198 49%,#4d5198c4 50%)
}
.counter.theme7{ color: #a75cb9; }
.counter.theme7:after,
.counter.theme7 .counter-icon{
  background: linear-gradient(45deg,#a75cb9 49%,#a75cb9ba 50%)
}
.counter.theme8{ color: #da68a0; }
.counter.theme8:after,
.counter.theme8 .counter-icon{
  background: linear-gradient(45deg,#da68a0 49%,#db69a0b0 50%)
}
.counter.theme9{ color: #abc884; }
.counter.theme9:after,
.counter.theme9 .counter-icon{
  background: linear-gradient(45deg,#abc884 49%,#abc884ad 50%)
}
@media screen and (max-width:990px){
  .counter{ margin-bottom: 40px; }
}
  </style>
<div class="contents">
   <div class="container-fluid">
     <div class="row mt-1">
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('admin.approve.users')}}">
            <div class="counter theme1" >
                <div class="counter-icon" >
                    <i class="fa fa-user-check"></i>
                </div>
                <h3>Approved Users</h3>
                <span class="counter-value" >
                  @isset($data['approved_users'])
                    {{$data['approved_users']}}
                  @endisset
                  </span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('admin.pending.users')}}">
            <div class="counter theme2">
                <div class="counter-icon">
                    <i class="fa fa-user-edit"></i>
                </div>
                <h3>Pending Users</h3>
                <span class="counter-value">
                  @isset($data['pending_users'])
                  {{$data['pending_users']}}
                @endisset</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('new.accounts')}}">
            <div class="counter theme3">
                <div class="counter-icon">
                    <i class="fa fa-person-booth"></i>
                </div>
                <h3>New Accounts</h3>
                <span class="counter-value">
                  @isset($data['new_accounts'])
                  {{$data['new_accounts']}}
                @endisset</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('support.staff')}}">
            <div class="counter theme4">
                <div class="counter-icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3>Total Support Staff</h3>
                <span class="counter-value">
                  @isset($data['support_staff'])
                  {{$data['support_staff']}}
                @endisset</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('image.quality.checker')}}">
            <div class="counter theme5">
                <div class="counter-icon">
                    <i class="fa fa-balance-scale"></i>
                </div>
                <h3>Image Quality Checker</h3>
                <span class="counter-value">
                  @isset($data['iqc'])
                  {{$data['iqc']}}
                @endisset</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('content.quality.controller')}}">
            <div class="counter theme6">
                <div class="counter-icon">
                    <i class="fa fa-file-signature"></i>
                </div>
                <h3>Content Quality Controller</h3>
                <span class="counter-value">
                  @isset($data['cqc'])
                  {{$data['cqc']}}
                @endisset</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('pending.images')}}">
            <div class="counter theme7">
                <div class="counter-icon">
                    <i class="fa fa-file-image"></i>
                </div>
                <h3>Pending Images</h3>
                <span class="counter-value">
                  @isset($data['pending_img'])
                  {{$data['pending_img']}}
                @endisset</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('approved.images')}}">
            <div class="counter theme8">
                <div class="counter-icon">
                    <i class="fa fa-images"></i>
                </div>
                <h3>Approved Images</h3>
                <span class="counter-value">
                  @isset($data['approved_img'])
                  {{$data['approved_img']}}
                @endisset</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-6 mt-30">
          <a href="{{route('rejected.images')}}">
            <div class="counter theme9">
                <div class="counter-icon">
                    <i class="fa fa-trash-alt"></i>
                </div>
                <h3>Rejected Images</h3>
                <span class="counter-value">
                  @isset($data['rejected_img'])
                  {{$data['rejected_img']}}
                @endisset</span>
            </div>
          </a>
        </div>
    </div>

      <div class="row mt-30">
         <div class="col-xxl-8 col-lg-8 mb-30">
            <div class="card border-0">
               <div class="card-header">
                  <h6>Average </h6>
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
                     </ul>
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
                                       <th>Total</th>
                                       <th>Average</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Approved Images</td>
                                       <td>$289</td>
                                       <td>339</td>
                                    </tr>
                                    <tr>
                                       <td>Rejected Images</td>
                                       <td>$29</td>
                                       <td>136</td>
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
                                      <th>Total</th>
                                      <th>Average</th>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <td>Approved Images</td>
                                      <td>$289</td>
                                      <td>339</td>
                                   </tr>
                                   <tr>
                                      <td>Rejected Images</td>
                                      <td>$29</td>
                                      <td>136</td>
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
                                      <th>Total</th>
                                      <th>Average</th>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <td>Approved Images</td>
                                      <td>$289</td>
                                      <td>339</td>
                                   </tr>
                                   <tr>
                                      <td>Rejected Images</td>
                                      <td>$29</td>
                                      <td>136</td>
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

         <div class="col-xxl-4 col-lg-6 mb-30">
            <div class="revenue-device-chart">
               <div class="card broder-0">
                  <div class="card-header">
                     <h6>Revenue By Device</h6>
                     <div class="card-extra">
                        <ul class="card-tab-links nav-tabs nav" role="tablist">
                           <li>
                              <a class="active" href="#rb_device-today" data-toggle="tab" id="rb_device-today-tab" role="tab" aria-selected="true">Today</a>
                           </li>
                           <li>
                              <a href="#rb_device-week" data-toggle="tab" id="rb_device-week-tab" role="tab" aria-selected="false">Week</a>
                           </li>
                           <li>
                              <a href="#rb_device-month" data-toggle="tab" id="rb_device-month-tab" role="tab" aria-selected="false">Month</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- ends: .card-header -->
                  <div class="card-body">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="rb_device-today" role="tabpanel" aria-labelledby="rb_device-today-tab">
                           <div class="revenue-pieChart-wrap">
                              <div>
                                 <canvas id="chartDoughnut3"></canvas>
                              </div>
                           </div>
                           <div class="revenue-chart-legend-list">
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-success"></span>
                                    <span>Desktop</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$83</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>45%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-info"></span>
                                    <span>Mobile</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$70</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>30%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-warning"></span>
                                    <span>Tablets</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$20</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>25%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                           </div>
                        </div>
                        <div class="tab-pane fade" id="rb_device-week" role="tabpanel" aria-labelledby="rb_device-week-tab">
                           <div class="revenue-pieChart-wrap">
                              <div>
                                 <canvas id="chartDoughnut3W"></canvas>
                              </div>
                           </div>
                           <div class="revenue-chart-legend-list">
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-success"></span>
                                    <span>Desktop</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$483</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>45%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-info"></span>
                                    <span>Mobile</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$870</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>30%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-warning"></span>
                                    <span>Tablets</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$420</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>25%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                           </div>
                        </div>
                        <div class="tab-pane fade" id="rb_device-month" role="tabpanel" aria-labelledby="rb_device-month-tab">
                           <div class="revenue-pieChart-wrap">
                              <div>
                                 <canvas id="chartDoughnut3M"></canvas>
                              </div>
                           </div>
                           <div class="revenue-chart-legend-list">
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-success"></span>
                                    <span>Desktop</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$5,870</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>85%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-info"></span>
                                    <span>Mobile</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$4,483</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>5%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                              <div class="revenue-chart-legend d-flex justify-content-between">
                                 <div class="revenue-chart-legend__label">
                                    <span class="label-dot dot-warning"></span>
                                    <span>Tablets</span>
                                 </div>
                                 <div class="revenue-chart-legend__data">
                                    <span>$2,420</span>
                                 </div>
                                 <div class="revenue-chart-legend__percentage">
                                    <span>10%</span>
                                 </div>
                              </div>
                              <!-- ends: .revenue-chart-legend -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ends: .card-body -->
               </div>
            </div>
         </div>
      </div>
      <!-- ends: .row -->
   </div>
</div>
@endsection
{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('vendor_assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor_assets/js/charts.js') }}"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 1000,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>
@endsection
