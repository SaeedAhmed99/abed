@extends('front.layouts.master')

@section('content')
<!-- BREADCRUMBS AREA START -->
{{-- <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <h2 class="breadcrumbs-title">Service</h2>
                    <ul class="breadcrumbs-list">
                        <li><a href="{{ url("index.html") }}">Home</a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- BREADCRUMBS AREA END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- ABOUT SHELTEK AREA START -->
    <div class="about-sheltek-area ptb-115">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="section-title mb-30">
                        <h3>KNOW ABOUT </h3>
                        <h2>OUR SERVICES</h2>
                    </div>
                    <div class="about-sheltek-info">
                        <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for elit, sed do
                            eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.</p>
                        <div class="author-quote">
                            <p>Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing
                                elit, sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim
                                onsectetur </p>
                            <p>Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing
                                elit, sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim
                                onsectetur </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="about-image">
                        <img src="{{ asset("/assets_front/images/about/4.jpg") }}" alt="About Image">
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
                        <p>Sheltek is the best theme for elit, sed do eiusmod tempor dolor sit amet, conse
                            ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd
                            minim veniam, quis nostrud</p>
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
                                    <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                        tetur adiping eiusmo</p>
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
                                    <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                        tetur adiping eiusmo</p>
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
                                    <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                        tetur adiping eiusmo</p>
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
                                    <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                        tetur adiping eiusmo</p>
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
                                    <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                        tetur adiping eiusmo</p>
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
    {{-- <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title text-white">
                        <h3>SOME</h3>
                        <h2 class="h1">FUN FACTOR</h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="booking-conternt  clearfix">
                        <div class="counter-content">
                            <!-- counter-item -->
                            <div class="counter-item">
                                <h2>
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span class="counter">999</span>
                                </h2>
                                <p>Complete Project</p>
                            </div>
                            <!-- counter-item -->
                            <div class="counter-item">
                                <h2>
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                    <span class="counter">555</span>
                                </h2>
                                <p>Property Sold</p>
                            </div>
                            <!-- counter-item -->
                            <div class="counter-item">
                                <h2>
                                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                                    <span class="counter">350</span>
                                </h2>
                                <p>Happy Clients</p>
                            </div>
                            <!-- counter-item -->
                            <div class="counter-item">
                                <h2>
                                    <i class="fa fa-trophy" aria-hidden="true"></i>
                                    <span class="counter">100</span>
                                </h2>
                                <p>Awards Win</p>
                            </div>
                        </div>
                        <div class="booking-imgae">
                            <img src="{{ asset("/assets_front/images/others/booking.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- BOOKING AREA END -->

    <!-- TESTIMONIAL AREA START -->
    {{-- <div class="testimonial-area ptb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial">
                        <div class="row">
                            <div class="col-lg-8 col-md-9">
                                <div class="section-title mb-30">
                                    <h3>SOME OF OUR</h3>
                                    <h2 class="h1">HAPPY CLIENTS</h2>
                                </div>
                                <div class="testimonial-carousel dots-right-btm">
                                    <!-- testimonial-item -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-brief">
                                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                            </p>
                                        </div>
                                        <h6>Zasica Luci, <span>CEO</span></h6>
                                    </div>
                                    <!-- testimonial-item -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-brief">
                                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                            </p>
                                        </div>
                                        <h6>Zasica Luci, <span>CEO</span></h6>
                                    </div>
                                    <!-- testimonial-item -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-brief">
                                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                            </p>
                                        </div>
                                        <h6>Zasica Luci, <span>CEO</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="testimonial-image">
                                    <img src="{{ asset("/assets_front/images/others/testimonial.jpg") }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- TESTIMONIAL AREA END -->

    <!-- BRAND AREA START -->
    <div class="brand-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-carousel">
                        <!-- brand-item -->
                        <div class="col-md-12">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/1.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col-md-12">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/2.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col-md-12">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/3.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col-md-12">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/4.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col-md-12">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/5.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col-md-12">
                            <div class="brand-item">
                                <img src="{{ asset("/assets_front/images/brand/1.png") }}" alt="">
                            </div>
                        </div>
                        <!-- brand-item -->
                        <div class="col-md-12">
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