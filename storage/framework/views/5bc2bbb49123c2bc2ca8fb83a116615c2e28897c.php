

<!-- add-x area start -->
<div class="add-banner-x-area-wrapper index-03">
    <div class="container custom-container-1720">
        <div class="row">
            <?php $__currentLoopData = $settings['banner_style_six']['background_image_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="add-banner-x-style-01">
                        <a href="<?php echo e(\App\traits\URL_PARSE::url($settings['banner_style_six']['button_url_'][$key])); ?>">
                            <?php echo render_image_markup_by_attachment_id($image, '', 'full', true, false); ?>

                        </a>
                        <div class="content">
                            <h4 class="title"><?php echo e($settings['banner_style_six']['title_'][$key]); ?></h4>
                            <span class="sub-title"><?php echo e($settings['banner_style_six']['subtitle_'][$key]); ?></span>
                            <div class="btn-wrapper">
                                <a href="<?php echo e(\App\traits\URL_PARSE::url($settings['banner_style_six']['button_url_'][$key])); ?>" class="shop-now-btn-style-01"><?php echo e($settings['banner_style_six']['button_text_'][$key]); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!-- add-x area end -->
<!--================= fashion start New section =================-->
<div class="banner banner-2 bg-image">
    <div class="container">
        <div class="banner-inner">
            <div class="row align-items-center display-banner">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="rts-heading">
                        <div class="react-image">
                            <img src="https://weiboo.pixcelsthemes.com/weiboo/assets/images/banner/dot.png" alt="">
                        </div>
                        <div class="title-inner">
                            <div class="sub-content">
                                <img class="line-1-img"
                                     src="https://weiboo.pixcelsthemes.com/weiboo/assets/images/banner/wvbo-icon.png"
                                     alt="">
                                <span class="sub-text">Spring summer 22 women’s collection</span>
                            </div>
                            <h2 class="title">
                                    <span class="watermark">
                                        Hot Collection <br> For Women
                                    </span>
                            </h2>
                        </div>
                        <p class="description">Easy & safe payment with PayPal. sequins & embroidered for all
                        </p>
                        <a href="slidebar-left.html" class="section-btn2">View Collections</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="product-item2 element-item2">
                        <a href="product-details.html" class="product-image2 image-slider-variations">
                            <div class="swiper productSlide2">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $settings['banner_style_six']['background_image_']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide">
                                            <div class="image-vari1 image-vari">
                                                <?php echo render_image_markup_by_attachment_id($image, '', 'full', true, false); ?>

                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-12">
                            <div class="product-item element-item2">
                                <a href="product-details.html" class="product-image image-slider-variations">
                                    <div class="hot">HOT</div>
                                    <div class="swiper productSlide">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="image-vari1 image-vari"><img
                                                            src="https://weiboo.pixcelsthemes.com/weiboo/assets/images/hand-picked/slider-img8.webp"
                                                            alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                            src="https://weiboo.pixcelsthemes.com/weiboo/assets/images/hand-picked/slider-img8_2.jpg"
                                                            alt="product-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="image-vari2 image-vari"><img
                                                            src="https://weiboo.pixcelsthemes.com/weiboo/assets/images/hand-picked/slider-img8_3.jpg"
                                                            alt="product-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-buttons">
                                        <div class="button-prev slider-btn"><i class="rt-arrow-left-long"></i>
                                        </div>
                                        <div class="button-next slider-btn"><i class="rt-arrow-right-long"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <a href="product-details.html" class="product-name">Maidenform Bra</a>
                                    <div class="action-wrap">
                                        <span class="price">$31.00</span>
                                    </div>
                                </div>
                                <div class="quick-action-button">
                                    <div class="cta-single cta-plus">
                                        <a href="#"><i class="rt-plus"></i></a>
                                    </div>
                                    <div class="cta-single cta-quickview">
                                        <button class="product-details-popup-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                    <div class="cta-single cta-wishlist">
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="cta-single cta-addtocart">
                                        <a href="cart.html"><i class="rt-basket-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= fashion end New section =================--><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/banner/banner_style_six.blade.php ENDPATH**/ ?>