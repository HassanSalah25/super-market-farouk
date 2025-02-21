

<!--================= New Collection supermarket  Section End Here =================-->
<div class="rts-featured-product-section rts-featured-product-section2 section-gap">
    <div class="container">
        <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">{{ $section_title }}</span>
        </div>
        <div class="row justify-content-center">
            @foreach($all_products as $product)
                @php
                    $model = $model ?? true;
                    // check if product is isset and not empty only then those code will work
                    if(empty($product)){
                        return false;
                    }
                    $attributes = \Modules\Product\Entities\ProductInventoryDetails::where("product_id",optional($product)->id)->count();

                    if (isset($isCampaign) && $isCampaign) {
                        $campaign_product = getCampaignProductById(optional($product)->id);

                        $campaignItemInfo = getCampaignItemStockInfo($campaign_product);
                        $percentage = $campaignItemInfo['sold_count'] / $campaignItemInfo['in_stock_count'] * 100;
                        $campaignProductEndDate = optional($product)->campaign->end_date ?? optional($product)->campaign->end_date ?? '';

                        $sale_price = $campaign_product ? $campaign_product->campaign_price : $product->sale_price;
                        $deleted_price = $campaign_product ? optional($product)->sale_price : optional($product)->price;
                        $campaign_percentage = $campaign_product ? getPercentage(optional($product)->sale_price, $sale_price) : false;
                    }else{
                        $campaign_product = getCampaignProductById($product->id);
                        $sale_price = $campaign_product ? $campaign_product->campaign_price : $product->sale_price;
                        $deleted_price = $campaign_product ? $product->sale_price : $product->price;
                        $campaign_percentage = $campaign_product ? getPercentage($product->sale_price, $sale_price) : false;
                    }
                @endphp
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <span class="icon-wrap">
                            @if($product->ratingCount())
                                    {!! ratingMarkup($product->ratingAvg(), $product->ratingCount(), false) !!}
                            @endif
                            </span>
                            @if($product->ratingCount())
                                <span class="total-feedback">({{ $product->ratingCount() }})</span>
                            @else
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                </div>
                            @endif
                            @if(isset($isCampaign) && $isCampaign)
                                <span class="stock">{{ $campaignItemInfo['in_stock_count'] }}{{ __('In Stock') }}</span>
                            @endif
                        </div>
                        <a href="{{ route('frontend.products.single', $product->slug) }}" class="product-thumb">
                            @php
                                $isAjax = isset($isAjax) && $isAjax ? $isAjax : true;
                                $is_lazy = isset($isAjax) && $isAjax ? false : true; // if loaded on product filter or any other ajax, disable lazy loading
                            @endphp
                            {!! render_image_markup_by_attachment_id($product->image, '', 'grid', $is_lazy, $isAjax) !!}
                        </a>
                        <div class="contents">
                            <span class="product-type">{{ $product->category?->title }}</span>
                            <a href="{{ route('frontend.products.single', $product->slug) }}" class="product-title">{{ $product->title }}</a>
                            <div class="product-bottom-content">
                                <span class="product-price">{{ float_amount_with_currency_symbol($sale_price) }}</span>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="{{ route('frontend.products.single', $product->slug) }}"
                                   class="product-action add_to_wishlist_ajax" data-id="{{ $product->id }}" ><i class="fal fa-heart"></i></a>
                            </div>
                            <div class="product-features product-features2">
                                @if(!empty($product->badge))
                                    <div class="new-tag product-tag">{{ $product->badge }}</div>
                                @endif
                                @if(!empty($campaign_percentage))
                                    <div class="discount-tag product-tag">{{ round($campaign_percentage,2) }}%</div>
                                @endif
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            @if(isset($attributes) && $attributes > 0)
                                <a href="{{ route('frontend.products.single', $product->slug) }}"
                                   class="add-cart-style-02">{{ __('View Options') }}</a>
                            @else
                                <a href="#" data-attributes="{{ $product->attributes }}" data-id="{{ $product->id }}"
                                   class="add-cart-style-02 add_to_cart_ajax"
                                >
                                    {{ __('Add to Bag') }}
                                </a>
                            @endif
                                @if(isset($attributes) && $attributes > 0)
                                    <a class="product-quick-view-ajax" href="javascript:void(0)"
                                       data-action-route="{{ route('frontend.products.single-quick-view', $product->slug) }}">
                                        <i class="fal fa-eye"></i>
                                    </a>
                                @else
                                    <a href="#" class="quick-view" {!! getQuickViewDataMarkup($product) !!}>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--================= New Collection supermarket  Section End Here =================-->
