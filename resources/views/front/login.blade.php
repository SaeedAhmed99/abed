@extends('front.layouts.master')

@section('title')
    @php
        $lang = app()->getLocale();
        $title = '';
        if($lang == 'ar'){
            $title = 'تسجيل دخول';
        }else{
            $title = 'Login';
        }
    @endphp
@endsection

@section('content')
    {{-- <section>
        <div class="gap remove-bottom black-layer2 opc85">
            @if ($pagesslider)
                <div class="fixed-bg" style="background-image: url({{ $pagesslider->image }});"></div>
            @else
                <div class="fixed-bg" style="background-image: url(assets_front/images/parallax12.jpg);"></div>
            @endif
            <div class="container">
                <div class="page-title-wrap">
                    <h1><img src="{{ asset('assets_front/images/resources/page-title-ayat.png') }}" alt="page-title-ayat.png"></h1>
                    <h2>{{ __('main.contactUs') }}</h2>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('front.index') }}" title="">{{ __('main.home') }}</a></li>
                        <li>{{ __('main.contactUs') }}</li>
                    </ul>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section> --}}
    <section>
        <div class="gap">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title-inner">
                        <span></span>
                        <h3>{{ __('main.login') }}</h3>
                        <div id="alert_contact_us_form"></div>
                    </div>
                </div>

                <div class="contact-form text-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mrg20 justify-content-center">
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('main.email') }}" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('main.password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 col-sm-12 col-lg-12 mt-5">
                                <button class="thm-btn brd-rd40" type="submit">{{ __('main.login') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  @endsection
