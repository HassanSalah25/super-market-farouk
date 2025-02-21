<!--================= Brand Section Start Here =================-->
<div class="rts-brands-section1 brand-bg3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="slider-div">
                    <div class="swiper rts-brandSlide1">
                        <div class="swiper-wrapper">
                            <?php if(isset($settings['header_style_one'])): ?>

                                <?php $__currentLoopData = $settings['header_style_one']['logo_image_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $logo_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <div class="swiper-slide">
                                    <a class="brand-front" href="#">
                                        <?php echo render_image_markup_by_attachment_id($logo_image); ?>

                                    </a>

                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Brand Section End Here =================--><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/brand/brand_style_one.blade.php ENDPATH**/ ?>