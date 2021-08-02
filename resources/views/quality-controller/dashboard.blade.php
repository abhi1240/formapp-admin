@extends('quality-controller.layouts.app')
@section('content')
  <style media="screen">
  .bal-amt {
     font-size: 2rem;
     font-weight: 100;
     color: #9b9b9b;
  }
  .card-title-1{
   font-size: 15px;
   font-weight: 400;
  }
  .order-bg-opacity-theme3, .orderDatatable_actions li a.view:hover {
      background: rgb(0 127 188 / 19%);
      color: #007fbc;
      padding: 13px;
  }
  a.view_txt3 {
      font-size: 15px;
      text-align: center;
      color: #007fbc;
      background-color: #cfe7f2;
      padding: 5px;
  }
  .order-bg-opacity-theme2, .orderDatatable_actions li a.view:hover {
    background: rgb(250 135 136 / 30%);
    color: #ff2424d4;
    padding: 13px;
  }
  a.view_txt2 {
    font-size: 15px;
    text-align: center;
    color: #ff4343;
    background-color: #fddbdb;
    padding: 5px;
  }
  .order-bg-opacity-theme1, .orderDatatable_actions li a.view:hover {
    background: rgb(55 85 213 / 21%);
    color: #1534ccd4;
    padding: 13px;
  }
  a.view_txt1 {
    font-size: 15px;
    text-align: center;
    color: #3550d3;
    background-color: #d5dbf6;
    padding: 5px;
  }
  </style>
  <div class="contents">
   <div class="container-fluid">
      <div class="row mt-3">
            <div class="col-md-3 col-lg-3">
                <div class="card p-3">
                  <div class="d-flex">
                    <div class="">
                      <div class="mr-20 order-bg-opacity-theme1 ">
                         <span ><i class="fas fa-users fa-3x"></i> </span>
                      </div>
                    </div>
                    <div class="">
                      <h5 class="bal-amt pb-2 mb-1 ">
                        @if (isset($data['pen_cnt']))
                          {{number_format($data['pen_cnt'])}}
                          @else
                            0.00
                        @endif
                      </h5>
                      <h5 class="card-title card-title-1">Pending Jobs</h5>
                    </div>
                  </div>
                  <a href="{{route('quality_controller.pending_jobs')}}" class="font-weight-light view_txt1 mb-0 mt-1"> View Explorer <span><i class="fas fa-arrow-circle-right ml-2"></i></span> </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="card p-3">
                  <div class="d-flex">
                    <div class="">
                      <div class="mr-20 order-bg-opacity-theme2 ">
                         <span ><i class="fas fa-users fa-3x"></i> </span>
                      </div>
                    </div>
                    <div class="">
                      <h5 class="bal-amt pb-2 mb-1 ">
                        @if (isset($data['apd_cnt']))
                          {{number_format($data['apd_cnt'])}}
                          @else
                            0.00
                        @endif
                      </h5>
                      <h5 class="card-title card-title-1">Approved Jobs</h5>
                    </div>
                  </div>
                  <a href="{{route('quality_controller.approved_jobs')}}" class="font-weight-light view_txt2 mb-0 mt-1 "> View Explorer <span><i class="fas fa-arrow-circle-right ml-2"></i></span> </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="card p-3">
                  <div class="d-flex">
                    <div class="">
                      <div class="mr-20 order-bg-opacity-theme3 ">
                         <span ><i class="fas fa-users fa-3x"></i> </span>
                      </div>
                    </div>
                    <div class="">
                      <h5 class="bal-amt pb-2 mb-1 ">
                        @if (isset($data['rej_cnt']))
                          {{number_format($data['rej_cnt'])}}
                          @else
                            0.00
                        @endif
                      </h5>
                      <h5 class="card-title card-title-1">Rejected Jobs</h5>
                    </div>
                  </div>
                  <a  href="{{route('quality_controller.rejected_jobs')}}" class="font-weight-light view_txt3 mb-0 mt-1 "> View Explorer <span><i class="fas fa-arrow-circle-right ml-2"></i></span> </a>
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
