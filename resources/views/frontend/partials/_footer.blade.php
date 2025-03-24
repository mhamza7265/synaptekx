<footer class="site-footer relative">
    <div class="d-block d-lg-flex justify-content-between align-items-start">
        <div class="footer-links-container d-block d-md-flex mx-auto justify-content-start align-items-baseline">
            <div>
                <p class="footer-link-heading text-center text-md-start">Useful Links</p>
                <a href="{{route('home')}}" class="d-block footer-link text-center text-md-start">Home</a>
                <a href="{{route('services')}}" class="d-block footer-link text-center text-md-start">Services </a>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">Resources </a>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">Industries </a>
            </div>
            <div class="ms-0 mt-4 mt-md-0 ms-md-5">
                <p class="footer-link-heading text-center text-md-start">Useful Links</p>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">About Us </a>
                <a href="{{route('partners')}}" class="d-block footer-link text-center text-md-start">Partners </a>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">Careers</a>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">Contact</a>
            </div>
            <div class="ms-0 mt-4 mt-md-0 ms-md-5">
                <p class="footer-link-heading text-center text-md-start">Useful Links</p>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">Privacy Policy</a>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">Cookies Policy </a>
                <a href="javascript:void(0)" class="d-block footer-link text-center text-md-start">Terms of Website use</a>
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
        <p class="footer-bottom-text text-center text-md-left">Synaptex © <span id="current-year">2024</span></p>
    </div>
</footer>