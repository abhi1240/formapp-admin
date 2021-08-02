@extends('quality-controller.layouts.app')
@section('content')
  <div class="contents">
      <div class="profile-setting ">
          <div class="container-fluid">
              <div class="row mt-3">
                  <div class="col-xl-3 col-lg-4 col-sm-5">
                      <div class="card mb-25">
                          <div class="card-body text-center p-0">
                              <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                  <div class="ap-img mb-20 pro_img_wrapper">
                                      <label for="file-upload">
                                          <!-- Profile picture image-->
                                          @if($qcchecker->profile_pic_url)
                                            <img class="ap-img__main rounded-circle wh-120" src="{{$qcchecker->profile_pic_url}}" alt="profile">
                                          @else
                                            <img class="ap-img__main rounded-circle wh-120" src="{{ asset('img/author/profile.png') }}" alt="profile">
                                          @endif

                                      </label>
                                  </div>

                                  <div class="ap-nameAddress pb-3">
                                      <h5 class="ap-nameAddress__title">{{$qcchecker->name}}</h5>
                                      <p class="ap-nameAddress__subTitle fs-14 m-0">{{$qcchecker->email}}</p>
                                      <p class="ap-nameAddress__subTitle fs-14 m-0">Image Content Controller</p>

                                  </div>
                                  <button type="button" class="btn btn-sm btn-outline-primary btn-rounded upload_profile_pic" name="button">Change Profile Photo</button>
                                  <form class="mt-1" action="{{route('quality_controller.upload.profile.photo')}}" method="post" enctype="multipart/form-data" id="profile-tab" style="display:none;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$qcchecker->id}}">
                                    <div class="row">
                                      <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                           <label for="" class="invisible">Profile photo <span >(Optional)</span> </label>
                                           <input type="file" class="form-control"  placeholder="upload profpic" name="profile_pic">
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-sm btn-outline-primary btn-block" name="button"> Upload</button>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                              </div>
                              <div class="ps-tab p-20 pb-25">
                                  <div class="nav flex-column text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                          <span data-feather="user"></span>Edit profile</a>
                                      <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="false">
                                          <span data-feather="lock"></span>Reset Password</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Profile Acoount End -->
                  </div>
                  <div class="col-xl-9 col-lg-8 col-sm-7">
                      <div class="">
                          <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                  <!-- Edit Profile -->
                                  <div class="edit-profile">
                                      <div class="card">

                                          <div class="card-header px-sm-25 px-3">
                                              <div class="edit-profile__title">
                                                  <h6>Edit Profile</h6>
                                                  <span class="fs-13 color-light fw-400">Set up your personal
                                                          information</span>
                                              </div>
                                              @if ($errors->any())
                                                 <div class="alert alert-danger">
                                                   <ul>
                                                       @foreach ($errors->all() as $error)
                                                         <li>{{ $error }}</li>
                                                       @endforeach
                                                   </ul>
                                                 </div><br />
                                               @endif
                                              @if(session()->has('error'))
                                            <div class="alert alert-danger alert-dismissable">
                                              <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ session()->get('error') }}
                                            </div>
                                              @endif
                                              @if(session()->has('success'))
                                            <div class="alert alert-success alert-dismissable">
                                              <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ session()->get('success') }}
                                            </div>
                                              @endif
                                              @if(session()->has('warning'))
                                            <div class="alert alert-warning alert-dismissable">
                                              <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ session()->get('warning') }}
                                            </div>
                                              @endif
                                                @if(session()->has('info'))
                                             <div class="alert alert-info alert-dismissable">
                                               <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                                                 {{ session()->get('info') }}
                                             </div>
                                               @endif
                                                @if(session()->has('danger'))
                                             <div class="alert alert-danger alert-dismissable">
                                               <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                                                 {{ session()->get('danger') }}
                                             </div>
                                               @endif
                                          </div>

                                          <div class="card-body">
                                              <div class="row justify-content-center">
                                                  <div class="col-xl-6 col-lg-8 col-sm-10">
                                                      <div class="edit-profile__body mx-lg-20">
                                                        <form class="" action="{{route('update.quality_controller_info')}}" method="post">
                                                          @csrf
                                                          <input type="hidden" name="id" value="{{$qcchecker->id}}">
                                                              <div class="form-group mb-20">
                                                                  <label for="names">name</label>
                                                                  <input type="text" class="form-control" name="name" @isset($qcchecker->name)
                                                                    value="{{$qcchecker->name}}"
                                                                  @endisset>
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="phoneNumber1">User Id</label>
                                                                  <input type="text" class="form-control" name="seeder_id"   @isset($qcchecker->user_id)
                                                                    value="{{$qcchecker->user_id}}"
                                                                  @endisset readonly>
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="company1">company name</label>
                                                                  <input type="text" class="form-control" name="company_name" @isset($qcchecker->company_name)
                                                                    value="{{$qcchecker->company_name}}"
                                                                  @endisset >
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="website">Position</label>
                                                                  <input type="text" class="form-control" name="position" @isset($qcchecker->position)
                                                                    value="{{$qcchecker->position}}"
                                                                  @endisset >
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="userBio">Primary email address</label>
                                                                  <input type="email" class="form-control" name="email" @isset($qcchecker->email)
                                                                    value="{{$qcchecker->email}}"
                                                                  @endisset >
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="userBio">Linked account</label>
                                                                  <input type="text" class="form-control" name="linked_account" @isset($qcchecker->linked_account)
                                                                    value="{{$qcchecker->linked_account}}"
                                                                  @endisset>
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="userBio">Website</label>
                                                                  <input type="text" class="form-control" name="website" @isset($qcchecker->website)
                                                                    value="{{$qcchecker->website}}"
                                                                  @endisset >
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="userBio">Phone number</label>
                                                                  <input type="text" class="form-control" name="phone_num" @isset($qcchecker->phone_num)
                                                                    value="{{$qcchecker->phone_num}}"
                                                                  @endisset >
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="userBio">Office number</label>
                                                                  <input type="text" class="form-control" name="office_num" @isset($qcchecker->office_num)
                                                                    value="{{$qcchecker->office_num}}"
                                                                  @endisset >
                                                              </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="userBio">Address</label>
                                                                  <textarea  class="form-control" name="address" @isset($qcchecker->address)
                                                                    value="{{$qcchecker->address}}"
                                                                  @endisset></textarea>
                                                              </div>
                                                              <div class="button-group d-flex flex-wrap pt-30 mb-15">
                                                                  <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">update profile
                                                                  </button>
                                                                  <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                  </button>
                                                              </div>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Edit Profile End -->
                              </div>

                              <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                                  <!-- Edit Profile -->
                                  <div class="edit-profile">
                                      <div class="card">
                                          <div class="card-header  px-sm-25 px-3">
                                              <div class="edit-profile__title">
                                                  <h6>change password</h6>
                                                  <span class="fs-13 color-light fw-400">Change or reset your account
                                                          password</span>
                                              </div>
                                          </div>
                                          <div class="card-body">
                                              <div class="row justify-content-center">
                                                  <div class="col-lg-6">
                                                      <div class="edit-profile__body mx-lg-20">
                                                        <form class="" action="{{route('quality_controller.reset-password')}}" method="post" >
                                                          @csrf
                                                          <input type="hidden" name="id" value="{{$qcchecker->id}}">
                                                          <div class="form-group mb-20">
                                                              <label for="name">Current Password</label>
                                                              <input type="text" name="current_password" class="form-control" id="name" value="" placeholder="Enter Current Password">
                                                          </div>
                                                              <div class="form-group mb-20">
                                                                  <label for="name">New Password</label>
                                                                  <input type="text" name="password" class="form-control" id="name" value="" placeholder="Enter Password">
                                                              </div>
                                                              <small id="passwordHelpInline" class="text-light fs-13">Minimum
                                                                  6
                                                                  characters
                                                              </small>
                                                              <div class="form-group mb-1">
                                                                  <label for="password-field">new password</label>
                                                                    <input id="password-field" type="password" class="form-control pr-50" name="password_confirmation" value="" placeholder="Confirm Password">
                                                                  </div>
                                                                  <small id="passwordHelpInline" class="text-light fs-13">Minimum
                                                                      6
                                                                      characters
                                                                  </small>
                                                              </div>
                                                              <div class="button-group d-flex flex-wrap pt-45 mb-35">
                                                                  <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Save Changes
                                                                  </button>
                                                                  <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                  </button>
                                                              </div>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Edit Profile End -->
                              </div>

                                  <!-- Edit Profile End -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection
{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('vendor_assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor_assets/js/charts.js') }}"></script>
<script type="text/javascript">
$('.upload_profile_pic').click(function () {
  $('#profile-tab').show();
  $('.upload_profile_pic').hide();
});
</script>
@endsection
