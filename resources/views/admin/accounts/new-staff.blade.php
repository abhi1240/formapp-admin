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
        <div class="row">
           <div class="col-lg-12">
              <div class="breadcrumb-main">
                 <h4 class="text-capitalize breadcrumb-title">New Accounts</h4>
                 <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                       <a href="{{route('admin.create.account')}}" class="btn btn-sm btn-primary btn-add">
                       <i class="la la-plus"></i> Add New</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="row" >
           <div class="col-lg-12 mb-30">
              <div class="card">
                 <div class="card-header color-dark fw-500">
                    Staff List
                 </div>
                 <div class="card-body">
                    <div class="userDatatable global-shadow border-0 bg-white w-100">
                       <div class="table-responsive">
                          <table class="table mb-0 table-borderless pending_list" id="staff_table">
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
                                      <span class="userDatatable-title">Action</span>
                                   </th>
                                </tr>
                             </thead>
                             <tbody>
                               @isset($users)
                                @forelse($users as $key => $user)
                                <tr >
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
                                      <div class="userDatatable-content d-flex">
                                         <a  class="custom_btn_primary text-primary assign_job mr-2"  data-id="{{$user->id}}" data-toggle="tooltip" title="Assign Job"> <i class="la la-feather-alt p-2"></i> </a>
                                         <a  class="custom_btn_danger  text-danger destroy_staff" data-id="{{$user->id}}" data-toggle="tooltip" title="Delete"><i class="la la-trash p-2"></i></a>
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
  <div class="modal" id="assign_job_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm modal-info" role="document">
					<div class="modal-content">
            <form class="" >
              <input type="hidden" name="id" id="assign_job_id" value="">
              <div class="modal-body">
                  <div class="modal-info-body d-flex">
                      <div class="modal-info-text">
                        <div class="row">
                          <div class="col-md-10">
                            <div class="form-group">
                              <label for="">Select job to assign</label>
                              <div class="atbd-select-list d-flex">
                                  <div class="atbd-select ">
                                      <select name="rights" id="select_rights" class="form-control " required>
                                          <option value="">Select</option>
                                          <option value="0">Support</option>
                                          <option value="2">Image Quality Checker</option>
                                          <option value="3">Content Quality Controller</option>
                                      </select>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="" class="invisible">button</label>
                              <button type="button" class="btn btn-primary btn-sm " id="assign_job_form" >Assign</button>
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
                <button type="button" class="btn btn-success btn-outlined btn-sm" id="remove_form">Yes</button>
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
    $('#select_rights').select2({
      placeholder:'select  item from the list',
    });
  });
  $(document).on('click', '.assign_job', function(){
    var id = $(this).data('id');
    $('input[id=assign_job_id]').val(id);
    $('#assign_job_modal').modal('toggle');
  });
  $(document).on('click', '.destroy_staff', function(){
    var id = $(this).data('id');
    $('input[id=remove_id]').val(id);
    $('#destroy_modal').modal('toggle');
  });
  //remove function
  $(document).on('click', '#remove_form', function(){
    var id = $("#remove_id").val();

    var url = $('meta[name="url"]').attr('content');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $('#destroy_modal').modal('toggle');
    $.ajax({
      type: "POST",
      headers: { 'X-CSRF-TOKEN': csrf_token },
      url: url + '/admin/accounts/remove_acc',
      data:{
        id:id,
      },
      dataType: "json",
      success: function (res) {
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.success);
        $("#staff_table").load(" #staff_table");
        $('.pending_list').DataTable();
        },
      error:function(res){
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.error);
      },
    });

  });
  //assign_job_form
  $(document).on('click', '#assign_job_form', function(){
    var id = $("#assign_job_id").val();
    var rights = $("#select_rights").val();

    var url = $('meta[name="url"]').attr('content');
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $('#assign_job_modal').modal('toggle');
    $.ajax({
      type: "POST",
      headers: { 'X-CSRF-TOKEN': csrf_token },
      url: url + '/admin/accounts/assign_job',
      data:{
        id:id,
        rights:rights,
      },
      dataType: "json",
      success: function (res) {
        toastr.options.closeButton = true;
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 100;
        toastr.success(res.success);
        $("#staff_table").load(" #staff_table");
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
