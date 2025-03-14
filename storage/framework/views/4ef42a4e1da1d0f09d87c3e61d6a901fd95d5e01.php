<!doctype html>
<html class="no-js" lang="<?php echo e(get_default_language()); ?>"  dir="<?php echo e(get_default_language_direction()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php echo e(get_static_option('site_title')); ?> -
        <?php if(request()->path() == 'admin-home'): ?>
            <?php echo e(get_static_option('site_tag_line')); ?>

        <?php else: ?>
            <?php echo $__env->yieldContent('site-title'); ?>
        <?php endif; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        $site_favicon = get_attachment_image_by_id(get_static_option('site_favicon'),"full",false);
    ?>
    <?php if(!empty($site_favicon)): ?>
        <link rel="icon" href="<?php echo e($site_favicon['img_url']); ?>" type="image/png">
        <?php echo render_favicon_by_id($site_favicon['img_url']); ?>

    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/toastr.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/metisMenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/slicknav.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/flaticon.css')); ?>">
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/typography.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/default-css.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/fontawesome-iconpicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/line-awesome.min-v1.3.0.css')); ?>">
    <script src="<?php echo e(asset('assets/frontend/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/common/js/jquery-migrate-3.3.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/js/jquery-ui.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/custom-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/flatpickr.min.css')); ?>">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php echo $__env->yieldContent('style'); ?>
    <?php if(get_static_option('site_admin_dark_mode') == 'on'): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dark-mode.css')); ?>">
    <?php endif; ?>
    <?php if( get_default_language_direction() === 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/rtl.css')); ?>">
    <?php endif; ?>

</head>

<body>
<!-- preloader area start -->
<?php if(!empty(get_static_option('admin_loader_animation'))): ?>
<div id="preloader">
    <div class="loader"></div>
</div>
<?php endif; ?>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <?php echo $__env->make('backend/partials/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- profile info & task notification -->
                <div class="col-md-6 col-sm-4 clearfix">
                    <ul class="notification-area pull-right">
                        <li ><label class="switch yes">
                            
                            <span class="slider-color-mode onff"></span>
                        </label></li>
                        <li id="full-view"><i class="ti-fullscreen"></i></li>
                        <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        <li><a class="btn <?php if(get_static_option('site_admin_dark_mode') == 'off'): ?>btn-primary <?php else: ?> btn-dark  <?php endif; ?>" target="_blank" href="<?php echo e(url('/')); ?>"><i class="fas fa-external-link-alt mr-1"></i>   <?php echo e(__('View Site')); ?> </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left"><?php echo $__env->yieldContent('site-title'); ?></h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="<?php echo e(route('admin.home')); ?>"><?php echo e(__('Home')); ?></a></li>
                            <li><span><?php echo $__env->yieldContent('site-title'); ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <?php
                        $admin = auth()->guard('admin')->user();
                        $profile_img = get_attachment_image_by_id($admin->image, null, true);
                        ?>
                        <?php if(!empty($profile_img)): ?>
                            <img class="avatar user-thumb" src="<?php echo e($profile_img['img_url']); ?>" alt="<?php echo e($admin->name); ?>">
                        <?php endif; ?>
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo e($admin->name); ?> <i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo e(route('admin.profile.update')); ?>"><?php echo e(__('Edit Profile')); ?></a>
                            <a class="dropdown-item" href="<?php echo e(route('admin.password.change')); ?>"><?php echo e(__('Password Change')); ?></a>
                            <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"><?php echo e(__('Logout')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        <div class="footer-area footer-wrap">
            <p>
                <?php echo render_footer_copyright_text(); ?>

            </p>
            <p class="version">v-<?php echo e(get_static_option('site_script_version','1.0.4')); ?></p>
        </div>
    </footer>
</div>

<script src="<?php echo e(asset('assets/common/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/sweetalert2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/jquery.slicknav.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/fontawesome-iconpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/common/js/toastr.min.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
<script src="<?php echo e(asset('assets/backend/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('assets/backend/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('assets/common/js/flatpickr.js')); ?>"></script>
<script>
    (function ($){
        "use strict";

        $('#reload').on('click', function(){
            location.reload();
        })
        $('#darkmode').on('click', function(){
           var el = $(this)
            var mode = el.data('mode')
            $.ajax({
                type:'GET',
                url:  '<?php echo e(route("admin.dark.mode.toggle")); ?>',
                data:{mode:mode},
                success: function(){
                    location.reload();
                },error: function(){
                }
            });
        });

        $(document).on('click','.swal_delete_button',function(e){
          e.preventDefault();
            Swal.fire({
              title: '<?php echo e(__("Are you sure?")); ?>',
              text: '<?php echo e(__("You would not be able to revert this item!")); ?>',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: "<?php echo e(__('Yes, Delete it!')); ?>"
            }).then((result) => {
              if (result.isConfirmed) {
                $(this).next().find('.swal_form_submit_btn').trigger('click');
              }
            });
        });

        $(document).on('click','.swal_change_language_button',function(e){
            e.preventDefault();
            Swal.fire({
                title: '<?php echo e(__("Are you sure to make this language as a default language?")); ?>',
                text: '<?php echo e(__("Languages will be turn changed as default")); ?>',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "<?php echo e(__('Yes, Change it!')); ?>"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).next().find('.swal_form_submit_btn').trigger('click');
                }
            });
        });

        $(document).on('click','.swal_change_approve_payment_button',function(e){
            e.preventDefault();
            Swal.fire({
                title: '<?php echo e(__("Are you sure to approve this payment?")); ?>',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText:"<?php echo e(__('Yes, Accept it!')); ?>"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).next().find('.swal_form_submit_btn').trigger('click');
                }
            });
        });

        $('input[name=countdown_time]').flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            altInput: true,
            altFormat: "F j, Y H:i",
        });

    })(jQuery);
</script>
</body>

</html>
<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/backend/admin-master.blade.php ENDPATH**/ ?>