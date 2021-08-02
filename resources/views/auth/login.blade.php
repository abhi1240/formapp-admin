@extends('home-layouts.app')
@section('content')
<div class="">
  <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-size-cover g-bg-bluegray-opacity-0_3--after" style="height: 140%; background-image: url(theme/assets/img-temp/1920x1080/img35.jpg);"></div>
        <!-- End Parallax Image -->

        <div class="container g-pt-100 g-pb-20">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5 flex-md-unordered align-self-center g-mb-80">
              <div class="g-bg-white rounded g-pa-50">
                <header class="text-center mb-4">
                  <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                </header>
                <!-- Form -->
                <p class="text-danger"></p>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                   <div class="mb-4">
                  <div class="input-group g-brd-primary--focus">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-primary">
                        <i class="icon-finance-067 u-line-icon-pro"></i>
                      </span>
                      <input id="email" type="email" required class="form-control g-color-black g-brd-left-none g-bg-white g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-15 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                </div>

                <div class="mb-4">
                  <div class="input-group g-brd-primary--focus">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-primary">
                        <i class="icon-media-094 u-line-icon-pro"></i>
                      </span>
                      <input id="password" type="password" required class="form-control g-color-black g-brd-left-none g-bg-white g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-15 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>

                <div class="row justify-content-between mb-4">
                  <div class="col align-self-center">
                    <label class="form-check-inline u-check g-pl-25 mb-0">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa g-rounded-2" ></i>
                      </div>
                      Keep signed in
                    </label>
                  </div>
                  <div class="col align-self-center text-right">
                    <a class="g-color-gray-dark-v4 g-color-primary--hover" href="{{ route('password.request') }}">Forgot password?</a>
                  </div>
                </div>

                <div class="g-mb-50">
                <input name="submit" type="submit" class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" value="Login"/>

                </div>

                @if(session()->has('Unauthorised'))
              <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close mr-2" data-dismiss="alert" aria-label="close">&times;</a>
                  {{ session()->get('Unauthorised') }}
              </div>
                @endif

                </form>
                <!-- End Form -->

                <footer class="text-center">

                </footer>
              </div>
            </div>

            <div class="col-md-6 flex-md-first align-self-center g-mb-80">
              <div class="mb-5">
                <h1 class="h3 g-color-white g-font-weight-600 mb-3">If opportunity doesn't knock,<br>build a door!</h1>
                {{-- <p class="g-color-white-opacity-0_8 g-font-size-12 text-uppercase">sed do eiusmod tempor</p> --}}
              </div>

              <div class="row">
                <div class="col-md-11 col-lg-9">
                  <!-- Icon Blocks -->
                  <div class="media mb-4">
                    <div class="d-flex mr-4">
                      <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                        <i class="icon-finance-168 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body align-self-center">
                      <p class="g-color-white mb-0">Form Filling software enables the replacement of paper-based images with manual data entry processes.</p>
                    </div>
                  </div>
                  <!-- End Icon Blocks -->

                  <!-- Icon Blocks -->
                  <div class="media mb-5">
                    <div class="d-flex mr-4">
                      <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                        <i class="icon-finance-193 u-line-icon-pro"></i>
                      </span>
                    </div>
                    <div class="media-body align-self-center">
                      <p class="g-color-white mb-0">Data classification, extraction and validation allow for the efficient and accurate entry of data to a computer.</p>
                    </div>
                  </div>
                  <!-- End Icon Blocks -->

                  <!-- Testimonials -->
                  <blockquote class="u-blockquote-v1 g-color-main rounded g-pl-60 g-pr-30 g-py-25 g-mb-40">A successful freelancer whose expertise is administrative services and digital marketing task.
                  </blockquote>
                  <div class="media">

                    <div class="media-body align-self-center">
                      <h4 class="h6 g-color-primary g-font-weight-600 g-mb-0">xxxxx xxx</h4>
                      <em class="g-color-white g-font-style-normal g-font-size-12">Admin</em>
                    </div>
                  </div>
                  <!-- End Testimonials -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection
