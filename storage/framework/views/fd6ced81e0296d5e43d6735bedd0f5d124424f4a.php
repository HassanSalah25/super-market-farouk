$(document).on('click','#save',function () {
    $(this).addClass("disabled")
    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e(__("Saving")); ?>');
});<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/components/btn/save.blade.php ENDPATH**/ ?>