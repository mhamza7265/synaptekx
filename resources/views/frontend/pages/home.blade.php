@extends('frontend.layouts.main')

@section('styles')
    <style>
        .text{
            color: blue;
        }
    </style>
@endsection

@section('content')
    <div class="home-page">
        <section class="home-hero-section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators home-hero-indicators">
                    @foreach (data_get($page, 'sections.hero_sections', []) as $index => $section)
                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $index }}"
                            @class(['active' => $loop->first])
                            @if($loop->first) aria-current="true" @endif
                            aria-label="Slide {{ $loop->iteration }}"
                        ></button>
                    @endforeach

                </div>
                <div class="carousel-inner">
                    @foreach (data_get($page, 'sections.hero_sections', []) as $section)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}"
                            @if (data_get($section, 'bg_type') === 'image')
                                style="background-image: url('{{ data_get($section, 'bg_file', '') }}'); background-size: cover"
                            @endif
                        >
                            <div class="hero-section hero-video">
                                @if (data_get($section, 'bg_type') === 'video')
                                    <video autoplay loop muted playsinline>
                                        <source src="{{ data_get($section, 'bg_file', '') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif

                                <div class="container overflow-hidden">
                                    @php
                                        $rawTitle = data_get($section, 'hero_title', '');
                                        $words = preg_split('/\s+/', trim($rawTitle));
                                        $formattedTitle = e($rawTitle);

                                        if (count($words) > 5) {
                                            $before = implode(' ', array_slice($words, 0, -2));
                                            $lastTwo = implode(' ', array_slice($words, -2));
                                            $formattedTitle = e($before) . ' <span class="text-gradient">' . e($lastTwo) . '</span>';
                                        }
                                    @endphp

                                    <div class="hero-text-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                        <h1 class="hero-title-text">{!! $formattedTitle !!}</h1>
                                    </div>

                                    @php
                                        $rawSubtitle = data_get($section, 'hero_subtitle', '');
                                        if (stripos($rawSubtitle, 'synaptekx') !== false) {
                                            $formattedSubtitle = preg_replace(
                                                '/(synaptekx)/i',
                                                '<span class="text-gradient">$1</span>',
                                                e($rawSubtitle)
                                            );
                                        } else {
                                            $formattedSubtitle = e($rawSubtitle);
                                        }
                                    @endphp

                                    <div class="hero-text-detail" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                        <p class="hero-detail-text">{!! $formattedSubtitle !!}</p>
                                    </div>

                                    <a href="{{ route('services', ['slug' => 'digital']) }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                        <img src="{{ asset('images/frontend/check.svg') }}" />
                                        <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="carousel-item active">
                        <div class="hero-section hero-video">
                            <video autoplay loop muted playsinline>
                                <source src="{{asset('images/frontend/carousel_1.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="container overflow-hidden">
                                <div class="hero-text-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <h1 class="hero-title-text">Redefining IT Solutions for the <span class="text-gradient">Digital Age</span></h1>
                                </div>
                                <div class="hero-text-detail" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <p class="hero-detail-text">Welcome to <span class="text-gradient">SynaptekX</span> where cutting-edge technology meets innovative thinking. As a startup committed to delivering exceptional value, we specialize in transforming businesses through our comprehensive suite of digital services. Whether you’re looking to optimize your current operations or build a robust digital infrastructure, we are here to make your vision a reality. Our expertise lies in providing strategic consulting, end-to-end digital transformation, and tailored IT solutions that help businesses thrive in a rapidly evolving digital landscape.</p>
                                </div>
                                <a href="{{ route('services', ['name' => 'digital']) }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/check.svg')}}" />
                                    <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="hero-section" style="background-image: url('/images/frontend/carousel_2.jpg')">
                            <div class="container overflow-hidden">
                                <div class="hero-text-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <h1 class="hero-title-text">Transforming Businesses with Next-Gen <span class="text-gradient">IT Solutions</span></h1>
                                </div>
                                <div class="hero-text-detail" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <p class="hero-detail-text">At <span class="text-gradient">SynaptekX</span>, we are redefining how businesses navigate the digital era. As a trailblazing startup, we specialize in providing future-ready IT solutions that enable organizations to scale and adapt in a fast-paced world. Whether you need to optimize existing processes or create a completely new digital ecosystem, we’re here to bring innovative ideas to life. Our expert team offers everything from strategic advice to full-service digital transformations, ensuring that your business not only survives but thrives in the digital age.</p>
                                </div>
                                <a href="{{ route('services', ['name' => 'cloud']) }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/check.svg')}}" />
                                    <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="hero-section" style="background-image: url('/images/frontend/carousel_3.jpg')">
                            <div class="container overflow-hidden">
                                <div class="hero-text-content" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <h1 class="hero-title-text">Future Proofing Your Business Through <span class="text-gradient">Technology</span></h1>
                                </div>
                                <div class="hero-text-detail" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <p class="hero-detail-text"><span class="text-gradient">SynaptekX</span> is at the forefront of technological innovation, dedicated to helping businesses achieve long-term success. As a visionary startup, we offer tailored IT solutions that streamline operations and open doors to new growth opportunities. Our services cover every aspect of digital transformation, from strategic consulting to implementing cutting-edge technologies. We empower businesses to stay agile, competitive, and future-proof in a rapidly evolving digital world.</p>
                                </div>
                                <a href="{{ route('services', ['name' => 'security']) }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/check.svg')}}" />
                                    <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="hero-brands">
                @include('frontend.partials._hero-brands')
            </div>
        </section>

        {{-- <section class="home-section-2 bg-white position-relative radius-24 mt-15">
            <img src="{{asset('images/frontend/graphic_element.svg')}}" class="div-graphic-element" />
            <div class="container py-60px">
                <div class="hero-check-container d-flex justify-content-start align-content-center border-black">
                    <img src="{{asset('images/frontend/site_check_icon.svg')}}" />
                    <span class="site-check-text ms-2 text-black">PARTNERS</span>
                </div>
                <div class="col-md-12 mt-4">
                    <h1 class="w-60-perc home-sect-2-title"><span class="text-gradient">SynaptekX</span> Collabrotion With some of Tech Giants </h1>
                </div>
                <div class="mt-5">
                    @include('frontend.partials._hero-brands')
                </div>

                <div class="home-sect-2-content-container d-flex justify-content-between align-items-start mt-5">
                    <div class="home-sect-2-img">
                        <img src="{{asset('images/frontend/home-section-2.svg')}}" style="object-fit: cover" />
                    </div>
                    <div class="home-sect-2-text-container">
                        <p class="home-sect-2-text-heading">Contribution with Google</p>

                        <p class="home-sect-2-text-detail">At SynaptekX, we believe that a strong strategy is the foundation of success. With our Consulting & Strategy services, we work closely with your team to understand your unique business goals, identify opportunities, and build actionable roadmaps for success.</p>

                        <div class="home-sect-2-text-detail-2 mt-4">
                            <h3>Work Details</h3>
                            <ul>
                                <li>IT Strategy Development: <span>Align your IT goals with your overall business objectives.</span></li>
                                <li>Technology Assessment: <span>Identify gaps in your current infrastructure and propose innovative solutions.</span></li>
                                <li>Risk Analysis & Mitigation: <span>Ensure your digital growth is secure and future-proof.</span></li>
                                <li>Digital Roadmap Creation: <span>Craft a step-by-step plan to guide your digital transformation journey.</span></li>
                            </ul>
                            <p>By partnering with us, you’ll benefit from data-driven insights and a tailored strategy that maximizes your ROI.</p>
                        </div>

                        <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                            <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                            <span class="ms-3 fs-14">Explore More</span>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="home-section-3 position-relative" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <img src="{{asset('images/frontend/graphic_element.svg')}}" class="div-graphic-element" />

            <div id="partners-carousel" class="carousel slide font-sf-pro" data-bs-ride="false" data-bs-interval="false">
                <div class="carousel-inner">
                    @foreach (data_get($partners, 'sections.all', []) as $section)
                        @if (data_get($section, 'type') === 'repeating' && data_get($section, 'group') === 'scaled_partners')
                            @foreach (data_get($section, 'data.partners', []) as $partner)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="d-block d-md-flex justify-content-between align-content-center overflow-hidden">
                                        <img src="{{ data_get($partner, 'partner_logo', '') }}" alt="partner icon"
                                            class="partners-icon"
                                            data-aos="fade-right"
                                            data-aos-easing="ease-in-out"
                                            data-aos-duration="500" />

                                        <div class="partner-carousel-content mt-4 mt-md-0"
                                            data-aos="fade-left"
                                            data-aos-easing="ease-in-out"
                                            data-aos-duration="500">
                                            <h5 class="text-white fs-16 fw-500">{{ data_get($partner, 'partner_name', '') }}</h5>
                                            <p class="partners-carousel-text fs-16 text-white">{{ data_get($partner, 'partner_description', '') }}</p>
                                            <a href="{{ route('partners') }}"
                                            class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                <img src="{{ asset('images/frontend/check.svg') }}" />
                                                <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endforeach

                    {{-- <div class="carousel-item active">
                        <div class="d-block d-md-flex justify-content-between align-content-center overflow-hidden">
                            <img src="{{asset('images/frontend/aws_icon.svg')}}" alt="aws icon" class="partners-icon" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="500" />
                            <div class="partner-carousel-content mt-4 mt-md-0" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="500">
                                <h5 class="text-white fs-16 fw-500">Amazon</h5>
                                <p class="partners-carousel-text fs-16 text-white">SynaptekX and AWS deliver AI-optimised cloud solutions, from intelligent migrations to self-healing architectures. Using Amazon SageMaker and EC2, we enable dynamic scalability, cost-efficient resource allocation, and seamless integration of machine learning into core business processes.</p>
                                <a href="{{route('partners')}}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/check.svg')}}" />
                                    <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-md-flex justify-content-between align-content-center overflow-hidden">
                            <img src="{{asset('images/frontend/strikeready_logo.svg')}}" alt="aws icon" class="partners-icon" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="500" />
                            <div class="partner-carousel-content mt-4 mt-md-0" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="500">
                                <h5 class="text-white fs-16 fw-500">StrikeReady</h5>
                                <p class="partners-carousel-text fs-16 text-white">SynaptekX and StrikeReady combine forces on distribution level to redefine security operations through AI-driven threat intelligence, automated incident response, and unified visibility.</p>
                                <a href="{{ route('partners') }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/check.svg')}}" />
                                    <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-md-flex justify-content-between align-content-center overflow-hidden">
                            <img src="{{asset('images/frontend/cywift_logo.svg')}}" alt="aws icon" class="partners-icon" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="500" />
                            <div class="partner-carousel-content mt-4 mt-md-0" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="500">
                                <h5 class="text-white fs-16 fw-500">Cywift</h5>
                                <p class="partners-carousel-text fs-16 text-white">SynaptekX and Cywift unite on distribution level to transform governance, risk, and compliance (GRC) through AI-driven automation and actionable insights for any cloud anywhere.</p>
                                <a href="{{ route('partners') }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                    <img src="{{asset('images/frontend/check.svg')}}" />
                                    <span class="ms-2 me-2 fs-14 text-white">Find Out More</span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#partners-carousel" data-bs-slide="prev">
                    {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                    <img src="{{asset('images/frontend/carousel_arrow_left.svg')}}" alt="arrow-left" />
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#partners-carousel" data-bs-slide="next">
                    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" alt="" />
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="container py-90px overflow-hidden">
                <!--<div class="d-flex justify-content-start align-content-center">-->
                <!--    <img src="{{asset('images/frontend/features_pill.svg')}}" draggable="false" />-->
                <!--</div>-->
                <div class="col-md-12 mt-4">
                    @php
                        $rawTitle = data_get($page, 'sections.services_section.section_title', '');

                        if (stripos($rawTitle, 'synaptekx') !== false) {
                            $formattedTitle = preg_replace(
                                '/(synaptekx)/i',
                                '<span class="text-gradient">$1</span>',
                                e($rawTitle)
                            );
                        } else {
                            $formattedTitle = e($rawTitle);
                        }
                    @endphp

                    <h1 class="w-60-perc home-sect-2-title text-white" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out">{!!$formattedTitle!!}</h1>
                </div>

                <div class="home-sect-3-content-container d-flex justify-content-between align-items-start mt-5">
                    <div class="row w-100 m-auto overflow-hidden">
                        <!-- Left Side - Vertical Tabs -->
                        <div class="d-flex col-md-4 col-12" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            {{-- <div class="h-100 border-1 border-white" style="padding-top: 20px">
                                <img src="{{asset('images/frontend/divider_gradient.svg')}}" />
                            </div> --}}
                            <div class="nav flex-column nav-pills tab-border-left" id="v-pills-tab" role="tablist">
                                @foreach ($services as $service)
                                    <button class="nav-link {{$loop->first ? 'active' : ''}}" id="tab-btn-{{$loop->iteration}}" data-bs-toggle="pill" data-bs-target="#tab-{{$loop->iteration}}" type="button">
                                        {{\Illuminate\Support\Str::upper($service->name)}}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                
                        <!-- Right Side - Tab Content -->
                        <div class="col-md-8 col-12" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="tab-content section-3-tab-content" id="v-pills-tabContent">
                                @foreach ($services as $service)
                                    <div class="tab-pane fade show {{$loop->first ? 'active' : ''}}" id="tab-{{$loop->iteration}}">
                                        {!!$service->service_description!!}
                                        <a href="{{ route('services', ['slug' => $service->slug]) }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                            <img src="{{asset('images/frontend/check.svg')}}" />
                                            <span class="ms-2 me-2 fs-14 text-white">Explore</span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-section-2 bg-white position-relative overflow-hidden font-sf-pro" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="container py-35px">
                <div class="col-md-12 mt-4">
                    @php
                        $rawTransformTitle = data_get($page, 'sections.transform_section.section_title', '');

                        if (stripos($rawTransformTitle, 'transformation') !== false) {
                            $formattedTransformTitle = preg_replace(
                                '/(transformation)/i',
                                '<span class="text-gradient">$1</span>',
                                e($rawTransformTitle)
                            );
                        } else {
                            $formattedTransformTitle = e($rawTransformTitle);
                        }
                    @endphp

                    <h1 class="home-sect-4-title text-black">{!!$formattedTransformTitle!!}</h1>
                </div>
                <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                    {{-- <img src="{{asset('images/frontend/home_graphic_1.svg')}}" class="home-graphic-1 object-fit-cover w-100" /> --}}
                    <video autoplay loop muted playsinline class="w-100">
                        <source src="{{data_get($page->sections, 'transform_section.infograph' , '')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>    
        </section> 

        <section class="home-section-2 bg-black position-relative relative overflow-hidden" style="background-image: url('/images/frontend/bg-gradient_2.svg'); background-repeat: no-repeat; background-position: right top;" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="container py-90px">
                <!-- <div class="d-flex justify-content-start align-content-center">
                    <img src="{{asset('images/frontend/innovative_pill.svg')}}" draggable="false" />
                </div> -->
                <div class="col-md-12 mt-4">
                    @php
                        $rawTitle = data_get($page, 'sections.features_section.section_title', '');
                        $words = preg_split('/\s+/', trim($rawTitle));

                        if (count($words) >= 4) {
                            $firstTwo = implode(' ', array_slice($words, 0, 2));
                            $rest = implode(' ', array_slice($words, 2));
                            $formattedTitle = '<span class="text-gradient">' . e($firstTwo) . '</span> ' . e($rest);
                        } else {
                            $formattedTitle = e($rawTitle);
                        }
                    @endphp

                    <h1 class="home-sect-2-title text-white">{!!$formattedTitle!!}</h1>
                </div>
                <div class="row justify-content-center align-items-start mt-5 pt-md-5 overflow-hidden">
                    @php
                        $features = data_get($page, 'sections.features_section.features', []);
                    @endphp
                    @if (!empty($features))
                        @foreach ($features as $feature)
                            <div class="innovative-sec-table col-lg-3 col-md-4 col-12"
                                data-aos="fade-up"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-delay="{{ $loop->index }}00">
                                <img src="{{ data_get($feature, 'feature_icon', '') }}" style="width: 50px" />
                                <div class="text-div">
                                    <h5 class="innovative-sec-table-title">{{ data_get($feature, 'feature_title', '') }}</h5>
                                    <p class="innovative-sec-table-desc">{{ data_get($feature, 'feature_subtitle', '') }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <img src="{{asset('images/frontend/graphic_element_1.svg')}}" class="div-graphic-element-1" />
        </section>

        @include('frontend.partials._contact-form')
        @include('frontend.partials._footer')
    </div>
@endsection
@section('scripts')
    <script>
        // $(document).ready(function () {
        //     var slider = new KeenSlider(".auto-slider", {
        //         loop: true,
        //         slides: { perView: 5, spacing: 10 }, // 3 slides at a time
        //         drag: true
        //     });

        //     function autoSlide() {
        //         setInterval(function () {
        //             slider.next(); // Moves to the next slide automatically
        //         }, 2000); // Adjust speed (2000ms = 2 seconds per slide)
        //     }

        //     autoSlide();
        // });

        $(document).ready(function () {
        $(".slider-track").hover(
            function () {
                $(this).css("animation-play-state", "paused"); // Pause on hover
            },
            function () {
                $(this).css("animation-play-state", "running"); // Resume on mouse leave
            }
        );
    });
    </script>
@endsection