@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex align-items-center user-member__title mb-30 mt-30">
               <h4 class="text-capitalize">add information</h4>
            </div>
         </div>
      </div>
      <div class="card mb-50">
         <div class="row justify-content-center">
            <div class="col-sm-5 col-10">
               <div class="mt-40 mb-50">
                  <div class="edit-profile__body">
                     <form method="POST" action="{{ route('firestore.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="account-profile d-flex align-items-center mb-4 ">
                           <div class="ap-img pro_img_wrapper">
                              <input id="file-upload" type="file" name="image" class="d-none @error('image') is-invalid @enderror">
                              <!-- Profile picture image-->
                              <label for="file-upload">
                              <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="{{ asset('img/author/profile.png') }}" alt="profile">
                              <span class="cross" id="remove_pro_pic">
                              <span data-feather="camera"></span>
                              </span>
                              </label>
                              @error('image')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="account-profile__title">
                              <h6 class="fs-15 ml-20 fw-500 text-capitalize">profile photo</h6>
                           </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group mb-25">
                           <label for="name1">name</label>
                           <input type="text" class="form-control @error('name') is-invalid @enderror" id="name1" name="name" placeholder="Name" required>
                           @error('name')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group mb-25">
                           <label for="name2">Email</label>
                           <input type="email" class="form-control @error('email') is-invalid @enderror" id="name2" name="email" placeholder="sample@email.com" required>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group mb-25">
                           <label for="phoneNumber5">phone number</label>
                           <input type="tel" class="form-control" id="phoneNumber5" name="phone" placeholder="+440 2546 5236">
                        </div>
                        <div class="form-group mb-25">
                           <div class="countryOption">
                              <label for="countryOption">
                              country
                              </label>
                              <select class="js-example-basic-single js-states form-control" id="countryOption" name="country">
                                 <option value="USA">USA</option>
                                 <option value="Bangladesh">Bangladesh</option>
                                 <option value="Japan">Japan</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group mb-25">
                           <div class="cityOption">
                              <label for="cityOption">
                              city
                              </label>
                              <select class="js-example-basic-single js-states form-control" id="cityOption" name="city">
                                 <option value="Mymensingh">Mymensingh</option>
                                 <option value="Dhaka">Dhaka</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group mb-25">
                           <label for="name3">company name</label>
                           <input type="text" class="form-control" id="name3" name="company" placeholder="company">
                        </div>
                        <div class="form-group mb-25">
                           <label for="phoneNumber2">Position</label>
                           <input type="text" class="form-control" id="phoneNumber2" name="position" placeholder="Position">
                        </div>
                        <div class="form-group mb-25 status-radio">
                           <label class="mb-15" for="phoneNumber2">status</label>
                           <div class="d-flex">
                              <div class="radio-horizontal-list d-flex flex-wrap">
                                 <div class="radio-theme-default custom-radio ">
                                    <input class="radio" type="radio" name="status" value="active" id="radio-hl1" checked>
                                    <label for="radio-hl1">
                                    <span class="radio-text">Active</span>
                                    </label>
                                 </div>
                                 <div class="radio-theme-default custom-radio ">
                                    <input class="radio" type="radio" name="status" value="deactivated" id="radio-hl2">
                                    <label for="radio-hl2">
                                    <span class="radio-text">Deactivated</span>
                                    </label>
                                 </div>
                                 <div class="radio-theme-default custom-radio ">
                                    <input class="radio" type="radio" name="status" value="bloked" id="radio-hl3">
                                    <label for="radio-hl3">
                                    <span class="radio-text">bloked</span>
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="button-group d-flex pt-25 justify-content-end">
                           <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Submit
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection