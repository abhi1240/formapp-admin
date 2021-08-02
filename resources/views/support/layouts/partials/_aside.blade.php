<aside class="sidebar">
   <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
         <li class="menu-title">
            <span>Main menu </span>
         </li>
         {{-- form-filling --}}
         <li>
            <a href="{{ route('support.dashboard') }}"
               class="{{ Route::is('support.dashboard') ? 'active' : ''}}">
               <span data-feather="home" class="nav-icon"></span>
               <span class="menu-text">Dashboard</span>
            </a>
         </li>
         <li class="menu-title m-top-30">
            <span>Applications </span>
         </li>

         <li class="has-child {{ request()->is('support/tables/*') ? 'open' : ''}}">
            <a href="{{ route('dashboard') }}" class="{{ request()->is('support/tables/*') ? 'active' : ''}}">
            <span data-feather="settings" class="nav-icon"></span>
            <span class="menu-text">Tables</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('support.tables.languages')  ? 'active' : '' }}"
                     href="{{ route('support.tables.languages') }}">Languages</a>
               </li>
               <li>
                  <a class="{{ Route::is('support.tables.papers')  ? 'active' : '' }}"
                     href="{{ route('support.tables.papers') }}">Papers</a>
               </li>
            </ul>
         </li>

         <li class="has-child {{ request()->is('support/images/*') ? 'open' : ''}}">
            <a href="" class="{{ request()->is('support/images/*') ? 'active' : ''}}">
            <span data-feather="image" class="nav-icon"></span>
            <span class="menu-text">Images</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('support.approved.images')  ? 'active' : '' }}"
                     href="{{ route('support.approved.images') }}">Approved Images</a>
               </li>
               <li>
                  <a class="{{ Route::is('support.pending.images')  ? 'active' : '' }}"
                     href="{{ route('support.pending.images') }}">Pending Images</a>
               </li>
               <li>
                  <a class="{{ Route::is('support.rejected.images')  ? 'active' : '' }}"
                     href="{{ route('support.rejected.images') }}">Rejected Images</a>
               </li>
            </ul>
         </li>

         <li>
            <a href="{{ route('support.my_account') }}"
               class="{{ Route::is('support.my_account') ? 'active' : ''}}">
               <span data-feather="user" class="nav-icon"></span>
               <span class="menu-text">My Account</span>
            </a>
         </li>
         {{-- end --}}
      </ul>
   </div>
</aside>
