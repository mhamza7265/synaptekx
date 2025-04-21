<!-- Mega Menu Panels -->
<div id="servicesMegaMenu" class="mega-menu-mobile">
    <div class="back-btn-container">
        <button class="back-btn" data-back="navMenu"><i class="fa-solid fa-arrow-left me-2"></i>Services</button>
        {{-- <h3 class="menu-title">Services</h3> --}}
    </div>
    @php
        $services = \App\Models\Services::all();
    @endphp
    <div class="menu-list py-4 px-3">
        <div class="container p-0">
            <div class="row justify-content-start align-items-baseline">
                @foreach ($services as $service)
                    <div class="col-12">
                        <a href="{{ route('services', ['id' => $service->id]) }}" style="text-decoration: none" class="d-lg-flex justify-content-start align-items-center gap-3">
                            <img src="{{$service->page_icon}}" />
                            <p class="m-0 font-menu-head text-black {{ (request()->routeIs('services') && request()->route('id') == $service->id) ? 'text-gradient' : 'text-black' }}">{{$service->name}}</p>
                        </a>
                        <div>
                            @foreach (data_get($service->sections, 'all', []) as $section)
                                <a href="{{ route('services', ['id' => $service->id]) . '#' . \Illuminate\Support\Str::slug(data_get($section, 'title' , '') ?? '') }}" class="mega-menu-mobile-link d-block menu-link">
                                    <i class="fa-solid fa-arrow-right me-3"></i>{{data_get($section, 'title' , '')}}
                                </a>
                            @endforeach
                            {{-- <a href="{{ route('services', ['name' => 'digital']) . '#consulting' }}" class="mega-menu-mobile-link d-block menu-link">
                                <i class="fa-solid fa-arrow-right me-3"></i>Consulting & Strategy
                            </a>
                            <a href="{{ route('services', ['name' => 'digital']) . '#transformation' }}" class="mega-menu-mobile-link d-block menu-link">
                                <i class="fa-solid fa-arrow-right me-3"></i>Transformation
                            </a>
                            <a href="{{ route('services', ['name' => 'digital']) . '#business' }}" class="mega-menu-mobile-link d-block menu-link">
                                <i class="fa-solid fa-arrow-right me-3"></i>Business Applications
                            </a>
                            <a href="{{ route('services', ['name' => 'digital']) . '#ecommerce' }}" class="mega-menu-mobile-link d-block menu-link">
                                <i class="fa-solid fa-arrow-right me-3"></i>eCommerce
                            </a>                         --}}
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-12 mt-4">
                    <a href="{{ route('services', ['name' => 'data-ai']) }}" style="text-decoration: none" class="d-lg-flex justify-content-start align-items-center gap-3">
                        <img src="{{asset('images/frontend/data_services.svg')}}" />
                        <p class="m-0 font-menu-head text-black {{ (request()->routeIs('services') && request()->route('name') === 'data-ai') ? 'text-gradient' : 'text-black' }}">Data & AI</p>
                    </a>
                    <div>
                        <a href="{{ route('services', ['name' => 'data-ai']) . '#consulting' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data Integration</a>
                        <a href="{{ route('services', ['name' => 'data-ai']) . '#transformation' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data Modernisation</a>
                        <a href="{{ route('services', ['name' => 'data-ai']) . '#business' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>API Economy</a>
                        <a href="{{ route('services', ['name' => 'data-ai']) . '#ecommerce' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data Management</a>
                        <a href="{{ route('services', ['name' => 'data-ai']) . '#generative-ai' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Generative AI</a>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <a href="{{ route('services', ['name' => 'security']) }}" style="text-decoration: none" class="d-lg-flex justify-content-start align-items-center gap-3">
                        <img src="{{asset('images/frontend/security_services.svg')}}" />
                        <p class="m-0 font-menu-head text-black {{ (request()->routeIs('services') && request()->route('name') === 'security') ? 'text-gradient' : 'text-black' }}">Security</p>
                    </a>
                    <div>
                        <a href="{{ route('services', ['name' => 'security']) . '#consulting' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Security Architecture as a Service</a>
                        <a href="{{ route('services', ['name' => 'security']) . '#transformation' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Managed SOC Operations</a>
                        <a href="{{ route('services', ['name' => 'security']) . '#business' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>vCISO</a>
                        <a href="{{ route('services', ['name' => 'security']) . '#ecommerce' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Compliance Adherence</a>
                        <a href="{{ route('services', ['name' => 'security']) . '#generative-ai' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Incident Response</a>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="row justify-content-between align-items-baseline mt-5">
                <div class="col-12 mt-4">
                    <a href="{{ route('services', ['name' => 'cloud']) }}" style="text-decoration: none" class="d-lg-flex justify-content-start align-items-center gap-3">
                        <img src="{{asset('images/frontend/cloud_services.svg')}}" />
                        <p class="m-0 font-menu-head text-black {{ (request()->routeIs('services') && request()->route('name') === 'cloud') ? 'text-gradient' : 'text-black' }}">Cloud</p>
                    </a>
                    <div>
                        <a href="{{ route('services', ['name' => 'cloud']) . '#consulting' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Migration</a>
                        <a href="{{ route('services', ['name' => 'cloud']) . '#transformation' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Modernisation</a>
                        <a href="{{ route('services', ['name' => 'cloud']) . '#business' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Economy</a>
                        <a href="{{ route('services', ['name' => 'cloud']) . '#ecommerce' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Transformation</a>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <a href="{{ route('services', ['name' => 'managed-services']) }}" style="text-decoration: none" class="d-lg-flex justify-content-start align-items-center gap-3">
                        <img src="{{asset('images/frontend/managed_services.svg')}}" />
                        <p class="m-0 font-menu-head text-black {{ (request()->routeIs('services') && request()->route('name') === 'managed-services') ? 'text-gradient' : 'text-black' }}">Managed Services</p>
                    </a>
                    <div>
                        <a href="{{ route('services', ['name' => 'managed-services']) . '#consulting' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>SOC</a>
                        <a href="{{ route('services', ['name' => 'managed-services']) . '#transformation' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>CloudOps</a>
                        <a href="{{ route('services', ['name' => 'managed-services']) . '#business' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>DevOps</a>
                        <a href="{{ route('services', ['name' => 'managed-services']) . '#ecommerce' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>MLOps</a>
                        <a href="{{ route('services', ['name' => 'managed-services']) . '#generative-ai' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>DevSecOps</a>
                        <a href="{{ route('services', ['name' => 'managed-services']) . '#AppOps' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>AppOps</a>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) }}" style="text-decoration: none" class="d-lg-flex justify-content-start align-items-center gap-3">
                        <img src="{{asset('images/frontend/talent_services.svg')}}" />
                        <p class="m-0 font-menu-head text-black {{ (request()->routeIs('services') && request()->route('name') === 'talent-acquisition-and-sourcing') ? 'text-gradient' : 'text-black' }}">Talent Acquisition & Sourcing</p>
                    </a>
                    <div>
                        <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) . '#consulting' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Digital Transformation</a>
                        <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) . '#transformation' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Cloud</a>
                        <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) . '#business' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Data & AI</a>
                        <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) . '#ecommerce' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Security</a>
                        <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) . '#generative-ai' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Software Development</a>
                        <a href="{{ route('services', ['name' => 'talent-acquisition-and-sourcing']) . '#AppOps' }}" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Product Development</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<div id="industriesMegaMenu" class="mega-menu-mobile">
    <div class="back-btn-container">
        <button class="back-btn" data-back="navMenu"><i class="fa-solid fa-arrow-left me-2"></i>Industries</button>
    </div>
    <ul class="menu-list py-4 px-3">
        <div class="container p-0">
            <div class="d-lg-flex justify-content-start align-items-start">
                <div class="row">
                    <div class="col-12">
                        <img src="{{asset('images/frontend/industries-img.svg')}}" style="border-radius: 20px; object-fit: cover; width: 100%" />
                    </div>
                </div>
                <div class="d-lg-flex justify-content-center align-items-baseline w-100 pt-4">
                    <div class="" style="width: 100%"> 
                        <p class="mega-menu-heading m-0 pb-4 border-1 border-bottom border-black">Industries</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Fintech</a>
                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Healthcare</a>
                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Business</a>
                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>eCommerce</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
</div>

<div id="resourcesMegaMenu" class="mega-menu-mobile">
    <div class="back-btn-container">
        <button class="back-btn" data-back="navMenu"><i class="fa-solid fa-arrow-left me-2"></i>Resources</button>
    </div>
    <ul class="menu-list py-4 px-3">
        <div class="container p-0">
            <div class="d-lg-flex justify-content-start align-items-start">
                <div class="row">
                    <div class="col-12">
                        <img src="{{asset('images/frontend/resources-img.svg')}}" style="border-radius: 20px; object-fit: cover; width: 100%" />
                    </div>
                </div>
                <div class="d-lg-flex justify-content-center align-items-baseline w-100 pt-4">
                    <div class="" style="width: 100%"> 
                        <p class="mega-menu-heading m-0 pb-4 border-1 border-bottom border-black">Resources</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Talent Academy</a>
                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Whitepapers</a>
                            <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Webinars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
</div>

<div id="partnersMegaMenu" class="mega-menu-mobile">
    <div class="back-btn-container">
        <button class="back-btn" data-back="navMenu"><i class="fa-solid fa-arrow-left me-2"></i>Partners</button>
    </div>
    <ul class="menu-list py-4 px-3">
        <div class="container p-0">
            <div class="d-lg-flex justify-content-start align-items-start">
                <div class="row">
                    <div class="col-12">
                        <img src="{{asset('images/frontend/partners-img.svg')}}" style="border-radius: 20px; object-fit: cover; width: 100%" />
                    </div>
                </div>
                <div class="d-lg-flex justify-content-center align-items-baseline w-100 pt-4">
                    <div class="" style="width: 100%"> 
                        <p class="mega-menu-heading m-0 pb-4 border-1 border-bottom border-black">Our Partners</p>
                        <div class="d-lg-flex justify-content-between align-items-start mt-4">
                            <div>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>AWS</a>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Microsoft</a>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Google</a>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>OpenAI</a>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Cisco</a>
                            </div>
                            <div>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Equinx</a>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Paloalto</a>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Hashicorp</a>
                                <a href="javascript:void(0)" class="d-block menu-link"><i class="fa-solid fa-arrow-right me-3"></i>Fortinet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
</div>