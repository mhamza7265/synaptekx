<header class="site-header-main">
    <div id="frontend-site-header" class="site-header d-flex justify-content-between align-items-center position-relative">
        <a href="/">
            <img src="{{asset("images/frontend/synaptekx_logo.svg")}}" alt="logo" class="header-logo d-none d-md-block" />
        </a>
        <div class="site-navbar d-none d-md-flex justify-content-between align-items-center">
            <a href="/" data-menu="" class="d-block nav-item">Home</a>
            <a href="{{route('services')}}" id="services-nav" data-menu="services-menu" class="nav-item cursor-pointer">Services <i class="fa-solid fa-caret-down ms-2"></i></a>
            <span id="industries-nav" data-menu="industries-menu" class="nav-item cursor-pointer">Industries <i class="fa-solid fa-caret-down ms-2"></i></span>
            <span id="resources-nav" data-menu="resources-menu" class="nav-item cursor-pointer">Resources <i class="fa-solid fa-caret-down ms-2"></i></span>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item">About Us</a>
            <span id="partners-nav" data-menu="partners-menu" class="nav-item cursor-pointer">Partners <i class="fa-solid fa-caret-down ms-2"></i></span>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item">Career</a>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item text-gradient">Contact us</a>
            <a href="javascript:void(0)" data-menu="" class="d-block nav-item"><i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
        <nav class="d-lg-none navbar navbar-light w-100" id="mobile-navbar">
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
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Industries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @include('frontend.partials._mega-menu')
    </div>
</header>
