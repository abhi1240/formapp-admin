@extends('admin.layouts.app')
@section('content')
	<style media="screen">
    .custom_btn_primary{
      font-size:18px;
      background-color: #b7b8f966;
      border-radius: 50%;
      border:none;
    }
    .custom_btn_danger{
      font-size:18px;
      background-color: #fd545833;
      border-radius: 50%;
      border:none;
    }
  </style>
	<div class="contents">
	   <div class="container-fluid">
	      <div class="row mb-30 mt-3">
	         <div class="col-lg-6 col-md-6">
	            <div class="card">
	               <div class="card-header color-dark fw-500">
                   <span><i class="fas fa-bars mr-2"></i>Papers List</span>
	               </div>
	               <div class="card-body">
	                  <div class="userDatatable global-shadow border-0 bg-white w-100">
	                     <div class="table-responsive">
	                        <table class="table mb-0 table-borderless lang_list">
	                           <thead>
	                              <tr class="userDatatable-header">
	                                 <th>
	                                    <span class="userDatatable-title">Sl No.</span>
	                                 </th>
	                                 <th>
	                                    <span class="userDatatable-title">Nmae</span>
	                                 </th>
	                                 <th>
	                                    <span class="userDatatable-title">Status</span>
	                                 </th>
	                                 <th>
	                                    <span class="userDatatable-title">Action</span>
	                                 </th>

	                              </tr>
	                           </thead>
	                           <tbody>
															 @isset($papers)
																@forelse($papers as $key => $value)
																<tr >
																	 <td>
																			<div class="userDatatable-content">
																				 {{$key+1}}
																			</div>
																	 </td>
																	 <td>
																			<div class="userDatatable-content">
																				 {{$value->name}}
																			</div>
																	 </td>
																	 <td>
                                      <div class="userDatatable-content">
                                        <div class="custom-control custom-switch switch-info switch-md ">
                                                <input type="checkbox" data-id="{{ $value->id }}" class="custom-control-input active_inactive"  id="switch-dynamic-badge{{ $value->id }}" {{ $value->status == 1 ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="switch-dynamic-badge{{ $value->id }}"></label>
                                            </div>
                                        </div>
                                   </td>
																	 <td>
																			<div class="userDatatable-content d-flex">
																				 <a  class="custom_btn_primary text-primary update_record mr-2"  data-id="{{$value->id}}" data-name="{{$value->name}}" data-toggle="tooltip" title="update"> <i class="la la-pen-alt p-2"></i> </a>
																				 <a  class="custom_btn_danger  text-danger destroy_record" data-id="{{$value->id}}"  data-toggle="tooltip" title="Delete"><i class="la la-trash p-2"></i></a>
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
           <div class="col-lg-6 col-md-6">
             <div class="card">
               <div class="card-header color-dark fw-500">
                  <span><i class="fas fa-file-alt mr-2"></i>Manage Paper</span>
               </div>
               <div class="card-body">
                 <form class="" action="" method="post">
                   <div class="row">
                     <div class="col-md-6 col-lg-6">
                       <div class="form-group">
                         <label for="">Paper Name</label>
                         <input type="text" name="name" class="form-control" value="" placeholder="Enter Paper Name" id="name" required>
                       </div>
                     </div>
                     <div class="col-md-3 col-lg-3">
                       <label for="" class="invisible">button</label>
                       <a href="#" class="btn btn-primary btn-block btn-sm" id="papers_form">Save</a>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>

	      </div>

	   </div>
	</div>
	<div class=" modal" id="destroy_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-info" role="document">
        <div class="modal-content">
          <form class="">
            <input type="hidden" name="id" id="remove_id" value="">
            <div class="modal-body">
                <div class="modal-info-body d-flex">
                    <div class="modal-info-icon warning">
                        <span data-feather="info"></span>
                    </div>
                    <div class="modal-info-text">
                        <h6>Are you sure?</h6>
                        <p>Do you really want to delete this? This cannot process cannot be undone.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-outlined btn-sm" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-success btn-outlined btn-sm" id="remove_record_lang">Yes</button>
            </div>
          </form>
        </div>
    </div>
  </div>
	<div class="modal" id="update_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-info" role="document">
					<div class="modal-content">
            <form class="" >
              <input type="hidden" name="id" id="update_id" value="">
              <div class="modal-body">
                  <div class="modal-info-body d-flex">
                      <div class="modal-info-text">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label for="">Language Name</label>
                            	<input type="text" class="form-control" name="name"  id="update_name" value="">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="" class="invisible">button</label>
                              <button type="button" class="btn btn-primary btn-sm " id="update_record_form" >Update</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
            </form>
					</div>
			</div>
	</div>
@endsection
@section('scripts')
	<script type="text/javascript">
	$(document).ready(function(){
	  $('.lang_list').DataTable();
	});
	$(document).on('click', '#papers_form', function(){
		var name = $("#name").val();
		var url = $('meta[name="url"]').attr('content');
		var csrf_token = $('meta[name="csrf-token"]').attr('content');
		$.ajax({
			type: "POST",
			headers: { 'X-CSRF-TOKEN': csrf_token },
			url: url + '/admin/tables/papers_store',
			data:{
				name:name,
			},
			dataType: "json",
			success: function (res) {
				toastr.options.closeButton = true;
				toastr.options.closeMethod = 'fadeOut';
				toastr.options.closeDuration = 100;
				toastr.success(res.success);
				location.reload();
				},
			error:function(res){
				toastr.options.closeButton = true;
				toastr.options.closeMethod = 'fadeOut';
				toastr.options.closeDuration = 100;
				toastr.success(res.error);
			},
		});

	});
	//remove function
	$(document).on('click', '.destroy_record', function(){
    var id = $(this).data('id');
    $('input[id=remove_id]').val(id);
    $('#destroy_modal').modal('toggle');
  });
	$(document).on('click', '#remove_record_lang', function(){
    var id = $("#remove_id").val();

    var url = $('meta[name="url"]').attr('content');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $('#destroy_modal').modal('toggle');
    $.ajax({
      type: "POST",
      headers: { 'X-CSRF-TOKEN': csrf_token },
      url: url + '/admin/tables/papers_remove',
      data:{
        id:id,
      },
      dataType: "json",
      success: function (res) {
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.success);
				location.reload();
        },
      error:function(res){
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.error);
      },
    });

  });
	//update function
	$(document).on('click', '.update_record', function(){
    var id = $(this).data('id');
		var name = $(this).data('name');
    $('input[id=update_id]').val(id);
		$('input[id=update_name]').val(name);
    $('#update_modal').modal('toggle');
  });

	$(document).on('click', '#update_record_form', function(){
    var id = $("#update_id").val();
    var name = $("#update_name").val();
    var url = $('meta[name="url"]').attr('content');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $('#update_modal').modal('toggle');
    $.ajax({
      type: "POST",
      headers: { 'X-CSRF-TOKEN': csrf_token },
      url: url + '/admin/tables/papers_update',
      data:{
        id:id,
        name:name,
      },
      dataType: "json",
      success: function (res) {
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.success);
				location.reload();
        },
      error:function(res){
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.error);
      },
    });

  });

	$('.active_inactive').change(function () {
			var status = $(this).prop('checked') === true ? 1 : 0;

			var id = $(this).data('id');
			var url = $('meta[name="url"]').attr('content');
			// console.log(status);
			console.log(id);
			$.ajax({
				type: "GET",
				url: url + '/admin/tables/papers_status_update',
				data:{
					id:id,
					status:status,
				},
				dataType: "json",
				success: function (res) {
					toastr.options.closeButton = true;
					toastr.options.closeMethod = 'fadeOut';
					toastr.options.closeDuration = 100;
					toastr.success(res.success);
					},
				error:function(res){
					toastr.options.closeButton = true;
					toastr.options.closeMethod = 'fadeOut';
					toastr.options.closeDuration = 100;
					toastr.success(res.error);
				},
			});
	});
	</script>

@endsection
