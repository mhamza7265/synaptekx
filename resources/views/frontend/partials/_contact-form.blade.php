

<section class="home-section-2 contact-section bg-white position-relative overflow-hidden" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" style="font-family: Outfit, sans-serif;">
    <div class="container contact-container br-16px" style="background-image: url('/images/frontend/bg-gradient_3.svg'); background-repeat: no-repeat; background-position: center center; background-size: cover">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-5 col-12">
                <div class="d-flex justify-content-start align-content-center">
                    <img src="{{asset('images/frontend/contact_pill.svg')}}" draggable="false" />
                </div>
                @php
                    $settings = App\Models\Setting::first();
                    $page = App\Models\Page::where('slug', 'contact-us')->first();
                @endphp
                <h1 class="home-sect-5-title text-black mt-4" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">{{$settings->contact_form_title}}</h1>
                <p class="contact-sec-desc mt-2" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">{{$settings->contact_form_subtitle}}</p>
                <div class="row justify-content-between mt-3 overflow-hidden">
                    <div class="col-md-5 col-12" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="home-sect-5-title text-black">Locate Us</h1>
                        <p class="contact-sec-desc mt-2">{{$page->sections['details']['address'] ?? ''}}</p>
                    </div>
                    <div class="col-md-5 col-12 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="home-sect-5-title text-black">Contact</h1>
                        <span class="contact-sec-desc mt-2"><a href="mailto:{{$page->sections['details']['email'] ?? ''}}" class="decor-none" style="color: #535353ab">{{$page->sections['details']['email'] ?? ''}}</a></span>
                        <br>
                        <span class="contact-sec-desc mt-2"><a href="tel:{{$page->sections['details']['phone'] ?? ''}}" class="decor-none" style="color: #535353ab">{{$page->sections['details']['phone'] ?? ''}}</a></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                <form method="post" action="{{route('contact')}}">
                    @csrf
                    <div class="d-md-flex justify-content-between align-items-start w-100">
                        <div class="form-group w-49">
                            <input type="text" name="first_name" placeholder="First Name" class="contact-input contact-flex-input w-100" required />
                            @error('first_name')
                                <div class="text-danger">{{ $message }}</div>                            
                            @enderror
                        </div>
                        <div class="form-group w-49">
                            <input type="text" name="last_name" placeholder="Last Name" class="contact-input contact-flex-input w-100" required />
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>                            
                            @enderror
                        </div>
                        
                    </div>
                    <div class="d-md-flex justify-content-between align-items-start w-100 mt-2">
                        <div class="form-group w-49">
                            <input type="text" name="email" placeholder="Email" class="contact-input contact-flex-input w-100" required />
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>                            
                            @enderror
                        </div>
                        <div class="form-group w-49">
                            <input type="text" name="phone" placeholder="Phone" class="contact-input contact-flex-input w-100" required />
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>                            
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" class="contact-input mt-2 w-100" required />
                        @error('subject')
                            <div class="text-danger">{{ $message }}</div>                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Write your Message" class="contact-textarea mt-2 w-100" required></textarea>
                        @error('message')
                            <div class="text-danger">{{ $message }}</div>                            
                        @enderror
                    </div>

                    <!-- Google reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                    @error('g-recaptcha-response') 
                        <div class="text-danger">{{ $message }}</div> 
                    @enderror
            
                    {{-- <button type="submit" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 contact-form-btn">
                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                        <span class="ms-3 fs-14 text-black">Send Request</span>
                    </button> --}}

                    <button type="submit" class="site-action-btn d-flex justify-content-start align-items-center text-decoration-none text-black mt-4">
                        <img src="{{asset('images/frontend/check.svg')}}" />
                        <span class="ms-2 me-2 fs-14 text-black">Send Request</span>
                    </button>
                </form>
            </div>
        </div>
    </div>    
</section> 