@extends('layouts.client.master')
@section('page_title', 'Đơn hàng đã đặt')
@section('content')
    <div class="breadcrumb-wrap" style="margin: 20px 0">
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
                                    <div class="bookory-woocommerce-title">Đơn hàng của tôi</div>
                                    <nav class="woocommerce-breadcrumb"><a href="{{ route('index') }}">Trang chủ</a><i
                                            class="bookory-icon-right-arrow"></i>Đơn hàng của tôi
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
        @if($orders->count() != 0)
            <table class="shop_table my_account_orders table table-striped">
                <thead>
                <tr>
                    <th class="order-number"><span class="nobr">Mã</span></th>
                    <th class="order-date"><span class="nobr">Ngày đặt</span></th>
                    <th class="order-status"><span class="nobr">Trạng thái</span></th>
                    <th class="order-total"><span class="nobr">Tổng tiền</span></th>
                    <th class="order-actions">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
{{--                <tr class="order">--}}
{{--                    <td class="order-number">--}}
{{--                        <a href="https://demo2.pavothemes.com/bookory/my-account/view-order/9267/">--}}
{{--                            9267 </a>--}}
{{--                    </td>--}}
{{--                    <td class="order-date">--}}
{{--                        <time datetime="2023-08-04GMT+000017:51:51">--}}
{{--                            August 4, 2023--}}
{{--                        </time>--}}
{{--                    </td>--}}
{{--                    <td class="order-status" style="text-align:left; white-space:nowrap;">--}}
{{--                        Processing--}}
{{--                    </td>--}}
{{--                    <td class="order-total">--}}
{{--                        <span class="woocommerce-Price-amount amount"><span--}}
{{--                                class="woocommerce-Price-currencySymbol">$</span>439.83</span> for 1 item--}}
{{--                    </td>--}}
{{--                    <td class="order-actions">--}}
{{--                        <a href="https://demo2.pavothemes.com/bookory/my-account/view-order/9267/" class="button view">View</a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
                @foreach($orders as $order)
                    <tr class="order">
                        <td class="order-number">
                            <a href="">
                                {{ $order->id }} </a>
                        </td>
                        <td class="order-date">
                            <time datetime="2023-08-04GMT+000017:51:51">
                                {{ Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}
                            </time>
                        </td>
                        <td class="order-status" style="text-align:left; white-space:nowrap;">
                            <span
                                class="woocommerce-Order-status status-processing">{{ config('util.STATUS')[$order->status] }}</span>
                        </td>
                        <td class="order-total">
                            <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>{{ $order->total }}</span>
                        </td>
                        <td class="order-actions">
                            <a href=""
                               class="button view">Xem chi tiết</a>
                            @if ($order->status > 0 && $order->status < 3)
                                <a href=""
                                   class="button">Hủy đơn hàng</a>
                            @endif
                            @if($order->status == 3)
                                <a href="" class="btn btn-outline-success btn-sm rounded-pill">Đã nhận hàng</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper"></div>
                <p class="cart-empty woocommerce-info">Bạn chưa có đơn hàng nào.</p>
                <p class="return-to-shop">
                    <a class="button wc-backward wp-element-button" href="{{ route('index') }}">
                        Quay lại trang sản phẩm </a>
                </p>
            </div>
        @endif
    </article>
@endsection
