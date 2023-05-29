@extends('front.layouts.master')


@section('content')

        <!-- BREADCRUMBS AREA START -->
        {{-- <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">Contact</h2>
                            <ul class="breadcrumbs-list">
                                <li><a href="{{ url("index.html") }}">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- CONTACT AREA START -->
            <div class="contact-area pt-115 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <!-- get-in-toch -->
                            <div class="get-in-toch">
                                <div class="section-title mb-30">
                                    <h3>GET IN</h3>
                                    <h2>TOUCH</h2>
                                </div>
                                <div class="contact-desc mb-50">
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for elit, sed do
                                        eiusmod tempor dolor sit ame tse ctetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation
                                        oris nisi ut aliquip</p>
                                </div>
                                <ul class="contact-address">
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="{{ asset("/assets_front/images/icons/location-2.png") }}" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>8901 Marmora Raod, New Yourk City </span>
                                            <span>25 Glasgow, D04 89GR</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="{{ asset("/assets_front/images/icons/phone-3.png") }}" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>Telephone : +0 123-456-7890</span>
                                            <span>Telephone : +0 123-456-7890</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="{{ asset("/assets_front/images/icons/world.png") }}" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>Email : info@domain.com</span>
                                            <span>Web :<a href="{{ url("#") }}" target="_blank"> www.yoursite.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="contact-messge contact-bg">
                                <!-- blog-details-reply -->
                                <div class="leave-review">
                                    <h5>Leave a Message</h5>
                                    <form id="contact-form" action="https://demo.hasthemes.com/sheltek-preview/sheltek/mail.php" method="post">
                                        <input type="text" name="name" placeholder="Your name">
                                        <input type="email" name="email" placeholder="Email">
                                        <textarea name="message" placeholder="Write here"></textarea>
                                        <button type="submit" class="submit-btn-1">SUBMIT</button>
                                    </form>
                                    <p class="form-messege mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT AREA END -->

            <!-- GOOGLE MAP AREA START -->
            <div class="google-map-area">
                <div id="googleMap"></div>
            </div>
            <!-- GOOGLE MAP AREA END -->

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