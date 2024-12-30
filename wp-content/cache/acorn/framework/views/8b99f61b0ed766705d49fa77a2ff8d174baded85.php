<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="banner-wrapper relative h-screen w-full bg-white <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <?php if($content->image_or_video == 'image'): ?>
            <div class="swiper banner-slider h-full">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $content->banner_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <?php if(!empty($banner_slider['image'])): ?>
                                <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                                    <img class="full h-full object-cover lozad" src="<?php echo $banner_slider['image']['url']; ?>"
                                        alt="<?php echo $banner_slider['image']['alt']; ?>" width="3024" height="1776" />
                                </div>
                            <?php endif; ?>
                            <div class="banner-cta relative z-1">
                                <div class="container-fluid-lg">
                                    <div class="content text-center h-full">
                                        <div class="slider-content h-full flex justify-center items-center flex-col">
                                            <?php if(!empty($banner_slider['heading'])): ?>
                                                <div class="title title-white title-uppercase fadeText">
                                                    <h1><?php echo $banner_slider['heading']; ?></h1>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(!empty($banner_slider['sub_heading'])): ?>
                                                <div class="sub-title sub pt-10 fadeText">
                                                    <h2><?php echo $banner_slider['sub_heading']; ?>

                                                    </h2>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(!empty($banner_slider['button'])): ?>
                                                <div class="slider-content btn-custom pt-40 fadeText">
                                                    <a href="<?php echo $banner_slider['button']['url']; ?>"
                                                        <?php if($banner_slider['button']['target']): ?> target="<?php echo $banner_slider['button']['target']; ?>" <?php else: ?> target="_self" <?php endif; ?>
                                                        class="btn btn btn-green-300" role="link"
                                                        aria-label="book an appointment"><?php echo $banner_slider['button']['title']; ?></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="swiper-pagination !bottom-[80px] lg:!bottom-[160px] global-pagination"></div>
            </div>
        <?php else: ?>
            <div class="video-wrapper relative h-screen anim">
                <?php if(!empty($content->video)): ?>
                    <div class="absolute w-full h-full">
                        <video id="video" autoplay muted preload="metadata" class="w-full h-full object-cover">
                            <source src="<?php echo $content->video['url']; ?>" type="video/mp4">
                        </video>
                    </div>
                <?php endif; ?>
                <?php if(!empty($content->heading)): ?>
                    <div
                        class="banner-details h-full w-full flex flex-wrap items-center justify-center relative z-1 anim-item">
                        <div class="container-fluid-lg">
                            <div class="content anim-up 1023:text-center">
                                <div class="title title-white font-700 uppercase big mb-10 lg:mb-40 last:mb-0 fadeText">
                                    <h1>
                                        <?php echo $content->heading; ?>

                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="cmn-pattern w-full absolute bottom-[-1px] xl4:bottom-[-4px] right-0 left-0 z-1">
            <svg width="1512" height="70" viewBox="0 0 1512 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M756 0L1512 70H0L756 0Z" fill="white" />
            </svg>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/banner.blade.php ENDPATH**/ ?>