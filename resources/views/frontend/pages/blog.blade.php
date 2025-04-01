@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{asset('images/frontend/blog_hero.png')}}');">
        <div class="container services-hero-container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h1 class="services-hero-title text-white text-center">Tech experts' latest: Innovations in <span class="text-gradient">digital enterprise</span></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-4">
        <div class="container my-5">
            <div class="d-flex justify-content-start align-content-center">
                <img src="{{asset('images/frontend/blogs_pill.svg')}}" draggable="false" />
            </div>
            <h1 class="mt-4 fs-64"><span class="text-gradient">SynaptekX</span> Latest Tech Insight For You</h1>

            <div class="blogs-container row justify-content-between align-items-baseline mt-5">
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out">
                    <div class="blog-card">
                        <img src="{{asset('images/frontend/blog_1.png')}}" alt="" class="blog-img" />
                        <span class="fs-12 sub-title-1">Design Systems</span>
                        <h5 class="fs-22 title">Lorem ipsum dolor sit amet consectetur. At tellus et.</h5>
                        <a href="{{route('blogs-details')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-2 fs-14 text-black">explore More</span>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100">
                    <div class="blog-card">
                        <img src="{{asset('images/frontend/blog_2.png')}}" alt="" class="blog-img" />
                        <span class="fs-12 sub-title-1">Design Systems</span>
                        <h5 class="fs-22 title">Most popular design systems to learn from in 2022</h5>
                        <a href="{{route('blogs-details')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-2 fs-14 text-black">explore More</span>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
                    <div class="blog-card">
                        <img src="{{asset('images/frontend/blog_3.jpg')}}" alt="" class="blog-img" />
                        <span class="fs-12 sub-title-1">Design Systems</span>
                        <h5 class="fs-22 title">Most popular design systems to learn from in 2022</h5>
                        <a href="{{route('blogs-details')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-2 fs-14 text-black">explore More</span>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out">
                    <div class="blog-card">
                        <img src="{{asset('images/frontend/blog_4.png')}}" alt="" class="blog-img" />
                        <span class="fs-12 sub-title-1">Design Systems</span>
                        <h5 class="fs-22 title">Most popular design systems to learn from in 2022</h5>
                        <a href="{{route('blogs-details')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-2 fs-14 text-black">explore More</span>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100">
                    <div class="blog-card">
                        <img src="{{asset('images/frontend/blog_5.png')}}" alt="" class="blog-img" />
                        <span class="fs-12 sub-title-1">Design Systems</span>
                        <h5 class="fs-22 title">Most popular design systems to learn from in 2022</h5>
                        <a href="{{route('blogs-details')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-2 fs-14 text-black">explore More</span>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
                    <div class="blog-card">
                        <img src="{{asset('images/frontend/blog_6.png')}}" alt="" class="blog-img" />
                        <span class="fs-12 sub-title-1">Design Systems</span>
                        <h5 class="fs-22 title">Most popular design systems to learn from in 2022</h5>
                        <a href="{{route('blogs-details')}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-2 fs-14 text-black">explore More</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-start" data-aos="fade-up" data-aos-easing="ease-in-out">
                <div class="col-12 col-lg-4 blog-bagination-container">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <button class="btn"><i class="fa-solid fa-arrow-left" style="color: #535353"></i></button>
                        <span class="blog-paging user-select-none">Page 1 of 10</span>
                        <button class="btn"><i class="fa-solid fa-arrow-right" style="color: #535353"></i></button>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    @include('frontend.partials._contact-form')
    @include('frontend.partials._footer')
</div>
@endsection