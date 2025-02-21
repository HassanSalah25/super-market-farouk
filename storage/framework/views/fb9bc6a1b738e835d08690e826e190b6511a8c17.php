
<!--================= Furniture end New section =================-->
<div class="rts-box-catagory-section">
    <div class="box-catagory-inner">
        <div class="row">

            <?php $__currentLoopData = $product_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box1">
                        <a href="<?php echo e(route('frontend.products.category', [
                                'id' => $category->id,
                                'slug' => \Str::slug($category->title ?? '')
                            ])); ?>" class="picture">
                            <?php echo render_image_markup_by_attachment_id($category->image, '', 'grid', false); ?>

                        </a>
                        <a href="<?php echo e(route('frontend.products.category', [
                                'id' => $category->id,
                                'slug' => \Str::slug($category->title ?? '')
                            ])); ?>" class="view-collection-btn"><?php echo e(__('View Collection')); ?></a>
                        <div class="contents">
                            <div class="icon">
                                <img src="https://weiboo.pixcelsthemes.com/weibooassets/images/icons/bell.png"
                                                   alt="">
                            </div>
                            <h2 class="box-heading"><?php echo e($category->title); ?></h2>
                        </div>
                        <span class="item-update">100 <?php echo e(__('New Added')); ?></span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!--================= Furniture end New section =================--><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/product/category/slider_one.blade.php ENDPATH**/ ?>