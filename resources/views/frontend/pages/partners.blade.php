@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{asset('images/frontend/parners_hero.jpg')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Powering Progress Through Strategic AI-Driven Partnerships.<span></h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">At <span class="text-gradient">SynaptekX</span>, collaboration fuels innovation. We unite with global leaders and specialists to deliver transformative solutions that redefine possibility. By blending cutting-edge AI, cloud expertise, and cybersecurity excellence, we future-proof operations and secure digital journeys—turning ambition into measurable success.
                            Our alliances empower businesses to innovate faster, operate smarter, and thrive in relentless change. Discover how strategic partnerships drive clarity, agility, and unmatched value—because progress hinges on shared vision, not just technology.
                            </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="d-flex justify-content-between align-items-center px-110 px-35 py-5 overflow-x-auto white-space-nowrap">
                    <a href="#elite-section" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Elite Partners</a>
                    <a href="#all-section" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">All Partner</a>
                    <a href="#event-webinars" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">Events & Webinars</a>
                    <a href="#rel-cap" class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">Related Capabilities</a>
                </div>
            </section>
            <section id="elite-section" class="empowering-section bg-white position-relative">
                <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" style="left: 0 !important" />
                <div class="container">
                    <h1>Elite <span class="text-gradient">Partners</span></h1>
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-md-6 mx-auto">
                            <div class="text-content partner-logo" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <img src="{{asset('images/frontend/cisco_icon.svg')}}" alt="elite-partners-logo" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6 sticky-section-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="sticky-section-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">Innovative IT Services</h5>
                                <p>Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="sticky-section-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Strategic Industry Insights</h5>
                                <p>Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                            </div>

                            <div class="sticky-section-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Transformative Digital Experiences</h5>
                                <p>Experience digital transformation that engages customers and revolutionizes your operations. We create seamless, user-centric digital interfaces that improve engagement and optimize user experience.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section id="nav-btn-1" class="empowering-section bg-black position-relative" style="background-image: url('/images/frontend/bg-gradient_2.svg'); background-repeat: no-repeat; background-position: right top;">
                <div class="container">
                    <div class="row justify-content-between align-items-start">
                        <div class="col-12 col-md-6 sticky-section-left-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="sticky-section-left-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">Innovative IT Services</h5>
                                <p>Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="sticky-section-left-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Strategic Industry Insights</h5>
                                <p>Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                            </div>

                            <div class="sticky-section-left-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Transformative Digital Experiences</h5>
                                <p>Experience digital transformation that engages customers and revolutionizes your operations. We create seamless, user-centric digital interfaces that improve engagement and optimize user experience.</p>
                            </div>
                        </div>
                        <div id="fixed-on-scroll" class="col-12 col-md-6 mx-auto overflow-x-hidden">
                            <div class="text-content partner-logo" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <img src="{{asset('images/frontend/equinix_icon.svg')}}" alt="elite-partners-logo" />
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section id="nav-btn-1" class="empowering-section bg-white position-relative">
                <div class="container">
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-md-6 mx-auto">
                            <div class="text-content partner-logo" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <img src="{{asset('images/frontend/brand_icon.svg')}}" alt="elite-partners-logo" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6 sticky-section-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="sticky-section-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">Innovative IT Services</h5>
                                <p>Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="sticky-section-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Strategic Industry Insights</h5>
                                <p>Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                            </div>

                            <div class="sticky-section-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Transformative Digital Experiences</h5>
                                <p>Experience digital transformation that engages customers and revolutionizes your operations. We create seamless, user-centric digital interfaces that improve engagement and optimize user experience.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section id="all-section" class="home-section-3 position-relative font-outfit" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                <img src="{{asset('images/frontend/graphic_element.svg')}}" class="div-graphic-element" />

                <div class="container py-90px overflow-hidden">
                    <div class="d-flex justify-content-start align-content-center">
                        <img src="{{asset('images/frontend/features_pill.svg')}}" draggable="false" />
                    </div>
                    <div class="col-md-12 mt-4">
                        <h1 class="w-60-perc home-sect-2-title text-white" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out">All <span class="text-gradient">Partners</span></h1>
                    </div>

                    <div class="home-sect-3-content-container d-flex justify-content-between align-items-start mt-5">
                        <div class="row w-100 m-auto overflow-hidden partners-tabs">
                            <div class="d-flex col-md-4 col-12" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                <div class="nav flex-column nav-pills tab-border-left" id="v-pills-tab" role="tablist">
                                    <button class="nav-link active" id="tab-btn-1" data-bs-toggle="pill" data-bs-target="#tab-1" type="button">
                                        <div class="image-div">
                                            <img src="{{asset('images/frontend/strikeready_logo.svg')}}" alt="" />
                                        </div>
                                    </button>
                                    <button class="nav-link" id="tab-btn-2" data-bs-toggle="pill" data-bs-target="#tab-2" type="button">
                                        <div class="image-div">
                                            <img src="{{asset('images/frontend/cywift_logo.svg')}}" alt="" />
                                        </div>
                                    </button>
                                    <button class="nav-link" id="tab-btn-3" data-bs-toggle="pill" data-bs-target="#tab-3" type="button">
                                        <div class="image-div">
                                            <img src="{{asset('images/frontend/microsoft_logo.png')}}" alt="" />
                                        </div>
                                    </button>
                                    <button class="nav-link" id="tab-btn-4" data-bs-toggle="pill" data-bs-target="#tab-4" type="button">
                                        <div class="image-div">
                                            <img src="{{asset('images/frontend/googlcloud_logo.svg')}}" alt="" />
                                        </div>
                                    </button>
                                    <button class="nav-link" id="tab-btn-5" data-bs-toggle="pill" data-bs-target="#tab-5" type="button">
                                        <div class="image-div">
                                            <img src="{{asset('images/frontend/aws_logo.png')}}" alt="" />
                                        </div>
                                    </button>
                                    <button class="nav-link" id="tab-btn-6" data-bs-toggle="pill" data-bs-target="#tab-6" type="button">
                                        <div class="image-div">
                                            <img src="{{asset('images/frontend/paloaltonetworks_logo.svg')}}" alt="" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                    
                            <!-- Right Side - Tab Content -->
                            <div class="col-md-8 col-12" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                <div class="tab-content section-3-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <h3 class="section-3-tab-heading-1 text-white">StrikeReady</h3>
                                        <p class="section-3-tab-detail-1 text-white">Revolutionising Threat Response with AI-Augmented Security Operations</p>

                                        <p class="section-3-tab-detail-1"><strong>SynaptekX</strong> and <strong>StrikeReady</strong> combine forces on distribution level to redefine security operations through AI-driven threat intelligence, automated incident response, and unified visibility. By integrating StrikeReady’s Security Command Centre platform with our SOC services, we streamline alert triage, empower analysts with contextual insights, and accelerate remediation—transforming fragmented workflows into cohesive, proactive defence strategies.</p>
                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Use Cases:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">AI-powered threat hunting and anomaly detection across hybrid environments.</li>
                                            <li class="section-3-tab-detail-1">Automated workflows for rapid incident containment and remediation.</li>
                                            <li class="section-3-tab-detail-1">Centralised visibility and governance for multi-cloud security tools.</li>
                                            <li class="section-3-tab-detail-1">Compliance reporting and audit readiness with real-time analytics.</li>
                                        </ul>

                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Customer Outcomes:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">Reduced mean time to respond (MTTR) through intelligent automation.</li>
                                            <li class="section-3-tab-detail-1">Enhanced SOC efficiency with AI-driven prioritisation of critical threats.</li>
                                            <li class="section-3-tab-detail-1">Leverage existing security investment with unified security posture management across cloud, endpoints, and networks.</li>
                                            <li class="section-3-tab-detail-1">Improved compliance adherence with automated documentation.</li>
                                        </ul>
                                        {{-- <p class="section-3-tab-detail-1">By partnering with us, you’ll benefit from data-driven insights and a tailored strategy that maximizes your ROI.</p> --}}
                                        <div class="mt-4">
                                            <img src="{{asset('images/frontend/section_3_img.svg')}}" class="section-3-img" />
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                        <h3 class="section-3-tab-heading-1 text-white">Cywift</h3>
                                        <p class="section-3-tab-detail-1 text-white">AI-Powered Compliance Automation & Cyber Risk Intelligence, Simplified.</p>

                                        <p class="section-3-tab-detail-1"><strong>SynaptekX</strong> and <strong>Cywift</strong> unite on distribution level to transform governance, risk, and compliance (GRC) through AI-driven automation and actionable insights for any cloud anywhere. Leveraging Cywift’s Unified Trust Management Platform, we automate controls assurance across 20+ industry frameworks, quantify cyber risks in financial terms, and monitor supply chain vulnerabilities in real time. This partnership empowers organisations to slash manual workloads by 90%, align security with business objectives, and build board-level confidence through data-driven resilience.</p>
                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Use Cases:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1"><strong>Compliance Automation: </strong> adherence to 20+ frameworks (GDPR, ISO 27001, NIST) with 500+ pre-mapped controls and no-code integrations.</li>
                                            <li class="section-3-tab-detail-1"><strong>Cyber Risk Quantification:</strong> Translate technical vulnerabilities into financial metrics ($) for stakeholder engagement and prioritised mitigation.</li>
                                            <li class="section-3-tab-detail-1"><strong>Supply Chain Risk Management:</strong> Automate third-party vendor assessments, rank suppliers by risk profile, and detect emerging threats in real time.</li>
                                            <li class="section-3-tab-detail-1"><strong>Continuous Controls Assurance:</strong> Monitor cloud workloads (public/private/hybrid) and automate 80% of compliance tasks, reducing audit preparation costs.</li>
                                        </ul>

                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Customer Outcomes:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1"><strong>90% Faster Compliance:</strong> Replace manual audits with automated, framework-aligned controls assurance.</li>
                                            <li class="section-3-tab-detail-1"><strong>Cost Savings:</strong> Reduce compliance overheads by 90% through continuous monitoring and AI-driven workflows.</li>
                                            <li class="section-3-tab-detail-1"><strong>Board-Ready Insights:</strong> Communicate cyber risks in financial terms to align security with business strategy.</li>
                                            <li class="section-3-tab-detail-1"><strong>Supply Chain Resilience:</strong> Proactively mitigate third-party risks with automated vendor onboarding and dynamic risk scoring.</li>
                                        </ul>
                                        <div class="mt-4">
                                            <img src="{{asset('images/frontend/section_3_img.svg')}}" class="section-3-img" />
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3">
                                        <h3 class="section-3-tab-heading-1 text-white">Microsoft</h3>
                                        <p class="section-3-tab-detail-1 text-white mb-1">Transforming Ambition into Action with Azure-Powered AI.</p>
                                        <p class="section-3-tab-detail-1 text-white">Empowering AI-Driven Transformation with Azure Intelligence.</p>

                                        <p class="section-3-tab-detail-1"><strong>SynaptekX</strong> and <strong>Microsoft</strong> combine Azure’s advanced AI tools with our strategic expertise to modernise workflows, automate legacy systems, and embed scalable machine learning solutions. By leveraging Azure Machine Learning and Cognitive Services, we help organisations accelerate digital transformation, reduce operational friction, and unlock data-driven innovation—turning bold visions into measurable outcomes.</p>
                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Use Cases:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">AI-driven cloud migration planning.</li>
                                            <li class="section-3-tab-detail-1">Predictive maintenance for supply chain optimisation.</li>
                                            <li class="section-3-tab-detail-1">Generative AI deployment for customer engagement.</li>
                                        </ul>

                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Customer Outcomes:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">Enhanced decision-making through real-time analytics.</li>
                                            <li class="section-3-tab-detail-1">Reduced downtime with intelligent automation.</li>
                                            <li class="section-3-tab-detail-1">Scalable, future-ready infrastructure for sustained growth.</li>
                                        </ul>
                                        <div class="mt-4">
                                            <img src="{{asset('images/frontend/section_3_img.svg')}}" class="section-3-img" />
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-4">
                                        <h3 class="section-3-tab-heading-1 text-white">Google Cloud</h3>
                                        <p class="section-3-tab-detail-1 text-white mb-1">Turning Data into Tomorrow’s Competitive Edge with AI-Driven Insights.</p>
                                        <p class="section-3-tab-detail-1 text-white">Fueling Innovation with AI-Optimised Data Ecosystems.</p>

                                        <p class="section-3-tab-detail-1">Our partnership with <strong>Google Cloud</strong> harnesses Vertex AI and BigQuery to unify fragmented data, deliver predictive analytics, and build agile AI ecosystems. Together, we empower businesses to anticipate trends, personalise customer interactions, and streamline operations—transforming raw data into actionable intelligence.</p>
                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Use Cases:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">Real-time behavioural analytics for eCommerce</li>
                                            <li class="section-3-tab-detail-1">AI-powered demand forecasting.</li>
                                            <li class="section-3-tab-detail-1">Modernisation of legacy data lakes for ML workloads.</li>
                                        </ul>

                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Customer Outcomes:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">Faster time-to-insight with automated workflows.</li>
                                            <li class="section-3-tab-detail-1">Improved customer retention via hyper-personalisation.</li>
                                            <li class="section-3-tab-detail-1">Compliance-ready data governance frameworks.</li>
                                        </ul>
                                        <div class="mt-4">
                                            <img src="{{asset('images/frontend/section_3_img.svg')}}" class="section-3-img" />
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-5">
                                        <h3 class="section-3-tab-heading-1 text-white">AWS</h3>
                                        <p class="section-3-tab-detail-1 text-white mb-1">Building Cloud-Native Futures, Accelerated by AI.</p>
                                        <p class="section-3-tab-detail-1 text-white">Scalable Cloud Excellence, Supercharged by AI.</p>

                                        <p class="section-3-tab-detail-1"><strong>SynaptekX</strong> and <strong>AWS</strong> deliver AI-optimised cloud solutions, from intelligent migrations to self-healing architectures. Using Amazon SageMaker and EC2, we enable dynamic scalability, cost-efficient resource allocation, and seamless integration of machine learning into core business processes.</p>
                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Use Cases:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">AI-assisted workload assessment for cloud transitions.</li>
                                            <li class="section-3-tab-detail-1">Predictive cost management with auto-scaling.</li>
                                            <li class="section-3-tab-detail-1">Generative AI deployment for IoT solutions.</li>
                                        </ul>

                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Customer Outcomes:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">Reduced operational costs through automated optimisation.</li>
                                            <li class="section-3-tab-detail-1">Accelerated innovation with scalable cloud-native platforms.</li>
                                            <li class="section-3-tab-detail-1">Enhanced agility to adapt to market demands.</li>
                                        </ul>
                                        <div class="mt-4">
                                            <img src="{{asset('images/frontend/section_3_img.svg')}}" class="section-3-img" />
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-6">
                                        <h3 class="section-3-tab-heading-1 text-white">Palo Alto Networks</h3>
                                        <p class="section-3-tab-detail-1 text-white mb-1">Building Cloud-Native Futures, Accelerated by AI.</p>

                                        <p class="section-3-tab-detail-1"><strong>SynaptekX</strong> and <strong>Palo Alto Networks</strong> collaborate to deliver cutting edge Cortex (AI-driven) SOC transformational services platform to unify threat detection, automate response, from code to cloud. By leveraging Palo Alto’s Strata platform for network protection, and secure access, we deliver end-to-end zero-trust security architectures that safeguard hybrid environments while enabling agile innovation.</p>
                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Use Cases:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">AI-powered threat detection and automated incident response with <strong>Cortex XSIAM</strong>.</li>
                                            <li class="section-3-tab-detail-1">Code to Cloud workload protection to SOC and compliance monitoring via <strong>Cortex Cloud</strong>.</li>
                                            <li class="section-3-tab-detail-1">Network segmentation and threat prevention using <strong>Next-Generation Firewalls</strong>.</li>
                                            <li class="section-3-tab-detail-1">Secure remote access and application optimisation with <strong>Prisma SASE</strong>.</li>
                                        </ul>

                                        <h3 class="section-3-tab-heading-2 text-white mt-3">Customer Outcomes:</h3>
                                        <ul style="padding-left: 1rem">
                                            <li class="section-3-tab-detail-1">Proactive threat mitigation through AI-augmented, 24/7 SOC operations.</li>
                                            <li class="section-3-tab-detail-1">Reduced cloud risks with unified visibility and automated governance.</li>
                                            <li class="section-3-tab-detail-1">Resilient network infrastructure against advanced cyber threats.</li>
                                            <li class="section-3-tab-detail-1">Enhanced agility with secure, frictionless access for distributed teams that help scale your business.</li>
                                        </ul>
                                        <div class="mt-4">
                                            <img src="{{asset('images/frontend/section_3_img.svg')}}" class="section-3-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="event-webinars" class="webinar-section" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="pt-5 bg-white">
                    <div class="container mb-5">
                        <h1>
                            Events & <span class="text-gradient">Webinars</span>
                        </h1>
                    </div>
                    <div class="py-5" style="background-color: #53535324">
                        <div class="container">
                            <div id="webinar-carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-block d-md-flex justify-content-between align-items-start w-100">
                                            <div class="image-div" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                <img src="{{asset('images/frontend/webinar.png')}}" alt="" />
                                                <img src="{{asset('images/frontend/global_logo.png')}}" class="image-logo"/>
                                            </div>
                                            <div class="text-content">
                                                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">The FOUNDER SUMMIT Deutschlands </h1>
                                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                                <a data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200" href="javascript:void(0)" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                                    <span class="ms-3 fs-14 text-black">Contact</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-block d-md-flex justify-content-between align-items-start w-100">
                                            <div class="image-div" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                <img src="{{asset('images/frontend/webinar.png')}}" alt="" />
                                                <img src="{{asset('images/frontend/global_logo.png')}}" class="image-logo"/>
                                            </div>
                                            <div class="text-content">
                                                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">The FOUNDER SUMMIT Deutschlands </h1>
                                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                                <a data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200" href="javascript:void(0)" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                                    <span class="ms-3 fs-14 text-black">Contact</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-block d-md-flex justify-content-between align-items-start w-100">
                                            <div class="image-div" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                <img src="{{asset('images/frontend/webinar.png')}}" alt="" />
                                                <img src="{{asset('images/frontend/global_logo.png')}}" class="image-logo"/>
                                            </div>
                                            <div class="text-content">
                                                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">The FOUNDER SUMMIT Deutschlands </h1>
                                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                                <a data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200" href="javascript:void(0)" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                                    <span class="ms-3 fs-14 text-black">Contact</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#webinar-carousel" data-bs-slide-to="0" class="carousel-indicator active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#webinar-carousel" data-bs-slide-to="1" class="carousel-indicator" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#webinar-carousel" data-bs-slide-to="2" class="carousel-indicator" aria-label="Slide 3"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="rel-cap" class="py-5" style="background-image: url('/images/frontend/bg-gradient_2.svg'); background-repeat: no-repeat; background-position: right top;">
                <div class="container py-5">
                    <div class="row justify-content-start">
                        <div class="col-12 col-md-4" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <h1 class="fs-57 text-white" style="line-height: 1.3">Related <span class="text-gradient">Capabilities</span></h1>
                        </div>
                        <div class="col-12 col-md-3 ps-3 ps-md-5 mb-3 mb-md-0 mt-5 mt-md-0">
                            <a href="javascript:void(0)" class="capability-link fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#FFFFFF99" stroke-opacity="1" stroke-width="3"/>
                                </svg>
                                Digital
                            </a>
                            <a href="javascript:void(0)" class="capability-link fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#FFFFFF99" stroke-opacity="1" stroke-width="3"/>
                                </svg>
                                Data & AI
                            </a>
                            <a href="javascript:void(0)" class="capability-link fs-32" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#FFFFFF99" stroke-opacity="1" stroke-width="3"/>
                                </svg>
                                Security
                            </a>
                        </div>
                        <div class="col-12 col-md-5 ps-3">
                            <a href="javascript:void(0)" class="capability-link fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#FFFFFF99" stroke-opacity="1" stroke-width="3"/>
                                </svg>
                                Cloud
                            </a>
                            <a href="javascript:void(0)" class="capability-link fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#FFFFFF99" stroke-opacity="1" stroke-width="3"/>
                                </svg>
                                Managed Services
                            </a>
                            <a href="javascript:void(0)" class="capability-link fs-32" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#FFFFFF99" stroke-opacity="1" stroke-width="3"/>
                                </svg>
                                Talent Acquisition & Sourcing
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        @include('frontend.partials._contact-form')
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(window).on("scroll", function () {
                    $(window).on("scroll", function () {
                        let scrollPercentage = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
                        let gradientPosition = (100 - (scrollPercentage % 100)) + "%";
                        
                        $(".empower-title").css("--gradient-position", gradientPosition);
                    });
                });

            $('.capability-link').hover(
                function() {
                    $(this).css('color', '#FFC107'); // Change text color
                    $(this).find('svg path').attr('stroke', '#FFC107'); // Change SVG stroke color
                },
                function() {
                    $(this).css('color', '#ffffff99'); // Revert text color
                    $(this).find('svg path').attr('stroke', '#ffffff99'); // Revert SVG stroke color
                }
            );
        })
    </script>
@endsection