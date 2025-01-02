<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <?php if($content->style == 'style_1'): ?>
        <?php
            $bg_color = 'bubble_pattern';
        ?>
    <?php else: ?>
        <?php
            $bg_color = '';
        ?>
    <?php endif; ?>
    <section
        class="our-industries-wrapper pt-20 <?php echo $bg_color; ?> relative <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="industries-content relative z-1">
            <?php if($content->style == 'style_2'): ?>
                <div class="container-fluid-lg">
                    <?php if(!empty($content->image)): ?>
                        <div
                            class="general-conent-icon fadeText mx-auto w-[60px] h-[60px] lg:w-[80px] lg:h-[80px] xl2:w-[120px] xl2:h-[120px]">
                            <img class="mx-auto img-fluid" src="<?php echo $content->image['url']; ?>" alt="<?php echo $content->image['alt']; ?>"
                                width="120" height="120">
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($content->heading)): ?>
                        <div class="title title-green text-center fadeText pt-20">
                            <h2><?php echo $content->heading; ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <?php if(!empty($content->heading)): ?>
                    <div class="title title-green text-center fadeText pt-20">
                        <h2><?php echo $content->heading; ?></h2>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($content->industries_arr)): ?>
                <div
                    class="industries-grid !mt-40 swiper industries-slider flex pt-40 !pb-40 xl2:!pb-70 !px-20 md:!px-55 lg:!px-[100px]">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $content->industries_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industries_arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="grid-box bg-white rounded-[20px] shadow-card p-20 text-center">
                                    <?php if(!empty($industries_arr['fea_img'])): ?>
                                        <div class="grid-img relative pt-[50%] xl2:pt-[72.22%] fadeText">
                                            <a href="<?php echo $industries_arr['url']; ?>" role="link" aria-label="Learn More">
                                                <img class="img-ratio lozad" src="<?php echo $industries_arr['fea_img']; ?>"
                                                    alt="<?php echo $industries_arr['alt_text']; ?>" width="360" height="260">
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="common-pattern mt-20 mx-auto fadeText"></div>
                                    <?php if(!empty($industries_arr['title'])): ?>
                                        <div
                                            class="grid-title title-green title-nunito title-capitalize pt-20 fadeText">
                                            <a href="<?php echo $industries_arr['url']; ?>" role="link" aria-label="Learn More">
                                                <h3><?php echo $industries_arr['title']; ?></h3>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($content->style == 'style_1'): ?>
                                        <div class="btn-custom pt-20 fadeText">
                                            <a href="<?php echo $industries_arr['url']; ?>" role="link" aria-label="Learn More"
                                                class="btn btn-greenborder">
                                                learn more
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-pagination !bottom-0 global-pagination"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/industries_grid.blade.php ENDPATH**/ ?>