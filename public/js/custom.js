$(document).ready(function () {
    let hideTimeouts = {}; // Store individual hide timeouts

    function showMenu(navId, menuId) {
        clearTimeout(hideTimeouts[menuId]); // Cancel hiding
        $("#frontend-site-header").addClass("background-white");
        $(".mega-menu").stop(true, true).slideUp(300); // Close other menus
        $(".nav-item").removeClass("active"); // Remove active from all

        $("#" + navId).addClass("active"); // Add active class to current nav item
        $("#" + menuId)
            .stop(true, true)
            .slideDown(300); // Show corresponding menu
    }

    function hideMenu(menuId, navId) {
        // Ensure menuId and navId are valid before using them in jQuery selectors
        if (!menuId || $("#" + menuId).length === 0) menuId = null;
        if (!navId || $("#" + navId).length === 0) navId = null;

        hideTimeouts[menuId] = setTimeout(function () {
            if (navId) {
                $("#" + navId).removeClass("active"); // Remove active class
            }
            if (menuId) {
                $("#" + menuId).slideUp(300); // Hide menu
            }

            // Remove background only if mouse is outside both menus and header
            if (!$(".mega-menu:hover").length && !$(".nav-item:hover").length) {
                $("#frontend-site-header").removeClass("background-white");
            }
        }, 10); // Delay hiding to prevent flickering
    }

    $(".nav-item").mouseenter(function () {
        let menuId = $(this).data("menu"); // Get menu ID
        menuId && showMenu($(this).attr("id"), menuId);
        if (!menuId) $("#frontend-site-header").removeClass("background-white");
    });

    $(".nav-item").mouseleave(function () {
        let menuId = $(this).data("menu");
        let navId = $(this).attr("id");

        // Ensure menuId is not empty or undefined
        if (!menuId) {
            hideMenu("", navId);
            return;
        }

        // Delay hiding, but only if the cursor doesn't enter the menu
        hideTimeouts[menuId] = setTimeout(function () {
            if (!$("#" + menuId).is(":hover")) {
                hideMenu(menuId, navId);
            }
        }, 10);
    });

    $(".mega-menu").mouseenter(function () {
        let menuId = $(this).attr("id");
        clearTimeout(hideTimeouts[menuId]); // Prevent hiding when hovering menu
    });

    $(".mega-menu").mouseleave(function () {
        let menuId = $(this).attr("id");
        let navId = $('.nav-item[data-menu="' + menuId + '"]').attr("id");
        hideMenu(menuId, navId);
    });

    $("#frontend-site-header").mouseleave(function () {
        setTimeout(function () {
            if (!$(".mega-menu:hover").length && !$(".nav-item:hover").length) {
                $("#frontend-site-header").removeClass("background-white");
            }
        }, 10); // Small delay to prevent flickering
    });

    // Show/hide button on scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $("#scrollToTop").fadeIn();
        } else {
            $("#scrollToTop").fadeOut();
        }
    });

    // Scroll to top when clicked
    $("#scrollToTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 500);
    });

    $("#mobile-navbar-toggle").click(function () {
        $(this).toggleClass("open");
        $("#mobile-navbar").toggleClass("bg-light");
    });

    $("#current-year").text(new Date().getFullYear());

    $(window).on("scroll", function () {
        $(window).on("scroll", function () {
            let scrollPercentage =
                ($(window).scrollTop() /
                    ($(document).height() - $(window).height())) *
                3000;
            let gradientPosition = 100 - (scrollPercentage % 100) + "%";

            $(".empower-title, .sticky-gradient-text").css(
                "--gradient-position",
                gradientPosition
            );
        });
    });

    // Open Navigation Panel
    $("#openNav").click(function () {
        $("#navMenu").css("transform", "translateX(100%)");
        $("body").css("overflow-y", "hidden");
    });

    // Close Navigation Panel
    $("#closeNav").click(function () {
        $("#navMenu").css("transform", "translateX(-100%)");
        $("body").css("overflow-y", "auto");
    });

    // Open Mega Menu & Close Nav Menu
    $(".nav-link-item").click(function () {
        let targetMenu = "#" + $(this).data("menu");
        $("#navMenu").css("transform", "translateX(-100%)");
        $(targetMenu).css("transform", "translateX(-100%)");
    });

    // Back to Navigation Menu
    $(".back-btn").click(function () {
        let targetBack = "#" + $(this).data("back");
        $(".mega-menu-mobile").css("transform", "translateX(100%)");
        $(targetBack).css("transform", "translateX(100%)");
    });
});
