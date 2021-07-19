@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">gallery</h4>
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
            <div class="row">
                <div class="col-md-12">
                    <!-- Filter Controls - Simple Mode -->
                    <div class="gallery-filter mb-sm-50 mb-30">
                        <ul class="simplefilter w-100 ap-tab-main px-sm-25 px-15 bg-white d-flex flex-wrap align-items-center radius-xl">
                            <li class="fltr-controls nav-link active" data-filter="all">All</li>
                            <li class="fltr-controls nav-link" data-filter="1">Web Design </li>
                            <li class="fltr-controls nav-link" data-filter="2">UI Design</li>
                            <li class="fltr-controls nav-link" data-filter="3">Wireframe Kits</li>
                            <li class="fltr-controls nav-link" data-filter="4">Presentation</li>
                        </ul>
                        <div class="push-down push-down--style">
                            <div class="filtr-container">
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Busy streets">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="Luminous night">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery2.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="3" data-sort="City wonders">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery3.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="4" data-sort="In production">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery4.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="Industrial site">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery5.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="3" data-sort="Peaceful lake">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery6.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="4" data-sort="Industrial site">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery7.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Peaceful lake">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="Industrial site">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery8.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="3" data-sort="Peaceful lake">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery9.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="4" data-sort="Industrial site">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery10.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Peaceful lake">
                                    <div class="card">
                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{ asset('img/gallery11.png') }}" alt="img" class="width-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
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
        </div>
    </div>
@endsection
