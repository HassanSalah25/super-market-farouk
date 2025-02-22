<div class="rts-new-collection-section section-gap" data-padding-top="<?php echo e(@$settings['padding_top']); ?>"
     data-padding-bottom="<?php echo e(@$settings['padding_bottom']); ?>">
    <div class="container custom-container-1318">
        <div class="recent-products-header section-header">
        </div>
        <div class="swiper rts-cmmnSlider-over" data-swiper="pagination">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="<?php echo e(route('frontend.products.category', [
                                'id' => optional($category)->id,
                                'slug' => \Str::slug(optional($category)->title ?? '')
                            ])); ?>">
                                <?php echo render_image_markup_by_attachment_id($category->image); ?>

                            </a>
                            <p class="item-quantity" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                <?php echo e($category->subcategory->count()); ?>

                                <span><?php echo e(__('items')); ?></span>
                            </p>
                            <a href="<?php echo e(route('frontend.products.category', [
                                'id' => optional($category)->id,
                                'slug' => \Str::slug(optional($category)->title ?? '')
                            ])); ?>" class="item-catagory-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                <h3 class="title"><?php echo e($category->title); ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/category/category_slider_one.blade.php ENDPATH**/ ?>