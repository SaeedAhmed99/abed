@extends('front.layouts.master')

@section('seo')
    @php $lang = app()->getLocale(); @endphp
    @php $title = json_decode($tearms->meta_title ?? ''); @endphp
    @php $keywords = json_decode($tearms->meta_keywords ?? ''); @endphp
    @php $description = json_decode($tearms->meta_description ?? ''); @endphp

    <meta name="title" content="@if($lang == 'en') {{$title->en ?? ''}} @else {{$title->en ?? ''}} @endif">
    <meta name="keywords" content="@if($lang == 'en') {{$keywords->en ?? ''}} @else {{$keywords->en ?? ''}} @endif">
    <meta name="description" content="@if($lang == 'en') {{$description->en ?? ''}} @else {{$description->en ?? ''}} @endif">
@endsection

@section('title')
    @php
        $lang = app()->getLocale();
        $title = '';
        if($lang == 'ar'){
            $title = 'شروط الاستخدام';
        }else{
            $title = 'Terms & Conditions';
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
                    <h2>{{ __('main.termsConditions') }}</h2>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('front.index') }}" title="">{{ __('main.home') }}</a></li>
                        <li>{{ __('main.termsConditions') }}</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-title style2 text-center">
                    <div class="sec-title-inner">
                        <h3>{{ __('main.termsConditions') }}</h3>
                    </div>
                    {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis um voluptatum deleniti atque orrupti quos dolores et quas molestias. Excepturi sint occaecati cupiditate.</p> --}}
                </div>
                <div class="srv-wrap3">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            @php $description = json_decode($tearms->description); @endphp
                            @php $lang = app()->getLocale(); @endphp
                            @if ($lang == 'en')
                                <p>{!! $description->en ?? '' !!}</p>
                            @else
                                <p>{!! $description->ar ?? '' !!}</p>    
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection