@extends('front.layouts.master')

@section('content')

<!-- BREADCRUMBS AREA START -->
{{-- <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <h2 class="breadcrumbs-title">Properties Details</h2>
                    <ul class="breadcrumbs-list">
                        <li><a href="{{ url("index.html") }}">Home</a></li>
                        <li><a href="{{ url("properties.html") }}">Properties</a></li>
                        <li>Properties Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- BREADCRUMBS AREA END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- PROPERTIES DETAILS AREA START -->
    <div class="properties-details-area pt-115 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- pro-details-image -->
                    <div class="pro-details-image mb-60">
                        <div class="pro-details-big-image">
                            <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                        <a href="{{ url("images/single-property/big/1.jpg") }}" data-lightbox="image-1" data-title="Sheltek Properties - 1">
                                            <img src="{{ asset("uploads/books/images/" . $propertie->image[0]) }}" alt="">
                                        </a>
                                    </div>

                            </div>
                        </div>

                        <ul class="nav nav-pills pro-details-navs" id="pills-tab" role="tablist">
                            @foreach ($propertie->image as $img)
                            <li class="nav-item">
                                <a class="nav-link active" id="pro-1-tab" data-toggle="pill" href="{{ url("#pro-1") }}" role="tab" aria-controls="pro-1" aria-selected="true"><img src="{{ asset("uploads/books/images/" . $img) }}" alt=""></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- pro-details-short-info -->
                    <div class="pro-details-short-info mb-60">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pro-details-condition">
                                    <h5>Location</h5>
                                    <div class="pro-details-condition-inner bg-gray">
                                        <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">{{ $propertie->location }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-details-short-info mb-60">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="pro-details-condition">
                                    <h5>Description</h5>
                                    <div class="pro-details-condition-inner bg-gray">
                                        <p><img src="" alt="">{{$propertie->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pro-details-description -->
                    {{-- <div class="pro-details-description mb-50">
                        {{$propertie->description}}
                    </div> --}}
                    <!-- pro-details-feedback -->
                    {{-- <div class="pro-details-feedback mb-40">
                        <h5>3 Feedback</h5>
                        <!-- media -->
                        <div class="media">
                            <a class="media-left" href="{{ url("#") }}">
                                <img src="{{ asset("/assets_front/images/avatar/1.jpg") }}" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="{{ url("#") }}">David Backhum</a></h6>
                                <p><span>6 hour ago</span>There are some business lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                            </div>
                        </div>
                        <!-- media -->
                        <div class="media">
                            <a class="media-left" href="{{ url("#") }}">
                                <img src="{{ asset("/assets_front/images/avatar/2.jpg") }}" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="{{ url("#") }}">Saniya Mirza</a></h6>
                                <p><span>8 hour ago</span>There are some business lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                            </div>
                        </div>
                        <!-- media -->
                        <div class="media">
                            <a class="media-left" href="{{ url("#") }}">
                                <img src="{{ asset("/assets_front/images/avatar/3.jpg") }}" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="{{ url("#") }}">Lionel Messi</a></h6>
                                <p><span>10 hour ago</span>There are some business lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiu tempor inc ididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- agent-review -->
                    {{-- <div class="pro-details-agent-review">
                        <div class="row">
                            <!-- single-agent -->
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="pro-details-agent">
                                    <h5>Contact Agent</h5>
                                    <div class="single-agent">
                                        <div class="agent-image">
                                            <img src="{{ asset("/assets_front/images/agents/2.jpg") }}" alt="">
                                        </div>
                                        <div class="agent-info">
                                            <div class="agent-name">
                                                <h5><a href="{{ url("#") }}">Eva Sharlin</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                        </div>
                                        <div class="agent-info-hover">
                                            <div class="agent-name">
                                                <h5><a href="{{ url("#") }}">Eva Sharlin</a></h5>
                                                <p>Real Estate Broker</p>
                                            </div>
                                            <ul class="agent-address">
                                                <li><img src="{{ asset("/assets_front/images/icons/phone-2.png") }}" alt="">+1245 785 659
                                                </li>
                                                <li><img src="{{ asset("/assets_front/images/icons/mail-close.png") }}" alt="">eva@gmail.com
                                                </li>
                                            </ul>
                                            <ul class="social-media">
                                                <li><a href="{{ url("#") }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="{{ url("#") }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="{{ url("#") }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li><a href="{{ url("#") }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- leave-massage -->
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="leave-review">
                                    <h5>Leave a Review</h5>
                                    <form action="#">
                                        <input type="text" name="name" placeholder="Your name">
                                        <input type="email" name="email" placeholder="Email here">
                                        <textarea></textarea>
                                        <button type="button" class="submit-btn-1">SUBMIT REVIEW</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-4">
                    {{-- <!-- widget-search-property -->
                    <aside class="widget widget-search-property mb-30">
                        <h5>Search For Property</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-3 col-12">
                                <div class="find-home-item custom-select">
                                    <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                        <optgroup disabled="disabled" label="disabled">
                                            <option>Hidden</option>
                                        </optgroup>
                                        <optgroup label="Australia">
                                            <option>Sydney</option>
                                            <option>Melbourne</option>
                                            <option>Cairns</option>
                                        </optgroup>
                                        <optgroup label="USA">
                                            <option>South Carolina</option>
                                            <option>Florida</option>
                                            <option>Rhode Island</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-12">
                                <div class="find-home-item custom-select">
                                    <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                                        <optgroup disabled="disabled" label="disabled">
                                            <option>Hidden</option>
                                        </optgroup>
                                        <optgroup label="Australia">
                                            <option>southeastern coast</option>
                                            <option>southeastern tip</option>
                                            <option>northwest corner</option>
                                        </optgroup>
                                        <optgroup label="USA">
                                            <option>Charleston</option>
                                            <option>St. Petersburg</option>
                                            <option>Newport</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-12">
                                <div class="find-home-item">
                                    <input type="text" name="min-area" placeholder="Min area (sqft)">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-12">
                                <div class="find-home-item">
                                    <input type="text" name="max-area" placeholder="Max area (sqft)">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-12">
                                <div class="find-home-item  custom-select">
                                    <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                                        <optgroup label="1">
                                            <option label="1">1 Beadrooms</option>
                                            <option>2 Beadrooms</option>
                                            <option>3 Beadrooms</option>
                                            <option>4 Beadrooms</option>
                                            <option>5 Beadrooms</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-12">
                                <div class="find-home-item custom-select">
                                    <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                                        <optgroup label="2">
                                            <option>1 Bathrooms</option>
                                            <option>2 Bathrooms</option>
                                            <option>3 Bathrooms</option>
                                            <option>4 Bathrooms</option>
                                            <option>5 Bathrooms</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-6 col-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-7 col-xs-12">
                                        <div class="find-home-item">
                                            <!-- shop-filter -->
                                            <div class="shop-filter">
                                                <div class="price_filter">
                                                    <div class="price_slider_amount">
                                                        <input type="submit" value="You range :" />
                                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                                    </div>
                                                    <div id="slider-range"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-5 col-xs-12">
                                        <div class="find-home-item">
                                            <a class="button-1 btn-block btn-hover-1" href="{{ url("#") }}">SEARCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside> --}}
                    <!-- widget-featured-property -->
                    <aside class="widget widget-featured-property mb-30">
                        <h5>Featured Property</h5>
                        <div class="row">
                            @foreach ($latesthree as $item)
                                <!-- flat-item -->
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">For Sale</span>
                                        <a href="{{ url("#") }}"><img src="{{ asset("uploads/books/images/" . $item->image[0]) }}" alt=""></a>
                                        <div class="flat-link">
                                            <a href="{{ route('front.properties.details', $item->id) }}">More Details</a>
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
                                            <h5><a href="{{ url("#") }}">{{ $item->name }}</a></h5>
                                            <span class="price">{{ $item->price }}</span>
                                        </div>
                                        <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">{{$item->location}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </aside>
                    <!-- widget-video -->
                    <aside class="widget widget-video mb-0">
                        <h5>Take A Look</h5>
                        <div class="properties-video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <!-- <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/40934652"></iframe> -->
                                <iframe src="https://player.vimeo.com/video/117765418?title=0&amp;byline=0&amp;portrait=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PROPERTIES DETAILS AREA END -->

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