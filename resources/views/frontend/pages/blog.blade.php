@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{$page->sections['hero']['hero_image'] ?? ''}}');">
        <div class="container services-hero-container">
            <div class="d-flex justify-content-center align-items-center h-100">
                @php
                    $rawTitle = $page->sections['hero']['hero_title'] ?? '';
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
                    <h1 class="services-hero-title text-white text-center">{!! $formattedTitle !!}</span></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-4">
        <div class="container my-5">
            <div class="d-flex justify-content-start align-content-center">
                <img src="{{asset('images/frontend/blogs_pill.svg')}}" draggable="false" />
            </div>
            @php
                $rawTitle = $page->sections['section_title'] ?? '';
                
                if (stripos($rawTitle, 'synaptekx') !== false) {
                    $highlighted = preg_replace(
                        '/(synaptekx)/i',
                        '<span class="text-gradient">$1</span>',
                        e($rawTitle)
                    );
                    $formattedTitle = $highlighted;
                } else {
                    $formattedTitle = e($rawTitle);
                }
            @endphp
            <h1 class="mt-4 fs-64">{!! $formattedTitle !!}</h1>

            <div class="blogs-container row justify-content-start align-items-baseline mt-5">
                @foreach($blogs as $blog)
                    <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out">
                        <div class="blog-card">
                            <img src="{{$blog->thumbnail}}" alt="" class="blog-img" />
                            <span class="fs-12 fw-500 sub-title-1">{{$blog->category}}</span>
                            <h5 class="fs-22 title">{{$blog->title}}</h5>
                            <a href="{{route('blogs-details', ['slug'=> $blog->slug])}}" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 mb-5 mb-lg-0">
                                <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                <span class="ms-2 fs-14 text-black">explore More</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="row justify-content-center align-items-start" data-aos="fade-up" data-aos-easing="ease-in-out">
                <div class="col-12 col-lg-4 blog-bagination-container">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <button class="btn"><i class="fa-solid fa-arrow-left" style="color: #535353"></i></button>
                        <span class="blog-paging user-select-none">Page 1 of 10</span>
                        <button class="btn"><i class="fa-solid fa-arrow-right" style="color: #535353"></i></button>
                    </div>
                </div>
            </div> --}}

            <div class="d-flex justify-content-center mt-5">
                {{ $blogs->links('pagination::bootstrap-5') }}
            </div>
            
        </div>
    </section>
    @include('frontend.partials._footer')
</div>
@endsection