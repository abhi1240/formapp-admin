@extends('quality-controller.layouts.app')
@section('content')
  <style media="screen">
    .job_header{
      font-size: 16px;
      font-weight: 600;
      color: #404357;
    }
    .paper_img{
      width: 75%;
      height: 11rem;
  }
  </style>
  <div class="contents">
  	<div class="container-fluid">
      <div class="row mt-25">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header justify-content-center">
              <span class="card-title fw-600">Approved Job View</span>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 justify-content-center">
                  <a id="img_popup" data-img ="{{$jobs->paper_img_url}}" >
                    <img src="{{$jobs->paper_img_url}}" alt="img" class="paper_img">
                  </a>

                </div>
                <div class="col-md-9 col-lg-9">
                  <div class="row">
                    <div class="col-mad-12 col-lg-12">
                      <div class="row">
                        <div class="col-md-2">
                          <span class="job_header">User Id</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-9">
                          <span>{{$jobs->cs_id}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-mad-12 col-lg-12 mt-2">
                      <div class="row">
                        <div class="col-md-2">
                          <span class="job_header">Paper Title</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-9">
                          <span>{{$jobs->paper_title}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-mad-12 col-lg-12 mt-2">
                      <div class="row">
                        <div class="col-md-2">
                          <span class="job_header">Publication</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-9">
                          <span>{{$jobs->publication}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-mad-12 col-lg-12 mt-2">
                      <div class="row">
                        <div class="col-md-2">
                          <span class="job_header">Language</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-9">
                          <span>{{$jobs->language}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-mad-12 col-lg-12 mt-2">
                      <div class="row">
                        <div class="col-md-2">
                          <span class="job_header">Description</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-9">
                          <span>{{$jobs->description}}</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="row mt-30">
                <div class="col-md-6 col-lg-6">

                    <div class="row">
                      <div class="col-md-12 col-lg-12  mt-25">
                        <div class="row">
                          <div class="col-md-3">
                            <span class="job_header">Image Title</span>
                          </div>
                          <div class="col-md-1">
                            <span>:</span>
                          </div>
                          <div class="col-md-8">
                            <span>{{$jobs->var_title}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-12  mt-25">
                        <div class="row">
                          <div class="col-md-3">
                            <span class="job_header">Apply Date</span>
                          </div>
                          <div class="col-md-1">
                            <span>:</span>
                          </div>
                          <div class="col-md-8">
                            <span>{{$jobs->apply_date}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-12  mt-25">
                        <div class="row">
                          <div class="col-md-3">
                            <span class="job_header">Walk In</span>
                          </div>
                          <div class="col-md-1">
                            <span>:</span>
                          </div>
                          <div class="col-md-8">
                            <span>{{$jobs->walk_in}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-12 mt-25">
                        <div class="row">
                          <div class="col-md-3">
                            <span class="job_header">Phone</span>
                          </div>
                          <div class="col-md-1">
                            <span>:</span>
                          </div>
                          <div class="col-md-8">
                            <span>{{$jobs->phone}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-12  mt-25">
                        <div class="row">
                          <div class="col-md-3">
                            <span class="job_header">Email</span>
                          </div>
                          <div class="col-md-1">
                            <span>:</span>
                          </div>
                          <div class="col-md-8">
                            <span>{{$jobs->email}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-12  mt-25">
                        <div class="row">
                          <div class="col-md-3">
                            <span class="job_header">Company Name</span>
                          </div>
                          <div class="col-md-1">
                            <span>:</span>
                          </div>
                          <div class="col-md-8">
                            <span>{{$jobs->company_name}}</span>
                          </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                  <div class="row">
                    <div class="col-md-12 col-lg-12  mt-25">
                      <div class="row">
                        <div class="col-md-3">
                          <span class="job_header">State</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-8">
                          <span>{{$jobs->state}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12  mt-25">
                      <div class="row">
                        <div class="col-md-3">
                          <span class="job_header">City</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-8">
                          <span>{{$jobs->city}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12  mt-25">
                      <div class="row">
                        <div class="col-md-3">
                          <span class="job_header">Zip</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-8">
                          <span>{{$jobs->zip}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12  mt-25">
                      <div class="row">
                        <div class="col-md-3">
                          <span class="job_header">Company Phone</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-8">
                          <span>{{$jobs->c_phone}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12  mt-25">
                      <div class="row">
                        <div class="col-md-3">
                          <span class="job_header">Company Email</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-8">
                          <span>{{$jobs->c_email}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-12 mt-25">
                      <div class="row">
                        <div class="col-md-3">
                          <span class="job_header">Website</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-8">
                          <span>{{$jobs->website}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12">
                  <div class="row">
                    <div class="col-md-12 col-lg-12 mt-25">
                      <div class="row">
                        <div class="col-md-2">
                          <span class="job_header">Image Description</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-9">
                          <span>{{$jobs->var_description}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12">
                  <div class="row">
                    <div class="col-md-12 col-lg-12  mt-25">
                      <div class="row">
                        <div class="col-md-2">
                          <span class="job_header">Address</span>
                        </div>
                        <div class="col-md-1">
                          <span>:</span>
                        </div>
                        <div class="col-md-9">
                          <span>{{$jobs->address}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12 mt-25">
                  <div class="row ">
                    <div class="col-md-6 col-lg-6">
                      <div class="table mb-10">
          									<div class="table-responsive">
          										 <table class="table mb-0 approved_list ">
          												<thead style="white-space:nowrap;" >
          													 <tr class="">
          														 <th>Category</th>
          														 <th>Openings</th>
          														 <th>Experience</th>
          													 </tr>
          												</thead>
                                  <tbody>
                                    @forelse ($category as $key => $value)
                                      <tr>
                                        <td>{{$value->category}}</td>
                                        <td>{{$value->openings}}</td>
                                        <td>{{$value->experience}}</td>
                                      </tr>
                                    @empty

                                    @endforelse

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
  <div class="modal" id="img_modal" tabindex="-1" role="dialog" aria-hidden="true">
  		<div class="modal-dialog modal-md" role="document">
  				<div class="modal-content modal-bg-white ">
  						<img src=""  alt="" id="img_id">
  				</div>
  		</div>
  </div>
@endsection
@section('scripts')
<script src="{{ asset('vendor_assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor_assets/js/charts.js') }}"></script>
<script type="text/javascript">
$(document).on('click', '#img_popup', function(){
  var imgsrc = $(this).data('img');
  $('#img_id').attr('src',imgsrc);
  $('#img_modal').modal('toggle');
});
</script>
@endsection
