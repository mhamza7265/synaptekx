@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{data_get($service->sections ,'hero_section.bg_image' , '')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        @php
                            $rawTitle = data_get($service->sections, 'hero_section.hero_title' , '');
                            $words = preg_split('/\s+/', trim($rawTitle));
                        
                            if (count($words) > 1) {
                                $before = implode(' ', array_slice($words, 0, -1));
                                $lastWord = end($words);
                                $formattedTitle = e($before) . ' <span class="text-gradient">' . e($lastWord) . '</span>';
                            } else {
                                // Only one word, apply gradient to whole word
                                $formattedTitle = '<span class="text-gradient">' . e($rawTitle) . '</span>';
                            }
                        @endphp
                        <h1 class="services-hero-title text-white text-center">{!!$formattedTitle!!}</h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">{{data_get($service->sections ,'hero_section.hero_subtitle' , '')}}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    @php
                        $sections = collect(data_get($service, 'sections.all', []))
                            ->filter(function ($section) {
                                return in_array(data_get($section, 'group'), ['features', 'transform', 'repeating_blocks']);
                            })
                            ->sortBy(function ($section) {
                                $order = ['features' => 1, 'transform' => 2, 'repeating_blocks' => 3];
                                return $order[data_get($section, 'group')] ?? 999;
                            })
                            ->values(); // Reindex to get correct $loop->index
                    @endphp

                    @foreach ($sections as $index => $section)
                        <a href="#{{ \Illuminate\Support\Str::slug(data_get($section, 'display_title')) }}" 
                            id="empower-link" 
                            class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0" 
                            data-aos="fade-up" 
                            data-aos-duration="500" 
                            data-aos-easing="ease-in-out" 
                            data-aos-delay="{{ $index }}00">
                            {{ data_get($section, 'display_title', '') }}
                        </a>
                    @endforeach
                </div>
            </section>
            @foreach (data_get($service, 'sections.all', []) as $section)
                @if (data_get($section, 'type') === 'repeating' && data_get($section, 'group') === 'features')
                    <section id="{{ \Illuminate\Support\Str::slug(data_get($section, 'display_title', '')) }}" class="empowering-section bg-white position-relative">
                        <img src="{{ asset('images/frontend/services_element.svg') }}" alt="graphic-element" class="services-graphic" />
                        <div class="container">
                            <div class="row justify-content-between align-items-start">
                                <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                                    <div class="text-content fixed-on-scroll" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                        <h1 class="empower-title">
                                            {{ data_get($section, 'title', '') }}
                                            <span class="gradient-band band-1"></span>
                                            <span class="gradient-band band-2"></span>
                                            <span class="gradient-band band-3"></span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 empower-right-texts-parent mx-auto mt-4 mt-md-0">
                                    @foreach (data_get($section, 'data.details', []) as $index => $detail)
                                        <div class="empower-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="{{ $index }}00">
                                            <h5 class="fs-22 fw-500">{{ data_get($detail, 'detail_title', '') }}</h5>
                                            <p>{{ data_get($detail, 'detail_description', '') }}</p>
                                            <div id="div-end-unfiix"></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

            @foreach (data_get($service, 'sections.all', []) as $section)
                @if (data_get($section, 'type') === 'single' && data_get($section, 'group') === 'transform')
                    <section id="{{ \Illuminate\Support\Str::slug(data_get($section, 'display_title', '')) }}" class="transformation-journey-section py-110 bg-white py-5 py-md-0">
                        <div class="container">
                            @php
                                $rawTitle = data_get($section, 'title', '');
                                $formattedTitle = $rawTitle;

                                if ((stripos($rawTitle, 'transformation') !== false) || (stripos($rawTitle, 'synaptekx') !== false)) {
                                    if($rawTitle = 'transformation'){
                                        preg_replace(
                                            '/(transformation)/i',
                                            '<span class="text-gradient">$1</span>',
                                            e($rawTitle)
                                        );
                                    }else if($rawTitle = 'synaptekx'){
                                        preg_replace(
                                            '/(synaptekx)/i',
                                            '<span class="text-gradient">$1</span>',
                                            e($rawTitle)
                                        );
                                    }
                                    
                                }
                            @endphp
                            <h1 class="fs-57 fs-md-42px fw-500 text-center text-md-start">{!! $formattedTitle !!}</h1>
                            @php
                                $mediaPath = data_get($section, 'data.infograph', '');
                                $extension = strtolower(pathinfo($mediaPath, PATHINFO_EXTENSION));
                                $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
                                $videoExtensions = ['mp4', 'webm', 'ogg'];
                            @endphp

                            @if (in_array($extension, $imageExtensions))
                                <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                                    <img src="{{ $mediaPath }}" alt="Infographic Image" class="w-100" />
                                </div>
                            @elseif (in_array($extension, $videoExtensions))
                                <div class="home_graphic mt-5" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-center">
                                    <video autoplay loop muted playsinline class="w-100">
                                        <source src="{{ $mediaPath }}" type="video/{{ $extension }}">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                        </div>
                    </section>
                @endif
            @endforeach

            @foreach (data_get($service, 'sections.all', []) as $section)
                @if (data_get($section, 'type') === 'repeating' && data_get($section, 'group') === 'repeating_blocks')
                    @if ($loop->odd)
                        <section id="{{ \Illuminate\Support\Str::slug(data_get($section, 'display_title', '')) }}" class="consulting-section py-110 bg-site-grey services-section-bg-grad">
                            <div class="container overflow-hidden">
                                <div class="row">
                                    <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                        <div class="services-section-image">
                                            <img src="{{ data_get($section, 'data.image', '') }}" alt="" class="services-section-img" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                        <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">
                                            {{ data_get($section, 'title', '') }}
                                            <img src="{{ asset('images/frontend/services-section-title-graphic.svg') }}" class="ms-md-4" />
                                        </h1>
                                        <div>
                                            {!! data_get($section, 'data.description', '') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @elseif ($loop->even)
                        <section id="{{ \Illuminate\Support\Str::slug(data_get($section, 'display_title', '')) }}" class="transformation-section py-110 bg-white">
                            <div class="container overflow-hidden">
                                <div class="row">
                                    <div class="col-12 col-lg-7 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                        <div class="d-flex justify-content-start align-items-center mb-4">
                                            <img src="{{ asset('images/frontend/services-section-title-graphic-2.svg') }}" class="me-1 me-md-4 title-graphic-2" />
                                            <h1 class="services-section-title text-gradient text-center text-md-start">{{ data_get($section, 'title', '') }}</h1>
                                        </div>
                                        <div>
                                            {!! data_get($section, 'data.description', '') !!}
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                        <div class="services-section-image ms-auto">
                                            <img src="{{ data_get($section, 'data.image', '') }}" alt="" class="services-section-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                @endif
            @endforeach

            {{-- <section id="transformation" class="transformation-section py-110 bg-white">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="d-flex justify-content-start align-items-center mb-4">
                                <img src="{{asset('images/frontend/services-section-title-graphic-2.svg')}}" class="me-1 me-md-4 title-graphic-2" />
                                <h1 class="services-section-title text-gradient text-center text-md-start">Transformation</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Powered Transformation for Smarter Operations</h3>
                                <p class="services-section-desc text-black">Transform legacy operations into AI-powered ecosystems that drive faster innovation. Our integrated approach modernizes workflows, harnessing automation for tangible business impact.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Driven Culture for Growth & Innovation</h3>
                                <p class="services-section-desc text-black">We facilitate cultural shifts that embrace AI, ensuring everyone from leadership to frontline teams adopts an insights-driven mindset—amplifying productivity and sparking new revenue channels.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/services_section_2.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="business" class="business-section py-110 bg-site-grey services-section-bg-grad">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-lg-5" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/services_section_3.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <h1 class="services-section-title text-gradient mb-4 text-center text-md-start">Business Applications
                                <img src="{{asset('images/frontend/services-section-title-graphic.svg')}}" class="ms-md-4" />
                            </h1>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Intelligent Enhancements for Enterprise Applications</h3>
                                <p class="services-section-desc">Elevate your enterprise applications with intelligent features. We embed AI-driven recommendations, analytics, and automation within ERP, CRM, and custom solutions.</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="services-section-subtitle">Optimized Operations with Predictive Insights</h3>
                                <p class="services-section-desc">By leveraging predictive modelling and real-time data, we enable continuous optimization of business processes—so your teams can focus on strategic innovation, not routine tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="ecommerce" class="ecommerce-section py-110 bg-white">
                <div class="container overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-lg-7 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="d-flex justify-content-start align-items-center mb-4">
                                <img src="{{asset('images/frontend/services-section-title-graphic-2.svg')}}" class="me-1 me-md-4 title-graphic-2" />
                                <h1 class="services-section-title text-gradient text-center text-md-start">eCommerce</h1>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">AI-Powered Personalization for Digital Commerce</h3>
                                <p class="services-section-desc text-black">Reinvent digital storefronts with AI personalisation. From product recommendations to dynamic pricing, harness the power of machine learning to convert more shoppers.</p>
                            </div>
                            <div class="mt-3 w-88 ps-md-5 mx-auto">
                                <h3 class="services-section-subtitle text-black">Real-Time Insights for Profitable Digital Experiences</h3>
                                <p class="services-section-desc text-black">Our data-led approach analyses consumer behaviour in real time, optimizing every touchpoint—ensuring your online channels remain profitable, scalable, and delightful to navigate.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                            <div class="services-section-image">
                                <img src="{{asset('images/frontend/services_section_4.png')}}" alt="" class="services-section-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            @include('frontend.partials._contact-form')
            @include('frontend.partials._footer')
        </section>
    </section>
@endsection
@section('scripts')
{{-- <script>
    $(document).ready(function(){
        $('.page-nav-link').click(function(){
            if (window.location.hash === "#empower") {
                $('#empower-link').addClass("text-gradient");
            }else{
                $('#empower-link').removeClass("text-gradient");
            }
        })
    })
</script> --}}
@endsection