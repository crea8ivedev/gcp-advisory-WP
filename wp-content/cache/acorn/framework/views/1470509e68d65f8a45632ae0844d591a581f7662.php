<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="green-general-content py-40 lg:py-70 bg-green-200 text-center <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <?php if(!empty($content->heading)): ?>
                <div class="title title-white fadeText">
                    <h2><?php echo $content->heading; ?></h2>
                </div>
            <?php endif; ?>
            <?php if(!empty($content->description)): ?>
                <div class="content title-white pt-20 lg:max-w-[1400px] mx-auto fadeText">
                    <?php echo $content->description; ?>

                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/industry/cta_section.blade.php ENDPATH**/ ?>