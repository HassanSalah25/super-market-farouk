

<!--================= New Collection supermarket  Section End Here =================-->
<div class="rts-featured-product-section rts-featured-product-section2 section-gap">
    <div class="container">
        <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                "><?php echo e($section_title); ?></span>
        </div>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
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
                ?>
                <div class="col-lg-15 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-status-bar">
                            <span class="icon-wrap">
                            <?php if($product->ratingCount()): ?>
                                    <?php echo ratingMarkup($product->ratingAvg(), $product->ratingCount(), false); ?>

                            <?php endif; ?>
                            </span>
                            <?php if($product->ratingCount()): ?>
                                <span class="total-feedback">(<?php echo e($product->ratingCount()); ?>)</span>
                            <?php else: ?>
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                    <div class="rating-star"><i class="fal fa-star"></i></div>
                                </div>
                            <?php endif; ?>
                            <?php if(isset($isCampaign) && $isCampaign): ?>
                                <span class="stock"><?php echo e($campaignItemInfo['in_stock_count']); ?><?php echo e(__('In Stock')); ?></span>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>" class="product-thumb">
                            <?php
                                $isAjax = isset($isAjax) && $isAjax ? $isAjax : true;
                                $is_lazy = isset($isAjax) && $isAjax ? false : true; // if loaded on product filter or any other ajax, disable lazy loading
                            ?>
                            <?php echo render_image_markup_by_attachment_id($product->image, '', 'grid', $is_lazy, $isAjax); ?>

                        </a>
                        <div class="contents">
                            <span class="product-type"><?php echo e($product->category?->title); ?></span>
                            <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>" class="product-title"><?php echo e($product->title); ?></a>
                            <div class="product-bottom-content">
                                <span class="product-price"><?php echo e(float_amount_with_currency_symbol($sale_price)); ?></span>
                            </div>
                            <div class="product-actions product-actions3">
                                <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"
                                   class="product-action add_to_wishlist_ajax" data-id="<?php echo e($product->id); ?>" ><i class="fal fa-heart"></i></a>
                            </div>
                            <div class="product-features product-features2">
                                <?php if(!empty($product->badge)): ?>
                                    <div class="new-tag product-tag"><?php echo e($product->badge); ?></div>
                                <?php endif; ?>
                                <?php if(!empty($campaign_percentage)): ?>
                                    <div class="discount-tag product-tag"><?php echo e(round($campaign_percentage,2)); ?>%</div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="product-bottom-action">
                            <?php if(isset($attributes) && $attributes > 0): ?>
                                <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"
                                   class="add-cart-style-02"><?php echo e(__('View Options')); ?></a>
                            <?php else: ?>
                                <a href="#" data-attributes="<?php echo e($product->attributes); ?>" data-id="<?php echo e($product->id); ?>"
                                   class="add-cart-style-02 add_to_cart_ajax"
                                >
                                    <?php echo e(__('Add to Bag')); ?>

                                </a>
                            <?php endif; ?>
                                <?php if(isset($attributes) && $attributes > 0): ?>
                                    <a class="product-quick-view-ajax" href="javascript:void(0)"
                                       data-action-route="<?php echo e(route('frontend.products.single-quick-view', $product->slug)); ?>">
                                        <i class="fal fa-eye"></i>
                                    </a>
                                <?php else: ?>
                                    <a href="#" class="quick-view" <?php echo getQuickViewDataMarkup($product); ?>>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!--================= New Collection supermarket  Section End Here =================-->
<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/product/product_slider_three.blade.php ENDPATH**/ ?>