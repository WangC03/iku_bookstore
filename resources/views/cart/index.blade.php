@extends('layouts.client.master')
@section('page-title', "Giỏ hàng")
@section('content')
    <div class="breadcrumb-wrap">
        <div data-elementor-type="wp-post" data-elementor-id="3100" class="elementor elementor-3100">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-1ece023 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                data-id="1ece023" data-element_type="section"
                data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div
                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9ef6efd"
                        data-id="9ef6efd" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-59103fb hidden-bookory-title-single-yes elementor-widget elementor-widget-woocommerce-breadcrumb"
                                data-id="59103fb" data-element_type="widget"
                                data-widget_type="woocommerce-breadcrumb.default">
                                <div class="elementor-widget-container">
                                    <div class="bookory-woocommerce-title">Giỏ hàng</div>
                                    <nav class="woocommerce-breadcrumb"><a href="{{ route('index') }}">Trang chủ</a><i
                                            class="bookory-icon-right-arrow"></i>Giỏ hàng
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <article id="post-8" class="page type-page status-publish hentry my-5">
    </article>
    <script>
        const updateCartItemQuantity = (id, quantity) => {
            $.ajax(
                {
                    url: "{{ route('api.public.cart.add') }}",
                    method: "POST",
                    data: {
                        _token,
                        id,
                        quantity
                    },
                    success: function (response) {
                        renderCartPage(response.data);
                    },
                }
            )
        }

        const changeQuantity = (type, id) => {
            let quantity = $(`#quantity_${id}`).val();
            let oldQuantity = quantity;
            if (type === 'increase') {
                quantity++;
            } else if (type === 'decrease' && quantity > 1) {
                quantity--;
            }
            $(`#quantity_${id}`).val(quantity);
            if (quantity !== oldQuantity) {
                updateCartItemQuantity(id, quantity - oldQuantity);
            }
        }
        var renderCartPage = cartData => {
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
                                    href="/books/detail/${item.slug}">${item.title}</a></h3>
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
            <h4 class="woocommerce-mini-cart__total total" style="text-align: right;"><strong>Subtotal:</strong> <span
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
            $('#post-8').html(html);
        }
        $.ajax({
            url: "{{ route('api.public.cart.list') }}",
            method: 'GET',
            success: function (response) {
                renderCartPage(response.data);
            }
        })
    </script>
@endsection
