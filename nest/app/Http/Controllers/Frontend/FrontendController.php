<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Index View
    public function index() {
        return view('frontend.index');
    }
    //blogCateList View
    public function blogCateList() {
        return view('frontend.pages.blog-category-list');
    }
    //blogPostRight View
    public function blogPostRight() {
        return view('frontend.pages.blog-post-right');
    }
    //shopCart View
    public function shopCart() {
        return view('frontend.pages.shop-cart');
    }
    //shopCheckout View
    public function shopCheckout() {
        return view('frontend.pages.shop-checkout');
    }
    //shopCompare View
    public function shopCompare() {
        return view('frontend.pages.shop-compare');
    }
    //shopGridLeft View
    public function shopGridLeft() {
        return view('frontend.pages.shop-grid-left');
    }
    //shopInvoice View
    public function shopInvoice() {
        return view('frontend.pages.shop-invoice');
    }
    //shopProFull View
    public function shopProFull() {
        return view('frontend.pages.shop-product-full');
    }
    //shopWishlist View
    public function shopWishlist() {
        return view('frontend.pages.shop-wishlist');
    }
    //vendorDetails View
    public function vendorDetails() {
        return view('frontend.pages.vendor-details');
    }
    //vendorGuide View
    public function vendorGuide() {
        return view('frontend.pages.vendor-guide');
    }
    //vendorGrid View
    public function vendorGrid() {
        return view('frontend.pages.vendor-grid');
    }
}
