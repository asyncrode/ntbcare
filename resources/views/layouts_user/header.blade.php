<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Logo -->
            <div class="content-header-item">
                <a class=" font-w700 mr-5" href="{{route('landing')}}">
                    {{-- <i class="si si-fire text-primary"></i> --}}
                    <img src="{{asset('assets/media/favicons/ugl1.png')}}" alt="" style="max-height: 100%">
                    <span class="font-size-xl text-black-op">ntb</span><span class="font-size-xl text-primary">care</span>
                </a>
            </div>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section ">
            <!-- Header Navigation -->
            <!--
            Desktop Navigation, mobile navigation can be found in #sidebar

            If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
            If your sidebar menu includes headings, they won't be visible in your header navigation by default
            If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
            -->
            <ul class="nav-main-header nav-main-header-no-icons">
                <li>
                    <a class="text-primary" href="{{route('landing')}}">
                        <i class="si si-home"></i>Home
                    </a>
                </li>
                <li>
                    <a class="text-primary" href="{{route('listaduan.index')}}">
                        <i class="si si-home"></i>Pengaduan
                    </a>
                </li>
                <li>
                    <a class="text-primary" href="{{route('user.story.index')}}">
                        <i class="si si-home"></i>Untold Story
                    </a>
                </li>
                <li>
                    <a class="text-primary" href="#">
                        <i class="si si-home"></i>Berita
                    </a>
                </li>
                @guest
                <li>
                    <a class="nav-link text-primary" href="{{ route('register') }}">Daftar</a>
                </li>
                <li>
                    <a class="nav-link text-primary" href="{{ route('login') }}">Login</a>
                </li>
                @else
                <li>
                    <li>
                        <a class="nav-link text-primary" href="{{ route('pengaduanku.index') }}">PengaduanKu</a>
                    </li>
                    <a class="nav-link text-primary" href="{{ route('login') }}" onclick="event.preventDefault();
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