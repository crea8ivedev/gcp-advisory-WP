<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>

    <section
        class="service-info-wrapper py-40 xl2:py-55 relative bubble_pattern <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <div class="title-content text-center fadeText">
                <?php if(!empty($content->heading)): ?>
                    <div class="title title-capitalize title-green">
                        <h2><?php echo $content->heading; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($content->description)): ?>
                    <div
                        class="content services-content pt-20 lg:max-w-[1000px] mx-auto shadow-card p-[28px] mt-20 bg-white rounded-10">
                        <?php echo $content->description; ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/service/cta_section.blade.php ENDPATH**/ ?>