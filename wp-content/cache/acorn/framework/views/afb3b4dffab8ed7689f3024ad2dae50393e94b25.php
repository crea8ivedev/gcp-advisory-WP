<?php if($tsContentData): ?>
    <?php $section = '1'; ?>
    <?php $__currentLoopData = $tsContentData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($content->layout == 'banner'): ?>
            <?php echo $__env->make('partials.sections.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'simple_content'): ?>
            <?php echo $__env->make('partials.sections.simple_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'inner_banner'): ?>
            <?php echo $__env->make('partials.sections.inner_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'testimonial_slider'): ?>
            <?php echo $__env->make('partials.sections.testimonial_slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'cta_section'): ?>
            <?php echo $__env->make('partials.sections.cta_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'industries_grid'): ?>
            <?php echo $__env->make('partials.sections.industries_grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'people_grid'): ?>
            <?php echo $__env->make('partials.sections.people_grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'service_chart'): ?>
            <?php echo $__env->make('partials.sections.service_chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'form_section'): ?>
            <?php echo $__env->make('partials.sections.form_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'image_with_content'): ?>
            <?php echo $__env->make('partials.sections.image_with_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'career_listing'): ?>
            <?php echo $__env->make('partials.sections.career_listing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'icon_with_content'): ?>
            <?php echo $__env->make('partials.sections.icon_with_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'contact_form'): ?>
            <?php echo $__env->make('partials.sections.contact_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'contact_details'): ?>
            <?php echo $__env->make('partials.sections.contact_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'blog_listing'): ?>
            <?php echo $__env->make('partials.sections.blog_listing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'general_content'): ?>
            <?php echo $__env->make('partials.sections.general_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php $section++; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/content-ts.blade.php ENDPATH**/ ?>