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
            <a href="{{route('services')}}" id="services-nav" data-menu="services-menu" class="nav-item cursor-pointer">Services <i class="fa-solid fa-caret-down ms-2"></i></a>
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
                    <button id="closeNav" class="close-btn">✖</button>
                    <h2 class="menu-title">Navigation</h2>
                    <ul class="menu-list">
                        <li><a class="nav-link" href="{{route('home')}}">Home</a></li>
                        <li><button class="nav-link-item" data-menu="servicesMegaMenu">Services</button></li>
                        <li><button class="nav-link-item" data-menu="resourcesMegaMenu">Resources</button></li>
                        <li><button class="nav-link-item" data-menu="industriesMegaMenu">Industries</button></li>
                        <li><a class="nav-link" href="#">About Us</a></li>
                        <li><button class="nav-link-item" data-menu="partnersMegaMenu">Partners</button></li>
                        <li><a class="nav-link" href="#">Careers</a></li>
                        <li><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Mega Menu Panels -->
                <div id="servicesMegaMenu" class="mega-menu-mobile">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="back-btn" data-back="navMenu"><span class="fs-22">< </span>Services</button>
                        {{-- <h3 class="menu-title">Services</h3> --}}
                    </div>
                    <div class="menu-list py-4">
                        <div class="container p-0">
                            <div class="row justify-content-between align-items-baseline">
                                <div class="col-12">
                                    <div class="d-lg-flex justify-content-start align-items-center gap-3">
                                        <img src="{{asset('images/frontend/m-menu-1.svg')}}" />
                                        <p class="m-0 menu-head-1 font-menu-head">Digital</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Consulting & Strategy</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Transformation</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Business Applications</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>eCommerce</a>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="d-lg-flex justify-content-start align-items-center gap-3">
                                        <img src="{{asset('images/frontend/m-menu-2.svg')}}" />
                                        <p class="m-0 font-menu-head">Data & AI</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data Integration</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data Modernisation</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>API Economy</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data Management</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Generative AI</a>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="d-lg-flex justify-content-start align-items-center gap-3">
                                        <img src="{{asset('images/frontend/m-menu-3.svg')}}" />
                                        <p class="m-0 font-menu-head">Security</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Security Architecture as a Service</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Managed SOC Operations</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>vCISO</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Compliance Adherence</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Incident Response</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-baseline mt-5">
                                <div class="col-12 mt-4">
                                    <div class="d-lg-flex justify-content-start align-items-center gap-3">
                                        <img src="{{asset('images/frontend/m-menu-4.svg')}}" />
                                        <p class="m-0 font-menu-head">Cloud</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Migration</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Modernisation</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Economy</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Transformation</a>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="d-lg-flex justify-content-start align-items-center gap-3">
                                        <img src="{{asset('images/frontend/m-menu-5.svg')}}" />
                                        <p class="m-0 font-menu-head">Managed Services</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>SOC</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>CloudOps</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>DevOps</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>MLOps</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>DevSecOps</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>AppOps</a>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="d-lg-flex justify-content-start align-items-center gap-3">
                                        <img src="{{asset('images/frontend/m-menu-6.svg')}}" />
                                        <p class="m-0 font-menu-head">Talent Acquisition & Sourcing</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Digital Transformation</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Cloud</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data & AI</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Security</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Software Development</a>
                                        <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Product Development</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="industriesMegaMenu" class="mega-menu-mobile">
                    <button class="back-btn" data-back="navMenu"><span class="fs-22">< </span>Industries</button>
                    <ul class="menu-list py-4">
                        <div class="container p-0">
                            <div class="d-lg-flex justify-content-start align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{asset('images/frontend/industries-img.svg')}}" style="border-radius: 20px; object-fit: cover; width: 100%" />
                                    </div>
                                </div>
                                <div class="d-lg-flex justify-content-center align-items-baseline w-100 pt-4">
                                    <div class="" style="width: 100%"> 
                                        <p class="mega-menu-heading m-0 pb-4 border-1 border-bottom border-black">Industries</p>
                                        <div class="mt-4">
                                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Fintech</a>
                                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Healthcare</a>
                                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Business</a>
                                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>eCommerce</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>

                <div id="resourcesMegaMenu" class="mega-menu-mobile">
                    <button class="back-btn" data-back="navMenu"><span class="fs-22">< </span>Resources</button>
                    <ul class="menu-list py-4">
                        <div class="container p-0">
                            <div class="d-lg-flex justify-content-start align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{asset('images/frontend/resources-img.svg')}}" style="border-radius: 20px; object-fit: cover; width: 100%" />
                                    </div>
                                </div>
                                <div class="d-lg-flex justify-content-center align-items-baseline w-100 pt-4">
                                    <div class="" style="width: 100%"> 
                                        <p class="mega-menu-heading m-0 pb-4 border-1 border-bottom border-black">Resources</p>
                                        <div class="mt-4">
                                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Talent Academy</a>
                                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Whitepapers</a>
                                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Webinars</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>

                <div id="partnersMegaMenu" class="mega-menu-mobile">
                    <button class="back-btn" data-back="navMenu"><span class="fs-22">< </span>Partners</button>
                    <ul class="menu-list py-4">
                        <div class="container p-0">
                            <div class="d-lg-flex justify-content-start align-items-start">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{asset('images/frontend/partners-img.svg')}}" style="border-radius: 20px; object-fit: cover; width: 100%" />
                                    </div>
                                </div>
                                <div class="d-lg-flex justify-content-center align-items-baseline w-100 pt-4">
                                    <div class="" style="width: 100%"> 
                                        <p class="mega-menu-heading m-0 pb-4 border-1 border-bottom border-black">Our Partners</p>
                                        <div class="d-lg-flex justify-content-between align-items-start mt-4">
                                            <div>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>AWS</a>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Microsoft</a>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Google</a>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>OpenAI</a>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Cisco</a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Equinx</a>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Paloalto</a>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Hashicorp</a>
                                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Fortinet</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>

            </div>
        </nav>
        {{-- <nav class="d-lg-none navbar navbar-light w-100" id="mobile-navbar">
            <div class="container w-100">
                <div class='d-flex justify-content-between align-items-center w-100'>
                    <a href="/"><img src="{{asset("images/frontend/synaptekx_logo.svg")}}" alt="logo" class="header-logo" /></a>
                    
                    <!-- Mobile Menu Toggle Button -->
                    <button class="navbar-toggler" id="mobile-navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
        
                <!-- Mobile Menu Links -->
                <div class="collapse navbar-collapse" id="mobileNavbar">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('services')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Industries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('partners')}}">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact-page')}}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> --}}
        @include('frontend.partials._mega-menu')
    </div>
</header>
