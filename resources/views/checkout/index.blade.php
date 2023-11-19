@extends('layouts.client.master')
@section('page-title', "Thanh toán")
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
                                    <div class="bookory-woocommerce-title">Thanh toán</div>
                                    <nav class="woocommerce-breadcrumb"><a href="{{ route('index') }}">Trang chủ</a><i
                                            class="bookory-icon-right-arrow"></i>Thanh toán
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <article id="post-9" class="post-9 page type-page status-publish hentry" style="margin: 25px 0;">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="woocommerce-notices-wrapper"></div>
                <form name="checkout" method="post" class="checkout woocommerce-checkout"
                      action="{{ route('order.store') }}" enctype="multipart/form-data"
                      novalidate="novalidate">
                    @csrf
                    <div class="row w-100 justify-content-between" id="customer_details">
                        <div class="col-6">
                            <div class="woocommerce-billing-fields">
                                <h3>Thông tin chi tiết</h3>
                                <div class="woocommerce-billing-fields__field-wrapper">
                                    <p class="form-row form-row-last validate-required w-100"
                                       id="billing_last_name_field"
                                       data-priority="20"><label for="name" class="">Họ tên&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="name"
                                                                                     id="name"
                                                                                     placeholder="Nguyễn Văn A" value="{{ auth()->user()->name }}"
                                                                                     autocomplete="family-name"></span>
                                    </p>
                                    <p class="form-row form-row-wide validate-required validate-phone"
                                       id="billing_phone_field" data-priority="100"><label for="tel" class="">Số điện
                                            thoại&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="tel" class="input-text "
                                                                                     name="tel"
                                                                                     id="tel" placeholder="0123456789"
                                                                                     value="" autocomplete="tel"></span>
                                    </p>
                                    <p class="form-row form-row-wide validate-required validate-email"
                                       id="billing_email_field" data-priority="110"><label for="email" class="">Email&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="email" class="input-text "
                                                                                     name="email"
                                                                                     id="email"
                                                                                     placeholder="email@example.com"
                                                                                     value="{{ auth()->user()->email }}"
                                                                                     autocomplete="email username"></span>
                                    </p>
                                    <p class="form-row address-field validate-required form-row-wide"
                                       id="billing_address_1_field" data-priority="50"><label for="address"
                                                                                              class="">Địa
                                            chỉ&nbsp;<abbr
                                                class="required" title="required">*</abbr></label><span
                                            class="woocommerce-input-wrapper"><input type="text" class="input-text "
                                                                                     name="address"
                                                                                     id="address"
                                                                                     placeholder="Mê Linh, Hà Nội"
                                                                                     value=""
                                                                                     autocomplete="address"
                                                                                     data-placeholder="House number and street name"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="woocommerce-shipping-fields">
                                </div>
                                <div class="woocommerce-additional-fields">
                                    <h3>Thông tin thêm</h3>
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                        <p class="form-row notes" id="notes" data-priority=""><label
                                                for="order_comments" class="">Ghi chú&nbsp;<span class="optional">(nếu có)</span></label><span
                                                class="woocommerce-input-wrapper"><textarea name="notes"
                                                                                            class="input-text "
                                                                                            id="notes"
                                                                                            placeholder="Ghi chú về đơn đặt hàng của bạn."
                                                                                            rows="2"
                                                                                            cols="5"></textarea></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="order_review" class="woocommerce-checkout-review-order col-6">
                            <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                            <div class="checkout-review-order-table-wrapper">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Tên sách</th>
                                        <th class="product-total">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            Annie Leibovitz: Wonderland&nbsp; <strong
                                                class="product-quantity">×&nbsp;3</strong>
                                            <dl class="variation">
                                                <dt class="variation-Vendor">Vendor:</dt>
                                                <dd class="variation-Vendor"><p>Barone LLC.</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-total">
                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>948.45</bdi></span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            The Book of Five Rings&nbsp; <strong
                                                class="product-quantity">×&nbsp;1</strong>
                                            <dl class="variation">
                                                <dt class="variation-Vendor">Vendor:</dt>
                                                <dd class="variation-Vendor"><p>Arlene</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-total">
                                        <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>439.83</bdi></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>


                                    <tr class="order-total">
                                        <th>Tổng tiền</th>
                                        <td><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span><span id="total-price">1,388.28</span></bdi></span></strong>
                                        </td>
                                    </tr>


                                    </tfoot>
                                </table>

                            </div>
                            <div id="payment" class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio"
                                               name="payment_method" value="1" data-order_button_text="" checked>

                                        <label for="payment_method_cod">
                                            Thanh toán khi nhận hàng </label>
                                        <div class="payment_box payment_method_cod" style="display: none;">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <noscript>
                                        Since your browser does not support JavaScript, or it is disabled, please ensure
                                        you
                                        click the <em>Update Totals</em> button before placing your order. You may be
                                        charged more than the amount stated above if you fail to do so. <br/>
                                        <button type="submit" class="button alt wp-element-button"
                                                name="woocommerce_checkout_update_totals" value="Update totals">Update
                                            totals
                                        </button>
                                    </noscript>

                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                        <div class="woocommerce-privacy-policy-text"><p>Dữ liệu cá nhân của bạn sẽ được
                                                sử dụng để xử lý đơn đặt hàng, hỗ trợ trải nghiệm của bạn trên trang web
                                                này và cho các mục đích khác được mô tả trong chính sách bảo mật của
                                                chúng tôi. <a href=""
                                                              class="woocommerce-privacy-policy-link"
                                                              target="_blank">privacy policy</a>.
                                            </p>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn d-block text-center my-auto w-100"
                                            name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng"
                                            data-value="Đặt hàng" style="line-height: 100%;">Đặt hàng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
    <script>
        $.ajax({
            url: "{{ route('api.public.cart.list') }}",
            method: 'GET',
            success: function (response) {
                let html = '';
                html = response.data.cart.map(function (item) {
                    return `
                        <tr class="cart_item">
                            <td class="product-name">
                                ${item.title}&nbsp; <strong class="product-quantity">×&nbsp;${item.quantity}</strong>
                                </dl>
                            </td>
                            <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>${Number(item.price * item.quantity).toFixed(2)}</bdi></span>
                            </td>
                        </tr>
                    `;
                }).join('');
                $('.shop_table.woocommerce-checkout-review-order-table tbody').html(html);
                $('#total-price').html(Number(response.data.total).toFixed(2));

            }
        })
    </script>
@endsection
