<div class="header-bottom header-bottom-bg-color sticky-bar">
    <div class="container">
        <div class="header-wrap header-space-between position-relative">
            <div class="logo logo-width-1 d-block d-lg-none">
                <a href="{{Route('index')}}"><img src="{{asset('frontend')}}/assets/imgs/theme/logo.svg" alt="logo" /></a>
            </div>
            <div class="header-nav d-none d-lg-flex">
                <div class="main-categori-wrap d-none d-lg-block">
                    <a class="categories-button-active" href="#">
                        <span class="fi-rs-apps"></span>   All Categories
                        <i class="fi-rs-angle-down"></i>
                    </a>
                    <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                        <div class="d-flex categori-dropdown-inner">
                            <ul>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-1.svg" alt="" />Milks and Dairies</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-2.svg" alt="" />Clothing & beauty</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods & Toy</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a>
                                </li>
                            </ul>
                            <ul class="end">
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-6.svg" alt="" />Wines & Drinks</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-7.svg" alt="" />Fresh Seafood</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-8.svg" alt="" />Fast food</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-9.svg" alt="" />Vegetables</a>
                                </li>
                                <li>
                                    <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/category-10.svg" alt="" />Bread and Juice</a>
                                </li>
                            </ul>
                        </div>
                        <div class="more_slide_open" style="display: none">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    <li>
                                        <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-1.svg" alt="" />Milks and Dairies</a>
                                    </li>
                                    <li>
                                        <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-2.svg" alt="" />Clothing & beauty</a>
                                    </li>
                                </ul>
                                <ul class="end">
                                    <li>
                                        <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-3.svg" alt="" />Wines & Drinks</a>
                                    </li>
                                    <li>
                                        <a href="{{Route('shopGridLeft')}}"> <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-4.svg" alt="" />Fresh Seafood</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                    </div>
                </div>
                <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                    <nav>
                        <ul>
                            
                            <li>
                                <a class="active" href="{{Route('index')}}">Home  </a>
                                
                            </li>
                            <li>
                                <a href="page-about.html">About</a>
                            </li>
                            <li>
                                <a href="{{Route('shopGridLeft')}}">Shop <i class="fi-rs-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{Route('shopGridLeft')}}">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="{{Route('shopGridLeft')}}">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li>
                                        <a href="#">Single Product <i class="fi-rs-angle-right"></i></a>
                                        <ul class="level-menu">
                                            <li><a href="{{Route('shopProFull')}}">Product – Right Sidebar</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Product – Left Sidebar</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Product – No sidebar</a></li>
                                            <li><a href="shop-product-vendor.html">Product – Vendor Info</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="{{Route('shopWishlist')}}">Shop – Wishlist</a></li>
                                    <li><a href="{{Route('shopCart')}}">Shop – Cart</a></li>
                                    <li><a href="{{Route('shopCheckout')}}">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                    <li>
                                        <a href="#">Shop Invoice<i class="fi-rs-angle-right"></i></a>
                                        <ul class="level-menu">
                                            <li><a href="{{Route('shopInvoice')}}">Shop Invoice 1</a></li>
                                            <li><a href="{{Route('shopInvoice')}}">Shop Invoice 2</a></li>
                                            <li><a href="{{Route('shopInvoice')}}">Shop Invoice 3</a></li>
                                            <li><a href="{{Route('shopInvoice')}}">Shop Invoice 4</a></li>
                                            <li><a href="{{Route('shopInvoice')}}">Shop Invoice 5</a></li>
                                            <li><a href="{{Route('shopInvoice')}}">Shop Invoice 6</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Vendors <i class="fi-rs-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{Route('vendorGrid')}}">Vendors Grid</a></li>
                                    <li><a href="vendors-list.html">Vendors List</a></li>
                                    <li><a href="{{Route('vendorDetails')}}">Vendor Details 01</a></li>
                                    <li><a href="{{Route('vendorDetails')}}">Vendor Details 02</a></li>
                                    <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                    <li><a href="{{Route('vendorGuide')}}">Vendor Guide</a></li>
                                </ul>
                            </li>
                            <li class="position-static">
                                <a href="#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                <ul class="mega-menu">
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Fruit & Vegetables</a>
                                        <ul>
                                            <li><a href="{{Route('shopProFull')}}">Meat & Poultry</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Fresh Vegetables</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Herbs & Seasonings</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Cuts & Sprouts</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Exotic Fruits & Veggies</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Packaged Produce</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Breakfast & Dairy</a>
                                        <ul>
                                            <li><a href="{{Route('shopProFull')}}">Milk & Flavoured Milk</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Butter and Margarine</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Eggs Substitutes</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Marmalades</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Sour Cream</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Cheese</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                        <a class="menu-title" href="#">Meat & Seafood</a>
                                        <ul>
                                            <li><a href="{{Route('shopProFull')}}">Breakfast Sausage</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Dinner Sausage</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Chicken</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Sliced Deli Meat</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Wild Caught Fillets</a></li>
                                            <li><a href="{{Route('shopProFull')}}">Crab and Shellfish</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-mega-menu sub-mega-menu-width-34">
                                        <div class="menu-banner-wrap">
                                            <a href="{{Route('shopProFull')}}"><img src="{{asset('frontend')}}/assets/imgs/banner/banner-menu.png" alt="Nest" /></a>
                                            <div class="menu-banner-content">
                                                <h4>Hot deals</h4>
                                                <h3>
                                                    Don't miss<br />
                                                    Trending
                                                </h3>
                                                <div class="menu-banner-price">
                                                    <span class="new-price text-success">Save to 50%</span>
                                                </div>
                                                <div class="menu-banner-btn">
                                                    <a href="{{Route('shopProFull')}}">Shop now</a>
                                                </div>
                                            </div>
                                            <div class="menu-banner-discount">
                                                <h3>
                                                    <span>25%</span>
                                                    off
                                                </h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog-category-grid.html">Blog <i class="fi-rs-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="{{Route('blogCateList')}}">Blog Category List</a></li>
                                    <li><a href="{{Route('blogCateList')}}">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li>
                                        <a href="#">Single Post <i class="fi-rs-angle-right"></i></a>
                                        <ul class="level-menu level-menu-modify">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="{{Route('blogPostRight')}}">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="{{Route('login')}}">Login</a></li>
                                    <li><a href="{{Route('register')}}">Register</a></li>
                                    <li><a href="page-forgot-password.html">Forgot password</a></li>
                                    <li><a href="page-reset-password.html">Reset password</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="page-contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>


            <div class="hotline d-none d-lg-flex">
                <img src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                <p>1900 - 888<span>24/7 Support Center</span></p>
            </div>
            <div class="header-action-icon-2 d-block d-lg-none">
                <div class="burger-icon burger-icon-white">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="header-action-right d-block d-lg-none">
                <div class="header-action-2">
                    <div class="header-action-icon-2">
                        <a href="shop-wishlist.html">
                            <img alt="Nest" src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-heart.svg" />
                            <span class="pro-count white">4</span>
                        </a>
                    </div>
                    <div class="header-action-icon-2">
                        <a class="mini-cart-icon" href="#">
                            <img alt="Nest" src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-cart.svg" />
                            <span class="pro-count white">2</span>
                        </a>
                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                            <ul>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="{{Route('shopProFull')}}"><img alt="Nest" src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-3.jpg" /></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="{{Route('shopProFull')}}">Plain Striola Shirts</a></h4>
                                        <h3><span>1 × </span>$800.00</h3>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-cart-img">
                                        <a href="{{Route('shopProFull')}}"><img alt="Nest" src="{{asset('frontend')}}/assets/imgs/shop/thumbnail-4.jpg" /></a>
                                    </div>
                                    <div class="shopping-cart-title">
                                        <h4><a href="{{Route('shopProFull')}}">Macbook Pro 2022</a></h4>
                                        <h3><span>1 × </span>$3500.00</h3>
                                    </div>
                                    <div class="shopping-cart-delete">
                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="shopping-cart-footer">
                                <div class="shopping-cart-total">
                                    <h4>Total <span>$383.00</span></h4>
                                </div>
                                <div class="shopping-cart-button">
                                    <a href="shop-cart.html">View cart</a>
                                    <a href="shop-checkout.html">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>