@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{asset('images/frontend/blog_details_hero.png')}}');">
        <div class="container services-hero-container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h1 class="services-hero-title text-white text-center">Cookie Policy</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details-section bg-white" style="color: #535353">
        <div class="container my-4 blog-details-container">
            
            <p class="mt-4">At Synaptekx, we use cookies to enhance your experience on our website and to provide you with personalized content. This Cookie Policy explains what cookies are, how we use them, and how you can manage them. By using our website, you consent to the use of cookies in accordance with this policy.</p>

            <h5 class="fs-32 mt-5">1. What are Cookies?</h5>
            <p class="mt-4">Cookies are small text files that are placed on your device when you visit a website. They help us recognize your device, remember your preferences, and improve your experience while using our website. Cookies do not contain personal data and cannot be used to identify you directly.</p>

            <h5 class="fs-32 mt-5">2. Types of Cookies We Use</h5>
            <p class="mt-4">We use the following types of cookies on our website:</p>
            <ul>
                <li><strong>Essential Cookies:</strong> These cookies are necessary for the proper functioning of our website. They enable basic features such as page navigation, secure log-ins, and shopping cart functionalities.</li>
                <li><strong>Performance Cookies:</strong> These cookies collect information about how visitors use our website, such as which pages are visited most often or if users encounter errors. These cookies help us improve our website’s performance.</li>
                <li><strong>Functional Cookies:</strong> These cookies allow our website to remember your preferences, such as language settings or previously entered information in forms, to provide a more personalized experience.</li>
                <li><strong>Targeting or Advertising Cookies:</strong> These cookies are used to track your browsing behavior and show you personalized ads based on your interests. They may also limit the number of times you see an ad.</li>
            </ul>

            <h5 class="fs-32 mt-5">3. How We Use Cookies</h5>
            <p class="mt-4">We use cookies to:</p>
            <ul>
                <li>Improve the functionality of our website.</li>
                <li>Understand user behavior and preferences.</li>
                <li>Optimize the website for better user experience.</li>
                <li>Provide personalized content and advertising.</li>
            </ul>

            <h5 class="fs-32 mt-5">4. How to Control and Manage Cookies</h5>
            <p class="mt-4">You can control the use of cookies on our website by adjusting the settings in your browser. Most browsers allow you to refuse cookies, accept them, or notify you when a cookie is being set. However, please note that blocking or deleting cookies may impact your experience on our website and limit certain features.</p>

            <p class="mt-4">For more information on how to manage cookies, you can visit the help section of your browser or refer to the following links:</p>
            <ul>
                <li><a href="https://www.aboutcookies.org" target="_blank" class="text-decoration-none">About Cookies</a></li>
                <li><a href="https://www.allaboutcookies.org" target="_blank" class="text-decoration-none">All About Cookies</a></li>
            </ul>

            <h5 class="fs-32 mt-5">5. Changes to Our Cookie Policy</h5>
            <p class="mt-4">We may update this Cookie Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will post any changes on this page, and the updated policy will be effective once it is posted.</p>

            <h5 class="fs-32 mt-5">6. Contact Us</h5>
            <p class="mt-4">If you have any questions or concerns about our use of cookies or this Cookie Policy, please contact us at:</p>
            <ul>
                <li><strong>Email:</strong> info@synaptekx.com</li>
                <li><strong>Phone:</strong> +44 (20) 8156 0125</li>
                <li><strong>Address:</strong> 5 St John’s Lane, London, England, EC1M 4BH</li>
                <li><strong>Website:</strong> <a href="https://synaptekx.com" target="_blank" class="text-decoration-none">synaptekx.com</a></li>
            </ul>

        </div>
    </section>
    @include('frontend.partials._footer')
</div>
@endsection
