<div class="banner banner-1 bg-image ar-rtl" data-padding-top="<?php echo e($settings['padding_top']); ?>"
     data-padding-bottom="<?php echo e($settings['padding_bottom']); ?>">
    <div class="container custom-container-1318">
        <div class="banner-inner">
            <div class="row new-ar-4">
                <div class="col-xl-2 col-md-4 col-sm-12 gutter-1">
                    <div class="menu-vertical mt-2">
                        <div class="responsive megamenu-style-dev">
                            <div class="so-vertical-menu no-gutter">
                                <nav class="navbar-default">
                                    <div class="container-megamenu container vertical">
                                        <div class="vertical-wrapper">
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="300">
                                                        <li class="bg-info-1 p-3">
                                                            <h5 class="text-white" style="margin-bottom: 0px;">
                                                                <img src="<?php echo e(asset('assets/frontend/assets/images/icon-menu.png')); ?>"
                                                                     alt="">

                                                                <?php echo e(__('All Categories')); ?></h5>
                                                        </li>
                                                        <?php
                                                          $slider_categories = getAllCategory()->take(7);
                                                         ?>
                                                        <?php $__currentLoopData = $slider_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="item-vertical mega-style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="<?php echo e(route('frontend.products.category', $category->id)); ?>" class="">
                                                                <span>
                                                                 <strong>
                                                                    <?php echo render_image_markup_by_attachment_id($category->image, 'lazyautosizes lazyloaded cat-slider-img', 'grid', false); ?>

                                                                     <?php echo e($category->title); ?>

                                                                 </strong>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-md-8 col-sm-12 gutter-2">
                    <!-- header area start -->
                    <div class="swiper bannerSlide2">
                        <div class="swiper-wrapper">
                            <?php $data = $settings['header_style_one']; ?>
                            <?php $__currentLoopData = $data['subtitle_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subtitle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-1" <?php echo render_background_image_markup_by_attachment_id($data['background_image_'][$key], 'full', false); ?>>
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <p class="slider-subtitle"><img
                                                                src="https://weiboo.pixcelsthemes.com/weiboo/assets/images/banner/wvbo-icon.png"
                                                                alt=""> <?php echo e($data['title_'][$key]); ?> </p>
                                                    <h2 class="slider-title"><?php echo e($data['subtitle_'][$key]); ?></h2>
                                                    <div class="slider-description">
                                                        <p><?php echo e($data['offer_text_'][$key]); ?></p>
                                                    </div>
                                                    <a href="<?php echo e(\App\traits\URL_PARSE::url($data['button_url_'][$key])); ?>"
                                                       class="slider-btn2"><?php echo e($data['button_text_'][$key]); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!-- header area end -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/header/header_slider_one.blade.php ENDPATH**/ ?>