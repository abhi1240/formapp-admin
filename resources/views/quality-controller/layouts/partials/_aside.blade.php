<aside class="sidebar">
   <div class="sidebar__menu-group">
      <ul class="sidebar_nav">
         <li class="menu-title">
            <span>Main menu </span>
         </li>
         {{-- form-filling --}}
         <li>
            <a href="{{ route('quality_controller.dashboard') }}"
               class="{{ Route::is('quality_controller.dashboard') ? 'active' : ''}}">
               <span data-feather="home" class="nav-icon"></span>
               <span class="menu-text">Dashboard</span>
            </a>
         </li>
         <li class="has-child {{ request()->is('quality_controller/jobs/*') ? 'open' : ''}}">
            <a href="" class="{{ request()->is('quality_controller/jobs/*') ? 'active' : ''}}">
            <span data-feather="monitor" class="nav-icon"></span>
            <span class="menu-text">Jobs</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('quality_controller.pending_jobs')  ? 'active' : '' }}"
                     href="{{ route('quality_controller.pending_jobs') }}">Pending Jobs</a>
               </li>
               <li>
                  <a class="{{ Route::is('quality_controller.approved_jobs')  ? 'active' : '' }}"
                     href="{{ route('quality_controller.approved_jobs') }}">Approved Jobs</a>
               </li>
               <li>
                  <a class="{{ Route::is('quality_controller.rejected_jobs')  ? 'active' : '' }}"
                     href="{{ route('quality_controller.rejected_jobs') }}">Rejected Jobs</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('quality_controller.my_account') }}"
               class="{{ Route::is('quality_controller.my_account') ? 'active' : ''}}">
               <span data-feather="user" class="nav-icon"></span>
               <span class="menu-text">My Account</span>
            </a>
         </li>



      </ul>
   </div>
</aside>
