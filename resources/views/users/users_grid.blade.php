@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main user-member justify-content-sm-between ">
               <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                  <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                     <h4 class="text-capitalize fw-500 breadcrumb-title">user cards</h4>
                     <span class="sub-title ml-sm-25 pl-sm-25">274 Users</span>
                  </div>
                  <form action="/" class="d-flex align-items-center user-member__form my-sm-0 my-2">
                     <span data-feather="search"></span>
                     <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                  </form>
               </div>
               <div class="action-btn">
                  <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                  <i class="las la-plus fs-16"></i>Add New Member</a>
                  <!-- Modal -->
                  <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                           <div class="modal-header">
                              <h6 class="modal-title fw-500" id="staticBackdropLabel">Create project</h6>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span data-feather="x"></span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="new-member-modal">
                                 <form>
                                    <div class="form-group mb-20">
                                       <input type="text" class="form-control" placeholder="Duran Clayton">
                                    </div>
                                    <div class="form-group mb-20">
                                       <div class="category-member">
                                          <select class="js-example-basic-single js-states form-control" id="category-member">
                                             <option value="JAN">1</option>
                                             <option value="FBR">2</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group mb-20">
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Project description"></textarea>
                                    </div>
                                    <div class="form-group textarea-group">
                                       <label class="mb-15">status</label>
                                       <div class="d-flex">
                                          <div class="project-task-list__left d-flex align-items-center">
                                             <div class="checkbox-group d-flex mr-50 pr-10">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-1" checked>
                                                   <label for="check-grp-1" class="fs-14 color-light strikethrough">
                                                   status
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="checkbox-group d-flex mr-50 pr-10">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-2">
                                                   <label for="check-grp-2" class="fs-14 color-light strikethrough">
                                                   Deactivated
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="checkbox-group d-flex">
                                                <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                   <input class="checkbox" type="checkbox" id="check-grp-3">
                                                   <label for="check-grp-3" class="fs-14 color-light strikethrough">
                                                   bloked
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mb-25">
                                       <div class="form-group mb-10">
                                          <label for="name47">project member</label>
                                          <input type="text" class="form-control" id="name47" placeholder="Search members">
                                       </div>
                                       <ul class="d-flex flex-wrap mb-20 user-group-people__parent">
                                          <li>
                                             <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm1.png') }}" alt="author"></a>
                                          </li>
                                          <li>
                                             <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm2.png') }}" alt="author"></a>
                                          </li>
                                          <li>
                                             <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm3.png') }}" alt="author"></a>
                                          </li>
                                          <li>
                                             <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm4.png') }}" alt="author"></a>
                                          </li>
                                          <li>
                                             <a href="#"><img class="rounded-circle wh-34" src="{{ asset('img/tm5.png') }}" alt="author"></a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="d-flex new-member-calendar">
                                       <div class="form-group w-100 mr-sm-15 form-group-calender">
                                          <label for="datepicker">start Date</label>
                                          <div class="position-relative">
                                             <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy">
                                             <a href="#">
                                             <span data-feather="calendar"></span></a>
                                          </div>
                                       </div>
                                       <div class="form-group w-100 form-group-calender">
                                          <label for="datepicker2">End Date</label>
                                          <div class="position-relative">
                                             <input type="text" class="form-control" id="datepicker2" placeholder="mm/dd/yyyy">
                                             <a href="#">
                                             <span data-feather="calendar"></span></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="button-group d-flex pt-25">
                                       <button class="btn btn-primary btn-default btn-squared text-capitalize">add new project
                                       </button>
                                       <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Modal -->
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm1.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm2.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm3.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm4.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm5.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm6.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm1.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm2.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm3.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm4.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm5.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
         <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <!-- Profile Acoount -->
            <div class="card">
               <div class="card-body text-center pt-30 px-25 pb-0">
                  <div class="account-profile-cards  ">
                     <div class="ap-img d-flex justify-content-center">
                        <!-- Profile picture image-->
                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="{{ asset('img/tm6.png') }}" alt="profile">
                     </div>
                     <div class="ap-nameAddress">
                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">UI/UX Designer</p>
                     </div>
                     <div class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20">
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                        <span data-feather="mail"></span>message</button>
                        <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 follow radius-md">
                        <span class="las la-user-plus follow-icon"></span>follow</button>
                     </div>
                  </div>
                  <div class="card-footer mt-20 pt-20 pb-20 px-0">
                     <div class="profile-overview d-flex justify-content-between flex-wrap">
                        <div class="po-details">
                           <h6 class="po-details__title">$72,572</h6>
                           <span class="po-details__sTitle">Total Revenue</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">3,257</h6>
                           <span class="po-details__sTitle">order</span>
                        </div>
                        <div class="po-details">
                           <h6 class="po-details__title">74</h6>
                           <span class="po-details__sTitle">Products</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Profile Acoount End -->
         </div>
      </div>
   </div>
</div>
@endsection