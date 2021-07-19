@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="social-dash-wrap">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb-main">
                  <h4 class="text-capitalize breadcrumb-title">Knowledgebase</h4>
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
         <div class="knowledgebase py-50">
            <div class="row justify-content-center">
               <div class="cus-6 col-md-10">
                  <div class="kb text-center">
                     <div class="kb__header-search" tabindex="0">
                        <form class="kb__header-search-form">
                           <div class="input-group">
                              <div class="kb__select-wrapper">
                                 <select class="kb__select">
                                    <option value=" ">All products</option>
                                    <option value="kb">Articles</option>
                                    <option value="post">Posts</option>
                                    <option value="dvfaq">FAQ</option>
                                    <option value="page">Pages</option>
                                 </select>
                              </div>
                              <input type="text" class="form-control ui-autocomplete-input" placeholder="Search anything" name="s" autocomplete="off">
                              <div class="input-group-append">
                                 <button type="submit" class="btn">Search
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="knowledgebase-details">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="knowledgebase-breadcrumb">
                           <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Library</li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="knowledgebase__plugin-wrapper">
                     <div class="row">
                        <div class="col-xl-4 col-lg-12">
                           <div class="knowledgebase__list-plugin">
                              <h3>Introduction to Plugin</h3>
                           </div>
                        </div>
                        <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of plugins view your success and other stats</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <div class="accordion" id="accordionExample5">
                                       <div>
                                          <div id="headingOne">
                                             <div role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed knowledgebase__list-collapsed">
                                                <div class="changelog__accordingArrow">
                                                   <span data-feather="chevron-right"></span>
                                                </div>
                                                Log in and out of Plugins
                                             </div>
                                          </div>
                                          <div id="collapseOne" class="collapse collapse-area" aria-labelledby="headingOne" data-parent="#accordionExample5">
                                             <div class="knowledgebase__list">
                                                <ul>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                                   </li>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                                   </li>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                                   </li>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="knowledgebase__plugin-wrapper">
                     <div class="row">
                        <div class="col-xl-4 col-lg-12">
                           <div class="knowledgebase__list-plugin">
                              <h3>Productivity tools for your Plugin admin</h3>
                           </div>
                        </div>
                        <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <div class="accordion" id="accordionExample6">
                                       <div>
                                          <div id="headingtwo">
                                             <div role="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo" class="collapsed knowledgebase__list-collapsed">
                                                <div class="changelog__accordingArrow">
                                                   <span data-feather="chevron-right"></span>
                                                </div>
                                                Log in and out of Plugins
                                             </div>
                                          </div>
                                          <div id="collapsetwo" class="collapse collapse-area" aria-labelledby="headingtwo" data-parent="#accordionExample6">
                                             <div class="knowledgebase__list">
                                                <ul>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                                   </li>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                                   </li>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                 </li>
                                 <li>
                                    <div class="accordion" id="accordionExample7">
                                       <div>
                                          <div id="headingthree">
                                             <div role="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree" class="collapsed knowledgebase__list-collapsed">
                                                <div class="changelog__accordingArrow">
                                                   <span data-feather="chevron-right"></span>
                                                </div>
                                                Switch between accounts
                                             </div>
                                          </div>
                                          <div id="collapsethree" class="collapse collapse-area" aria-labelledby="headingthree" data-parent="#accordionExample7">
                                             <div class="knowledgebase__list">
                                                <ul>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                                   </li>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                                   </li>
                                                   <li>
                                                      <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="knowledgebase__plugin-wrapper">
                     <div class="row">
                        <div class="col-xl-4 col-lg-12">
                           <div class="knowledgebase__list-plugin">
                              <h3>Manage your account</h3>
                           </div>
                        </div>
                        <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="knowledgebase__plugin-wrapper">
                     <div class="row">
                        <div class="col-xl-4 col-lg-12">
                           <div class="knowledgebase__list-plugin">
                              <h3>Manage your account</h3>
                           </div>
                        </div>
                        <div class="col-xl-4 col-sm-5 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-5 offset-sm-1 mt-xl-0 mt-20">
                           <div class="knowledgebase__list">
                              <ul>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Log in and out of Plugins</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Switch between accounts</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Change your email</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('pages.knowledgebase.allArticle') }}">Reactivate your account</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="knowledgebase__hr"></div>
                  <div class="row justify-content-center align-items-center">
                     <div class="col-md-12">
                        <div class="knowledgebase__cta">
                           <h3>Still no luck? We can help!</h3>
                           <p>Contact us and we’ll get back to you as soon as possible.</p>
                           <div class="content-center">
                              <button type="button" class="btn btn-primary btn-default btn-squared btn-shadow-primary">Submit a Request</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection