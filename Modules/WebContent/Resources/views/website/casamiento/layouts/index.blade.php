<!DOCTYPE html>
<html lang="en">


@section('htmlheader')
	@include('webcontent::website.casamiento.layouts.htmlheader')
@show


<body id="home">


    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ asset('theme-front/casamiento/images/preloader.gif') }}" alt="">
                    </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="wpo-site-header">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.html">¡Sí, quiero!</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a class="active" href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Wedding Home 1</a></li>
                                                <li><a class="active" href="index-2.html">Wedding Home 2</a></li>
                                                <li><a href="index-3.html">Announcement Home 1</a></li>
                                                <li><a href="index-4.html">Announcement Home 2</a></li>
                                                <li><a href="index-5.html">Muslim Wedding Home</a></li>
                                                <li><a href="index-6.html">Asian Wedding Home</a></li>
                                                <li><a href="index-rtl.html">Muslim Wedding Home(RTL)</a></li>
                                                <li><a href="invitation-1.html">Wedding Invitation 1</a></li>
                                                <li><a href="invitation-2.html">Wedding Invitation 2</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Event Planner Homes</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index-7.html">Wedding Planner 1</a></li>
                                                        <li><a href="index-8.html">Wedding Planner 2</a></li>
                                                        <li><a href="index-9.html">Wedding Planner 3</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Wedding Shop Homes</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop-home.html">Bridal Shop</a></li>
                                                        <li><a href="shop-home-2.html">Wedding Bouquet Shop</a></li>
                                                        <li><a href="shop-home-video-bg.html">Bouquet Shop Video Bg</a></li>
                                                        <li><a href="shop-home-3.html">Wedding Cake Shop</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">About</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="story.html">Our Story</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="story.html">Our Story Style 1</a></li>
                                                        <li><a href="story-2.html">Our Story Style 2</a></li>
                                                        <li><a href="story-3.html">Our Story Style 3</a></li>
                                                        <li><a href="story-4.html">Our Story Style 4</a></li>
                                                        <li><a href="story-5.html">Our Story Style 5</a></li>
                                                        <li><a href="story-6.html">Our Story Style 6</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="accomodation.html">Accomodation</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="rsvp.html">RSVP</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="rsvp.html">RSVP Style 1</a></li>
                                                        <li><a href="rsvp-2.html">RSVP Style 2</a></li>
                                                        <li><a href="rsvp-3.html">RSVP Style 3</a></li>
                                                        <li><a href="rsvp-4.html">RSVP Style 4</a></li>
                                                        <li><a href="rsvp-5.html">RSVP Style 5</a></li>
                                                        <li><a href="rsvp-6.html">RSVP Style 6</a></li>
                                                        <li><a href="rsvp-7.html">RSVP Style 7</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="planner.html">Planners</a></li>
                                                <li><a href="team-single.html">Planner Single</a></li>
                                                <li><a href="groom-bride.html">Brides & Grooms</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Serevice</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="service.html">Serevice</a></li>
                                                        <li><a href="service-s2.html">Serevice S2</a></li>
                                                        <li><a href="service-s3.html">Serevice S3</a></li>
                                                        <li><a href="service-single.html">Serevice Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Auth Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="login.html">Login</a>
                                                        </li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="forgot.html">Forgot Password</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="coming.html">Coming Soon</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="portfolio-grid.html">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                                                <li><a href="portfolio-masonary.html">Portfolio Masonary</a></li>
                                                <li><a href="portfolio-masonary-s2.html">Portfolio Masonary S2</a></li>
                                                <li><a href="portfolio-masonary-s3.html">Portfolio Masonary S3</a></li>
                                                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="blog.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.html">Blog details right sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog details left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.html">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            {{-- <button class="search-toggle-btn"><i class="fi flaticon-search"></i></button> --}}
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control" placeholder="Search here...">
                                                        <button type="submit"><i class="fi flaticon-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart">
                                        {{-- <button class="cart-toggle-btn"> <i class="fi flaticon-shopping-cart"></i> --}}
                                            {{-- <span class="cart-count">2</span></button> --}}
                                        <div class="mini-cart-content">
                                            <button class="mini-cart-close"><i class="ti-close"></i></button>
                                            <div class="mini-cart-items">
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="{{ url('shop') }}"><img src="{{ asset('theme-front/casamiento/images/shop/mini-cart/img-1.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Wedding Gown</a>
                                                        <span class="mini-cart-item-price">$20.15 x 1</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img src="{{ asset('theme-front/casamiento/images/shop/mini-cart/img-2.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Bridal Flower</a>
                                                        <span class="mini-cart-item-price">$13.25 x 2</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-action clearfix">
                                                <span class="mini-checkout-price">Subtotal:
                                                    <span>$215.14</span></span>
                                                <div class="mini-btn">
                                                    <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                    <a href="cart.html" class="view-cart-btn">View Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->
        <!-- start of hero -->
        <section class="static-hero">
            <div class="hero-container">
                <div class="hero-inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-12">
                                <div class="wpo-static-hero-inner">
                                    <div class="shape-1 wow fadeInUp" data-wow-duration="1400ms"><img src="{{ asset('theme-front/casamiento/images/slider/shape1.svg') }}" alt=""></div>
                                    <div class="slide-title wow fadeInUp" data-wow-duration="1500ms">
                                        <h2>Belén y José Maria</h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text wow fadeInUp" data-wow-duration="1600ms">
                                        <p>¡Nos Casamos!</p>
                                    </div>
                                    <div class="wpo-wedding-date wow fadeInUp" data-wow-duration="1700ms">
                                        <div class="clock-grids">
                                            <div id="clock"></div>
                                        </div>
                                    </div>
                                    <div class="shape-2 wow fadeInUp" data-wow-duration="1800ms"><img src="{{ asset('theme-front/casamiento/images/slider/shape2.svg') }}" alt=""></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="static-hero-right">
                <div class="static-hero-img scene" id="scene">
                    <div class="static-hero-img-inner">
                        <img src="{{ asset('theme-front/casamiento/images/slider/hero-1.jpg') }}" alt="">
                    </div>
                    {{-- <div class="static-hero-shape-1 wow fadeInDown" data-wow-delay=".5s">
                        <span class="layer" data-depth="0.25">
                            <img src="{{ asset('theme-front/casamiento/images/slider/shape3.svg') }}" alt="">
                        </span>
                    </div> --}}
                    {{-- <div class="static-hero-shape-2 wow fadeInDown" data-wow-delay=".5s">
                        <span class="layer" data-depth="0.45">
                            <img src="{{ asset('theme-front/casamiento/images/slider/shape4.svg') }}" alt="">
                        </span>
                    </div> --}}
                    {{-- <div class="static-hero-shape-3">
                        <span class="layer" data-depth="0.65">
                            <img src="{{ asset('theme-front/casamiento/images/slider/shape5.svg') }}" alt="">
                        </span>
                    </div> --}}
                    <div class="static-hero-shape-4 wow fadeInUp" data-wow-delay=".5s">
                            <img src="{{ asset('theme-front/casamiento/images/slider/shape6.svg') }}" alt="">
                    </div>
                </div>
                <div class="static-hero-img-bg">
                    <img src="{{ asset('theme-front/casamiento/images/slider/hero-bg.jpg') }}" alt="">
                </div>
            </div>
            <div class="right-shape">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 650 597" fill="none">
                    <path d="M717 0C717 0 527.91 0 475.696 129.736C423.481 259.472 501.092 358.185 396.683 423.034C292.274 487.902 74.9839 485.573 26.2847 646.096C-22.3947 806.598 11.4538 863 11.4538 863L653.509 803.776L717 0Z"></path>
                </svg>
            </div>
        </section>
        <!-- end of hero slider -->
        <!-- start couple-section -->
        <section class="wpo-couple-section section-padding" id="couple">
            <div class="container">
                <div class="couple-area clearfix">
                    <div class="row align-items-center">
                        <div class="col col-md-12 col-12">
                            <div class="couple-item">
                                <div class="couple-img-wrap wow fadeInLeftSlow" data-wow-duration="1700ms">
                                    <div class="couple-img" style="mask-image: url(assets/images/couple/mask-1.svg); -webkit-mask-image: url(assets/images/couple/mask-1.svg);">
                                        <img src="{{ asset('theme-front/casamiento/images/couple/1.jpg') }}" alt="">

                                    </div>
                                    <div class="c-shape">
                                        <img src="{{ asset('theme-front/casamiento/images/couple/image-bg.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="couple-text wow fadeInRightSlow" data-wow-duration="1700ms">
                                    <h3>Amelia Lily</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna orci auctor vitae
                                        nisl. Erat fringilla pellentesque amet tempus. Commodo mi vitae, sagittis
                                        blandit.</p>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-12 col-12">
                            <div class="couple-item">
                                <div class="couple-img-wrap wow fadeInRightSlow" data-wow-duration="1700ms">
                                    <div class="couple-img" style="mask-image: url(assets/images/couple/mask-2.svg); -webkit-mask-image: url(assets/images/couple/mask-2.svg);">
                                        <img src="{{ asset('theme-front/casamiento/images/couple/2.jpg') }}" alt="">
                                    </div>
                                    <div class="c-shape">
                                        <img src="{{ asset('theme-front/casamiento/images/couple/image-bg.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="couple-text wow fadeInLeftSlow" data-wow-duration="1700ms">
                                    <h3>James Cole</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna orci auctor vitae
                                        nisl. Erat fringilla pellentesque amet tempus. Commodo mi vitae, sagittis
                                        blandit.</p>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="shape-1">
                <svg viewbox="0 0 1920 692" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.1">
                        <path class="stroke-color" d="M-11 689C176.333 697 609 669.4 841 495L1111 279C1263.67 154.333 1640.6 -71.0002 1927 24.9998" stroke="" stroke-width="2"></path>
                        <path d="M-11 689C176.333 697 609 669.4 841 495L1111 279C1263.67 154.333 1640.6 -71.0002 1927 24.9998" stroke="black" stroke-opacity="0.2" stroke-width="2"></path>
                    </g>
                    <g opacity="0.1">
                        <path class="stroke-color" d="M1927 689C1739.67 697 1307 669.4 1075 495L805 279C652.333 154.333 275.4 -71.0002 -11 24.9998" stroke="" stroke-width="2"></path>
                        <path d="M1927 689C1739.67 697 1307 669.4 1075 495L805 279C652.333 154.333 275.4 -71.0002 -11 24.9998" stroke="black" stroke-opacity="0.2" stroke-width="2"></path>
                    </g>
                    <path class="fill-color" d="M879 397C501.4 54.5998 135 31.6665 -1 62.9998V649C579.8 636.2 827.667 475.667 879 397Z" fill=""></path>
                    <path class="fill-color" d="M1041 397C1418.6 54.5998 1785 31.6665 1921 62.9998V649C1340.2 636.2 1092.33 475.667 1041 397Z" fill=""></path>
                </svg>
            </div>
        </section>
        <!-- end couple-section -->

        <!-- start wpo-story-section -->
        <section class="wpo-story-section section-padding" id="story">
            <div class="container">
                <div class="wpo-section-title">
                    <span>Our Story</span>
                    <h2>How it Happened</h2>
                </div>
                <div class="wpo-story-wrap">
                    <div class="wpo-story-item">
                        <div class="wpo-story-img-wrap">
                            <div class="wpo-story-img wow zoomIn" data-wow-duration="1000ms">
                                <img src="{{ asset('theme-front/casamiento/images/story/1.jpg') }}" alt="">
                            </div>
                            <div class="wpo-img-shape">
                                <img src="{{ asset('theme-front/casamiento/images/story/shape.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-story-content">
                            <div class="wpo-story-content-inner wow fadeInRightSlow" data-wow-duration="1700ms">
                                <span>15 June, 2014</span>
                                <h2>How we meet</h2>
                                <p>Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed. Enim
                                    tortor, faucibus netus orci donec volutpat adipiscing. Sit condimentum elit
                                    convallis libero. Nunc in eu tellus ipsum placerat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-story-item">
                        <div class="wpo-story-img-wrap">
                            <div class="wpo-story-img wow zoomIn" data-wow-duration="1000ms">
                                <img src="{{ asset('theme-front/casamiento/images/story/2.jpg') }}" alt="">
                            </div>
                            <div class="clip-shape">
                                <svg viewbox="0 0 382 440" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M191 0L381.526 110V330L191 440L0.474411 330V110L191 0Z"></path>
                                </svg>
                            </div>
                            <div class="wpo-img-shape">
                                <img src="{{ asset('theme-front/casamiento/images/story/shape2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-story-content">
                            <div class="wpo-story-content-inner wow fadeInLeftSlow" data-wow-duration="1700ms">
                                <span>02 Nov, 2020</span>
                                <h2>He proposed, I said yes</h2>
                                <p>Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed. Enim
                                    tortor, faucibus netus orci donec volutpat adipiscing. Sit condimentum elit
                                    convallis libero. Nunc in eu tellus ipsum placerat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-story-item">
                        <div class="wpo-story-img-wrap">
                            <div class="wpo-story-img wow zoomIn" data-wow-duration="1000ms">
                                <img src="{{ asset('theme-front/casamiento/images/story/3.jpg') }}" alt="">
                            </div>
                            <div class="wpo-img-shape">
                                <img src="{{ asset('theme-front/casamiento/images/story/shape3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-story-content">
                            <div class="wpo-story-content-inner wow fadeInRightSlow" data-wow-duration="1700ms">
                                <span>15 Apr, 2021</span>
                                <h2>Our Engagement Day</h2>
                                <p>Consectetur adipiscing elit. Fringilla at risus orci, tempus facilisi sed. Enim
                                    tortor, faucibus netus orci donec volutpat adipiscing. Sit condimentum elit
                                    convallis libero. Nunc in eu tellus ipsum placerat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="flower-shape-1">
                <img src="{{ asset('theme-front/casamiento/images/story/flower-shape1.svg') }}" alt="">
            </div>
            <div class="flower-shape-2">
                <img src="{{ asset('theme-front/casamiento/images/story/flower-shape2.svg') }}" alt="">
            </div>
            <div class="flower-shape-3">
                <img src="{{ asset('theme-front/casamiento/images/story/flower-shape3.svg') }}" alt="">
            </div>
            <div class="flower-shape-4">
                <img src="{{ asset('theme-front/casamiento/images/story/flower-shape4.svg') }}" alt="">
            </div>
        </section>
        <!-- end story-section -->

        <!-- start wpo-portfolio-section -->
        <section class="wpo-portfolio-section section-padding" id="gallery">
            <h2 class="hidden">some</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-grids gallery-container clearfix portfolio-slide owl-carousel">
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/1.jpg" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="{{ asset('theme-front/casamiento/images/portfolio/1.jpg') }}" alt="" class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/2.jpg" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="{{ asset('theme-front/casamiento/images/portfolio/2.jpg') }}" alt="" class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/3.jpg" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="{{ asset('theme-front/casamiento/images/portfolio/3.jpg') }}" alt="" class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/4.jpg" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="{{ asset('theme-front/casamiento/images/portfolio/4.jpg') }}" alt="" class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/5.jpg" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="{{ asset('theme-front/casamiento/images/portfolio/5.jpg') }}" alt="" class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <a href="assets/images/portfolio/6.jpg" class="fancybox" data-fancybox-group="gall-1">
                                        <img src="{{ asset('theme-front/casamiento/images/portfolio/6.jpg') }}" alt="" class="img img-responsive">
                                        <div class="hover-content">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-portfolio-section -->

        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section section-padding">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="wpo-contact-section-wrapper">
                            <div class="wpo-section-title">
                                <h2>Are You Attending?</h2>
                            </div>
                            <div class="wpo-contact-form-area">
                                <form method="post" class="contact-validation-active" id="contact-form-main">
                                    <div>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="radio-buttons">
                                        <p>
                                            <input type="radio" id="attend" name="radio-group" checked="">
                                            <label for="attend">Yes, I will be there</label>
                                        </p>
                                        <p>
                                            <input type="radio" id="not" name="radio-group">
                                            <label for="not">Sorry, I can’t come</label>
                                        </p>
                                    </div>
                                    <div>
                                        <select name="guest" class="form-control">
                                            <option disabled="disabled" selected="">Number Of Guests</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="what" id="what" placeholder="What Will You Be Attending">
                                    </div>
                                    <div>
                                        <select name="meal" class="form-control last">
                                            <option disabled="disabled" selected="">Meal Preferences</option>
                                            <option>Chicken Soup</option>
                                            <option>Motton Kabab</option>
                                            <option>Chicken BBQ</option>
                                            <option>Mix Salad</option>
                                            <option>Beef Ribs </option>
                                        </select>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">RSVP</button>
                                        <div id="c-loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you, Message Send</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-bg">
                <svg viewbox="0 0 1920 634" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="bg-path" d="M207 286C162.2 87.6 39 44.6667 -17 48L-91 22L-71 726H13L1977 670L1957 424C1926.6 318.4 1815 392 1763 442C1619.8 570 1503.33 495.333 1463 442C1270.2 162.8 1197.33 325.667 1185 442C1159.4 584.4 1117 537.333 1099 496C953.4 192.8 868.333 328.333 844 434C791.2 649.2 649.333 555.667 585 482C455.4 356.4 380.333 429.667 359 482C315 616.4 273.333 547.333 258 496L207 286Z" fill=""></path>
                    <path class="bg-stroke" d="M207 266C162.2 67.6 39 24.6667 -17 28L-91 2L-71 706H13L1977 650L1957 404C1926.6 298.4 1815 372 1763 422C1619.8 550 1503.33 475.333 1463 422C1270.2 142.8 1197.33 305.667 1185 422C1159.4 564.4 1117 517.333 1099 476C953.4 172.8 868.333 308.333 844 414C791.2 629.2 649.333 535.667 585 462C455.4 336.4 380.333 409.667 359 462C315 596.4 273.333 527.333 258 476L207 266Z" stroke="" stroke-width="2"></path>
                </svg>

                <div class="shape-1">
                    <img src="{{ asset('theme-front/casamiento/images/rsvp/shape.svg') }}" alt="">
                </div>
                <div class="shape-2 wow fadeInUp" data-wow-duration="1000ms">
                    <img src="{{ asset('theme-front/casamiento/images/rsvp/shape2.svg') }}" alt="">
                </div>
                <div class="shape-3 wow fadeInUp" data-wow-duration="1200ms">
                    <img src="{{ asset('theme-front/casamiento/images/rsvp/shape3.svg') }}" alt="">
                </div>
                <div class="shape-4 wow fadeInUp" data-wow-duration="1400ms">
                    <img src="{{ asset('theme-front/casamiento/images/rsvp/shape4.svg') }}" alt="">
                </div>
                <div class="shape-5 wow fadeInUp" data-wow-duration="1600ms">
                    <img src="{{ asset('theme-front/casamiento/images/rsvp/shape5.svg') }}" alt="">
                </div>
                <div class="shape-6 wow fadeInUp" data-wow-duration="1800ms">
                    <img src="{{ asset('theme-front/casamiento/images/rsvp/shape6.svg') }}" alt="">
                </div>
            </div>
        </section>
        <!-- end of wpo-contact-section -->

        <!-- start wpo-event-section -->
        <section class="wpo-event-section section-padding" id="event">
            <div class="container">
                <div class="wpo-section-title">
                    <span>Our Wedding</span>
                    <h2>When & Where</h2>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="assets/images/event/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>The Reception</h2>
                                    </div>
                                    <ul>
                                        <li>Monday, 12 Apr. 2022 <br>
                                            1:00 PM – 2:30 PM</li>
                                        <li>4517 Washington Ave. Manchester, Kentucky 39495</li>
                                        <li>+1 234-567-8910</li>
                                        <li> <a class="popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="{{ asset('theme-front/casamiento/images/event/2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>The Ceremony</h2>
                                    </div>
                                    <ul>
                                        <li>Monday, 12 Apr. 2022 <br>
                                            1:00 PM – 2:30 PM</li>
                                        <li>4517 Washington Ave. Manchester, Kentucky 39495</li>
                                        <li>+1 234-567-8910</li>
                                        <li> <a class="popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="{{ asset('theme-front/casamiento/images/event/3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="wpo-event-text">
                                    <div class="title">
                                        <h2>The Party</h2>
                                    </div>
                                    <ul>
                                        <li>Monday, 12 Apr. 2022 <br>
                                            1:00 PM – 2:30 PM</li>
                                        <li>4517 Washington Ave. Manchester, Kentucky 39495</li>
                                        <li>+1 234-567-8910</li>
                                        <li> <a class="popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">See
                                                Location</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-event-section -->

        <!-- start wpo-blog-section -->
        <section class="wpo-blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="wpo-section-title">
                        <span>Our Blog</span>
                        <h2>Our Latest Wedding News</h2>
                    </div>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-blog-img">
                                    <img src="{{ asset('theme-front/casamiento/images/blog/img-1.jpg') }}" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <ul>
                                        <li>By <a href="blog-single.html">Robertson Doe</a></li>
                                        <li>25 Sep 2023</li>
                                    </ul>
                                    <h2><a href="blog.html">Top 10 wedding bouquet arranging idea</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-blog-img">
                                    <img src="{{ asset('theme-front/casamiento/images/blog/img-2.jpg') }}" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <ul>
                                        <li>By <a href="blog-single.html">David Luis</a></li>
                                        <li>23 Sep 2023</li>
                                    </ul>
                                    <h2><a href="blog.html">You must need a great photographer.</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-blog-img">
                                    <img src="{{ asset('theme-front/casamiento/images/blog/img-3.jpg') }}" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <ul>
                                        <li>By <a href="blog-single.html">Aliana de</a></li>
                                        <li>21 Sep 2023</li>
                                    </ul>
                                    <h2><a href="blog.html">Make sure your wedding gown is the best one.</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-shape-2">
                        <img src="{{ asset('theme-front/casamiento/images/blog/shape-2.svg') }}" alt="">
                    </div>
                </div>
            </div> <!-- end container -->
            <div class="b-shape">
                <img src="{{ asset('theme-front/casamiento/images/blog/shape-1.svg') }}" alt="">
            </div>
        </section>




    @section('scripts')
         @include('webcontent::website.casamiento.layouts.scripts')
     @show


</body>

@extends('webcontent::website.casamiento.layouts.footer')

</html>