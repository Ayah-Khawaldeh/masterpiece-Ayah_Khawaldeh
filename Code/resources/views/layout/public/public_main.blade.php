<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from themepure.net/template/A-Rent-prv/A-Rent/shop-4-col.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 20:56:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Rent - Clean, Minimal eCommerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/preloader.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/metisMenu.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/ui-range-slider.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/fontAwesome5Pro.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('public_theme/assets/css/style.css')}}">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- prealoder area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                </div>
            </div>
        </div>
        <!-- prealoder area end -->

        <!-- header area start -->
        <header>
            <div id="header-sticky" class="header__area header__transparent grey-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="logo">
                                <a href="/public"><img src="{{asset('public_theme/assets/img/logo/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                            <div class="header__right p-relative d-flex justify-content-between align-items-center">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul>
                                                  <li><a href="/public">Home </a></li>

                                            <li "> <a href="/shop">Shop</a>


                                                 {{--  <ul class="submenu transition-3">

                                                    <li><a href="/Books">Books</a></li>
                                                    <li><a href="/Electrical">Electrical</a></li>
                                                    <li><a href="/Houseware">Houseware</a></li>

                                                </ul>   --}}


                                            </li>

                                            <li class="has-dropdown"> <a href="/Contact_Us">Contact</a>
                                                <ul class="submenu transition-3">
                                                    <li><a href="/About_Us">About Us</a></li>
                                                    <li><a href="/Contact_Us">Contact us</a></li>

                                                </ul>
                                            </li>

                                 <li>  <div class="header__action">
                                    <ul>
                                        <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i> Search</a></li>
                                        <li><a href="javascript:void(0);" class="cart"><i class="ion-bag"></i> Cart <span>@if(Auth::user())({{count(auth()->user()->Carts)}})@endif</span></a>
                                            <ul class="mini-cart">

                                                </li>
                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Subtotal:</span>
                                                        <span class="f-right">300$</span>
                                                    </div>
                                                </li>
                                                {{-- <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Subtotal:</span>
                                                        <span class="f-right">{{$total}}</span>
                                                    </div>
                                                </li> --}}
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="/Cart" class="os-btn">view Cart</a>
                                                        <a class="os-btn os-btn-black" href="/Checkout">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div></li>

                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu-btn d-lg-none">
                                    <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                                </div>
                                <div class="header__action">
                                    <ul>
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="/profile">My profile</a>

                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->

        <!-- search area start -->
        <section class="header__search white-bg transition-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__search-inner text-center">
                            <form action="#">
                                <div class="header__search-btn">
                                    <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                                </div>
                                <div class="header__search-header">
                                    <h3>Search</h3>
                                </div>
                                <div class="header__search-categories">
                                    <ul class="search-category">
                                        <li><a href="/Books">Books</a></li>
                                        <li><a href="/Electrical">Electrical</a></li>
                                        <li><a href="/Houseware">Houseware</a></li>

                                    </ul>
                                </div>
                                <div class="header__search-input p-relative">
                                    <input type="text" placeholder="Search for products... ">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- search area end -->

        <!-- extra info area start -->
        <section class="extra__info transition-3">
            <div class="extra__info-inner">
                <div class="extra__info-close text-right">
                    <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
                </div>
                <!-- side-mobile-menu start -->
                <nav class="side-mobile-menu d-block d-lg-none">
                    <ul id="mobile-menu-active">
                        <li><a href="/public">Home </a></li>

                      <li class="has-dropdown"><a href="/Products">Shop</a>
                            <ul class="submenu transition-3">
                                <li><a href="/Books">Books</a></li>
                                <li><a href="/Electrical">Electrical</a></li>
                                <li><a href="/Houseware">Houseware</a></li>
                            </ul>
                        </li>

                        <li class="has-dropdown"><a href="/Profile">Profile</a>
                            <ul class="submenu transition-3">
                                <li><a href="/Profile">Profile</a></li>
                                <li><a href="/Register">Register</a></li>
                                <li><a href="/Login">Login</a></li>

                            </ul>
                        </li>

                        <li><a href="/Contact_Us">Contact</a></li>
                        <li><a href="/About_Us">About Us</a></li>
                    </ul>
                </nav>
                <!-- side-mobile-menu end -->
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- extra info area end -->



    @yield('contant')
    <!-- footer area start -->
    <section class="footer__area footer-bg">
        <div class="footer__top pt-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="footer__widget mb-30">
                            <div class="footer__widget-title mb-25">
                                <a href="/public"><img src="{{asset('public_theme/assets/img/logo/logo-2.png')}}" alt="logo"></a>
                            </div>
                            <div class="footer__widget-content">
                                <p>A-Rent is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                <div class="footer__contact">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="fal fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <span>Add: 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fal fa-envelope-open-text"></i>
                                            </div>
                                            <div class="text">
                                                <span>Email: <a href="http://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcffd3d2c8dddfc8fcdeddcfd5dfc8d4d9d1d992dfd3d1">A-Rent@gmail.com</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fal fa-phone-alt"></i>
                                            </div>
                                            <div class="text">
                                                <span>Phone Number: (800) 123 456 789</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                        <div class="footer__widget mb-30">
                            <div class="footer__widget-title">
                                <h5>information</h5>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <li><a href="/About_Us">About Us</a></li>
                                        <li><a href="/shop">Sope</a></li>
                                        <li><a href="/Contact_Us">Delivery Inforamtion</a></li>
                                        <li><a href="/Contact_Us">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                        <div class="footer__widget mb-30">
                            <div class="footer__widget-title mb-25">
                                <h5>Customer Service</h5>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <li><a href="/shop">Shipping Policy</a></li>
                                        <li><a href="/Contact_Us">Help & Contact Us</a></li>
                                        <li><a href="/About_Us">Returns & Refunds</a></li>
                                        <li><a href="/shop">Online Stores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="footer__copyright">
                            <p>Copyright © <a href="/public">A-Rent</a> all rights reserved.  </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="footer__social f-right">
                            <ul>
                                <li><a href="https://www.facebook.com/ayah.khawaldeh.1"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/Ayah_Kh13"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://github.com/Ayah-Khawaldeh"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer area end -->

    <!-- JS here -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('public_theme/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/jquery-ui-slider-range.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public_theme/assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from themepure.net/template/A-Rent-prv/A-Rent/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 20:56:00 GMT -->
</html>
