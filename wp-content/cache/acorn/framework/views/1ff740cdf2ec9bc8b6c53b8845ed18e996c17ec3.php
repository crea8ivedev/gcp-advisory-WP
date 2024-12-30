<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <?php if($content->style == 'style_1'): ?>
        <?php
            $main_div = 'content big lg:max-w-[1312px] mx-auto text-center pt-20 fadeText';
        ?>
    <?php else: ?>
        <?php
            $main_div = 'content sub lg:max-w-[1312px] mx-auto text-center pt-20 fadeText';
        ?>
    <?php endif; ?>
    <section
        class="general-content pt-20 pb-40 xl2:pb-80 bg-white <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <?php if(!empty($content->image)): ?>
                <div class="general-conent-icon fadeText mx-auto w-[60px] h-[60px] lg:w-[80px] lg:h-[80px] xl2:w-[120px] xl2:h-[120px]">
                    <img class="mx-auto img-fluid" src="<?php echo $content->image['url']; ?>" alt="<?php echo $content->image['alt']; ?>" width="120"
                        height="120">
                </div>
            <?php endif; ?>
            <?php if(!empty($content->title)): ?>
                <div class="title title-green text-center pt-20 fadeText">
                    <h2><?php echo $content->title; ?></h2>
                </div>
            <?php endif; ?>
            <?php if(!empty($content->description)): ?>
                <div class="<?php echo $main_div; ?>">
                    <?php echo $content->description; ?>

                </div>
            <?php endif; ?>
            <?php if($content->style == 'style_2'): ?>
                <?php if(!empty($content->icon_grid)): ?>
                    <div
                        class="benefits-grid grid pt-[28px] grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[20px] lg:gap-[40px] lg:max-w-[1312px] mx-auto fadeText">
                        <?php $__currentLoopData = $content->icon_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon_grid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid-box text-center">
                                <?php if(!empty($icon_grid['icon'])): ?>
                                    <div class="benefits-icon w-[50px] h-[50px] xl2:w-[80px] xl2:h-[80px] mx-auto">
                                        <img class="img-fluid lozad" src="<?php echo $icon_grid['icon']['url']; ?>"
                                            alt="<?php echo $icon_grid['icon']['alt']; ?>" width="80" height="80">
                                    </div>
                                <?php endif; ?>
                                <div class="common-pattern mt-20 bg-green-200"></div>
                                <?php if(!empty($icon_grid['title'])): ?>
                                    <div class="benefits-title title-green title-nunito pt-20">
                                        <h4><?php echo $icon_grid['title']; ?></h4>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/industry/simple_content.blade.php ENDPATH**/ ?>