@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{asset('images/frontend/digital-bg.png')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Digital<span class="text-gradient"> Solutions<span></h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">We deliver innovative digital strategies, business applications, and eCommerce solutions to help you scale your organization seamlessly in today’s digital-first world</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    <a href="#empower" id="empower-link" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Empowering Business</a>
                    <a href="#transformation-journey" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">Transformation Journey</a>
                    <a href="#consulting" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">Consulting & Strategy</a>
                    <a href="#transformation" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">Transformation</a>
                    <a href="#business" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400">Business Applications</a>
                    <a href="#ecommerce" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500">eCommerce</a>
                </div>
            </section>
            <section id="empower" class="empowering-section bg-white position-relative">
                <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" />
                <div class="container">
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                            <div class="text-content fixed-on-scroll" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h1 class="empower-title">
                                    Empowering Businesses to Transform & Grow
                                    <span class="gradient-band band-1"></span>
                                    <span class="gradient-band band-2"></span>
                                    <span class="gradient-band band-3"></span>
                                </h1>
                                
                                <!-- <p class="empower-subtitle fs-16">From a concept to digital reality</p> -->
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 empower-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">Innovative IT Services</h5>
                                <p>Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Strategic Industry Insights</h5>
                                <p>Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                            </div>

                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Transformative Digital Experiences</h5>
                                <p>Experience digital transformation that engages customers and revolutionizes your operations. We create seamless, user-centric digital interfaces that improve engagement and optimize user experience.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section id="transformation-journey" class="transformation-journey-section bg-white py-5 py-md-0">
                <div class="container">
                    <h1 class="fs-57 fs-md-42px fw-500 text-center text-md-start">The Digital <span class="text-gradient">Transformation</span> Journey</h1>
                    <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                        {{-- <img src="{{asset('images/frontend/home_graphic_1.svg')}}" class="home-graphic-1 object-fit-cover w-100" /> --}}
                        <video autoplay loop muted playsinline class="w-100">
                            <source src="{{asset('images/frontend/transformation.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </section>
            <section id="consulting" class="consulting-section bg-site-grey services-section-bg-grad">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/services_section_1.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Consulting & Strategy
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Reimagine your business roadmap with AI-first insights</h3>
                                <p class="services-section-desc">Our greatest differentiator is our people—their unmatched ability to deeply understand your goals and seamlessly align advanced AI solutions for transformative outcomes.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Future-Proof Your Business with Data-Driven Insights</h3>
                                <p class="services-section-desc">We tailor data-driven growth plans that embed machine learning across processes, ensuring every initiative is rooted in real-time intelligence and agile decision-making.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="transformation" class="transformation-section bg-white">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="d-flex justify-content-start align-items-center mb-4">
                                <img src="{{asset('images/frontend/services-section-title-graphic-2.svg')}}" class="me-1 me-md-4 title-graphic-2" />
                                <h1 class="services-section-title text-gradient text-center text-md-start">Transformation</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Powered Transformation for Smarter Operations</h3>
                                <p class="services-section-desc text-black">Transform legacy operations into AI-powered ecosystems that drive faster innovation. Our integrated approach modernizes workflows, harnessing automation for tangible business impact.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Driven Culture for Growth & Innovation</h3>
                                <p class="services-section-desc text-black">We facilitate cultural shifts that embrace AI, ensuring everyone from leadership to frontline teams adopts an insights-driven mindset—amplifying productivity and sparking new revenue channels.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/services_section_2.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="business" class="business-section py-40px bg-site-grey services-section-bg-grad">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-lg-5" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/services_section_3.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Business Applications
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Intelligent Enhancements for Enterprise Applications</h3>
                                <p class="services-section-desc">Elevate your enterprise applications with intelligent features. We embed AI-driven recommendations, analytics, and automation within ERP, CRM, and custom solutions.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Optimized Operations with Predictive Insights</h3>
                                <p class="services-section-desc">By leveraging predictive modelling and real-time data, we enable continuous optimization of business processes—so your teams can focus on strategic innovation, not routine tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="ecommerce" class="ecommerce-section py-200px bg-white">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="d-flex justify-content-start align-items-center mb-4">
                                <img src="{{asset('images/frontend/services-section-title-graphic-2.svg')}}" class="me-1 me-md-4 title-graphic-2" />
                                <h1 class="services-section-title text-gradient text-center text-md-start">eCommerce</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Powered Personalization for Digital Commerce</h3>
                                <p class="services-section-desc text-black">Reinvent digital storefronts with AI personalisation. From product recommendations to dynamic pricing, harness the power of machine learning to convert more shoppers.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Real-Time Insights for Profitable Digital Experiences</h3>
                                <p class="services-section-desc text-black">Our data-led approach analyses consumer behaviour in real time, optimizing every touchpoint—ensuring your online channels remain profitable, scalable, and delightful to navigate.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/services_section_4.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('frontend.partials._contact-form')
            @include('frontend.partials._footer')
        </section>
    </section>
@endsection
@section('scripts')
{{-- <script>
    $(document).ready(function(){
        $('.page-nav-link').click(function(){
            if (window.location.hash === "#empower") {
                $('#empower-link').addClass("text-gradient");
            }else{
                $('#empower-link').removeClass("text-gradient");
            }
        })
    })
</script> --}}
@endsection