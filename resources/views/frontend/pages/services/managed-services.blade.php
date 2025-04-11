@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{asset('images/frontend/managed-services-bg.png')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Optimize Operations with <span class="text-gradient">Managed Services<span></h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">Drive efficiency, ensure business continuity, and empower smarter decision-making with our proactive IT support and intelligent automation.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    <a href="#empower" id="empower-link" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Empowering Business</a>
                    <a href="#transformation-journey" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">Transformation Journey</a>
                    <a href="#consulting" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">SOC (Security Operations Centre)</a>
                    <a href="#transformation" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">CloudOps</a>
                    <a href="#business" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400">DevOps</a>
                    <a href="#ecommerce" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500">MLOps</a>
                    <a href="#generative-ai" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600">DevSecOps</a>
                    <a href="#AppOps" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600">AppOps</a>
                </div>
            </section>
            <section id="empower" class="empowering-section bg-white position-relative">
                <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" />
                <div class="container">
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                            <div class="text-content fixed-on-scroll" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h1 class="empower-title">
                                    Seamless Managed Services for Operational Excellence
                                    <span class="gradient-band band-1"></span>
                                    <span class="gradient-band band-2"></span>
                                    <span class="gradient-band band-3"></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 empower-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">End-to-End IT Management</h5>
                                <p>Focus on your core business while we manage and optimize your IT infrastructure. Our managed services ensure seamless operations, system uptime, and proactive issue resolution, enhancing your productivity and security.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Proactive IT Support</h5>
                                <p>Our team provides continuous monitoring and support, ensuring your systems run smoothly. We handle everything from routine maintenance to urgent technical issues, reducing downtime and keeping your business operating efficiently.</p>
                            </div>

                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Cloud & Infrastructure Management</h5>
                                <p>Optimize your cloud and on-premise infrastructure with our expert management services. We ensure your environments are secure, scalable, and cost-efficient, enabling you to leverage technology for business growth.</p>
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
                            <source src="{{asset('images/frontend/managed-services.mp4')}}" type="video/mp4">
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
                                <img src="{{asset('images/frontend/Security-Operations-Centre.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">SOC (Security Operations Centre)
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">24/7 Security Monitoring and Incident Management</h3>
                                <p class="services-section-desc">Ensure continuous protection with our round-the-clock security operations, proactively identifying and mitigating threats to safeguard your infrastructure.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Proactive Threat Detection and Risk Mitigation</h3>
                                <p class="services-section-desc">Leverage our expert team and advanced tools to stay ahead of evolving threats, ensuring your organization’s assets and data remain secure.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">CloudOps</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Optimized Cloud Infrastructure Management</h3>
                                <p class="services-section-desc text-black">Streamline your cloud operations with our managed services, ensuring high availability, cost-efficiency, and seamless scalability for your business needs.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Cloud Performance and Reliability Management</h3>
                                <p class="services-section-desc text-black">Maximize uptime and performance with continuous monitoring and intelligent automation that ensures your cloud infrastructure runs smoothly and securely.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/CloudOps.png')}}" alt="" class="services-section-img" />
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
                                <img src="{{asset('images/frontend/DevOps.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">DevOps
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Efficient Software Development and Release Management</h3>
                                <p class="services-section-desc">Enhance your software development lifecycle with our managed DevOps services, delivering faster, more reliable releases while reducing risks and operational costs.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Continuous Integration and Continuous Delivery (CI/CD)</h3>
                                <p class="services-section-desc">Leverage our expert-managed services to streamline your CI/CD pipelines, ensuring faster and more efficient software deployments with reduced downtime.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">MLOps</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">End-to-End AI Operations Management</h3>
                                <p class="services-section-desc text-black">Ensure the seamless deployment and lifecycle management of machine learning models, from development to production, with our fully managed MLOps solutions.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI Model Optimization and Monitoring</h3>
                                <p class="services-section-desc text-black">Maximize the performance and accuracy of your AI models with our expert monitoring, fine-tuning, and management to drive better outcomes for your business.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/MLOps.png')}}" alt="" class="services-section-img" />
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
                                <img src="{{asset('images/frontend/DevSecOps.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">DevSecOps
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Integrated Security in DevOps Lifecycle</h3>
                                <p class="services-section-desc">Ensure security at every stage of the development pipeline with our managed DevSecOps services, safeguarding your infrastructure and data from evolving cyber threats.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Automated Security Monitoring and Risk Management</h3>
                                <p class="services-section-desc">Automate your security operations with our proactive monitoring and risk management strategies, ensuring that your applications are resilient and secure by design.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="AppOps" class="ecommerce-section py-200px bg-white">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="d-flex justify-content-start align-items-center mb-4">
                                <img src="{{asset('images/frontend/services-section-title-graphic-2.svg')}}" class="me-1 me-md-4 title-graphic-2" />
                                <h1 class="services-section-title text-gradient text-center text-md-start">AppOps</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Comprehensive Application Lifecycle Management</h3>
                                <p class="services-section-desc text-black">Streamline and optimize your application lifecycle with managed services that ensure continuous performance, scalability, and security throughout the app’s life.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Proactive Application Performance and Fault Management</h3>
                                <p class="services-section-desc text-black">Enhance the user experience with continuous monitoring and management of your applications, preventing downtime, and optimizing performance.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/AppOps.png')}}" alt="" class="services-section-img" />
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