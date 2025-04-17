<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                @php
                    $settings = \App\Models\Setting::first();
                @endphp
                {{-- <div class="nav-item theme-text">
                    <a href="{{route('admin.dashboard')}}" class="nav-link text-gradient">Synaptekx</a>
                </div> --}}
                <a class="" href="{{route('admin.dashboard')}}">
                    <img src="{{$settings->site_logo}}" alt="logo" class="header-logo" style="width: 70%" />
                </a>
            </div>
        </div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ Request::is('admin') ? "active" : "" }}">
                <a href="{{route('admin.dashboard')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ request()->routeIs('admin.pages') ? "active" : "" }}">
                <a href="{{route('admin.pages')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        {{-- <img src="{{asset('images/admin/pages.svg')}}" style="width: 24px; height: 24px" /> --}}
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            width="800px" height="800px" viewBox="0 0 421.509 421.509"
                            xml:space="preserve">
                        <g>
                            <g>
                                <path style="fill:currentColor;" d="M29.685,173.681h32.241v-32.232H29.685V173.681z M41.396,153.16h8.82v8.812h-8.82V153.16z"/>
                                <path style="fill:currentColor;" d="M66.329,173.681h32.238v-32.232H66.329V173.681z M78.039,153.16h8.817v8.812h-8.817V153.16z"/>
                                <path style="fill:currentColor;" d="M102.976,173.681h32.232v-32.232h-32.232V173.681z M114.686,153.16h8.811v8.812h-8.811V153.16z"/>
                                <path style="fill:currentColor;" d="M185.864,35.077h-32.241v32.232h32.241V35.077z M174.153,55.599h-8.82v-8.812h8.82V55.599z"/>
                                <path style="fill:currentColor;" d="M222.499,35.077h-32.238v32.232h32.238V35.077z M210.788,55.599h-8.817v-8.812h8.817V55.599z"/>
                                <path style="fill:currentColor;" d="M259.14,35.077h-32.232v32.232h32.232V35.077z M247.43,55.599h-8.812v-8.812h8.812V55.599z"/>
                                <path style="fill:currentColor;" d="M123.932,8.789v84.812v21.56H0v84.812V412.72h297.565V306.353h123.943V93.601V8.789H123.932z
                                    M285.854,294.643v11.71v94.656H11.71V199.973h112.228h11.711h150.218v94.67H285.854z M285.854,188.262H135.643h-11.711H11.71
                                    v-61.392h112.228h11.711h150.218v61.392H285.854z M409.798,294.643H297.565v-94.67v-84.812H135.643v-21.56h274.145v201.042
                                    H409.798z M409.798,81.89H135.643V20.499h274.145V81.89H409.798z"/>
                            </g>
                        </g>
                        </svg>
                        <span>Pages</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                <a href="#blogs" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('admin.blogs.*') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div>
                        <img src="{{ asset('images/admin/blog.svg') }}" style="width: 24px; height: 24px" />
                        <span>Blogs</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ request()->routeIs('admin.blogs.*') ? 'show' : '' }}" id="blogs" data-bs-parent="#accordionExample">
                    <li class="{{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.blogs.index') }}">Blogs List</a>
                    </li>
                    <li class="{{ request()->routeIs('admin.blogs.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.blogs.create') }}">Create New</a>
                    </li>
                </ul>
            </li>
            
            <li class="menu {{ request()->routeIs('admin.settings.edit') ? "active" : "" }}">
                <a href="{{route('admin.settings.edit')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <img src="{{asset('images/admin/gears.svg')}}" style="width: 24px; height: 24px" />
                        <span>Settings</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="javascript:void(0)" id="logout-btn" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> 
                            <span>Log Out</span>
                        </div>
                    </a>
                </form>
            </li>

            {{-- <li class="menu {{ Request::is('*/app/invoice/*') ? "active" : "" }}">
                <a href="#invoice" data-bs-toggle="collapse" aria-expanded="{{ Request::is('*/app/invoice/*') ? "true" : "false" }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        <span>Pages</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('*/app/invoice/*') ? "show" : "" }}" id="invoice" data-bs-parent="#accordionExample">
                    <li class="{{ Request::routeIs('invoice-list') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/invoice/list"> List </a>
                    </li>
                    <li class="{{ Request::routeIs('invoice-preview') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/invoice/preview"> Preview </a>
                    </li>
                    <li class="{{ Request::routeIs('invoice-add') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/invoice/add"> Add </a>
                    </li>
                    <li class="{{ Request::routeIs('invoice-edit') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/invoice/edit"> Edit </a>
                    </li>                            
                </ul>
            </li>
            <li class="menu {{ Request::is('*/app/ecommerce/*') ? "active" : "" }}">
                <a href="#ecommerce" data-bs-toggle="collapse" aria-expanded="{{ Request::is('*/app/ecommerce/*') ? "true" : "false" }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span>Ecommerce</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Request::is('*/app/ecommerce/*') ? "show" : "" }}" id="ecommerce" data-bs-parent="#accordionExample">
                    <li class="{{ Request::routeIs('ecommerce-shop') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/ecommerce/shop"> Shop </a>
                    </li>
                    <li class="{{ Request::routeIs('ecommerce-detail') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/ecommerce/detail"> Product </a>
                    </li>
                    <li class="{{ Request::routeIs('ecommerce-list') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/ecommerce/list"> List </a>
                    </li>
                    <li class="{{ Request::routeIs('ecommerce-add') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/ecommerce/add"> Create </a>
                    </li>                            
                    <li class="{{ Request::routeIs('ecommerce-edit') ? 'active' : '' }}">
                        <a href="modern-light-menu/app/ecommerce/edit"> Edit </a>
                    </li>                            
                </ul>
            </li> --}}
        </ul>
    </nav>
</div>