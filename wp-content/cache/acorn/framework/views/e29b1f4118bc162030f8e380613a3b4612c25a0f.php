<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class="green-general-content py-[28px] bg-green-200 text-center <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <?php if(!empty($content->heading)): ?>
            <div class="title title-white fadeText">
                <h2><?php echo $content->heading; ?></h2>
            </div>
            <?php endif; ?>
            <?php if(!empty($content->button)): ?>
            <div class="btn-custom pt-[16px] fadeText">
                <a href="<?php echo $content->button['url']; ?>" role="link" aria-label="<?php echo $content->button['title']; ?>" class="btn btn-green-100">
                    <?php echo $content->button['title']; ?>

                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/cta_section.blade.php ENDPATH**/ ?>