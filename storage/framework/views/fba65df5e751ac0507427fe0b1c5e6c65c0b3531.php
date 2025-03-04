<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopPush(); ?>

<div class="container page-builder-ltr">
    <div class="row row_xoa6 row-style">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 col_c7gu col-style">

            <div id="so_categories_14984588431735724573"
                 class="so-categories module theme3 custom-slidercates preset01-6 preset02-5 preset03-4 preset04-3 preset05-1">
                <div class="head-title">
                    <h3 class="modtitle"><span><?php echo e(__('Shop by Collections')); ?></span></h3>
                </div>

                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $category_route = route('frontend.products.category', [
                                    'id' => optional($category)->id,
                                    'slug' => \Str::slug(optional($category)->title ?? '')
                                ]);
                                ?>
                            <div class="content-box zoomIn item-<?php echo e($loop->iteration); ?>">
                                <div class="image-cat">
                                    <a href="<?php echo e($category_route); ?>"
                                       title="<?php echo e(html_entity_decode(optional($category)->title)); ?>" target="_self">

                                        <?php echo render_image_markup_by_attachment_id($category->image); ?>

                                    </a>
                                </div>
                                <div class="cat-content">
                                    <div class="cat-title">
                                        <a href="<?php echo e($category_route); ?>"
                                           title="<?php echo e(html_entity_decode(optional($category)->title)); ?> " target="_self">
                                            <?php echo e(html_entity_decode(optional($category)->title)); ?>

                                        </a>
                                    </div>

                                    <a class="viewall hidden"
                                       href="<?php echo e($category_route); ?>"
                                       title="Show now" target="_self">
                                        <?php echo e(__('Show now')); ?>

                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- <div class="clr1"></div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->startPush('scripts'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        // slider categories
        jQuery(document).ready(function($) {
            var slidercate = $(".cat-wrap");
            slidercate.owlCarousel({
                margin: 30,
                nav: true,
                loop: true,
                dots: false,
                navText: ['', ''],
                responsive: {
                    0: {
                        items: 2
                    },
                    480: {
                        items: 2
                    },
                    768: {
                        items: 4
                    },
                    992: {
                        items: 5
                    },
                    1200: {
                        items: 7
                    },
                },
            })
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Administrator\Local Sites\el-farouk-ecommerce\app\public\@core\app\Providers/../PageBuilder/views/category/category_slider_three.blade.php ENDPATH**/ ?>