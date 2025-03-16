@extends('frontend.layouts.main')

@section('content')
    <div class="services-container">
        <section class="hero" style="background-image: url('{{asset('images/frontend/services_hero_2.jpg')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content">
                        <h1 class="services-hero-title text-white text-center">Revolutionize Your Business with Cutting-Edge <span class="text-gradient">Digital Solutions<span></h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">We deliver innovative digital strategies, business applications, and eCommerce solutions to help you scale your organization seamlessly in today’s digital-first world</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-section">
            <div class="d-flex justify-content-between align-items-center px-5 py-5">
                <a href="#empower" class="page-nav-link fs-16 fw-600">Empowering Business</a>
                <a href="#transformation" class="page-nav-link fs-16 fw-600">Transformation Journey</a>
                <a href="#consulting" class="page-nav-link fs-16 fw-600">Consulting & Strategy</a>
                <a href="#" class="page-nav-link fs-16 fw-600">Transformation</a>
                <a href="#" class="page-nav-link fs-16 fw-600">Business Applications</a>
                <a href="#" class="page-nav-link fs-16 fw-600">eCommerce</a>
            </div>
        </section>
        <section id="empower" class="empowering-section bg-white position-relative">
            <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" />
            <div class="container-sm">
                <div class="row justify-content-between align-items-start">
                    <div id="fixed-on-scroll" class="col-12 col-md-6">
                        <div class="text-content fixed-on-scroll">
                            <h1 class="empower-title">
                                Empowering Businesses to Transform & Grow
                                <span class="gradient-band band-1"></span>
                                <span class="gradient-band band-2"></span>
                                <span class="gradient-band band-3"></span>
                            </h1>
                            
                            <p class="empower-subtitle fs-16">We deliver innovative digital strategies, business applications, and eCommerce solutions to help you scale your organization seamlessly in today’s digital-first world</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 empower-right-texts-parent">
                        <div class="empower-right-texts">
                            <h5 class="fs-22 fw-500">Innovative IT Services</h5>
                            <p>Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                            <div id="div-end-unfiix"></div>
                        </div>
                        
                        <div class="empower-right-texts">
                            <h5>Strategic Industry Insights</h5>
                            <p>Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                        </div>

                        <div class="empower-right-texts">
                            <h5>Transformative Digital Experiences</h5>
                            <p>Experience digital transformation that engages customers and revolutionizes your operations. We create seamless, user-centric digital interfaces that improve engagement and optimize user experience.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section id="transformation" class="transformation-section bg-white">
            <div class="container-sm">
                <h1 class="fs-57 fw-500">The Digital <span class="text-gradient">Transformation</span> Journey</h1>
                <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                    <img src="{{asset('images/frontend/home_graphic_1.svg')}}" class="home-graphic-1 object-fit-cover w-100" />
                </div>
            </div>
        </section>
        <section id="consulting" class="consulting-section bg-site-grey">
            <div class="container-sm">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{asset('images/frontend/services_section_1.png')}}" alt="" class="services-section-image" />
                    </div>
                    <div class="col-md-7 ps-md-5">
                        <h1 class="services-section-title text-gradient mb-4">Consulting & Strategy
                            <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-4" />
                        </h1>
                        <div class="mt-3">
                            <h3 class="services-section-subtitle">Strategic Expertise to Drive Long-Term Succes</h3>
                            <p class="services-section-desc">Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                        </div>
                        <div class="mt-3">
                            <h3 class="services-section-subtitle">Future-Proof Your Business with Data-Driven Insights</h3>
                            <p class="services-section-desc">From IT strategy development to risk management, we help you unlock sustainable value and competitive advantage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
       $(window).on("scroll", function () {
            $(window).on("scroll", function () {
                let scrollPercentage = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
                let gradientPosition = (100 - (scrollPercentage % 100)) + "%";
                
                $(".empower-title").css("--gradient-position", gradientPosition);
            });
        });
    </script>
@endsection