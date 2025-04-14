@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{asset('images/frontend/blog_details_hero.png')}}');">
        <div class="container services-hero-container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h1 class="services-hero-title text-white text-center">{{$blog->title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details-section bg-white" style="color: #535353">
        <div class="container my-4 blog-details-container">
            <div class="d-flex justify-content-between align-items-center">
                <p>Upload by: {{$blog->user->name}}</p>    
                <p>{{$blog->updated_at->format('d-M-Y')}}</p>
            </div> 
            
            <div class="blog-details-content">
                {!!$blog->blog_body!!}
            </div>
        </div>
    </section>
    <section class="bg-white py-4">
        <div class="container my-5">
            <div class="d-flex justify-content-start align-content-center">
                <img src="{{asset('images/frontend/blogs_pill.svg')}}" draggable="false" />
            </div>
            <h1 class="mt-4 fs-64"><span class="text-gradient">SynaptekX</span> Latest Tech Insight For You</h1>

            <div class="blogs-container row justify-content-start align-items-baseline mt-5">
                @foreach($blogs as $blog)
                    <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out">
                        <div class="blog-card">
                            <img src="{{$blog->thumbnail}}" alt="" class="blog-img" />
                            <span class="fs-12 fw-500 sub-title-1">{{$blog->category}}</span>
                            <h5 class="fs-22 title">{{$blog->title}}</h5>
                            <a href="{{route('blogs-details', ['slug' => $blog->slug])}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                                <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                <span class="ms-2 fs-14 text-black">explore More</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('frontend.partials._footer')
</div>
@endsection