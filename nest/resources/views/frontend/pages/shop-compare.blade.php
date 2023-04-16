@extends('frontend.master')

@section('main-content')
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Shop <span></span> Compare
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <h1 class="heading-2 mb-10">Products Compare</h1>
                    <h6 class="text-body mb-40">There are <span class="text-brand">3</span> products to compare</h6>
                    <div class="table-responsive">
                        <table class="table text-center table-compare">
                            <tbody>
                                <tr class="pr_image">
                                    <td class="text-muted font-sm fw-600 font-heading mw-200">Preview</td>
                                    <td class="row_img"><img src="{{asset('frontend')}}/assets/imgs/shop/product-2-1.jpg" alt="compare-img" /></td>
                                    <td class="row_img"><img src="{{asset('frontend')}}/assets/imgs/shop/product-1-1.jpg" alt="compare-img" /></td>
                                    <td class="row_img"><img src="{{asset('frontend')}}/assets/imgs/shop/product-3-1.jpg" alt="compare-img" /></td>
                                </tr>
                                <tr class="pr_title">
                                    <td class="text-muted font-sm fw-600 font-heading">Name</td>
                                    <td class="product_name">
                                        <h6><a href="shop-product-full.html" class="text-heading">J.Crew Mercantile Women's Short</a></h6>
                                    </td>
                                    <td class="product_name">
                                        <h6><a href="shop-product-full.html" class="text-heading">Amazon Essentials Women's Tanks</a></h6>
                                    </td>
                                    <td class="product_name">
                                        <h6><a href="shop-product-full.html" class="text-heading">Amazon Brand - Daily Ritual Wom</a></h6>
                                    </td>
                                </tr>
                                <tr class="pr_price">
                                    <td class="text-muted font-sm fw-600 font-heading">Price</td>
                                    <td class="product_price">
                                        <h4 class="price text-brand">$12.00</h4>
                                    </td>
                                    <td class="product_price">
                                        <h4 class="price text-brand">$14.00</h4>
                                    </td>
                                    <td class="product_price">
                                        <h4 class="price text-brand">$15.00</h4>
                                    </td>
                                </tr>
                                <tr class="pr_rating">
                                    <td class="text-muted font-sm fw-600 font-heading">Rating</td>
                                    <td>
                                        <div class="rating_wrap">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="rating_num">(121)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating_wrap">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="rating_num">(35)</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="rating_wrap">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="rating_num">(125)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="description">
                                    <td class="text-muted font-sm fw-600 font-heading">Description</td>
                                    <td class="row_text font-xs">
                                        <p class="font-sm text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                    </td>
                                    <td class="row_text font-xs">
                                        <p class="font-sm text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                    </td>
                                    <td class="row_text font-xs">
                                        <p class="font-sm text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                    </td>
                                </tr>
                                <tr class="pr_stock">
                                    <td class="text-muted font-sm fw-600 font-heading">Stock status</td>
                                    <td class="row_stock"><span class="stock-status in-stock mb-0">In Stock</span></td>
                                    <td class="row_stock"><span class="stock-status out-stock mb-0">Out of stock</span></td>
                                    <td class="row_stock"><span class="stock-status in-stock mb-0">In Stock</span></td>
                                </tr>
                                <tr class="pr_weight">
                                    <td class="text-muted font-sm fw-600 font-heading">Weight</td>
                                    <td class="row_weight">320 gram</td>
                                    <td class="row_weight">370 gram</td>
                                    <td class="row_weight">380 gram</td>
                                </tr>
                                <tr class="pr_dimensions">
                                    <td class="text-muted font-sm fw-600 font-heading">Dimensions</td>
                                    <td class="row_dimensions">N/A</td>
                                    <td class="row_dimensions">N/A</td>
                                    <td class="row_dimensions">N/A</td>
                                </tr>
                                <tr class="pr_add_to_cart">
                                    <td class="text-muted font-sm fw-600 font-heading">Buy now</td>
                                    <td class="row_btn">
                                        <button class="btn btn-sm"><i class="fi-rs-shopping-bag mr-5"></i>Add to cart</button>
                                    </td>
                                    <td class="row_btn">
                                        <button class="btn btn-sm btn-secondary"><i class="fi-rs-headset mr-5"></i>Contact Us</button>
                                    </td>
                                    <td class="row_btn">
                                        <button class="btn btn-sm"><i class="fi-rs-shopping-bag mr-5"></i>Add to cart</button>
                                    </td>
                                </tr>
                                <tr class="pr_remove text-muted">
                                    <td class="text-muted font-md fw-600"></td>
                                    <td class="row_remove">
                                        <a href="#" class="text-muted"><i class="fi-rs-trash mr-5"></i><span>Remove</span> </a>
                                    </td>
                                    <td class="row_remove">
                                        <a href="#" class="text-muted"><i class="fi-rs-trash mr-5"></i><span>Remove</span> </a>
                                    </td>
                                    <td class="row_remove">
                                        <a href="#" class="text-muted"><i class="fi-rs-trash mr-5"></i><span>Remove</span> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="main">
        <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Stay home & get your daily <br />
                                    needs from our shop
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">Nest Mart</span></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <img src="{{asset('frontend')}}/assets/imgs/banner/banner-9.png" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-1.svg" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Best prices & offers</h3>
                                <p>Orders $50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-2.svg" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Free delivery</h3>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-3.svg" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Great daily deal</h3>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-4.svg" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Wide assortment</h3>
                                <p>Mega Discounts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-5.svg" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Easy returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="banner-icon">
                                <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-6.svg" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Safe delivery</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <a href="index.html" class="mb-15"><img src="{{asset('frontend')}}/assets/imgs/theme/logo.svg" alt="logo" /></a>
                                <p class="font-lg text-heading">Awesome grocery store website template</p>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                <li><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-email-2.svg" alt="" /><strong>Email:</strong><span>sale@Nest.com</span></li>
                                <li><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-clock.svg" alt="" /><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help Ticket</a></li>
                            <li><a href="#">Shipping Details</a></li>
                            <li><a href="#">Compare products</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="widget-title">Corporate</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Become a Vendor</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Farm Business</a></li>
                            <li><a href="#">Farm Careers</a></li>
                            <li><a href="#">Our Suppliers</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Milk & Flavoured Milk</a></li>
                            <li><a href="#">Butter and Margarine</a></li>
                            <li><a href="#">Eggs Substitutes</a></li>
                            <li><a href="#">Marmalades</a></li>
                            <li><a href="#">Sour Cream and Dips</a></li>
                            <li><a href="#">Tea & Kombucha</a></li>
                            <li><a href="#">Cheese</a></li>
                        </ul>
                    </div>
                  
                </div>
        </section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2022, <strong class="text-brand">Nest</strong> - HTML Ecommerce Template <br />All rights reserved</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                     
                    <div class="hotline d-lg-inline-flex">
                        <img src="{{asset('frontend')}}/assets/imgs/theme/icons/phone-call.svg" alt="hotline" />
                        <p>1900 - 8888<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="#"><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('frontend')}}/assets/imgs/theme/loading.gif" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{asset('frontend')}}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/slick.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/wow.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/magnific-popup.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/select2.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/waypoints.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/counterup.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/images-loaded.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/isotope.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/scrollup.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="./{{asset('frontend')}}/assets/js/main.js?v=5.3"></script>
    <script src="./{{asset('frontend')}}/assets/js/shop.js?v=5.3"></script>
</body>

</html>