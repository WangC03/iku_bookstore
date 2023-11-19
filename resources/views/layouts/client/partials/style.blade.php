<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<link rel="dns-prefetch" href="http://s.w.org/">
<link rel='dns-prefetch' href='http://demo2.pavothemes.com/'/>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
<script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {"concatemoji": "https:\/\/demo2.pavothemes.com\/bookory\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.3"}
    };
    /*! This file is auto-generated */
    !function (e, a, t) {
        var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode,
                e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }

        for (o = Array("flag", "emoji"), t.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
            if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case"flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                case"emoji":
                    return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
            t.DOMReady = !0
        }, t.supports.everything || (n = function () {
            t.readyCallback()
        }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
            "complete" === a.readyState && t.readyCallback()
        })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
    }(window, document, window._wpemojiSettings);
</script>
<style>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel='stylesheet' id='dashicons-css'
      href='{{ asset("assets/client/wp-includes/css/dashicons.min6fb3.css?ver=6.1.3") }}' media='all'/>
<link rel='stylesheet'
      id={{ asset("assets/client/'wp-block-library-css'") }} href='{{ asset("assets/client/wp-includes/css/dist/block-library/style.min6fb3.css?ver=6.1.3") }}'
      media='all'/>
<style id={{ asset("assets/client/'wp-block-library-theme-inline-css'") }}>
    .wp-block-audio figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-audio figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-audio {
        margin: 0 0 1em
    }

    .wp-block-code {
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: Menlo, Consolas, monaco, monospace;
        padding: .8em 1em
    }

    .wp-block-embed figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-embed figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-embed {
        margin: 0 0 1em
    }

    .blocks-gallery-caption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .blocks-gallery-caption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-image figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image {
        margin: 0 0 1em
    }

    .wp-block-pullquote {
        border-top: 4px solid;
        border-bottom: 4px solid;
        margin-bottom: 1.75em;
        color: currentColor
    }

    .wp-block-pullquote__citation, .wp-block-pullquote cite, .wp-block-pullquote footer {
        color: currentColor;
        text-transform: uppercase;
        font-size: .8125em;
        font-style: normal
    }

    .wp-block-quote {
        border-left: .25em solid;
        margin: 0 0 1.75em;
        padding-left: 1em
    }

    .wp-block-quote cite, .wp-block-quote footer {
        color: currentColor;
        font-size: .8125em;
        position: relative;
        font-style: normal
    }

    .wp-block-quote.has-text-align-right {
        border-left: none;
        border-right: .25em solid;
        padding-left: 0;
        padding-right: 1em
    }

    .wp-block-quote.has-text-align-center {
        border: none;
        padding-left: 0
    }

    .wp-block-quote.is-large, .wp-block-quote.is-style-large, .wp-block-quote.is-style-plain {
        border: none
    }

    .wp-block-search .wp-block-search__label {
        font-weight: 700
    }

    .wp-block-search__button {
        border: 1px solid #ccc;
        padding: .375em .625em
    }

    :where(.wp-block-group.has-background) {
        padding: 1.25em 2.375em
    }

    .wp-block-separator.has-css-opacity {
        opacity: .4
    }

    .wp-block-separator {
        border: none;
        border-bottom: 2px solid;
        margin-left: auto;
        margin-right: auto
    }

    .wp-block-separator.has-alpha-channel-opacity {
        opacity: 1
    }

    .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
        width: 100px
    }

    .wp-block-separator.has-background:not(.is-style-dots) {
        border-bottom: none;
        height: 1px
    }

    .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
        height: 2px
    }

    .wp-block-table {
        margin: "0 0 1em 0"
    }

    .wp-block-table thead {
        border-bottom: 3px solid
    }

    .wp-block-table tfoot {
        border-top: 3px solid
    }

    .wp-block-table td, .wp-block-table th {
        word-break: normal
    }

    .wp-block-table figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-table figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-video figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video {
        margin: 0 0 1em
    }

    .wp-block-template-part.has-background {
        padding: 1.25em 2.375em;
        margin-top: 0;
        margin-bottom: 0
    }
</style>
<link rel='stylesheet' id='wc-blocks-vendors-style-css'
      href='{{ asset("assets/client/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-stylecc96.css?ver=8.9.4") }}'
      media='all'/>
<link rel='stylesheet' id='wc-blocks-style-css'
      href='{{ asset("assets/client/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-stylecc96.css?ver=8.9.4") }}'
      media='all'/>
<link rel='stylesheet' id='bookory-gutenberg-blocks-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/assets/css/base/gutenberg-blocksc1b4.css?ver=2.0.5") }}'
      media='all'/>
<link rel='stylesheet' id='classic-theme-styles-css'
      href='{{ asset("assets/client/wp-includes/css/classic-themes.min68b3.css?ver=1") }}' media='all'/>
<style id='global-styles-inline-css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 14px;
        --wp--preset--font-size--medium: 23px;
        --wp--preset--font-size--large: 26px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 37px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex > * {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
</style>
<link rel='stylesheet' id='contact-form-7-css'
      href='{{ asset("assets/client/wp-content/plugins/contact-form-7/includes/css/styles9f31.css?ver=5.7.2") }}'
      media='all'/>
<link rel='stylesheet' id='mas-wc-brands-style-css'
      href='{{ asset("assets/client/wp-content/plugins/mas-woocommerce-brands/assets/css/style0ba6.css?ver=1.0.6") }}'
      media='all'/>
<link rel='stylesheet' id='-css'
      href='{{ asset("assets/client/wp-content/plugins/opal-demo/style6fb3.css?ver=6.1.3") }}' media='all'/>
<style id='woocommerce-inline-inline-css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
</style>
<link rel='stylesheet' id='hfe-style-css'
      href='{{ asset("assets/client/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor1f62.css?ver=1.6.13") }}'
      media='all'/>
<link rel='stylesheet' id='elementor-icons-css'
      href='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.mine127.css?ver=5.17.0") }}'
      media='all'/>
<link rel='stylesheet' id='elementor-frontend-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/custom-frontend.min657d.css?ver=1673491607") }}'
      media='all'/>
<link rel='stylesheet' id='elementor-post-4-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/post-4657d.css?ver=1673491607") }}' media='all'/>
<link rel='stylesheet' id='font-awesome-5-all-css'
      href='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min12f9.css?ver=3.10.0") }}'
      media='all'/>
<link rel='stylesheet' id='font-awesome-4-shim-css'
      href='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min12f9.css?ver=3.10.0") }}'
      media='all'/>
<link rel='stylesheet' id='elementor-global-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/global64f4.css?ver=1673491608") }}' media='all'/>
<link rel='stylesheet' id='elementor-post-210-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/post-21064f4.css?ver=1673491608") }}' media='all'/>
<link rel='stylesheet' id='hfe-widgets-style-css'
      href='{{ asset("assets/client/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend1f62.css?ver=1.6.13") }}'
      media='all'/>
<link rel='stylesheet' id='elementor-post-125-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/post-125d9fe.css?ver=1673491609") }}' media='all'/>
<link rel='stylesheet' id='elementor-post-329-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/post-329d9fe.css?ver=1673491609") }}' media='all'/>
<link rel='stylesheet' id='elementor-post-751-css'
      href='{{ asset("assets/client/wp-content/uploads/elementor/css/post-751d9fe.css?ver=1673491609") }}' media='all'/>
<link rel='stylesheet' id='woo-variation-swatches-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min5263.css?ver=1659432279") }}'
      media='all'/>
<style id='woo-variation-swatches-inline-css'>
    :root {
        --wvs-tick: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 2px rgb(0 0 0 / .8))' xmlns='http://www.w3.org/2000/svg'  viewBox='0 0 30 30'%3E%3Cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M4 16L11 23 27 7'/%3E%3C/svg%3E");

        --wvs-cross: url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 5px rgb(255 255 255 / .6))' xmlns='http://www.w3.org/2000/svg' width='72px' height='72px' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23ff0000' stroke-linecap='round' stroke-width='0.6' d='M5 5L19 19M19 5L5 19'/%3E%3C/svg%3E");
        --wvs-single-product-item-width: 30px;
        --wvs-single-product-item-height: 30px;
        --wvs-single-product-item-font-size: 16px
    }
</style>
<link rel='stylesheet' id='slick-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick6fb3.css?ver=6.1.3") }}'
      media='all'/>
<link rel='stylesheet' id='perfect-scrollbar-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min6fb3.css?ver=6.1.3") }}'
      media='all'/>
<link rel='stylesheet' id='perfect-scrollbar-wpc-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme6fb3.css?ver=6.1.3") }}'
      media='all'/>
<link rel='stylesheet' id='magnific-popup-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/assets/css/libs/magnific-popupc1b4.css?ver=2.0.5") }}'
      media='all'/>
<link rel='stylesheet' id='woosq-feather-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-smart-quick-view/assets/libs/feather/feather6fb3.css?ver=6.1.3") }}'
      media='all'/>
<link rel='stylesheet' id='woosq-frontend-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-smart-quick-view/assets/css/frontend7984.css?ver=3.3.4") }}'
      media='all'/>
<link rel='stylesheet' id='woosw-icons-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-smart-wishlist/assets/css/icons3428.css?ver=4.5.2") }}'
      media='all'/>
<link rel='stylesheet' id='woosw-frontend-css'
      href='{{ asset("assets/client/wp-content/plugins/woo-smart-wishlist/assets/css/frontend3428.css?ver=4.5.2") }}'
      media='all'/>
<style id='woosw-frontend-inline-css'>
    .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
        background-color: #5fbd74;
    }

    .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
        color: #5fbd74;
        border-color: #5fbd74;
    }
</style>
<link rel='stylesheet' id='bookory-style-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/stylec1b4.css?ver=2.0.5") }}' media='all'/>
<style id='bookory-style-inline-css'>
    body {
        --primary: #F65D4E;
        --primary_hover: #f4402f;
        --text: #444444;
        --accent: #000000;
        --lighter: #999999;
        --border: #E6E6E6;
    }

    @media (max-width: 1366px) {
        body.theme-bookory [data-elementor-columns-laptop="1"] .column-item {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .woocommerce.columns-laptop-1 ul.products li.product {
            flex: 0 0 100%;
            max-width: 100%;
        }

        body.theme-bookory [data-elementor-columns-laptop="2"] .column-item {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .woocommerce.columns-laptop-2 ul.products li.product {
            flex: 0 0 50%;
            max-width: 50%;
        }

        body.theme-bookory [data-elementor-columns-laptop="3"] .column-item {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .woocommerce.columns-laptop-3 ul.products li.product {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        body.theme-bookory [data-elementor-columns-laptop="4"] .column-item {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .woocommerce.columns-laptop-4 ul.products li.product {
            flex: 0 0 25%;
            max-width: 25%;
        }

        body.theme-bookory [data-elementor-columns-laptop="5"] .column-item {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .woocommerce.columns-laptop-5 ul.products li.product {
            flex: 0 0 20%;
            max-width: 20%;
        }

        body.theme-bookory [data-elementor-columns-laptop="6"] .column-item {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .woocommerce.columns-laptop-6 ul.products li.product {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        body.theme-bookory [data-elementor-columns-laptop="7"] .column-item {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        .woocommerce.columns-laptop-7 ul.products li.product {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        body.theme-bookory [data-elementor-columns-laptop="8"] .column-item {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }

        .woocommerce.columns-laptop-8 ul.products li.product {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }
    }

    @media (max-width: 1200px) {
        body.theme-bookory [data-elementor-columns-tablet-extra="1"] .column-item {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .woocommerce.columns-tablet-extra-1 ul.products li.product {
            flex: 0 0 100%;
            max-width: 100%;
        }

        body.theme-bookory [data-elementor-columns-tablet-extra="2"] .column-item {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .woocommerce.columns-tablet-extra-2 ul.products li.product {
            flex: 0 0 50%;
            max-width: 50%;
        }

        body.theme-bookory [data-elementor-columns-tablet-extra="3"] .column-item {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .woocommerce.columns-tablet-extra-3 ul.products li.product {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        body.theme-bookory [data-elementor-columns-tablet-extra="4"] .column-item {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .woocommerce.columns-tablet-extra-4 ul.products li.product {
            flex: 0 0 25%;
            max-width: 25%;
        }

        body.theme-bookory [data-elementor-columns-tablet-extra="5"] .column-item {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .woocommerce.columns-tablet-extra-5 ul.products li.product {
            flex: 0 0 20%;
            max-width: 20%;
        }

        body.theme-bookory [data-elementor-columns-tablet-extra="6"] .column-item {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .woocommerce.columns-tablet-extra-6 ul.products li.product {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        body.theme-bookory [data-elementor-columns-tablet-extra="7"] .column-item {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        .woocommerce.columns-tablet-extra-7 ul.products li.product {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        body.theme-bookory [data-elementor-columns-tablet-extra="8"] .column-item {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }

        .woocommerce.columns-tablet-extra-8 ul.products li.product {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }
    }

    @media (max-width: 1024px) {
        body.theme-bookory [data-elementor-columns-tablet="1"] .column-item {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .woocommerce.columns-tablet-1 ul.products li.product {
            flex: 0 0 100%;
            max-width: 100%;
        }

        body.theme-bookory [data-elementor-columns-tablet="2"] .column-item {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .woocommerce.columns-tablet-2 ul.products li.product {
            flex: 0 0 50%;
            max-width: 50%;
        }

        body.theme-bookory [data-elementor-columns-tablet="3"] .column-item {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .woocommerce.columns-tablet-3 ul.products li.product {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        body.theme-bookory [data-elementor-columns-tablet="4"] .column-item {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .woocommerce.columns-tablet-4 ul.products li.product {
            flex: 0 0 25%;
            max-width: 25%;
        }

        body.theme-bookory [data-elementor-columns-tablet="5"] .column-item {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .woocommerce.columns-tablet-5 ul.products li.product {
            flex: 0 0 20%;
            max-width: 20%;
        }

        body.theme-bookory [data-elementor-columns-tablet="6"] .column-item {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .woocommerce.columns-tablet-6 ul.products li.product {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        body.theme-bookory [data-elementor-columns-tablet="7"] .column-item {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        .woocommerce.columns-tablet-7 ul.products li.product {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        body.theme-bookory [data-elementor-columns-tablet="8"] .column-item {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }

        .woocommerce.columns-tablet-8 ul.products li.product {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }
    }

    @media (max-width: 880px) {
        body.theme-bookory [data-elementor-columns-mobile-extra="1"] .column-item {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .woocommerce.columns-mobile-extra-1 ul.products li.product {
            flex: 0 0 100%;
            max-width: 100%;
        }

        body.theme-bookory [data-elementor-columns-mobile-extra="2"] .column-item {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .woocommerce.columns-mobile-extra-2 ul.products li.product {
            flex: 0 0 50%;
            max-width: 50%;
        }

        body.theme-bookory [data-elementor-columns-mobile-extra="3"] .column-item {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .woocommerce.columns-mobile-extra-3 ul.products li.product {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        body.theme-bookory [data-elementor-columns-mobile-extra="4"] .column-item {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .woocommerce.columns-mobile-extra-4 ul.products li.product {
            flex: 0 0 25%;
            max-width: 25%;
        }

        body.theme-bookory [data-elementor-columns-mobile-extra="5"] .column-item {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .woocommerce.columns-mobile-extra-5 ul.products li.product {
            flex: 0 0 20%;
            max-width: 20%;
        }

        body.theme-bookory [data-elementor-columns-mobile-extra="6"] .column-item {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .woocommerce.columns-mobile-extra-6 ul.products li.product {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        body.theme-bookory [data-elementor-columns-mobile-extra="7"] .column-item {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        .woocommerce.columns-mobile-extra-7 ul.products li.product {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        body.theme-bookory [data-elementor-columns-mobile-extra="8"] .column-item {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }

        .woocommerce.columns-mobile-extra-8 ul.products li.product {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }
    }

    @media (max-width: 767px) {
        body.theme-bookory [data-elementor-columns-mobile="1"] .column-item {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .woocommerce.columns-mobile-1 ul.products li.product {
            flex: 0 0 100%;
            max-width: 100%;
        }

        body.theme-bookory [data-elementor-columns-mobile="2"] .column-item {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .woocommerce.columns-mobile-2 ul.products li.product {
            flex: 0 0 50%;
            max-width: 50%;
        }

        body.theme-bookory [data-elementor-columns-mobile="3"] .column-item {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .woocommerce.columns-mobile-3 ul.products li.product {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        body.theme-bookory [data-elementor-columns-mobile="4"] .column-item {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .woocommerce.columns-mobile-4 ul.products li.product {
            flex: 0 0 25%;
            max-width: 25%;
        }

        body.theme-bookory [data-elementor-columns-mobile="5"] .column-item {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .woocommerce.columns-mobile-5 ul.products li.product {
            flex: 0 0 20%;
            max-width: 20%;
        }

        body.theme-bookory [data-elementor-columns-mobile="6"] .column-item {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .woocommerce.columns-mobile-6 ul.products li.product {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }

        body.theme-bookory [data-elementor-columns-mobile="7"] .column-item {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        .woocommerce.columns-mobile-7 ul.products li.product {
            flex: 0 0 14.2857142857%;
            max-width: 14.2857142857%;
        }

        body.theme-bookory [data-elementor-columns-mobile="8"] .column-item {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }

        .woocommerce.columns-mobile-8 ul.products li.product {
            flex: 0 0 12.5%;
            max-width: 12.5%;
        }
    }
</style>
<link rel='stylesheet' id='slick-theme-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/assets/css/base/slick-themec1b4.css?ver=2.0.5") }}'
      media='all'/>
<link rel='stylesheet' id='bookory-fonts-css'
      href='http://fonts.googleapis.com/css?family=Sora:300,400,500,600,700&amp;subset=latin%2Clatin-ext&amp;display=swap'
      media='all'/>
<link rel='stylesheet' id='bookory-dokan-style-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/assets/css/dokan/dokanc1b4.css?ver=2.0.5") }}'
      media='all'/>
<link rel='stylesheet' id='dokan-modal-css'
      href='{{ asset("assets/client/wp-content/plugins/dokan-lite/assets/vendors/izimodal/iziModal.minacff.css?ver=1667976225") }}'
      media='all'/>
<link rel='stylesheet' id='bookory-elementor-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/assets/css/base/elementorc1b4.css?ver=2.0.5") }}'
      media='all'/>
<link rel='stylesheet' id='bookory-woocommerce-style-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/assets/css/woocommerce/woocommercec1b4.css?ver=2.0.5") }}'
      media='all'/>
<link rel='stylesheet' id='tooltipster-css'
      href='{{ asset("assets/client/wp-content/themes/bookory/assets/css/libs/tooltipster.bundle.minc1b4.css?ver=2.0.5") }}'
      media='all'/>
{{--<link rel='stylesheet' id='bookory-child-style-css'--}}
{{--      href='{{ asset("assets/client/wp-content/themes/demo-child/style8a54.css?ver=1.0.0") }}' media='all'/>--}}
<link rel='stylesheet' id='google-fonts-1-css'
      href='https://fonts.googleapis.com/css?family=Sora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.1.3'
      media='all'/>
<link rel='stylesheet' id='elementor-icons-shared-0-css'
      href='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3") }}'
      media='all'/>
<link rel='stylesheet' id='elementor-icons-fa-brands-css'
      href='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3") }}'
      media='all'/>
<link rel='stylesheet' id='elementor-icons-fa-regular-css'
      href='{{ asset("assets/client/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3") }}'
      media='all'/>
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
