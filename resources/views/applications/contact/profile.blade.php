@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact-breadcrumb">
                        <div class="breadcrumb-main add-contact justify-content-sm-between ">
                            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                <div class="d-flex align-items-center add-contact__title justify-content-center mr-sm-25">
                                    <h4 class="text-capitalize fw-500 breadcrumb-title">Contacts</h4>
                                    <span class="sub-title ml-sm-25 pl-sm-25"></span>
                                </div>
                                <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                                    <span data-feather="search"></span>
                                    <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                </form>
                            </div>
                            <div class="action-btn">
                                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#add-contact">
                                    <i class="las la-plus fs-16"></i>Add New
                                </a>
                                <!-- Modal -->
                                <div class="modal fade add-contact" id="add-contact" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content radius-xl">
                                            <div class="modal-header">
                                                <h6 class="modal-title fw-500" id="staticBackdropLabel">Contact Information</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span data-feather="x"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="add-new-contact">
                                                    <form action="/">
                                                        <div class="form-group mb-20">
                                                            <label>Name:</label>
                                                            <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label>Email Address:</label>
                                                            <input type="text" class="form-control form-control-lg" placeholder="Email Address">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label>Phone Number:</label>
                                                            <input type="text" class="form-control form-control-lg" placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label>Position:</label>
                                                            <input type="text" class="form-control form-control-lg" placeholder="Position">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label>Company Name:</label>
                                                            <input type="text" class="form-control form-control-lg" placeholder="Company Name">
                                                        </div>
                                                        <div class="button-group d-flex pt-20">
                                                            <button class="btn btn-primary btn-default btn-squared ">add new Contact
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
                    <!-- ends: contact-breadcrumb -->
                </div>
            </div>
            <div class="row contact-card-group">
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm9.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Grant Marshall</h6>
                                    <span class="cp-info__designation">User Interface Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (861) 550-2796
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            marshall@yahoo.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            225 Bills Place
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm10.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Pena Valdez</h6>
                                    <span class="cp-info__designation">User Interface Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (909) 445-2527
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            valdez@yahoo.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            266 Tiffany Place
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm11.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Jessica Miles</h6>
                                    <span class="cp-info__designation">Product Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (824) 487-2755
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            miles@mail.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            240 Hillel Place
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm12.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Natasha Gamble</h6>
                                    <span class="cp-info__designation">Motion Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (980) 424-3729
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            gamble@outlook.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            463 Harbor Court
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm13.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Natasha Gamble</h6>
                                    <span class="cp-info__designation">Motion Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (980) 424-3729
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            gamble@outlook.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            463 Harbor Court
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm14.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Natasha Gamble</h6>
                                    <span class="cp-info__designation">Motion Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (980) 424-3729
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            gamble@outlook.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            463 Harbor Court
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm6.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Natasha Gamble</h6>
                                    <span class="cp-info__designation">Motion Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (980) 424-3729
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            gamble@outlook.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            463 Harbor Court
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
                <div class="col-xl-3 mb-25">
                    <div class="card contact-card">
                        <div class="card-body text-center pt-30 px-25 pb-0">
                            <div class="card__more-action dropdown dropdown-click">
                                <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </button>
                                <div class="dropdown-default dropdown-menu dropdown-bottomLeft dropdown-menu-right">
                                    <a class="dropdown-item" href="#">view</a>
                                    <a class="dropdown-item" href="#">edit</a>
                                    <a class="dropdown-item" href="#">delete</a>
                                </div>
                            </div>
                            <div class="contact-profile-card text-center">
                                <div class="cp-img d-flex justify-content-center">
                                    <img class="cp-img__main" src="{{ asset('img/tm5.png') }}" alt="Strikingdash Contact">
                                </div>
                                <div class="cp-info">
                                    <h6 class="cp-info__title">Natasha Gamble</h6>
                                    <span class="cp-info__designation">Motion Designer</span>
                                </div>
                            </div>
                            <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                <ul class="c-info-list">
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="phone"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            +1 (980) 424-3729
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="mail"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            gamble@outlook.com
                                        </p>
                                    </li>
                                    <li class="c-info-list__item d-flex">
                                        <div class="c-info-item-icon">
                                            <span data-feather="map-pin"></span>
                                        </div>
                                        <p class="c-info-item-text">
                                            463 Harbor Court
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end: card -->
                </div>
                <!-- ends: col-xl-3 -->
            </div>
        </div>
    </div>
@endsection
