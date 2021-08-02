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
                  <h2 class="h2 g-color-black g-font-weight-600">Dashboard</h2>
                </header>
                <div class="g-mb-50">
                  @if (Auth::user()->rights == '0')
                    <a href="{{route('support.dashboard')}}" class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13"  >Dashboard</a>
                  @endif
                  @if (Auth::user()->rights == '1')
                    <a href="{{route('dashboard')}}" class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13"  >Dashboard</a>
                  @endif
                  @if (Auth::user()->rights == '2')
                    <a href="{{route('quality_checker.dashboard')}}" class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13"  >Dashboard</a>
                  @endif
                  @if (Auth::user()->rights == '3')
                    <a href="{{route('quality_controller.dashboard')}}" class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13"  >Dashboard</a>
                  @endif
                  @if (Auth::user()->rights == '4')
                    <a href="{{route('approval')}}" class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13"  >Processing...</a>
                  @endif


                </div>
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
