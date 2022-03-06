<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow bg-black-op-10">
            <div class="content-header-section text-center align-parent">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="">
                        {{-- <i class="si si-fire text-primary"></i> --}}
                        <img src="{{asset('assets/media/favicons/favicon2.png')}}" alt="" style="max-height: 40%">
                        <span class="font-size-xl text-dual-primary-dark">ntb</span><span class="font-size-xl text-primary">care</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Main Navigation -->
        <div class="content-side content-side-full">
            <!--
            Mobile navigation, desktop navigation can be found in #page-header

            If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
            -->
            <ul class="nav-main">
                <li>
                    <a class="" href="{{route('landing')}}">
                        <i class="fa fa-home"></i>Home
                    </a>
                </li>
                <li>
                    <a class="pl-15" href="{{route('listaduan.index')}}">
                        <img class="" src="{{asset('assets/media/favicons/favicon2.png')}}" style="max-height: 14px"> Pengaduan
                    </a>
                </li>
                <li>
                    <a class="" href="{{route('user.story')}}">
                        <i class="fa fa-book"></i> Untold Story
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <i class="fa fa-newspaper-o"></i> Berita
                    </a>
                </li>
                @guest
                <li>
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fa fa-user-plus"></i> Daftar
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa fa-sign-in"></i> Login
                    </a>
                </li>
                @else
                <li>
                    <a class="nav-link" href="{{ route('pengaduanku.index') }}">
                        <i class="si si-paper-plane"></i>PengaduanKu
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('login') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="si si-logout"></i>Logout
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
        </div>
        <!-- END Side Main Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>