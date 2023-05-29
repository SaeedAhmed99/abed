<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    @php $about_us = json_decode($about_us->our_company ?? ''); @endphp
    @php $address = json_decode($settings->address ?? ''); @endphp
    @php $lang = app()->getLocale(); @endphp
    <footer>
        <div class="gap top-spac70 drk-bg2 remove-bottom">
            <div class="container">
                <div class="footer-data">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="wdgt-box">
                                @if ($settings)
                                    <div class="logo"><a href="{{ route('front.index') }}" title="Logo"><img src="{{ asset( $settings->logo) }}" alt="logo2.png"></a></div>
                                @endif
                                @if ($about_us)
                                    @if ($lang == 'en')
                                    <p>{!! \Illuminate\Support\Str::limit($about_us->en ?? '', 150, ' ...') !!} @if($about_us->en != null)<a href="{{ route('front.about') }}">{{ __('main.more') }}</a>@endif</p>
                                    @else
                                        <p>{!! \Illuminate\Support\Str::limit($about_us->ar ?? '', 150, ' ...') !!} @if($about_us->ar != null)<a href="{{ route('front.about') }}">{{ __('main.more') }}</a>@endif</p> 
                                    @endif
                                @endif
                                
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="wdgt-box">
                                        <h4>{{ __('main.quickLinks') }}</h4>
                                        <ul>
                                            <li><a href="{{ route('front.index') }}">{{ __('main.home') }}</a></li>
                                            <li><a href="{{ route('front.books') }}">{{ __('main.books') }}</a></li>
                                            <li><a href="{{ route('front.about') }}">{{ __('main.AboutUs') }}</a></li>
                                            <li><a href="{{ route('front.contact') }}">{{ __('main.contactUs') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="wdgt-box">
                                        <h4>{{ __('main.usefulLinks') }}</h4>
                                        <ul>
                                            <li><a href="{{ route('front.contact') }}">{{ __('main.contactUs') }}</a></li>
                                            <li><a href="{{ route('front.tearms') }}">{{ __('main.termsConditions') }}</a></li>
                                            <li><a href="{{ route('front.policy') }}">{{ __('main.privacyPolicy') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    @if ($settings)
                                        <div class="wdgt-box">
                                            <h4>{{ __('main.contactUs') }}</h4>
                                            <ul class="cont-lst">
                                                    @if ($address != null)
                                                    @if ($lang == 'en')
                                                        <li><i class="flaticon-location-pin"></i>{{ $address->en ?? '' }}</li>
                                                    @else
                                                        <li><i class="flaticon-location-pin"></i>{{ $address->ar ?? '' }}</li>
                                                    @endif
                                                    @endif
                                                    @if ($settings->phone != null)
                                                        <li><i class="flaticon-call"></i>{{ $settings->phone }}</li>
                                                    @endif
                                                    @if ($settings->fax != null)
                                                        <li><i class="fa fa-fax mt-1"></i>{{ $settings->fax }}</li>
                                                    @endif
                                                    @if ($settings->email != null)
                                                        <li><i class="flaticon-email"></i><a href="mailto:{{ $settings->email }}" title="">{{ $settings->email }}</a></li>
                                                    @endif
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Footer Data -->
                <div class="bottom-bar">
                    <p>&copy; {{ __('main.copyright') }} {{ now()->year }}. {{ __('main.allRightsReserved') }}</p>
                    @if ($settings)
                        <div class="scl">
                            @if ($settings->facebook_link != null)
                                <a href="{{ $settings->facebook_link }}" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if ($settings->twitter_link != null)
                                <a href="{{ $settings->twitter_link ?? '' }}" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            @endif
                            @if ($settings->linkedin_link != null)
                                <a href="{{ $settings->linkedin_link ?? '' }}" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                            @endif
                            @if ($settings->instagram_link != null)
                                <a href="{{ $settings->instagram_link ?? '' }}" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                            @endif
                            @if ($settings->snapchat_link != null)
                                <a href="{{ $settings->snapchat_link ?? '' }}" title="Snapchat" target="_blank"><i class="fa fa-snapchat"></i></a>
                            @endif
                            @if ($settings->tiktok_link	 != null)
                                <a href="{{ $settings->tiktok_link	 ?? '' }}" title="Tiktok" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                            @endif
                        </div>
                    @endif
                </div><!-- Bottom Bar -->
            </div>
        </div>
    </footer>
</div>