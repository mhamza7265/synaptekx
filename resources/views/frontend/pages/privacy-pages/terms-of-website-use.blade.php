@extends('frontend.layouts.main')
@section('content')
<div class="services-container font-sf-pro bg-white">
    <section class="hero" style="background-image: url('{{asset('images/frontend/blog_details_hero.png')}}');">
        <div class="container services-hero-container">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="services-hero-text-content" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h1 class="services-hero-title text-white text-center">Terms of Website Use</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details-section bg-white" style="color: #535353">
        <div class="container my-4 blog-details-container">
            
            <p class="mt-4">Welcome to Synaptekx! These terms and conditions outline the rules and regulations for the use of Synaptekx's website, located at synaptekx.com. By accessing and using this website, you accept and agree to be bound by these terms. If you do not agree with any part of these terms, you are prohibited from using our website.</p>

            <h5 class="fs-32 mt-5">1. Use of the Website</h5>
            <p class="mt-4">You agree to use our website for lawful purposes only. You may not use this website in any way that could damage, disable, overburden, or impair the website or interfere with any other party's use of the website. You agree not to attempt to gain unauthorized access to our website, accounts, computer systems, or networks connected to our website through hacking, password mining, or any other means.</p>

            <h5 class="fs-32 mt-5">2. Intellectual Property</h5>
            <p class="mt-4">All content, including but not limited to text, images, videos, logos, trademarks, and software on the website, is the property of Synaptekx or its content providers and is protected by intellectual property laws. You are granted a limited, non-exclusive, and non-transferable license to access and use the website for personal, non-commercial purposes. You may not reproduce, distribute, or create derivative works from any content on the website without the prior written consent of Synaptekx.</p>

            <h5 class="fs-32 mt-5">3. User Submissions</h5>
            <p class="mt-4">By submitting any content to our website, such as comments, feedback, or suggestions, you grant Synaptekx a worldwide, royalty-free, irrevocable license to use, display, modify, and distribute the content. You acknowledge that your submissions will not violate any third-party rights, including intellectual property rights or privacy rights.</p>

            <h5 class="fs-32 mt-5">4. Links to Third-Party Websites</h5>
            <p class="mt-4">Our website may contain links to third-party websites that are not owned or controlled by Synaptekx. We are not responsible for the content, privacy policies, or practices of any third-party websites. By using our website, you acknowledge and agree that Synaptekx is not responsible for any damage or loss caused by or in connection with the use of third-party websites.</p>

            <h5 class="fs-32 mt-5">5. Limitation of Liability</h5>
            <p class="mt-4">To the fullest extent permitted by law, Synaptekx is not liable for any direct, indirect, incidental, special, or consequential damages arising from your use of the website, including but not limited to errors, omissions, or interruptions in the content of the website. Your use of the website is at your own risk.</p>

            <h5 class="fs-32 mt-5">6. Changes to the Website</h5>
            <p class="mt-4">We reserve the right to modify, suspend, or discontinue the website, or any part of it, at any time without notice. Synaptekx will not be liable for any modification, suspension, or discontinuation of the website or any part of it.</p>

            <h5 class="fs-32 mt-5">7. Governing Law</h5>
            <p class="mt-4">These Terms of Website Use are governed by and construed in accordance with the laws of the United Kingdom. Any disputes arising from or related to the use of the website will be subject to the exclusive jurisdiction of the courts of the United Kingdom.</p>

            <h5 class="fs-32 mt-5">8. Changes to These Terms</h5>
            <p class="mt-4">Synaptekx reserves the right to update or modify these terms at any time. Any changes will be posted on this page, and the updated terms will be effective as soon as they are posted. We encourage you to review these terms regularly to stay informed about any updates.</p>

            <h5 class="fs-32 mt-5">9. Contact Us</h5>
            <p class="mt-4">If you have any questions or concerns about these Terms of Website Use, please contact us at:</p>
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
