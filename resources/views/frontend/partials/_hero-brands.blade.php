<div class="brands-container slider-wrapper mt-5">
    <div class="slider-track">
        @for ($i = 0; $i < 2; $i++) {{-- duplicate only once for seamless scroll --}}
            @foreach (data_get($page->sections, 'clients', []) as $key => $section)
                <img src="{{ $section }}"
                    data-aos="fade-up"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out"
                    data-aos-delay="{{ $loop->index }}00" 
                    class="carousel-partner-img"
                />
            @endforeach
        @endfor
    </div>
</div>