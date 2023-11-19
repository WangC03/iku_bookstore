
<script>
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
            console.log("To fix this, you can:");
            console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
            console.log("2. Find the double jQuery.js inclusion and remove it");
            return "Double Included jQuery Library";
        }
    }
</script>
<link rel='stylesheet' id='elementor-post-3161-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/post-3161d9fe.css?ver=1673491609") }}'
      media='all'/>
<link rel='stylesheet' id='e-animations-css'
      href='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/animations/animations.min12f9.css?ver=3.10.0") }}'
      media='all'/>
<link rel='stylesheet' id='rs-plugin-settings-css'
      href='{{ asset("assets/client/wp-content/plugins/revslider/public/assets/css/rs6f7b3.css?ver=6.6.8") }}'
      media='all'/>
<script src='{{ asset("assets/client/wp-content/plugins/contact-form-7/includes/swv/js/index9f31.js?ver=5.7.2") }}'
        id='swv-js'></script>
<script id='contact-form-7-js-extra'>
    var wpcf7 = {
        "api": {
            "root": "https:\/\/demo2.pavothemes.com\/bookory\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
</script>
<script src='{{ asset("assets/client/wp-content/plugins/contact-form-7/includes/js/index9f31.js?ver=5.7.2") }}'
        id='contact-form-7-js'></script>
<script src='{{ asset("assets/client/wp-content/plugins/revslider/public/assets/js/rbtools.minf7b3.js?ver=6.6.8") }}'
        defer async id='tp-tools-js'></script>
<script src='{{ asset("assets/client/wp-content/plugins/revslider/public/assets/js/rs6.minf7b3.js?ver=6.6.8") }}' defer
        async id='revmin-js'></script>
<script
    src='{{ asset("assets/client/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.mina8d6.js?ver=2.7.0-wc.7.2.3") }}'
    id='jquery-blockui-js'></script>
{{--<script id='wc-add-to-cart-js-extra'>--}}
{{--    var wc_add_to_cart_params = {--}}
{{--        "ajax_url": "\/bookory\/wp-admin\/admin-ajax.php",--}}
{{--        "wc_ajax_url": "\/bookory\/?wc-ajax=%%endpoint%%",--}}
{{--        "i18n_view_cart": "",--}}
{{--        "cart_url": "https:\/\/demo2.pavothemes.com\/bookory\/cart\/",--}}
{{--        "is_cart": "",--}}
{{--        "cart_redirect_after_add": "no"--}}
{{--    };--}}
{{--</script>--}}
<script
    src='{{ asset("assets/client/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mine374.js?ver=7.2.3") }}'
    id='wc-add-to-cart-js'></script>
<script
    src='{{ asset("assets/client/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min1e15.js?ver=2.1.4-wc.7.2.3") }}'
    id='js-cookie-js'></script>
{{--<script id='woocommerce-js-extra'>--}}
{{--    var woocommerce_params = {--}}
{{--        "ajax_url": "\/bookory\/wp-admin\/admin-ajax.php",--}}
{{--        "wc_ajax_url": "\/bookory\/?wc-ajax=%%endpoint%%"--}}
{{--    };--}}
{{--</script>--}}
<script
    src='{{ asset("assets/client/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mine374.js?ver=7.2.3") }}'
    id='woocommerce-js'></script>
{{--<script id='wc-cart-fragments-js-extra'>--}}
{{--    var wc_cart_fragments_params = {--}}
{{--        "ajax_url": "\/bookory\/wp-admin\/admin-ajax.php",--}}
{{--        "wc_ajax_url": "\/bookory\/?wc-ajax=%%endpoint%%",--}}
{{--        "cart_hash_key": "wc_cart_hash_25bf477041ebcabc59c1609869ba66ee",--}}
{{--        "fragment_name": "wc_fragments_25bf477041ebcabc59c1609869ba66ee",--}}
{{--        "request_timeout": "5000"--}}
{{--    };--}}
{{--</script>--}}
<script
    src='{{ asset("assets/client/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mine374.js?ver=7.2.3") }}'
    id='wc-cart-fragments-js'></script>
<script src='{{ asset("assets/client/wp-includes/js/underscore.mind584.js?ver=1.13.4") }}' id='underscore-js'></script>
{{--<script id={{ asset("assets/client/'wp-util-js-extra'") }}>--}}
{{--    var _wpUtilSettings = {"ajax": {"url": "\/bookory\/wp-admin\/admin-ajax.php"}};--}}
{{--</script>--}}
{{--<script src='{{ asset("assets/client/wp-includes/js/wp-util.min6fb3.js?ver=6.1.3") }}'--}}
{{--        id={{ asset("assets/client/'wp-util-js'") }}></script>--}}
{{--<script id={{ asset("assets/client/'wp-api-request-js-extra'") }}>--}}
{{--    var wpApiSettings = {--}}
{{--        "root": "https:\/\/demo2.pavothemes.com\/bookory\/wp-json\/",--}}
{{--        "nonce": "fde8a07132",--}}
{{--        "versionString": "wp\/v2\/"--}}
{{--    };--}}
{{--</script>--}}
{{--<script src='{{ asset("assets/client/wp-includes/js/api-request.min6fb3.js?ver=6.1.3") }}'--}}
{{--        id={{ asset("assets/client/'wp-api-request-js'") }}></script>--}}
{{--<script src='{{ asset("assets/client/wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9") }}'--}}
{{--        id='regenerator-runtime-js'></script>--}}
{{--<script src='{{ asset("assets/client/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0") }}'--}}
{{--        id={{ asset("assets/client/'wp-polyfill-js'") }}></script>--}}
{{--<script src='{{ asset("assets/client/wp-includes/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5") }}'--}}
{{--        id={{ asset("assets/client/'wp-hooks-js'") }}></script>--}}
{{--<script src='{{ asset("assets/client/wp-includes/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae") }}'--}}
{{--        id={{ asset("assets/client/'wp-i18n-js'") }}></script>--}}
{{--<script id={{ asset("assets/client/'wp-i18n-js-after'") }}>--}}
{{--    wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});--}}
{{--</script>--}}
<script src='{{ asset("assets/client/wp-includes/js/dist/url.minb260.js?ver=bb0ef862199bcae73aa7") }}'
        id={{ asset("assets/client/'wp-url-js'") }}></script>
{{--<script src='{{ asset("assets/client/wp-includes/js/dist/api-fetch.min0e58.js?ver=bc0029ca2c943aec5311") }}'--}}
{{--        id={{ asset("assets/client/'wp-api-fetch-js'") }}></script>--}}
{{--<script id={{ asset("assets/client/'wp-api-fetch-js-after'") }}>--}}
{{--    wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("wp-json/index.html"));--}}
{{--    wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("fde8a07132");--}}
{{--    wp.apiFetch.use(wp.apiFetch.nonceMiddleware);--}}
{{--    wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);--}}
{{--    wp.apiFetch.nonceEndpoint = "wp-admin/admin-ajaxf809.html?action=rest-nonce";--}}
{{--</script>--}}
<script id='woo-variation-swatches-js-extra'>
    var woo_variation_swatches_options = {
        "show_variation_label": "1",
        "clear_on_reselect": "",
        "variation_label_separator": ":",
        "is_mobile": "",
        "show_variation_stock": "",
        "stock_label_threshold": "5",
        "cart_redirect_after_add": "no",
        "enable_ajax_add_to_cart": "yes",
        "cart_url": "https:\/\/demo2.pavothemes.com\/bookory\/cart\/",
        "is_cart": ""
    };
</script>
<script
    src='{{ asset("assets/client/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min2926.js?ver=1667546053") }}'
    id='woo-variation-swatches-js'></script>
{{--<script id='wc-add-to-cart-variation-js-extra'>--}}
{{--    var wc_add_to_cart_variation_params = {--}}
{{--        "wc_ajax_url": "\/bookory\/?wc-ajax=%%endpoint%%",--}}
{{--        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",--}}
{{--        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",--}}
{{--        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."--}}
{{--    };--}}
{{--</script>--}}
<script
    src='{{ asset("assets/client/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mine374.js?ver=7.2.3") }}'
    id='wc-add-to-cart-variation-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/vendor/slick.minc1b4.js?ver=2.0.5") }}'
        id='slick-js'></script>
<script
    src='{{ asset("assets/client/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min7984.js?ver=3.3.4") }}'
    id='perfect-scrollbar-js'></script>
<script
    src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/vendor/jquery.magnific-popup.minc1b4.js?ver=2.0.5") }}'
    id='magnific-popup-js'></script>
<script id='woosq-frontend-js-extra'>
    var woosq_vars = {
        "ajax_url": "https:\/\/demo2.pavothemes.com\/bookory\/wp-admin\/admin-ajax.php",
        "view": "popup",
        "effect": "mfp-3d-unfold",
        "scrollbar": "yes",
        "auto_close": "yes",
        "hashchange": "no",
        "cart_redirect": "no",
        "cart_url": "https:\/\/demo2.pavothemes.com\/bookory\/cart\/",
        "close": "Close (Esc)",
        "next": "Next (Right arrow key)",
        "prev": "Previous (Left arrow key)",
        "thumbnails_effect": "no",
        "related_slick_params": "{\"slidesToShow\":2,\"slidesToScroll\":2,\"dots\":true,\"arrows\":false,\"adaptiveHeight\":true,\"rtl\":false}",
        "thumbnails_slick_params": "{\"slidesToShow\":1,\"slidesToScroll\":1,\"dots\":true,\"arrows\":true,\"adaptiveHeight\":false,\"rtl\":false}",
        "thumbnails_zoom_params": "{\"duration\":120,\"magnify\":1}"
    };
</script>
<script src='{{ asset("assets/client/wp-content/plugins/woo-smart-quick-view/assets/js/frontend7984.js?ver=3.3.4") }}'
        id='woosq-frontend-js'></script>
<script id='woosw-frontend-js-extra'>
    var woosw_vars = {
        "ajax_url": "https:\/\/demo2.pavothemes.com\/bookory\/wp-admin\/admin-ajax.php",
        "menu_action": "open_page",
        "perfect_scrollbar": "yes",
        "wishlist_url": "https:\/\/demo2.pavothemes.com\/bookory\/wishlist\/",
        "button_action": "list",
        "message_position": "right-top",
        "button_action_added": "popup",
        "empty_confirm": "This action cannot be undone. Are you sure?",
        "delete_confirm": "This action cannot be undone. Are you sure?",
        "copied_text": "Copied the wishlist link:",
        "menu_text": "Wishlist",
        "button_text": "Add to wishlist",
        "button_text_added": "Browse wishlist",
        "button_normal_icon": "woosw-icon-5",
        "button_added_icon": "woosw-icon-8",
        "button_loading_icon": "woosw-icon-4"
    };
</script>
<script src='{{ asset("assets/client/wp-content/plugins/woo-smart-wishlist/assets/js/frontend3428.js?ver=4.5.2") }}'
        id='woosw-frontend-js'></script>
<script id='bookory-theme-js-extra'>
    var bookoryAjax = {"ajaxurl": "https:\/\/demo2.pavothemes.com\/bookory\/wp-admin\/admin-ajax.php"};
</script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/frontend/mainc1b4.js?ver=2.0.5") }}'
        id='bookory-theme-js'></script>
<script src='{{ asset("assets/client/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4") }}'
        id='imagesloaded-js'></script>
<script
    src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/skip-link-focus-fix.min08e0.js?ver=20130115") }}'
    id='bookory-skip-link-focus-fix-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/frontend/search-popupc1b4.js?ver=2.0.5") }}'
        id='bookory-search-popup-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/frontend/text-editorc1b4.js?ver=2.0.5") }}'
        id='bookory-text-editor-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/frontend/nav-mobilec1b4.js?ver=2.0.5") }}'
        id='bookory-nav-mobile-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/inc/megamenu/assets/js/frontendc1b4.js?ver=2.0.5") }}'
        id='bookory-megamenu-frontend-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/frontend/loginc1b4.js?ver=2.0.5") }}'
        id='bookory-ajax-login-js'></script>
<script
    src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/woocommerce/header-cart.minc1b4.js?ver=2.0.5") }}'
    id='bookory-header-cart-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/tooltipster.bundlec1b4.js?ver=2.0.5") }}'
        id='tooltipster-js'></script>
<script
    src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/woocommerce/product-ajax-search.minc1b4.js?ver=2.0.5") }}'
    id='bookory-products-ajax-search-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/woocommerce/main.minc1b4.js?ver=2.0.5") }}'
        id='bookory-products-js'></script>
{{--<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/woocommerce/quantity.minc1b4.js?ver=2.0.5") }}'--}}
{{--        id='bookory-input-quantity-js'></script>--}}
<script
    src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/woocommerce/off-canvas.minc1b4.js?ver=2.0.5") }}'
    id='bookory-off-canvas-js'></script>
<script
    src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/woocommerce/cart-canvas.minc1b4.js?ver=2.0.5") }}'
    id='bookory-cart-canvas-js'></script>
<script src='{{ asset("assets/client/wp-content/plugins/elementor/assets/js/webpack.runtime.min12f9.js?ver=3.10.0") }}'
        id='elementor-webpack-runtime-js'></script>
<script src='{{ asset("assets/client/wp-content/plugins/elementor/assets/js/frontend-modules.min12f9.js?ver=3.10.0") }}'
        id='elementor-frontend-modules-js'></script>
<script
    src='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2") }}'
    id='elementor-waypoints-js'></script>
<script src='{{ asset("assets/client/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2") }}'
        id='jquery-ui-core-js'></script>
<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": true
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": true
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.10.0",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "kit-elements-defaults": true
        },
        "urls": {"assets": "https:\/\/demo2.pavothemes.com\/bookory\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet", "viewport_tablet_extra", "viewport_laptop"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 210,
            "title": "Bookory%20%E2%80%93%20Book%20Store%20WooCommerce%20Theme",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script src='{{ asset("assets/client/wp-content/plugins/elementor/assets/js/frontend.min12f9.js?ver=3.10.0") }}'
        id='elementor-frontend-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/elementor/productsc1b4.js?ver=2.0.5") }}'
        id='bookory-elementor-products-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/elementor/countdownc1b4.js?ver=2.0.5") }}'
        id='bookory-elementor-countdown-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/elementor/testimonialc1b4.js?ver=2.0.5") }}'
        id='bookory-elementor-testimonial-js'></script>
<script
    src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/elementor/product-categoriesc1b4.js?ver=2.0.5") }}'
    id='bookory-elementor-product-categories-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/elementor/author-listc1b4.js?ver=2.0.5") }}'
        id='bookory-elementor-author-list-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/elementor-frontendc1b4.js?ver=2.0.5") }}'
        id='bookory-elementor-frontend-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/vendor/jquery.stickyc1b4.js?ver=2.0.5") }}'
        id='elementor-sticky-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/vendor/stickyc1b4.js?ver=2.0.5") }}'
        id='bookory-elementor-sticky-js'></script>
<script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi1;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider11"] = {
        once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
        init: function () {
            window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
            if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
                window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
                if (window.revapi1initTry < 20) requestAnimationFrame(function () {
                    RS_MODULES.modules["revslider11"].init()
                });
                return;
            }
            window.revapi1 = jQuery(window.revapi1);
            if (window.revapi1.revolution == undefined) {
                revslider_showDoubleJqueryError("rev_slider_1_1");
                return;
            }
            revapi1.revolutionInit({
                revapi: "revapi1",
                DPR: "dpr",
                sliderLayout: "fullwidth",
                visibilityLevels: "1240,1025,778,480",
                gridwidth: "1550,1024,778,480",
                gridheight: "600,500,450,450",
                lazyType: "smart",
                perspective: 600,
                perspectiveType: "global",
                editorheight: "600,500,450,450",
                responsiveLevels: "1240,1025,778,480",
                progressBar: {disableProgressBar: true},
                navigation: {
                    onHoverStop: false
                },
                parallax: {
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 80, 30],
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 0
                },
                viewPort: {
                    global: true,
                    globalDist: "-200px",
                    enable: false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });

        }
    } // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) {
        window.RS_MODULES.checkMinimal();
    }
    ;
</script>
