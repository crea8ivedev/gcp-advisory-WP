<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid-lg py-[40px] lg:py-[80px]">
        <div
            class="flex items-center gap-[30px] lg:gap-[55px] max-w-[1033px] mx-auto justify-center 1023:flex-col-reverse">
            <?php if(!empty($error_image)): ?>
                <div class="error404-image max-w-[500px] xl2:max-w-[646px]">
                    <img src="<?php echo $error_image['url']; ?>" class="lozad img-fluid" alt="<?php echo $error_image['alt']; ?>">
                </div>
            <?php endif; ?>
            <?php if(!have_posts()): ?>
                <?php if(!empty($error_heading)): ?>
                    <div class="error404-content flex-shrink-0 1023:text-center">
                        <div class="top-title fadeText ">
                            <div class="title big title-green mb-[20px] last:mb-0">
                                <h2><?php echo $error_heading; ?> </h2>
                            </div>
                            <?php if(!empty($error_description)): ?>
                                <div class="sub title-green title-capitalize title-darkpurle">
                                    <h3 class="h2"><?php echo $error_description; ?></h2>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/404.blade.php ENDPATH**/ ?>