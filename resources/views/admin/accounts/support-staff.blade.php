@extends('admin.layouts.app')
@section('content')
  <div class="contents">
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="breadcrumb-main">
                 <h4 class="text-capitalize breadcrumb-title">Support</h4>
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
                          <table class="table mb-0 table-borderless staff_list" >
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
    $('.staff_list').DataTable();
    $('.active_inactive').change(function () {
        var status = $(this).prop('checked') === true ? 1 : 0;

        var id = $(this).data('id');
        var url = $('meta[name="url"]').attr('content');
        $.ajax({
          type: "GET",
          url: url + '/admin/accounts/status_change',
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
