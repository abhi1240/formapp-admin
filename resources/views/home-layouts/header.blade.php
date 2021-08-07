<header id="js-header" class="u-header u-header--static">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->
            <!-- Logo -->
            <a href="" class="navbar-brand">
              <img src="{{asset('theme/assets/images/logo-wide.png')}}" alt="Image Description">
            </a>
            <!-- End Logo -->

                <!-- Navigation -->
              @if(Auth::user())
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                <li class="nav-item  g-mx-10--lg g-mx-15--xl ">
                  <a href="{{ route('logout') }}" class="nav-link g-py-7 g-px-0" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Log Out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>

              </ul>
            </div>
            @else
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                <!-- Intro -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl active">
                  <a id="login_card" href="{{route('login')}}" class="nav-link g-py-7 g-px-0">Login</a>
                </li>
              </ul>
            </div>
            @endif
          </div>
        </nav>
      </div>
    </header>
