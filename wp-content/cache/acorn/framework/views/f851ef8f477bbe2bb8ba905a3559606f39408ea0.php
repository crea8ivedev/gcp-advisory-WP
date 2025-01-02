<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="benefits-grid-wrapper py-40 xl2:py-70 relative <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?> "
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <div class="title-content text-center">
                <?php if(!empty($content->title)): ?>
                    <div class="title title-capitalize title-green fadeText">
                        <h2><?php echo $content->title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($content->sub_title)): ?>
                    <div class="content pt-20 fadeText">
                        <p><?php echo $content->sub_title; ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($content->icon_grid)): ?>
                <div
                    class="benefits-grid grid pt-40 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-[55px] lg:gap-y-[40px] fadeText">
                    <?php $__currentLoopData = $content->icon_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon_grid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="grid-box text-center">
                            <?php if(!empty($icon_grid['icon'])): ?>
                                <div class="benefits-icon w-[50px] h-[50px] xxl:w-[80px] xxl:h-[80px]">
                                    <img class="img-fluid lozad" src="<?php echo $icon_grid['icon']['url']; ?>"
                                        alt="<?php echo $icon_grid['icon']['alt']; ?>" width="80" height="80">
                                </div>
                            <?php endif; ?>
                            <div class="common-pattern mt-20"></div>
                            <?php if(!empty($icon_grid['heading'])): ?>
                                <div class="benefits-title title-green title-nunito pt-20">
                                    <h4><?php echo $icon_grid['heading']; ?></h4>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($icon_grid['description'])): ?>
                                <div class="content pt-10">
                                    <?php echo $icon_grid['description']; ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/icon_with_content.blade.php ENDPATH**/ ?>