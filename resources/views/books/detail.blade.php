@extends('layouts.client.master')
@section('page-title', $book->title)
@section('content')
    <div class="breadcrumb-wrap mb-5"> <div data-elementor-type="wp-post" data-elementor-id="4757" class="elementor elementor-4757">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-a87e818 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a87e818" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: -0.1px;">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a9862a1" data-id="a9862a1" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8e904b1 hidden-bookory-title-yes elementor-widget elementor-widget-woocommerce-breadcrumb" data-id="8e904b1" data-element_type="widget" data-widget_type="woocommerce-breadcrumb.default">
                                <div class="elementor-widget-container">
                                    <div class="bookory-woocommerce-title">{{ $book->title }}</div><nav class="woocommerce-breadcrumb"><a href="{{ route('index') }}">Trang chủ</a><i class="bookory-icon-right-arrow"></i>{{ $book->title }}</nav> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="woocommerce"></div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div id="product-99"
                         class="single-product single-product-type-horizontal product type-product post-99 status-publish first onbackorder product_cat-action-adventure product_cat-activity-books product_cat-cars-trucks product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="content-single-wrapper product">
                            <div
                                class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-3 images woocommerce-product-gallery-horizontal"
                                data-columns="3" style="opacity: 1;">
                                <figure class="woocommerce-product-gallery__wrapper">
                                    <div
                                        data-thumb="{{ asset($book->external_url) }}"
                                        data-thumb-alt="" class="woocommerce-product-gallery__image"
                                        style="position: relative; overflow: hidden;"><a
                                            href="{{ asset($book->external_url) }}"
                                            data-elementor-open-lightbox="no"><img width="600" height="840"
                                                                                   src="{{ asset($book->external_url) }}"
                                                                                   class="wp-post-image" alt=""
                                                                                   decoding="async" loading="lazy"
                                                                                   title="29" data-caption=""
                                                                                   data-src="{{ asset($book->external_url) }}"
                                                                                   data-large_image="{{ asset($book->external_url) }}}}"
                                                                                   data-large_image_width="600"
                                                                                   data-large_image_height="840"></a><img
                                            role="presentation" alt=""
                                            src="{{ asset($book->external_url) }}"
                                            class="zoomImg"
                                            style="position: absolute; top: -11.7485px; left: -12.0565px; opacity: 0; width: 600px; height: 840px; border: none; max-width: none; max-height: none;">
                                    </div>
                                </figure>
                                <div class="product-video-360"></div>
                            </div>
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{ $book->title }}</h1>
                                <div class="product_after_title">
                                    <div class="product-brand">
                                        Tác giả: {{ $book->authors->pluck('name')->join(', ') }}</div>
                                    <span class="sku_wrapper">ISBN: <span class="sku">{{ $book->isbn }}</span></span>
                                </div>
                                <p class="price">
                                    @if(!empty($book->sale_price) || $book->sale_price != 0)
                                        <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $book->regular_price }}</bdi></span>
                                        </del>
                                        <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $book->sale_price }}</bdi></span>
                                        </ins>
                                    @else
                                        <del>
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $book->regular_price }}</bdi>
                                            </span>
                                        </del>
                                    @endif
                                </p>
                                <form class="cart d-flex"
                                      action="https://demo2.pavothemes.com/bookory/product/treachery-alpha-colony-book-8/"
                                      method="post" enctype="multipart/form-data">
                                    <div class="quantity_wrap me-3">
                                        <label class="quantity_label" for="quantity_64cd44a4744f0">Quantity</label>
                                        <div class="quantity buttons_added">
                                            <button type="button" class="minus"><i class="bookory-icon-minus"></i>
                                            </button>
                                            <input type="number" id="quantity_64cd44a4744f0"
                                                   class="input-text qty text border-0"
                                                   step="1" min="1" max="999" name="quantity" value="1" title="Qty"
                                                   placeholder="" inputmode="numeric">
                                            <button type="button" class="plus"><i class="bookory-icon-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="submit" name="add-to-cart" value="99"
                                            class="single_add_to_cart_button button alt wp-element-button">Thêm vào giỏ
                                        hàng
                                    </button>
                                </form>
                                <div class="product_meta">
                                    <span class="posted_in">Categories:
                                        @foreach($book->genres as $genre)
                                            <a
                                                href="https://demo2.pavothemes.com/bookory/product-category/action-adventure/"
                                                rel="tag">{{ $genre->name }}</a>,
                                        @endforeach
                                    </span>
                                </div>
                                <div class="bookory-social-share">
                                    <span class="social-share-header">Share:</span> <a class="social-facebook"
                                                                                       href="https://www.facebook.com/sharer.php?u=https://demo2.pavothemes.com/bookory/product/treachery-alpha-colony-book-8/&amp;display=page"
                                                                                       target="_blank"
                                                                                       title="Share on facebook">
                                        <i class="bookory-icon-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a class="social-twitter"
                                       href="https://twitter.com/home?status= https://demo2.pavothemes.com/bookory/product/treachery-alpha-colony-book-8/"
                                       target="_blank" title="Share on Twitter">
                                        <i class="bookory-icon-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a class="social-linkedin"
                                       href="http://linkedin.com/shareArticle?mini=true&amp;url=https://demo2.pavothemes.com/bookory/product/treachery-alpha-colony-book-8/&amp;title=Treachery: Alpha Colony Book 8"
                                       target="_blank" title="Share on LinkedIn">
                                        <i class="bookory-icon-linkedin-in"></i>
                                        <span>Linkedin</span>
                                    </a>
                                    <a class="social-pinterest"
                                       href="https://pinterest.com/pin/create/button/?url=http://https%3A%2F%2Fdemo2.pavothemes.com%2Fbookory%2Fproduct%2Ftreachery-alpha-colony-book-8%2F&amp;description=http://Treachery%3A+Alpha+Colony+Book+8&amp;; ?>"
                                       target="_blank" title="Share on Pinterest">
                                        <i class="bookory-icon-pinterest-p"></i>
                                        <span>Pinterest</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs" role="tablist">
                                <li class="description_tab active" id="tab-title-description" role="tab"
                                    aria-controls="tab-description">
                                    <a href="#tab-description">
                                        Mô tả </a>
                                </li>
                            </ul>
                            <h2 class="resp-accordion tab-description active" role="tab" data-control=".description_tab"
                                aria-controls="#tab-description">Description</h2>
                            <div
                                class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="">
                                <div class="woocommerce-tab-width">
                                    <h2>Mô tả</h2>
                                    <p>
                                        {!! $book->description !!}
                                    </p>
                                </div>
                            </div>
                            <h2 class="resp-accordion tab-additional_information" role="tab"
                                data-control=".additional_information_tab" aria-controls="#tab-additional_information">
                                Additional information</h2>
                            <div
                                class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab"
                                id="tab-additional_information" role="tabpanel"
                                aria-labelledby="tab-title-additional_information" style="display: none;">
                                <div class="woocommerce-tab-width">
                                    <h2>Additional information</h2>
                                    <table class="woocommerce-product-attributes shop_attributes">
                                        <tbody>
                                        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                                            <th class="woocommerce-product-attributes-item__label">Weight</th>
                                            <td class="woocommerce-product-attributes-item__value">96 kg</td>
                                        </tr>
                                        <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">
                                            <th class="woocommerce-product-attributes-item__label">Dimensions</th>
                                            <td class="woocommerce-product-attributes-item__value">160 × 193 × 49 cm
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h2 class="resp-accordion tab-reviews" role="tab" data-control=".reviews_tab"
                                aria-controls="#tab-reviews">Reviews (5)</h2>
                            <div
                                class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab"
                                id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews"
                                style="display: none;">
                                <div class="woocommerce-tab-width">
                                    <div id="reviews" class="woocommerce-Reviews">
                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">
                                                5 reviews for <span>Treachery: Alpha Colony Book 8</span></h2>
                                            <ol class="commentlist">
                                                <li class="review even thread-even depth-1" id="li-comment-32">
                                                    <div id="comment-32" class="comment_container">
                                                        <img alt=""
                                                             src="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=60&amp;d=mm&amp;r=g"
                                                             srcset="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=120&amp;d=mm&amp;r=g 2x"
                                                             class="avatar avatar-60 photo" height="60" width="60"
                                                             loading="lazy" decoding="async">
                                                        <div class="comment-text">
                                                            <div class="star-rating" role="img"
                                                                 aria-label="Rated 4 out of 5"><span style="width:80%">Rated <strong
                                                                        class="rating">4</strong> out of 5</span></div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">Join
                                                                    Hiddleston </strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                      datetime="2022-02-15T03:11:34+00:00">February 15,
                                                                    2022
                                                                </time>
                                                            </p>
                                                            <div class="description"><p>I am 6 feet tall and 220 lbs.
                                                                    This shirt fit me perfectly in the chest and
                                                                    shoulders. My only complaint is that it is so long!
                                                                    I like to wear polo shirts untucked. This shirt goes
                                                                    completely past my rear end. If I wore it with
                                                                    ordinary shorts, you probably wouldnt be able to see
                                                                    the shorts at all – completely hidden by the shirt.
                                                                    It needs to be 4 to 5 inches shorter in terms of
                                                                    length to suit me. I have many RL polo shirts, and
                                                                    this one is by far the longest. I dont understand
                                                                    why.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review odd alt thread-odd thread-alt depth-1"
                                                    id="li-comment-33">
                                                    <div id="comment-33" class="comment_container">
                                                        <img alt=""
                                                             src="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=60&amp;d=mm&amp;r=g"
                                                             srcset="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=120&amp;d=mm&amp;r=g 2x"
                                                             class="avatar avatar-60 photo" height="60" width="60"
                                                             loading="lazy" decoding="async">
                                                        <div class="comment-text">
                                                            <div class="star-rating" role="img"
                                                                 aria-label="Rated 5 out of 5"><span style="width:100%">Rated <strong
                                                                        class="rating">5</strong> out of 5</span></div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">Kenneth R.
                                                                    Myers </strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                      datetime="2022-02-15T03:11:36+00:00">February 15,
                                                                    2022
                                                                </time>
                                                            </p>
                                                            <div class="description"><p>The shirt was not the fabric I
                                                                    believed it to be. It says Classic Fit but was made
                                                                    like the older versions, not the soft cotton like my
                                                                    others. I don’t understand how the labels are the
                                                                    same but a completely different shirt. Oh well,
                                                                    stuck with it now.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review even thread-even depth-1" id="li-comment-34">
                                                    <div id="comment-34" class="comment_container">
                                                        <img alt=""
                                                             src="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=60&amp;d=mm&amp;r=g"
                                                             srcset="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=120&amp;d=mm&amp;r=g 2x"
                                                             class="avatar avatar-60 photo" height="60" width="60"
                                                             loading="lazy" decoding="async">
                                                        <div class="comment-text">
                                                            <div class="star-rating" role="img"
                                                                 aria-label="Rated 4 out of 5"><span style="width:80%">Rated <strong
                                                                        class="rating">4</strong> out of 5</span></div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">Mike
                                                                    Addington </strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                      datetime="2022-02-15T03:11:37+00:00">February 15,
                                                                    2022
                                                                </time>
                                                            </p>
                                                            <div class="description"><p>Real authentic genuine quality
                                                                    however it fit me like an XL size when In fact Im L.
                                                                    Beware</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review odd alt thread-odd thread-alt depth-1"
                                                    id="li-comment-35">
                                                    <div id="comment-35" class="comment_container">
                                                        <img alt=""
                                                             src="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=60&amp;d=mm&amp;r=g"
                                                             srcset="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=120&amp;d=mm&amp;r=g 2x"
                                                             class="avatar avatar-60 photo" height="60" width="60"
                                                             loading="lazy" decoding="async">
                                                        <div class="comment-text">
                                                            <div class="star-rating" role="img"
                                                                 aria-label="Rated 3 out of 5"><span style="width:60%">Rated <strong
                                                                        class="rating">3</strong> out of 5</span></div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">Ervin
                                                                    Arlington </strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                      datetime="2022-02-15T03:11:38+00:00">February 15,
                                                                    2022
                                                                </time>
                                                            </p>
                                                            <div class="description"><p>The Ralph Lauren quaility is
                                                                    here in abundance. My husband always says that the
                                                                    Lauren polos fit better and last longer than any
                                                                    other brand.I love the new “heathered” color and the
                                                                    price is always excellent through shop</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review even thread-even depth-1" id="li-comment-36">
                                                    <div id="comment-36" class="comment_container">
                                                        <img alt=""
                                                             src="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=60&amp;d=mm&amp;r=g"
                                                             srcset="https://secure.gravatar.com/avatar/8eb1b522f60d11fa897de1dc6351b7e8?s=120&amp;d=mm&amp;r=g 2x"
                                                             class="avatar avatar-60 photo" height="60" width="60"
                                                             loading="lazy" decoding="async">
                                                        <div class="comment-text">
                                                            <div class="star-rating" role="img"
                                                                 aria-label="Rated 5 out of 5"><span style="width:100%">Rated <strong
                                                                        class="rating">5</strong> out of 5</span></div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">Patrick M.
                                                                    Newman </strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                      datetime="2022-02-15T03:11:39+00:00">February 15,
                                                                    2022
                                                                </time>
                                                            </p>
                                                            <div class="description"><p>My son loved this Jacket for his
                                                                    Senior Prom… He got sooo many compliments! He is
                                                                    slim build 5’11 and 150lbs … I ordered a large … it
                                                                    was a little big … but it was fine!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <span id="reply-title"
                                                          class="comment-reply-title">Add a review <small><a
                                                                rel="nofollow" id="cancel-comment-reply-link"
                                                                href="/bookory/product/treachery-alpha-colony-book-8/#respond"
                                                                style="display:none;">Cancel reply</a></small></span>
                                                    <form
                                                        action="https://demo2.pavothemes.com/bookory/wp-comments-post.php"
                                                        method="post" id="commentform" class="comment-form"
                                                        novalidate=""><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                                                            <span class="required-field-message">Required fields are marked <span
                                                                    class="required">*</span></span></p>
                                                        <div class="comment-form-rating"><label for="rating">Your rating&nbsp;<span
                                                                    class="required">*</span></label>
                                                            <p class="stars"><span>							<a
                                                                        class="star-1" href="#">1</a>							<a
                                                                        class="star-2" href="#">2</a>							<a
                                                                        class="star-3" href="#">3</a>							<a
                                                                        class="star-4" href="#">4</a>							<a
                                                                        class="star-5" href="#">5</a>						</span>
                                                            </p><select name="rating" id="rating" required=""
                                                                        style="display: none;">
                                                                <option value="">Rate…</option>
                                                                <option value="5">Perfect</option>
                                                                <option value="4">Good</option>
                                                                <option value="3">Average</option>
                                                                <option value="2">Not that bad</option>
                                                                <option value="1">Very poor</option>
                                                            </select></div>
                                                        <p class="comment-form-comment"><textarea id="comment"
                                                                                                  name="comment"
                                                                                                  cols="45" rows="8"
                                                                                                  required=""
                                                                                                  placeholder="Your review *"></textarea>
                                                        </p>
                                                        <p class="comment-form-author"><input id="author" name="author"
                                                                                              type="text" value=""
                                                                                              size="30" required=""
                                                                                              placeholder="Name *"></p>
                                                        <p class="comment-form-email"><input id="email" name="email"
                                                                                             type="email" value=""
                                                                                             size="30" required=""
                                                                                             placeholder="Email *"></p>
                                                        <p class="comment-form-cookies-consent"><input
                                                                id="wp-comment-cookies-consent"
                                                                name="wp-comment-cookies-consent" type="checkbox"
                                                                value="yes"> <label for="wp-comment-cookies-consent">Save
                                                                my name, email, and website in this browser for the next
                                                                time I comment.</label></p>
                                                        <p class="form-submit"><input name="submit" type="submit"
                                                                                      id="submit" class="submit"
                                                                                      value="Submit"> <input
                                                                type="hidden" name="comment_post_ID" value="99"
                                                                id="comment_post_ID">
                                                            <input type="hidden" name="comment_parent"
                                                                   id="comment_parent" value="0">
                                                        </p></form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="resp-accordion tab-seller" role="tab" data-control=".seller_tab"
                                aria-controls="#tab-seller">Vendor Info</h2>
                            <div
                                class="woocommerce-Tabs-panel woocommerce-Tabs-panel--seller panel entry-content wc-tab"
                                id="tab-seller" role="tabpanel" aria-labelledby="tab-title-seller"
                                style="display: none;">
                                <div class="woocommerce-tab-width">
                                    <h2>Vendor Information</h2>
                                    <ul class="list-unstyled">
                                        <li class="store-name">
                                            <span>Store Name:</span>
                                            <span class="details">
Gregstore </span>
                                        </li>
                                        <li class="seller-name">
<span>
Vendor: </span>
                                            <span class="details">
<a href="https://demo2.pavothemes.com/bookory/store/gregstore/">Gregstore</a> </span>
                                        </li>
                                        <li class="store-address">
                                            <span><b>Address:</b></span>
                                            <span class="details">
2715 Ash Dr. San Jose, South Dakota 83475<br>Free State<br>South Africa </span>
                                        </li>
                                        <li class="clearfix">
                                            <span class="text">4.20 rating from 15 reviews</span><span
                                                class="seller-rating"><div class="star-rating" role="img"
                                                                           aria-label="Rated 4.20 out of 5"><span
                                                        style="width:84%">Rated <strong class="rating">4.20</strong> out of 5 based on <span
                                                            class="rating">15</span> customer ratings</span></div></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <section class="related products">
                            <h2>Sách cùng thể loại</h2>
                            <ul class="products columns-6">
                                <li class="product-style-default product type-product post-101 status-publish first instock product_cat-action-adventure product_cat-activity-books product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail featured virtual purchasable product-type-simple">
                                    <div class="product-block">
                                        <div class="product-transition">
                                            <div class="product-image"><img width="600" height="840"
                                                                            src="https://demo2.pavothemes.com/bookory/wp-content/uploads/2022/02/30.jpg"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="" decoding="async" loading="lazy">
                                            </div>
                                            <div class="group-action">
                                                <div class="shop-action vertical">
                                                    <button class="woosw-btn woosw-btn-101 woosw-btn-added woosw-added"
                                                            data-id="101" data-product_name="Surrounded by Idiots"
                                                            data-product_image="https://demo2.pavothemes.com/bookory/wp-content/uploads/2022/02/30.jpg">
                                                        Browse wishlist
                                                    </button>
                                                    <button class="woosq-btn woosq-btn-101" data-id="101"
                                                            data-effect="mfp-3d-unfold" data-context="default">Quick
                                                        view
                                                    </button>
                                                    <div class="opal-add-to-cart-button">
                                                        <a href="?add-to-cart=101" data-quantity="1"
                                                           class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                           data-product_id="101" data-product_sku="B93927888"
                                                           aria-label="Add “Surrounded by Idiots” to your cart"
                                                           rel="nofollow">Add to cart</a></div>
                                                </div>
                                            </div>
                                            <a href="https://demo2.pavothemes.com/bookory/product/surrounded-by-idiots/"
                                               class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="woocommerce-loop-product__title"><a
                                                    href="https://demo2.pavothemes.com/bookory/product/surrounded-by-idiots/">Surrounded
                                                    by Idiots</a></h3>
                                            <div class="count-review">
                                                <div class="star-rating" role="img" aria-label="Rated 3.75 out of 5">
                                                    <span style="width:75%">Rated <strong class="rating">3.75</strong> out of 5</span>
                                                </div>
                                                <span>5</span></div>
                                            <div class="woocommerce-loop-product__author"><a
                                                    href="https://demo2.pavothemes.com/bookory/book-author/georgia-ramirez/">Georgia
                                                    Ramirez</a></div>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>825.85</bdi></span></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
