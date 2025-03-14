

<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Navbar Global Variant Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('general-settings-global-navbar-settings')): ?>
        <div class="col-lg-12 col-ml-12 padding-bottom-30">
            <div class="row">
                <div class="col-12 mt-5">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.success','data' => []]); ?>
<?php $component->withName('msg.success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.error','data' => []]); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4"><?php echo e(__("Navbar Global Variant Settings")); ?></h4>
                            <form action="<?php echo e(route('admin.general.global.variant.navbar')); ?>" method="POST"
                                  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="global_navbar_variant"
                                                   value="<?php echo e(get_static_option('global_navbar_variant')); ?>"
                                                   name="global_navbar_variant">
                                        </div>
                                        <div class="row">
                                            <?php for($i = 1; $i <= 2; $i++): ?>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="img-select selected">
                                                        <div class="img-wrap">
                                                            <img src="<?php echo e(asset('assets/frontend/navbar-variant/0'.$i.'.jpg')); ?>"
                                                                 data-home_id="0<?php echo e($i); ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update"
                                        class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                let iconpicker_selector = '.icp-dd';
                $(iconpicker_selector).iconpicker();
                $(iconpicker_selector).on('iconpickerSelected', function (e) {
                    let selectedIcon = e.iconpickerValue;
                    $(this).parent().parent().children('input').val(selectedIcon);
                });

                $(document).on('click', '#update', function () {
                    $(this).addClass("disabled")
                    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e(__("Updating")); ?>');
                });

                //For Navbar
                let imgSelect = $('.img-select');
                let id = $('#global_navbar_variant').val();
                imgSelect.removeClass('selected');
                $('img[data-home_id="' + id + '"]').parent().parent().addClass('selected');
                $(document).on('click', '.img-select img', function (e) {
                    e.preventDefault();
                    imgSelect.removeClass('selected');
                    $(this).parent().parent().addClass('selected').siblings();
                    $('#global_navbar_variant').val($(this).data('home_id'));
                });
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/backend/general-settings/navbar-global-variant.blade.php ENDPATH**/ ?>