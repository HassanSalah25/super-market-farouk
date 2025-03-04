<!--================= New Collection supermarket  Section End Here =================-->
<div class="rts-featured-product-section1">
    <div class="container">
        <div class="rts-featured-product-section-inner">
            <div class="section-header section-header3 text-center">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="<?php echo e(asset('assets/frontend/assets/images/banner/wvbo-icon.png')); ?>"
                             alt="">
                        <span class="sub-text"><?php echo e(__('Featured')); ?></span>
                        <img class="line-2" src="<?php echo e(asset('assets/frontend/assets/images/banner/wvbo-icon.png')); ?>"
                             alt="">
                    </div>
                    <h2 class="title"><?php echo e($section_title); ?></h2>
                </div>
            </div>
            <div class="row">
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

                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item element-item1">
                            <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"
                               class="product-image image-hover-variations">
                                <div class="image-vari1 image-vari">
                                    <?php
                                        $isAjax = isset($isAjax) && $isAjax ? $isAjax : true;
                                        $is_lazy = isset($isAjax) && $isAjax ? false : true; // if loaded on product filter or any other ajax, disable lazy loading
                                    ?>
                                    <?php echo render_image_markup_by_attachment_id($product->image, '', 'grid', $is_lazy, $isAjax); ?>

                                </div>
                                <div class="image-vari2 image-vari">
                                    <?php
                                        $product_image_gallery = $product->product_image_gallery && $product->product_image_gallery != 'null'
                                                                    ? json_decode($product->product_image_gallery, true)
                                                                    : [];
                                    ?>
                                    <?php if($product_image_gallery && count($product_image_gallery)): ?>
                                        <?php echo render_image_markup_by_attachment_id($product_image_gallery[0], '', 'grid', $is_lazy, $isAjax); ?>

                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="bottom-content">
                                <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"
                                   class="product-name"><?php echo e($product->title); ?></a>
                                <div class="action-wrap">
                                    <span class="price"><?php echo e($sale_price); ?></span>
                                </div>
                            </div>
                            <div class="quick-action-button">
                                <div class="cta-single cta-plus">
                                    <a href="#"><i class="rt-plus"></i></a>
                                </div>
                                <div class="cta-single cta-quickview">
                                    <?php if(isset($attributes) && $attributes > 0): ?>
                                        <a class="product-quick-view-ajax" href="javascript:void(0)"
                                           data-action-route="<?php echo e(route('frontend.products.single-quick-view', $product->slug)); ?>">
                                            <i class="fal fa-eye"></i>
                                        </a>
                                    <?php else: ?>
                                        <a href="#"
                                           class="quick-view" <?php echo getQuickViewDataMarkup($product); ?>>
                                            <i class="fal fa-eye"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="cta-single cta-wishlist">
                                    <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"
                                       class="add_to_wishlist_ajax" data-id="<?php echo e($product->id); ?>"><i
                                                class="fal fa-heart"></i></a>
                                </div>
                                <div class="cta-single cta-addtocart">
                                    <?php if(isset($attributes) && $attributes > 0): ?>
                                        <a href="<?php echo e(route('frontend.products.single', $product->slug)); ?>"><i
                                                    class="rt-basket-shopping"></i></a>
                                    <?php else: ?>
                                        <a href="#" data-attributes="<?php echo e($product->attributes); ?>"
                                           data-id="<?php echo e($product->id); ?>"
                                           class="add_to_cart_ajax"
                                        >
                                            <i class="rt-basket-shopping"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="product-features">
                                <?php if(!empty($product->badge)): ?>
                                    <div class="new-tag product-tag"><?php echo e($product->badge); ?></div>
                                <?php endif; ?>
                                <?php if(!empty($campaign_percentage)): ?>
                                    <div class="discount-tag product-tag"><?php echo e(round($campaign_percentage,2)); ?>%</div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<!--================= New Collection supermarket  Section End Here =================-->
<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/product/product_slider_six.blade.php ENDPATH**/ ?>