@extends('quality-controller.layouts.app')
@section('content')
  <style media="screen">
  .form-control{
    border: 1px solid #7d858c9c;
  }
  a.btn_add{
    background-color: #bcbdec4a;
    color: #5f63f2;
    border-radius: 20px;
  }
  a.btn_remove{
    background-color: #ffdfe4eb;
    color: #ff0225;
    border-radius: 20px;
  }
  .overflow-auto {
  height:50em;
}
  </style>
  <div class="contents">
  	<div class="container-fluid">
      <div class="row my-2">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header justify-content-center">
              <h3>Data Entry Form</h3>
            </div>
            <div class="card-body overflow-auto">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->var_title)
                        value="{{$jobs->var_title}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->var_description)
                        value="{{$jobs->var_description}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Apply Date</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->apply_date)
                        value="{{$jobs->apply_date}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Walk In</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->walk_in)
                        value="{{$jobs->walk_in}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->phone)
                        value="{{$jobs->phone}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->email)
                        value="{{$jobs->email}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Company Name</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->company_name)
                        value="{{$jobs->company_name}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">State</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->state)
                        value="{{$jobs->state}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">City</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->city)
                        value="{{$jobs->city}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Zip Code</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->zip)
                        value="{{$jobs->zip}}"
                      @endisset readonly>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->address)
                        value="{{$jobs->address}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Company Phone</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->c_phone)
                        value="{{$jobs->c_phone}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Company Email</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->c_email)
                        value="{{$jobs->c_email}}"
                      @endisset readonly>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="">Website</label>
                      <input type="text" class="form-control" name="var_title" @isset($jobs->website)
                        value="{{$jobs->website}}"
                      @endisset readonly>
                    </div>
                  </div>
                  @forelse ($category as $key => $value)
                    <div class="col-md-12 col-lg-12 mt-2"  id="multi_category">
                      <div class="dup_row1" id="dup_row1">
                      <div class="row dup_row_first">
                        <div class="col-md-6">
                          <label for="">Category-{{$key+1}}</label>
                          <input type="text" class="form-control" name="category" @isset($value->category)
                            value="{{$value->category}}"
                          @endisset readonly>
                        </div>
                        <div class="col-md-3">
                          <label for="">No. Of Openings</label>
                          <input type="text" class="form-control" name="openings" @isset($value->openings)
                            value="{{$value->openings}}"
                          @endisset readonly>
                        </div>
                        <div class="col-md-3">
                          <label for="">Experience</label>
                          <input type="text" class="form-control" name="experience" @isset($value->experience)
                            value="{{$value->experience}}"
                          @endisset readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  @empty
                  @endforelse
                <div class="col-md-2 col-lg-2">
                  <label for="" class="invisible">Eyears)</label>
                  <form class="" action="{{route('quality_controller.job_approve')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$jobs->img_id}}">
                    <button type="submit" class="btn btn-primary  approve_job" name="button" id="submit_data_form" >Approve</button>
                  </form>
                </div>
                <div class="col-md-2 col-lg-2">
                  <label for="" class="invisible">Eyears)</label>
                  <button type="button" class="btn btn-danger reject_job " name="button" id="submit_data_form" >Reject</button>
                </div>
                <div class="col-md-12 col-lg-12 mt-25" style="display:none" id="reason_section">
                  <form class="" action="{{route('quality_controller.job_reject')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$jobs->img_id}}">
                    <div class="card p-2">
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="reason" class="form-control reason_for_rejection" value="" placeholder="Enter Reason" rows="4" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" name="button" class="btn btn-danger">Reject Job</button>
                      </div>
                    </div>
                  </form>
                </div>

                </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img src="{{$jobs->paper_img_url}}" alt="">
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script src="{{ asset('vendor_assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor_assets/js/charts.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.reject_job').click(function(){
		$('.approve_job').hide();
		$('.reject_job').hide();
		$('#reason_section').show();
	});
});
</script>
@endsection
