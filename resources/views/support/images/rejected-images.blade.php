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
	               <h4 class="text-capitalize breadcrumb-title">Rejected Images</h4>
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
	                        <table class="table mb-0 table-borderless rejected_list">
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

	  $('.rejected_list').DataTable();
	});
	$(document).on('click', '#img_popup', function(){
		var imgsrc = $(this).data('img');
		$('#img_id').attr('src',imgsrc);
    $('#img_modal').modal('toggle');
  });
	</script>

@endsection
