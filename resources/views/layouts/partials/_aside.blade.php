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
         {{-- end --}}

         <li class="menu-title m-top-30">
            <span>Theme options </span>
         </li>

         <li class="has-child {{ request()->is('dashboards/*') ? 'open' : ''}}">
            <a href="" class="{{ request()->is('dashboards/*') ? 'active' : ''}}">
            <span data-feather="home" class="nav-icon"></span>
            <span class="menu-text">Dashboard</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('dashboards.index')  ? 'active' : ''}}"
                     href="{{ route('dashboards.index') }}">Social Media</a>
               </li>
               <li>
                  <a class="{{ Route::is('dashboards.business') ? 'active' : ''}}"
                     href="{{ route('dashboards.business') }}">FineTech / Business</a>
               </li>
               <li>
                  <a class="{{ Route::is('dashboards.performance') ? 'active' : ''}}"
                     href="{{ route('dashboards.performance') }}">Site Performance</a>
               </li>
               <li>
                  <a class="{{ Route::is('dashboards.ecommerce') ? 'active' : ''}}"
                     href="{{ route('dashboards.ecommerce') }}">Ecommerce</a>
               </li>
               <li>
                  <a class="{{ Route::is('dashboards.crm') ? 'active' : ''}}"
                     href="{{ route('dashboards.crm') }}">CRM <span class="badge badge-success menuItem">New</span></a>
               </li>
               <li>
                  <a class="{{ Route::is('dashboards.sales') ? 'active' : ''}}"
                     href="{{ route('dashboards.sales') }}">Sales Performance <span class="badge badge-success menuItem">New</span></a>
               </li>
            </ul>
         </li>
         <li class="has-child">
            <a href="#">
            <span data-feather="layout" class="nav-icon"></span>
            <span class="menu-text">Layouts </span>
            <span class="toggle-icon"></span>
            <span class="badge badge-success menuItem">New</span>
            </a>
            <ul class="subMenu">
               <li class="l_sidebar">
                  <a href="#" data-layout="light">Light Mode</a>
               </li>
               <li class="l_sidebar">
                  <a href="#" data-layout="dark">Dark Mode</a>
               </li>
               <li class="l_navbar">
                  <a href="#" data-layout="top">Top Menu</a>
               </li>
               <li class="l_navbar">
                  <a href="#" data-layout="side">Side Menu</a>
               </li>
               <li class="layout">
                  <a href="{{ url('setlayout/rtl') }}">RTL</a>
               </li>
               <li class="layout">
                  <a href="{{ url('setlayout/ltr') }}">LTR</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('pages.changelog') }}" class="{{ Route::is('pages.changelog') ? 'active' : ''}}">
            <span data-feather="activity" class="nav-icon"></span>
            <span class="menu-text">Changelog</span>
            <span class="badge badge-primary menuItem">1.1.0</span>
            </a>
         </li>
         <li class="menu-title m-top-30">
            <span>Applications </span>
         </li>
         <li class="has-child {{ request()->is('applications/email/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('applications/email/*') ? 'active' : ''}}">
            <span data-feather="mail" class="nav-icon"></span>
            <span class="menu-text">Email</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('applications.email')  ? 'active' : '' }}"
                     href="{{ route('applications.email') }}">Inbox</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.readEmail')  ? 'active' : '' }}"
                     href="{{ route('applications.readEmail') }}">Read Email</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('applications.chat') }}"
               class="{{ Route::is('applications.chat')  ? 'active' : '' }}">
            <span data-feather="message-square" class="nav-icon"></span>
            <span class="menu-text">Chat</span>
            </a>
         </li>
         <li class="has-child {{ request()->is('applications/ecommerce/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('applications/ecommerce/*') ? 'active' : ''}}">
            <span data-feather="shopping-cart" class="nav-icon"></span>
            <span class="menu-text">eCommerce</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('applications.ecommerce.products') }} "
                     class="{{ Route::is('applications.ecommerce.products')  ? 'active': '' }}">Products</a>
               </li>
               <li>
                  <a href="{{ route('applications.ecommerce.productDetails') }}"
                     class="{{ Route::is('applications.ecommerce.productDetails')  ? 'active': '' }}">Product
                  Details</a>
               </li>
               <li>
                  <a href="{{ route('applications.ecommerce.addProduct') }}"
                     class="{{ Route::is('applications.ecommerce.addProduct')  ? 'active': '' }}">Product Add</a>
               </li>
               <li>
                  <a href="{{ route('applications.ecommerce.editProduct') }}"
                     class="{{ Route::is('applications.ecommerce.editProduct')  ? 'active': '' }}">Product
                  Edit</a>
               </li>
               <li>
                  <a href="{{ route('applications.ecommerce.cart') }}"
                     class="{{ Route::is('applications.ecommerce.cart')  ? 'active': '' }}">Cart</a>
               </li>
               <li>
                  <a href="{{ route('applications.ecommerce.orders') }}"
                     class="{{ Route::is('applications.ecommerce.orders')  ? 'active': '' }}">Orders</a>
               </li>
               <li>
                  <a href="{{ route('applications.ecommerce.sellers') }}"
                     class="{{ Route::is('applications.ecommerce.sellers')  ? 'active': '' }}">Sellers</a>
               </li>
               <li>
                  <a href="{{ route('applications.ecommerce.invoice') }}"
                     class="{{ Route::is('applications.ecommerce.invoice') ? 'active': '' }}">Invoices</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('applications/social-app/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('applications/social-app/*') ? 'active' : ''}}">
            <span data-feather="user" class="nav-icon"></span>
            <span class="menu-text">Social App</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('applications.profile') }}"
                     class="{{ Route::is('applications.profile') ? 'active': '' }}">Profile</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('projects/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('projects/*') ? 'active' : ''}}">
            <span data-feather="layout" class="nav-icon"></span>
            <span class="menu-text">Project</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('projects.index') ? 'active' : '' }}"
                     href="{{ route('projects.index') }}">Project Grid</a>
               </li>
               <li>
                  <a class="{{ Route::is('projects.project_table') ? 'active' : '' }}"
                     href="{{ route('projects.project_table') }}">Project List</a>
               </li>
               <li>
                  <a class="{{ Route::is('projects.create') ? 'active' : '' }}"
                     href="{{ route('projects.create') }}">Create Project</a>
               </li>
               <li>
                  <a class="{{ Route::is('projects.details') ? 'active' : '' }}"
                     href="{{ route('projects.details') }}">Project Details</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('applications.calendar') }}"
               class="{{  Route::is('applications.calendar')  ? 'active' : '' }}">
            <span data-feather="calendar" class="nav-icon"></span>
            <span class="menu-text">Calendar</span>
            </a>
         </li>
         <li class="has-child {{ request()->is('applications/users/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('applications/users/*') ? 'active' : ''}}">
            <span data-feather="users" class="nav-icon"></span>
            <span class="menu-text">Users</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('applications.users.team')  ? 'active' : '' }}"
                     href="{{ route('applications.users.team') }}">Team</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.users.usersGrid')  ? 'active' : '' }}"
                     href="{{ route('applications.users.usersGrid') }}">Users Grid <span class="badge badge-success menuItem">New</span></a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.users.usersList')  ? 'active' : '' }}"
                     href="{{ route('applications.users.usersList') }}">Users List</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.users.users')  ? 'active' : '' }}"
                     href="{{ route('applications.users.users') }}">Users Grid Style</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.users.usersGroup')  ? 'active' : '' }}"
                     href="{{ route('applications.users.usersGroup') }}">Users Group</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.users.addUser')  ? 'active' : '' }}"
                     href="{{ route('applications.users.addUser') }}">Add User <span class="badge badge-success menuItem">New</span></a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.users.usersDatatable')  ? 'active' : '' }}"
                     href="{{ route('applications.users.usersDatatable') }}">Users Table</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('applications/contact/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('applications/contact/*') ? 'active' : ''}}">
            <span data-feather="user-check" class="nav-icon"></span>
            <span class="menu-text">Contact</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('applications.contactProfile')  ? 'active': '' }}"
                     href="{{ route('applications.contactProfile') }}">Contact Grid</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.contactList')  ? 'active': '' }}"
                     href="{{ route('applications.contactList') }}">Contact List</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.contactCreate')  ? 'active': '' }}"
                     href="{{ route('applications.contactCreate') }}">Contact Create <span class="badge badge-success menuItem">New</span></a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('applications.note') }}" class="{{ Route::is('applications.note')  ? 'active': '' }}">
            <span data-feather="bookmark" class="nav-icon"></span>
            <span class="menu-text">Note</span>
            </a>
         </li>
         <li>
            <a href="{{ route('applications.todo') }}" class="{{ Route::is('applications.todo')  ? 'active': '' }}">
            <span data-feather="activity" class="nav-icon"></span>
            <span class="menu-text">To-Do</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.kanbanBoard') }}" class="{{ Route::is('pages.kanbanBoard')  ? 'active': '' }}">
            <span data-feather="columns" class="nav-icon"></span>
            <span class="menu-text">Kanban Board</span>
            <span class="badge badge-success menuItem">New</span>
            </a>
         </li>
         <li class="has-child {{ request()->is('applications/import-export*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('applications/import-export*') ? 'active' : ''}}">
            <span data-feather="repeat" class="nav-icon"></span>
            <span class="menu-text">Import & Export</span>
            <span class="badge badge-success menuItem">New</span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('applications.import')  ? 'active': '' }}"
                     href="{{ route('applications.import') }}">Import</a>
               </li>
               <li>
                  <a class="{{ Route::is('applications.export')  ? 'active': '' }}"
                     href="{{ route('applications.export') }}">Export</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('pages.fileManager') }}" class="{{ Route::is('pages.fileManager')  ? 'active': '' }}">
            <span data-feather="file" class="nav-icon"></span>
            <span class="menu-text">File Manager</span>
            <span class="badge badge-success menuItem">New</span>
            </a>
         </li>
         <li class="menu-title m-top-30">
            <span>CRUD</span>
         </li>
         <li class="has-child {{ request()->is('firestore*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('firestore*') ? 'active' : ''}}">
            <span data-feather="repeat" class="nav-icon"></span>
            <span class="menu-text">Laravel Crud</span>
            <span class="toggle-icon"></span>
            <span class="badge badge-success menuItem">New</span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('firestore.all')  ? 'active': '' }}"
                     href="{{ route('firestore.all') }}">View All</a>
               </li>
               <li>
                  <a class="{{ Route::is('firestore.addNew')  ? 'active': '' }}"
                     href="{{ route('firestore.addNew') }}">Add New</a>
               </li>
            </ul>
         </li>
         <li class="menu-title m-top-30">
            <span>Features</span>
         </li>
         <li class="has-child {{ request()->is('components/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('components/*') ? 'active' : ''}}">
            <span data-feather="layers" class="nav-icon"></span>
            <span class="menu-text">UI Elements</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('components.alert')  ? 'active' : '' }}"
                     href="{{ route('components.alert') }}">Alert</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.avatar')  ? 'active' : '' }}"
                     href="{{ route('components.avatar') }}">Avatar</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.badge')  ? 'active' : '' }}"
                     href="{{ route('components.badge') }}">Badge</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.breadcrumbs')  ? 'active' : '' }}"
                     href="{{ route('components.breadcrumbs') }}">Breadcrumb</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.buttons')  ? 'active' : '' }}"
                     href="{{ route('components.buttons') }}">Button</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.cards')  ? 'active' : '' }}"
                     href="{{ route('components.cards') }}">Cards</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.carousel')  ? 'active' : '' }}"
                     href="{{ route('components.carousel') }}">Carousel</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.checkbox')  ? 'active' : '' }}"
                     href="{{ route('components.checkbox') }}">Checkbox</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.collapse')  ? 'active' : '' }}"
                     href="{{ route('components.collapse') }}">Collapse</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.comments')  ? 'active' : '' }}"
                     href="{{ route('components.comments') }}">Comments</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.dashboardBase')  ? 'active' : '' }}"
                     href="{{ route('components.dashboardBase') }}">Dashboard Base</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.datePicker')  ? 'active' : '' }}"
                     href="{{ route('components.datePicker') }}">DatePicker</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.dragDrop')  ? 'active' : '' }}"
                     href="{{ route('components.dragDrop') }}">Drag & Drop</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.drawer')  ? 'active' : '' }}"
                     href="{{ route('components.drawer') }}">Drawer</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.dropdown')  ? 'active' : '' }}"
                     href="{{ route('components.dropdown') }}">Dropdown</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.empty')  ? 'active' : '' }}"
                     href="{{ route('components.empty') }}">Empty</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.grid')  ? 'active' : '' }}"
                     href="{{ route('components.grid') }}">Grid <span class="badge badge-success menuItem">New</span></a>
               </li>
               <li>
                  <a class="{{ Route::is('components.input') ? 'active' : '' }}" href="{{ route('components.input') }}">Input</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.list') ? 'active' : '' }}"
                     href="{{ route('components.list') }}">List</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.menu') ? 'active' : '' }}"
                     href="{{ route('components.menu') }}">Menu</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.message') ? 'active' : '' }}"
                     href="{{ route('components.message') }}">Message</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.modal') ? 'active' : '' }}"
                     href="{{ route('components.modal') }}">Modals</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.notifications') ? 'active' : '' }}"
                     href="{{ route('components.notifications') }}">Notification</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.pageHeader') ? 'active' : '' }}"
                     href="{{ route('components.pageHeader') }}">Page Headers</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.pagination')  ? 'active' : '' }}"
                     href="{{ route('components.pagination') }}">Paginations</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.progressbar') ? 'active' : '' }}"
                     href="{{ route('components.progressbar') }}">Progress</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.radio')  ? 'active' : '' }}"
                     href="{{ route('components.radio') }}">Radio</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.rate') ? 'active' : '' }}"
                     href="{{ route('components.rate') }}">Rate</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.result')  ? 'active' : '' }}"
                     href="{{ route('components.result') }}">Result</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.select') ? 'active' : '' }}"
                     href="{{ route('components.select') }}">Select</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.skeleton') ? 'active' : '' }}"
                     href="{{ route('components.skeleton') }}">Skeleton</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.slider') ? 'active' : '' }}"
                     href="{{ route('components.slider') }}">Slider</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.spin')  ? 'active' : '' }}"
                     href="{{ route('components.spin') }}">Spinner</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.statistics') ? 'active' : '' }}"
                     href="{{ route('components.statistics') }}">Statistic</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.steps')  ? 'active' : '' }}"
                     href="{{ route('components.steps') }}">Steps</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.switch')  ? 'active' : '' }}"
                     href="{{ route('components.switch') }}">Switch</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.tab') ? 'active' : '' }}"
                     href="{{ route('components.tab') }}">Tabs</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.tag') ? 'active' : '' }}"
                     href="{{ route('components.tag') }}">Tags</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.timeline') ? 'active' : '' }}"
                     href="{{ route('components.timeline') }}">Timeline</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.timePicker') ? 'active' : '' }}"
                     href="{{ route('components.timePicker') }}">Timepicker</a>
               </li>
               <li>
                  <a class="{{ Route::is('components.uploads') ? 'active' : '' }}"
                     href="{{ route('components.uploads') }}">Upload</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('charts/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('charts/*') ? 'active' : ''}}">
            <span data-feather="bar-chart-2" class="nav-icon"></span>
            <span class="menu-text">Charts</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('charts.index') ? 'active' : '' }}" href="{{ route('charts.index') }}">Chart
                  JS</a>
               </li>
               <li>
                  <a class="{{ Route::is('charts.googleChart') ? 'active' : '' }}"
                     href="{{ route('charts.googleChart') }}">Google Charts</a>
               </li>
               <li>
                  <a class="{{ Route::is('charts.peityChart') ? 'active' : '' }}"
                     href="{{ route('charts.peityChart') }}">Peity Charts</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('forms/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('forms/*') ? 'active' : ''}}">
            <span data-feather="disc" class="nav-icon"></span>
            <span class="menu-text">Froms</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a class="{{ Route::is('forms.index') ? 'active' : '' }}" href="{{ route('forms.index') }}">Basic</a>
               </li>
               <li>
                  <a class="{{ Route::is('forms.layouts') ? 'active' : '' }}"
                     href="{{ route('forms.layouts') }}">Layouts
                  <span class="badge badge-success menuItem">New</span>
                  </a>
               </li>
               <li>
                  <a class="{{ Route::is('forms.elements') ? 'active' : '' }}"
                     href="{{ route('forms.elements') }}">Elements
                  <span class="badge badge-success menuItem">New</span>
                  </a>
               </li>
               <li>
                  <a class="{{ Route::is('forms.components') ? 'active' : '' }}"
                     href="{{ route('forms.components') }}">Components
                  <span class="badge badge-success menuItem">New</span>
                  </a>
               </li>
               <li>
                  <a class="{{ Route::is('forms.validations') ? 'active' : '' }}"
                     href="{{ route('forms.validations') }}">Validations
                  <span class="badge badge-success menuItem">New</span>
                  </a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('pages/table/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('pages/table/*') ? 'active' : ''}}">
            <span data-feather="cpu" class="nav-icon"></span>
            <span class="menu-text">Table</span>
            <span class="badge badge-success menuItem">New</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('pages.table.basicTable') }}"
                     class="{{ Route::is('pages.table.basicTable') ? 'active': '' }}">Basic Table
                  </a>
               </li>
               <li>
                  <a href="{{ route('pages.table.dataTable') }}"
                     class="{{ Route::is('pages.table.dataTable') ? 'active': '' }}">Data Table</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('widget/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('widget/*') ? 'active' : ''}}">
            <span data-feather="server" class="nav-icon"></span>
            <span class="menu-text">Widget</span>
            <span class="badge badge-success menuItem">New</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('widget.charts') }}"
                     class="{{ Route::is('widget.charts') ? 'active': '' }}">Widget Charts</a>
               </li>
               <li>
                  <a href="{{ route('widget.mixed') }}"
                     class="{{ Route::is('widget.mixed') ? 'active': '' }}">Widget Mixed</a>
               </li>
               <li>
                  <a href="{{ route('widget.card') }}"
                     class="{{ Route::is('widget.card') ? 'active': '' }}">Widget Card</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('wizard/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('wizard/*') ? 'active' : ''}}">
            <span data-feather="square" class="nav-icon"></span>
            <span class="menu-text">Wizards</span>
            <span class="badge badge-success menuItem">New</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('wizard.wizardOne') }}"
                     class="{{ Route::is('wizard.wizardOne') ? 'active': '' }}">Wizard 1</a>
               </li>
               <li>
                  <a href="{{ route('wizard.wizardTwo') }}"
                     class="{{ Route::is('wizard.wizardTwo') ? 'active': '' }}">Wizard 2</a>
               </li>
               <li>
                  <a href="{{ route('wizard.wizardThree') }}"
                     class="{{ Route::is('wizard.wizardThree') ? 'active': '' }}">Wizard 3</a>
               </li>
               <li>
                  <a href="{{ route('wizard.wizardFour') }}"
                     class="{{ Route::is('wizard.wizardFour') ? 'active': '' }}">Wizard 4</a>
               </li>
               <li>
                  <a href="{{ route('wizard.wizardFive') }}"
                     class="{{ Route::is('wizard.wizardFive') ? 'active': '' }}">Wizard 5</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('icons/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('icons/*') ? 'active' : ''}}">
            <span data-feather="grid" class="nav-icon"></span>
            <span class="menu-text">Icons</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('icons.fatherIcons') }}"
                     class="{{ Route::is('icons.fatherIcons') ? 'active' : ''}}">Feather icons (svg)</a>
               </li>
               <li>
                  <a href="{{ route('icons.fontAwesome') }}"
                     class="{{ Route::is('icons.fontAwesome') ? 'active' : ''}}">Font Awesome</a>
               </li>
               <li>
                  <a href="{{ route('icons.lineAwesome') }}"
                     class="{{ Route::is('icons.lineAwesome') ? 'active' : ''}}">Line Awesome</a>
               </li>
            </ul>
         </li>
         <li class="has-child {{ request()->is('maps/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('maps/*') ? 'active' : ''}}">
            <span data-feather="map" class="nav-icon"></span>
            <span class="menu-text">Maps</span>
            <span class="toggle-icon"></span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('maps.index') }}" class="{{ Route::is('maps.index') ? 'active' : '' }}">Google
                  Maps</a>
               </li>
               <li>
                  <a href="{{ route('maps.leafletMap') }}"
                     class="{{ Route::is('maps.leafletMap') ? 'active' : '' }}">Leaflet Maps</a>
               </li>
               <li>
                  <a href="{{ route('maps.vectorMap') }}"
                     class="{{ Route::is('maps.vectorMap') ? 'active' : '' }}">Vector Maps</a>
               </li>
            </ul>
         </li>
         <li class="menu-title m-top-30">
            <span>PAGES </span>
         </li>
         <li>
            <a href="{{ route('pages.profileSetting') }}"
               class="{{ Route::is('pages.profileSetting') ? 'active' : ''}}">
            <span data-feather="settings" class="nav-icon"></span>
            <span class="menu-text">Settings</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.gallery') }}" class="{{ Route::is('pages.gallery') ? 'active' : ''}}">
            <span data-feather="image" class="nav-icon"></span>
            <span class="menu-text">Gallery</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.pricing') }}" class="{{ Route::is('pages.pricing') ? 'active' : ''}}">
            <span data-feather="dollar-sign" class="nav-icon"></span>
            <span class="menu-text">Pricing</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.banner') }}" class="{{ Route::is('pages.banner') ? 'active' : ''}}">
            <span data-feather="cast" class="nav-icon"></span>
            <span class="menu-text">Banners</span>
            <span class="badge badge-success menuItem">New</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.testimonial') }}" class="{{ Route::is('pages.testimonial') ? 'active' : ''}}">
            <span data-feather="book-open" class="nav-icon"></span>
            <span class="menu-text">Testimonial</span>
            <span class="badge badge-success menuItem">New</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.faq') }}" class="{{ Route::is('pages.faq') ? 'active' : ''}}">
            <span data-feather="help-circle" class="nav-icon"></span>
            <span class="menu-text">FAQ's</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.search') }}" class="{{ Route::is('pages.search') ? 'active' : ''}}">
            <span data-feather="search" class="nav-icon"></span>
            <span class="menu-text">Search Results</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.blankPage') }}" class="{{ Route::is('pages.blankPage') ? 'active' : ''}}">
            <span data-feather="octagon" class="nav-icon"></span>
            <span class="menu-text">Blank Page</span>
            <span class="badge badge-success menuItem">New</span>
            </a>
         </li>
         <li class="has-child {{ request()->is('pages/knowledgebase/*') ? 'open' : ''}}">
            <a href="#" class="{{ request()->is('pages/knowledgebase/*') ? 'active' : ''}}">
            <span data-feather="book" class="nav-icon"></span>
            <span class="menu-text">Knowledge Base</span>
            <span class="toggle-icon"></span>
            <span class="badge badge-success menuItem">New</span>
            </a>
            <ul>
               <li>
                  <a href="{{ route('pages.knowledgebase.base') }}"
                     class="{{ Route::is('pages.knowledgebase.base') ? 'active': '' }}">Knowledge Base</a>
               </li>
               <li>
                  <a href="{{ route('pages.knowledgebase.allArticle') }}"
                     class="{{ Route::is('pages.knowledgebase.allArticle') ? 'active': '' }}">All Article</a>
               </li>
               <li>
                  <a href="{{ route('pages.knowledgebase.singaleArticle') }}"
                     class="{{ Route::is('pages.knowledgebase.singaleArticle') ? 'active': '' }}">Singale Article</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('pages.support') }}" class="{{ Route::is('pages.support') ? 'active': '' }}">
            <span data-feather="headphones" class="nav-icon"></span>
            <span class="menu-text">Support Center</span>
            <span class="badge badge-success menuItem">New</span>
            </a>
         </li>
         <li>
            <a href="{{ route('maintenance') }}">
            <span data-feather="airplay" class="nav-icon"></span>
            <span class="menu-text">Maintenance</span>
            </a>
         </li>
         <li>
            <a href="{{ route('error') }}">
            <span data-feather="info" class="nav-icon"></span>
            <span class="menu-text">404</span>
            </a>
         </li>
         <li>
            <a href="{{ route('pages.comingSoon') }}" class="{{ Route::is('pages.comingSoon') ? 'active': '' }}"">
            <span data-feather="clock" class="nav-icon"></span>
            <span class="menu-text">Coming Soon</span>
            </a>
         </li>
      </ul>
   </div>
</aside>
