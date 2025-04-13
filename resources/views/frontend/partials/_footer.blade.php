<footer class="site-footer relative">
    <div class="d-block d-lg-flex justify-content-between align-items-start">
        <div class="footer-links-container d-block d-md-flex justify-content-start align-items-baseline">
            <div>
                <p class="footer-link-heading text-left text-md-start text-nowrap">Services</p>
                <a href="{{ route('services', ['name' => 'digital']) }}" class="d-block footer-link text-left text-md-start">Digital</a>
                <a href="{{ route('services', ['name' => 'cloud']) }}" class="d-block footer-link text-left text-md-start">Cloud</a>
                <a href="{{ route('services', ['name' => 'data-ai']) }}" class="d-block footer-link text-left text-md-start">Data & AI</a>
                <a href="{{ route('services', ['name' => 'managed-services']) }}" class="d-block footer-link text-left text-md-start">Managed Services</a>
                <a href="{{ route('services', ['name' => 'security']) }}" class="d-block footer-link text-left text-md-start">Security</a>
                <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) }}" class="d-block footer-link text-left text-md-start">Talent Acquisition & Sourcing</a>
            </div>
            
            <div class="ms-0 mt-4 mt-md-0 ms-md-5">
                <p class="footer-link-heading text-left text-md-start text-nowrap">Quick Links</p>
                <a href="{{route('blogs')}}" class="d-block footer-link text-left text-md-start">Blogs</a>
                <a href="{{route('about')}}" class="d-block footer-link text-left text-md-start">About Us </a>
                <a href="{{route('partners')}}" class="d-block footer-link text-left text-md-start">Partners </a>
                <a href="{{route('contact')}}" class="d-block footer-link text-left text-md-start">Contact</a>
            </div>
            
            <div class="ms-0 mt-4 mt-md-0 ms-md-5">
                <p class="footer-link-heading text-left text-md-start text-nowrap">Useful Links</p>
                <a href="{{route('privacy-policy')}}" class="d-block footer-link text-left text-md-start">Privacy Policy</a>
                <a href="{{route('cookie-policy')}}" class="d-block footer-link text-left text-md-start">Cookies Policy </a>
                <a href="{{route('terms-of-website-use')}}" class="d-block footer-link text-left text-md-start">Terms of Website use</a>
            </div>
        </div>
        <div>
            <a href="{{route('home')}}">
                <img src="{{asset('images/frontend/synaptekx_logo.svg')}}" alt="logo" class="footer-logo" />
            </a>
            {{-- <form class="footer-input-container d-flex justify-content-between mt-5">
                <input type="text" placeholder="Your email" class="footer-input" />
                <button type="submit" class="footer-button button-gradient">Subscribe
                    <img src="{{asset('images/frontend/arrow_diagonal.svg')}}" />
                </button>
            </form> --}}
            <div class="d-flex justify-content-around align-items-center w-100 mt-5 px-5 px-md-4">
                <div>
                    <a href="javascript:void()">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div>
                    <a href="javascript:void()">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
                <div>
                    <a href="javascript:void()">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
                <div>
                    <a href="javascript:void()">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="footer-divider mt-5">
    <div class="block d-md-flex justify-content-between align-items-center mt-4">
        <p class="footer-bottom-text text-center text-md-left">5 St John’s Lane, London, England, EC1M 4BH</p>
        <p class="footer-bottom-text text-center text-md-left">Synaptekx © <span id="current-year"></span></p>
    </div>
</footer>