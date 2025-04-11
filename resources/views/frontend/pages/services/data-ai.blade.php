@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{asset('images/frontend/data-ai-bg.png')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Data & AI <span class="text-gradient">Solutions<span></h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">We leverage data and AI-driven strategies, intelligent automation, and advanced analytics to help you unlock new opportunities, optimize operations, and drive smarter decision-making in today’s AI-powered world.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    <a href="#empower" id="empower-link" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Empowering Business</a>
                    <a href="#transformation-journey" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">Transformation Journey</a>
                    <a href="#consulting" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">Data Integration</a>
                    <a href="#transformation" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">Data Modernisation</a>
                    <a href="#business" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400">API Economy</a>
                    <a href="#ecommerce" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500">Data Management</a>
                    <a href="#generative-ai" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600">Generative AI</a>
                </div>
            </section>
            <section id="empower" class="empowering-section bg-white position-relative">
                <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" />
                <div class="container">
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                            <div class="text-content fixed-on-scroll" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h1 class="empower-title">
                                    Harnessing Data & AI for Intelligent Growth
                                    <span class="gradient-band band-1"></span>
                                    <span class="gradient-band band-2"></span>
                                    <span class="gradient-band band-3"></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 empower-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">AI-Powered Business Intelligence</h5>
                                <p>Turn data into a strategic asset with AI-driven analytics. Our solutions help you uncover patterns, predict trends, and make data-backed decisions that drive efficiency and growth.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Data-Driven Strategies</h5>
                                <p>Gain a competitive edge with real-time data insights and predictive analytics. We empower your business with intelligent forecasting, risk assessment, and data visualization to enhance decision-making.</p>
                            </div>

                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>AI & Automation Solutions</h5>
                                <p>Transform operations with AI-powered automation and machine learning. From process optimization to personalized customer experiences, we help you implement intelligent solutions that enhance efficiency and scalability.</p>
                            </div>
                        </div>
                    </div>        
                </div>
            </section>
            <section id="transformation-journey" class="transformation-journey-section bg-white py-5 py-md-0">
                <div class="container">
                    <h1 class="fs-57 fs-md-42px fw-500 text-center text-md-start">The Data & AI <span class="text-gradient">Transformation</span> Journey</h1>
                    <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                        {{-- <img src="{{asset('images/frontend/home_graphic_1.svg')}}" class="home-graphic-1 object-fit-cover w-100" /> --}}
                        <video autoplay loop muted playsinline class="w-100">
                            <source src="{{asset('images/frontend/data-and-ai.mp4')}}" type="video/mp4">
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
                                <img src="{{asset('images/frontend/data-integration.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Data Integration
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Seamless Data Integration for AI-Driven Insights</h3>
                                <p class="services-section-desc">Unify scattered data sources into a cohesive, AI-ready platform. Our robust pipelines guarantee accuracy, speed, and a single source of truth for informed decision-making.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">AI-Enhanced ETL for Smarter Data Processing</h3>
                                <p class="services-section-desc">Leverage ETL best practices enhanced with machine learning to detect data anomalies, expedite cleansing, and fuel advanced analytics for the entire enterprise.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">Data Modernisation</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Ready Data Platform Modernization</h3>
                                <p class="services-section-desc text-black">Migrate to next-gen data platforms purpose-built for AI. We upgrade legacy systems to high-performance environments primed for large-scale analytics and machine learning workloads.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Real-Time Data Processing for Agile Decision-Making</h3>
                                <p class="services-section-desc text-black">Achieve reduced latency, improved reliability, and real-time processing. With a cutting-edge data foundation, your organization can pivot quickly to exploit emerging market trends.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/data-modernisation.png')}}" alt="" class="services-section-img" />
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
                                <img src="{{asset('images/frontend/API-Economy.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">API Economy
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Monetize Data with AI-Powered APIs</h3>
                                <p class="services-section-desc">Unlock new revenue streams by turning data into AI-powered APIs. We build robust interfaces that expose your insights to partners, fostering collaboration and innovation.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Secure & Scalable AI-Driven API Management</h3>
                                <p class="services-section-desc">From secure gateway deployment to usage analytics, our approach ensures each API remains a strategic asset—driving brand extensions and real-time intelligence sharing.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">Data Management</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Data Governance for Compliance and Security</h3>
                                <p class="services-section-desc text-black">Embrace smarter data stewardship with AI-driven governance. Our solutions classify, secure, and optimize data in real time, ensuring compliance and trustworthiness.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Driven Data Cataloging for Enhanced Control</h3>
                                <p class="services-section-desc text-black">From metadata enrichment to automated cataloging, we give you unparalleled control over your information—minimizing risk and maximizing analytical capabilities.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/Data-Management.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="generative-ai" class="business-section py-40px bg-site-grey services-section-bg-grad">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-lg-5" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/Generative-AI.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Generative AI
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Accelerate Innovation with Generative AI</h3>
                                <p class="services-section-desc">Innovate faster with AI models that create unique content, designs, and solutions. Our generative AI services automate complex tasks and augment human creativity.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Transform Experiences with LLMs and Neural Architectures</h3>
                                <p class="services-section-desc">We integrate large language models (LLMs) and cutting-edge neural architectures, enabling truly adaptive experiences—from virtual assistants to dynamic product suggestions.</p>
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