<!-- Header -->
@include('frontend.layouts.header')
<!-- Modal -->

        <!-- Quick view -->
    @include('frontend.layouts.quickview')

    <!-- Header  -->
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
            <!-- Nav Top -->
        @include('frontend.layouts.nav-top')
        
            <!-- Nav Mid -->
        @include('frontend.layouts.nav-mid')
        
            <!-- Nav Bottom -->
        @include('frontend.layouts.nav-bottom')
        
    </header>
    
    <!-- End Header  -->
    
        <!-- Nav Mob -->
    @include('frontend.layouts.nav-mob')

    <!--End header-->
        
        <!-- Main Content -->
        @yield('main-content')

        <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- Preloader Start -->
    @include('frontend.layouts.preloader')
    
    <!-- JS -->
    @include('frontend.layouts.js')

</body>

</html>