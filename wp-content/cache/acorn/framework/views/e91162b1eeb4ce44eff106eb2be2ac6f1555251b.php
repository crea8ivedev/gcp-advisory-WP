<?php
    $banner_image = get_field('banner_image', get_the_id());
    $banner_title = get_field('banner_title', get_the_id());
    $designation = get_field('designation', get_the_id());
    $form_title = get_field('form_title', get_the_id());
    $form_shortcode = get_field('form_shortcode', get_the_id());
    $content = get_the_content(get_the_id());
    $information_grid = get_field('information_grid', get_the_id());
    $heading = get_the_title(get_the_id());
    $featured_image_id = get_post_thumbnail_id(get_the_ID());
    $featured_image_url = wp_get_attachment_image_url($featured_image_id, 'full');
    $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
    $form_title_option = get_field('form_title', 'option');
    $form_shortcode_option = get_field('form_shortcode', 'option');
?>
<section class="banner-wrapper inner-banner relative w-full bg-white">
    <?php if(!empty($banner_image)): ?>
        <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
            <img src="<?php echo $banner_image['url']; ?>" width="3024" height="1776" class="w-full h-full object-cover lozad"
                alt="<?php echo $banner_image['url']; ?>">
        </div>
    <?php endif; ?>
    <?php if(!empty($banner_title)): ?>
        <div class="banner-cta relative z-1 h-full">
            <div class="container-fluid-lg h-full">
                <div class="content text-center h-full">
                    <div class="slider-content h-full flex justify-center lg:justify-end items-center flex-col pt-[150px] pb-[100px] xl2:pt-120 xl2:pb-[130px]">
                        <div class="title title-white title-uppercase fadeText">
                            <h1>
                                <?php echo $banner_title; ?>

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

<section class="zigzag-wrapper py-40 xl2:py-70 relative">
    <div class="container-fluid-lg">
        <div class="flex items-center gap-[40px] xxxl:gap-[100px] 1023:flex-wrap">
            <?php if(!empty($featured_image_url)): ?>
                <div class="w-full lg:w-[55%]">
                    <div class="zigzag-img relative pt-[65.84%] h-full fadeText">
                        <img class="img-ratio lozad" src="<?php echo $featured_image_url; ?>" alt="<?php echo $featured_image_alt; ?>"
                            width="644" height="424">
                    </div>
                </div>
            <?php endif; ?>
            <div class="w-full lg:w-[45%]">
                <div class="zigzag-content">
                    <div class="title-content">
                        <?php if(!empty($heading)): ?>
                            <div class="title title-capitalize title-green flex items-center gap-[20px] fadeText">
                                <h2><?php echo $heading; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($designation)): ?>
                            <div class="subtitle title-green title-nunito fadeText">
                                <h3><?php echo $designation; ?></h3>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($content)): ?>
                            <div class="content pt-20 fadeText">
                                <?php echo $content; ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(!empty($information_grid)): ?>
    <section class="roles-responsibility-wrapper py-40 xl2:py-70 bg-green-200 relative">
        <div class="container-fluid-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] xxxl:gap-[55px] fadeText">
                <?php $__currentLoopData = $information_grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="content title-white title-bold white-list text-center">
                        <h3><?php echo $information['heading']; ?></h3>
                        <?php echo $information['points']; ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="zigzag-form zigzag-wrapper zigzag-pattern relative py-40 xl2:py-70 text-center">
  <div class="title title-capitalize title-green flex items-center gap-[20px] fadeText justify-center pb-40">
    <h2>
      <?php if(!empty($form_title)): ?>
          <?php echo $form_title; ?>

      <?php endif; ?>
    </h2>
  </div>
    <?php if(!empty($form_shortcode)): ?>
        <?php echo do_shortcode($form_shortcode); ?>

    <?php endif; ?>
</section>

<section class="relative py-40 bg-cream request-form">
    <div class="container-fluid-lg">
        <?php if(!empty($form_title_option)): ?>
            <div class="title-green title-bold mb-20 1023:text-center fadeText">
                <h3><?php echo $form_title_option; ?></h3>
            </div>
        <?php endif; ?>
        <?php if(!empty($form_shortcode_option)): ?>
            <div class="request-form-inner fadeText">
                <?php echo do_shortcode($form_shortcode_option); ?>

        <?php endif; ?>
    </div>
</section>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/content-single-career.blade.php ENDPATH**/ ?>