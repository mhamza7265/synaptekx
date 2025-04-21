@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{data_get($page->sections, 'hero_section.bg_image' , '')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">{{data_get($page->sections, 'hero_section.hero_title' , '')}}</h1>

                        @php
                            $rawTitle = data_get($page->sections, 'hero_section.hero_subtitle' , '');
                            
                            if (stripos($rawTitle, 'synaptekx') !== false) {
                                $highlighted = preg_replace(
                                    '/(synaptekx)/i',
                                    '<span class="text-gradient">$1</span>',
                                    e($rawTitle)
                                );
                                $formattedSubtitle = $highlighted;
                            } else {
                                $formattedSubtitle = e($rawTitle);
                            }
                        @endphp
                        <p class="services-hero-subtitle text-white text-center fs-18">{!!$formattedSubtitle!!}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section">
                <div class="section-navbar d-flex justify-content-between align-items-center px-110 px-35 py-4 overflow-x-auto white-space-nowrap">
                    @php
                    $groupPriority = [
                        'scaled_partners' => 1,
                        'all_partners' => 2,
                        'capabilities' => 3,
                    ];
                
                    $sections = collect(data_get($page, 'sections.all', []))
                        ->sortBy(function ($section) use ($groupPriority) {
                            $group = $section['group'] ?? '';
                            return $groupPriority[$group] ?? 99;
                        })
                        ->values();
                @endphp
                
                @if ($sections->isNotEmpty())
                    @foreach ($sections as $section)
                        @php
                            $title = data_get($section, 'title', '');
                            $slug = \Illuminate\Support\Str::slug($title);
                        @endphp
                
                        @if ($title)
                            <a href="#{{ $slug }}"
                               class="d-block page-nav-link fs-16 fw-600 text-center me-5 me-lg-0"
                               data-aos="fade-up"
                               data-aos-duration="500"
                               data-aos-easing="ease-in-out"
                               data-aos-delay="{{ $loop->index }}00">
                                {{ $title }}
                            </a>
                        @endif
                    @endforeach
                @endif         
                </div>
            </section>
            @foreach (data_get($page, 'sections.all') as $section)
                @if (data_get($section, 'type') == 'repeating' && data_get($section, 'group') == 'scaled_partners')
                    <section id="{{ \Illuminate\Support\Str::slug(data_get($section, 'title')) }}">
                        @php
                            $sectionTitle = data_get($section, 'title', '');
                        @endphp
                        @foreach (data_get($section, 'data.partners', []) as $partner)
                            @if ($loop->odd)
                                <section class="empowering-section bg-white position-relative">
                                    @if ($loop->first)
                                        <img src="{{ asset('images/frontend/services_element.svg') }}" alt="graphic-element" class="services-graphic" style="left: 0 !important" />
                                    @endif
                                    <div class="container">
                                        @if ($loop->first)
                                            @php
                                                $rawTitle = $sectionTitle;
                                                $words = preg_split('/\s+/', trim($rawTitle));

                                                if (count($words) > 1) {
                                                    $before = implode(' ', array_slice($words, 0, -1));
                                                    $last = end($words); // gets the last word
                                                    $formattedTitle = e($before) . ' <span class="text-gradient">' . e($last) . '</span>';
                                                } else {
                                                    $formattedTitle = '<span class="text-gradient">' . e($rawTitle) . '</span>';
                                                }
                                            @endphp
                                            <h1>{!! $formattedTitle !!}</h1>
                                        @endif
                                        <div class="row justify-content-between align-items-start">
                                            <div id="fixed-on-scroll" class="col-12 col-md-6 mx-auto">
                                                <div class="text-content partner-logo" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                    <img src="{{ data_get($partner, 'partner_logo') }}" alt="elite-partners-logo" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 sticky-section-right-texts-parent mx-auto mt-4 mt-md-0">
                                                @foreach (data_get($partner, 'details', []) as $partnerDetail)
                                                    <div class="sticky-section-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="{{ $loop->index }}00">
                                                        <h5 class="fs-22 fw-500">{{ data_get($partnerDetail, 'detail_title') }}</h5>
                                                        <p>{{ data_get($partnerDetail, 'detail_subtitle') }}</p>
                                                        <div id="div-end-unfiix"></div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @elseif ($loop->even)
                                <section class="empowering-section bg-black position-relative" style="background-image: url('/images/frontend/bg-gradient_2.svg'); background-repeat: no-repeat; background-position: right top;">
                                    <div class="container">
                                        <div class="row justify-content-between align-items-start">
                                            <div class="col-12 col-md-6 sticky-section-left-texts-parent mx-auto mt-4 mt-md-0">
                                                @foreach (data_get($partner, 'details', []) as $partnerDetail)
                                                    <div class="sticky-section-left-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="{{ $loop->index }}00">
                                                        <h5 class="fs-22 fw-500">{{ data_get($partnerDetail, 'detail_title') }}</h5>
                                                        <p>{{ data_get($partnerDetail, 'detail_subtitle') }}</p>
                                                        <div id="div-end-unfiix"></div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div id="fixed-on-scroll" class="col-12 col-md-6 mx-auto overflow-x-hidden">
                                                <div class="text-content partner-logo" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                    <img src="{{ data_get($partner, 'partner_logo') }}" alt="elite-partners-logo" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endif
                        @endforeach
                    </section>
                @endif
            @endforeach
            @foreach (data_get($page, 'sections.all', []) as $section)
                @if (data_get($section, 'type') == 'repeating' && data_get($section, 'group') == 'all_partners')
                    <section id="{{ \Illuminate\Support\Str::Slug(data_get($section, 'title')) }}" class="home-section-3 position-relative font-outfit" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <img src="{{ asset('images/frontend/graphic_element.svg') }}" class="div-graphic-element" />

                        <div class="container py-90px overflow-hidden">
                            <div class="d-flex justify-content-start align-content-center">
                                <img src="{{ asset('images/frontend/features_pill.svg') }}" draggable="false" />
                            </div>
                            <div class="col-md-12 mt-4">
                                @php
                                    $rawTitle = data_get($section, 'title', '');
                                    $words = preg_split('/\s+/', trim($rawTitle));

                                    if (count($words) > 1) {
                                        $before = implode(' ', array_slice($words, 0, -1));
                                        $last = end($words); // gets the last word
                                        $formattedTitle = e($before) . ' <span class="text-gradient">' . e($last) . '</span>';
                                    } else {
                                        $formattedTitle = '<span class="text-gradient">' . e($rawTitle) . '</span>';
                                    }
                                @endphp
                                <h1 class="w-60-perc home-sect-2-title text-white" data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out">{!! $formattedTitle !!}</h1>
                            </div>

                            <div class="home-sect-3-content-container d-flex justify-content-between align-items-start mt-5">
                                <div class="row w-100 m-auto overflow-hidden partners-tabs">
                                    <div class="d-flex col-md-4 col-12" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                        <div class="nav flex-column nav-pills tab-border-left" id="v-pills-tab" role="tablist">
                                            @foreach (data_get($section, 'data.partners', []) as $partner)
                                                <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-btn-{{ $loop->iteration }}" data-bs-toggle="pill" data-bs-target="#tab-{{ $loop->iteration }}" type="button">
                                                    <div class="image-div">
                                                        <img src="{{ data_get($partner, 'partner_logo') }}" alt="" />
                                                    </div>
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Right Side - Tab Content -->
                                    <div class="col-md-8 col-12" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                        <div class="tab-content section-3-tab-content" id="v-pills-tabContent">
                                            @foreach (data_get($section, 'data.partners', []) as $partner)
                                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $loop->iteration }}">
                                                    {!! data_get($partner, 'partner_content') !!}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

            {{-- <section id="event-webinars" class="webinar-section" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="pt-5 bg-white">
                    <div class="container mb-5">
                        <h1>
                            Events & <span class="text-gradient">Webinars</span>
                        </h1>
                    </div>
                    <div class="py-5" style="background-color: #53535324">
                        <div class="container">
                            <div id="webinar-carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-block d-md-flex justify-content-between align-items-start w-100">
                                            <div class="image-div" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                <img src="{{asset('images/frontend/webinar.png')}}" alt="" />
                                                <img src="{{asset('images/frontend/global_logo.png')}}" class="image-logo"/>
                                            </div>
                                            <div class="text-content">
                                                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">The FOUNDER SUMMIT Deutschlands </h1>
                                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                                <a href="{{route('contact')}}" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                                    <span class="ms-3 fs-14 text-black">Get in Touch</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-block d-md-flex justify-content-between align-items-start w-100">
                                            <div class="image-div" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                <img src="{{asset('images/frontend/webinar.png')}}" alt="" />
                                                <img src="{{asset('images/frontend/global_logo.png')}}" class="image-logo"/>
                                            </div>
                                            <div class="text-content">
                                                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">The FOUNDER SUMMIT Deutschlands </h1>
                                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                                <a href="{{route('contact')}}" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                                    <span class="ms-3 fs-14 text-black">Get in Touch</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-block d-md-flex justify-content-between align-items-start w-100">
                                            <div class="image-div" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                                <img src="{{asset('images/frontend/webinar.png')}}" alt="" />
                                                <img src="{{asset('images/frontend/global_logo.png')}}" class="image-logo"/>
                                            </div>
                                            <div class="text-content">
                                                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">The FOUNDER SUMMIT Deutschlands </h1>
                                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">Unlock potential with cutting-edge technology tailored to your business needs. Our solutions streamline operations, enhance security, and foster innovation, positioning you for success in a rapidly evolving digital landscape.</p>
                                                <a href="{{route('contact')}}" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                                                    <span class="ms-3 fs-14 text-black">Get in Touch</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#webinar-carousel" data-bs-slide-to="0" class="carousel-indicator active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#webinar-carousel" data-bs-slide-to="1" class="carousel-indicator" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#webinar-carousel" data-bs-slide-to="2" class="carousel-indicator" aria-label="Slide 3"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            {{-- <section id="rel-cap" class="py-5 bg-white">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-12 col-md-4" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <h1 class="fs-57 text-black" style="line-height: 1.3">Related <span class="text-gradient">Capabilities</span></h1>
                    </div>
                    <div class="col-12 col-md-3 ps-3 ps-md-5 mb-3 mb-md-0 mt-5 mt-md-0">
                        <a href="{{ route('services', ['name' => 'digital']) }}" class="capability-link-dark fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#000" stroke-opacity="1" stroke-width="3"/>
                            </svg>
                            Digital
                        </a>
                        <a href="{{ route('services', ['name' => 'data-ai']) }}" class="capability-link-dark fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                            <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#000" stroke-opacity="1" stroke-width="3"/>
                            </svg>
                            Data & AI
                        </a>
                        <a href="{{ route('services', ['name' => 'security']) }}" class="capability-link-dark fs-32" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                            <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#000" stroke-opacity="1" stroke-width="3"/>
                            </svg>
                            Security
                        </a>
                    </div>
                    <div class="col-12 col-md-5 ps-3">
                        <a href="{{ route('services', ['name' => 'cloud']) }}" class="capability-link-dark fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#000" stroke-opacity="1" stroke-width="3"/>
                            </svg>
                            Cloud
                        </a>
                        <a href="{{ route('services', ['name' => 'managed-services']) }}" class="capability-link-dark fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                            <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#000" stroke-opacity="1" stroke-width="3"/>
                            </svg>
                            Managed Services
                        </a>
                        <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) }}" class="capability-link-dark fs-32" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                            <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#000" stroke-opacity="1" stroke-width="3"/>
                            </svg>
                            Talent Acquisition & Sourcing
                        </a>
                    </div>
                </div>
            </div>
            </section> --}}
            @foreach (data_get($page, 'sections.all', []) as $section)
                @if (data_get($section, 'type') == 'text' && data_get($section, 'group') == 'capabilities')
                    <section id="{{ \Illuminate\Support\Str::Slug(data_get($section, 'title')) }}" class="py-5" style="background-image: url('/images/frontend/bg-gradient_2.svg'); background-repeat: no-repeat; background-position: right top;">
                        <div class="container py-5">
                            <div class="row justify-content-start">
                                <div class="col-12 col-md-4" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                    @php
                                        $rawTitle = data_get($section, 'title', '');
                                        $words = preg_split('/\s+/', trim($rawTitle));

                                        if (count($words) > 1) {
                                            $before = implode(' ', array_slice($words, 0, -1));
                                            $last = end($words); // gets the last word
                                            $formattedTitle = e($before) . ' <span class="text-gradient">' . e($last) . '</span>';
                                        } else {
                                            $formattedTitle = '<span class="text-gradient">' . e($rawTitle) . '</span>';
                                        }
                                    @endphp
                                    <h1 class="fs-57 text-white" style="line-height: 1.3">{!! $formattedTitle !!}</h1>
                                </div>
                                <div class="col-12 col-md-6 ps-3 ps-md-5 mb-3 mb-md-0 mt-5 mt-md-0">
                                    <div class="row">
                                        @foreach ($services as $service)
                                            <div class="col-12 col-md-8">
                                                <a href="{{ route('services', ['id' => $service->id]) }}" class="capability-link fs-32 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="{{ $loop->index }}00">
                                                    <svg class="me-3" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 2H20M20 2V20M20 2L2.75862 20" stroke="#FFFFFF99" stroke-opacity="1" stroke-width="3"/>
                                                    </svg>
                                                    {{ $service->name }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

            @include('frontend.partials._contact-form')
            @include('frontend.partials._footer')
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(window).on("scroll", function () {
                    $(window).on("scroll", function () {
                        let scrollPercentage = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
                        let gradientPosition = (100 - (scrollPercentage % 100)) + "%";
                        
                        $(".empower-title").css("--gradient-position", gradientPosition);
                    });
                });

            $('.capability-link').hover(
                function() {
                    $(this).css('color', '#FFC107'); // Change text color
                    $(this).find('svg path').attr('stroke', '#FFC107'); // Change SVG stroke color
                },
                function() {
                    $(this).css('color', '#ffffff99'); // Revert text color
                    $(this).find('svg path').attr('stroke', '#ffffff99'); // Revert SVG stroke color
                }
            );

            $('.capability-link-dark').hover(
                function() {
                    $(this).css('color', '#FFC107'); // Change text color
                    $(this).find('svg path').attr('stroke', '#FFC107'); // Change SVG stroke color
                },
                function() {
                    $(this).css('color', '#000'); // Revert text color
                    $(this).find('svg path').attr('stroke', '#000'); // Revert SVG stroke color
                }
            );
        })
    </script>
@endsection