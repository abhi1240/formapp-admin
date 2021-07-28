@extends('admin.layouts.app')
@section('content')
	<div class="contents">
	   <div class="container-fluid">
	      <div class="row">
	         <div class="col-lg-12">
	            <div class="breadcrumb-main">
	               <h4 class="text-capitalize breadcrumb-title">Approved Users</h4>
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
	                        <table class="table mb-0 table-borderless approved_users">
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
	                                    <span class="userDatatable-title">Status</span>
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
                                        <div class="custom-control custom-switch switch-info switch-md ">
                                                <input type="checkbox" data-id="{{ $user->id }}" class="custom-control-input active_inactive"  id="switch-dynamic-badge{{ $user->id }}" {{ $user->status == 1 ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="switch-dynamic-badge{{ $user->id }}"></label>
                                            </div>
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
@endsection
@section('scripts')
	<script type="text/javascript">
	$(document).ready(function(){
	  $('.approved_users').DataTable();
		$('.active_inactive').change(function () {
        var status = $(this).prop('checked') === true ? 1 : 0;

        var id = $(this).data('id');
        var url = $('meta[name="url"]').attr('content');
        // console.log(status);
        // console.log(id);
        $.ajax({
          type: "GET",
          url: url + '/admin/user/seeder_status_change',
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
	});
	</script>
@endsection
