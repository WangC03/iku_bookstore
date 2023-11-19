<script type="text/template" id="tmpl-variation-template">
    </script>
<script type="text/template" id="tmpl-unavailable-variation-template">
    <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<script src='{{ asset("assets/client/wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1") }}'
        id='jquery-core-js'></script>
<script src='{{ asset("assets/client/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2") }}'
        id='jquery-migrate-js'></script>
<script
    src='{{ asset("assets/client/wp-content/plugins/dokan-lite/assets/vendors/izimodal/iziModal.minc480.js?ver=3.7.9") }}'
    id='dokan-modal-js'></script>
<script id='dokan-i18n-jed-js-extra'>
    var dokan = {
        "ajaxurl": "https:\/\/demo2.pavothemes.com\/bookory\/wp-admin\/admin-ajax.php",
        "nonce": "897e99f746",
        "ajax_loader": "https:\/\/demo2.pavothemes.com\/bookory\/wp-content\/plugins\/dokan-lite\/assets\/images\/ajax-loader.gif",
        "seller": {"available": "Available", "notAvailable": "Not Available"},
        "delete_confirm": "Are you sure?",
        "wrong_message": "Something went wrong. Please try again.",
        "vendor_percentage": "90",
        "commission_type": "percentage",
        "rounding_precision": "6",
        "mon_decimal_point": ".",
        "product_types": ["simple"],
        "loading_img": "https:\/\/demo2.pavothemes.com\/bookory\/wp-content\/plugins\/dokan-lite\/assets\/images\/loading.gif",
        "store_product_search_nonce": "6eda9abbdc",
        "i18n_download_permission": "Are you sure you want to revoke access to this download?",
        "i18n_download_access": "Could not grant access - the user may already have permission for this file or billing email is not set. Ensure the billing email is set, and the order has been saved.",
        "maximum_tags_select_length": "-1",
        "modal_header_color": "#F05025",
        "rest": {
            "root": "https:\/\/demo2.pavothemes.com\/bookory\/wp-json\/",
            "nonce": "fde8a07132",
            "version": "dokan\/v1"
        },
        "api": null,
        "libs": [],
        "routeComponents": {"default": null},
        "routes": [],
        "urls": {"assetsUrl": "https:\/\/demo2.pavothemes.com\/bookory\/wp-content\/plugins\/dokan-lite\/assets"}
    };
</script>
<script src='{{ asset("assets/client/wp-content/plugins/dokan-lite/assets/vendors/i18n/jedc480.js?ver=3.7.9") }}'
        id='dokan-i18n-jed-js'></script>
<script
    src='{{ asset("assets/client/wp-content/plugins/dokan-lite/assets/vendors/sweetalert2/sweetalert2.all.minacff.js?ver=1667976225") }}'
    id='dokan-sweetalert2-js'></script>
<script src='{{ asset("assets/client/wp-includes/js/dist/vendor/moment.min1bc8.js?ver=2.29.4") }}'
        id='moment-js'></script>
<script id='moment-js-after'>
    moment.updateLocale('en_US', {
        "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        "monthsShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "weekdaysShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        "week": {"dow": 1},
        "longDateFormat": {"LT": "g:i a", "LTS": null, "L": null, "LL": "F j, Y", "LLL": "F j, Y g:i a", "LLLL": null}
    });
</script>
<script id='dokan-util-helper-js-extra'>
    var dokan_helper = {
        "i18n_date_format": "F j, Y",
        "i18n_time_format": "g:i a",
        "week_starts_day": "1",
        "reverse_withdrawal": {"enabled": false},
        "timepicker_locale": {"am": "am", "pm": "pm", "AM": "AM", "PM": "PM", "hr": "hr", "hrs": "hrs", "mins": "mins"},
        "daterange_picker_local": {
            "toLabel": "To",
            "firstDay": 1,
            "fromLabel": "From",
            "separator": " - ",
            "weekLabel": "W",
            "applyLabel": "Apply",
            "cancelLabel": "Clear",
            "customRangeLabel": "Custom",
            "daysOfWeek": ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
        }
    };
</script>
<script src='{{ asset("assets/client/wp-content/plugins/dokan-lite/assets/js/helperacff.js?ver=1667976225") }}'
        id='dokan-util-helper-js'></script>
<script
    src='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min12f9.js?ver=3.10.0") }}'
    id='font-awesome-4-shim-js'></script>
<script src='{{ asset("assets/client/wp-content/themes/bookory/assets/js/vendor/jarallax6fb3.js?ver=6.1.3") }}'
        id='jarallax-js'></script>
<script>function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
                    sl = nl[i];
                    ix = i;
                }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
        //});
    };
</script>
