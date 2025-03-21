import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/scss/layouts/modern-light-menu/light/loader.scss",
                "resources/layouts/modern-light-menu/loader.js",
                "resources/scss/layouts/modern-light-menu/light/structure.scss",
                "resources/scss/layouts/modern-light-menu/dark/structure.scss",
                // Main
                "resources/scss/light/assets/main.scss",
                "resources/scss/dark/assets/main.scss",

                // Secondary Files
                "resources/scss/light/assets/scrollspyNav.scss",
                "resources/scss/light/assets/custom.scss",

                "resources/scss/dark/assets/scrollspyNav.scss",
                "resources/scss/dark/assets/custom.scss",
                "resources/scss/light/assets/apps/blog-create.scss",
                "resources/scss/light/assets/apps/blog-post.scss",
                "resources/scss/light/assets/apps/chat.scss",
                "resources/scss/light/assets/apps/contacts.scss",
                "resources/scss/light/assets/apps/ecommerce-create.scss",
                "resources/scss/light/assets/apps/ecommerce-details.scss",
                "resources/scss/light/assets/apps/invoice-add.scss",
                "resources/scss/light/assets/apps/invoice-edit.scss",
                "resources/scss/light/assets/apps/invoice-list.scss",
                "resources/scss/light/assets/apps/invoice-preview.scss",
                "resources/scss/light/assets/apps/mailbox.scss",
                "resources/scss/light/assets/apps/notes.scss",
                "resources/scss/light/assets/apps/scrumboard.scss",
                "resources/scss/light/assets/apps/todolist.scss",

                // --- Authentication
                "resources/scss/light/assets/authentication/auth-boxed.scss",
                "resources/scss/light/assets/authentication/auth-cover.scss",

                // --- Componenets
                "resources/scss/light/assets/components/accordions.scss",
                "resources/scss/light/assets/components/carousel.scss",
                "resources/scss/light/assets/components/flags.scss",
                "resources/scss/light/assets/components/font-icons.scss",
                "resources/scss/light/assets/components/list-group.scss",
                "resources/scss/light/assets/components/media_object.scss",
                "resources/scss/light/assets/components/modal.scss",
                "resources/scss/light/assets/components/tabs.scss",
                "resources/scss/light/assets/components/timeline.scss",

                // --- Dashbaord
                "resources/scss/light/assets/dashboard/dash_1.scss",
                "resources/scss/light/assets/dashboard/dash_2.scss",

                // --- Elements
                "resources/scss/light/assets/elements/alert.scss",
                "resources/scss/light/assets/elements/color_library.scss",
                "resources/scss/light/assets/elements/custom-pagination.scss",
                "resources/scss/light/assets/elements/custom-tree_view.scss",
                "resources/scss/light/assets/elements/custom-typography.scss",
                "resources/scss/light/assets/elements/infobox.scss",
                "resources/scss/light/assets/elements/popover.scss",
                "resources/scss/light/assets/elements/search.scss",
                "resources/scss/light/assets/elements/tooltip.scss",

                // --- Forms
                "resources/scss/light/assets/forms/switches.scss",

                // --- Pages
                "resources/scss/light/assets/pages/contact_us.scss",
                "resources/scss/light/assets/pages/faq.scss",
                "resources/scss/light/assets/pages/knowledge_base.scss",
                "resources/scss/light/assets/pages/error/error.scss",
                "resources/scss/light/assets/pages/error/style-maintanence.scss",

                // --- Users
                "resources/scss/light/assets/users/account-setting.scss",
                "resources/scss/light/assets/users/user-profile.scss",

                // --- Widgets
                "resources/scss/light/assets/widgets/modules-widgets.scss",

                /**
                 * Dark
                 */

                // --- Apps
                "resources/scss/dark/assets/apps/blog-create.scss",
                "resources/scss/dark/assets/apps/blog-post.scss",
                "resources/scss/dark/assets/apps/chat.scss",
                "resources/scss/dark/assets/apps/contacts.scss",
                "resources/scss/dark/assets/apps/ecommerce-create.scss",
                "resources/scss/dark/assets/apps/ecommerce-details.scss",
                "resources/scss/dark/assets/apps/invoice-add.scss",
                "resources/scss/dark/assets/apps/invoice-edit.scss",
                "resources/scss/dark/assets/apps/invoice-list.scss",
                "resources/scss/dark/assets/apps/invoice-preview.scss",
                "resources/scss/dark/assets/apps/mailbox.scss",
                "resources/scss/dark/assets/apps/notes.scss",
                "resources/scss/dark/assets/apps/scrumboard.scss",
                "resources/scss/dark/assets/apps/todolist.scss",

                // --- Authentication
                "resources/scss/dark/assets/authentication/auth-boxed.scss",
                "resources/scss/dark/assets/authentication/auth-cover.scss",

                // --- Componenets
                "resources/scss/dark/assets/components/accordions.scss",
                "resources/scss/dark/assets/components/carousel.scss",
                "resources/scss/dark/assets/components/flags.scss",
                "resources/scss/dark/assets/components/font-icons.scss",
                "resources/scss/dark/assets/components/list-group.scss",
                "resources/scss/dark/assets/components/media_object.scss",
                "resources/scss/dark/assets/components/modal.scss",
                "resources/scss/dark/assets/components/tabs.scss",
                "resources/scss/dark/assets/components/timeline.scss",

                // --- Dashbaord
                "resources/scss/dark/assets/dashboard/dash_1.scss",
                "resources/scss/dark/assets/dashboard/dash_2.scss",

                // --- Elements
                "resources/scss/dark/assets/elements/alert.scss",
                "resources/scss/dark/assets/elements/color_library.scss",
                "resources/scss/dark/assets/elements/custom-pagination.scss",
                "resources/scss/dark/assets/elements/custom-tree_view.scss",
                "resources/scss/dark/assets/elements/custom-typography.scss",
                "resources/scss/dark/assets/elements/infobox.scss",
                "resources/scss/dark/assets/elements/popover.scss",
                "resources/scss/dark/assets/elements/search.scss",
                "resources/scss/dark/assets/elements/tooltip.scss",

                // --- Forms
                "resources/scss/dark/assets/forms/switches.scss",

                // --- Pages
                "resources/scss/dark/assets/pages/contact_us.scss",
                "resources/scss/dark/assets/pages/faq.scss",
                "resources/scss/dark/assets/pages/knowledge_base.scss",
                "resources/scss/dark/assets/pages/error/error.scss",
                "resources/scss/dark/assets/pages/error/style-maintanence.scss",

                // --- Users
                "resources/scss/dark/assets/users/account-setting.scss",
                "resources/scss/dark/assets/users/user-profile.scss",

                // --- Widgets
                "resources/scss/dark/assets/widgets/modules-widgets.scss",

                /**
                 * =======================
                 *      Assets JS Files
                 * =======================
                 */

                // Outer Files
                "resources/assets/js/custom.js",
                "resources/assets/js/scrollspyNav.js",

                // APPS
                "resources/assets/js/apps/blog-create.js",
                "resources/assets/js/apps/chat.js",
                "resources/assets/js/apps/contact.js",
                "resources/assets/js/apps/ecommerce-create.js",
                "resources/assets/js/apps/ecommerce-details.js",
                "resources/assets/js/apps/invoice-add.js",
                "resources/assets/js/apps/invoice-edit.js",
                "resources/assets/js/apps/invoice-list.js",
                "resources/assets/js/apps/invoice-preview.js",
                "resources/assets/js/apps/mailbox.js",
                "resources/assets/js/apps/notes.js",
                "resources/assets/js/apps/scrumboard.js",
                "resources/assets/js/apps/todoList.js",

                // Auth
                "resources/assets/js/authentication/auth-cover.js",
                "resources/assets/js/authentication/form-2.js",
                "resources/assets/js/authentication/2-Step-Verification.js",

                // Components
                "resources/assets/js/components/notification/custom-snackbar.js",
                "resources/assets/js/components/custom-carousel.js",

                // Dashboard
                "resources/assets/js/dashboard/dash_1.js",
                "resources/assets/js/dashboard/dash_2.js",

                // Elements
                "resources/assets/js/elements/popovers.js",
                "resources/assets/js/elements/custom-search.js",
                "resources/assets/js/elements/tooltip.js",

                // Forms
                "resources/assets/js/forms/bootstrap_validation/bs_validation_script.js",
                "resources/assets/js/forms/custom-clipboard.js",

                // Pages
                "resources/assets/js/pages/faq.js",
                "resources/assets/js/pages/knowledge-base.js",

                // Users
                "resources/assets/js/users/account-settings.js",

                // Widget
                "resources/assets/js/widgets/modules-widgets.js",

                "resources/assets/js/widgets/_wSix.js",
                "resources/assets/js/widgets/_wChartThree.js",
                "resources/assets/js/widgets/_wHybridOne.js",
                "resources/assets/js/widgets/_wActivityFive.js",

                "resources/assets/js/widgets/_wTwo.js",
                "resources/assets/js/widgets/_wOne.js",
                "resources/assets/js/widgets/_wChartOne.js",
                "resources/assets/js/widgets/_wChartTwo.js",
                "resources/assets/js/widgets/_wActivityFour.js",
                "resources/scss/light/plugins/apex/custom-apexcharts.scss",
                "resources/scss/light/plugins/autocomplete/css/custom-autoComplete.scss",
                "resources/scss/light/plugins/bootstrap-range-Slider/bootstrap-slider.scss",
                "resources/scss/light/plugins/bootstrap-touchspin/custom-jquery.bootstrap-touchspin.min.scss",
                "resources/scss/light/plugins/clipboard/custom-clipboard.scss",
                "resources/scss/light/plugins/drag-and-drop/dragula/example.scss",
                "resources/scss/light/plugins/editors/markdown/simplemde.min.scss",
                "resources/scss/light/plugins/editors/quill/quill.snow.scss",
                "resources/scss/light/plugins/filepond/custom-filepond.scss",
                "resources/scss/light/plugins/flatpickr/custom-flatpickr.scss",
                "resources/scss/light/plugins/fullcalendar/custom-fullcalendar.scss",
                "resources/scss/light/plugins/loaders/custom-loader.scss",
                "resources/scss/light/plugins/notification/snackbar/custom-snackbar.scss",
                "resources/scss/light/plugins/noUiSlider/custom-nouiSlider.scss",
                "resources/scss/light/plugins/perfect-scrollbar/perfect-scrollbar.scss",
                "resources/scss/light/plugins/pricing-table/css/component.scss",
                "resources/scss/light/plugins/splide/custom-splide.min.scss",
                "resources/scss/light/plugins/stepper/custom-bsStepper.scss",
                "resources/scss/light/plugins/sweetalerts2/custom-sweetalert.scss",
                "resources/scss/light/plugins/table/datatable/dt-global_style.scss",
                "resources/scss/light/plugins/table/datatable/custom_dt_custom.scss",
                "resources/scss/light/plugins/table/datatable/custom_dt_miscellaneous.scss",
                "resources/scss/light/plugins/tagify/custom-tagify.scss",
                "resources/scss/light/plugins/tomSelect/custom-tomSelect.scss",
            ],
            refresh: true,
        }),
    ],
});
