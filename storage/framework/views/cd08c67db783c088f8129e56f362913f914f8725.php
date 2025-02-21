<!DOCTYPE html>
<html class="no-js" lang="<?php echo e(App\Helpers\LanguageHelper::user_lang_slug()); ?>"
      dir="<?php echo e(App\Helpers\LanguageHelper::user_lang_dir()); ?>">

<head>
    <?php echo $__env->make('frontend.partials.google-analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(empty($global_static_field_data)): ?>
        <?php
            $global_static_field_data = [];
        ?>
    <?php endif; ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(request()->routeIs('homepage')): ?>
        <meta name="description"
              content="<?php echo e(filter_static_option_value('site_meta_description', $global_static_field_data)); ?>">
        <meta name="tags" content="<?php echo e(filter_static_option_value('site_meta_tags', $global_static_field_data)); ?>">
    <?php else: ?>
        <?php echo $__env->yieldContent('page-meta-data'); ?>
    <?php endif; ?>
    <?php echo render_favicon_by_id(filter_static_option_value('site_favicon', $global_static_field_data)); ?>

    <?php echo load_google_fonts(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/bootstrap.min-v4.6.0.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/line-awesome.min-v1.3.0.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/jquery.fancybox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/slick.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/main-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/main-style-two.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/dynamic-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/helpers.css')); ?>">

    <?php echo $__env->make('frontend.partials.css-variable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('style'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/toastr.css')); ?>">

    <?php if(!empty(filter_static_option_value('site_rtl_enabled', $global_static_field_data)) || get_user_lang_direction() == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/rtl.css')); ?>">
    <?php endif; ?>
    <?php echo $__env->make('frontend.partials.og-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>var siteurl = "<?php echo e(url('/')); ?>";</script>
    <?php echo filter_static_option_value('site_third_party_tracking_code', $global_static_field_data); ?>



    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/bootstrap.min.css')); ?>">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/all.min.css')); ?>">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/rt-icons.css')); ?>">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/animate.min.css')); ?>">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/magnific-popup.css')); ?>">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/swiper-bundle.min.css')); ?>">
    <!--================= Mobile Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/metisMenu.css')); ?>">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/rtsmenu.css')); ?>">
    <!--================= Preloader CSS =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/preloader.css')); ?>">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/variables/variable1.css')); ?>">
    <!--================= cdn animation =================-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/main.css')); ?>">
    <?php if(!empty(filter_static_option_value('site_rtl_enabled', $global_static_field_data)) || get_user_lang_direction() == 'rtl'): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/assets/css/main-ar.css')); ?>">
    <?php endif; ?>
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/main-ar.css"> -->
</head>

<?php
    $home_page_variant = $home_page ?? filter_static_option_value('home_page_variant', $global_static_field_data);
?>

<body>
<?php echo $__env->make('frontend.partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php

    $page_details = $page_details ?? $page_post ?? '';

    $navbar_type = $page_details->navbar_variant ?? get_static_option('global_navbar_variant') ?? 1;

    $page_container = $navbar_type == 1 ? 'custom-container-1318' : 'custom-container-1720';

?>
        <!--================= Header Section Start Here =================-->
<header id="rtsHeader">
    <header id="header" class=" typeheader-1">

        <!-- Header Top -->
        <div class="header-top hidden-compact" dir="ltr">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-md hidden-sm hidden-xs welcome-msg">
                            <ul class="social-link-list">

                                <?php if(!empty($all_social_item) && $all_social_item->count()): ?>

                                    <?php $__currentLoopData = $all_social_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <li class="link-item"><a href="<?php echo e($social_item->url); ?>">
                                                <i class="<?php echo e($social_item->icon); ?> icon"></i></a>
                                        </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php endif; ?>

                            </ul>
                        </div>

                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">

                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <div class="select-option">

                                        <div class="single-select">

                                            <select class="lang" id="change_site_language" style="padding-top: 0;padding-bottom: 0">

                                                <?php if($all_language && $all_language->count()): ?>

                                                    <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <?php

                                                            $lang_name = explode('(',$lang->name);

                                                            $data = array_shift($lang_name);

                                                        ?>

                                                        <option <?php if(get_user_lang() == $lang->slug): ?> selected
                                                                <?php endif; ?> value="<?php echo e($lang->slug); ?>"><?php echo e($data); ?></option>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php endif; ?>

                                            </select>

                                        </div>

                                    </div>
                                </div>

                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo">
                            <a href="<?php echo e(route('homepage')); ?>">
                                <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_logo', $global_static_field_data)); ?>

                            </a>
                        </div>
                    </div>
                    <!-- //end Logo -->


                    <!-- Search -->

                    <form class="col-lg-7 col-md-6 col-sm-5 d-flex new-nav"
                          action="<?php echo e(route('frontend.products.all')); ?>">
                        <select name="catagory" id="" style="border-radius: 0px;">
                            <option value="all catagory"><?php echo e(__('All Categories')); ?></option>
                            <?php
                                $slider_categories = getAllCategory()->take(9);
                            ?>
                            <?php $__currentLoopData = $slider_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="all catagory"><?php echo e($category->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                        <input type="text"
                               name="q"
                               id="search_form_input"
                               placeholder="<?php echo e(__('Search')); ?>..."
                               autocomplete="off"
                               class="w-50"
                               style="border-radius: 0px;">
                        <button type="submit" class="button-search btn btn-primary" name="search_form_input">
                            <i class="fa fa-search"></i>
                        </button>
                        <?php echo $__env->make('frontend.partials.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>

                    <!-- //end Search -->
                    <div class="middle-right col-lg-3 col-md-3 col-sm-3 new-nav-6">
                        <ul class="wishlist-comp hidden-md hidden-sm hidden-xs short-control">
                            <li>
                                <a href="<?php echo e(route('frontend.products.compare')); ?>">
                                    <i class="fal fa-exchange text-dark"
                                       style="padding-left: 10px;padding-top: 6px;"></i>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('frontend.products.wishlist')); ?>">
                                    <i class="fal fa-heart text-dark bg-white p-3 rounded-circle"
                                       style="font-size: large;"></i>
                                </a>
                            </li>
                            <li class="cart">
                                <span class="cart-badge" id="cart_badge">0</span>

                                <a href="<?php echo e(route('frontend.products.cart')); ?>">
                                    <i class="las la-shopping-bag ext-dark text-dark bg-white p-3 rounded-circle"
                                       style="font-size: large;"></i>
                                </a>
                                <div class="mini-cart-wrapper" id="top_minicart_container"></div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <!-- //Header center -->


        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="row">


                    <!-- Main menu -->
                    <!-- <div class="col-lg-2"></div> -->
                    <div class="main-menu-w col-lg-10 col-md-9">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="text-right navbar-header">
                                        <button id="show-megamenu" class="btn btn-info">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="megamenu-wrapper" id="show-2">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">


                                                    <?php echo render_frontend_menu($primary_menu); ?>



                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->

                    <div class="bottom3">

                        <div class="signin-w hidden-md hidden-sm hidden-xs">
                            <ul class="signin-link blank">
                                <li class="log login">
                                    <a class="link-lg" href="<?php echo e(route('user.login')); ?>">
                                        <i class="lar la-user icon"></i>
                                        <?php echo e(__('login')); ?>

                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </header>
</header>
<!--================= Header Section End Here =================-->
<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>