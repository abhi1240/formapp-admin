<aside class="sidebar">
   <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
         <li class="menu-title">
            <span>Main menu </span>
         </li>
         {{-- form-filling --}}
         <li>
            <a href="{{ route('quality_checker.dashboard') }}"
               class="{{ Route::is('quality_checker.dashboard') ? 'active' : ''}}">
               <span data-feather="home" class="nav-icon"></span>
               <span class="menu-text">Dashboard</span>
            </a>
         </li>

         <li class="has-child {{ request()->is('quality_checker/images/*') ? 'open' : ''}}">
            <a href="" class="{{ request()->is('quality_checker/images/*') ? 'active' : ''}}">
            <span data-feather="image" class="nav-icon"></span>
            <span class="menu-text">Images</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('quality_checker.approved.images')  ? 'active' : '' }}"
                     href="{{ route('quality_checker.approved.images') }}">Approved Images</a>
               </li>
               <li>
                  <a class="{{ Route::is('quality_checker.pending.images')  ? 'active' : '' }}"
                     href="{{ route('quality_checker.pending.images') }}">Pending Images</a>
               </li>
               <li>
                  <a class="{{ Route::is('quality_checker.rejected.images')  ? 'active' : '' }}"
                     href="{{ route('quality_checker.rejected.images') }}">Rejected Images</a>
               </li>
            </ul>
         </li>

         <li>
            <a href="{{ route('quality_checker.my_account') }}"
               class="{{ Route::is('quality_checker.my_account') ? 'active' : ''}}">
               <span data-feather="user" class="nav-icon"></span>
               <span class="menu-text">My Account</span>
            </a>
         </li>

      </ul>
   </div>
</aside>
