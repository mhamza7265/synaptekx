@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{$page->sections['hero']['hero_image'] ?? ''}}');">
        <div class="container services-hero-container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h1 class="services-hero-title text-white text-center">{{$page->sections['hero']['hero_title']}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details-section bg-white" style="color: #535353">
        <div class="container my-4 blog-details-container">{!!$page->sections['content'] ?? ''!!}</div>
    </section>
    @include('frontend.partials._footer')
</div>
@endsection
