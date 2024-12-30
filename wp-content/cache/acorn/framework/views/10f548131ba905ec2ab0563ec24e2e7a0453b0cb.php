<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class="relative py-40 bg-cream request-form <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <?php if(!empty($content->heading)): ?>
                <div class="title-green title-bold mb-20 1023:text-center fadeText">
                    <h3><?php echo $content->heading; ?></h3>
                </div>
            <?php endif; ?>
            <?php if(!empty($content->shortcode)): ?>
                <div class="request-form-inner fadeText">
                    <?php echo do_shortcode($content->shortcode); ?>

            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/industry/form_section.blade.php ENDPATH**/ ?>