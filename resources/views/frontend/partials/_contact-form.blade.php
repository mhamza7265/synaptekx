

<section class="home-section-2 contact-section bg-white position-relative overflow-hidden" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" style="font-family: Outfit, sans-serif;">
    <div class="container contact-container br-16px" style="background-image: url('/images/frontend/bg-gradient_3.svg'); background-repeat: no-repeat; background-position: center center; background-size: cover">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-5 col-12">
                <div class="d-flex justify-content-start align-content-center">
                    <img src="{{asset('images/frontend/contact_pill.svg')}}" />
                </div>
                <h1 class="home-sect-5-title text-black mt-4" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Let’s redefine what’s possible together</h1>
                <p class="contact-sec-desc mt-2" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="100">Get in touch, and discover how our AI-driven expertise can propel your next phase of digital growth.</p>
                <div class="row justify-content-between mt-3 overflow-hidden">
                    <div class="col-md-5 col-12" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="home-sect-5-title text-black">Locate Us</h1>
                        <p class="contact-sec-desc mt-2">5 St John’s Lane, London, England, EC1M 4BH</p>
                    </div>
                    <div class="col-md-5 col-12" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <h1 class="home-sect-5-title text-black">Contact</h1>
                        <span class="contact-sec-desc mt-2"><a href="mailto:info@synaptekx.com" class="decor-none" style="color: #535353ab">info@synaptekx.com</a></span>
                        <br>
                        <span class="contact-sec-desc mt-2"><a href="tel:+44 20 8156 0125" class="decor-none" style="color: #535353ab">+44 (20) 8156 0125</a></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                <form method="post" action="{{route('contact')}}">
                    @csrf
                    <div class="d-md-flex justify-content-between align-items-start w-100">
                        <input type="text" name="first_name" placeholder="First Name" class="contact-input contact-flex-input" required />
                        <input type="text" name="last_name" placeholder="Last Name" class="contact-input contact-flex-input" required />
                    </div>
                    <div class="d-md-flex justify-content-between align-items-start w-100 mt-2">
                        <input type="text" name="email" placeholder="Email" class="contact-input contact-flex-input" required />
                        <input type="text" name="phone" placeholder="Phone" class="contact-input contact-flex-input" required />
                    </div>
                    <input type="text" name="subject" placeholder="Subject" class="contact-input mt-2 w-100" required />
                    <textarea name="message" placeholder="Write your Message" class="contact-textarea mt-2 w-100" required></textarea>
            
                    <button type="submit" class="d-flex justify-content-start align-items-center text-decoration-none text-black mt-4 contact-form-btn">
                        <img src="{{asset('images/frontend/arrow_left_filled.svg')}}" />
                        <span class="ms-3 fs-14 text-black">Send Request</span>
                    </button>
                </form>
            </div>
        </div>
    </div>    
</section> 