<div class="row">
   <div class="col-md-6">
      @if (Session::has('create'))
      <div class="alert-big alert alert-success alert-dismissible fade show" role="alert">
         <div class="alert-content">
            <h6 class='alert-heading'>Success</h6>
            <p>{{ Session::get('create') }}</p>
            <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
            <span data-feather="x" aria-hidden="true"></span>
            </button>
         </div>
      </div>
      <br>
      @endif
      @if (Session::has('update'))
      <div class="alert-big alert alert-info alert-dismissible fade show" role="alert">
         <div class="alert-content">
            <h6 class='alert-heading'>Update</h6>
            <p>{{ Session::get('update') }}</p>
            <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
            <span data-feather="x" aria-hidden="true"></span>
            </button>
         </div>
      </div>
      <br>
      @endif
      @if (Session::has('warning'))
      <div class="alert-big alert alert-warning alert-dismissible fade show" role="alert">
         <div class="alert-content">
            <h6 class='alert-heading'>Warning</h6>
            <p>{{ Session::get('create') }}</p>
            <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
            <span data-feather="x" aria-hidden="true"></span>
            </button>
         </div>
      </div>
      <br>
      @endif
      @if (Session::has('delete'))
      <div class="alert-big alert alert-danger alert-dismissible fade show" role="alert">
         <div class="alert-content">
            <h6 class='alert-heading'>Delete</h6>
            <p>{{ Session::get('delete') }}</p>
            <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
            <span data-feather="x" aria-hidden="true"></span>
            </button>
         </div>
      </div>
      <br>
      @endif
      @if (Session::has('exist'))
      <div class="alert-big alert alert-warning alert-dismissible fade show" role="alert">
         <div class="alert-content">
            <h6 class='alert-heading'>Exist</h6>
            <p>{{ Session::get('exist') }}</p>
            <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
            <span data-feather="x" aria-hidden="true"></span>
            </button>
         </div>
      </div>
      @endif
   </div>
   <div class="col-md-6">&nbsp;</div>
</div>