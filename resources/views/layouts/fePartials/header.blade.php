<!-- Loader Start -->
{{-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> --}}
<!-- Loader End -->
<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky nav-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{ route('homepage') }}">
            <span class="inline-block dark:hidden">
                <img src="{{ url('storage/' . get_static_option('logo')) }}" class="l-dark" height="24" alt="" />
                <img src="{{ url('storage/' . get_static_option('logo')) }}" class="l-light" height="24"
                    alt="" />
            </span>
            <img src="{{ url('storage/' . get_static_option('logo')) }}" height="24" class="hidden dark:inline-block"
                alt="" />
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--button Start-->
        <ul class="mb-0 list-none buy-button">
            <li class="inline pl-1 mb-0">
                <a href="{{ '//' . get_static_option('fb_url') }}" target="_blank">
                    <div class="login-btn-primary">
                        <span
                            class="text-white bg-indigo-600 border-indigo-600 rounded-full btn btn-icon hover:bg-indigo-700 hover:border-indigo-700"><i
                                data-feather="facebook" class="w-6 h-6"></i></span>
                    </div>
                    <div class="login-btn-light">
                        <span
                            class="rounded-full btn btn-icon bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                data-feather="facebook" class="w-6 h-6"></i></span>
                    </div>
                </a>
            </li>
            <li class="inline pl-1 mb-0">
                <a href="{{ '//' . get_static_option('instagram_url') }}" target="_blank">
                    <div class="login-btn-primary">
                        <span
                            class="text-white bg-red-600 border-red-600 rounded-full btn btn-icon logo-instagram hover:bg-red-700 hover:border-red-700"><i
                                data-feather="instagram" class="w-6 h-6"></i></span>
                    </div>
                    <div class="login-btn-light">
                        <span
                            class="rounded-full btn btn-icon logo-instagram bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                data-feather="instagram" class="w-6 h-6"></i></span>
                    </div>
                </a>
            </li>
            <li class="inline pl-1 mb-0">
                <a href="{{ '//' . get_static_option('twitter_url') }}" target="_blank">
                    <div class="login-btn-primary">
                        <span
                            class="text-white rounded-full btn btn-icon bg-sky-600 hover:bg-sky-700 border-sky-600 hover:border-sky-700"><i
                                data-feather="twitter" class="w-6 h-6"></i></span>
                    </div>
                    <div class="login-btn-light">
                        <span
                            class="rounded-full btn btn-icon bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                data-feather="twitter" class="w-6 h-6"></i></span>
                    </div>
                </a>
            </li>
        </ul>
        <!-- button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li>
                    <a href="{{ route('homepage') }}" class="sub-menu-item">HOME</a>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{ route('about_us') }}">About Us</a>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{ route('services') }}">SERVICES</a>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="{{ route('doctors') }}">DOCTORS</a>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="{{ route('gallery') }}">Gallery</a>
                </li>

                <li>
                    <a href="{{ route('contact_us') }}"class="has-submenu parent-menu-item">Contact Us</a>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>
<!--end header-->
<!-- End Navbar -->
