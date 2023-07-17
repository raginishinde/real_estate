 <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
               <a href="index.html" class="logo logo-dark">
               <span class="logo-sm">
               <img src="{{ asset('public/admin/assets/images/logo-sm.png') }}" alt="" height="22">
               </span>
               <span class="logo-lg">
               <img src="{{ asset('public/admin/assets/images/logo-dark.png') }}" alt="" height="22">
               </span>
               </a>
               <a href="index.html" class="logo logo-light">
               <span class="logo-sm">
               <img src="{{ asset('public/admin/assets/images/logo-sm.png') }}" alt="" height="22">
               </span>
               <span class="logo-lg">
               <img src="{{ asset('public/admin/assets/images/logo-light.png') }}" alt="" height="22">
               </span>
               </a>
               <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
               <i class="ri-record-circle-line"></i>
               </button>
            </div>
            <div id="scrollbar">
               <div class="container-fluid">
                  <div id="two-column-menu">
                  </div>
                  <ul class="navbar-nav" id="navbar-nav">
                     <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                     
                     <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('/dashboard')}}">
                            <i class="ph-gauge"></i> <span data-key="t-widgets">Dashboards</span>
                        </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Master</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                           <ul class="nav nav-sm flex-column">
                              <li class="nav-item">
                                 <a href="{{ url('/testimonial_view')}}" class="nav-link" data-key="t-analytics"> Testimonial </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{ url('/slider_view')}}" class="nav-link" data-key="t-crm"> Slider </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{ url('/gallery_view')}}" class="nav-link" data-key="t-crm"> Gallery </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{ url('/city_view')}}" class="nav-link" data-key="t-crm"> City </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{ url('/ammenities_view')}}" class="nav-link" data-key="t-crm"> Ammenities </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                      <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ url('/chat')}}">
                            <i class="ph-gauge"></i> <span data-key="t-widgets">Chat</span>
                        </a>
                    </li>

                  </ul>
               </div>
               <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
         </div>