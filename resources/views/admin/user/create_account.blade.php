@extends('admin.layouts.app')
@section('content')
  <div class="contents">
      <div class="container-fluid">
         <div class=" checkout wizard8 global-shadow border-0 px-sm-50 px-20 mb-30 bg-white radius-xl w-100 mt-30">
            <div class="row justify-content-center">
               <div class="col-xl-12">

                  <div class="row justify-content-center">
                     <div class="col-xl-5">
                       <div class="card checkout-shipping-form px-30 pt-2 pb-30 border-0">
                       <div class="card-header border-0 align-content-start pb-sm-0 pb-1 px-0">
                           <h4 class="fw-500">Create Account</h4>
                       </div>
                       <div class="card-body px-0 pb-0">
                          <div class="edit-profile__body">
                                <img class="svg w-100" src="{{ asset('img/svg/progress1.svg') }}" alt="img">
                          </div>
                          <div class="mt-30">
                            @if(session()->has('username'))
                         <div class="alert alert-info alert-dismissable">
                           <h5>UserName/Email : <span>{{ session()->get('username') }}</span> </h5>
                         </div>
                           @endif
                           @if(session()->has('password'))
                        <div class="alert alert-info alert-dismissable">
                          <h5>Password : <span>{{ session()->get('password') }}</span> </h5>
                        </div>
                          @endif
                          </div>
                       </div>

                    </div>
                     </div>
                     <div class="col-xl-7 col-lg-8 col-sm-10">
                        <div class="card checkout-shipping-form h-100vh border-0 p-2">
                          @if ($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div><br />
                          @endif
                          @if(session()->has('success'))
                          <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                              {{ session()->get('success') }}
                          </div>
                            @endif
                            <!-- info -->
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
                           <div class="card-header border-0 align-content-start pb-sm-0 pb-1 px-0">
                              <h4 class="fw-500">Please create your account</h4>
                           </div>
                           <div class="card-body p-0">
                              <div class="edit-profile__body">
                                 <form action="{{route('admin.store.account')}}" method="post">
                                   @csrf
                                    <div class="form-group">
                                       <label for="name1">Name</label>
                                       <input type="text" class="form-control" id="name" name="name" placeholder="Usename" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="name2">Email</label>
                                       <input type="email" class="form-control" id="email " name="email" placeholder="username@email.com" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="name1">Phone number</label>
                                       <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="phone number" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="">Select Broker <span class="mand-span">*</span> </label>
                                       <div class="atbd-select-list d-flex">
                                           <div class="atbd-select w-100">
                                               <select name="rights"  class="form-control" id="player_broker_select">
                                                   <option value="">Select position</option>
                                                   <option value="0">Image Seeder</option>
                                                   <option value="1">Data Entry</option>
                                               </select>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="button-group d-flex pt-20 mb-20 ">
                                       <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save<i class="ml-10 mr-0 las la-arrow-right"></i></button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- ends: card -->
                     </div>
                     <!-- ends: col -->
                  </div>
               </div>
               <!-- ends: col -->
            </div>
         </div>
         <!-- End: .global-shadow-->
      </div>
   </div>
@endsection
