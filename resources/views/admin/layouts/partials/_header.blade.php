@if(auth()->user()->unreadNotifications->count())
<style media="screen">
.navbar-right__menu .nav-notification .nav-item-toggle:before {
  background: #20c95c;
}
</style>
@else
<style media="screen">
.navbar-right__menu .nav-notification .nav-item-toggle:before {
  background: #fff;
}
</style>
@endif
<style media="screen">
.navbar-right__menu .nav-notification__details p {
    font-size: 13px;
}
</style>
<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
          <a href="" class="sidebar-toggle">
              <img class="svg" src="{{ asset('img/svg/bars.svg') }}" alt="img">
          </a>
            <a class="navbar-brand" href="#"><img class="svg dark" src="{{asset('theme/assets/images/logo-wide.png')}}" alt="">
                <img class="light" src="{{asset('theme/assets/images/logo-wide.png')}} " alt="">
            </a>

            <form action="/" class="search-form">
                <span data-feather="search"></span>
                <input class="form-control mr-sm-2 box-shadow-none" type="search" placeholder="Search..."
                       aria-label="Search">
            </form>
            @include('layouts.partials._top_menu')
        </div>
        <!-- ends: navbar-left -->
        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-search d-none">
                    <a href="#" class="search-toggle">
                        <i class="la la-search"></i>
                        <i class="la la-times"></i>
                    </a>
                    <form action="/" class="search-form-topMenu">
                        <span class="search-icon" data-feather="search"></span>
                        <input class="form-control mr-sm-2 box-shadow-none" type="search" placeholder="Search..."
                               aria-label="Search">
                    </form>
                </li>
                <!-- ends: nav-message -->
                <li class="nav-notification">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            <span data-feather="bell"></span></a>
                        <div class="dropdown-wrapper">
                            <h2 class="dropdown-wrapper__title">Notifications  @if(auth()->user()->unreadNotifications->count())
                               <span class="badge-circle badge-success ml-1">{{auth()->user()->unreadNotifications->count()}}</span>
                               @endif</h2>
                               <ul>
                                 @forelse (auth()->user()->unreadNotifications as $notification)

                                   <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                       <div class="nav-notification__type nav-notification__type--success">
                                           <span data-feather="log-in"></span>
                                       </div>
                                       <div class="nav-notification__details">
                                           <p>
                                           <span href="" class="subject">
                                             {{$notification->data['body']}}
                                           </span>
                                           </p>
                                           <p>
                                             <span class="time-posted">{{ \Carbon\Carbon::parse($notification->created_at)->toDayDateTimeString()}}</span>
                                           </p>
                                       </div>
                                   </li>
                                   @empty
                                   <li>
                                       <a href="" class="dropdown-wrapper__more">no notifications available</a>
                                   </li>
                                   @endforelse
                               </ul>
                               @if(auth()->user()->unreadNotifications->count())
                                 <a href="{{route('admin.markNotification')}}" type="submit" class="dropdown-wrapper__more" >mark all as read</a>
                                 @endif
                        </div>
                    </div>
                </li>
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('images/profile.png') }}"
                                                                            alt="" class="rounded-circle"></a>
                        <div class="dropdown-wrapper">
                            <div class="nav-author__info">
                                <div class="author-img">
                                    <img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h6>{{ Auth::user()->name }}</h6>
                                    <span>Admin</span>
                                </div>
                            </div>
                            <div class="nav-author__options">
                                <ul>
                                    <li>
                                        <a href="">
                                            <span data-feather="user"></span> Password reset</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.notifications')}}">
                                            <span data-feather="bell"></span>Notifications</a>
                                    </li>
                                </ul>
                                <a href="{{ route('logout') }}" class="nav-author__signout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span data-feather="log-out"></span> Sign Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                    </div>
                </li>
                <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-search">
                    <span data-feather="search"></span>
                    <span data-feather="x"></span></a>
                <a href="#" class="btn-author-action">
                    <span data-feather="more-vertical"></span></a>
            </div>
        </div>
        <!-- ends: .navbar-right -->
    </nav>
</header>
@section('scripts')
  <script type="text/javascript">

  </script>
@endsection
