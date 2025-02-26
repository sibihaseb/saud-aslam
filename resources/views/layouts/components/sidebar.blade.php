<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ url('index') }}" class="header-logo">
            <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
            <img src="{{ asset('build/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
            <img src="{{ asset('build/assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                class="desktop-dark">
            <img src="{{ asset('build/assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                class="toggle-dark">
            <img src="{{ asset('build/assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                class="desktop-white">
            <img src="{{ asset('build/assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ url('admin/adminuser') }}" class="side-menu__item">
                        <i class="bx bx-layer side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('User Management') }}<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ url('admin/projects') }}" class="side-menu__item">
                        <i class="bx bx-layer side-menu__icon"></i>
                        <span class="side-menu__label">{{ __('Projects') }}<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">ANALATICS<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">ANALATICS</a>
                        </li>

                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">View Analytics</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Analytics Report</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">MEDIA LIBRARY<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">MEDIA LIBRARY</a>
                        </li>

                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">On Demand videos</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">TV Series</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Live Streams</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Fast Channel</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label"> UPLOAD MEDIA<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">CDN-Fetch Movies</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">CDN-Fetch Episodes</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">CSV-Upload Movies</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">CSV-Upload Episodes</a>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">MEDIA DETAILS<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">MEDIA DETAILS</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('category') }}" class="side-menu__item">Categories</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('genre') }}" class="side-menu__item">Genre</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('streamquality') }}" class="side-menu__item">Video Format</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Organize</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Media Tags</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('rating') }}" class="side-menu__item">Content Rating</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('actor') }}" class="side-menu__item">People(Cast, Crew etc)</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('contentadvisory') }}" class="side-menu__item">Content Advisory</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Audio Langauge</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">CHANNELS<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">CHANNELS</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Add a Channel</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">View Channels</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Manage Schedule</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">APPERANCE<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">APPERANCE</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Menus</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Costum page</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Social media links</a>
                        </li>

                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Theme/Templte</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Web Primary Branding</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Web App Branding</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">TV App Branding</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Mobile App Branding</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Manage Branding Keys</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Manage Assets</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">APPS<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">View All Apps</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">ADMIN USERS<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">View All Admin Users</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">MONETIZATION<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Subscription plans</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Coupons</a>
                        </li>

                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">VAST Settings</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Monetization Settings</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Banner Ads</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">MODULES<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">MODULES</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">CDN (Upload Media)</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Top 10 of the week</a>
                        </li>

                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Recommend</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Ad Server 1.0</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Ad Server 2.0</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Banner Ads</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Watch Party</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">User Review</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item"> Who Watching</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Donation</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Screener</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Content Advisory</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Auto Category from Tag</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Module Setting</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Watch History</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Still Watching</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Shopping/Cart</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Offline Viewing </a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">WaterMark</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Skip Into</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Visual Editor</a>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">MEDIA LICENSING<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">MEDIA LICENSING</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Browse Content</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">USERS<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">USERS</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">View All App User </a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item"> User Settings </a>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">MARKETING<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">MARKETING</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">View All inquires</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Email Users</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Social Media</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Settings</a>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">BILLING<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">BILLING</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">My Billings</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide --> <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">HELP<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">HELP</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Support</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Knowledge Base</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">PROFILE<span
                                class="badge bg-warning-transparent ms-2"></span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">PROFILE</a>
                        </li>
                        <li class="slide">
                            <a href="{{ url('index') }}" class="side-menu__item">Profile Settings</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
