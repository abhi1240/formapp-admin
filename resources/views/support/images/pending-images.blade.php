@extends('support.layouts.app')
@section('content')
	<style media="screen">
		.paper_img{
			width:50px;
		}
	</style>
	<div class="contents">
	   <div class="container-fluid">
	      <div class="row">
	         <div class="col-lg-12">
	            <div class="breadcrumb-main">
	               <h4 class="text-capitalize breadcrumb-title">Pending Images</h4>
	            </div>
	         </div>
	      </div>
	      <div class="row">
					<div class='toast' >fcdsfgdgdfh</div>
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
	                                    <span class="userDatatable-title">User Id</span>
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
															 @isset($image)
							 									@forelse($image as $key => $img)
	                              <tr>
																	<td>
																		 <div class="userDatatable-content">
																			 <a id="img_popup" data-img ="{{$img->paper_img_url}}" >
																				 <img src="{{$img->paper_img_url}}" alt="" class="paper_img" >
																			 </a>

																		 </div>
																	</td>
	                                 <td>
	                                    <div class="userDatatable-content">
	                                       {{$img->is_id}}
	                                    </div>
	                                 </td>
	                                 <td>
	                                    <div class="userDatatable-content">
	                                       {{$img->paper_title}}
	                                    </div>
	                                 </td>
	                                 <td>
	                                    <div class="userDatatable-content">
	                                       {{$img->publication}}
	                                    </div>
	                                 </td>
																	 <td>
	                                    <div class="userDatatable-content">
	                                       {{$img->language_id}}
	                                    </div>
	                                 </td>
																	 <td>
	                                    <div class="userDatatable-content">
	                                       {{ \Carbon\Carbon::parse($img->created_at)->format('F - j - Y')}}
	                                    </div>
	                                 </td>
																	 <td class="text-center">
	                                    <div class="userDatatable-content d-flex">
																				<button data-id="{{$img->id}}" class="btn btn-xs btn-rounded btn-outline-success approve_image mr-2">Approve</button>
																				<button  data-id="{{$img->id}}"  class="btn btn-xs btn-rounded btn-outline-danger reject_image">Reject</button>
	                                    </div>
	                                 </td>
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
	<div class="modal" id="reject_image_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-info" role="document">
					<div class="modal-content">
						<form class="">
							<input type="hidden" name="reject_id" value="" id="reject_id">
							<div class="modal-body">
									<div class="modal-info-body d-flex">
											<div class="modal-info-icon danger">
													<span data-feather="x-circle"></span>
											</div>
											<div class="modal-info-text">
												<h5>Are you sure to Reject? </h5>
												<p>This process cannot be undone.</p>
											</div>
									</div>
							</div>
							<div class="modal-footer">
									<button type="button" class="btn btn-primary btn-sm" id="reject_img_form">Ok</button>
							</div>
						</form>
					</div>
			</div>
	</div>
	<div class="modal" id="approve_image_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-info" role="document">
					<div class="modal-content">
						<form class="">
							<input type="hidden" name="approve_id" value="" id="approve_id">
							<div class="modal-body">
									<div class="modal-info-body d-flex">
										<div class="modal-info-icon success">
												<span data-feather="check-circle"></span>
										</div>
											<div class="modal-info-text">
													<h5>Are you sure to Approve? </h5>
													<p>This process cannot be undone.</p>
											</div>
									</div>
							</div>
							<div class="modal-footer">
									<button type="button" class="btn btn-primary btn-sm" id="approve_img_form">Ok</button>
							</div>
						</form>
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
	<script type="text/javascript">
	$(document).ready(function(){
	  $('.pending_list').DataTable();
	});
	$(document).on('click', '.reject_image', function(){
    var id = $(this).data('id');
		$('input[id=reject_id]').val(id);
		$('#reject_image_modal').modal('toggle');
  });
	$(document).on('click', '.approve_image', function(){
    var id = $(this).data('id');
		$('input[id=approve_id]').val(id);
		$('#approve_image_modal').modal('toggle');
  });
	//approve Image
	$(document).on('click', '#approve_img_form', function(){
    var id = $("#approve_id").val();

    var url = $('meta[name="url"]').attr('content');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $('#approve_image_modal').modal('toggle');
    $.ajax({
      type: "POST",
      headers: { 'X-CSRF-TOKEN': csrf_token },
      url: url + '/support/images/approve_image',
      data:{
        id:id,
      },
      dataType: "json",
      success: function (res) {

        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.success);
        $("#img_table").load(" #img_table");
        },
      error:function(res){
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.error);
      },
    });

  });

	//reject image_explorer
	$(document).on('click', '#reject_img_form', function(){
    var id = $("#reject_id").val();

    var url = $('meta[name="url"]').attr('content');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $('#reject_image_modal').modal('toggle');
    $.ajax({
      type: "POST",
      headers: { 'X-CSRF-TOKEN': csrf_token },
      url: url + '/support/images/reject_image',
      data:{
        id:id,
      },
      dataType: "json",
      success: function (res) {
				console.log(res);
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.success);
        $("#img_table").load(" #img_table");
        },
      error:function(res){
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.error);
      },
    });

  });
	$(document).on('click', '#img_popup', function(){
		var imgsrc = $(this).data('img');
		$('#img_id').attr('src',imgsrc);
    $('#img_modal').modal('toggle');
  });
	</script>

@endsection
