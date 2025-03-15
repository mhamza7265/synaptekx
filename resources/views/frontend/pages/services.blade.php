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
            <div class="d-flex justify-content-between align-items-center px-5 py-5">
                <a href="#" class="page-nav-link">Empowering Business</a>
                <a href="#" class="page-nav-link">Transformation Journey</a>
                <a href="#" class="page-nav-link">Consulting & Strategy</a>
                <a href="#" class="page-nav-link">Transformation</a>
                <a href="#" class="page-nav-link">Business Applications</a>
                <a href="#" class="page-nav-link">eCommerce</a>
            </div>
        </section>
    </div>
@endsection