<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('All Widgets')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/jquery-ui.min.css')); ?>">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.css','data' => []]); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-message','data' => []]); ?>
<?php $component->withName('error-message'); ?>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.flash-msg','data' => []]); ?>
<?php $component->withName('flash-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('All Widgets')); ?></h4>
                        <ul id="sortable_02" class="available-form-field all-widgets sortable_02">
                            <?php echo render_admin_panel_widgets_list(); ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="sidebar-list-wrap">
                    <?php echo get_admin_sidebar_list(); ?>

                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.js','data' => []]); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script src="<?php echo e(asset('assets/frontend/js/jquery-ui.min.js')); ?>"></script>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                let body_element = $('body');

                $(".sortable").sortable({
                    axis: "y",
                    placeholder: "sortable-placeholder",
                    receive: function (event, ui) {
                        resetOrder(this.id);
                    },
                    stop: function (event, ui) {
                        resetOrder(this.id);
                    }
                }).disableSelection();

                $(".sortable_02").sortable({
                    connectWith: '.sortable_widget_location',
                    helper: "clone",
                    remove: function (e, li) {
                        let Item = li.item.length > 0 ? li.item[0] : li.item;
                        let widgetName = Item.getAttribute('data-name');
                        let markup = '';
                        $.ajax({
                            'url': "<?php echo e(route('admin.widgets.markup')); ?>",
                            'type': "POST",
                            'data': {
                                '_token': "<?php echo csrf_token(); ?>",
                                'widget_name': widgetName,
                            },
                            async: false,
                            success: function (data) {
                                markup = data;
                            }
                        });
                        // markup += '</div>'; //end content div
                        li.item.clone()
                            .html(markup)
                            .insertAfter(li.item);
                        $(this).sortable('cancel');
                        return markup;
                    }
                }).disableSelection();

                body_element.on('click', '.remove-widget', function (e) {
                    $(this).parent().remove();
                    $(".sortable_02").sortable("refreshPositions");
                    let parent = $(this).parent();
                    let widgetType = parent.find('input[name="widget_type"]').val();
                    resetOrder();

                    if (widgetType === 'update') {
                        let widget_id = parent.find('input[name="id"]').val();
                        $.ajax({
                            'url': "<?php echo e(route('admin.widgets.delete')); ?>",
                            'type': "POST",
                            'data': {
                                '_token': "<?php echo csrf_token(); ?>",
                                'id': widget_id
                            },
                            success: function (data) {
                            }
                        });
                    }
                });

                body_element.on('click', '.expand', function (e) {
                    $(this).parent().find('.content-part').toggleClass('show');
                    let expand = $(this).children('i');
                    if (expand.hasClass('ti-angle-down')) {
                        expand.attr('class', 'ti-angle-up');
                    } else {
                        expand.attr('class', 'ti-angle-down');
                    }
                });

                body_element.on('click', '.widget_save_change_button', function (e) {
                    e.preventDefault();
                    let parent = $(this).parent().find('.widget_save_change_button');
                    parent.text('Saving...').attr('disabled', true);
                    let formClass = $(this).parent();
                    let formData = formClass.serializeArray();
                    let widgetType = $(this).parent().find('input[name="widget_type"]').val();
                    let formAction = $(this).parent().attr('action');
                    let updateId = '';
                    let formContainer = $(this).parent();

                    $.ajax({
                        type: "POST",
                        url: formAction,
                        data: formClass.serializeArray(),
                        success: function (data) {
                            updateId = data.id;
                            if (widgetType === 'new') {
                                formContainer.attr('action', "<?php echo e(route('admin.widgets.update')); ?>")
                                formContainer.find('input[name="widget_type"]').val('update');
                                formContainer.prepend('<input type="hidden" name="id" value="' + updateId + '">');
                            }
                        }
                    });
                    parent.text('saved..');
                    setTimeout(function () {
                        parent.text('Save Changes').attr('disabled', false);
                    }, 1000);
                });

                /**
                 * reset order function
                 **/
                function resetOrder(droppedOn) {
                    let allItems = $('#' + droppedOn + ' li');
                    $.each(allItems, function (index, value) {
                        $(this).find('input[name="widget_order"]').val(index + 1);
                        $(this).find('input[name="widget_location"]').val(droppedOn);
                        let id = $(this).find('input[name="id"]').val();
                        let widget_order = index + 1;
                        if (typeof id != 'undefined') {
                            reset_db_order(id, widget_order);
                        }
                    });
                }

                /**
                 * reorder function
                 **/
                function reset_db_order(id, widget_order) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(route('admin.widgets.update.order')); ?>",
                        data: {
                            _token: "<?php echo e(csrf_token()); ?>",
                            id: id,
                            widget_order: widget_order
                        },
                        success: function (data) {
                            //response ok if it saved success
                        }
                    });
                }
            });
            $(document).on('click', '.widget-area-expand', function (e) {
                e.preventDefault();
                let widget_body = $(this).parent().parent().find('.widget-area-body');
                widget_body.toggleClass('hide');
                let expand = $(this).children('i');
                if (expand.hasClass('ti-angle-down')) {
                    expand.attr('class', 'ti-angle-up');
                } else {
                    expand.attr('class', 'ti-angle-down');
                    let allWidgets = $(this).parent().parent().find('.widget-area-body ul li');
                    $.each(allWidgets, function (value) {
                        $(this).find('.content-part').removeClass('show');
                    });
                }
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/backend/widgets/widget-index.blade.php ENDPATH**/ ?>