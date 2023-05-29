<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <header class="style1">
        <div class="container">
            <div class="logo">
                @if ($settings)
                    <a href="{{ route('front.index') }}" title="Logo"><img src="{{ asset($settings->logo ?? '') }}" alt="logo.png"></a>
                @endif
            </div>
            <nav>
                <div>
                    <a class="thm-btn brd-rd40" href="{{ route('front.login') }}" title="">{{ __('main.login') }}</a>
                    
                    <ul>
                        <li class="{{ request()->routeIs('front.index') ? 'active' : '' }}"><a href="{{ route('front.index') }}" title="">{{ __('main.home') }}</a>
                        <li class="{{ request()->routeIs('front.books') ? 'active' : '' }}"><a href="{{ route('front.books') }}" title="">{{ __('main.books') }}</a></li>
                        <li class="{{ request()->routeIs('front.about') ? 'active' : '' }}"><a href="{{ route('front.about') }}" title="">{{ __('main.AboutUs') }}</a></li>
                        <li class="{{ request()->routeIs('front.contact') ? 'active' : '' }}"><a href="{{ route('front.contact') }}" title="">{{ __('main.contactUs') }}</a></li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if ($properties['native'] != LaravelLocalization::getCurrentLocaleNative())
                                <li class="lang-btn">
                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                        class="cart-icon">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </nav>
        </div>
    </header><!-- Header -->
</div>