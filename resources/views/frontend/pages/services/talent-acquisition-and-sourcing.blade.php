@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{asset('images/frontend/talent-acquisition-and-sourcing-bg.png')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Accelerate Growth with <span class="text-gradient">Talent Acquisition & Sourcing</span></h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">Unlock top talent, optimize your recruitment process, and build high-performing teams with our tailored talent solutions and expert sourcing strategies.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    <a href="#empower" id="empower-link" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Empowering Business</a>
                    <a href="#transformation-journey" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">Transformation Journey</a>
                    <a href="#consulting" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">Digital Transformation</a>
                    <a href="#transformation" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">Cloud</a>
                    <a href="#business" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400">Data & AI</a>
                    <a href="#ecommerce" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500">Security</a>
                    <a href="#generative-ai" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600">Software Development</a>
                    <a href="#AppOps" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600">Product Development</a>
                </div>
            </section>
            <section id="empower" class="empowering-section bg-white position-relative">
                <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" />
                <div class="container">
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                            <div class="text-content fixed-on-scroll" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h1 class="empower-title">
                                    Empower Your Workforce with Expert Talent Acquisition & Sourcing
                                    <span class="gradient-band band-1"></span>
                                    <span class="gradient-band band-2"></span>
                                    <span class="gradient-band band-3"></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 empower-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">Comprehensive Talent Sourcing</h5>
                                <p>Access a diverse pool of skilled professionals tailored to your specific needs. We offer end-to-end talent sourcing services that align with your business goals, ensuring you attract the best candidates for every role.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Streamlined Recruitment Process</h5>
                                <p>Let us handle the complexities of recruitment while you focus on scaling your business. From talent identification to seamless onboarding, we ensure a smooth process that saves you time and resources.</p>
                            </div>

                            <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Flexible Staffing Solutions</h5>
                                <p>Whether you need full-time employees or temporary staffing, we offer flexible solutions to meet your dynamic workforce needs. Our approach is designed to scale with your business, providing support whenever and wherever you need it.</p>
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
                            <source src="{{asset('images/frontend/talent-acquisition-sourcing.mp4')}}" type="video/mp4">
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
                                <img src="{{asset('images/frontend/talent-Digital-Transformation.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Digital Transformation
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">AI-Driven Talent Sourcing and Recruiting</h3>
                                <p class="services-section-desc">Build a team versed in next-gen digital strategies and AI integration. Our curated talent pipeline fuels disruptive innovation from day one.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Cultural Fit and Skill Matching</h3>
                                <p class="services-section-desc">We match your organizational culture with professionals who excel in iterative, data-driven methodologies—ensuring a smoother, smarter talent acquisition journey.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">Cloud</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Optimized Cloud Talent Acquisition</h3>
                                <p class="services-section-desc text-black">Secure certified experts in cloud design, migration, and AI-accelerated operations. From container orchestration to serverless computing, we have the talent you need.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Cloud Engineering Talent Sourcing</h3>
                                <p class="services-section-desc text-black">Scale your cloud initiatives confidently with professionals who optimize performance, costs, and governance—making cloud a driver for innovation, not just a storage option.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/talent-cloud.png')}}" alt="" class="services-section-img" />
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
                                <img src="{{asset('images/frontend/talent-data-ai.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Data & AI
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Data Scientist and AI Specialist Recruitment</h3>
                                <p class="services-section-desc">Supercharge your data pipeline with AI specialists—data scientists, ML engineers, and analytics pros. Harness the power of predictive insights at scale.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Machine Learning Engineers and Data Engineers</h3>
                                <p class="services-section-desc">We find individuals who excel at unraveling hidden patterns, refining models, and building data-driven cultures—fueling innovation and revenue growth.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">Security</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Cybersecurity Professionals and Incident Responders</h3>
                                <p class="services-section-desc text-black">Guard your digital frontier with professionals adept at AI-led threat intelligence and incident response. We deliver top-tier cybersecurity experts for immediate impact.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Ethical Hackers and Pentesters</h3>
                                <p class="services-section-desc text-black">Whether you need a full SOC team or specialized pentesters, our talent ensures robust defenses—evolving in lockstep with ever-changing threat vectors.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/talent-security.png')}}" alt="" class="services-section-img" />
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
                                <img src="{{asset('images/frontend/software-development.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Software Development
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">DevOps and AI Software Engineers</h3>
                                <p class="services-section-desc">Enhance software delivery with coders fluent in AI frameworks. We source Devs who can integrate ML modules, chatbots, and analytics seamlessly into any application.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">AI-Based Automation and Risk Management Experts</h3>
                                <p class="services-section-desc">By combining agile best practices with advanced automation, our talent pipeline ensures faster releases, higher code quality, and an unwavering focus on user satisfaction.</p>
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
                                <h1 class="services-section-title text-gradient text-center text-md-start">Product Development</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Driven Product Innovation Specialists</h3>
                                <p class="services-section-desc text-black">Inspire product innovation with experts capable of integrating AI-driven features—think personalization engines, adaptive UX, predictive analytics, or MVP prep and deployment to quickly turn your ideas into real-world products. Our greatest differentiator is our people—their unmatched ability to deeply understand your goals and seamlessly align advanced AI solutions for transformative outcomes.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Proactive Application Performance Optimization</h3>
                                <p class="services-section-desc text-black">Our talent brings a user-centric approach to ideation, prototyping, and testing, ensuring your product evolution is both groundbreaking and market-ready.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/product-development.png')}}" alt="" class="services-section-img" />
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