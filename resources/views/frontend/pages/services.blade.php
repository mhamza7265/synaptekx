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
            <div class="d-block d-md-flex justify-content-between align-items-center px-5 py-5">
                <a href="#empower" class="d-block page-nav-link fs-16 fw-600 text-center mb-3 mb-md-0">Empowering Business</a>
                <a href="#transformation-journey" class="d-block page-nav-link fs-16 fw-600 text-center mb-3 mb-md-0">Transformation Journey</a>
                <a href="#consulting" class="d-block page-nav-link fs-16 fw-600 text-center mb-3 mb-md-0">Consulting & Strategy</a>
                <a href="#transformation" class="d-block page-nav-link fs-16 fw-600 text-center mb-3 mb-md-0">Transformation</a>
                <a href="#business" class="d-block page-nav-link fs-16 fw-600 text-center mb-3 mb-md-0">Business Applications</a>
                <a href="#ecommerce" class="d-block page-nav-link fs-16 fw-600 text-center mb-3 mb-md-0">eCommerce</a>
            </div>
        </section>
        <section id="empower" class="empowering-section bg-white position-relative">
            <img src="{{asset('images/frontend/services_element.svg')}}" alt="graphic-element" class="services-graphic" />
            <div class="container-sm">
                <div class="row justify-content-between align-items-start">
                    <div id="fixed-on-scroll" class="col-11 col-md-6 mx-auto">
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
                    <div class="col-12 col-md-6 empower-right-texts-parent mx-auto mt-4 mt-md-0">
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
        <section id="transformation-journey" class="transformation-journey-section bg-white py-5 py-md-0">
            <div class="container-sm">
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
            <div class="container-sm">
                <div class="row">
                    <div class="col-12 col-md-5 mx-auto">
                        <img src="{{asset('images/frontend/services_section_1.png')}}" alt="" class="services-section-image" />
                    </div>
                    <div class="col-12 col-md-7 ps-md-5 mx-auto mt-4 mt-md-0">
                        <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Consulting & Strategy
                            <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
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
        <section id="transformation" class="transformation-section bg-white">
            <div class="container-sm">
                <div class="row">
                    <div class="col-12 col-md-7 mx-auto">
                        <div class="d-flex justify-content-start align-items-center mb-4">
                            <img src="{{asset('images/frontend/services-section-title-graphic-2.svg')}}" class="me-1 me-md-4 title-graphic-2" />
                            <h1 class="services-section-title text-gradient text-center text-md-start">Transformation</h1>
                        </div>
                        <div class="mt-3 w-88 ps-md-5 mx-auto">
                            <h3 class="services-section-subtitle text-black">Strategic Expertise to Drive Long-Term Succes</h3>
                            <p class="services-section-desc text-black">Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                        </div>
                        <div class="mt-3 w-88 ps-md-5 mx-auto">
                            <h3 class="services-section-subtitle text-black">Future-Proof Your Business with Data-Driven Insights</h3>
                            <p class="services-section-desc text-black">From IT strategy development to risk management, we help you unlock sustainable value and competitive advantage.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 mx-auto">
                        <img src="{{asset('images/frontend/services_section_2.png')}}" alt="" class="services-section-image" />
                    </div>
                </div>
            </div>
        </section>
        <section id="business" class="business-section py-40px bg-site-grey services-section-bg-grad">
            <div class="container-sm">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{asset('images/frontend/services_section_3.png')}}" alt="" class="services-section-image" />
                    </div>
                    <div class="col-12 col-md-7 ps-md-5 mx-auto mt-4 mt-md-0">
                        <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Business Applications
                            <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
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
        <section id="ecommerce" class="ecommerce-section py-200px bg-white">
            <div class="container-sm">
                <div class="row">
                    <div class="col-12 col-md-7 mx-auto">
                        <div class="d-flex justify-content-start align-items-center mb-4">
                            <img src="{{asset('images/frontend/services-section-title-graphic-2.svg')}}" class="me-1 me-md-4 title-graphic-2" />
                            <h1 class="services-section-title text-gradient text-center text-md-start">eCommerce</h1>
                        </div>
                        <div class="mt-3 w-88 ps-md-5 mx-auto">
                            <h3 class="services-section-subtitle text-black">Strategic Expertise to Drive Long-Term Succes</h3>
                            <p class="services-section-desc text-black">Gain a competitive edge with our in-depth analysis of market trends and emerging technologies. Our experts provide actionable insights that empower your strategic decisions and drive sustainable growth.</p>
                        </div>
                        <div class="mt-3 w-88 ps-md-5 mx-auto">
                            <h3 class="services-section-subtitle text-black">Future-Proof Your Business with Data-Driven Insights</h3>
                            <p class="services-section-desc text-black">From IT strategy development to risk management, we help you unlock sustainable value and competitive advantage.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 mx-auto">
                        <img src="{{asset('images/frontend/services_section_4.png')}}" alt="" class="services-section-image" />
                    </div>
                </div>
            </div>
        </section>

        <section class="home-section-2 contact-section bg-white position-relative overflow-hidden" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="container contact-container br-16px" style="background-image: url('/images/frontend/bg-gradient_3.svg'); background-repeat: no-repeat; background-position: center center;">
                <div class="row justify-content-between align-items-start">
                    <div class="col-md-5 col-11 mx-auto">
                        <div class="d-flex justify-content-start align-content-center">
                            <img src="{{asset('images/frontend/contact_pill.svg')}}" />
                        </div>
                        <h1 class="home-sect-5-title text-black mt-4" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Ready to Transform Your Business with <span class="text-gradient">Synaptekx?</span></h1>
                        <p class="contact-sec-desc mt-2" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">We give you a lot for your money. Big websites or small, we have a plan that fits your budget and gives you everything you need.</p>
                        <div class="row justify-content-between mt-3 overflow-hidden">
                            <div class="col-md-5 col-11 mx-auto" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                                <h1 class="home-sect-5-title text-black">Locate Us</h1>
                                <p class="contact-sec-desc mt-2">1000 Innovation Suite 500 Ontario Canada</p>
                            </div>
                            <div class="col-md-5 col-11 mx-auto" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                                <h1 class="home-sect-5-title text-black">Contact</h1>
                                <p class="contact-sec-desc mt-2">Info@Synaptex.com +1 235 6543 64</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-11 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <form>
                            <div class="d-md-flex justify-content-between align-items-start w-100">
                                <input type="text" name="" placeholder="First Name" class="contact-input contact-flex-input" />
                                <input type="text" name="" placeholder="Last Name" class="contact-input contact-flex-input" />
                            </div>
                            <div class="d-md-flex justify-content-between align-items-start w-100 mt-2">
                                <input type="text" name="" placeholder="Email" class="contact-input contact-flex-input" />
                                <input type="text" name="" placeholder="Phone" class="contact-input contact-flex-input" />
                            </div>
                            <input type="text" name="" placeholder="Subject" class="contact-input mt-2 w-100" />
                            <textarea name="" placeholder="Write your Message" class="contact-textarea mt-2 w-100"></textarea>

                            <button type="submit" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 contact-form-btn">
                                <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                <span class="ms-3 fs-14 text-black">Send Request</span>
                            </button>
                        </form>
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