<script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
<script>
    (function($){
    "use strict";
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 200,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            },
            callbacks: {
                onChange: function(contents, $editable) {
                    $(this).prev('input').val(contents);
                }
            }
        });
        if($('.summernote').length > 1){
            $('.summernote').each(function(index,value){
                $(this).summernote('code', $(this).data('content'));
            });
        }
    });
            
    })(jQuery);        
</script><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/components/summernote/js.blade.php ENDPATH**/ ?>