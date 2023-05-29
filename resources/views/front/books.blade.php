@extends('front.layouts.master')

@section('seo')
    @php $lang = app()->getLocale(); @endphp
    @php $title = json_decode($settings->meta_title ?? ''); @endphp
    @php $keywords = json_decode($settings->meta_keywords ?? ''); @endphp
    @php $description = json_decode($settings->meta_description ?? ''); @endphp

    <meta name="title" content="@if($lang == 'en') {{$title->en ?? ''}} @else {{$title->en ?? ''}} @endif">
    <meta name="keywords" content="@if($lang == 'en') {{$keywords->en ?? ''}} @else {{$keywords->en ?? ''}} @endif">
    <meta name="description" content="@if($lang == 'en') {{$description->en ?? ''}} @else {{$description->en ?? ''}} @endif">
@endsection

@section('title')
    @php
        $lang = app()->getLocale();
        $title = '';
        if($lang == 'ar'){
            $title = 'الكتب';
        }else{
            $title = 'Books';
        }
    @endphp
@endsection

@section('content')
    <section>
        <div class="gap remove-bottom black-layer2 opc85">
            @if ($pagesslider)
                <div class="fixed-bg" style="background-image: url('{{ asset($pagesslider->image) }}');"></div>
            @else
                <div class="fixed-bg" style="background-image: url(assets_front/images/parallax12.jpg);"></div>
            @endif
            <div class="container">
                <div class="page-title-wrap">
                    <h1><img src="{{ asset('assets_front/images/resources/page-title-ayat.png') }}" alt="page-title-ayat.png"></h1>
                    <h2>{{ __('main.books') }}</h2>
                    <ul class="breadcrumbs">    
                        <li><a href="{{ route('front.index') }}" title="">{{ __('main.home') }}</a></li>
                        <li>{{ __('main.books') }}</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="event-wrap">
                    <div class="row">
                        
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="remove-ext3">
                                <div class="row">
                                    @forelse ($books as $book)
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="event-box2">
                                                <div class="event-thumb">
                                                    @if ($book->image == null)
                                                        <a  title=""><img src="{{ asset('assets_front/images/resources/event-img3.jpg') }}" alt="event-img2-1.jpg"></a>
                                                    @else
                                                        <a style="height: 280px !important;" title=""><img src="{{ asset($book->image) }}" alt=""></a>
                                                    @endif
                                                </div>
                                                <div class="event-info">
                                                    @php $titleBook = json_decode($book->name); @endphp
                                                    @php $shortdescription = json_decode($book->short_description); @endphp
                                                    @php $lang = app()->getLocale(); @endphp
                                                    <h4><a href="#" title="">
                                                        @if ($lang == 'en')
                                                            <p>{{ $titleBook->en ?? '' }}</p>
                                                        @else
                                                            <p>{{ $titleBook->ar ?? '' }}</p>    
                                                        @endif
                                                    </a></h4>
                                                    <p>
                                                        @if ($lang == 'en')
                                                            <p>{{ $shortdescription->en ?? '' }}</p>
                                                        @else
                                                            <p>{{ $shortdescription->ar ?? '' }}</p>    
                                                        @endif
                                                    </p>
                                                    <ul class="event-mta">
                                                        @php $langBook = json_decode($book->lang); @endphp
                                                        <li><i class="fa-solid fa-language"></i>{{ __('main.languageBook') }}: @if ($lang == 'en'){{ $langBook->en ?? '' }}</> @else {{ $langBook->ar ?? '' }}</> @endif </li>
                                                        <li><i class="flaticon-clock"></i>{{ __('main.publicationDate') }}: {{ date('d-M-Y', strtotime($book->created_at)); }}</li>
                                                    </ul>
                                                    <a class="thm-btn brd-rd40 mt-3" style="margin: auto; display: block; width: fit-content;" href="{{ route('front.book.show', $book->id) }}" target="_blank" title="">{{ __('main.WatchBook') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        @if (app()->getLocale() == 'en')
                                            <h2>No books added</h2>
                                        @else
                                            <h2>لم يتم اضافة كتب</h2>
                                        @endif
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Event Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap blue-layer opc85">
            @if ($pagesslider)
                <div class="fixed-bg" style="background-image: url({{ $pagesslider->image }});"></div>
            @else
                <div class="fixed-bg" style="background-image: url(assets_front/images/parallax12.jpg);"></div>
            @endif
            <div class="container">
                <div class="newsletter-wrap2 text-center">
                    <div class="newsletter-inner">
                        <div class="nwsltr-title2 text-center">
                            <h3>{{ __('main.stayInformedWithOurLatestNews') }}</h3>
                            <span>{{ __('main.SubscribeToNheNewsletterToGetTheLatestNnews') }}</span>
                            <div id="alert_subscribe_form"></div>
                        </div>
                        <form id="subscribeForm">
                            @csrf
                            <input name="email" type="email" placeholder="{{ __('main.enterYourEmail') }}">
                            <button class="thm-btn" type="submit">{{ __('main.subscribe') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{asset ('assets_front/js/frontAssets/front.js')}}"></script>
@endsection