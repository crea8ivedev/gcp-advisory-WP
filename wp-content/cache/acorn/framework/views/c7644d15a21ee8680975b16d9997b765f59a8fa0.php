<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
      $search_banner_image = get_field('search_banner_image', 'option');
      $search_heading = get_field('search_heading', 'option');

      $args = [
          's' => get_query_var('s'),
          'post_type' => ['post', 'page'],
          'post_status' => 'publish',
          'orderby' => 'publish_date',
          'order' => 'DESC',
          'posts_per_page' => -1,
      ];
      $search_query = new WP_Query($args);
      $count_data = $search_query->found_posts;
      $form_title_option = get_field('form_title', 'option');
      $form_shortcode_option = get_field('form_shortcode', 'option');
    ?>
    <section class="banner-wrapper inner-banner relative w-full bg-white">
        <?php if(!empty($search_banner_image)): ?>
            <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                <img src="<?php echo $search_banner_image['url']; ?>" width="3024" height="1776" class="w-full h-full object-cover"
                    alt="<?php echo $search_banner_image['alt']; ?>">
            </div>
        <?php endif; ?>
        <?php if(!empty($search_heading)): ?>
            <div class="banner-cta relative z-1 h-full">
                <div class="container-fluid-lg h-full">
                    <div class="content text-center h-full">
                        <div class="slider-content h-full flex justify-end items-center flex-col pt-[150px] pb-[100px] lg:pt-120 lg:pb-[150px]">
                            <div class="title title-white title-uppercase">
                                <h1>
                                    <?php echo $search_heading; ?>

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="cmn-pattern w-full absolute bottom-[-4px] right-0 left-0 z-1">
            <img src="<?= \Roots\asset('images/banner-pattern.png'); ?>" alt="pattern" class="w-full block object-contain h-full">
        </div>

    </section>
    <?php if($search_query->have_posts()): ?>
        <section class="search-grid-wrapper py-70 relative">
            <div class="industries-content relative z-1">
                <div class="container-fluid-lg">
                    <div class="search-box flex items-center justify-end">
                      <form class="w-full md:w-4/12 block" action="<?php echo home_url(); ?>" role="search" method="get">
                        <div class="search-box-inner lg:py-40 py-20">
                          <label for="search" class="block w-0 h-0" style="visibility: hidden;">Name</label>
                          <input type="text" id="search" name="s" placeholder="Search..." class="">
                        </div>
                    </form>
                    </div>
                    <div
                        class="search-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-y-[40px] lg:gap-x-[55px]">
                        <?php while(have_posts()): ?>
                            <?php (the_post()); ?>
                            <div class="grid-box bg-white rounded-[20px] shadow-card p-20 text-center">
                                <div class="grid-img relative pt-[72.22%]">
                                    <?php if(!empty(get_the_post_thumbnail_url())): ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="360" height="260"
                                            class="img-ratio lozad" alt="<?php echo get_the_title(); ?>">
                                    <?php else: ?>
                                        <img src="<?= \Roots\asset('images/placeholder.jpg'); ?>" width="360" height="260" class="img-ratio lozad"
                                            alt="<?php echo get_the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="common-pattern mt-20 mx-auto"></div>
                                <?php if(get_the_title()): ?>
                                    <div class="grid-title title-green title-nunito title-capitalize pt-20">
                                        <h3><?php echo get_the_title(); ?></h3>
                                    </div>
                                <?php endif; ?>
                                <div class="content pt-20">
                                    <?php if(!empty(get_the_excerpt())): ?>
                                        <?php
                                        $b_desc = wpautop(wp_trim_words(get_the_excerpt(), 20));
                                        $b_desc_del = str_replace('&nbsp;', ' ', $b_desc);
                                        ?>
                                        <?php echo $b_desc_del; ?>

                                    <?php endif; ?>
                                </div>
                                <?php if(!empty(get_the_permalink())): ?>
                                    <div class="btn-custom pt-20">
                                        <a href="<?php echo get_the_permalink(); ?>" role="link" aria-label="read more"
                                            class="btn btn-greenborder">
                                            read more
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <div class="search-page w-full py-70 1023:py-40">
            <div class="container-fluid-lg">
                  <div class="search-box flex items-center justify-end">
                    <form class="w-full md:w-4/12 block" action="<?php echo home_url(); ?>" role="search" method="get">
                      <div class="search-box-inner lg:py-40 py-20">
                        <label for="search" class="block w-0 h-0" style="visibility: hidden;">Name</label>
                        <input type="text" id="search" name="s" placeholder="Search..." class="">
                      </div>
                    </form>
                  </div>
                  <div class="content global-list text-center mb-20">
                    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'warning']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => '']); ?>
                        <h3 class="text-font"><?php echo __('Sorry, no results were found.', 'sage'); ?></h3>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
                  </div>
                  <div class="btn-custom text-center">
                    <a href="<?php echo e(site_url()); ?>" class="btn btn-greenborder">
                        Go Home
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/search.blade.php ENDPATH**/ ?>