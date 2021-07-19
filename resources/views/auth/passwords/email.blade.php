@extends('home-layouts.app')
@section('content')
    <div class="signUP-admin">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                    <div class="signUP-admin-left signIn-admin-left position-relative">
                        <div class="signUP-overlay">
                            <img class="svg signupTop" src="{{ asset('img/svg/signupTop.svg') }}" alt="img"/>
                            <img class="svg signupBottom" src="{{ asset('img/svg/signupBottom.svg') }}" alt="img"/>
                        </div><!-- End: .signUP-overlay  -->
                        <div class="signUP-admin-left__content">
                            <div
                                class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                <img class="svg dark" src="{{ asset('img/Logo_Dark.png') }}" alt="">
                            </div>
                            <h1>Bootstrap 4 Laravel Web Application</h1>
                        </div><!-- End: .signUP-admin-left__content  -->
                        <div class="signUP-admin-left__img">
                            <img class="img-fluid svg" src="{{ asset('img/svg/signupIllustration.svg') }}" alt="img"/>
                        </div><!-- End: .signUP-admin-left__img  -->
                    </div><!-- End: .signUP-admin-left  -->
                </div><!-- End: .col-xl-4  -->
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                    <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                        <div
                            class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                            <p class="mb-0">
                                Don't have an account?
                                <a href="{{ route('register') }}" class="color-primary">
                                    Sign up
                                </a>
                            </p>
                        </div><!-- End: .signUp-topbar  -->
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-12">
                                <div class="edit-profile mt-md-25 mt-0">
                                    <div class="card border-0">
                                        <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                            <div class="edit-profile__title">
                                                <h6>Admin <span class="color-primary">{{ __('Reset Password') }}</span></h6>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="edit-profile__body">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <form method="POST" action="{{ route('password.email') }}">
                                                    @csrf
                                                    <div class="form-group mb-20">
                                                        <label for="username">{{ __('E-Mail Address') }}</label>
                                                        <input type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               id="email" placeholder="Email" name="email"
                                                               value="{{ old('email') }}" required>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>

                                                    <div
                                                        class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button
                                                            class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                                                            {{ __('Send Password Reset Link') }}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- End: .card-body -->
                                    </div><!-- End: .card -->
                                </div><!-- End: .edit-profile -->
                            </div><!-- End: .col-xl-5 -->
                        </div>
                    </div><!-- End: .signUp-admin-right  -->
                </div><!-- End: .col-xl-8  -->
            </div>
        </div>
    </div><!-- End: .signUP-admin  -->
@endsection
