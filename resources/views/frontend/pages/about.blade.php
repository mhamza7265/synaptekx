@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{data_get($page->sections, 'hero_section.bg_image' , '')}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">{{data_get($page->sections, 'hero_section.hero_title' , '')}}</h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">{{data_get($page->sections, 'hero_section.hero_subtitle' , '')}}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section px-lg-5">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    @php
                        $sections = data_get($page, 'sections.all', []);

                        $groupPriority = [
                            'features' => 1,
                            'scroll_section' => 2,
                            'features_2' => 3,
                        ];

                        // Sort the sections by priority of their group
                        usort($sections, function ($a, $b) use ($groupPriority) {
                            $aPriority = $groupPriority[$a['group'] ?? ''] ?? 99;
                            $bPriority = $groupPriority[$b['group'] ?? ''] ?? 99;
                            return $aPriority <=> $bPriority;
                        });
                    @endphp

                    @foreach ($sections as $section)
                        @php
                            $title = data_get($section, 'title', '');
                            $slug = \Illuminate\Support\Str::slug($title);
                        @endphp

                        <a href="#{{ $slug }}"
                            class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0"
                            data-aos="fade-up"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out"
                            data-aos-delay="{{ $loop->index }}00">
                            {{ $title }}
                        </a>
                    @endforeach
                </div>
            </section>
            @if (!empty(data_get($page->sections, 'all' ,'')))
                @foreach (data_get($page->sections, 'all', []) as $section)
                    @if (data_get($section, 'type') === 'repeating')
                        @php
                            $isOdd = $loop->odd;
                            $sectionId = \Illuminate\Support\Str::slug($section['title'] ?? '');
                            $sectionTitle = data_get($section, 'data.section_title', '');
                            $sectionDesc = data_get($section, 'data.section_desc', '');
                            $sectionImage = data_get($section, 'data.section_image', '');

                            $words = preg_split('/\s+/', trim($sectionTitle));
                            if (count($words) > 1) {
                                $before = implode(' ', array_slice($words, 0, -1));
                                $lastWord = end($words);
                                $formattedTitle = e($before) . ' <span class="text-gradient">' . e($lastWord) . '</span>';
                            } else {
                                $formattedTitle = '<span class="text-gradient">' . e($sectionTitle) . '</span>';
                            }

                            // Set conditional classes
                            $sectionClass = $isOdd
                                ? 'transformation-section bg-white py-140px'
                                : 'py-110 bg-site-grey services-section-bg-grad';

                            $titleClass = $isOdd
                                ? 'fs-57 fw-500 text-start text-md-start'
                                : 'fs-57 fw-500 text-start text-white text-md-start';

                            $imageColumnClass = $isOdd ? 'order-1 order-lg-1' : 'order-2 order-lg-2';
                            $contentColumnClass = $isOdd ? 'order-2 order-lg-2' : 'order-1 order-lg-1';
                        @endphp
                        @if ($loop->odd)
                            <section id="{{ $sectionId }}" class="{{ $sectionClass }}">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 mx-auto mt-4 mt-lg-0 {{ $imageColumnClass }}"
                                            data-aos="{{ $isOdd ? 'fade-right' : 'fade-left' }}"
                                            data-aos-duration="500"
                                            data-aos-easing="ease-in-out">
                                                <div class="services-section-image">
                                                    <img src="{{ $sectionImage }}" alt="" class="services-section-img" />
                                                </div>
                                        </div>

                                        <div class="col-12 col-lg-7 mx-auto mt-4 mt-lg-0 {{ $contentColumnClass }}"
                                            data-aos="fade-left"
                                            data-aos-duration="500"
                                            data-aos-easing="ease-in-out">
                                                <div class="w-88 ps-md-5 me-auto mx-lg-auto mb-4">
                                                    <h1 class="{{ $titleClass }}">{!! $formattedTitle !!}</h1>
                                                </div>
                                                <div class="mt-3 w-88 ps-md-5 me-auto mx-lg-auto">
                                                    <p class="services-section-desc color-site-gray">{{ $sectionDesc }}</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @elseif ($loop->even)
                            <section id="{{ $sectionId }}" class="{{$sectionClass}}">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="w-88 mb-4">
                                                @php
                                                    $rawTitle = data_get($section, 'data.section_title');
                                                    $words = preg_split('/\s+/', trim($rawTitle));
                                                
                                                    if (count($words) > 1) {
                                                        $before = implode(' ', array_slice($words, 0, -1));
                                                        $lastWord = end($words);
                                                        $formattedTitle = e($before) . ' <span class="text-gradient">' . e($lastWord) . '</span>';
                                                    } else {
                                                        $formattedTitle = '<span class="text-gradient">' . e($rawTitle) . '</span>';
                                                    }
                                                @endphp
                                                <h1 class="fs-57 fw-500 text-start text-white text-md-start">{!!$formattedTitle!!}</h1>
                                            </div>
                                            <div class="w-88 mt-3">
                                                <p class="services-section-desc">{{ data_get($section, 'data.section_desc') }}</p>
                                            </div>
                                            @if ($loop->last)
                                                <a href="{{ route('contact') }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{ asset('images/frontend/check.svg') }}" />
                                                    <span class="ms-2 me-2 fs-14 text-white">Get in Touch</span>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-12 col-lg-5 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="services-section-image ms-auto">
                                                <img src="{{ $sectionImage }}" alt="" class="services-section-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                    @endif
                @endforeach
            @endif

            @php use Illuminate\Support\Str; @endphp
            @if (!empty(data_get($page->sections, 'all', '')))
                @foreach (data_get($page->sections, 'all', []) as $section)
                    @if (data_get($section, 'type') === 'unique')
                        <section id="{{ Str::slug($section['title'] ?? '') }}" class="sticky-section position-relative services-section-bg-grad" style="background-color: #0D101B">
                            <div class="container position-relative">
                                <img src="{{ asset('images/frontend/graphic_element_about.svg') }}" alt="graphic-element" class="about-graphic" />
                                
                                <div class="row justify-content-between align-items-start">
                                    {{-- Left Title --}}
                                    <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                                        <div class="text-content fixed-on-scroll bg-transparent" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                            <h1 class="sticky-gradient-text position-relative">
                                                {{ $section['title'] ?? '' }}
                                                <span class="gradient-band band-1"></span>
                                                <span class="gradient-band band-2"></span>
                                                <span class="gradient-band band-3"></span>
                                            </h1>
                                        </div>
                                    </div>

                                    {{-- Right Details --}}
                                    <div class="col-12 col-lg-6 sticky-right-texts-parent mx-auto mt-4 mt-md-0">
                                        @foreach (data_get($section, 'data.details', []) as $detail)
                                            <div class="sticky-right-texts"
                                                data-aos="fade-up"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in-out"
                                                data-aos-delay="{{ $loop->index * 100 }}">
                                                
                                                <h5 class="fs-22 fw-500">{{ $detail['title'] ?? '' }}</h5>
                                                <p>{{ $detail['description'] ?? '' }}</p>

                                                @if ($loop->first)
                                                    <div id="div-end-unfiix"></div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                @endforeach
            @endif
            
            @if (data_get($page, 'sections.all'))
                @foreach (data_get($page, 'sections.all', []) as $section)
                    @if (data_get($section, 'type') === 'repeating_2')
                        @if($loop->odd)
                            <section id="{{ Str::slug(data_get($section, 'title')) }}" class="transformation-section bg-white py-140px">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="services-section-image">
                                                <img src="{{ data_get($section, 'data.section_image') }}" alt="" class="services-section-img" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="w-88 ps-md-5 me-auto mx-lg-auto mb-4">
                                                @php
                                                    $rawTitle = data_get($section, 'data.section_title');
                                                    $words = preg_split('/\s+/', trim($rawTitle));
                                                
                                                    if (count($words) > 1) {
                                                        $before = implode(' ', array_slice($words, 0, -1));
                                                        $lastWord = end($words);
                                                        $formattedTitle = e($before) . ' <span class="text-gradient">' . e($lastWord) . '</span>';
                                                    } else {
                                                        $formattedTitle = '<span class="text-gradient">' . e($rawTitle) . '</span>';
                                                    }
                                                @endphp
                                                <h1 class="fs-57 fw-500 text-start text-md-start">{!!$formattedTitle!!}</h1>
                                            </div>
                                            <div class="mt-3 w-88 ps-md-5 me-auto mx-lg-auto">
                                                <p class="services-section-desc color-site-gray">{{ data_get($section, 'data.section_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @elseif ($loop->even)
                            <section id="{{ Str::slug(data_get($section, 'title')) }}" class="py-110 bg-site-grey services-section-bg-grad">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="w-88 mb-4">
                                                @php
                                                    $rawTitle = data_get($section, 'data.section_title');
                                                    $words = preg_split('/\s+/', trim($rawTitle));
                                                
                                                    if (count($words) > 1) {
                                                        $before = implode(' ', array_slice($words, 0, -1));
                                                        $lastWord = end($words);
                                                        $formattedTitle = e($before) . ' <span class="text-gradient">' . e($lastWord) . '</span>';
                                                    } else {
                                                        $formattedTitle = '<span class="text-gradient">' . e($rawTitle) . '</span>';
                                                    }
                                                @endphp
                                                <h1 class="fs-57 fw-500 text-start text-white text-md-start">{!!$formattedTitle!!}</h1>
                                            </div>
                                            <div class="w-88 mt-3">
                                                <p class="services-section-desc">{{ data_get($section, 'data.section_desc') }}</p>
                                            </div>
                                            @if ($loop->last)
                                                <a href="{{ route('contact') }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{ asset('images/frontend/check.svg') }}" />
                                                    <span class="ms-2 me-2 fs-14 text-white">Get in Touch</span>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-12 col-lg-5 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="services-section-image">
                                                <img src="{{ data_get($section, 'data.section_image') }}" alt="" class="services-section-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                    @endif
                @endforeach
            @endif

            @include('frontend.partials._contact-form')
            @include('frontend.partials._footer')
        </section>
    </section>
@endsection