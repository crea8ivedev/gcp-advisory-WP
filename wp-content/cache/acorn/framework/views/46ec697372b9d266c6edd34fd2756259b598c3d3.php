<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="banner-wrapper inner-banner relative w-full bg-white <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <?php if(!empty($content->background_image)): ?>
            <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                <img src="<?php echo $content->background_image['url']; ?>" width="3024" height="1776" class="w-full h-full object-cover lozad"
                    alt="<?php echo $content->background_image['url']; ?>">
            </div>
        <?php endif; ?>
        <?php if(!empty($content->heading)): ?>
            <div class="banner-cta relative z-1 h-full">
                <div class="container-fluid-lg h-full">
                    <div class="content text-center h-full">
                        <div class="slider-content h-full flex justify-center items-center flex-col pt-[150px] pb-[100px] lg:pt-120 lg:pb-40">
                            <div class="title title-white title-uppercase fadeText">
                                <h1>
                                    <?php echo $content->heading; ?>

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="cmn-pattern w-full absolute bottom-[-1px] xl4:bottom-[-4px] right-0 left-0 z-1">
            
            <svg width="1512" height="70" viewBox="0 0 1512 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M756 0L1512 70H0L756 0Z" fill="white" />
            </svg>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/service/inner_banner.blade.php ENDPATH**/ ?>