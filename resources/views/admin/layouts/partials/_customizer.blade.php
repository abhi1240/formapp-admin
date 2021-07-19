<a href="#" class="customizer-trigger">
   <span data-feather="settings"></span></a>
   <div class="customizer-wrapper">
      <div class="customizer">
         <div class="customizer__head">
            <h4 class="customizer__title">Customizer</h4>
            <span class="customizer__sub-title">Customize your overview page layout</span>
            <a href="#" class="customizer-close">
            <span data-feather="x"></span></a>
         </div>
         <div class="customizer__body">
            <div class="customizer__single">
               <h4>Layout Type</h4>
               <ul class="customizer-list d-flex layout">
                  <li class="customizer-list__item">
                     <a href="{{ url('setlayout/ltr') }}" class="{{ (Session::get('layout') !=='rtl' ? 'active': '') }}">
                     <img src="{{ asset('img/ltr.png') }}" alt="">
                     <i class="fa fa-check-circle"></i>
                     </a>
                  </li>
                  <li class="customizer-list__item">
                     <a href="{{ url('setlayout/rtl') }}" class="{{ (Session::get('layout')=='rtl' ? 'active': '') }}">
                     <img src="{{ asset('img/rtl.png') }}" alt="">
                     <i class="fa fa-check-circle"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- ends: .customizer__single -->
            <div class="customizer__single">
               <h4>Sidebar Type</h4>
               <ul class="customizer-list d-flex l_sidebar">
                  <li class="customizer-list__item">
                     <a href="#" data-layout="light" class="active">
                     <img src="{{ asset('img/light.png') }}" alt="">
                     <i class="fa fa-check-circle"></i>
                     </a>
                  </li>
                  <li class="customizer-list__item">
                     <a href="#" data-layout="dark">
                     <img src="{{ asset('img/dark.png') }}" alt="">
                     <i class="fa fa-check-circle"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- ends: .customizer__single -->
            <div class="customizer__single">
               <h4>Navbar Type</h4>
               <ul class="customizer-list d-flex l_navbar">
                  <li class="customizer-list__item">
                     <a href="#" data-layout="side" class="active">
                     <img src="{{ asset('img/side.png') }}" alt="">
                     <i class="fa fa-check-circle"></i>
                     </a>
                  </li>
                  <li class="customizer-list__item top">
                     <a href="#" data-layout="top">
                     <img src="{{ asset('img/top.png') }}" alt="">
                     <i class="fa fa-check-circle"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- ends: .customizer__single -->
         </div>
      </div>
   </div>