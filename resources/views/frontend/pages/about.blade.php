@extends('frontend.layouts.main')

@section('content')
    <div class="services-container font-sf-pro">
        <section class="hero" style="background-image: url('{{$page->sections['hero_section']['bg_image'] ?? ''}}');">
            <div class="container services-hero-container">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="services-hero-title text-white text-center">{{$page->sections['hero_section']['hero_title'] ?? ''}}</h1>

                        <p class="services-hero-subtitle text-white text-center fs-18">{{$page->sections['hero_section']['hero_subtitle'] ?? ''}}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="nav-content">
            <section class="nav-section px-lg-5">
                <div class="section-navbar d-flex justify-content-between align-items-center px-5 py-4 overflow-x-auto white-space-nowrap">
                    @foreach ($page->sections['all'] as $section)
                        <a href="#{{\Illuminate\Support\Str::slug($section['title'] ?? '')}}" class="d-block page-nav-link fs-16 fw-600 text-start me-5 me-lg-0" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="{{$loop->index}}00">{{$section['title'] ?? ''}}</a>
                    @endforeach
                </div>
            </section>
            @if (isset($page->sections['all']))
                @foreach ($page->sections['all'] as $section)
                    @if ($section['type'] == 'repeating')
                        @if($loop->odd)
                            <section id="{{\Illuminate\Support\Str::slug($section['title'])}}" class="transformation-section bg-white py-140px">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="services-section-image">
                                                <img src="{{$section['data']['section_image'] ?? ''}}" alt="" class="services-section-img" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="w-88 ps-md-5 me-auto mx-lg-auto mb-4">
                                                @php
                                                    $rawTitle = $section['data']['section_title'] ?? '';
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
                                                <h1 class="fs-57 fw-500 text-start text-md-start">{!!$formattedTitle!!}</h1>
                                            </div>
                                            <div class="mt-3 w-88 ps-md-5 me-auto mx-lg-auto">
                                                <p class="services-section-desc color-site-gray">{{$section['data']['section_desc'] ?? ''}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @elseif ($loop->even)
                            <section id="{{\Illuminate\Support\Str::slug($section['title'])}}" class="py-110 bg-site-grey services-section-bg-grad">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="w-88 mb-4">
                                                @php
                                                    $rawTitle = $section['data']['section_title'] ?? '';
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
                                                <h1 class="fs-57 fw-500 text-start text-white text-md-start">{!!$formattedTitle!!}</h1>
                                            </div>
                                            <div class="w-88 mt-3">
                                                <p class="services-section-desc">{{$section['data']['section_desc'] ?? ''}}</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="services-section-image">
                                                <img src="{{$section['data']['section_image'] ?? ''}}" alt="" class="services-section-img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                    @endif
                @endforeach
            @endif
            @if ($page->sections['all'])
                @foreach ($page->sections['all'] as $section)
                    @if ($section['type'] == 'unique')
                        <section id="{{\Illuminate\Support\Str::slug($section['title'])}}" class="sticky-section position-relative services-section-bg-grad" style="background-color: #0D101B">
                            <div class="container position-relative">
                                <img src="{{asset('images/frontend/graphic_element_about.svg')}}" alt="graphic-element" class="about-graphic" />
                                <div class="row justify-content-between align-items-start">
                                    <div id="fixed-on-scroll" class="col-12 col-lg-6 mx-auto">
                                        <div class="text-content fixed-on-scroll bg-transparent" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                            <h1 class="sticky-gradient-text position-relative">
                                                {{$section['title']}}
                                                <span class="gradient-band band-1"></span>
                                                <span class="gradient-band band-2"></span>
                                                <span class="gradient-band band-3"></span>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 sticky-right-texts-parent mx-auto mt-4 mt-md-0">
                                        @foreach ($section['data']['details'] as $detail)
                                            <div class="sticky-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="{{$loop->index}}00">
                                                <h5 class="fs-22 fw-500">{{$detail['title']}}</h5>
                                                <p>{{$detail['description']}}</p>
                                                @if ($loop->first)
                                                    <div id="div-end-unfiix"></div>
                                                @endif
                                            </div>
                                        @endforeach
                                        
                                        
                                        {{-- <div class="sticky-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="100">
                                            <h5>People-Powered Innovation</h5>
                                            <p>From solution architects to data scientists, our teams prioritize client objectives and cultural alignment—translating complex AI capabilities into everyday value.</p>
                                        </div>
            
                                        <div class="sticky-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="200">
                                            <h5>Holistic, Future-Ready Solutions</h5>
                                            <p>We integrate AI seamlessly into your existing workflows, laying a scalable, secure, and adaptable foundation that evolves with your business.</p>
                                        </div>
            
                                        <div class="sticky-right-texts" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="300">
                                            <h5>Enduring Partnerships</h5>
                                            <p>We measure our success by your success. Through close collaboration and ongoing support, we remain a trusted ally in your journey to stay ahead of rapidly changing markets.</p>
                                        </div>                             --}}
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                @endforeach
            @endif
            @if (isset($page->sections['all']))
                @foreach ($page->sections['all'] as $section)
                    @if ($section['type'] == 'repeating_2')
                        @if($loop->odd)
                            <section id="{{\Illuminate\Support\Str::slug($section['title'])}}" class="transformation-section bg-white py-140px">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-5 mx-auto" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="services-section-image">
                                                <img src="{{$section['data']['section_image'] ?? ''}}" alt="" class="services-section-img" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="w-88 ps-md-5 me-auto mx-lg-auto mb-4">
                                                @php
                                                    $rawTitle = $section['data']['section_title'] ?? '';
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
                                                <h1 class="fs-57 fw-500 text-start text-md-start">{!!$formattedTitle!!}</h1>
                                            </div>
                                            <div class="mt-3 w-88 ps-md-5 me-auto mx-lg-auto">
                                                <p class="services-section-desc color-site-gray">{{$section['data']['section_desc'] ?? ''}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @elseif ($loop->even)
                            <section id="{{\Illuminate\Support\Str::slug($section['title'])}}" class="py-110 bg-site-grey services-section-bg-grad">
                                <div class="container overflow-hidden">
                                    <div class="row">
                                        <div class="col-12 col-lg-7 ps-md-5 mx-auto mt-4 mt-md-0" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="w-88 mb-4">
                                                @php
                                                    $rawTitle = $section['data']['section_title'] ?? '';
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
                                                <h1 class="fs-57 fw-500 text-start text-white text-md-start">{!!$formattedTitle!!}</h1>
                                            </div>
                                            <div class="w-88 mt-3">
                                                <p class="services-section-desc">{{$section['data']['section_desc'] ?? ''}}</p>
                                            </div>
                                            @if ($loop->last)
                                                <a href="{{ route('contact') }}" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                                                    <img src="{{asset('images/frontend/check.svg')}}" />
                                                    <span class="ms-2 me-2 fs-14 text-white">Get in Touch</span>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-12 col-lg-5 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                                            <div class="services-section-image">
                                                <img src="{{$section['data']['section_image'] ?? ''}}" alt="" class="services-section-img" />
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