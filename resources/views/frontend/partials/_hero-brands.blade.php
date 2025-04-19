{{-- <div class="brands-container">
    <div class="d-flex justify-content-between align-items-center">
        <img src="{{asset('images/frontend/aws_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" />
        <img src="{{asset('images/frontend/hashicorp_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100" />
        <img src="{{asset('images/frontend/microsoft_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200" />
        <img src="{{asset('images/frontend/google_logo_1.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300" />
        <img src="{{asset('images/frontend/cisco_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400" />
        <img src="{{asset('images/frontend/equinix_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500" />
        <img src="{{asset('images/frontend/fortinet_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600" />
        <img src="{{asset('images/frontend/paloalto_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="700" />
    </div>
</div> --}}

{{-- <div class="keen-slider auto-slider brands-container">
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/aws_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" />
    </div>
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/hashicorp_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100" />
    </div>
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/microsoft_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200" />
    </div>
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/google_logo_1.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300" />
    </div>
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/cisco_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400" />
    </div>
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/equinix_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500" />
    </div>
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/fortinet_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600" />
    </div>
    <div class="keen-slider__slide">
        <img src="{{asset('images/frontend/paloalto_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="700" />
    </div>
</div> --}}

<div class="brands-container slider-wrapper">
    <div class="slider-track">
        @foreach ($partners->sections['all'] as $section)
            @if ($section['type'] == 'repeating' && $section['group'] == 'all_partners')
                @for ($i = 0; $i < 3; $i++)
                    @foreach ($section['data']['partners'] as $partner)
                        <img src="{{ $partner['partner_logo'] }}"
                            data-aos="fade-up"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out"
                            data-aos-delay="{{ $loop->index }}00" 
                            class="carousel-partner-img"
                            />
                    @endforeach
                @endfor
            @endif
        @endforeach
        {{-- <img src="{{asset('images/frontend/aws_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" />
        <img src="{{asset('images/frontend/hashicorp_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100" />
        <img src="{{asset('images/frontend/microsoft_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200" />
        <img src="{{asset('images/frontend/google_logo_1.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300" />
        <img src="{{asset('images/frontend/cisco_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400" />
        <img src="{{asset('images/frontend/equinix_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500" />
        <img src="{{asset('images/frontend/fortinet_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600" />
        <img src="{{asset('images/frontend/paloalto_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="700" /> --}}
        {{-- duplicate --}}
        {{-- <img src="{{asset('images/frontend/aws_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" />
        <img src="{{asset('images/frontend/hashicorp_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100" />
        <img src="{{asset('images/frontend/microsoft_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200" />
        <img src="{{asset('images/frontend/google_logo_1.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300" />
        <img src="{{asset('images/frontend/cisco_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="400" />
        <img src="{{asset('images/frontend/equinix_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="500" />
        <img src="{{asset('images/frontend/fortinet_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="600" />
        <img src="{{asset('images/frontend/paloalto_logo.svg')}}" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="700" /> --}}
    </div>
</div>