<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class=" <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <?php if(!empty($content->description)): ?>
            <?php echo $content->description; ?>

        <?php endif; ?>

        <?php echo get_the_id(); ?>

    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/general_content.blade.php ENDPATH**/ ?>