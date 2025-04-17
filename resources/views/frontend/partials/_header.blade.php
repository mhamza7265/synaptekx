<header class="site-header-main font-pt-sans">
    <div id="frontend-site-header" class="site-header d-flex justify-content-between align-items-center position-relative">
        @php
            $settings = \App\Models\Setting::first();
        @endphp
        <a class="d-none d-lg-block" href="/">
            <img src="{{$settings->site_logo}}" alt="logo" class="header-logo d-none d-md-block" />
        </a>
        {{-- <div class="site-navbar d-none d-md-flex justify-content-between align-items-center">
            <a href="/" data-menu="" class="d-block nav-item">Home</a>
            <a href="{{route('services')}}" id="services-nav" data-menu="services-menu" class="nav-item cursor-pointer">Services <i class="fa-solid fa-caret-down ms-2"></i></a>
            <span id="industries-nav" data-menu="industries-menu" class="nav-item cursor-pointer">Industries <i class="fa-solid fa-caret-down ms-2"></i></span>
            <span id="resources-nav" data-menu="resources-menu" class="nav-item cursor-pointer">Resources <i class="fa-solid fa-caret-down ms-2"></i></span>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item">About Us</a>
            <a href="{{route('partners')}}" data-menu="" class="d-block nav-item">Partners</a>
            <!--<span id="partners-nav" data-menu="partners-menu" class="nav-item cursor-pointer">Partners <i class="fa-solid fa-caret-down ms-2"></i></span>-->
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item">Career</a>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item text-gradient">Contact us</a>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div> --}}

        <div class="site-navbar d-none d-lg-flex justify-content-between align-items-center">
            <a href="/" data-menu="" class="d-block nav-item {{request()->routeIs('home') ? 'text-gradient' : ''}}">Home</a>
            <span id="services-nav" data-menu="services-menu" class="nav-item cursor-pointer {{request()->is('services/*') ? 'text-gradient' : ''}}">Services <i class="fa-solid fa-caret-down ms-2"></i></span>
            <!--<span id="resources-nav" data-menu="resources-menu" class="nav-item cursor-pointer">Resources <i class="fa-solid fa-caret-down ms-2"></i></span>-->
            <!--<span id="industries-nav" data-menu="industries-menu" class="nav-item cursor-pointer">Industries <i class="fa-solid fa-caret-down ms-2"></i></span>-->
            <a href="{{route('about')}}" data-menu="" class="d-block nav-item {{request()->is('about-us') ? 'text-gradient' : ''}}">About Us</a>
            <a href="{{route('partners')}}" data-menu="" class="d-block nav-item {{request()->is('partners') ? 'text-gradient' : ''}}">Partners</a>
            <!--<a href="{{route('partners')}}" id="partners-nav" data-menu="partners-menu" class="nav-item cursor-pointer">Partners <i class="fa-solid fa-caret-down ms-2"></i></a>-->
            <!--<a href="javascript:void(0)" data-menu="" class="d-block nav-item">Careers</a>-->
            <a href="{{route('contact-page')}}" data-menu="" class="d-block nav-item {{request()->is('contact') ? 'text-gradient' : ''}}">Contact us</a>
        </div>
        <nav class="d-lg-none w-100" id="mobile-navbar">
            <div class="container w-100">
                <div class='d-flex justify-content-between align-items-center w-100'>
                    <a href="/"><img src="{{$settings->site_logo}}" alt="logo" class="header-logo" /></a>
                    
                    <!-- Mobile Menu Toggle Button -->
                    <button id="openNav" class="nav-btn" type="button">
                        <i class="fa-solid fa-bars text-gradient" style="font-size: 24px;"></i>
                    </button>
                </div>
        
                <div id="navMenu" class="menu-panel">
                    <div class="pb-3" style="padding-left: 15px; padding-right: 15px">
                        <button id="closeNav" class="close-btn">✖</button>
                        <img src="{{$settings->site_logo}}" alt="logo" class="header-logo" />
                    </div>
                    <ul class="menu-list">
                        <li><a class="nav-link mobile-nav-link {{request()->routeIs('home') ? 'text-gradient' : 'text-black'}}" href="{{route('home')}}">Home</a></li>
                        <li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="servicesMegaMenu"><span class="{{request()->is('services/*') ? 'text-gradient' : 'text-black'}}">Services</span><i class="fa-solid fa-arrow-right"></i></button></li>
                        <!--<li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="resourcesMegaMenu"><span>Resources</span><i class="fa-solid fa-arrow-right"></i></button></li>-->
                        <!--<li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="industriesMegaMenu"><span>Industries</span><i class="fa-solid fa-arrow-right"></i></button></li>-->
                        <li><a class="nav-link  {{request()->routeIs('about') ? 'text-gradient' : 'text-black'}} mobile-nav-link" href="{{route('about')}}">About Us</a></li>
                        <li><a class="nav-link mobile-nav-link {{request()->routeIs('partners') ? 'text-gradient' : 'text-black'}}" href="{{route('partners')}}">Partners</a></li>
                        <!--<li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="partnersMegaMenu"><span>Partners</span><i class="fa-solid fa-arrow-right"></i></button></li>-->
                        <!--<li><a class="nav-link mobile-nav-link" href="#">Careers</a></li>-->
                        <li><a class="nav-link mobile-nav-link {{request()->routeIs('contact') ? 'text-gradient' : 'text-black'}}" href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                @include('frontend.partials._mega-menu-mobile')
            </div>
        </nav>
        @include('frontend.partials._mega-menu')
    </div>
</header>
