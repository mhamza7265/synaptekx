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
        <section class="home-hero-section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators home-hero-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="hero-section hero-video">
                            <video autoplay loop muted playsinline>
                                <source src="{{asset('images/frontend/carousel_1.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="container overflow-hidden">
                                <div class="hero-text-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <h1 class="hero-title-text">Redefining IT Solutions for the <span class="text-gradient">Digital Age</span></h1>
                                </div>
                                <div class="hero-text-detail" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <p class="hero-detail-text">Welcome to <span class="text-gradient">SynaptekX</span> where cutting-edge technology meets innovative thinking. As a startup committed to delivering exceptional value, we specialize in transforming businesses through our comprehensive suite of digital services. Whether you’re looking to optimize your current operations or build a robust digital infrastructure, we are here to make your vision a reality. Our expertise lies in providing strategic consulting, end-to-end digital transformation, and tailored IT solutions that help businesses thrive in a rapidly evolving digital landscape.</p>
                                </div>
                                <a href="{{ route('services', ['name' => 'digital']) }}" class="hero-more-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                    <span class="ms-3 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="hero-section" style="background-image: url('/images/frontend/carousel_2.jpg')">
                            <div class="container overflow-hidden">
                                <div class="hero-text-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <h1 class="hero-title-text">Transforming Businesses with Next-Gen <span class="text-gradient">IT Solutions</span></h1>
                                </div>
                                <div class="hero-text-detail" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <p class="hero-detail-text">At <span class="text-gradient">SynaptekX</span>, we are redefining how businesses navigate the digital era. As a trailblazing startup, we specialize in providing future-ready IT solutions that enable organizations to scale and adapt in a fast-paced world. Whether you need to optimize existing processes or create a completely new digital ecosystem, we’re here to bring innovative ideas to life. Our expert team offers everything from strategic advice to full-service digital transformations, ensuring that your business not only survives but thrives in the digital age.</p>
                                </div>
                                <a href="{{ route('services', ['name' => 'cloud']) }}" class="hero-more-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                    <span class="ms-3 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="hero-section" style="background-image: url('/images/frontend/carousel_3.jpg')">
                            <div class="container overflow-hidden">
                                <div class="hero-text-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <h1 class="hero-title-text">Future Proofing Your Business Through <span class="text-gradient">Technology</span></h1>
                                </div>
                                <div class="hero-text-detail" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <p class="hero-detail-text"><span class="text-gradient">SynaptekX</span> is at the forefront of technological innovation, dedicated to helping businesses achieve long-term success. As a visionary startup, we offer tailored IT solutions that streamline operations and open doors to new growth opportunities. Our services cover every aspect of digital transformation, from strategic consulting to implementing cutting-edge technologies. We empower businesses to stay agile, competitive, and future-proof in a rapidly evolving digital world.</p>
                                </div>
                                <a href="{{ route('services', ['name' => 'security']) }}" class="hero-more-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                    <span class="ms-3 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-brands">
                @include('frontend.partials._hero-brands')
            </div>
        </section>

        {{-- <section class="home-section-2 bg-white position-relative radius-24 mt-15">
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
        </section> --}}

        <section class="home-section-3 position-relative" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <img src="{{asset('images/frontend/graphic_element.svg')}}" class="div-graphic-element" />

            <div id="partners-carousel" class="carousel slide font-sf-pro" data-bs-ride="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block d-md-flex justify-content-between align-content-center overflow-hidden">
                            <img src="{{asset('images/frontend/aws_icon.svg')}}" alt="aws icon" class="partners-icon" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="500" />
                            <div class="partner-carousel-content mt-4 mt-md-0" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="500">
                                <h5 class="text-white fs-16 fw-500">Amazon</h5>
                                <p class="partners-carousel-text fs-16 text-white">SynaptekX and AWS deliver AI-optimised cloud solutions, from intelligent migrations to self-healing architectures. Using Amazon SageMaker and EC2, we enable dynamic scalability, cost-efficient resource allocation, and seamless integration of machine learning into core business processes.</p>
                                <a href="{{route('partners')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                    <span class="ms-3 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-md-flex justify-content-between align-content-center overflow-hidden">
                            <img src="{{asset('images/frontend/strikeready_logo.svg')}}" alt="aws icon" class="partners-icon" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="500" />
                            <div class="partner-carousel-content mt-4 mt-md-0" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="500">
                                <h5 class="text-white fs-16 fw-500">StrikeReady</h5>
                                <p class="partners-carousel-text fs-16 text-white">SynaptekX and StrikeReady combine forces on distribution level to redefine security operations through AI-driven threat intelligence, automated incident response, and unified visibility.</p>
                                <a href="{{route('partners')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                    <span class="ms-3 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-md-flex justify-content-between align-content-center overflow-hidden">
                            <img src="{{asset('images/frontend/cywift_logo.svg')}}" alt="aws icon" class="partners-icon" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="500" />
                            <div class="partner-carousel-content mt-4 mt-md-0" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="500">
                                <h5 class="text-white fs-16 fw-500">Cywift</h5>
                                <p class="partners-carousel-text fs-16 text-white">SynaptekX and Cywift unite on distribution level to transform governance, risk, and compliance (GRC) through AI-driven automation and actionable insights for any cloud anywhere.</p>
                                <a href="{{route('partners')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                    <span class="ms-3 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#partners-carousel" data-bs-slide="prev">
                    {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                    <img src="{{asset('images/frontend/carousel_arrow_left.svg')}}" alt="arrow-left" />
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#partners-carousel" data-bs-slide="next">
                    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" alt="" />
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="container py-90px overflow-hidden">
                <!--<div class="d-flex justify-content-start align-content-center">-->
                <!--    <img src="{{asset('images/frontend/features_pill.svg')}}" draggable="false" />-->
                <!--</div>-->
                <div class="col-md-12 mt-4">
                    <h1 class="w-60-perc home-sect-2-title text-white" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out">Our Core Digital Services at <span class="text-gradient">SynaptekX</span></h1>
                </div>

                <div class="home-sect-3-content-container d-flex justify-content-between align-items-start mt-5">
                    <div class="row w-100 m-auto overflow-hidden">
                        <!-- Left Side - Vertical Tabs -->
                        <div class="d-flex col-md-4 col-12" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            {{-- <div class="h-100 border-1 border-white" style="padding-top: 20px">
                                <img src="{{asset('images/frontend/divider_gradient.svg')}}" />
                            </div> --}}
                            <div class="nav flex-column nav-pills tab-border-left" id="v-pills-tab" role="tablist">
                                <button class="nav-link active" id="tab-btn-1" data-bs-toggle="pill" data-bs-target="#tab-1" type="button">
                                    DIGITAL
                                </button>
                                <button class="nav-link" id="tab-btn-2" data-bs-toggle="pill" data-bs-target="#tab-2" type="button">
                                    CLOUD
                                </button>
                                <button class="nav-link" id="tab-btn-3" data-bs-toggle="pill" data-bs-target="#tab-3" type="button">
                                    DATA & AI
                                </button>
                                <button class="nav-link" id="tab-btn-4" data-bs-toggle="pill" data-bs-target="#tab-4" type="button">
                                    MANAGED SERVICES
                                </button>
                                <button class="nav-link" id="tab-btn-5" data-bs-toggle="pill" data-bs-target="#tab-5" type="button">
                                    SECURITY
                                </button>
                                <button class="nav-link" id="tab-btn-6" data-bs-toggle="pill" data-bs-target="#tab-6" type="button">
                                    TALENT ACQUISITION & SOURCING
                                </button>
                            </div>
                        </div>
                
                        <!-- Right Side - Tab Content -->
                        <div class="col-md-8 col-12" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="tab-content section-3-tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="tab-1">
                                    <h3 class="section-3-tab-heading-1 text-white">DIGITAL</h3>
                                    <p class="section-3-tab-detail-1">Elevate your organization with AI-first digital solutions that drive efficiency, innovation, and growth. Our expert teams blend strategy, data, and automation to future-proof your operations in a rapidly evolving landscape.</p>
                                    <h3 class="section-3-tab-heading-2 text-white mt-3">Our Digital Services </h3>
                                    <ul style="padding-left: 1rem">
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Consulting & Strategy – </strong>Reimagine your business roadmap with AI-focused insights. We align advanced analytics to your goals, ensuring every initiative is rooted in real-time intelligence.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Transformation – </strong>Modernize legacy systems into AI-powered ecosystems for faster innovation. We embed automation and facilitate cultural shifts that maximize productivity and profitability.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Business Applications – </strong>Embed AI-driven recommendations, analytics, and automation within ERP, CRM, and custom solutions. Optimize processes so teams can focus on strategic innovation over routine tasks.</li>
                                        <li class="section-3-tab-detail-1"><strong>eCommerce – </strong>Reinvent digital storefronts with AI personalization and real-time data analysis. From intelligent recommendations to dynamic pricing, we deliver seamless user experiences that boost conversions.</li>
                                    </ul>
                                    {{-- <p class="section-3-tab-detail-1">By partnering with us, you’ll benefit from data-driven insights and a tailored strategy that maximizes your ROI.</p> --}}
                                    <a href="{{ route('services', ['name' => 'digital']) }}" class="d-flex justify-content-start align-items-center text-decoration-none text-black my-4 mb-lg-0">
                                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                        <span class="ms-3 fs-14 text-white">Explore</span>
                                    </a>
                                    <div class="mt-4">
                                        <img src="{{asset('images/frontend/home-digital.png')}}" class="section-3-img" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2">
                                    <h3 class="section-3-tab-heading-1 text-white">CLOUD</h3>
                                    <p class="section-3-tab-detail-1">Accelerate innovation and optimize resources with AI-driven cloud solutions. Our comprehensive services empower you to migrate, modernize, and operate seamlessly in the ever-evolving cloud landscape. </p>
                                    <h3 class="section-3-tab-heading-2 text-white mt-3">Our Cloud Services</h3>
                                    <ul style="padding-left: 1rem">
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Migration – </strong>Migrate applications to the cloud with AI-assisted planning for minimal downtime and cost. Intelligent workload assessments pave the way for a secure, agile environment. </li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Modernisation – </strong>Revamp legacy systems through containerization, self-healing infrastructures, and predictive maintenance, ensuring future-ready adaptability and cost efficiency.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Economy – </strong>Optimize cloud spend with dynamic, AI-based resource allocation. Intelligent scaling and performance tracking keep budgets tight and growth prospects unlimited.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Transformation – </strong>Move to cloud-native operations enriched by data-driven insights. From upskilling teams to refining governance, we ensure smooth, sustainable modernization.</li>
                                        <li class="section-3-tab-detail-1"><strong>Operations – </strong>Harness AI-enabled observability and automation for reliable, scalable CloudOps. Predictive issue detection and capacity planning let you focus on core innovation.</li>
                                    </ul>
                                    <a href="{{ route('services', ['name' => 'cloud']) }}" class="d-flex justify-content-start align-items-center text-decoration-none text-black my-4 mb-lg-0">
                                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                        <span class="ms-3 fs-14 text-white">Explore</span>
                                    </a>
                                    <div class="mt-4">
                                        <img src="{{asset('images/frontend/home-cloud.png')}}" class="section-3-img" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3">
                                    <h3 class="section-3-tab-heading-1 text-white">DATA & AI </h3>
                                    <p class="section-3-tab-detail-1">Elevate your data strategy with next-generation AI solutions. Our end-to-end capabilities—spanning integration, modernization, API-driven services, AI agents, governance, and generative intelligence—empower you to harness today’s most advanced machine learning breakthroughs.</p>
                                    <h3 class="section-3-tab-heading-2 text-white mt-3">Our Data & AI Services </h3>
                                    <ul style="padding-left: 1rem">
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Data Integration – </strong>Unify scattered sources into an AI-ready platform for accurate, high-speed insights. ML-enhanced ETL pipelines detect anomalies and fuel advanced analytics.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Data Modernisation – </strong>Migrate to next-gen architectures optimized for large-scale analytics and machine learning workloads, reducing latency and boosting real-time capabilities.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>API Economy – </strong>Monetize insights by turning data into AI-driven APIs. Secure interfaces, usage analytics, and robust developer ecosystems extend your reach and revenue.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>AI Agents – </strong>Leverage autonomous agents that iterate, learn, and act independently, executing complex tasks with minimal human intervention. Harness state-of-the-art large language models and self-improving pipelines for continuous operational gains.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Data Management – </strong>Implement AI-driven governance for real-time classification, security, and compliance. Automated cataloging and metadata management give you total control.</li>
                                        <li class="section-3-tab-detail-1"><strong>Generative AI – </strong>Automate complex tasks and spark creativity with advanced AI models. From virtual assistants to dynamic product suggestions, our solutions push the boundaries of innovation.</li>
                                    </ul>
                                    <a href="{{ route('services', ['name' => 'data-ai']) }}" class="d-flex justify-content-start align-items-center text-decoration-none text-black my-4 mb-lg-0">
                                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                        <span class="ms-3 fs-14 text-white">Explore</span>
                                    </a>
                                    <div class="mt-4">
                                        <img src="{{asset('images/frontend/home-data-ai.png')}}" class="section-3-img" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-4">
                                    <h3 class="section-3-tab-heading-1 text-white">MANAGED SERVICES</h3>
                                    <p class="section-3-tab-detail-1">Empower your operations with intelligent managed services that automate workflows, enhance security, and streamline development lifecycles. Our AI-driven approach ensures you stay resilient, agile, and ready to seize new opportunities.</p>
                                    <h3 class="section-3-tab-heading-2 text-white mt-3">Our Managed Services</h3>
                                    <ul style="padding-left: 1rem">
                                        <li class="section-3-tab-detail-1 mb-2"><strong>SOC (Security Operations Center) – </strong>Stay ahead of emerging threats with AI-augmented monitoring, rapid incident containment, and continuous learning that keeps you protected 24/7.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>CloudOps – </strong>Automate your cloud environment through predictive analytics and intelligent orchestration, freeing teams to focus on high-impact innovation.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>DevOps – </strong>Speed up software releases by reinforcing CI/CD pipelines with AI insights, eradicating bottlenecks, and delivering reliably at scale.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>MLOps – </strong>Ensure your machine learning models stay robust and up to date. Our streamlined MLOps unifies data prep, deployment, and ongoing optimization.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>DevSecOps – </strong>Embed AI-driven security at every stage of development. Predictive threat modeling and automated compliance processes drastically reduce exposure.</li>
                                        <li class="section-3-tab-detail-1"><strong>AppOps – </strong>Maintain mission-critical apps with AI-based diagnostics, fine-tuned performance, and proactive incident prevention—all while delivering seamless user experiences.</li>
                                    </ul>
                                    <a href="{{ route('services', ['name' => 'managed-services']) }}" class="d-flex justify-content-start align-items-center text-decoration-none text-black my-4 mb-lg-0">
                                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                        <span class="ms-3 fs-14 text-white">Explore</span>
                                    </a>
                                    <div class="mt-4">
                                        <img src="{{asset('images/frontend/home-managed-services.png')}}" class="section-3-img" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-5">
                                    <h3 class="section-3-tab-heading-1 text-white">SECURITY</h3>
                                    <p class="section-3-tab-detail-1">Stay ahead of cyber threats with proactive, AI-driven security strategies tailored to your unique risk landscape. Our integrated approach ensures you remain resilient in the face of rapidly evolving threats, regulatory pressures, and dynamic business demands.</p>
                                    <h3 class="section-3-tab-heading-2 text-white mt-3">Our Security Services</h3>
                                    <ul style="padding-left: 1rem">
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Security Architecture as a Service – </strong>Build adaptive, AI-infused frameworks that evolve alongside emerging threats, from zero-trust policies to automated detection.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Managed SOC Operations – </strong>Rely on 24/7 AI-enhanced monitoring and swift incident containment, reducing false positives and safeguarding critical assets.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>vCISO – </strong>Gain executive-level security guidance fortified by predictive insights—without the overhead of a full-time hire.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Compliance Adherence – </strong>Simplify audits and regulatory demands through AI-based checks and real-time monitoring, preserving trust and minimizing manual overhead.</li>
                                        <li class="section-3-tab-detail-1"><strong>Incident Response – </strong>Counter threats with automated detection and rapid containment, turning breaches into opportunities to bolster future security posture.</li>
                                    </ul>
                                    <a href="{{ route('services', ['name' => 'security']) }}" class="d-flex justify-content-start align-items-center text-decoration-none text-black my-4 mb-lg-0">
                                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                        <span class="ms-3 fs-14 text-white">Explore</span>
                                    </a>
                                    <div class="mt-4">
                                        <img src="{{asset('images/frontend/home-security.png')}}" class="section-3-img" />
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-6">
                                    <h3 class="section-3-tab-heading-1 text-white">TALENT ACQUISITION & SOURCING</h3>
                                    <p class="section-3-tab-detail-1">Power your organization with specialized, AI-savvy talent. Our curated pipeline ensures the right cultural and technical fit, propelling innovation, agility, and security in every corner of your enterprise.</p>
                                    <h3 class="section-3-tab-heading-2 text-white mt-3">Our Talent Acquisition & Sourcing Services</h3>
                                    <ul style="padding-left: 1rem">
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Digital Transformation – </strong>Build teams versed in next-gen digital strategies and AI integration. We match your culture with professionals who excel at data-driven methods—fuelling smarter, smoother transformations.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Cloud – </strong>Secure certified experts in cloud architecture, migration, and AI-accelerated operations. Optimize performance and governance, making the cloud a true engine of innovation.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Data & AI – </strong>Onboard data scientists, ML engineers, and analytics pros who excel at predictive modelling and insight generation. Uncover new revenue streams and achieve data-driven breakthroughs at scale.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Security – </strong>Guard your digital assets with AI-led threat intelligence, incident response, and cutting-edge cybersecurity expertise—ensuring robust defences in an ever-evolving threat landscape.</li>
                                        <li class="section-3-tab-detail-1 mb-2"><strong>Software Development – </strong>Strengthen your development capabilities with coders proficient in AI frameworks, automation, and seamless integration. Achieve faster, higher-quality releases and excellent user experiences.</li>
                                        <li class="section-3-tab-detail-1"><strong>Product Development – </strong>Inspire product innovation with experts adept at AI-driven features, MVP prep, and user-centric design. Turn bold ideas into market-ready offerings that stand apart.</li>
                                    </ul>
                                    <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) }}" class="d-flex justify-content-start align-items-center text-decoration-none text-black my-4 mb-lg-0">
                                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                        <span class="ms-3 fs-14 text-white">Explore</span>
                                    </a>
                                    <div class="mt-4">
                                        <img src="{{asset('images/frontend/home-talent-acquisition-and-sourcing.png')}}" class="section-3-img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-section-2 bg-white position-relative overflow-hidden font-sf-pro" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="container py-35px">
                <div class="col-md-12 mt-4">
                    <h1 class="home-sect-4-title text-black">The Digital <span class="text-gradient">Transformation</span> Journey</h1>
                </div>
                <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                    {{-- <img src="{{asset('images/frontend/home_graphic_1.svg')}}" class="home-graphic-1 object-fit-cover w-100" /> --}}
                    <video autoplay loop muted playsinline class="w-100">
                        <source src="{{asset('images/frontend/transformation.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>    
        </section> 

        <section class="home-section-2 bg-black position-relative relative overflow-hidden" style="background-image: url('/images/frontend/bg-gradient_2.svg'); background-repeat: no-repeat; background-position: right top;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="container py-90px">
                <!-- <div class="d-flex justify-content-start align-content-center">
                    <img src="{{asset('images/frontend/innovative_pill.svg')}}" draggable="false" />
                </div> -->
                <div class="col-md-12 mt-4">
                    <h1 class="home-sect-2-title text-white"><span class="text-gradient">Empowering Growth</span> Through Innovation & Agility</h1>
                </div>
                <div class="row justify-content-center align-items-start mt-5 pt-md-5 overflow-hidden">
                    <div class="innovative-sec-table col-lg-3 col-md-4 col-12" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <img src="{{asset('images/frontend/innovative_icon_1.svg')}}" style="width: 50px" />
                        <div class="text-div">
                            <h5 class="innovative-sec-table-title">Startup Agility</h5>
                            <p class="innovative-sec-table-desc">We accelerate solutions with a rapid, nimble approach that delivers immediate impact.</p>
                        </div>
                    </div>
                    <div class="innovative-sec-table col-lg-3 col-md-3 col-12" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">
                        <img src="{{asset('images/frontend/innovative_icon_2.svg')}}" style="width: 50px" />
                        <div class="text-div">
                            <h5 class="innovative-sec-table-title">Customer-Centric Approach</h5>
                            <p class="innovative-sec-table-desc">Every engagement is tailored to your objectives, ensuring alignment and measurable results.</p>
                        </div>
                    </div>
                    <div class="innovative-sec-table col-lg-3 col-md-3 col-12" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">
                        <img src="{{asset('images/frontend/innovative_icon_3.svg')}}" style="width: 50px" />
                        <div class="text-div">
                            <h5 class="innovative-sec-table-title">Industry Expertise</h5>
                            <p class="innovative-sec-table-desc">Our cross-sector experience equips you with proven strategies and deep domain insights.</p>
                        </div>
                    </div>
                    <div class="innovative-sec-table col-lg-3 col-md-3 col-12" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">
                        <img src="{{asset('images/frontend/innovative_icon_4.svg')}}" style="width: 50px" />
                        <div class="text-div">
                            <h5 class="innovative-sec-table-title">Commitment to Innovation</h5>
                            <p class="innovative-sec-table-desc">We continuously integrate cutting-edge AI, data, and cloud advancements to keep you ahead.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('images/frontend/graphic_element_1.svg')}}" class="div-graphic-element-1" />
        </section>

        @include('frontend.partials._contact-form')
        @include('frontend.partials._footer')
    </div>
@endsection
@section('scripts')
    <script>
        // $(document).ready(function () {
        //     var slider = new KeenSlider(".auto-slider", {
        //         loop: true,
        //         slides: { perView: 5, spacing: 10 }, // 3 slides at a time
        //         drag: true
        //     });

        //     function autoSlide() {
        //         setInterval(function () {
        //             slider.next(); // Moves to the next slide automatically
        //         }, 2000); // Adjust speed (2000ms = 2 seconds per slide)
        //     }

        //     autoSlide();
        // });

        $(document).ready(function () {
        $(".slider-track").hover(
            function () {
                $(this).css("animation-play-state", "paused"); // Pause on hover
            },
            function () {
                $(this).css("animation-play-state", "running"); // Resume on mouse leave
            }
        );
    });
    </script>
@endsection