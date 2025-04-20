@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{data_get($page->sections, 'hero.hero_image' , '')}}');">
        <div style="background-image: url('{{asset('images/frontend/bg_gradient_contact.svg')}}'); background-position: bottom; background-size: 100% 100%; height: 100%; width: 100%">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    @php
                        $rawTitle = data_get($page->sections, 'hero.hero_title' , '');
                        $words = preg_split('/\s+/', trim($rawTitle));

                        if (count($words) > 5) {
                            $before = implode(' ', array_slice($words, 0, -2));
                            $lastTwo = implode(' ', array_slice($words, -2));
                            $formattedTitle = e($before) . ' <span class="text-gradient">' . e($lastTwo) . '</span>';
                        } else {
                            $formattedTitle = e($rawTitle);
                        }
                    @endphp
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="hero-title services-hero-title text-white text-center">{!! $formattedTitle !!}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">
                    <img src="{{asset('images/frontend/location_pin.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Our Address</h4>
                    <span class="contact-content">{{data_get($page->sections, 'details.address' , '')}}</span>
                </div>
                <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                    <img src="{{asset('images/frontend/support_icon.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Call our Team</h4>
                    <span class="contact-content"><a href="tel:+442081560125">{{data_get($page->sections, 'details.phone' , '')}}</a></span>
                </div>
                <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                    <img src="{{asset('images/frontend/envelope_icon.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Our Email</h4>
                    <span class="contact-content"><a href="mailto:info@synaptekx.com">{{data_get($page->sections, 'details.email' , '')}}</a></span>
                </div>
                {{-- <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                    <img src="{{asset('images/frontend/user_check_icon.svg')}}" alt="" class="contact-icons" />
                    <h4 class="fs-32 fw-500 mt-3 border-b-1px">Join us</h4>
                    <span class="contact-content"><a href="javascript:void(0)" class="text-gradient">Careers</a></span>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="map-section">
        <div class="container">
            <iframe class="grayscale" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1781.1242177393162!2d-0.10503802472526175!3d51.52086040972161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b517bd5621d%3A0x1fc7d641f33fda9c!2s5%20St%20John&#39;s%20Ln%2C%20London%20EC1M%204BH%2C%20UK!5e1!3m2!1sen!2s!4v1744718239796!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    @include('frontend.partials._contact-form')
    @include('frontend.partials._footer')
</div>
@endsection