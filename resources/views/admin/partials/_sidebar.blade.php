<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-text">
                    <a href="{{route('admin.dashboard')}}" class="nav-link text-gradient">Synaptekx</a>
                </div>
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
                        <img src="{{asset('images/admin/pages.svg')}}" style="width: 24px; height: 24px" />
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
            
            <li class="menu {{ request()->routeIs('*/dashboard/*') ? "active" : "" }}">
                <a href="{{route('admin.dashboard')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <img src="{{asset('images/admin/gears.svg')}}" style="width: 24px; height: 24px" />
                        <span>Settings</span>
                    </div>
                </a>
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