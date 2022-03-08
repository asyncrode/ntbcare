<!--
    Helper classes

    Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
    Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

    Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
    Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
        - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
-->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content enable-cookies">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">n</span><span class="text-primary">c</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class=" font-w700" href="javascript:void(0)">
                        {{-- <i class="si si-fire text-primary"></i> --}}
                        <img src="{{asset('assets/media/favicons/favicon2.png')}}" alt="" style="max-height: 45%">
                        <span class="font-size-xl text-dual-primary-dark">ntb</span><span class="font-size-xl text-primary">care</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 py-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="javascript:void(0)">
                    <img class="img-avatar" src="{{asset('assets/media/avatars/avatar15.jpg')}}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="text-dual-primary-dark font-size-s font-w600 text-uppercase pb-10"
                            href="javascript:void(0)">{{Auth::user()->nama}}</a>
                    </li>
                </ul>
                <ul class="list-inline mb-10">
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                            data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="{{ route('adminpost.logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="si si-logout"></i>
                        </a>
                        <form id="logout-form" action="{{ route('adminpost.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->
        @hasrole('super-admin')
        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a href="{{route('dashboard.index')}}"><i class="si si-bar-chart"></i><span
                            class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user-follow"></i><span
                            class="sidebar-mini-hide" style="font-size: 99%">Management User Admin</span></a>
                    <ul>
                        <li>
                            <a href="{{route('role.index')}}" style="font-size: 99%"><span class="sidebar-mini-hide">Role</span></a>
                        </li>
                        <li>
                            <a href="{{route('admin.index')}}"><span class="sidebar-mini-hide">Admin</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-map"></i><span
                            class="sidebar-mini-hide">Management Wilayah</span></a>
                    <ul>
                        <li>
                            <a href="{{route('wilayah.index')}}">Kab/kota</a>
                        </li>
                        <li>
                            <a href="{{route('kecamatan.index')}}">Kecamatan</a>
                        </li>
                        <li>
                            <a href="{{route('kelurahan.index')}}">Kelurahan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span
                            class="sidebar-mini-hide">Management Kategori</span></a>   
                    <ul>
                        <li>
                            <a href="{{route('kategori.index')}}">Kategori</a>
                        </li>
                        <li>
                            <a href="{{route('subkategori.index')}}">Subkategori</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('user.index')}}"><i class="si si-users"></i><span
                            class="sidebar-mini-hide">Management User</span></a>
                    {{-- <ul>
                        <li>
                            <a href="">Pelapor</a>
                        </li>
                        <li>
                            <a href="">Admin</a>
                        </li>
                    </ul> --}}
                </li>
                
                <li>
                    <a href="{{route('opd.index')}}"><i class="si si-briefcase"></i>Management OPD</span></a>
                    
                </li>
                          
                <li>
                    <a class="pl-15" href="{{route('pengaduan.admin.index')}}"><img src="{{asset('assets/media/favicons/favicon2.png')}}" style="max-height: 14px">
                        <span class="sidebar-mini-hide">Pengaduan</span></a>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-pie-chart"></i><span
                            class="sidebar-mini-hide">Report Filtering</span></a>
                    <ul>
                        <li>
                            <a href="{{route('laporan.index.status')}}">Rekap per Status</a>
                        </li>
                        <li>
                            <a href="{{route('laporan.index')}}">Rekap per Kategori</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Rekap per Subkategori</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Rekap per Wilayah</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Rekap per OPD/Instansi</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Rincian per Wilayah</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-book-open"></i><span
                            class="sidebar-mini-hide">Untold Story</span></a>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">Post</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Manage</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-newspaper-o"></i><span
                            class="sidebar-mini-hide">News</span></a>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">Post</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Manage</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
        @else
        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a href="{{route('dashboard.index')}}"><i class="si si-bar-chart"></i><span
                            class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li>
                    <a class="pl-15" href="{{route('pengaduan.admin.index')}}"><img src="{{asset('assets/media/favicons/favicon2.png')}}" style="max-height: 14px">
                        <span class="sidebar-mini-hide">Pengaduan</span></a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
        @endhasrole
    </div>
    <!-- Sidebar Content -->
</nav>