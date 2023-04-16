@include('backend.layouts.header')

<!--wrapper-->
<div class="wrapper">

    <!-- Side Navbar -->
    @include('backend.layouts.nav-side')

    <!-- Top Navbar -->
    @include('backend.layouts.nav-top')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

				<!-- Main Content -->
            @yield('main-content')

        </div>
        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!-- Footer -->
        @include('backend.layouts.footer')

    </div>
    <!--end wrapper-->


    <!-- Switcher -->
    @include('backend.layouts.switcher')

    <!-- script -->
    @include('backend.layouts.script')

    </body>

    </html>
