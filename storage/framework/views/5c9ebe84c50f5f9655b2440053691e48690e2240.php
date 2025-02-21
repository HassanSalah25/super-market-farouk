<div class="rts-deal-section section-gap" data-padding-top="<?php echo e($settings['padding_top']); ?>"
     data-padding-bottom="<?php echo e($settings['padding_bottom']); ?>">
    <div class="container position-relative custom-container-1318">
        <div class="section-header section-header4">
            <div class="flex-wrapper">
                <div class="section-title-wrapper-02">
                    <span class="section-title section-title-2 mb--5
                "><?php echo e($banner_title); ?></span>
                </div>
            </div>
            <a href="<?php echo e(url($button_url)); ?>" class="go-btn"><?php echo e(__('All Products')); ?><i class="fal fa-long-arrow-right"></i></a>

        </div>
        <div class="swiper oneSlide swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-eba54d9a0d4f5a61" aria-live="polite"
                 style="transition-duration: 0ms; transform: translate3d(-2860px, 0px, 0px);">
                <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $attributes = \Modules\Product\Entities\ProductInventoryDetails::where("product_id",$product->id)->count();

                        $campaign_product = getCampaignProductById($product->id);
                        $campaignProductEndDate = $product->campaign->end_date ?? $product->campaign->end_date->end_date ?? '';

                        $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $product->sale_price;
                        $deleted_price = !is_null($campaign_product) ? $product->sale_price : $product->price;
                        $campaign_percentage = !is_null($campaign_product) ? getPercentage($product->sale_price, $sale_price) : false;

                        $campaignSoldCount = \App\Campaign\CampaignSoldProduct::where("product_id",$product->id)->first();
                        $stock_count = $campaign_product ? $campaign_product->units_for_sale - optional($campaignSoldCount)->sold_count ?? 0 : optional($product->inventory)->stock_count;
                        $stock_count = $stock_count > 0 ? $stock_count : 0;
                    ?>
                    <div class="swiper-slide swiper-slide-duplicate-active swiper-slide-prev swiper-slide-duplicate-next product_card"
                         data-swiper-slide-index="0" style="width: 1400px; margin-right: 30px;" role="group"
                         aria-label="1 / 1">
                        <div class="deal-box">
                            <div class="deal-box-inner">
                                <div class="deal-product">
                                    <div class="filter-buttons">
                                        <?php
                                            $product_image_gallery = $product->product_image_gallery && $product->product_image_gallery != 'null'
                                                                        ? json_decode($product->product_image_gallery, true)
                                                                        : [];
                                        ?>
                                        <?php if($product_image_gallery && count($product_image_gallery)): ?>
                                            <?php $__currentLoopData = $product_image_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="filter-btn" data-show=".one">
                                                    <?php echo render_image_markup_by_attachment_id($gallery_image, 'img-fluid', 'full', false); ?>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-area">
                                        <div class="product detail-product one filterd-items">
                                            <div class="product-thumb">
                                                <?php echo render_image_markup_by_attachment_id($product->image, '', 'grid', false); ?>

                                            </div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">

                                                        <?php if($product->ratingCount()): ?>
                                                            <?php echo ratingMarkup($product->ratingAvg(), $product->ratingCount()); ?>

                                                        <?php endif; ?>
                                                        <span class="rating-qnty">(<?php echo e($product->ratingCount()); ?> <?php echo e(__('Reviews')); ?>)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><?php echo e($product->title); ?></h2>
                                                <span class="product-price"><?php echo e(float_amount_with_currency_symbol($sale_price)); ?> <span
                                                            class="old-price"><?php echo e(float_amount_with_currency_symbol($deleted_price)); ?></span></span>
                                                <div class="product-buttons">
                                                    <div class="hover-content mx-3">
                                                        <div class="cart-control d-none">
                                                            <div class="value-button minus decrease"><i
                                                                        class="las la-minus"></i></div>
                                                            <input type="number" name="quantity" class="qty_"
                                                                   value="1"/>
                                                            <div class="value-button plus increase"><i
                                                                        class="las la-plus"></i></div>
                                                        </div>
                                                        <div class="btn-wrapper">
                                                            <?php if(isset($attributes) && $attributes > 0): ?>
                                                                <button href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"
                                                                        class="add-cart-style-01"><?php echo e(__('View Options')); ?></button>
                                                            <?php else: ?>
                                                                <button href="#"
                                                                        data-attributes="<?php echo e($product->attributes); ?>"
                                                                        data-id="<?php echo e($product->id); ?>"
                                                                        class="add-cart-style-01 add_to_cart_ajax_with_quantity"><?php echo e(__('Add to Bag')); ?></button>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <button data-id="<?php echo e($product->id); ?>"
                                                            class="wishlist-btn add_to_wishlist_ajax"><i
                                                                class="rt-heart"></i></button>
                                                    <button data-id="<?php echo e($product->id); ?>"
                                                            class="exchange-btn add_to_compare_ajax"><i
                                                                class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-box">
                                    <div class="product">
                                        <div class="product-thumb">

                                            <?php echo render_image_markup_by_attachment_id($banner_image, '', 'grid', false); ?>

                                        </div>
                                        <div class="contents">
                                            <span class="product-catagory"><?php echo e($banner_subtitle); ?></span>
                                            <h2 class="product-title"><?php echo e($banner_title); ?></h2>
                                            <a href="<?php echo e(url($button_url)); ?>" class="cart-btn"><?php echo e($button_text); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        </div>

        <div class="slider-navigation">
            <div class="swiper-button-prev slider-btn prev" tabindex="0" role="button" aria-label="Previous slide"
                 aria-controls="swiper-wrapper-eba54d9a0d4f5a61"><i class="fal fa-long-arrow-left"></i></div>
            <div class="swiper-button-next slider-btn next" tabindex="0" role="button" aria-label="Next slide"
                 aria-controls="swiper-wrapper-eba54d9a0d4f5a61"><i class="fal fa-long-arrow-right"></i></div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/product/product_slider_two.blade.php ENDPATH**/ ?>