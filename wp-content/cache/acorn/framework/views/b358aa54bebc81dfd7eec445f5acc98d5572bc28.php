<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class="our-team-wrapper py-40 xl2:py-70 relative <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <?php if(!empty($content->heading)): ?>
                <div class="title title-cairo title-capitalize title-green text-center fadeText">
                    <h2><?php echo $content->heading; ?></h2>
                </div>
            <?php endif; ?>
            <?php if(!empty($content->peoples_arr)): ?>
                <div class="team-grid flex-wrap gap-[20px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 pt-20 fadeText">
                    <?php $__currentLoopData = $content->peoples_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peoples_arr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="grid-box rounded-[20px] md:p-20 w-full flex flex-col">
                            <?php if(!empty($peoples_arr['fea_img'])): ?>
                                <div class="grid-img relative pt-[70%] xl2:pt-[95.97%]">
                                    <img class="img-ratio lozad" src="<?php echo $peoples_arr['fea_img']; ?>"
                                        alt="<?php echo $peoples_arr['alt_text']; ?>" width="360" height="260">
                                </div>
                            <?php endif; ?>
                            <div class="grid-content flex flex-col justify-between h-full">
                                <div class="grid-inner">
                                    <div class="common-pattern mt-[28px]"></div>
                                    <?php if(!empty($peoples_arr['title'])): ?>
                                        <div class="grid-title title-font title-nunito title-capitalize pt-10">
                                            <h3><?php echo $peoples_arr['title']; ?></h3>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($peoples_arr['designation'])): ?>
                                    <div class="title sub title-green title-capitalize pt-10">
                                        <h4><?php echo $peoples_arr['designation']; ?></h4>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="btn-custom pt-10">
                                    <a href="<?php echo $peoples_arr['url']; ?>" role="link" aria-label="Learn More"
                                        class="btn btn-greenborder">
                                        learn more
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/people_grid.blade.php ENDPATH**/ ?>