<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials._head')
    <body class="site-body">
        <div class="content-container">
            @include('frontend.partials._header')
            @yield('content')
        </div>
        @include('frontend.partials._footer')
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script>
            $(document).ready(function(){
                AOS.init({
                    once: true,
                });
            })
        </script>
        @yield('scripts')
    </body>
</html>