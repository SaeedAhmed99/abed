<!-- HEADER AREA START -->
<header class="header-area header-wrapper">
    <div class="header-top-bar bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="logo">
                        <a href="{{ url("index.html") }}">
                            <img src="{{ asset("/assets_front/images/logo/logo.png") }}" style="width: 148px;" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="company-info clearfix">
                        <div class="company-info-item">
                            <div class="header-icon">
                                <img src="{{ asset("/assets_front/images/icons/phone.png") }}" alt="">
                            </div>
                            <div class="header-info">
                                <h6>+416-513-1200</h6>
                                <p>We are open 9 am - 10pm</p>
                            </div>
                        </div>
                        <div class="company-info-item">
                            <div class="header-icon">
                                <img src="{{ asset("/assets_front/images/icons/mail-open.png") }}" alt="">
                            </div>
                            <div class="header-info">
                                <h6><a href="{{ url("mailto:info@domain.com") }}"> info@karecanada.com</a></h6>
                                <p>You can mail us</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-12">
                    <div class="header-search clearfix">
                        <form action="#">
                            <button class="search-icon" type="submit">
                                <img src="{{ asset("/assets_front/images/icons/search.png") }}" alt="">
                            </button>
                            <input type="text" placeholder="Search...">
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div id="sticky-header" class="header-middle-area transparent-header d-none d-md-block">
        <div class="container">
            <div class="full-width-mega-drop-menu">
                <div class="row">
                    <div class="col-12">
                        <div class="sticky-logo">
                            <a href="{{ url("index.html") }}">
                                <img src="{{ asset("/assets_front/images/logo/logo.png") }}" alt="">
                            </a>
                        </div>
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                <li><a href="{{ route('front.index') }}" class="{{ request()->routeIs('front.index') ? 'active' : '' }}">Home</a></li>
                                <li><a href="{{ route('front.about') }}" class="{{ request()->routeIs('front.about') ? 'active' : '' }}">About Us</a></li>

                                <!-- <li class="mega-parent"><a href="{{ asset("/assets_front/#") }}">Elements</a>
                                    <div class="mega-menu-area">
                                        <ul class="single-mega-item">
                                            <li><a href="elements-accordion.html">Accordion</a></li>
                                            <li><a href="elements-agent.html">Agent</a></li>
                                            <li><a href="elements-alerts.html">Alerts</a></li>
                                            <li><a href="elements-audio.html">Audio</a></li>
                                            <li><a href="elements-call-to-actions.html">Call-to-actions</a></li>
                                            <li><a href="elements-contact-1.html">Contact-1</a></li>
                                            <li><a href="elements-contact-2.html">Contact-2</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li><a href="elements-features.html">Features</a></li>
                                            <li><a href="elements-footer-1.html">Footer-1</a></li>
                                            <li><a href="elements-footer-2.html">Footer-2</a></li>
                                            <li><a href="elements-header-sticky-no.html">Header-sticky-no</a>
                                            </li>
                                            <li><a href="elements-header-sticky.html">Header-sticky</a></li>
                                            <li><a href="elements-map.html">Map</a></li>
                                            <li><a href="elements-media.html">Media</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li><a href="elements-pagination.html">Pagination</a></li>
                                            <li><a href="elements-progress-bar.html">Progress-bar</a></li>
                                            <li><a href="elements-property.html">Property</a></li>
                                            <li><a href="elements-services.html">Services</a></li>
                                            <li><a href="elements-sidebar-left-1.html">Sidebar-left-1</a></li>
                                            <li><a href="elements-sidebar-left-2.html">Sidebar-left-2</a></li>
                                            <li><a href="elements-sidebar-right-1.html">Sidebar-right-1</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li><a href="elements-sidebar-right-2.html">Sidebar-right-1</a></li>
                                            <li><a href="elements-tab.html">Tab</a></li>
                                            <li><a href="elements-table.html">Table</a></li>
                                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                                            <li><a href="elements-toggles.html">Toggles</a></li>
                                            <li><a href="elements-typography.html">Typography</a></li>
                                            <li><a href="elements-video.html">Video</a></li>
                                        </ul>
                                    </div>
                                </li> -->
                                <li><a href="{{ route('front.services') }}" class="{{ request()->routeIs('front.services') ? 'active' : '' }}">Service</a></li>
                                <li><a href="{{ route('front.properties') }}" class="{{ request()->routeIs('front.properties') ? 'active' : '' }}">Properties</a></li>
                                <li><a href="{{ route('front.forlease') }}" class="{{ request()->routeIs('front.forlease') ? 'active' : '' }}">For Lease</a></li>
                                {{-- <li><a href="{{ url("agent.html") }}">For Lease</a>
                                    <ul class="drop-menu">
                                        <li><a href="{{ url("agent.html") }}">Agent</a></li>
                                        <li><a href="{{ url("agent-details.html") }}">Agent details</a></li>
                                    </ul>
                                </li> --}}
                                <!-- <li><a href="{{ asset("/assets_front/#") }}">Pages's</a>
                                    <ul class="drop-menu menu-right">
                                        <li><a href="{{ url("about.html") }}">About</a></li>
                                        <li><a href="{{ url("agent.html") }}">Agent</a></li>
                                        <li><a href="{{ url("agent-details.html") }}">Agent-details</a></li>
                                        <li><a href="{{ url("features.html") }}">Features</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="{{ url("login.html") }}">Login</a></li>
                                        <li><a href="{{ url("404.html") }}">404</a></li>
                                        <li><a href="{{ url("contact.html") }}">Contact</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="{{ url("blog.html") }}">Blog</a>
                                    <ul class="drop-menu menu-right">
                                        <li><a href="{{ url("blog.html") }}">Blog</a></li>
                                        <li><a href="{{ url("blog-left-sidebar.html") }}">Blog left sidebar</a></li>
                                        <li><a href="{{ url("blog-right-sidebar.html") }}">Blog right sidebar</a></li>
                                        <li><a href="{{ url("single-blog.html") }}">Single Blog</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="{{ route('front.contact') }}" class="{{ request()->routeIs('front.contact') ? 'active' : '' }}"">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER AREA END -->

 <!-- MOBILE MENU AREA START -->
 <div class="mobile-menu-area d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="{{ url("index.html") }}">Home</a>
                                <ul>
                                    <li><a href="{{ url("index.html") }}">Home-1</a></li>
                                    <li><a href="{{ url("index-2.html") }}">home-2</a></li>
                                    <li><a href="{{ url("index-3.html") }}">home-3</a></li>
                                    <li><a href="{{ url("index-4.html") }}">Background Video</a></li>
                                    <li><a href="{{ url("index-5.html") }}">Background Video overlay</a></li>
                                    <li><a href="{{ url("index-6.html") }}">BG Video dot overlay</a></li>
                                    <li><a href="{{ url("index-7.html") }}">Animated Text</a></li>
                                    <li><a href="{{ url("index-8.html") }}">Animated Text dot overlay</a></li>
                                    <li><a href="{{ url("index-9.html") }}">Box layout - 1</a></li>
                                    <li><a href="{{ url("index-10.html") }}">Box layout - 2</a></li>
                                    <li><a href="{{ url("index-11.html") }}">Box layout - 3</a></li>
                                    <li><a href="{{ url("index-12.html") }}">Property Location Map</a></li>
                                    <li><a href="{{ url("index-13.html") }}">Background Video (Vimeo)</a></li>
                                    <li><a href="{{ url("index-13.html") }}">Background Video (Vimeo)</a></li>
                                    <li><a href="{{ url("index-12.html") }}">Property Location Map</a></li>
                                    <li><a href="{{ url("index-13.html") }}">Background Video (Vimeo)</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url("service.html") }}">Service</a>
                                <ul>
                                    <li><a href="{{ url("service.html") }}">Service</a></li>
                                    <li><a href="{{ url("service-details.html") }}">Service details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url("properties.html") }}">Properties</a>
                                <ul>
                                    <li><a href="{{ url("properties.html") }}">Properties</a></li>
                                    <li><a href="{{ url("properties-left-sidebar.html") }}">Properties left sidebar</a></li>
                                    <li><a href="{{ url("properties-right-sidebar.html") }}">Properties right sidebar</a>
                                    </li>
                                    <li><a href="{{ url("properties-details.html") }}">Properties details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ asset("/assets_front/#") }}">Pages</a>
                                <ul>
                                    <li><a href="{{ url("about.html") }}">About</a></li>
                                    <li><a href="{{ url("agent.html") }}">Agent</a></li>
                                    <li><a href="{{ url("agent-details.html") }}">Agent-details</a></li>
                                    <li><a href="{{ url("features.html") }}">Features</a></li>
                                    <li><a href="{{ url("service.html") }}">Service</a></li>
                                    <li><a href="{{ url("service-details.html") }}">Service details</a></li>
                                    <li><a href="{{ url("login.html") }}">Login</a></li>
                                    <li><a href="{{ url("404.html") }}">404</a></li>
                                    <li><a href="{{ url("contact.html") }}">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url("blog.html") }}">Blog</a>
                                <ul>
                                    <li><a href="{{ url("blog.html") }}">Blog</a></li>
                                    <li><a href="{{ url("blog-left-sidebar.html") }}">Blog left sidebar</a></li>
                                    <li><a href="{{ url("blog-right-sidebar.html") }}">Blog right sidebar</a></li>
                                    <li><a href="{{ url("single-blog.html") }}">Single Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url("contact.html") }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MOBILE MENU AREA END -->