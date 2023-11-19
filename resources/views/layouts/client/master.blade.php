<!doctype html>
<html lang="en-US">

<!-- Mirrored from demo2.pavothemes.com/bookory/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 10:48:41 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Bookory &#8211; @yield('page-title', 'Book Store')</title>
    <meta name='robots' content='max-image-preview:large'/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('layouts.client.partials.style')
    @include('layouts.client.partials.script_header')
    <style id="wp-custom-css">
        .article-default .post-thumbnail img {
            width: 100%;
            height: 420px;
            object-fit: cover;
        }
    </style>
    @yield('css')
</head>
<body
    class="home page-template page-template-template-homepage page-template-template-homepage-php page page-id-210 wp-custom-logo wp-embed-responsive theme-bookory woocommerce-no-js ehf-header ehf-footer ehf-template-bookory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip chrome group-blog woocommerce-active product-block-style-1 elementor-default elementor-kit-4 elementor-page elementor-page-210 dokan-theme-bookory">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0.49803921568627"/>
                <feFuncG type="table" tableValues="0 0.49803921568627"/>
                <feFuncB type="table" tableValues="0 0.49803921568627"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 0.27843137254902"/>
                <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0"/>
                <feFuncG type="table" tableValues="0 0.64705882352941"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.78039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.94901960784314"/>
                <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.44705882352941 0.4"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.098039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.66274509803922"/>
                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<div id="page" class="hfeed site">
    @include('layouts.client.partials.header')
    <div class="breadcrumb-wrap"></div>
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div data-elementor-type="wp-page" data-elementor-id="210" class="elementor elementor-210">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
    @include('layouts.client.partials.footer')
</div>
<div class="account-wrap d-none">
    <div class="account-inner ">
        @if(auth()->user())
            <div class="account-info">
                <div class="account-name">
                    <span class="account-name__label">Xin chào,</span>
                    <span class="account-name__value">{{ auth()->user()->name }}</span>
                </div>
            </div>
            <div class="account-action">
                <ul>
                    <li>
                        <a href="{{ route('my-orders') }}" title="Đơn hàng của tôi">Đơn hàng của tôi</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" data-button-action class="btn btn-primary btn-block w-100 mt-1">Đăng xuất
                    </button>
                </form>
            </div>
        @else
            <div class="login-form-head">
                <span class="login-form-title">Đăng nhập</span>
                <span class="pull-right">
                <a class="register-link" href="{{ route('register') }}" title="Register">Đăng ký</a>
            </span>
            </div>
            <form class="" action="{{ route('login') }}" method="post" data-toggle="validator">
                @csrf
                <p>
                    <label>Email <span class="required">*</span></label>
                    <input name="email" type="text" required placeholder="Email">
                </p>
                <p>
                    <label>Mật khẩu <span class="required">*</span></label>
                    <input name="password" type="password" required placeholder="Password">
                </p>
                <button type="submit" data-button-action class="btn btn-primary btn-block w-100 mt-1">Đăng nhập</button>
            </form>
        @endif
    </div>
</div>
<div class="bookory-mobile-nav">
    <div class="menu-scroll-mobile">
        <a href="#" class="mobile-nav-close"><i class="bookory-icon-times"></i></a>
        <div class="mobile-nav-tabs">
            <ul>
                <li class="mobile-tab-title mobile-pages-title active" data-menu="pages">
                    <span>Main menu</span>
                </li>
                <li class="mobile-tab-title mobile-categories-title" data-menu="categories">
                    <span>Categories</span>
                </li>
            </ul>
        </div>
        <nav class="mobile-menu-tab mobile-navigation mobile-pages-menu active" aria-label="Mobile Navigation">
            <div class="handheld-navigation">
                <ul id="menu-main-menu" class="menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-210 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-2842">
                        <a href="index.html" aria-current="page">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-210 current_page_item menu-item-225">
                                <a href="index.html" aria-current="page"><span>01</span> &#8211; Home v1</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224"><a
                                    href="home-2/index.html"><span>02</span> &#8211; Home v2</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-223"><a
                                    href="home-3/index.html"><span>03</span> &#8211; Home v3</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-222"><a
                                    href="home-4/index.html"><span>04</span> &#8211; Home v4</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-221"><a
                                    href="home-5/index.html"><span>05</span> &#8211; Home v5</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8249"><a
                                    href="home-6/index.html"><span>06</span> &#8211; Home v6</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8248"><a
                                    href="home-7/index.html"><span>07</span> &#8211; Home v7</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8247"><a
                                    href="home-8/index.html"><span>08</span> &#8211; Home v8</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3149">
                        <a href="shop/index.html">Shop</a>
                        <ul class="sub-menu">
                            <li id="menu-item-4523"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4523"><a
                                    href="shop/index3f9c.html?woocommerce_archive_layout=canvas&amp;woocommerce_catalog_columns=4">Shop
                                    &#8211; 4 Columns</a></li>
                            <li id="menu-item-4524"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4524"><a
                                    href="shop/index2e45.html?woocommerce_archive_layout=canvas&amp;woocommerce_catalog_columns=5">Shop
                                    &#8211; 5 Columns</a></li>
                            <li id="menu-item-4526"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4526"><a
                                    href="shop/index.html">Shop &#8211; Sidebar</a></li>
                            <li id="menu-item-4529"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4529"><a
                                    href="product-category/cultural/indexef01.html?layout=list">Shop &#8211;
                                    Listview</a></li>
                            <li id="menu-item-4527"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4527"><a
                                    href="product-category/action-adventure/index.html">Shop &#8211; Categories Style
                                    01</a></li>
                            <li id="menu-item-4528"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4528"><a
                                    href="product-category/activity-books/index.html">Shop &#8211; Categories Style
                                    02</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7578">
                        <a href="store-listing/index.html">Vendor</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7579"><a
                                    href="store-listing/index.html">Dokan &#8211; Storelist</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8438"><a
                                    href="store/barone/index.html">Dokan &#8211; Vendor Store</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1191">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5751"><a
                                    href="all-authors/index.html">All Authors</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6157"><a
                                    href="book-author/enrique-wallace/index.html">Author Profile</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3154"><a
                                    href="about-us/index.html">About Us</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156"><a
                                    href="faq/index.html">FAQs</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218"><a
                                    href="404.html">404 page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-226">
                        <a href="blog-list/index.html">Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4803"><a
                                    href="blog-list/index.html">Blog Standard</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4804"><a
                                    href="blog-list/index81f0.html?blog_style=style-1&amp;sidebar-blog=0&amp;blog_columns=3">Blog
                                    Grid</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4805"><a
                                    href="top-10-books-to-make-it-a-great-year/index.html">Single Blog</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150"><a
                            href="contact/index.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <nav class="mobile-menu-tab mobile-navigation-categories mobile-categories-menu" aria-label="Mobile Navigation">
            <div class="handheld-navigation">
                <ul id="menu-categories" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2903"><a
                            href="product-category/action-adventure/index.html">Action &#038; Adventure</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2904"><a
                            href="product-category/activity-books/index.html">Americas</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2905"><a
                            href="product-category/animals/index.html">Arts &#038; Photography</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3118"><a
                            href="product-category/anthologies/index.html">Biographies</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3120"><a
                            href="product-category/arts-literature/index.html">Children&#8217;s Books</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3121"><a
                            href="product-category/cars-trucks/index.html">Classics</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3122"><a
                            href="product-category/classics/index.html">Contemporary</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3130"><a
                            href="product-category/contemporary/index.html">Education &#038; Reference</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3131"><a
                            href="product-category/cultural/index.html">Genre Fiction</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3132"><a
                            href="product-category/european/index.html">Historical</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="bookory-overlay"></div>
<link href="https://fonts.googleapis.com/css?family=Roboto:400%7CSora:400%2C600&amp;display=swap" rel="stylesheet"
      property="stylesheet" media="all" type="text/css">
<script type="text/javascript">
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
@include('layouts.client.partials.cart_sidebar')
<div class="cart-side-overlay"></div>
</body>
@include('layouts.client.partials.script_footer')
<script>
    var _token = "{{ csrf_token() }}";
    var removeCartItem = id => {
        $.ajax({
            url: "{{ route('api.public.cart.remove') }}",
            method: 'POST',
            data: {
                _token: _token,
                id: id
            },
            success: function (response) {
                console.log(response.data);
                renderCart(response.data);
                renderCartPage(response.data);
            }
        })
    }

    function renderCart(cartData) {
        let html = '';
        $('.cart-contents span.count').html(cartData.count);
        if (cartData.count === 0) {
            html += `
                <div class="woocommerce-mini-cart__empty-message">Không có sản phẩm nào trong giỏ hàng.</div>
            `;
        } else {
            html += `
            <div class="woocommerce-mini-cart-scroll">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
        `;
            html += Object.values(cartData.cart).map(item => {
                return `
            <li class="woocommerce-mini-cart-item mini_cart_item" id="cart-item-${item.id}">
                        <a href="javascript: void(0)"
                            onclick="renderCart(removeCartItem(${item.id}))"
                           class="remove remove_from_cart_button" aria-label="Xóa sản phẩm này" data-product_id="${item.id}">×</a> <a
                            href="/books/detail/${item.slug}"><img
                                width="600" height="840"
                                src="${item.image}"
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                decoding="async" loading="lazy">${item.title}</a>
                        <span class="quantity">${item.quantity} × <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">$</span>${Number(item.price).toFixed(2)}</bdi></span></span></li>
            `;
            }).join('');
            html += `
                </ul>
            </div>
            <p class="woocommerce-mini-cart__total total"><strong>Tổng tiền:</strong> <span
                    class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-currencySymbol">$</span>${Number(cartData.total).toFixed(2)}</bdi></span></p>
            <p class="woocommerce-mini-cart__buttons buttons"><a
                    href="{{ route('cart.index') }}"
                    class="button wc-forward">Giỏ hàng</a><a
                    href="https://demo2.pavothemes.com/bookory/checkout/"
                    class="button checkout wc-forward">Đặt hàng</a></p>
        `;
        }
        if ($('.widget_shopping_cart_content')) {
            $('.widget_shopping_cart_content').html(html);
        }
    }

    function renderCartPage(cartData) {
        let html = '';
        $('.cart-contents span.count').html(cartData.count);
        if (cartData.count === 0) {
            html += `
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <p class="cart-empty woocommerce-info">Không có sản phẩm nào trong giỏ hàng.</p>
                            <p class="return-to-shop">
                                <a class="button wc-backward wp-element-button" href="{{ route('index') }}">
                                    Quay lại trang sản phẩm </a>
                            </p>
                        </div>
            `;
        } else {
            html += `
                <div class="entry-content">
                    <ul class="bookory-products products-list columns-3" style="margin-top: 30px">
                `;
            html += Object.values(cartData.cart).map(item => {
                return `
            <li class="product-list product type-product post-77 status-publish first instock product_cat-contemporary product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail virtual purchasable product-type-simple single-product mt-3"
                    style="height: 200px">
                    <div class="product-image" style="height: 100%">
                        <img style="height: 100%"
                             src="${item.image}"
                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                             loading="lazy"></div>
                    <div class="product-caption product">
                        <div class="d-flex justify-content-between">
                            <h3 class="woocommerce-loop-product__title"><a
                                    href="https://demo2.pavothemes.com/bookory/product/the-book-of-five-rings/">${item.title}</a></h3>
                        </div>


                        <form class="cart m-0 d-flex" action="javascript: void(0)" onsubmit="return false;
                              method="post" enctype="multipart/form-data">
                            <div class="quantity_wrap">
                                <div class="quantity buttons_added">
                                    <button type="button" class="" onclick="changeQuantity('decrease', ${item.id})"><i class="bookory-icon-minus"></i></button>
                                    <input type="number" id="quantity_${item.id}" class="qty"
                                           step="1" min="1" max="999" name="quantity" value="${item.quantity}" title="Qty"
                                           placeholder="" inputmode="numeric">
                                    <button type="button" class="" onclick="changeQuantity('increase', ${item.id})"><i class="bookory-icon-plus"></i></button>
                                </div>
                            </div>
                            <span class="price ms-3"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">$</span>${Number(item.price).toFixed(2)} / 1 sản phẩm</bdi></span></span>
                        </form>
                    </div>

                    <a href="javascript: void(0)" onclick="renderCart(removeCartItem(${item.id}))"
                       class="remove remove_from_cart_button" aria-label="Xóa sản phẩm này" data-product_id="${item.id}">×</a>
                </li>
            `;
            }).join('');
            html += `
                </ul>
            </div>
            <h4 class="woocommerce-mini-cart__total total" style="text-align: right;"><strong>Tổng tiền:</strong> <span
                    class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-amount amount">$</span>${Number(cartData.total).toFixed(2)}</bdi></span></h4>
            <p class="woocommerce-mini-cart__buttons buttons" style="text-align: right;">
                    <a
                        href="{{ route('checkout') }}"
                        class="button checkout wc-forward">
                        Đặt hàng
                    </a>
            </p>
                `;
        }
        if ($('#post-8')) {
            $('#post-8').html(html);
        }
    }

    $(document).ready(function () {
        $.ajax({
            url: "{{ route('api.public.cart.list') }}",
            method: 'GET',
            success: function (response) {
                console.log(response);
                renderCart(response.data);
            }
        })
            .always(function () {

                $('.add_to_cart_button').each(function () {
                    this.addEventListener('click', e => {
                        const id = $(this).data('product_id');
                        const quantity = $(this).data('quantity');

                        $.ajax({
                            url: "{{ route('api.public.cart.add') }}",
                            method: 'POST',
                            data: {
                                _token: _token,
                                id: id,
                                quantity: quantity
                            },
                            success: function (response) {
                                console.log(response);
                                // $('.cart-contents span.count').html(response.data.count);
                                renderCart(response.data);
                                // document.querySelector('.site-header-cart.menu').click();
                                document.querySelector('.cart-contents').click();
                                // if (data.status) {
                                //     $('.cart-sidebar').html(data.html);
                                //     $('.cart-side-overlay').addClass('active');
                                //     $('body').addClass('cart-sidebar-open');
                                // }
                            }
                        })
                    })
                });
            });
    });
</script>
@yield('script')
<!-- Mirrored from demo2.pavothemes.com/bookory/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 10:50:08 GMT -->
</html>
