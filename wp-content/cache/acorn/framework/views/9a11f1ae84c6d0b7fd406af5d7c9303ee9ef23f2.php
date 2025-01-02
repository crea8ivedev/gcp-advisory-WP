<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="service-wrapper py-40 xl2:py-70 relative <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <div class="hidden lg:flex service-desktop">
                <?php if(!empty($content->image)): ?>
                    <div class="w-full lg:w-8/12 fadeText">
                        <div class="service-img relative">
                            <img class="img-fluid" src="<?php echo $content->image['url']; ?>" alt="<?php echo $content->image['alt']; ?>">
                            <div
                                class="title-green title-cairo absolute top-[50%] -translate-x-1/2 -translate-y-1/2 left-[30%] w-fit">
                                <?php if(!empty($content->heading)): ?>
                                    <h2>
                                        <?php echo $content->heading; ?>

                                    </h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(!empty($content->services)): ?>
                    <div class="w-full lg:w-4/12">
                        <div class="services-inner h-full flex flex-col justify-between">
                            <?php $__currentLoopData = $content->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="services title-nunito fadeText">
                                    <h3><?php echo $services['service']; ?></h3>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="service-slider hidden 1023:block">
                <?php if(!empty($content->heading)): ?>
                    <div class="title title-cairo title-green pb-40 text-center fadeText">
                        <h2><?php echo $content->heading; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($content->services)): ?>
                    <div class="swiper service-mobile-slider items-center !pb-70">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $content->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="services title-nunito fadeText">
                                        <h3><?php echo $services['service']; ?></h3>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="swiper-pagination !bottom-0 global-pagination"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/service_chart.blade.php ENDPATH**/ ?>