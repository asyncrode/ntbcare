<!doctype html>
<html lang="en" class="no-focus">
    <head>
        @include('layouts_user.incl_top')
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed enable-page-overlay">

            <!-- Sidebar -->
            @include('layouts_user.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
            @include('layouts_user.header')
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
               
                @yield('content_user')
               
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white opacity-0">
                <div class="content content-full">
                    <!-- Footer Navigation -->
                    <div class="row items-push-2x mt-30">
                        <div class="col-6 col-md-4">
                            <h3 class="h5 font-w700">Heading</h3>
                            <ul class="list list-simple-mini font-size-sm">
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #1</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #2</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #3</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #4</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #5</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #6</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4">
                            <h3 class="h5 font-w700">Heading</h3>
                            <ul class="list list-simple-mini font-size-sm">
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #1</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #2</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #3</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #4</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #5</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #6</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="h5 font-w700">DISKOMINFOTIK</h3>
                            <div class="font-size-sm mb-30">
                                Jln. Udayana No. 14 Mataram<br>
                                <abbr title="Phone">(0370) 644264</abbr>
                            </div>
                            <h3 class="h5 font-w700">Keep in touch with us</h3>
                            <form>
                                {{-- <div class="input-group">
                                    <input type="email" class="form-control" id="ld-subscribe-email" name="ld-subscribe-email" placeholder="Your email..">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Subscribe</button>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                    <!-- END Footer Navigation -->

                    <!-- Copyright Info -->
                    <div class="font-size-xs clearfix border-t pt-20 pb-10">
                        <div class="float-right">
                            Crafted by <a class="font-w600" href="https://asyncrode.id" target="_blank">asyncrode</a>
                        </div>
                        <div class="float-left">
                            <a class="font-w600" href="javascript:void(0)" target="_blank">Copyright </a> <b>&copy; <span class="js-year-copy"></span>.</b> All rights reserved.
                        </div>
                    </div>
                    <!-- END Copyright Info -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase JS -->
        {{-- Inlude Bot --}}
        @include('layouts_user.incl_bot')
        @stack('scripts')
        {{-- End Inlude Bot --}}
    </body>
</html>
