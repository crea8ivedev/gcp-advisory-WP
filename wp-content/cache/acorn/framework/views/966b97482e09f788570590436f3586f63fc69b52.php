<?php if($ServiceContentdata): ?>
    <?php $__currentLoopData = $ServiceContentdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($content->layout == 'simple_content'): ?>
            <?php echo $__env->make('partials.sections.service.simple_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'inner_banner'): ?>
            <?php echo $__env->make('partials.sections.service.inner_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'testimonial_slider'): ?>
            <?php echo $__env->make('partials.sections.service.testimonial_slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'cta_section'): ?>
            <?php echo $__env->make('partials.sections.service.cta_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'content_grid'): ?>
            <?php echo $__env->make('partials.sections.service.content_grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'form_section'): ?>
            <?php echo $__env->make('partials.sections.service.form_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/content-single-service.blade.php ENDPATH**/ ?>