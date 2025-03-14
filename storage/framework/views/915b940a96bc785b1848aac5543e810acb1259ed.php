<?php if(!empty(get_static_option('site_gdpr_cookie_enabled'))): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/jquery.ihavecookies.css')); ?>">
    <script src="<?php echo e(asset('assets/frontend/js/jquery.ihavecookies.min.js')); ?>"></script>
    <?php $gdpr_cookie_link = str_replace('{url}',url('/'),get_static_option('site_gdpr_cookie_more_info_link')) ?>
    <script>
        $(document).ready(function () {
            var delayTime = "<?php echo e(get_static_option('site_gdpr_cookie_delay')); ?>";
            delayTime = delayTime ? delayTime : 4000;

            $('body').ihavecookies({
                title: "<?php echo e(get_static_option('site_gdpr_cookie_title')); ?>",
                message: "<?php echo e(get_static_option('site_gdpr_cookie_message')); ?>",
                expires: "<?php echo e(get_static_option('site_gdpr_cookie_expire')); ?>",
                link: "<?php echo e($gdpr_cookie_link); ?>",
                delay: delayTime,
                moreInfoLabel: "<?php echo e(get_static_option('site_gdpr_cookie_more_info_label')); ?>",
                acceptBtnLabel: "<?php echo e(get_static_option('site_gdpr_cookie_accept_button_label')); ?>",
                advancedBtnLabel: "<?php echo e(get_static_option('site_gdpr_cookie_decline_button_label')); ?>"
            });
            $('body').on('click', '#gdpr-cookie-close', function (e) {
                e.preventDefault();
                $(this).parent().remove();
            });
        });
    </script>
<?php endif; ?><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/frontend/partials/gdpr-cookie.blade.php ENDPATH**/ ?>