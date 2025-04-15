<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials._head')
    <body class="site-body" style="font-family: Outfit, sans-serif">
        @include('frontend.partials._header')
        <div class="content-container">
            @yield('content')
        </div>
        <button id="scrollToTop">
            <i class="fa fa-chevron-up"></i>
        </button>        
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <!-- Google reCAPTCHA JS -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            $(document).ready(function(){
                AOS.init({
                    once: true,
                });

                @if (session('error'))
                if (!window.toastrDisplayed) {
                    toastr.error("{{ session('error') }}");
                    window.toastrDisplayed = true;
                }
                @endif
            })
            
            $(document).ready(function() {
                $('img').attr('draggable', 'false');
            });
            
        </script>
        @yield('scripts')
    </body>
</html>