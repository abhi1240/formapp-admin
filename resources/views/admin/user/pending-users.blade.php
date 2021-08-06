@extends('admin.layouts.app')
@section('content')
	<div class="contents">
	   <div class="container-fluid">
	      <div class="row">
	         <div class="col-lg-12">
	            <div class="breadcrumb-main">
	               <h4 class="text-capitalize breadcrumb-title">Pending Users</h4>
								 <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                       <a href="{{route('admin.user.create.account')}}" class="btn btn-sm btn-primary btn-add">
                       <i class="la la-plus"></i> Add New</a>
                    </div>
                 </div>
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
	            <div class="card">
	               <div class="card-header color-dark fw-500">
	                  User List
	               </div>
	               <div class="card-body">
	                  <div class="userDatatable global-shadow border-0 bg-white w-100">
	                     <div class="table-responsive">
	                        <table class="table mb-0 table-borderless pending_list" id="users_list">
	                           <thead>
	                              <tr class="userDatatable-header">
	                                 <th>
	                                    <span class="userDatatable-title">Sl No.</span>
	                                 </th>
	                                 <th>
	                                    <span class="userDatatable-title">Name</span>
	                                 </th>
	                                 <th>
	                                    <span class="userDatatable-title">Email</span>
	                                 </th>
																	 <th>
	                                    <span class="userDatatable-title">Role</span>
	                                 </th>
	                                 <th>
	                                    <span class="userDatatable-title">Action</span>
	                                 </th>
	                              </tr>
	                           </thead>
	                           <tbody>
															 @isset($users)
							 									@forelse($users as $key => $user)
	                              <tr>
	                                 <td>
	                                    <div class="userDatatable-content">
	                                       {{$key++}}
	                                    </div>
	                                 </td>
	                                 <td>
	                                    <div class="userDatatable-content">
	                                       {{$user->name}}
	                                    </div>
	                                 </td>
	                                 <td>
	                                    <div class="userDatatable-content">
	                                       {{$user->email}}
	                                    </div>
	                                 </td>
																	 <td>
																	    <div class="userDatatable-content">
																	      @if ($user->rights == 0)
																	        Image Seeder
																	        @else
																	          Content Seeder
																	     @endif
																	    </div>
																	 </td>
	                                 <td>
	                                    <div class="userDatatable-content">
	                                       {{-- <a href="{{route('admin.user.approve',$user->id)}}" class="btn btn-primary " data-toggle="tooltip" title="Approve User">Approve</a> --}}
																				 <button  class="btn btn-primary approve_user" data-id="{{$user->id}}" data-toggle="tooltip" title="Approve User">Approve</button>
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

	<div class="modal" id="approve_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-info" role="document">
					<div class="modal-content">
						<form class="">
	            <input type="hidden" name="approve_id" id="approve_id" value="">
	            <div class="modal-body">
	                <div class="modal-info-body d-flex">
	                    <div class="modal-info-icon success">
	                        <span data-feather="info"></span>
	                    </div>
	                    <div class="modal-info-text">
	                        <h6>Are you sure?</h6>
	                        <p>Do you really want to approve this? This cannot process cannot be undone.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-success btn-outlined btn-sm" id="approve_form">Approve</button>
	            </div>
	          </form>
					</div>
			</div>
	</div>
@endsection
@section('scripts')
	<script type="text/javascript">
	$(document).ready(function(){
	  $('.pending_list').DataTable();
	});
	$(document).on('click', '.approve_user', function(){
    var id = $(this).data('id');
    $('input[id=approve_id]').val(id);
    $('#approve_modal').modal('toggle');
  });

	$(document).on('click', '#approve_form', function(){
    var id = $("#approve_id").val();
		console.log(id);
    var url = $('meta[name="url"]').attr('content');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $('#approve_modal').modal('toggle');
    $.ajax({
      type: "POST",
      headers: { 'X-CSRF-TOKEN': csrf_token },
      url: url + '/admin/user/approve',
      data:{
        id:id,
      },
      dataType: "json",
      success: function (res) {
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.success);
        $("#users_list").load(" #users_list");
        $('.pending_list').DataTable();
        },
      error:function(res){
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.danger);
      },
    });

  });

	</script>
@endsection
