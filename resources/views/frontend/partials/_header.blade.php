<header class="site-header-main font-pt-sans">
    <div id="frontend-site-header" class="site-header d-flex justify-content-between align-items-center position-relative">
        <a class="d-none d-lg-block" href="/">
            <img src="{{asset("images/frontend/synaptekx_logo.svg")}}" alt="logo" class="header-logo d-none d-md-block" />
        </a>
        {{-- <div class="site-navbar d-none d-md-flex justify-content-between align-items-center">
            <a href="/" data-menu="" class="d-block nav-item">Home</a>
            <a href="{{route('services')}}" id="services-nav" data-menu="services-menu" class="nav-item cursor-pointer">Services <i class="fa-solid fa-caret-down ms-2"></i></a>
            <span id="industries-nav" data-menu="industries-menu" class="nav-item cursor-pointer">Industries <i class="fa-solid fa-caret-down ms-2"></i></span>
            <span id="resources-nav" data-menu="resources-menu" class="nav-item cursor-pointer">Resources <i class="fa-solid fa-caret-down ms-2"></i></span>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item">About Us</a>
            <span id="partners-nav" data-menu="partners-menu" class="nav-item cursor-pointer">Partners <i class="fa-solid fa-caret-down ms-2"></i></span>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item">Career</a>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item text-gradient">Contact us</a>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div> --}}

        <div class="site-navbar d-none d-lg-flex justify-content-between align-items-center">
            <a href="/" data-menu="" class="d-block nav-item">Home</a>
            <span id="services-nav" data-menu="services-menu" class="nav-item cursor-pointer">Services <i class="fa-solid fa-caret-down ms-2"></i></span>
            <span id="resources-nav" data-menu="resources-menu" class="nav-item cursor-pointer">Resources <i class="fa-solid fa-caret-down ms-2"></i></span>
            <span id="industries-nav" data-menu="industries-menu" class="nav-item cursor-pointer">Industries <i class="fa-solid fa-caret-down ms-2"></i></span>
            <a href="{{route('about')}}" data-menu="" class="d-block nav-item">About Us</a>
            <a href="{{route('partners')}}" id="partners-nav" data-menu="partners-menu" class="nav-item cursor-pointer">Partners <i class="fa-solid fa-caret-down ms-2"></i></a>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item">Careers</a>
            <a href="{{route('contact-page')}}" data-menu="" class="d-block nav-item text-gradient">Contact us</a>
        </div>
        <nav class="d-lg-none w-100" id="mobile-navbar">
            <div class="container w-100">
                <div class='d-flex justify-content-between align-items-center w-100'>
                    <a href="/"><img src="{{asset("images/frontend/synaptekx_logo.svg")}}" alt="logo" class="header-logo" /></a>
                    
                    <!-- Mobile Menu Toggle Button -->
                    <button id="openNav" class="nav-btn" type="button">
                        <i class="fa-solid fa-bars text-gradient" style="font-size: 24px;"></i>
                    </button>
                </div>
        
                <div id="navMenu" class="menu-panel">
                    <div class="pb-3" style="padding-left: 15px; padding-right: 15px">
                        <button id="closeNav" class="close-btn">✖</button>
                        <img src="{{asset("images/frontend/synaptekx_logo.svg")}}" alt="logo" class="header-logo" />
                    </div>
                    <ul class="menu-list">
                        <li><a class="nav-link mobile-nav-link" href="{{route('home')}}">Home</a></li>
                        <li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="servicesMegaMenu"><span>Services</span><i class="fa-solid fa-arrow-right"></i></button></li>
                        <li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="resourcesMegaMenu"><span>Resources</span><i class="fa-solid fa-arrow-right"></i></button></li>
                        <li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="industriesMegaMenu"><span>Industries</span><i class="fa-solid fa-arrow-right"></i></button></li>
                        <li><a class="nav-link mobile-nav-link" href="{{route('about')}}">About Us</a></li>
                        <li><button class="nav-link-item mobile-nav-link d-flex justify-content-between align-items-center" data-menu="partnersMegaMenu"><span>Partners</span><i class="fa-solid fa-arrow-right"></i></button></li>
                        <li><a class="nav-link mobile-nav-link" href="#">Careers</a></li>
                        <li><a class="nav-link mobile-nav-link" href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                @include('frontend.partials._mega-menu-mobile')
            </div>
        </nav>
        @include('frontend.partials._mega-menu')
    </div>
</header>
