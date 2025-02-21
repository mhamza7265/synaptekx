<header class="site-header d-flex justify-content-between align-items-center position-relative">
    <img src="{{asset("images/frontend/synaptekx_logo.svg")}}" alt="logo" class="header-logo d-none d-md-block" />
    <div class="site-navbar d-none d-md-flex justify-content-between align-items-center">
        <a href="javascript:void(0)" class="d-block nav-item">Home</a>
        <span id="services-nav" data-menu="services-menu" class="nav-item cursor-pointer">Services <i class="fa-solid fa-caret-down ms-2"></i></span>
        <span id="industries-nav" data-menu="industries-menu" class="nav-item cursor-pointer">Industries <i class="fa-solid fa-caret-down ms-2"></i></span>
        <span id="resources-nav" data-menu="resources-menu" class="nav-item cursor-pointer">Resources <i class="fa-solid fa-caret-down ms-2"></i></span>
        <a href="javascript:void(0)" class="d-block nav-item">About Us</a>
        <span id="partners-nav" data-menu="partners-menu" class="nav-item cursor-pointer">Partners <i class="fa-solid fa-caret-down ms-2"></i></span>
        <a href="javascript:void(0)" class="d-block nav-item">Career</a>
        <a href="javascript:void(0)" class="d-block nav-item text-gradient">Contact us</a>
        <a href="javascript:void(0)" class="d-block nav-item"><i class="fa-solid fa-magnifying-glass"></i></a>
    </div>
    <nav class="d-lg-none navbar navbar-light bg-light w-100">
        <div class="container w-100">
            <div class='d-flex justify-content-between align-items-center w-100'>
                <img src="{{asset("images/frontend/synaptekx_logo.svg")}}" alt="logo" class="header-logo" />
                
                <!-- Mobile Menu Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
    
            <!-- Mobile Menu Links -->
            <div class="collapse navbar-collapse" id="mobileNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
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
</header>
