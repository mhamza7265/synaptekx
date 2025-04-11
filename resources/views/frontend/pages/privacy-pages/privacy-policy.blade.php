@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{asset('images/frontend/blog_details_hero.png')}}');">
        <div class="container services-hero-container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h1 class="services-hero-title text-white text-center">Privacy Policy</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details-section bg-white" style="color: #535353">
        <div class="container my-4 blog-details-container">
            
            <p class="mt-4">At Synaptekx, we respect your privacy and are committed to protecting your personal data. This Privacy Policy outlines how we collect, use, and protect the information you provide when you visit our website, synaptekx.com, or use our services. By using our website, you consent to the practices described in this policy.</p>

            <h5 class="fs-32 mt-5">1. Information We Collect</h5>
            <p class="mt-4">We collect information from you when you visit our website, subscribe to our newsletter, or contact us through forms. The types of information we may collect include:</p>
            <ul>
                <li>Personal Information: This includes your name, email address, phone number, and any other personal details you provide us when you fill out contact forms or sign up for newsletters.</li>
                <li>Technical Data: We collect information related to your device and usage of our website, such as your IP address, browser type, device information, and how you interact with our website.</li>
                <li>Cookies: We use cookies to enhance your experience on our website. Cookies help us remember your preferences and improve site performance.</li>
            </ul>

            <h5 class="fs-32 mt-5">2. How We Use Your Information</h5>
            <p class="mt-4">The information we collect is used for the following purposes:</p>
            <ul>
                <li>To personalize your experience and respond to your inquiries and requests.</li>
                <li>To improve our website, services, and user experience based on the information and feedback we receive.</li>
                <li>To send periodic emails, updates, and information related to your interests, as well as promotional content related to our services.</li>
                <li>To comply with legal requirements and protect the rights and safety of Synaptekx and its users.</li>
            </ul>

            <h5 class="fs-32 mt-5">3. Data Protection</h5>
            <p class="mt-4">We take reasonable steps to protect the information you share with us. We use a variety of security technologies and procedures to protect your personal information from unauthorized access, use, or disclosure. However, please note that no method of transmitting data over the internet is 100% secure, and we cannot guarantee absolute security.</p>

            <h5 class="fs-32 mt-5">4. Sharing Your Information</h5>
            <p class="mt-4">We do not sell, trade, or rent your personal information to third parties. However, we may share your data with trusted third parties who assist us in operating our website, conducting our business, or providing services to you. These third parties are obligated to keep your information confidential.</p>

            <h5 class="fs-32 mt-5">5. Your Data Protection Rights</h5>
            <p class="mt-4">Under certain conditions, you have the right to:</p>
            <ul>
                <li>Access the personal data we hold about you.</li>
                <li>Request that we correct any inaccuracies in your personal data.</li>
                <li>Request that we delete your personal data.</li>
                <li>Object to the processing of your personal data or request restriction on how we use your information.</li>
            </ul>
            <p class="mt-4">If you wish to exercise any of these rights, please contact us using the details provided below.</p>

            <h5 class="fs-32 mt-5">6. Changes to Our Privacy Policy</h5>
            <p class="mt-4">We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will post any changes to this page, and the updated policy will be effective once it is posted.</p>

            <h5 class="fs-32 mt-5">7. Contact Us</h5>
            <p class="mt-4">If you have any questions regarding this Privacy Policy or how we handle your personal data, please feel free to contact us at:</p>
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
