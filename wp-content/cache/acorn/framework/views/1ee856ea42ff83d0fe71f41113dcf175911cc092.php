<?php
$blog_single_banner = get_field('blog_single_banner', 'option');
$blog_single_title = get_field('blog_single_title', 'option');
?>

<section class="banner-wrapper inner-banner relative w-full bg-white "">
    <?php if(!empty($blog_single_banner)): ?>
        <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
            <img src="<?php echo $blog_single_banner['url']; ?>" width="3024" height="1776" class="w-full h-full object-cover lozad"
                alt="<?php echo $blog_single_banner['url']; ?>">
        </div>
    <?php endif; ?>
    <?php if(!empty($blog_single_title)): ?>
        <div class="banner-cta relative z-1 h-full">
            <div class="container-fluid-lg h-full">
                <div class="content text-center h-full">
                    <div class="slider-content h-full flex justify-center lg:justify-end items-center flex-col pt-[150px] pb-[100px] xl2:pt-120 xl2:pb-[130px]">
                        <div class="title title-white title-uppercase fadeText">
                            <h1>
                                <?php echo $blog_single_title; ?>

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

<article <?php (post_class('blog-single-wrapper text-center h-entry py-55')); ?>>
    <div class="container-fluid-lg">
        <div class="nav-previous btn btn-green-300 mb-60 lg:mb-55 !flex justify-start w-fit">
            <a class="cursor-pointer" href="<?php echo e(site_url('/news')); ?>">Back to News</a>
        </div>
        <header>
            <div class="max-w-[912px] mx-auto">
                <?php
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $featured_image_id = get_post_thumbnail_id(get_the_ID());
                    $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                ?>
                <img src="<?php echo $featured_image_url; ?>" class="lozad"  alt="<?php echo e($featured_image_alt); ?>" width="912" height="395">
                <h2 class="p-name title-green pt-20">
                    <?php echo $title; ?>

                </h2>

                <?php echo $__env->make('partials.entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>

        <div class="e-content max-w-[912px] mx-auto">
            <?php (the_content()); ?>
          </div>
          <nav class="post-navigation bg-lightestblue">
              <div class="main-nav pt-55 flex items-center justify-between border-0">
                  <?php if(get_previous_post_link()): ?>
                      <div class="nav-previous btn btn-greenborder cursor-pointer">
                          <?php echo e(previous_post_link('%link', 'Previous Blog')); ?>

                      </div>
                  <?php endif; ?>
                  <?php if(get_next_post_link()): ?>
                      <div class="nav-next btn btn-green-300 cursor-pointer">
                          <?php echo e(next_post_link('%link', 'Next Blog')); ?>

                      </div>
                  <?php endif; ?>
              </div>
          </nav>

        <footer>
            <?php echo wp_link_pages([
                'echo' => 0,
                'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
                'after' => '</p></nav>',
            ]); ?>

        </footer>

        
        
    </div>
</article>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/content-single.blade.php ENDPATH**/ ?>