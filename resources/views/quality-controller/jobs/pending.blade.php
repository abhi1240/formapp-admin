@extends('quality-controller.layouts.app')
@section('content')
  <style media="screen">
    .paper_img{
      width:50px;
    }
    .custom_btn_primary{
   	 font-size:18px;
   	 background-color: #b7b8f966;
   	 border-radius: 50%;
   	 border:none;
    }
  </style>
  <div class="contents">
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="breadcrumb-main">
                 <h4 class="text-capitalize breadcrumb-title">Pending Jobs</h4>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="col-lg-12 mb-30">
             @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session()->get('success') }}
                    </div>
                      @endif
                      <!-- info -->
                      @if(session()->has('info'))
                   <div class="alert alert-info alert-dismissable">
                     <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                       {{ session()->get('info') }}
                   </div>
                     @endif
                      <!-- warning -->
                      @if(session()->has('warning'))
                   <div class="alert alert-warning alert-dismissable">
                     <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                       {{ session()->get('warning') }}
                   </div>
                     @endif
                      <!-- danger -->
                      @if(session()->has('danger'))
                   <div class="alert alert-danger alert-dismissable">
                     <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                       {{ session()->get('danger') }}
                   </div>
                     @endif
              <div class="card" >
                 <div class="card-header color-dark fw-500">
                    User List
                 </div>
                 <div class="card-body">
                    <div class="userDatatable global-shadow border-0 bg-white w-100">
                       <div class="table-responsive">
                          <table class="table mb-0 table-borderless pending_list"  id="img_table">
                             <thead>
                                <tr class="userDatatable-header">
                                   <th>
                                      <span class="userDatatable-title">Image</span>
                                   </th>
                                   <th>
                                      <span class="userDatatable-title">Content Seeder Id</span>
                                   </th>
                                   <th>
                                      <span class="userDatatable-title">Paper Title</span>
                                   </th>
                                   <th>
                                      <span class="userDatatable-title">Publication</span>
                                   </th>
                                   <th>
                                      <span class="userDatatable-title">Language id</span>
                                   </th>
                                   <th>
                                      <span class="userDatatable-title">Date</span>
                                   </th>
                                   <th>
                                     <span class="userDatatable-title ">Action</span>
                                  </th>
                                </tr>
                             </thead>
                             <tbody>
                               @isset($jobs)
                                @forelse($jobs as $key => $job)
                              <tr>
                                <td>
                                  <img src="{{$job->paper_img_url}}" class="paper_img" alt="">
                                </td>
                                <td>{{$job->cs_id}}</td>
                                <td>{{$job->paper_title}}</td>
                                <td>{{$job->publication}}</td>
                                <td>{{$job->language}}</td>
                                <td>{{ \Carbon\Carbon::parse($job['created_at'])->format('j F, Y')}}</td>
                                @php $img_id = Crypt::encrypt($job['img_id']); @endphp
                                  <td><a href="{{route('quality_controller.pending_jobs_view',$img_id)}}" class="custom_btn_primary text-primary update_record mr-2"  data-toggle="tooltip" title="view record"> <i class="la la-eye p-2"></i> </a></td>
                              </tr>
                              @empty
                             @endforelse
                            @endisset
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
@endsection
