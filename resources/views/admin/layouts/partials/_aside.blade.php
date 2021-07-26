<aside class="sidebar">
   <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
         <li class="menu-title">
            <span>Main menu </span>
         </li>
         {{-- form-filling --}}
         <li>
            <a href="{{ route('dashboard') }}"
               class="{{ Route::is('dashboard') ? 'active' : ''}}">
               <span data-feather="home" class="nav-icon"></span>
               <span class="menu-text">Dashboard</span>
            </a>
         </li>
         <li class="menu-title m-top-30">
            <span>Applications </span>
         </li>

         <li class="has-child {{ request()->is('admin/user/*') ? 'open' : ''}}">
            <a href="" class="{{ request()->is('admin/user/*') ? 'active' : ''}}">
            <span data-feather="users" class="nav-icon"></span>
            <span class="menu-text">Users</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('admin.approve.users')  ? 'active' : '' }}"
                     href="{{ route('admin.approve.users') }}">Approved Users</a>
               </li>
               <li>
                  <a class="{{ Route::is('admin.pending.users')  ? 'active' : '' }}"
                     href="{{ route('admin.pending.users') }}">Pending Users</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('admin/images/*') ? 'open' : ''}}">
            <a href="{{ route('dashboard') }}" class="{{ request()->is('admin/images/*') ? 'active' : ''}}">
            <span data-feather="image" class="nav-icon"></span>
            <span class="menu-text">Images</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('approved.images')  ? 'active' : '' }}"
                     href="{{ route('approved.images') }}">Approved Images</a>
               </li>
               <li>
                  <a class="{{ Route::is('pending.images')  ? 'active' : '' }}"
                     href="{{ route('pending.images') }}">Pending Images</a>
               </li>
               <li>
                  <a class="{{ Route::is('rejected.images')  ? 'active' : '' }}"
                     href="{{ route('rejected.images') }}">Rejected Images</a>
               </li>
            </ul>
         </li>



         <li class="has-child {{ request()->is('admin/accounts/*') ? 'open' : ''}}">
            <a href="{{ route('dashboard') }}" class="{{ request()->is('admin/accounts/*') ? 'active' : ''}}">
            <span data-feather="monitor" class="nav-icon"></span>
            <span class="menu-text">Accounts</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('new.accounts')  ? 'active' : '' }}"
                     href="{{ route('new.accounts') }}">New Accounts</a>
               </li>
               <li>
                  <a class="{{ Route::is('support.staff')  ? 'active' : '' }}"
                     href="{{ route('support.staff') }}">Support</a>
               </li>
               <li>
                  <a class="{{ Route::is('image.quality.checker')  ? 'active' : '' }}"
                     href="{{ route('image.quality.checker') }}">Image Quality Checker</a>
               </li>
               <li>
                  <a class="{{ Route::is('content.quality.controller')  ? 'active' : '' }}"
                     href="{{ route('content.quality.controller') }}">Content Quality Controller</a>
               </li>
            </ul>
         </li>

         <li class="has-child {{ request()->is('admin/tables/*') ? 'open' : ''}}">
            <a href="{{ route('dashboard') }}" class="{{ request()->is('admin/tables/*') ? 'active' : ''}}">
            <span data-feather="settings" class="nav-icon"></span>
            <span class="menu-text">Tables</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('tables.languages')  ? 'active' : '' }}"
                     href="{{ route('tables.languages') }}">Languages</a>
               </li>
               <li>
                  <a class="{{ Route::is('tables.papers')  ? 'active' : '' }}"
                     href="{{ route('tables.papers') }}">Papers</a>
               </li>
            </ul>
         </li>
         {{-- end --}}
      </ul>
   </div>
</aside>
