@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{asset('images/frontend/cloud-bg.png')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Cloud <span class="text-gradient">Solutions<span></h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">We provide cutting-edge cloud solutions, from strategic planning to scalable infrastructure, enabling your business to streamline operations, and drive innovation in a rapidly evolving digital landscape.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    <a href="#empower" id="empower-link" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Empowering Business</a>
                    <a href="#transformation-journey" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">Transformation Journey</a>
                    <a href="#consulting" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">Migration</a>
                    <a href="#transformation" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">Modernisation</a>
                    <a href="#business" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400">Economy</a>
                    <a href="#ecommerce" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500">Transformation</a>
                </div>
            </section>
            <section id="empower" class="empowering-section bg-white position-relative">
                <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" />
                <div class="container">
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                            <div class="text-content fixed-on-scroll" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h1 class="empower-title">
                                    Transforming Businesses with Scalable Cloud Solutions
                                    <span class="gradient-band band-1"></span>
                                    <span class="gradient-band band-2"></span>
                                    <span class="gradient-band band-3"></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 empower-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">Cloud Infrastructure Optimization</h5>
                                <p>Enhance performance and efficiency with cloud infrastructure tailored to your specific needs. Our cloud solutions ensure seamless integration, optimized resource allocation, and enhanced scalability to meet your growing business demands.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Cloud Security & Compliance</h5>
                                <p>Protect your data and ensure compliance with industry standards through robust cloud security measures. We offer end-to-end encryption, identity management, and continuous monitoring to safeguard your cloud environment.</p>
                            </div>

                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Seamless Cloud Migration</h5>
                                <p>Transition to the cloud with confidence. Our AI-assisted migration services minimize downtime and ensure a smooth, efficient migration process. We optimize your existing workflows and infrastructure to leverage the full potential of cloud computing.</p>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </section>
            <section id="transformation-journey" class="transformation-journey-section bg-white py-5 py-md-0">
                <div class="container">
                    <h1 class="fs-57 fs-md-42px fw-500 text-center text-md-start">The Cloud <span class="text-gradient">Transformation</span> Journey</h1>
                    <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                        {{-- <img src="{{asset('images/frontend/home_graphic_1.svg')}}" class="home-graphic-1 object-fit-cover w-100" /> --}}
                        <video autoplay loop muted playsinline class="w-100">
                            <source src="{{asset('images/frontend/cloud.mp4')}}" type="video/mp4">
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
                                <img src="{{asset('images/frontend/Migration.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Migration
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Seamless Cloud Migration with AI Precision</h3>
                                <p class="services-section-desc">Migrate applications to the cloud with AI-assisted planning for minimized downtime and cost. We employ intelligent workload assessment to streamline your journey.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Predictive Analytics for Smarter Cloud Migration</h3>
                                <p class="services-section-desc">Our predictive analytics identify the ideal migration path, automating repetitive tasks and ensuring a secure, agile environment ready for modern data workloads.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">Modernisation</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Future-Proof Legacy Systems with AI & Containerization</h3>
                                <p class="services-section-desc text-black">Revamp legacy systems with AI and containerization for faster deployments and real-time adaptability. Future-proof your applications against ever-shifting market demands.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Resilient and Cost-Effective Modernized Infrastructures</h3>
                                <p class="services-section-desc text-black">By weaving in self-healing infrastructures and predictive maintenance, we ensure your modernized environment remains resilient, cost-effective, and innovation-ready.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/Modernisation.png')}}" alt="" class="services-section-img" />
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
                                <img src="{{asset('images/frontend/Economy.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Economy
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Cloud Cost Optimization</h3>
                                <p class="services-section-desc">Optimize cloud spend with AI-based resource allocation. Our dynamic cost management solutions align usage patterns with business demands, preventing overspending.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Confident Growth with Intelligent Cloud Performance Tracking</h3>
                                <p class="services-section-desc">Through intelligent performance tracking and auto-scaling, you can invest more confidently in growth initiatives, knowing each cloud dollar is spent judiciously.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">Transformation</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Accelerate Growth with Cloud-Native Operations</h3>
                                <p class="services-section-desc text-black">Elevate your business to cloud-native operations infused with AI insights. We orchestrate large-scale transitions that accelerate time-to-market and foster digital dexterity.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Data-Driven Intelligence for Seamless Cloud Transformation</h3>
                                <p class="services-section-desc text-black">From upskilling teams to refining governance, every facet of your cloud journey is enriched by data-driven intelligence—making transformation smooth and sustainable.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/Transformation.png')}}" alt="" class="services-section-img" />
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