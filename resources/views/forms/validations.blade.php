@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <h4 class="text-capitalize breadcrumb-title">Form Validation</h4>
               <div class="breadcrumb-action justify-content-center flex-wrap">
                  <div class="action-btn">
                     <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                           <span class="input-icon icon-left">
                           <span data-feather="calendar"></span>
                           </span>
                           <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                           <span class="input-icon icon-right">
                           <span data-feather="chevron-down"></span>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown action-btn">
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="la la-download"></i> Export
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <span class="dropdown-item">Export With</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                        <i class="la la-print"></i> Printer</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-pdf"></i> PDF</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-text"></i> Google Sheets</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-excel"></i> Excel (XLSX)</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-file-csv"></i> CSV</a>
                     </div>
                  </div>
                  <div class="dropdown action-btn">
                     <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="la la-share"></i> Share
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                        <span class="dropdown-item">Share Link</span>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                        <i class="la la-facebook"></i> Facebook</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-twitter"></i> Twitter</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-google"></i> Google</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-feed"></i> Feed</a>
                        <a href="" class="dropdown-item">
                        <i class="la la-instagram"></i> Instagram</a>
                     </div>
                  </div>
                  <div class="action-btn">
                     <a href="" class="btn btn-sm btn-primary btn-add">
                     <i class="la la-plus"></i> Add New</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="form-element">
         <div class="row">
            <div class="col-lg-12">
               <div class="card card-default card-md mb-4">
                  <div class="card-header">
                     <h6>Custom Styles</h6>
                  </div>
                  <div class="card-body pb-md-50">
                     <form>
                        <div class="form-row mx-n15">
                           <div class="col-md-4 mb-20 px-15">
                              <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center">First
                              name</label>
                              <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" placeholder="Mark" required>
                           </div>
                           <div class="col-md-4 mb-20 px-15">
                              <label for="validationDefault02" class="il-gray fs-14 fw-500 align-center">Last
                              name</label>
                              <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" id="validationDefault02" placeholder="Clayton" required>
                           </div>
                           <div class="col-md-4 mb-20 px-15">
                              <label for="validationDefault012" class="il-gray fs-14 fw-500 align-center">Username</label>
                              <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" id="validationDefault012" placeholder="Username" required>
                           </div>
                        </div>
                        <div class="form-row mx-n15">
                           <div class="col-md-6 mb-20 px-15">
                              <label for="validationDefault03" class="il-gray fs-14 fw-500 align-center">City</label>
                              <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" id="validationDefault03" placeholder="City" required>
                           </div>
                           <div class="col-md-3 mb-20 px-15">
                              <label for="validationDefault04" class="il-gray fs-14 fw-500 align-center">State</label>
                              <select class="custom-select form-control select-arrow-none ih-medium  radius-xs b-light shadow-none color-light  fs-14" id="validationDefault04" required>
                                 <option selected disabled value="">State</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                              </select>
                           </div>
                           <div class="col-md-3 mb-20 px-15">
                              <label for="validationDefault05" class="il-gray fs-14 fw-500 align-center">Zip</label>
                              <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" id="validationDefault05" placeholder="Zip" required>
                           </div>
                        </div>
                        <div class="form-group mb-25 mt-1">
                           <div class="form-check pl-0">
                              <div class="checkbox-theme-default custom-checkbox ">
                                 <input class="checkbox" type="checkbox" id="check-1">
                                 <label for="check-1">
                                 <span class="checkbox-text color-gray">
                                 Agree to terms and conditions
                                 </span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-primary px-30" type="submit">Submit Form</button>
                     </form>
                  </div>
               </div>
               <!-- ends: .card -->
            </div>
            <div class="col-lg-12">
               <div class="card card-default card-md mb-4">
                  <div class="card-header">
                     <h6>Server Side</h6>
                  </div>
                  <div class="card-body pb-md-50">
                     <form class="was-validated">
                        <div class="form-row mx-n15">
                           <div class="col-md-4 mb-3 px-15">
                              <label for="validationServer01" class="il-gray fs-14 fw-500 align-center">First
                              name</label>
                              <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer01" placeholder="Mark" required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-4 mb-3 px-15">
                              <label for="validationServer02" class="il-gray fs-14 fw-500 align-center">Last
                              name</label>
                              <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer02" placeholder="Clayton" required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-4 mb-3 px-15">
                              <label for="validationServer12" class="il-gray fs-14 fw-500 align-center">Username</label>
                              <input type="text" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer12" placeholder="Username" required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                        <div class="form-row mx-n15">
                           <div class="col-md-6 mb-3 px-15">
                              <label for="validationServer03" class="il-gray fs-14 fw-500 align-center">City</label>
                              <input type="text" class="form-control is-valid ih-medium ip-light radius-xs b-light" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="City" required>
                              <div id="validationServer03Feedback" class="invalid-feedback">
                                 Please provide a valid city.
                              </div>
                           </div>
                           <div class="col-md-3 mb-3 px-15">
                              <label for="validationServer04" class="il-gray fs-14 fw-500 align-center">State</label>
                              <select class="custom-select is-valid form-control select-arrow-none ih-medium  radius-xs b-light shadow-none color-light  fs-14" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                 <option selected disabled value="">State</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                              </select>
                              <div id="validationServer04Feedback" class="invalid-feedback">
                                 Please select a valid state.
                              </div>
                           </div>
                           <div class="col-md-3 mb-3 px-15">
                              <label for="validationServer05" class="il-gray fs-14 fw-500 align-center">Zip</label>
                              <input type="text" class="form-control is-valid ih-medium ip-light radius-xs b-light" id="validationServer05" aria-describedby="validationServer05Feedback" placeholder="Zip" required>
                              <div id="validationServer05Feedback" class="invalid-feedback">
                                 Please provide a valid zip.
                              </div>
                           </div>
                        </div>
                        <div class="form-group mt-10 mb-25">
                           <div class="custom-control checkbox-theme-default custom-checkbox mb-3 pl-0">
                              <input type="checkbox" class="checkbox" id="customControlValidation1" required>
                              <label for="customControlValidation1">
                                 Agree to terms and conditions
                                 <div class="invalid-feedback">You must agree before submitting.</div>
                              </label>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-12 mb-30">
                              <input type="password" class="form-control is-invalid ih-medium ip-light radius-xs b-light" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-primary px-30" type="submit">Submit Form</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection