@extends('front.layouts.master')

@section('content')
<!-- BREADCRUMBS AREA START -->
{{-- <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcrumbs">
                    <h2 class="breadcrumbs-title">Properties</h2>
                    <ul class="breadcrumbs-list">
                        <li><a href="{{ url("index.html") }}">Home</a></li>
                        <li>Properties</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- BREADCRUMBS AREA END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- FEATURED FLAT AREA START -->
    <div class="featured-flat-area pt-115 pb-60">
        <div class="container">
            <div class="row">
                @foreach ($properties as $propertie)
                    <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <a href=""><img src="{{ asset("uploads/books/images/" . $propertie->image[0]) }}" alt=""></a>
                            <div class="flat-link">
                                <a href="{{ route('front.properties.details', $propertie->id) }}">More Details</a>
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
                                <h5><a href="{{ url("properties-details.html") }}">{{ $propertie->name }} </a></h5>
                                <span class="price">${{$propertie->price}}</span>
                            </div>
                            <p><img src="{{ asset("/assets_front/images/icons/location.png") }}" alt="">{{ $propertie->location }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- FEATURED FLAT AREA END -->

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