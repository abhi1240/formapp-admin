@extends('layouts.app')
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
                                                <h6>Sign in to <span class="color-primary">Admin</span></h6>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="edit-profile__body">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-group mb-20">
                                                        <label for="username">Username or Email Address</label>
                                                        <input type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               id="email" placeholder="Email" name="email"
                                                               value="admin@gmail.com" required>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">password</label>
                                                        <div class="position-relative">
                                                            <input id="password-field" type="password"
                                                                   class="form-control @error('password') is-invalid @enderror"
                                                                   name="password" value="admin123">
                                                            <div
                                                                class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></div>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="signUp-condition signIn-condition">
                                                        <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" type="checkbox"
                                                                   id="check-1" {{ old('check-1') ? 'checked' : '' }}>
                                                            <label for="check-1">
                                                                <span class="checkbox-text">Keep me logged in</span>
                                                            </label>
                                                        </div>
                                                        <a href="{{ route('password.request') }}">forget password</a>
                                                    </div>
                                                    <div
                                                        class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button
                                                            class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                                                            sign in
                                                        </button>
                                                    </div>
                                                </form>
                                                <p class="social-connector text-center mb-sm-25 mb-15  mt-sm-30 mt-20">
                                                    <span>Or</span></p>
                                                <div
                                                    class="d-flex align-items-center justify-content-md-start justify-content-center">
                                                    <ul class="signUp-socialBtn">
                                                        <li>
                                                            <a href="#" class="btn text-dark px-30"><img class="svg" src="{{ asset('img/svg/google.svg') }}" alt="img"/> Sign up with Google
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class=" radius-md wh-48 content-center"><img
                                                                    class="svg" src="{{ asset('img/svg/facebook.svg') }}" alt="img"/>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="radius-md wh-48 content-center"><img
                                                                    class="svg" src="{{ asset('img/svg/twitter.svg') }}" alt="img"/>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
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
