@extends('front.layouts.master')

@section('content')
<!-- SLIDER SECTION START -->
<div class="slider-1 pos-relative slider-overlay">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            <img src="{{ asset("/assets_front/images/slider/1.jpg") }}" alt="" title="#slider-direction-1" />
            <img src="{{ asset("/assets_front/images/slider/2.jpg") }}" alt="" title="#slider-direction-2" />
            <img src="{{ asset("/assets_front/images/slider/1.jpg") }}" alt="" title="#slider-direction-3" />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction">
            <div class="slider-content text-center">
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4 class="slider-1-title-1">Welcome to <span>Kare Canada</span></h4>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                    <p class="slider-1-desc">Kare Canada Ltd is a private equity company that develops and manages commercial real estate throughout Canada</p>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                    <a class="slider-button mt-40" href="{{ asset("/assets_front/#") }}">Read More</a>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction">
            <div class="slider-content text-left">
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4 class="slider-1-title-1">Welcome to <span>Kare Canada </span></h4>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                    <p class="slider-1-desc">Kare Canada Ltd is a private equity company that develops and manages commercial real estate throughout Canada </p>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                    <a class="slider-button mt-40" href="{{ asset("/assets_front/#") }}">Read More</a>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-3" class="slider-direction">
            <div class="slider-content text-right">
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4 class="slider-1-title-1">Welcome to <span>Kare Canada </span></h4>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                    <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit
                        amet <br> contetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                </div>
                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                    <a class="slider-button mt-40" href="{{ asset("/assets_front/#") }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER SECTION END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">



    <!-- ABOUT SHELTEK AREA START -->
    <div class="about-sheltek-area ptb-115">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="section-title mb-30">
                        <h3>SOME WORD </h3>
                        <h2>ABOUT Kare Canada </h2>
                    </div>
                    <div class="about-sheltek-info">
                        <p>
                            Kare Canada Ltd is a private equity company that develops and manages commercial real estate throughout Canada. Over the past 15 years, Kare Canada has been responsible for the acquisition and development of approximately 1-Million square feet of commercial plazas and land lots with a total value of over 200 million dollars
                            
                         </p>

                        <p> <span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Our mission </span>
                            grant our tenants a hassle-free professional environment. We inspire trust by saying what we mean, acting honestly and taking responsibility for our actions. And by constantly working and investing to ensure our properties are safe, clean, and in a high-quality condition, allowing tenants to focus on their business and thrive. </p>
                 
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="about-image">
                        <a href="{{ url("about.html") }}"><img src="{{ asset("/assets_front/images/about/1.jpg") }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SHELTEK AREA END -->

    <!-- SERVICES AREA START -->
    <div class="services-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 text-center">
                        <h2>OUR SERVICES</h2>
                        <p>Focusing on core locations and communities, Kare Canada is expanding its portfolio and creating value by continuously revitalizing and managing our own properties.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="service-carousel">
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <a href="{{ url("service-details.html") }}"><img src="{{ asset("/assets_front/images/service/1.jpg") }}" alt=""></a>
                                </div>
                                <div class="service-item-info">
                                    <h5><a href="{{ url("service-details.html") }}">Sale Property</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <a href="{{ url("service-details.html") }}"><img src="{{ asset("/assets_front/images/service/2.jpg") }}" alt=""></a>
                                </div>
                                <div class="service-item-info">
                                    <h5><a href="{{ url("service-details.html") }}">Buy Property</a></h5>
                               
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <a href="{{ url("service-details.html") }}"><img src="{{ asset("/assets_front/images/service/3.jpg") }}" alt=""></a>
                                </div>
                                <div class="service-item-info">
                                    <h5><a href="{{ url("service-details.html") }}">Rent Property</a></h5>
                               
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <a href="{{ url("service-details.html") }}"><img src="{{ asset("/assets_front/images/service/4.jpg") }}" alt=""></a>
                                </div>
                                <div class="service-item-info">
                                    <h5><a href="{{ url("service-details.html") }}">Property Management</a></h5>
                               
                                </div>
                            </div>
                        </div>
                        <!-- service-item -->
                        <div class="col">
                            <div class="service-item">
                                <div class="service-item-image">
                                    <a href="{{ url("service-details.html") }}"><img src="{{ asset("/assets_front/images/service/4.jpg") }}" alt=""></a>
                                </div>
                                <div class="service-item-info">
                                    <h5><a href="{{ url("service-details.html") }}">Sale Property</a></h5>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICES AREA END -->

    <!-- BOOKING AREA START -->
    <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title text-white">
                        <h3>BOOK YOUR</h3>
                        <h2 class="h1">HOME HERE</h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="booking-conternt clearfix">
                        <div class="book-house text-white">
                            <h2>BOOK YO`UR APPARTMENT OR HOUSE </h2>
                            <h2 class="h5">CALL US ON : +416-513-1200 </h2>
                        </div>
                        <div class="booking-imgae">
                            <img src="{{ asset("/assets_front/images/others/booking.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BOOKING AREA END -->

    <!-- FEATURED FLAT AREA START -->
    <div class="featured-flat-area pt-115 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 text-center">
                        <h2>Featured PROPERTY</h2>
                  
                    </div>
                </div>
            </div>
            <div class="featured-flat">
                <div class="row">
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <span class="for-sale">For Sale</span>
                                <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/1.png") }}" alt=""></a>
                                <div class="flat-link">
                                    <a href="{{ url("properties-details.html") }}">More Details</a>
                                </div>
                              
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="{{ url("properties-details.html") }}">Goderich Walmart Center </a></h5>
                                    <!-- <span class="price">$52,350</span> -->
                                </div>
                                <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">263 Huron Rd, Goderich, Ontario</p>
                            </div>
                        </div>
                    </div>
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/2.png") }}" alt=""></a>
                                <div class="flat-link">
                                    <a href="{{ url("properties-details.html") }}">More Details</a>
                                </div>
                            
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="{{ url("properties-details.html") }}">111 Charles St. E </a></h5>
                                    <!-- <span class="price">$52,350</span> -->
                                </div>
                                <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">Ingersoll, Ontario, N5C 1J9 Canada</p>
                            </div>
                        </div>
                    </div>
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <span class="for-sale rent">For rent</span>
                                <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/3.png") }}" alt=""></a>
                                <div class="flat-link">
                                    <a href="{{ url("properties-details.html") }}">More Details</a>
                                </div>
                               
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="{{ url("properties-details.html") }}">395 Clarke Rd</a></h5>
                                    <!-- <span class="price">$52,350</span> -->
                                </div>
                                <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">London, Ontario, N5W 5G5 Canada</p>
                            </div>
                        </div>
                    </div>
                   
                 <!-- flat-item -->
                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <span class="for-sale">For Sale</span>
                            <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/1.jpg") }}" alt=""></a>
                            <div class="flat-link">
                                <a href="{{ url("properties-details.html") }}">More Details</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/4.png") }}" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/5.png") }}" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/6.png") }}" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="{{ url("properties-details.html") }}">Goderich Walmart Center </a></h5>
                                <!-- <span class="price">$52,350</span> -->
                            </div>
                            <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">263 Huron Rd, Goderich, Ontario</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/2.jpg") }}" alt=""></a>
                            <div class="flat-link">
                                <a href="{{ url("properties-details.html") }}">More Details</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/4.png") }}" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/5.png") }}" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/6.png") }}" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="{{ url("properties-details.html") }}">111 Charles St. E </a></h5>
                                <!-- <span class="price">$52,350</span> -->
                            </div>
                            <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">Ingersoll, Ontario, N5C 1J9 Canada</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <span class="for-sale rent">For rent</span>
                            <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/3.jpg") }}" alt=""></a>
                            <div class="flat-link">
                                <a href="{{ url("properties-details.html") }}">More Details</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/4.png") }}" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/5.png") }}" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="{{ asset("/assets_front/images/icons/6.png") }}" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="{{ url("properties-details.html") }}">395 Clarke Rd</a></h5>
                                <!-- <span class="price">$52,350</span> -->
                            </div>
                            <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">London, Ontario, N5W 5G5 Canada</p>
                        </div>
                    </div>
                </div>
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <span class="for-sale">For Sale</span>
                                <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/1.jpg") }}" alt=""></a>
                                <div class="flat-link">
                                    <a href="{{ url("properties-details.html") }}">More Details</a>
                                </div>
                                <ul class="flat-desc">
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/4.png") }}" alt="">
                                        <span>450 sqft</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/5.png") }}" alt="">
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/6.png") }}" alt="">
                                        <span>3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="{{ url("properties-details.html") }}">Goderich Walmart Center </a></h5>
                                    <!-- <span class="price">$52,350</span> -->
                                </div>
                                <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">263 Huron Rd, Goderich, Ontario</p>
                            </div>
                        </div>
                    </div>
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/2.jpg") }}" alt=""></a>
                                <div class="flat-link">
                                    <a href="{{ url("properties-details.html") }}">More Details</a>
                                </div>
                                <ul class="flat-desc">
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/4.png") }}" alt="">
                                        <span>450 sqft</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/5.png") }}" alt="">
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/6.png") }}" alt="">
                                        <span>3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="{{ url("properties-details.html") }}">111 Charles St. E </a></h5>
                                    <!-- <span class="price">$52,350</span> -->
                                </div>
                                <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">Ingersoll, Ontario, N5C 1J9 Canada</p>
                            </div>
                        </div>
                    </div>
                    <!-- flat-item -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="flat-item">
                            <div class="flat-item-image">
                                <span class="for-sale rent">For rent</span>
                                <a href="{{ url("properties-details.html") }}"><img src="{{ asset("/assets_front/images/flat/3.jpg") }}" alt=""></a>
                                <div class="flat-link">
                                    <a href="{{ url("properties-details.html") }}">More Details</a>
                                </div>
                                <ul class="flat-desc">
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/4.png") }}" alt="">
                                        <span>450 sqft</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/5.png") }}" alt="">
                                        <span>5</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/assets_front/images/icons/6.png") }}" alt="">
                                        <span>3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flat-item-info">
                                <div class="flat-title-price">
                                    <h5><a href="{{ url("properties-details.html") }}">395 Clarke Rd</a></h5>
                                    <!-- <span class="price">$52,350</span> -->
                                </div>
                                <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">London, Ontario, N5W 5G5 Canada</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURED FLAT AREA END -->

    <!-- FEATURES AREA START -->
    {{-- <div class="features-area fix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <div class="features-info bg-gray">
                        <div class="section-title mb-30">
                            <h3>HERE IS</h3>
                            <h2 class="h1">AWESOME FEATUES</h2>
                        </div>
                        <div class="features-desc">
                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Kare Canada </span> We fully internally manage our portfolio. An in-house property management team means extensive quality property management services; from maintenance and landscaping to taxing and beyond, as well as significant cost savings. 
                                As part of our values and tenant commitment, our teams work hard to achieve the highest level of customer service. With sustainable practices and professional input, and led by experienced and competent management, we guarantee all our properties are as efficient and elect as they can possibly be.
                                </p>
                        </div>
                        <!-- <div class="features-include">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Fully Furnished</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Royal Touch Paint</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Latest Interior Design</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Non Stop Security</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Living Inside a Nature</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <div class="features-include-list">
                                        <h6><img src="images/icons/7.png" alt="">Luxurious Fittings</h6>
                                        <p>Lorem is a dummy text do eiud tempor dolor sit amet dum</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- FEATURES AREA END -->




    <!-- BRAND AREA START -->
    <div class="brand-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-carousel">
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/1.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/2.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/3.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/4.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/5.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/1.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/4.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND AREA END -->

    <!-- SUBSCRIBE AREA START -->
    <div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title text-white">
                        <h3>SUBSCRIBE</h3>
                        <h2 class="h1">NEWSLETTER</h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="subscribe">
                        <form action="#">
                            <input type="text" name="subscribe" placeholder="Enter yur email here...">
                            <button type="submit" value="send">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SUBSCRIBE AREA END -->
</section>
<!-- End page content -->
@endsection