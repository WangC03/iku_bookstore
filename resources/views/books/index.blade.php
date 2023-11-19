@extends('layouts.client.master')
@section('page-title', 'Sách')
@section('content')
    <div class="col-full row justify-content-end">
        <div class="woocommerce col-12"></div>
        <div id="secondary" class="col-3" role="complementary">
            <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span
                    class="gamma widget-title">Thể loại</span>
                <ul class="product-categories">
                    @foreach($genres as $genre)
                        <li class="cat-item cat-item-29 @if(request()->route()->parameters()['slug'] == $genre->slug) current-cat @endif">
                            <a href="{{ route('books.byGenre', $genre->slug) }}">
                                {{ $genre->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div id="primary" class="col-9">
            <main id="main" class="site-main" role="main">
                <header class="woocommerce-products-header">
                </header>
                <div class="woocommerce-notices-wrapper"></div>
                <div class="bookory-products-overflow">
                    <ul class="bookory-products products columns-3">
                        @foreach($books as $book)
                            <li class="product-style-default product type-product post-111 status-publish first instock product_cat-action-adventure product_cat-activity-books product_cat-contemporary product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail featured virtual purchasable product-type-simple">
                                <div class="product-block">
                                    <div class="product-transition">
                                        @if (!($book->sale_price <= 0 || empty($book->sale_price)))
                                            <span class="onsale">-{{ calculateSalePercentage($book->regular_price, $book->sale_price) }}%</span>
                                        @endif
                                        <div class="product-image"><img width="600" height="840"
                                                                        src="{{ asset($book->external_url) }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt="" decoding="async"
                                                                        loading="lazy"/></div>
                                        <div class="group-action">
                                            <div class="shop-action vertical">
                                                <button class="woosq-btn woosq-btn-111"
                                                        data-id="111"
                                                        data-effect="mfp-3d-unfold"
                                                        data-context="default">
                                                    Xem nhanh
                                                </button>
                                                <div class="opal-add-to-cart-button">
                                                    <a href="javascript:void(0)"
                                                       data-quantity="1"
                                                       class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                       data-product_id="{{ $book->id }}"
                                                       data-product_sku="gbk-235"
                                                       aria-label="Thêm &ldquo;{{ $book->title }}&rdquo; vào giỏ hàng"
                                                       rel="nofollow">Thêm vào giỏ hàng</a></div>
                                            </div>
                                        </div>
                                        <a href="{{ route('books.detail', $book->slug) }}"
                                           class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                    </div>
                                    <div class="product-caption">
                                        <h3 class="woocommerce-loop-product__title"><a
                                                href="{{ route('books.detail', $book->slug) }}">
                                                {{ $book->title }}
                                            </a></h3>
                                        <div class="product-category"><a
                                                href="javascript: void(0)">
                                                {{ $book->genres->pluck('name')->join(', ') }}</a></div>
                                        <div class="woocommerce-loop-product__author"><a
                                                href="javascript: void(0)">
                                                {{ $book->authors->pluck('name')->join(', ') }}</a>
                                        </div>
                                        <span class="price">
                                                                @if ($book->sale_price <= 0 || empty($book->sale_price))
                                                <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{ $book->regular_price }}</bdi></span>
                                            @else
                                                <del aria-hidden="true"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{ $book->regular_price }}</bdi></span></del>
                                                <ins><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{ $book->sale_price }}</bdi></span></ins>
                                            @endif
                                                            </span>

                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <nav class="woocommerce-pagination">
                    {{ $books->links() }}
                    {{--                    <ul class="page-numbers">--}}
                    {{--                        <li><span aria-current="page" class="page-numbers current">1</span></li>--}}
                    {{--                        <li><a class="page-numbers"--}}
                    {{--                               href="https://demo2.pavothemes.com/bookory/product-category/action-adventure/page/2/">2</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li><a class="next page-numbers"--}}
                    {{--                               href="https://demo2.pavothemes.com/bookory/product-category/action-adventure/page/2/"><span>Next</span><i--}}
                    {{--                                    class="bookory-icon bookory-icon-angle-right"></i></a></li>--}}
                    {{--                    </ul>--}}
                </nav>
            </main>
        </div>
    </div>
@endsection
