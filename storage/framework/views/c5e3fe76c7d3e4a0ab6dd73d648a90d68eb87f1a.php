<!--================= Featured Product Section Start Here =================-->
<div class="rts-featured-product-section3">
    <div class="container">
        <div class="rts-featured-product-section-inner">
            <div class="section-header section-header3 text-center">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="<?php echo e(asset('assets/frontend/assets/images/banner/wvbo-icon.png')); ?>" alt="">
                        <span class="sub-text"><?php echo e(__('Blogs')); ?></span>
                        <img class="line-2" src="<?php echo e(asset('assets/frontend/assets/images/banner/wvbo-icon.png')); ?>" alt="">
                    </div>
                    <h2 class="title"><?php echo e(__('Latest Blogs')); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-1">
                            <div class="image-part">
                                <a href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>" class="image">
                                <?php echo render_image_markup_by_attachment_id($blog->image, '', 'full', true); ?>

                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day"><?php echo e($blog->created_at->format('d')); ?></span>
                                <br>
                                <span class="month"><?php echo e($blog->created_at->format('M')); ?></span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>"><?php echo Str::limit(purify_html_raw($blog->title), 55); ?></a></li>
                                </ul>
                                <div class="title">
                                    <a href="<?php echo e(route('frontend.blog.single', $blog->slug)); ?>"><?php echo Str::limit(purify_html_raw($blog->blog_content), 104); ?></a>
                                </div>






                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div>
<!--================= Featured Product Section End Here =================-->
<?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/blogs/blog_slider_one.blade.php ENDPATH**/ ?>