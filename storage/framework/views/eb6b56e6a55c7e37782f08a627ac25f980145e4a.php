<script>
    $(document).on('click','.all-field-wrap .action-wrap .add',function (e){
        e.preventDefault();

        var el = $(this);
        var parent = el.parent().parent();
        var container = $('.all-field-wrap');
        var clonedData = parent.clone();
        var containerLength = container.length;
        clonedData.find('#myTab').attr('id','mytab_'+containerLength);
        clonedData.find('#myTabContent').attr('id','myTabContent_'+containerLength);
        var allTab =  clonedData.find('.tab-pane');
        allTab.each(function (index,value){
            var el = $(this);
            var oldId = el.attr('id');
            el.attr('id',oldId+containerLength);
        });
        var allTabNav =  clonedData.find('.nav-link');
        allTabNav.each(function (index,value){
            var el = $(this);
            var oldId = el.attr('href');
            el.attr('href',oldId+containerLength);
        });

        parent.parent().append(clonedData);

        if (containerLength > 0){
            parent.parent().find('.remove').show(300);
        }
        parent.parent().find('.iconpicker-popover').remove();
        parent.parent().find('.icp-dd').iconpicker();

    });

    $(document).on('click','.all-field-wrap .action-wrap .remove',function (e){
        e.preventDefault();
        var el = $(this);
        var parent = el.parent().parent();
        var container = $('.all-field-wrap');

        if (container.length > 1){
            el.show(300);
            parent.hide(300);
            parent.remove();
        }else{
            el.hide(300);
        }
    });
</script><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\resources\views/components/repeater.blade.php ENDPATH**/ ?>