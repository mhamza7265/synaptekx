
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.partials._head')
<body style="overflow: {{ Request::routeIs('login') || Request::routeIs('password.request')  ? 'hidden' : 'auto' }}">


    <!-- BEGIN LOADER -->
    @include('admin.partials._loader')
    <!--  END LOADER -->

    {{--
        
    /*
    *
    *   Check if the routes are not single pages ( which does not contains sidebar or topbar  ) such as :-
    *   - 404
    *   - maintenance
    *   - authentication
    *
    */

    --}}

    {{-- @if (
            !Request::routeIs('404') &&
            !Request::routeIs('maintenance') &&
            !Request::routeIs('signin') &&
            !Request::routeIs('signup') &&
            !Request::routeIs('lockscreen') &&
            !Request::routeIs('password-reset') &&
            !Request::routeIs('2Step') &&

            // Real Logins
            !Request::routeIs('login')
        ) --}}

        @if (!Request::routeIs('login') && !Request::routeIs('register') && !Request::routeIs('password.request') && !Request::routeIs('password.reset'))
            <!--  BEGIN NAVBAR  -->
            @include('admin.partials._navbar')
            {{-- <x-navbar.style-vertical-menu classes="{{($isBoxed ? 'container-xxl' : '')}}"/> --}}
            <!--  END NAVBAR  -->
        @endif

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container " id="container">
            
            <!--  BEGIN LOADER  -->
            @include('admin.partials._overlay')
            <!--  END LOADER  -->

            @if (!Request::routeIs('login') && !Request::routeIs('register') && !Request::routeIs('password.request') && !Request::routeIs('password.reset')) 
                <!--  BEGIN SIDEBAR  -->
                @include('admin.partials._sidebar')
                <!--  END SIDEBAR  --> 
            @endif

            
            
            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content {{(Request::routeIs('login') || Request::routeIs('register') || Request::routeIs('password.request') || Request::routeIs('password.reset') ? 'ms-0 mt-0' : '')}}">
                <div class="layout-px-spacing">
                    <div class="middle-content container-xxl p-0">
                        @yield('content')
                    </div>
                </div>

                <!--  BEGIN FOOTER  -->
                @include('admin.partials._footer')
                <!--  END FOOTER  -->
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!--  END MAIN CONTAINER  -->
    {{-- @endif --}}

    @if (
            !Request::routeIs('404') &&
            !Request::routeIs('maintenance') &&
            !Request::routeIs('login') &&
            !Request::routeIs('register') &&
            !Request::routeIs('lockscreen') &&
            !Request::routeIs('password-rquest') &&
            !Request::routeIs('password-reset') &&
            !Request::routeIs('2Step')
        )
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        
        <script src="{{asset('plugins/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('plugins/mousetrap/mousetrap.min.js')}}"></script>
        <script src="{{asset('plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
        
        
        {{-- @if ($scrollspy == 1) @vite(['resources/assets/js/scrollspyNav.js']) @endif --}}
        @vite(['resources/layouts/modern-light-menu/app.js'])
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('js/admin-custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                @if (session('error'))
                    toastr.error("{{ session('error') }}", "Error", {
                        closeButton: true,
                        progressBar: true
                    });
                @endif
    
                @if (session('status'))
                    toastr.success("{{ session('status') }}", "Success", {
                        closeButton: true,
                        progressBar: true
                    });
                @endif
            }, 500); // Delay for 500ms
        });
    </script>
    
</body>
</html>