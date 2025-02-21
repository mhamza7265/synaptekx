<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials._head')
    <body>
        @include('frontend.partials._header')
        @yield('content')
        @include('frontend.partials._footer')
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        @yield('scripts')
        <script>
            $(document).ready(function () {
                let hideTimeouts = {}; // Store individual hide timeouts

                function showMenu(navId, menuId) {
                    clearTimeout(hideTimeouts[menuId]); // Cancel hiding
                    $('.mega-menu').stop(true, true).slideUp(300); // Close other menus
                    $('.nav-item').removeClass('active'); // Remove active from all

                    $('#' + navId).addClass('active'); // Add active class to current nav item
                    $('#' + menuId).stop(true, true).slideDown(300); // Show corresponding menu
                }

                function hideMenu(menuId, navId) {
                    hideTimeouts[menuId] = setTimeout(function () {
                        $('#' + navId).removeClass('active'); // Remove active class
                        $('#' + menuId).slideUp(300); // Hide menu
                    }, 300); // Delay hiding to prevent flickering
                }

                $('.nav-item').mouseenter(function () {
                    let menuId = $(this).data('menu'); // Get menu ID
                    showMenu($(this).attr('id'), menuId);
                });

                $('.nav-item').mouseleave(function () {
                    let menuId = $(this).data('menu');
                    let navId = $(this).attr('id');
                    
                    // Delay hiding, but only if the cursor doesn't enter the menu
                    hideTimeouts[menuId] = setTimeout(function () {
                        if (!$('#' + menuId).is(':hover')) {
                            hideMenu(menuId, navId);
                        }
                    }, 300);
                });

                $('.mega-menu').mouseenter(function () {
                    let menuId = $(this).attr('id');
                    clearTimeout(hideTimeouts[menuId]); // Prevent hiding when hovering menu
                });

                $('.mega-menu').mouseleave(function () {
                    let menuId = $(this).attr('id');
                    let navId = $('.nav-item[data-menu="' + menuId + '"]').attr('id');
                    hideMenu(menuId, navId);
                });
            });

        </script>
    </body>
</html>