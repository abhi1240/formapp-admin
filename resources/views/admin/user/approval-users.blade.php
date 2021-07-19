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
	});
	</script>
@endsection
