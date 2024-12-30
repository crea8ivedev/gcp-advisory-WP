<?php
/*
Template Name: Archives
*/
?>



<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
      $search_banner_image = get_field('search_banner_image', 'option');
      $search_heading = get_field('search_heading', 'option');
      $form_title_option = get_field('form_title', 'option');
      $form_shortcode_option = get_field('form_shortcode', 'option');
    ?>
    <?php

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $posts_per_page = 9;
    $blog_arr = [];
    $post_arg = [
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'post_status' => 'publish',
        'orderby' => 'ID',
        'order' => 'ASC',
    ];
    $blog_post_query = new \WP_Query($post_arg);
    $blog_count_data = $blog_post_query->found_posts;
    if ($blog_post_query->have_posts()) {
        while ($blog_post_query->have_posts()):
            $blog_post_query->the_post();
            $fea_img = '';
            if (get_the_post_thumbnail_url()) {
                $fea_img = get_the_post_thumbnail_url();
            }
            if (!empty(get_the_excerpt())) {
$b_desc = wpautop(wp_trim_words(get_the_excerpt(), 20)); // Limit excerpt to 20 words
$b_desc_del = str_replace('&nbsp;', ' ', $b_desc); // Remove unnecessary spaces
} else {
$b_desc_del = ''; // Fallback if no excerpt is available
}

            $all_category_details = get_the_category(get_the_ID());
            $blog_arr[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'url' => get_the_permalink(),
                'fea_img' => $fea_img,
                'excerpt_desc' => $b_desc_del,
                'all_category_detail' => $all_category_details,
                'post_date' => get_the_date('M d, Y'),
                'post_author' => get_the_author(),
                'post_author_link' => get_author_posts_url(get_the_author_meta('ID')),
            ];
        endwhile;
        wp_reset_postdata();
        $total_pages = $blog_post_query->max_num_pages;
    }
?>
    <section class="banner-wrapper inner-banner relative w-full bg-white">
        <?php if(!empty($search_banner_image)): ?>
            <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                <img src="<?php echo $search_banner_image['url']; ?>" width="3024" height="1776" class="w-full h-full object-cover"
                    alt="<?php echo $search_banner_image['alt']; ?>">
            </div>
        <?php endif; ?>
        <div class="banner-cta relative z-1 h-full">
            <div class="container-fluid-lg h-full">
                <div class="content text-center h-full">
                    <div class="slider-content h-full flex justify-center items-center flex-col py-60">
                        <div class="title title-white title-uppercase">
                          <?php if(is_category()): ?>
                          <?php $activecategory = get_queried_object(); ?>
                          <h1>Category: <?php echo $activecategory->name; ?> </h1>
                          <?php elseif(is_author()): ?>
                          <?php $author_name = get_user_by('slug', get_query_var('author_name')); ?>
                          <h1>Author: <?php echo $author_name->display_name ?></h1>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cmn-pattern w-full absolute bottom-[-4px] right-0 left-0 z-1">
            <img src="<?= \Roots\asset('images/banner-pattern.png'); ?>" alt="pattern" class="w-full block object-contain h-full">
        </div>

    </section>
    <?php if($blog_arr): ?>
    <section class="blog-grid-wrapper pt-20 pb-70 ">
        <div class="container-fluid-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-[55px] lg:gap-y-10 gap-5">
                <?php $__currentLoopData = $blog_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="blog-item">
                        <div class="blog-img mb-20">
                            <?php if($blog_details['fea_img']): ?>
                                <img class="img-fluid" src="<?php echo $blog_details['fea_img']; ?>" class="w-full h-full object-cover"
                                    alt="<?php echo $blog_details['title']; ?>" width="360.67" height="260">
                            <?php else: ?>
                                <img class="img-fluid" src="<?= \Roots\asset('images/placeholder.jpg'); ?>" alt="<?php echo $blog_details['title']; ?>" width="360.67"
                                    height="260" class="rounded-100">
                            <?php endif; ?>
                        </div>
                        <div class="blog-content">
                            <span class="blog-pattern"></span>
                            <div class="blog-title title-green title-nunito">
                                <h3>
                                  <?php echo $blog_details['title']; ?>

                                </h3>
                            </div>
                            <ul class="blog-cate">
                                <li>
                                    <a href="<?php echo $blog_details['post_author_link']; ?>">
                                        <img src="<?= \Roots\asset('images/profile-fill.svg'); ?>" height="24" width="24"
                                            alt="profile">
                                            <?php echo $blog_details['post_author']; ?>

                                    </a>
                                </li>
                                <li>
                                    <span>
                                        <img src="<?= \Roots\asset('images/date-fill.svg'); ?>" height="24" width="24"
                                            alt="date">
                                            <?php echo $blog_details['post_date']; ?>

                                    </span>
                                </li>
                                <?php if($blog_details['all_category_detail']): ?>
                                      <?php $all_category_detail_length = count($blog_details['all_category_detail']); ?>
                                      <li>
                                      <span>
                                        <img src="<?= \Roots\asset('images/category-fill.svg'); ?>" height="24" width="24" alt="Category">
                                          <?php
                                              $blog_grid = '';
                                              foreach ($blog_details['all_category_detail'] as $key => $cate) {
                                                  $cat_link = get_category_link($cate->term_id);
                                                  $blog_grid .=
                                                      '<a href="' . $cat_link . '">' . $cate->name . '</a>';
                                                  if ($key !== $all_category_detail_length - 1) {
                                                      $blog_grid .= ', ';
                                                  }
                                          } ?>
                                          <?php echo $blog_grid; ?>

                                        </span>
                                      </li>
                                <?php endif; ?>
                            </ul>

                            <?php if($blog_details['excerpt_desc']): ?>
                            <div class="blog-desc sub">
                             <?php echo $blog_details['excerpt_desc']; ?>

                            </div>
                            <?php endif; ?>
                            <div class="blog-link">
                                <a href="<?php echo $blog_details['url']; ?>" class="btn btn-greenborder">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if($blog_count_data > 9): ?>
            <div
                class="flex flex-wrap items-center justify-center m-0 lg:mt-[48px] mt-40 p-0 w-full gap-6 lg:gap-12">
                <?php
                    $has_previous = $paged > 1;
                    $has_next = $paged < $total_pages;
                    $prev_button = $has_previous
                        ? '<div class="nav-previous btn btn-greenborder cursor-pointer"><a href="' .
                            get_pagenum_link($paged - 1) .
                            '" aria-label="Previous Page" class="btn btn-b-silver">Previous Page</a></div>'
                        : '';
                    $next_button = $has_next
                        ? '<div class="nav-next btn btn-green-300 cursor-pointer"><a href="' .
                            get_pagenum_link($paged + 1) .
                            '" aria-label="Next Page" class="btn btn-silver">Next Page</a></div>'
                        : '';
                ?>
                <?php echo $prev_button; ?>

                <?php echo $next_button; ?>

          </div>
          <?php endif; ?>
    </section>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/archive.blade.php ENDPATH**/ ?>