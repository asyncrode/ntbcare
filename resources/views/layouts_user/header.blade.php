<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Logo -->
            <div class="content-header-item">
                <a class="link-effect font-w700 mr-5" href="">
                    <i class="si si-fire text-primary"></i>
                    <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                </a>
            </div>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- Header Navigation -->
            <!--
            Desktop Navigation, mobile navigation can be found in #sidebar

            If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
            If your sidebar menu includes headings, they won't be visible in your header navigation by default
            If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
            -->
            <ul class="nav-main-header nav-main-header-no-icons">
                <li>
                    <a class="" href="">
                        <i class="si si-home"></i>Home
                    </a>
                </li>
                <li>
                    <a class="" href="{{route('pengaduan.index')}}">
                        <i class="si si-home"></i>Pengaduan
                    </a>
                </li>
                @guest
                <li>
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @else
                <li>
                    <a class="nav-link" href="{{ route('login') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
            <!-- END Header Navigation -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>