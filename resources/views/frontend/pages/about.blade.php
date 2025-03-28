@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{asset('images/frontend/parners_hero.jpg')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Redefining IT Solutions for the Digital Age</h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">We deliver innovative digital strategies, business applications, and eCommerce solutions to help you scale your organization seamlessly in today’s digital-first world</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section px-lg-5">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-5 overflow-x-auto white-space-nowrap">
                    <a href="#about" class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">About Synaptekx</a>
                    <a href="#approach" class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">Our Unique Approach</a>
                    <a href="#mission" class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">Our Mission</a>
                    <a href="#why-synaptekx" class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">Why SynaptekX</a>
                    <a href="#looking-ahead" class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400">Looking Ahead</a>
                    <a href="#join-us" class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500">Join Us</a>
                </div>
            </section>
            <section id="about" class="transformation-section bg-white py-140px">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/about_section_1.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="w-88 ps-md-5 me-auto mx-lg-auto mb-4">
                                <h1 class="fs-57 fw-500 text-start text-md-start">About<span class="text-gradient ms-2">Synaptekx</span></h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 me-auto mx-lg-auto">
                                <p class="services-section-desc color-site-gray">SynaptekX is the culmination of over two decades of IT leadership and strategic innovation. Our founders have led major initiatives across government, healthcare, security, and global service providers, tackling some of the most complex challenges in high-stakes environments. This breadth of expertise is the bedrock upon which SynaptekX is built—combining time-tested wisdom with a bold vision for the future of technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="mission" class="py-110 bg-site-grey services-section-bg-grad">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="w-88 mb-4">
                                <h1 class="fs-57 fw-500 text-start text-white text-md-start">Our <span class="text-gradient ms-2">Mission</span></h1>
                            </div>
                            <div class="w-88 mt-3">
                                <p class="services-section-desc">At SynaptekX, we’re driven by the mission to bridge the gap between ambitious ideas and real-world impact. Whether it’s accelerating digital transformation, fortifying cybersecurity, or developing cutting-edge software solutions, our approach remains rooted in partnership. We go beyond off-the-shelf fixes to truly immerse ourselves in our clients’ ecosystems—helping them harness intelligent automation and data-driven insights for sustainable, long-term growth.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/about_section_2.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="approach" class="transformation-section bg-white py-140px">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/about_section_3.jpg')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="w-88 ps-md-5 me-auto mx-lg-auto mb-4">
                                <h1 class="fs-57 fw-500 text-start text-md-start">Our Unique<span class="text-gradient ms-2">Approach</span></h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 me-auto mx-lg-auto">
                                <p class="services-section-desc color-site-gray">What sets us apart isn’t just our mastery of next-gen AI, cloud, and data solutions. Our greatest differentiator is our people: a team of seasoned professionals who take the time to deeply understand each client’s business goals before weaving advanced AI strategies into every facet of their operations. We believe that success comes from aligning tailor-made technology solutions with the pulse of an organization—empowering businesses to operate smarter, innovate faster, and thrive in competitive markets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="why-synaptekx" class="empowering-section position-relative services-section-bg-grad" style="background-color: #0D101B">
                <div class="container position-relative">
                    <img src="{{asset('images/frontend/graphic_element_about.svg')}}" alt="graphic-element" class="about-graphic" />
                    <div class="row justify-content-between align-items-start">
                        <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                            <div class="text-content fixed-on-scroll bg-transparent" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h1 class="sticky-gradient-text position-relative">
                                    Why SynaptekX
                                    <span class="gradient-band band-1"></span>
                                    <span class="gradient-band band-2"></span>
                                    <span class="gradient-band band-3"></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 sticky-right-texts-parent mx-auto mt-4 mt-md-0">
                            <div class="sticky-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <h5 class="fs-22 fw-500">Innovative IT Services</h5>
                                <p>Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                <div id="div-end-unfiix"></div>
                            </div>
                            
                            <div class="sticky-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                <h5>Strategic Industry Insights</h5>
                                <p>Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                            </div>

                            <div class="sticky-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                <h5>Transformative Digital Experiences</h5>
                                <p>Experience digital transformation that engages customers and revolutionizes your operations. We create seamless, user-centric digital interfaces that improve engagement and optimize user experience.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <section id="looking-ahead" class="transformation-section bg-white py-140px">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/about_section_4.jpg')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="w-88 ps-md-5 me-auto mx-lg-auto mb-4">
                                <h1 class="fs-57 fw-500 text-start text-md-start">Looking<span class="text-gradient ms-2">Ahead</span></h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 me-auto mx-lg-auto">
                                <p class="services-section-desc color-site-gray">What sets us apart isn’t just our mastery of next-gen AI, cloud, and data solutions. Our greatest differentiator is our people: a team of seasoned professionals who take the time to deeply understand each client’s business goals before weaving advanced AI strategies into every facet of their operations. We believe that success comes from aligning tailor-made technology solutions with the pulse of an organization—empowering businesses to operate smarter, innovate faster, and thrive in competitive markets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="join-us" class="py-110 bg-site-grey services-section-bg-grad">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="w-88 mb-4">
                                <h1 class="fs-57 fw-500 text-start text-white text-md-start">Join<span class="text-gradient ms-2">Us</span></h1>
                            </div>
                            <div class="w-88 mt-3">
                                <p class="services-section-desc">As we redefine what’s possible in the world of AI-driven transformation. Our promise is simple: to bring clarity, agility, and long-lasting results to every project we undertake—because at SynaptekX, your vision becomes our mission.</p>
                            </div>
                            <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-5">
                                <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                <span class="ms-3 fs-14 text-white">Contact</span>
                            </a>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/about_section_5.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        @include('frontend.partials._contact-form')
    </section>
@endsection