<!-- Header -->
@include('frontend.layouts.header')

        <!-- Modal -->
    @include('frontend.layouts.quickview')
 
    <!-- Header  -->
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>

        <!-- Top Header -->
        @include('frontend.layouts.header-top')

        <!-- Middle Header -->
        @include('frontend.layouts.header-mid')

        <!-- Bottom Header -->
        @include('frontend.layouts.header-btm')
        
    </header>
    
    <!-- End Header  -->
    
    <!-- Mobile Header -->
    @include('frontend.layouts.header-mob')

    <!--End header-->

    <main class="main">\


        @yield('main-content')

        
    </main>

    <footer class="main">

        <!-- News Letter -->
    @include('frontend.layouts.footer-news')

        <!-- Featured -->
    @include('frontend.layouts.footer-feature')

        <!-- Footer Mid -->
    @include('frontend.layouts.footer-mid')

        <!-- Copyright -->
    @include('frontend.layouts.footer-copy')

    </footer>

        <!-- Preloader -->
    @include('frontend.layouts.preloader')

        <!-- JS -->
    @include('frontend.layouts.script')

</body>

</html>