
<!--================= Footer Start Here =================-->
<div class="footer footer-1 ar-rtl">
    <div class="container">
        <div class="footer-feature1">
            <div class="row align-items-center">
                <?php $__currentLoopData = $settings['header_eleven']['title_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="wrapper">
                        <div class="icon">
                            <i style="font-size: 73px;" class="<?php echo e($settings['header_eleven']['button_icon_'][$key]); ?> text-danger icon"></i>
                        </div>
                        <div class="title">
                            <h1 class="box-title"><?php echo e($title); ?></h1>
                            <p><?php echo e($settings['header_eleven']['description_'][$key]); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<!--================= Footer End Here =================--><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/iconbox/iconbox-01.blade.php ENDPATH**/ ?>