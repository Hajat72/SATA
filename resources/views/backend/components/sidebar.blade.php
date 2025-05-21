<!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="../main/index.html" class="text-nowrap logo-img">
            <img src="{{ asset('backend/images/logos/dark-logo.svg') }}" class="dark-logo" alt="Logo-Dark" />
            <img src="{{ asset('backend/images/logos/light-logo.svg') }}" class="light-logo" alt="Logo-light" />
                    </a>
                    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
            <i class="ti ti-x"></i>
                    </a>
                </div>

                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <!-- ---------------------------------- -->
                        <!-- Home -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-home"></i>
                            <a href="/dashboard">
                            <span> Dashboard</span></a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Dashboard -->
                        <!-- ---------------------------------- -->
              <li class="sidebar-item">
    <a class="sidebar-link has-arrow {{ Route::is('admission.pending') || Route::is('admission.accepted') || Route::is('admission.getting') ? 'active' : '' }}"
       href="javascript:void(0)"
       data-bs-toggle="collapse"
       data-bs-target="#admission-menu"
       aria-expanded="{{ Route::is('admission.pending') || Route::is('admission.accepted') || Route::is('admission.getting') ? 'true' : 'false' }}">
        <i class="ti ti-user-plus"></i>
        <span class="hide-menu">Admission</span>
    </a>
    <ul id="admission-menu"
        class="collapse sidebar-dropdown {{ Route::is('admission.pending') || Route::is('admission.accepted') || Route::is('admission.getting') ? 'show' : '' }}">
        
         <li class="sidebar-item">
    <a class="sidebar-link {{ Route::is('admission.getting') ? 'active' : '' }}"
       href="{{ route('admission.create') }}">
        <i class="ti ti-clipboard"></i>
        <span class="hide-menu">Apply For Admission</span>
    </a>
</li>

        <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('admission.pending') ? 'active' : '' }}"
               href="{{ route('admission.index') }}">
                <i class="ti ti-hourglass"></i>
                <span class="hide-menu">Pending Admission</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('admission.accepted') ? 'active' : '' }}"
               href="#">
                <i class="ti ti-check"></i>
                <span class="hide-menu">Accepted Admission</span>
            </a>
        </li>

         <li class="sidebar-item">
            <a class="sidebar-link {{ Route::is('rejected-student.list') ? 'active' : '' }}"
               href="{{ route('rejected-student.list') }}">
                <i class="ti ti-user-x"></i>
                <span class="hide-menu"> Rejected Admission</span>
            </a>
        </li>
       
    </ul>
</li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('slider.index') }}" >
                            <span><i class="ti ti-player-track-next"></i>
                            </span>
                            <span class="hide-menu">Slider</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('about.index') }}" >
                            <span><i class="ti ti-info-circle"></i></span>
                            <span class="hide-menu">About</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('service.index') }}" >
                            <span><i class="ti ti-tools"></i></span>
                            <span class="hide-menu">Service</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('service.index') }}" >
                            <span><i class="ti ti-users"></i></span>
                            <span class="hide-menu">Team</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-dropdown" href="#" >
                                <span><i class="ti ti-player-track-next"></i></span>
                                <span class="hide-menu">Course Module</span>
                            </a>
                            <ul class="sidebar-dropdown">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="#">
                                        <span><i class="ti ti-book"></i></span>
                                        <span class="hide-menu">Courses</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="#">
                                        <span><i class="ti ti-tools"></i></span>
                                        <span class="hide-menu">Sessions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                       
                    </ul>
                </nav>