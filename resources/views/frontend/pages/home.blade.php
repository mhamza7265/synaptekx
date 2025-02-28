@extends('frontend.layouts.main')

@section('styles')
    <style>
        .text{
            color: blue;
        }
    </style>
@endsection

@section('content')
    <div class="home-page">
        

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <section class="hero-section" style="background-image: url('/images/frontend/hero_one.svg')">
                    <div class="container">
                        <div class="hero-check-container d-flex justify-content-start align-content-center">
                            <img src="{{asset('images/frontend/site_check_icon.svg')}}" />
                            <span class="site-check-text ms-2">SYNAPTEKX</span>
                        </div>
                        <div class="hero-text-content">
                            <h1 class="hero-title-text">Redefining IT Solutions for the <span class="text-gradient">Digital Age</span></h1>
                        </div>
                        <div class="hero-text-detail">
                            <p class="hero-detail-text">Welcome to <span class="text-gradient">SynaptekX</span> where cutting-edge technology meets innovative thinking. As a startup committed to delivering exceptional value, we specialize in transforming businesses through our comprehensive suite of digital services. Whether you’re looking to optimize your current operations or build a robust digital infrastructure, we are here to make your vision a reality. Our expertise lies in providing strategic consulting, end-to-end digital transformation, and tailored IT solutions that help businesses thrive in a rapidly evolving digital landscape.</p>
                        </div>
                    </div>
                    <div class="hero-brands">
                        @include('frontend.partials._hero-brands')
                    </div>
                </section>
              </div>
              <div class="carousel-item">
                <section class="hero-section" style="background-image: url('/images/frontend/hero_one.svg')">
                    <div class="container">
                        <div class="hero-check-container d-flex justify-content-start align-content-center">
                            <img src="{{asset('images/frontend/site_check_icon.svg')}}" />
                            <span class="site-check-text ms-2">SYNAPTEKX</span>
                        </div>
                        <div class="hero-text-content">
                            <h1 class="hero-title-text">Redefining IT Solutions for the <span class="text-gradient">Digital Age</span></h1>
                        </div>
                        <div class="hero-text-detail">
                            <p class="hero-detail-text">Welcome to <span class="text-gradient">SynaptekX</span> where cutting-edge technology meets innovative thinking. As a startup committed to delivering exceptional value, we specialize in transforming businesses through our comprehensive suite of digital services. Whether you’re looking to optimize your current operations or build a robust digital infrastructure, we are here to make your vision a reality. Our expertise lies in providing strategic consulting, end-to-end digital transformation, and tailored IT solutions that help businesses thrive in a rapidly evolving digital landscape.</p>
                        </div>
                    </div>
                    <div class="hero-brands">
                        @include('frontend.partials._hero-brands')
                    </div>
                </section>
              </div>
              <div class="carousel-item">
                <section class="hero-section" style="background-image: url('/images/frontend/hero_one.svg')">
                    <div class="container">
                        <div class="hero-check-container d-flex justify-content-start align-content-center">
                            <img src="{{asset('images/frontend/site_check_icon.svg')}}" />
                            <span class="site-check-text ms-2">SYNAPTEKX</span>
                        </div>
                        <div class="hero-text-content">
                            <h1 class="hero-title-text">Redefining IT Solutions for the <span class="text-gradient">Digital Age</span></h1>
                        </div>
                        <div class="hero-text-detail">
                            <p class="hero-detail-text">Welcome to <span class="text-gradient">SynaptekX</span> where cutting-edge technology meets innovative thinking. As a startup committed to delivering exceptional value, we specialize in transforming businesses through our comprehensive suite of digital services. Whether you’re looking to optimize your current operations or build a robust digital infrastructure, we are here to make your vision a reality. Our expertise lies in providing strategic consulting, end-to-end digital transformation, and tailored IT solutions that help businesses thrive in a rapidly evolving digital landscape.</p>
                        </div>
                    </div>
                    <div class="hero-brands">
                        @include('frontend.partials._hero-brands')
                    </div>
                </section>
              </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
        </div>

        <section class="home-section-2 bg-white position-relative radius-24 mt-15">
            <img src="{{asset('images/frontend/graphic_element.svg')}}" class="div-graphic-element" />
            <div class="container py-60px">
                <div class="hero-check-container d-flex justify-content-start align-content-center border-black">
                    <img src="{{asset('images/frontend/site_check_icon.svg')}}" />
                    <span class="site-check-text ms-2 text-black">PARTNERS</span>
                </div>
                <div class="col-md-12 mt-4">
                    <h1 class="w-60-perc home-sect-2-title"><span class="text-gradient">SynaptekX</span> Collabrotion With some of Tech Giants </h1>
                </div>
                <div class="mt-5">
                    @include('frontend.partials._hero-brands')
                </div>

                <div class="home-sect-2-content-container d-flex justify-content-between align-items-start mt-5">
                    <div class="home-sect-2-img">
                        <img src="{{asset('images/frontend/home-section-2.svg')}}" style="object-fit: cover" />
                    </div>
                    <div class="home-sect-2-text-container">
                        <p class="home-sect-2-text-heading">Contribution with Google</p>

                        <p class="home-sect-2-text-detail">At SynaptekX, we believe that a strong strategy is the foundation of success. With our Consulting & Strategy services, we work closely with your team to understand your unique business goals, identify opportunities, and build actionable roadmaps for success.</p>

                        <div class="home-sect-2-text-detail-2 mt-4">
                            <h3>Work Details</h3>
                            <ul>
                                <li>IT Strategy Development: <span>Align your IT goals with your overall business objectives.</span></li>
                                <li>Technology Assessment: <span>Identify gaps in your current infrastructure and propose innovative solutions.</span></li>
                                <li>Risk Analysis & Mitigation: <span>Ensure your digital growth is secure and future-proof.</span></li>
                                <li>Digital Roadmap Creation: <span>Craft a step-by-step plan to guide your digital transformation journey.</span></li>
                            </ul>
                            <p>By partnering with us, you’ll benefit from data-driven insights and a tailored strategy that maximizes your ROI.</p>
                        </div>

                        <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-3 fs-14">Explore More</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-section-3 position-relative radius-24 mt-15">
            <img src="{{asset('images/frontend/graphic_element.svg')}}" class="div-graphic-element" />
            <div class="container py-90px">
                <div class="d-flex justify-content-start align-content-center">
                    <img src="{{asset('images/frontend/features_pill.svg')}}" />
                </div>
                <div class="col-md-12 mt-4">
                    <h1 class="w-60-perc home-sect-2-title text-white">Our Core Digital Services at <span class="text-gradient">SynaptekX</span></h1>
                </div>
                <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-5">
                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                    <span class="ms-3 fs-14 text-white">explore our platform</span>
                </a>

                <div class="home-sect-3-content-container d-flex justify-content-between align-items-start mt-5">
                    <div class="row w-100">
                        <!-- Left Side - Vertical Tabs -->
                        <div class="d-flex col-md-4">
                            <div class="h-100 border-1 border-white" style="padding-top: 20px">
                                <img src="{{asset('images/frontend/divider_gradient.svg')}}" />
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button">
                                    Consulting & Strategy
                                </button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button">
                                    Transformation
                                </button>
                                <button class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact" type="button">
                                    Business Applications
                                </button>
                            </div>
                        </div>
                
                        <!-- Right Side - Tab Content -->
                        <div class="col-md-8">
                            <div class="tab-content section-3-tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home">
                                    <h3 class="section-3-tab-heading-1 text-white">Consulting & Strategy</h3>
                                    <p class="section-3-tab-detail-1">At SynaptekX, we believe that a strong strategy is the foundation of success. With our Consulting & Strategy services, we work closely with your team to understand your unique business goals, identify opportunities, and build actionable roadmaps for success.</p>
                                    <h3 class="section-3-tab-heading-2 text-white mt-3">Consulting & Strategy</h3>
                                    <ul style="padding-left: 1rem">
                                        <li class="section-3-tab-detail-1">IT Strategy Development: Align your IT goals with your overall business objectives.</li>
                                        <li class="section-3-tab-detail-1">Technology Assessment: Identify gaps in your current infrastructure and propose innovative solutions.</li>
                                        <li class="section-3-tab-detail-1">Risk Analysis & Mitigation: Ensure your digital growth is secure and future-proof.</li>
                                        <li class="section-3-tab-detail-1">Digital Roadmap Creation: Craft a step-by-step plan to guide your digital transformation journey.</li>
                                    </ul>
                                    <p class="section-3-tab-detail-1">By partnering with us, you’ll benefit from data-driven insights and a tailored strategy that maximizes your ROI.</p>
                                    <div>
                                        <img src="{{asset('images/frontend/section_3_img.svg')}}" class="section-3-img" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile">
                                    <h3>Profile Content</h3>
                                    <p>This is the Profile tab content.</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-contact">
                                    <h3>Contact Content</h3>
                                    <p>This is the Contact tab content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-section-2 bg-white position-relative radius-24 mt-15">
            <div class="container py-35px">
                <div class="col-md-12 mt-4">
                    <h1 class="home-sect-4-title text-black">The Digital <span class="text-gradient">Transformation</span> Journey</h1>
                </div>
                <div class="home_graphic mt-5">
                    <img src="{{asset('images/frontend/home_graphic_1.svg')}}" class="home-graphic-1 object-fit-cover w-100" />
                </div>
            </div>    
        </section> 
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.text').css('color', 'red');
        })
    </script>
@endsection