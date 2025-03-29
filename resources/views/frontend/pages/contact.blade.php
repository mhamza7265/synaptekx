@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{asset('images/frontend/contact_hero.png')}}');">
        <div style="background-image: url('{{asset('images/frontend/bg_gradient_contact.svg')}}'); background-position: bottom; background-size: 100% 100%; height: 100%; width: 100%">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">Get in touch with us for expert <span class="text-gradient">consultation solution<span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-3">
                    <img src="{{asset('images/frontend/location_pin.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Our address</h4>
                    <span class="contact-content">1000 Innovation Suite 500 Ontario Canada</span>
                </div>
                <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                    <img src="{{asset('images/frontend/support_icon.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Call our team</h4>
                    <span class="contact-content"><a href="tel:+1 235 6543 64">+1 235 6543 64</a></span>
                </div>
                <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                    <img src="{{asset('images/frontend/envelope_icon.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Our email</h4>
                    <span class="contact-content"><a href="mailto:Info@Synaptex.com">Info@Synaptex.com</a></span>
                </div>
                <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                    <img src="{{asset('images/frontend/user_check_icon.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Join us</h4>
                    <span class="contact-content"><a href="javascript:void(0)" class="text-gradient">Careers</a></span>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.partials._contact-form')
    @include('frontend.partials._footer')
</div>
@endsection